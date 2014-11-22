SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

-- DROP DATABASE IF EXISTS `campoactivo`;
-- CREATE DATABASE `campoactivo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
-- USE `campoactivo`;

-- DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `dni_persona` int(11) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(11) NOT NULL,
  `telefono_fijo` int(11) DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `esAdmin` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `usuario` (`id_persona`, `Usuario`, `nombre`, `apellido`, `dni_persona`, `fecha_nacimiento`, `email`, `celular`, `telefono_fijo`, `direccion`, `password`, `fecha_registro`, `esAdmin`) VALUES
(1,	'fran',	'Franco',	'Aller',	227417278,	'2001-07-22',	'franco.e.aller@gmail.com',	2147483647,	0,	'4 de Abril',	'fran',	'2020-07-22',	CONV('0', 2, 10) + 0),
(2,	'apecena',	'matias',	'apecena',	0,	'2014-11-12',	'matiasapecena@yahoo.com',	1,	1,	'Costa Rica 146 E 5',	'micaela79',	'2014-11-12',	CONV('1', 2, 10) + 0),
(11,	'roberto',	'carlos ',	'mangieri',	23,	'2014-11-18',	'pepeq@a.com',	0,	0,	'matiasapecena@yahoo.com',	'loquito',	'2014-11-18',	CONV('0', 2, 10) + 0),
(12,	'pedro',	's',	's',	0,	'2014-11-18',	'sssss@a.com',	0,	0,	'matiasapecena@yahoo.com',	'loquito',	'2014-11-18',	CONV('0', 2, 10) + 0);