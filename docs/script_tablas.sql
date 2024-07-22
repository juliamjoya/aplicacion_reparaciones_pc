-- Creacion de la base de datos
CREATE DATABASE app_reparaciones_pc;

-- Creacion tabla registro_recepcion
CREATE TABLE registro_recepcion (
    id_rgt_recepcion int not null auto_increment,
    numero_recibido varchar(200),
    estado_pc varchar(200),
    marca_pc varchar(200),
    nombre_cliente varchar(200),
    telefono_cliente varchar(200),
    codigo_operario varchar(200),
    fecha_recepcion TIMESTAMP,
    primary key(id_rgt_recepcion)
);

-- Creacion tabla registro_operador
CREATE TABLE registro_operador (
    id_rgt_operador int not null auto_increment,
    numero_recibido varchar(200),
    descripcion_fallos_pc varchar(200),
    repuestos_reparacion varchar(200),
    fecha_revision TIMESTAMP,
    primary key(id_rgt_operador)
);

-- Creacion tabla usuarios
CREATE TABLE usuarios (
    id_usuario int not null auto_increment,
    nombre_usuario varchar(200),
    nombres varchar(200),
    apellidos varchar(200),
    email varchar(200),
    contrasena varchar(200),
    id_role int,
    fecha_creacion_usuario TIMESTAMP,
    primary key(id_usuario)
);

-- Creacion tabla roles
CREATE TABLE roles (
    id_rol int not null auto_increment,
    nombre_rol varchar(200),
    descripcion varchar(200),
    fecha_creacion_rol TIMESTAMP,
    primary key(id_rol)
);