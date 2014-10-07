-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 10-01-2011 a las 18:16:48
-- Versión del servidor: 5.0.24
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `carrocompras`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `categorias`
-- 

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL auto_increment,
  `nom_categoria` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `categorias`
-- 

INSERT INTO `categorias` VALUES (1, 'Cuerda');
INSERT INTO `categorias` VALUES (2, 'Viento');
INSERT INTO `categorias` VALUES (3, 'Percusion');
INSERT INTO `categorias` VALUES (4, 'Comedia');
INSERT INTO `categorias` VALUES (5, 'Gastronomia');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `detalle_pedido`
-- 

CREATE TABLE `detalle_pedido` (
  `id_pedido` int(11) NOT NULL,
  `descripcion` char(10) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY  (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `detalle_pedido`
-- 

INSERT INTO `detalle_pedido` VALUES (1, '0672317842', 50.5, 1);
INSERT INTO `detalle_pedido` VALUES (2, '0672317842', 50.5, 1);
INSERT INTO `detalle_pedido` VALUES (4, '0672317842', 50.5, 2);
INSERT INTO `detalle_pedido` VALUES (5, '0672317842', 50.5, 1);
INSERT INTO `detalle_pedido` VALUES (5, '0672318040', 50.5, 3);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `libros`
-- 

CREATE TABLE `instrumentos` (
  `id_instrumento` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_instrumento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `libros`
-- 

INSERT INTO `instrumentos` VALUES (1001, 'Guitarra',5000.5,1, 'images/1.jpg');

INSERT INTO `libros` VALUES ('0672318040', 'El Indio Mayta y sus Aventuras por El Viejo Oeste', 'Novel Historica basada en la vida de los Apaches en el Viejo Oeste, Narra la Historia del Rey Apache Cochis, y sus ideales, tambien narra como esta raza Apache se fue desvaneciendo poco a poco, gracias al odio hacia esa tribu.', 50.5, 'Abraham ValerOmar', 1, 'images/2.jpg');
INSERT INTO `libros` VALUES ('0672319241', 'El Rey Druida y la Historia de Amor Maravillosa', 'Novela Historica Basada en la historia de la vida real, narra la historia valga la redundancia de dos personas el cual el odio entre sus familias hizo posible que nunca lograran amarse y ser felices. Muy interesante el epilogo de esta novela, que sin duda el que lea este libro se sentira identificado de una u otra manera', 50.6, 'Ricardo Palma', 1, 'images/3.jpg');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pedidos`
-- 

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL auto_increment,
  `usuario` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY  (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `pedidos`
-- 

INSERT INTO `pedidos` VALUES (1, 'luis', '2011-01-08', '17:05:41');
INSERT INTO `pedidos` VALUES (2, 'luis', '2011-01-09', '17:19:01');
INSERT INTO `pedidos` VALUES (3, 'luis', '2011-01-09', '17:28:12');
INSERT INTO `pedidos` VALUES (4, 'luis', '2011-01-09', '17:28:20');
INSERT INTO `pedidos` VALUES (5, 'luis', '2011-01-09', '17:28:39');
