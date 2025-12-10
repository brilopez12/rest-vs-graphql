# 📘 Actividad Users: REST API + GraphQL en Laravel

Este proyecto demuestra dos formas de exponer datos en Laravel:
**una API REST tradicional** y **una API GraphQL usando Lighthouse**.
El objetivo es comparar ambas tecnologías de manera práctica.

---

## 🚀 Tecnologías

* Laravel 11
* REST API (controladores + rutas)
* GraphQL (Lighthouse)
* GraphiQL (interfaz de pruebas)

---

## 📦 Instalación

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

---

## 🔗 Endpoints Principales

### ⭐ API REST

| Método | URL          | Descripción              |
| ------ | ------------ | ------------------------ |
| GET    | `/api/users` | Lista todos los usuarios |
| POST   | `/api/users` | Crea un usuario          |

**Body para POST:**

```json
{
  "name": "Ana",
  "email": "ana@test.com",
  "password": "123456"
}
```

---

### ⭐ GraphQL

| Función           | URL                              |
| ----------------- | -------------------------------- |
| Endpoint GraphQL  | `http://127.0.0.1:8000/graphql`  |
| Interfaz GraphiQL | `http://127.0.0.1:8000/graphiql` |

**Query ejemplo:**

```graphql
query {
  users {
    id
    name
    email
  }
}
```

---

## 🎯 Objetivo del Proyecto

Mostrar de forma clara y sencilla cómo funcionan:

* Una API REST con controladores y endpoints fijos.
* Una API GraphQL donde el cliente define qué datos necesita.

Ideal para exposiciones y demostraciones técnicas.

---
