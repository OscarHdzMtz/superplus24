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

## 🛠️ Instalación en Servidor (DigitalOcean)

Para desplegar el proyecto en un servidor Ubuntu con Apache:

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/OscarHdzMtz/superplus24.git
   cd superplus24
   ```

2. **Instalar dependencias de PHP y Frontend:**
   ```bash
   composer install --no-dev --optimize-autoloader
   npm install && npm run build
   ```

3. **Configurar el entorno:**
   - Crear archivo `.env` y configurar base de datos.
   - Generar llave: `php artisan key:generate`

4. **Configurar Permisos (Crucial):**
   ```bash
   sudo chown -R www-data:www-data storage bootstrap/cache public/img/
   sudo chmod -R 775 storage bootstrap/cache public/img/
   ```

5. **Optimización Inicial:**
   ```bash
   php artisan images:optimize
   php artisan optimize
   php artisan cache:clear
   ```

## 🔐 Seguridad

El sistema incluye:
- Autenticación segura.
- Gestión de Roles y Permisos.
- Verificación de Dos Pasos (2FA) integrada.

## 📄 Licencia

Este proyecto es propiedad privada de **SuperPlus24**. Todos los derechos reservados.
