# Hola Mundo con MySQL

Aplicación web desarrollada con PHP y MySQL, utilizando Docker Compose para ejecutar los servicios en contenedores.

## Tecnologías

- PHP 8.3
- Apache
- MySQL 8.4
- Docker
- Docker Compose

## Requisitos

- Docker Desktop instalado y en ejecución.
- Git, para clonar el repositorio.

## Cómo ejecutar el proyecto

1. Clona el repositorio.
2. Abre una terminal en la carpeta del proyecto.
3. Ejecuta:

   ```bash
   docker compose up --build -d
   ```

4. Abre en el navegador:

   http://localhost:8081

La aplicación consulta la base de datos MySQL y muestra el mensaje de bienvenida.

## Detener los servicios

```bash
docker compose down
```

## Estructura del proyecto

```text
hola-mundo-mysql/
├── src/
│   └── index.php
├── Dockerfile
├── docker-compose.yml
├── .gitignore
└── README.md
```
