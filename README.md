# 📚 Gestor Académico - Laravel

Sistema de gestión académica desarrollado en Laravel 12 que permite administrar estudiantes y profesores de manera eficiente mediante operaciones CRUD completas.

## 🎯 Funcionalidad del Proyecto

Este proyecto es un **Gestor Académico** que ofrece las siguientes características:

### Gestión de Estudiantes
- ✅ **Crear** nuevos estudiantes con información completa
- 📖 **Visualizar** lista de todos los estudiantes
- ✏️ **Editar** información de estudiantes existentes
- 🗑️ **Eliminar** registros de estudiantes

**Campos del estudiante:**
- Nombre
- Apellido
- Email (único)
- Teléfono
- Fecha de nacimiento

### Gestión de Profesores
- ✅ **Crear** nuevos profesores
- 📖 **Visualizar** lista de todos los profesores
- ✏️ **Editar** información de profesores existentes
- 🗑️ **Eliminar** registros de profesores

**Campos del profesor:**
- Nombre
- Apellido
- Email (único)
- Departamento

## 🛠️ Tecnologías Utilizadas

- **Framework:** Laravel 12.x
- **PHP:** 8.2 o superior
- **Base de datos:** MySQL (vía MAMP)
- **Autenticación:** Laravel Sanctum
- **Frontend:** Blade Templates

## 📋 Requisitos Previos

- PHP 8.2 o superior
- Composer
- MAMP (para servidor MySQL y Apache)
- Git

## ⚙️ Instalación y Configuración

### 1. Clonar el repositorio

```bash
git clone https://github.com/tu-usuario/CRUD-en-Laravel.git
cd CRUD-en-Laravel/Gestor_Academico_Laravel
```

### 2. Instalar dependencias

```bash
composer install
```

### 3. Configurar el archivo .env

Copia el archivo de ejemplo y configura tus credenciales de base de datos:

```bash
cp .env.example .env
```

Edita el archivo `.env` con la configuración de MAMP:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=gestor_academico
DB_USERNAME=root
DB_PASSWORD=root
```

### 4. Generar la clave de la aplicación

```bash
php artisan key:generate
```

### 5. Crear la base de datos

Asegúrate de tener MAMP iniciado y crea una base de datos llamada `gestor_academico` desde phpMyAdmin.

### 6. Ejecutar las migraciones

Este comando creará todas las tablas necesarias en la base de datos:

```bash
php artisan migrate
```

### 7. Poblar la base de datos (opcional)

Para agregar datos de prueba a la base de datos:

```bash
php artisan db:seed
```

O si deseas ejecutar un seeder específico:

```bash
php artisan db:seed --class=EstudianteSeeder
php artisan db:seed --class=ProfesorSeeder
```

## 🚀 Iniciar el Proyecto

Para iniciar el servidor de desarrollo de Laravel:

```bash
php artisan serve
```

El servidor se iniciará por defecto en `http://127.0.0.1:8000`

Si deseas usar un puerto diferente:

```bash
php artisan serve --port=8080
```

## 📝 Comandos Útiles de Artisan

### Migraciones

```bash
# Ejecutar todas las migraciones
php artisan migrate

# Revertir la última migración
php artisan migrate:rollback

# Revertir todas las migraciones
php artisan migrate:reset

# Revertir y re-ejecutar todas las migraciones
php artisan migrate:refresh

# Revertir, re-ejecutar migraciones y seeders
php artisan migrate:refresh --seed

# Ver el estado de las migraciones
php artisan migrate:status
```

### Seeders

```bash
# Ejecutar todos los seeders
php artisan db:seed

# Ejecutar un seeder específico
php artisan db:seed --class=NombreDelSeeder

# Refrescar la base de datos con seeders
php artisan migrate:fresh --seed
```

### Servidor

```bash
# Iniciar servidor de desarrollo
php artisan serve

# Iniciar en un host y puerto específico
php artisan serve --host=192.168.1.10 --port=8080
```

### Otros comandos útiles

```bash
# Limpiar caché de la aplicación
php artisan cache:clear

# Limpiar caché de configuración
php artisan config:clear

# Limpiar caché de rutas
php artisan route:clear

# Ver todas las rutas de la aplicación
php artisan route:list
```

## 🗂️ Estructura del Proyecto

```
Gestor_Academico_Laravel/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── EstudianteController.php
│   │       └── ProfesorController.php
│   └── Models/
│       ├── Estudiante.php
│       └── Profesor.php
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── resources/
│   └── views/
│       ├── estudiantes/
│       └── profesores/
└── routes/
    ├── web.php
    └── api.php
```

## 🔒 Importante

**⚠️ Este proyecto está configurado para funcionar con MAMP, NO con Docker.**

Asegúrate de:
1. Tener MAMP instalado y corriendo
2. Configurar correctamente el puerto de MySQL (por defecto 8889 en MAMP)
3. Crear la base de datos antes de ejecutar las migraciones

## 📸 Capturas de Pantalla

*(Aquí puedes agregar capturas de pantalla de tu aplicación)*

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Por favor:

1. Haz un Fork del proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add: nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto es de código abierto y está disponible bajo la Licencia MIT.

## 👤 Autor

**Alex**

## 📞 Contacto

Si tienes alguna pregunta o sugerencia, no dudes en contactarme.

---

⭐️ Si este proyecto te fue útil, considera darle una estrella en GitHub
