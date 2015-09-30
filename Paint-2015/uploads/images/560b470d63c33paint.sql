-- Adminer 4.0.2 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-03:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `paint`;
CREATE DATABASE `paint` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `paint`;

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
(1,	'Diseño'),
(2,	'Paisajismo');

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `id_noticia` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `ruta` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_imagen`),
  KEY `fk_not` (`id_noticia`),
  KEY `fk_cat1` (`id_categoria`),
  CONSTRAINT `fk_not` FOREIGN KEY (`id_noticia`) REFERENCES `noticias` (`id_noticia`),
  CONSTRAINT `fk_cat1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `imagenes` (`id_imagen`, `id_noticia`, `id_categoria`, `ruta`) VALUES
(1,	1,	1,	'images/g1.jpg'),
(2,	2,	1,	'images/g2.jpg'),
(3,	3,	1,	'images/g3.jpg'),
(4,	4,	1,	'images/g4.jpg'),
(5,	5,	1,	'images/g5.jpg'),
(6,	6,	1,	'images/g6.jpg'),
(7,	7,	1,	'images/g7.jpg'),
(8,	8,	2,	'images/g8.jpg'),
(9,	9,	2,	'images/g9.jpg'),
(10,	10,	2,	'images/g10.jpg'),
(11,	11,	2,	'images/g11.jpg'),
(12,	12,	2,	'images/g12.jpg'),
(13,	13,	2,	'images/g13.jpg'),
(14,	14,	2,	'images/g14.jpg');

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `id_imagen` int(11) NOT NULL,
  `contenido` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_noticia`),
  KEY `fk_cat` (`id_categoria`),
  CONSTRAINT `fk_cat` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO `noticias` (`id_noticia`, `id_categoria`, `id_imagen`, `contenido`, `titulo`) VALUES
(1,	1,	1,	'hola1',	'titulo1'),
(2,	1,	2,	'hola2',	'titulo2'),
(3,	1,	3,	'hola3',	'titulo3'),
(4,	1,	4,	'hola4',	'titulo4'),
(5,	1,	5,	'hola5',	'titulo5'),
(6,	1,	6,	'hola6',	'titulo6'),
(7,	1,	7,	'hola7',	'titulo7'),
(8,	2,	8,	'hola8',	'titulo8'),
(9,	2,	9,	'hola9',	'titulo9'),
(10,	2,	10,	'hola10',	'titulo10'),
(11,	2,	11,	'hola11',	'titulo11'),
(12,	2,	12,	'hola12',	'titulo12'),
(13,	2,	13,	'hola13',	'titulo13'),
(14,	2,	14,	'hola14',	'titulo14');

-- 2015-09-27 22:50:48
