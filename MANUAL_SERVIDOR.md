# 🚀 Manual de Configuración del Servidor - SuperPlus24

Este documento detalla los pasos necesarios para instalar el proyecto desde cero y asegurar que la optimización de imágenes (WebP) y las mejoras de rendimiento funcionen correctamente en tu servidor de DigitalOcean.

---

## 🚀 1. Instalación Inicial (Git y Dependencias)

Ejecuta estos comandos para bajar el código y preparar el entorno:

```bash
# Clonar y entrar al proyecto
git clone https://github.com/OscarHdzMtz/superplus24.git
cd superplus24

# Instalar dependencias
composer install --no-dev --optimize-autoloader
npm install && npm run build
```

---

## 🔐 2. Configuración de Permisos (Escritura de Imágenes)

Es vital que el servidor web pueda escribir en las carpetas de imágenes y caché:

```bash
# Permisos para storage, cache y subida de imágenes
sudo chown -R www-data:www-data storage bootstrap/cache public/img/
sudo chmod -R 775 storage bootstrap/cache public/img/
```

---

## 🛠 3. Configuración del Servidor (PHP)

El servidor debe tener instalada la extensión **GD** con soporte para WebP.

### Paso A: Instalar la extensión GD
Ejecuta los siguientes comandos vía SSH en tu servidor:

```bash
# Actualiza los repositorios
sudo apt update

# Instala la extensión (Asegúrate de cambiar 8.2 por tu versión activa de PHP)
sudo apt install php8.2-gd
```

### Paso B: Verificar la instalación
```bash
php -i | grep -i webp
```
Deberías ver: `WebP Support => enabled`.

### Paso C: Reiniciar servicios
```bash
sudo systemctl restart php8.2-fpm
```

---

## 🖼 2. Migración de Imágenes Existentes

Una vez subido el código, convierte tus imágenes actuales:

```bash
php artisan images:optimize
```
> [!NOTE]
> Este comando buscará todas las imágenes PNG/JPG en la base de datos, las convertirá a `.webp` y actualizará automáticamente las tablas.

---

## ⚡ 3. Limpieza de Caché Final

Para reflejar los cambios de inmediato:

```bash
php artisan optimize
php artisan cache:clear
```

---

## ❓ Preguntas Frecuentes

### ¿Qué pasa con los nuevos archivos PNG que suban los usuarios?
El sistema los convertirá automáticamente a **WebP** antes de guardarlos. Tú no tienes que hacer nada manual.

### ¿Dónde se guardan las imágenes?
En sus carpetas originales dentro de `public/img/`, pero con extensión `.webp`.
