# 📘 **README – API GraphQL de Usuarios con Laravel + Lighthouse**

Este proyecto muestra una **implementación básica de GraphQL** en Laravel utilizando el paquete **Lighthouse**.
Incluye un endpoint GraphQL funcional y una interfaz GraphiQL para realizar consultas y pruebas.

---

## 🚀 **Tecnologías utilizadas**

* **Laravel 11**
* **Lighthouse (GraphQL Server)**
* **GraphiQL (interfaz web para ejecutar consultas GraphQL)**

---

## 📦 **Instalación**

1. Clonar el repositorio (o crear proyecto Laravel):

   ```bash
   composer create-project laravel/laravel graphql-users
   ```

2. Instalar Lighthouse:

   ```bash
   composer require nuwave/lighthouse
   ```

3. Instalar GraphiQL como interfaz web:

   ```bash
   composer require mll-lab/laravel-graphiql
   ```

4. Arrancar el servidor:

   ```bash
   php artisan serve
   ```

---

## 🔗 **Endpoints Importantes**

| Función           | URL                              | Descripción                        |
| ----------------- | -------------------------------- | ---------------------------------- |
| Endpoint GraphQL  | `http://127.0.0.1:8000/graphql`  | Aquí se envían queries y mutations |
| Interfaz GraphiQL | `http://127.0.0.1:8000/graphiql` | UI para probar consultas           |

---


## 🧪 **Consultas de Ejemplo**

### 🔍 Obtener todos los usuarios

```graphql
query {
  users {
    id
    name
    email
  }
}
```

### 🔍 Obtener un usuario por ID

```graphql
query {
  user(id: 2) {
    id
    name
    email
  }
}
```

---




