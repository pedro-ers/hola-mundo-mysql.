# Aplicación Web Hola Mundo con PHP, MySQL y Docker Compose

## Descripción

Esta práctica consiste en desarrollar y ejecutar una aplicación web sencilla que muestra un mensaje de **Hola Mundo** y se conecta a una base de datos MySQL utilizando Docker Compose.

La aplicación está desarrollada en PHP y utiliza Apache como servidor web. Tanto la aplicación como la base de datos se ejecutan en contenedores independientes.

## Objetivos

- Crear una aplicación web utilizando PHP.
- Configurar un servidor de aplicación con Apache.
- Crear un servicio de base de datos MySQL.
- Establecer una conexión entre PHP y MySQL.
- Utilizar Docker Compose para administrar múltiples servicios.
- Publicar el proyecto en un repositorio de GitHub.

## Tecnologías utilizadas

- PHP 8.3
- Apache
- MySQL 8.4
- Docker
- Docker Compose
- Git y GitHub

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

## Configuración de los servicios

El archivo `docker-compose.yml` define dos servicios principales:

- **app:** ejecuta PHP con Apache y publica la aplicación en el puerto `8081` del equipo local.
- **db:** ejecuta MySQL 8.4 y crea la base de datos `hola_mundo`.

La aplicación utiliza el nombre del servicio `db` para conectarse a MySQL a través de la red interna de Docker.

El código fuente se monta en el contenedor de Apache y los datos de MySQL se almacenan en un volumen persistente.

## Ejecución del proyecto

### Requisitos previos

Tener Docker Desktop instalado y en ejecución.

### 1. Iniciar los servicios

Desde la carpeta raíz del proyecto, ejecutar:

```bash
docker compose up -d --build
```

### 2. Verificar los contenedores

```bash
docker compose ps
```

Los servicios `app` y `db` deben encontrarse en funcionamiento.

### 3. Acceder a la aplicación

Abrir el siguiente enlace en el navegador:

**http://localhost:8081**

La aplicación mostrará el mensaje Hola Mundo y confirmará la conexión con MySQL mediante una consulta SQL que obtiene la fecha y hora del servidor de base de datos.

### 4. Consultar los registros

Para revisar los registros de la aplicación:

```bash
docker compose logs app
```

Para revisar los registros de MySQL:

```bash
docker compose logs db
```

### 5. Detener los servicios

```bash
docker compose down
```

Este comando elimina los contenedores, pero conserva los datos almacenados en el volumen de MySQL.

## Resultado esperado

Al acceder a `http://localhost:8081`, se visualizará una página web con el mensaje **¡Hola Mundo!**, una confirmación de conexión exitosa a MySQL y la fecha y hora obtenidas mediante una consulta SQL.

## Autor

Pedro Rosario

## Repositorio

[Ver proyecto en GitHub](https://github.com/pedro-ers/hola-mundo-mysql)