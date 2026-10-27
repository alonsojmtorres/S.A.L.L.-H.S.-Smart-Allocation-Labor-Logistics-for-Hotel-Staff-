# Proyecto: S.A.L.L. H.S. (Smart Allocation Labor Logistics for Hotel Staff)

## Descripción del Proyecto
S.A.L.L. H.S. es una aplicación web para la gestión logística y asignación inteligente de tareas del personal hotelero (recepción, limpieza/camareras de pisos y mantenimiento). Permite gestionar eventos (Check-in/Check-out), asignar tareas en tiempo real y registrar los tiempos de ejecución desde dispositivos móviles/PDA.

## Stack Tecnológico
- **Backend:** PHP 8.2+ / Laravel 11
- **Base de Datos:** MySQL / MariaDB (vía XAMPP, puerto 3306, base de datos `sall_hs_db`)
- **Frontend:** Blade Templates, Tailwind CSS / Bootstrap, JavaScript (Alpine.js / Vanilla JS)
- **Control de Versiones:** Git / GitHub

## Estructura Principal del Proyecto
- `app/Models/`: Modelos de Eloquent (`User`, `Space`, `Event`, `Task`, `TimeLog`).
- `app/Http/Controllers/`: Controladores de la lógica de negocio.
- `database/migrations/`: Migraciones de la base de datos.
- `resources/views/`: Plantillas Blade para escritorio y vista móvil/PDA.
- `routes/web.php` y `routes/api.php`: Rutas del sistema.

## Convenciones de Código y Variables (¡IMPORTANTE!)
1. **Idioma de Variables y Nombres:**
   - Todos los nombres de variables, propiedades y campos de base de datos deben estar en **español** (ej. `$nombre_usuario`, `$tipo_espacio`, `$hora_inicio`, `$duracion_minutos`).
   - Los nombres de clases, modelos y métodos siguen las convenciones de Laravel en inglés/estándar (`TaskController`, `space()`, `timeLogs()`).

2. **Base de Datos y Modelos:**
   - Respetar siempre las claves foráneas (`foreign keys`) y las relaciones de Eloquent (`belongsTo`, `hasMany`).
   - Usar campos `ENUM` para estados (ej. `$estado`: `'Pendiente'`, `'En Proceso'`, `'Completada'`).

## Reglas de Trabajo para el Agente (AI Guidelines)
- **No modificar archivos críticos** (`.env`, `config/database.php`, `composer.json`) sin confirmación previa del usuario.
- **Antes de crear una migración o controlador**, verifica si ya existe o si se requiere ajustar uno existente.
- **Comentarios en el código:** Añade comentarios explicativos brevemente en español sobre el propósito de cada método o bloque de lógica complejo.
- **Explicación de cambios:** Explica siempre las modificaciones realizadas en 1 o 2 frases concisas al finalizar la tarea.