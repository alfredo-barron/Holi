CREATE DATABASE carritocompras;
USE carritocompras;

CREATE TABLE usuarios(
id INT PRIMARY KEY AUTO_INCREMENT,
nombre TEXT NOT NULL,
password TEXT NOT NULL,
email TEXT NOT NULL,
sexo ENUM("Dama","Caballero") DEFAULT "Dama",
tipo ENUM("Normal","Premium","Star") DEFAULT "Normal"
);

CREATE TABLE productos(
id INT PRIMARY KEY AUTO_INCREMENT,
nombre TEXT NOT NULL,
descripcion TEXT NOT NULL,
imagen TEXT NOT NULL,
precio DOUBLE NOT NULL
);

CREATE TABLE pedidos(

);