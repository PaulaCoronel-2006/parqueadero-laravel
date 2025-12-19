<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CRUD con Laravel


# Tarea - Desarrollo en Plataformas

Estudiante: Paula Coronel

Fecha:19 de diciembre de 2025

Paralelo: 3

## Introducción

Este proyecto consiste en el desarrollo de una aplicación web para la gestión de un parqueadero denominada "ParkingExpress". El objetivo principal fue implementar un sistema **CRUD** completo utilizando el framework **Laravel**, permitiendo el registro, visualización, edición y eliminación de vehículos de manera eficiente.

## Objetivos

1. Dominar el flujo de trabajo profesional:** Configurar un entorno de desarrollo utilizando **Laravel Herd** y establecer el control de versiones con GitHub.
2. Implementar la arquitectura MVC: Desarrollar la lógica de negocio mediante la creación de modelos, controladores y migraciones para organizar la estructura del proyecto.
3. Construir una interfaz funcional: Diseñar vistas responsivas con el motor de plantillas **Blade** y **Bootstrap** para facilitar la interacción del usuario.


## Mis Decisiones de Diseño
### 1. Tabla

Nombre de la tabla: `vehiculos` 

| Campo           | Tipo                 | ¿Obligatorio? |
| ---             | ---                  | ---           |
|     id          | ID (Auto-increment)  | Sí            |
|     placa       | String (10)          | Sí            |
|     tipo        | String (20)          | Sí            |
|   propietario   | String (100)         | No (Nullable) |
|   observaciones | Text / String        | No (Nullable) |
|   created_at    | Timestamp            | Sí            |
|   updated_at    | Timestamp            | Sí            |


### 2. Tipos de vehículo

Para estandarizar la entrada de datos, se definieron los siguientes tipos en el formulario de registro:
- Automóvil
- Motocicleta
- Camioneta

### 3. ¿Se puede eliminar registros?

Si se puede eliminar registros ya que se implementó una acción de eliminación con confirmación para permitir la limpieza de registros obsoletos o erróneos en el sistema.


## Comandos Principales Utilizados

- Creación de Modelo y Controlador:** `php artisan make model Vehiculo -mcr` 

- Ejecución de Migraciones:** `php artisan migrate` 

- Limpieza de Caché:** `php artisan view:clear`

## Paso 1: Crear Repositorio en GitHub  
<img width="1889" height="945" alt="imagen1" src="https://github.com/user-attachments/assets/efdedc88-9e9c-424a-a4b4-92dfbcbaca51" />

## Paso 2: Crear el Proyecto con Laravel Herd
<img width="1087" height="681" alt="imagen2" src="https://github.com/user-attachments/assets/8d1fda03-f245-4bb1-8f61-bf9fb6992efc" />

## Paso 4: Crear Migración, Modelo y Controlador
<img width="1013" height="232" alt="imagen3" src="https://github.com/user-attachments/assets/5281a933-5feb-4f5b-bbbc-e640288f4350" />

## Paso 5: Crear vistas
<img width="887" height="313" alt="imagen4" src="https://github.com/user-attachments/assets/069222c1-2578-47df-ae37-6fe3e6b0ac39" />

## Paso 6: Pantalla
<img width="835" height="461" alt="5" src="https://github.com/user-attachments/assets/32c9f7c1-f2f1-4c97-8a29-45055eaa7dc8" />
<img width="1688" height="806" alt="6" src="https://github.com/user-attachments/assets/ee61ac56-c5e6-4d4d-8664-36ddd3c49144" />
<img width="1682" height="632" alt="7" src="https://github.com/user-attachments/assets/9d345d11-6ed1-4b70-ae35-6bfe4c3cffd6" />
<img width="629" height="775" alt="8" src="https://github.com/user-attachments/assets/fedd096b-6c01-4052-b1ce-3ad00c415e17" />
<img width="1694" height="605" alt="9" src="https://github.com/user-attachments/assets/2d5796d4-68d5-4a08-89e8-57b796c097d9" />
<img width="750" height="553" alt="10" src="https://github.com/user-attachments/assets/021e4a86-30e1-4224-9abb-0ed6896ac7d3" />
<img width="693" height="783" alt="11" src="https://github.com/user-attachments/assets/839e738c-98c0-4d3e-b97b-519adcab36d5" />
