from fastapi import FastAPI
import httpx

app = FastAPI(

    title= "Local API Gateway"

)



BACKEND_URL = "http://localhost:9000"



@app.get("/api/productos")

async def products():
    async with httpx.AsyncClient() as client:
        response = await client.get(
            f"{BACKEND_URL}/productos"
        )

    return response.json()

@app.get("/api/pedidos")

async def orders():
    async with httpx.AsyncClient() as client:
        response = await client.get(
            f"{BACKEND_URL}/pedidos"
        )

    return response.json()