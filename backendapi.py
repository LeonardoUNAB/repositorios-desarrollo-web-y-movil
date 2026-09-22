from fastapi import FastAPI

app = FastAPI(title="Backend Mock API")

@app.get("/productos")
async def obtener_productos():
    return [
        {"id": 1, "nombre": "Procesador Intel Core i9-12900K", "stock": 4},
        {"id": 2, "nombre": "Tarjeta Gráfica RTX 3090 Ti", "stock": 2}
    ]

@app.get("/pedidos")
async def obtener_pedidos():
    return [
        {"id_pedido": 101, "cliente": "Claudio", "estado": "En camino"},
        {"id_pedido": 102, "cliente": "Leonardo", "estado": "Procesando"}
    ]