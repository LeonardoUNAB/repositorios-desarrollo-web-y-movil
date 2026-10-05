import os
import secrets


from fastapi import (
    FastAPI, 
    Header, 
    HTTPException,  
    Depends
)

app = FastAPI(
    title= "Backend API juegos",
    description= "API ubicada en localhost enrutada por API Gateway"
)

INTERNAL_GATEWAY_SECRET= os.getenv(
    "INTERNAL_GATEWAY_SECRET"
)

if not INTERNAL_GATEWAY_SECRET:
    raise RuntimeError(
        "INTERNAL_GATEWAY_SECRET NO ESTA CONFIGURADO"
    )

def verify_gateway(
    x_gateway_secret: str = Header(default="")
):
    valid = secrets.compare_digest(
        x_gateway_secret,
        INTERNAL_GATEWAY_SECRET
    )
    if not valid:
        raise HTTPException(
            status_code=403,
            detail="Solicitud no autorizada desde gateway"
        )

@app.get(
    "/health",
    dependencies=[Depends(verify_gateway)]
)
def health():
    return{
        "status": "OK",
        "service": "Backend API Juegos"
    }


@app.get(
        "/productos",
        dependencies=[Depends(verify_gateway)]      
)
def productos():
    return {
        "products": [
            {
                "id": 1,
                "nombre": "MK1",
                "desarollador": "Netherrealm.",
                "editor": "Warner Bros.",
                "fecha": "19-09-2023",
                "precio": 45000
            },
            {
                "id": 2,
                "nombre": "Bully.",
                "desarollador": "Rockstar",
                "editor":"Rockstar",
                "fecha": "17-10-2006",
                "precio": 8990,
            },
            {
                "id": 3,
                "nombre": "LittleBigPlanet 2",
                "desarollador": "MediaMolecule",
                "editor": "MediaMolecule",
                "fecha": "18-01-2011",
                "precio": 21000
            },
        ]    
    }

@app.get(
        "/pedidos",
        dependencies=Depends[verify_gateway])
def pedidos():
    return {
        "pedidos": [
            {"id": 1001, "status": "paid"},
            {"id": 1002, "stauts": "pending"}
        ]
    }