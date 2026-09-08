const express = require('express');
const { ApolloServer, gql } = require('apollo-server-express');
const mongoose = require('mongoose');
const cors = require('cors');

// Importamos el modelo (el contenedor) que acabas de crear
const Producto = require('./models/producto');

// 1. EL MENÚ DEL MESERO (typeDefs): 
// Aquí le decimos al sistema qué forma tienen los datos y qué operaciones están permitidas.
const typeDefs = gql`
    type Producto {
        id: ID!
        nombre: String!
        categoria: String!
        precio: Float!
        descripcion: String
    }

    type Alert {
        message: String
    }

    input ProductoInput {
        nombre: String!
        categoria: String!
        precio: Float!
        descripcion: String
    }

    # Peticiones para LEER datos (Queries)
    type Query {
        getProductos: [Producto]
        getProductoById(id: ID!): Producto
    }

    # Peticiones para MODIFICAR o CREAR datos (Mutations)
    type Mutation {
        addProducto(input: ProductoInput): Producto
        updProducto(id: ID!, input: ProductoInput): Producto
        delProducto(id: ID!): Alert
    }
`;

// 2. LAS INSTRUCCIONES DEL MESERO (Resolvers):
// Aquí le decimos cómo ir a la base de datos (MongoDB) para cumplir lo que dice el menú.
const resolvers = {
    Query: {
        getProductos: async () => {
            return await Producto.find(); // Va a la BD y trae todos
        },
        getProductoById: async (obj, { id }) => {
            const productoBus = await Producto.findById(id); // Busca uno por su ID
            if (productoBus == null) {
                return null;
            } else {
                return productoBus;
            }
        }
    },
    Mutation: {
        addProducto: async (obj, { input }) => {
            const nuevoProducto = new Producto(input); // Crea un producto nuevo
            return await nuevoProducto.save(); // Lo guarda en la BD
        },
        updProducto: async (obj, { id, input }) => {
            return await Producto.findByIdAndUpdate(id, input, { new: true }); // Lo actualiza
        },
        delProducto: async (obj, { id }) => {
            await Producto.findByIdAndDelete(id); // Lo borra
            return { message: "Producto eliminado correctamente" };
        }
    }
};

// 3. INICIAR EL RESTAURANTE (El Servidor)
async function iniciarServidor() {
    const app = express();
    app.use(cors());

    // Conexión a la base de datos MongoDB local
    await mongoose.connect('mongodb://127.0.0.1:27017/nikkei_roll_db');

    // Preparamos a nuestro mesero (ApolloServer) dándole el menú y las instrucciones
    const server = new ApolloServer({ typeDefs, resolvers });
    await server.start();
    
    server.applyMiddleware({ app });

    // Encendemos el servidor en el puerto 4000
    app.listen(4000, () => {
        console.log('Graphql Iniciado en http://localhost:4000' + server.graphqlPath);
    });
}

iniciarServidor();