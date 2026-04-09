# Página Oficial de SuperPlus

**SuperPlus24** es una **Landing Page informativa** diseñada para mostrar las **Promociones** disponibles, servicios, **Facturación**, información sobre la empresa (**Nosotros**), etc...

## 🚀 Tecnologías Utilizadas

- **Framework:** [Laravel 10](https://laravel.com/)
- **Frontend Interactivo:** [Livewire 3](https://livewire.laravel.com/)
- **Autenticación y Perfiles:** [Jetstream](https://jetstream.laravel.com/) (Fortify/Sanctum)
- **Base de Datos:** MySQL / MariaDB
- **Estilos:** CSS / JavaScript (Vite)
- **Otras librerías:** Guzzle, Laravel Collective, Milon Barcode.

## 📋 Requisitos del Sistema

- PHP >= 8.1
- Composer
- Node.js & NPM
- Servidor de Base de Datos (MySQL/MariaDB)

## 🛠️ Instalación

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/OscarHdzMtz/superplus24.git
   cd superplus24
   ```

2. **Instalar dependencias de PHP:**
   ```bash
   composer install
   ```

3. **Instalar y compilar dependencias de Frontend:**
   ```bash
   npm install
   npm run build
   ```

4. **Configurar el entorno:**
   - Copia el archivo de ejemplo: `cp .env.example .env`
   - Configura tus credenciales de base de datos en el archivo `.env`.
   - Genera la llave de la aplicación: `php artisan key:generate`

5. **Migraciones y Seeders:**
   ```bash
   php artisan migrate --seed
   ```

6. **Lanzar el servidor local:**
   ```bash
   php artisan serve
   ```

## 🔐 Seguridad

El sistema incluye:
- Autenticación segura.
- Gestión de Roles y Permisos.
- Verificación de Dos Pasos (2FA) integrada.

## 📄 Licencia

Este proyecto es propiedad privada de **SuperPlus24**. Todos los derechos reservados.
