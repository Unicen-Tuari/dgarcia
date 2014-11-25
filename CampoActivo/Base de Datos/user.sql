SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

-- DROP DATABASE IF EXISTS `campoactivo`;
-- CREATE DATABASE `campoactivo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
-- USE `campoactivo`;

-- DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `mes` (
  `id_mes` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `cantidadDias` int(2) NOT NULL,
  PRIMARY KEY (`id_mes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE `dia` (
  `id_dia` int(3) NOT NULL AUTO_INCREMENT,
  `numDia` int(2) NOT NULL,
  `estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_mes` int(2) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_dia`),
  FOREIGN KEY (`id_mes`) REFERENCES mes (`id_mes`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `usuario` (`id_persona`, `Usuario`, `nombre`, `apellido`, `dni_persona`, `fecha_nacimiento`, `email`, `celular`, `telefono_fijo`, `direccion`, `password`, `fecha_registro`, `esAdmin`) VALUES
(1,	'fran',	'Franco',	'Aller',	227417278,	'2001-07-22',	'franco.e.aller@gmail.com',	2147483647,	0,	'4 de Abril',	'fran',	'2020-07-22',	CONV('0', 2, 10) + 0),
(2,	'apecena',	'matias',	'apecena',	0,	'2014-11-12',	'matiasapecena@yahoo.com',	1,	1,	'Costa Rica 146 E 5',	'micaela79',	'2014-11-12',	CONV('1', 2, 10) + 0),
(11,	'roberto',	'carlos ',	'mangieri',	23,	'2014-11-18',	'pepeq@a.com',	0,	0,	'matiasapecena@yahoo.com',	'loquito',	'2014-11-18',	CONV('0', 2, 10) + 0),
(12,	'pedro',	's',	's',	0,	'2014-11-18',	'sssss@a.com',	0,	0,	'matiasapecena@yahoo.com',	'loquito',	'2014-11-18',	CONV('0', 2, 10) + 0);