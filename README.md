# VoidChat

VoidChat es un proyecto experimental de chat web desarrollado con Laravel.

La idea es construir una plataforma de comunicación simple, ligera y fácil de desplegar, priorizando la funcionalidad sobre la complejidad. El proyecto nació como una prueba para aprender y experimentar con Laravel, Eloquent, SQLite y comunicaciones en tiempo real.

## Estado actual

### Funcionalidades implementadas

* Laravel 12
* Base de datos SQLite
* Gestión de salas (Rooms)
* Sala inicial: `Nothing`
* Persistencia de mensajes
* Envío de mensajes mediante formularios
* Actualización automática mediante polling
* Interfaz web en modo oscuro
* Acceso remoto mediante ngrok
* Soporte para múltiples usuarios sin autenticación

## Estructura actual

### Rooms

Las salas representan espacios de conversación.

Ejemplo:

* Nothing

### Messages

Cada mensaje contiene:

* Sala asociada
* Nombre de usuario
* Contenido del mensaje
* Fecha de creación

## Filosofía del proyecto

VoidChat sigue algunas reglas simples:

* Funcionalidad antes que estética.
* Dependencias mínimas.
* Despliegue sencillo.
* Base de datos ligera.
* Sin complejidad innecesaria.
* El modo oscuro es obligatorio.

## Roadmap

### Próximamente

* Persistencia de nombre de usuario mediante LocalStorage.
* Scroll automático.
* Timestamps visibles.
* Mejoras visuales básicas.
* Múltiples salas.
* Perfiles de usuario.

### Futuro

* Autenticación opcional.
* WebSockets para tiempo real.
* Notificaciones de escritura.
* Estados de entrega y lectura.
* Adjuntos.
* Administración de salas.

## Desarrollo

Clonar repositorio:

```bash
git clone https://github.com/lordxer0/VoidChat.git
cd VoidChat
```

Instalar dependencias:

```bash
composer install
```

Configurar entorno:

```bash
cp .env.example .env
php artisan key:generate
```

Crear base de datos SQLite:

```bash
touch database/database.sqlite
```

Ejecutar migraciones y semillas:

```bash
php artisan migrate --seed
```

Iniciar servidor:

```bash
php artisan serve
```

## Primera conversación registrada

```text
Byron: Hola vacío
```

## Licencia

Proyecto experimental desarrollado con fines educativos, recreativos y de aprendizaje.

---

"No mires fijamente al vacío, o este te devolverá la mirada."
