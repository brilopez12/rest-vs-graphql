# 📌 API REST de Usuarios – Laravel

Este proyecto es una API REST básica construida con Laravel para gestionar usuarios.
Incluye dos endpoints principales:

* **GET /api/users** → Listar usuarios
* **POST /api/users** → Crear usuario


## 🚀 Requisitos

* PHP 8+
* Composer
* Laravel 10+
* MySQL / SQLite
* Postman o Thunder Client para probar

---

## 📦 Instalación

1. Clonar el repositorio:

2. Instalar dependencias:

   ```bash
   composer install
   ```

3. Crear archivo `.env`:

   ```bash
   cp .env.example .env
   ```

4. Generar la key:

   ```bash
   php artisan key:generate
   ```

5. Configurar la base de datos en `.env`

6. Ejecutar migraciones:

   ```bash
   php artisan migrate
   ```

7. Iniciar el servidor:

   ```bash
   php artisan serve
   ```

---

# 📌 **Endpoints de la API**

## 1️⃣ Obtener todos los usuarios

**URL:**

```
GET http://127.0.0.1:8000/api/users
```

## 2️⃣ Crear un usuario

**URL:**

```
POST http://127.0.0.1:8000/api/users
```

**Body JSON:**

```json
{
  "name": "Nombre",
  "email": "Nombre@example.com",
  "password": "123456"
}
