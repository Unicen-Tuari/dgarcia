-- Adminer 4.0.2 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-03:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `campoactivo`;
CREATE DATABASE `campoactivo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `campoactivo`;

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(250) NOT NULL,
  `Telefono` varchar(250) NOT NULL DEFAULT '0',
  `Correoelectronico` varchar(250) NOT NULL,
  `Comentario` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `contactos` (`id`, `Nombre`, `Telefono`, `Correoelectronico`, `Comentario`) VALUES
(1,	'dana',	'154494053',	'dana@hotmail.com',	'probando')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `Nombre` = VALUES(`Nombre`), `Telefono` = VALUES(`Telefono`), `Correoelectronico` = VALUES(`Correoelectronico`), `Comentario` = VALUES(`Comentario`);

DROP TABLE IF EXISTS `contenido`;
CREATE TABLE `contenido` (
  `id_contenido` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `texto` varchar(256) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_contenido`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

INSERT INTO `contenido` (`id_contenido`, `nombre`, `texto`) VALUES
(1,	'FR600',	'+ 0Km, 4WD, Motor FPT Cursor 13 Tier III, 6 cilindros en línea, 544 cv de potencia nominal hasta 600 cv de potencia máxima, tanque de combustible de 1.220 lts, de capacidad, transmisión hidrostática con traba de diferencial, velocidad máxima en carretera d'),
(2,	'New Holland Erca',	'La línea T8 llega para atender a una agricultura moderna y al productor exigente. Robusta y versátil, su modelo más potente llega a alcanzar 389 cv.\r\nIntegra el proyecto de alineación global de la marca y coloca a New Holland como la marcacon el mejor esca'),
(3,	'New Holland T6080 y T6090',	'Con el sistema de gestión de potencia del motor usted obtiene mucho más. \r\nLa potencia nominal de todos los modelos T6000 Range Command o Power Command aumenta de manera automática para responder a aplicaciones exigentes de transporte, del sistema hidráuli'),
(4,	'CR9080 DUAL 4WD',	'Vendemos CR9080/4CD, año 2009, doble tracción, rodado dual, cabezal \"35, piloto automático, 2400 hs de uso. IMPECABLE.'),
(5,	'FIAT 60',	'Estado bueno, tdf y toma de fuerza y dirección hidráulica.'),
(6,	'GherardiG-230',	'30 Líneas a 17,5, cajón alfalfero y monitor de siembra. Muy buen estado.'),
(7,	'JactoUnipor2000plus',	'Año 2003, computadora de abordo, banderillero satelital Trimble, rodado 12.4x36, cabina con A/A, 21 mts botalon.'),
(8,	'New Holland 8030DT',	'132 CV, caja 16 x 4 con Dual Power, rodado 23.1x30, año 1996.'),
(9,	'New Holland FX375',	'Año 1997, única mano, cabezal de maíz, sorgo, CLASS y cabezal de pasturas original NH, uso particular, no de contratista, con pocas horas de uso. EXCELENTE.'),
(10,	'New Holland TL75',	'Año 2006, 4400 hs de uso, con pala frontal TBeH, LH3P y cabina Cabimetal.'),
(11,	'Segadora Acondicionadora 1411',	'3,16 mts de trabajo, rodillos acondicionadores de goma Chevron, lanza curva hidráulica, tdf 540 rpm, año 2006. Muy buena.'),
(12,	'12° Fiesta del Chacarero',	'Estuvimos presentes en la Fiesta del Chacarero que se realizó en Chillar.'),
(13,	'Agroactiva 2014',	'Agroactiva, la exposición anual de productores agropecuarios, empresas fabricantes de maquinarias e insumos, celebra este años sus primeros 20 años.\r\nLa muestra agropecuaria a campo abierto más grande del mundo que se desarrolla en Argentina del 4 al 7 de '),
(14,	'Fiesta de la Cebolla 2014',	'El segundo carretón partió hoy para la ciudad de Hilario Ascasubi con cinco unidades para la expo. Los esperamos en nuestro stand desde el 11 al 14!!!!.')
ON DUPLICATE KEY UPDATE `id_contenido` = VALUES(`id_contenido`), `nombre` = VALUES(`nombre`), `texto` = VALUES(`texto`);

DROP TABLE IF EXISTS `dia`;
CREATE TABLE `dia` (
  `id_dia` int(3) NOT NULL AUTO_INCREMENT,
  `numDia` int(2) NOT NULL,
  `estado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_mes` int(2) NOT NULL,
  PRIMARY KEY (`id_dia`),
  KEY `id_mes` (`id_mes`),
  CONSTRAINT `dia_ibfk_1` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `dia` (`id_dia`, `numDia`, `estado`, `id_mes`) VALUES
(1,	1,	'desocupado',	1)
ON DUPLICATE KEY UPDATE `id_dia` = VALUES(`id_dia`), `numDia` = VALUES(`numDia`), `estado` = VALUES(`estado`), `id_mes` = VALUES(`id_mes`);

DROP TABLE IF EXISTS `evento`;
CREATE TABLE `evento` (
  `id_contenido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `ubicacion` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  KEY `id_contenido` (`id_contenido`),
  CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `evento` (`id_contenido`, `fecha`, `ubicacion`) VALUES
(12,	'2014-03-21',	'Chillar'),
(13,	'2014-06-08',	'Cañada de Gómez'),
(14,	'2014-04-11',	'Hilario Ascasubi')
ON DUPLICATE KEY UPDATE `id_contenido` = VALUES(`id_contenido`), `fecha` = VALUES(`fecha`), `ubicacion` = VALUES(`ubicacion`);

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `id_contenido` int(11) NOT NULL,
  `ruta` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_imagen`),
  KEY `id_contenido` (`id_contenido`),
  CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=latin1;

INSERT INTO `imagenes` (`id_imagen`, `id_contenido`, `ruta`) VALUES
(1,	1,	'images/Nuevos/FR600/FR600_001.jpg'),
(2,	1,	'images/Nuevos/FR600/FR600_002.jpg'),
(3,	1,	'images/Nuevos/FR600/FR600_003.jpg'),
(4,	1,	'images/Nuevos/FR600/FR600_004.jpg'),
(5,	1,	'images/Nuevos/FR600/FR600_005.jpg'),
(6,	1,	'images/Nuevos/FR600/FR600_006.jpg'),
(7,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_001.jpg'),
(8,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_002.jpg'),
(9,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_003.jpg'),
(10,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_004.jpg'),
(11,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_005.jpg'),
(12,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_006.jpg'),
(13,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_007.jpg'),
(14,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_001.jpg'),
(15,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_002.jpg'),
(16,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_003.jpg'),
(17,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_004.jpg'),
(18,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_005.jpg'),
(19,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_006.jpg'),
(20,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_007.jpg'),
(21,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_008.jpg'),
(22,	4,	'images/Usados/CR9080DUAL4WD/CR9080DUAL4WD_001.jpg'),
(23,	4,	'images/Usados/CR9080DUAL4WD/CR9080DUAL4WD_002.jpg'),
(24,	4,	'images/Usados/CR9080DUAL4WD/CR9080DUAL4WD_003.jpg'),
(25,	4,	'images/Usados/CR9080DUAL4WD/CR9080DUAL4WD_004.jpg'),
(26,	5,	'images/Usados/FIAT60/FIAT60_001.jpg'),
(27,	5,	'images/Usados/FIAT60/FIAT60_002.jpg'),
(28,	5,	'images/Usados/FIAT60/FIAT60_003.jpg'),
(29,	6,	'images/Usados/GherardiG-230/GherardiG-230_001.jpg'),
(30,	6,	'images/Usados/GherardiG-230/GherardiG-230_002.jpg'),
(31,	6,	'images/Usados/GherardiG-230/GherardiG-230_003.jpg'),
(32,	6,	'images/Usados/GherardiG-230/GherardiG-230_004.jpg'),
(33,	6,	'images/Usados/GherardiG-230/GherardiG-230_005.jpg'),
(34,	6,	'images/Usados/GherardiG-230/GherardiG-230_006.jpg'),
(35,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_001.jpg'),
(36,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_002.jpg'),
(37,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_003.jpg'),
(38,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_004.jpg'),
(39,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_005.jpg'),
(40,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_006.jpg'),
(41,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_007.jpg'),
(42,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_008.jpg'),
(43,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_009.jpg'),
(44,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_010.jpg'),
(45,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_011.jpg'),
(46,	8,	'images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_001.jpg'),
(47,	8,	'images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_002.jpg'),
(48,	8,	'images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_003.jpg'),
(49,	8,	'images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_004.jpg'),
(50,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_001.jpg'),
(51,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_002.jpg'),
(52,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_003.jpg'),
(53,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_004.jpg'),
(54,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_005.jpg'),
(55,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_006.jpg'),
(56,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_007.jpg'),
(57,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_008.jpg'),
(58,	10,	'images/Usados/NewHollandTL75/NewHollandTL75_001.jpg'),
(59,	10,	'images/Usados/NewHollandTL75/NewHollandTL75_002.jpg'),
(60,	10,	'images/Usados/NewHollandTL75/NewHollandTL75_003.jpg'),
(61,	10,	'images/Usados/NewHollandTL75/NewHollandTL75_004.jpg'),
(62,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_001.jpg'),
(63,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_002.jpg'),
(64,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_003.jpg'),
(65,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_004.jpg'),
(66,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_005.jpg'),
(67,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_006.jpg'),
(68,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_007.jpg'),
(69,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_008.jpg'),
(70,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_001.jpg'),
(71,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_002.jpg'),
(72,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_003.jpg'),
(73,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_004.jpg'),
(74,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_005.jpg'),
(75,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_006.jpg'),
(76,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_007.jpg'),
(77,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_008.jpg'),
(78,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_009.jpg'),
(79,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_010.jpg'),
(80,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_011.jpg'),
(81,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_012.jpg'),
(82,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_013.jpg'),
(83,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_001.jpg'),
(84,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_002.jpg'),
(85,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_003.jpg'),
(86,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_004.jpg'),
(87,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_005.jpg'),
(88,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_006.jpg'),
(89,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_007.jpg'),
(90,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_008.jpg'),
(91,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_009.jpg'),
(92,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_010.jpg'),
(93,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_011.jpg'),
(94,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_012.jpg'),
(95,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_013.jpg'),
(96,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_014.jpg'),
(97,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_015.jpg'),
(98,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_016.jpg'),
(99,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_017.jpg'),
(100,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_018.jpg'),
(101,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_019.jpg'),
(102,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_020.jpg'),
(103,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_021.jpg'),
(104,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_022.jpg'),
(105,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_023.jpg'),
(106,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_024.jpg'),
(107,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_025.jpg'),
(108,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_026.jpg'),
(109,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_027.jpg'),
(110,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_028.jpg'),
(111,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_029.jpg'),
(112,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_001.jpg'),
(113,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_002.jpg'),
(114,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_003.jpg'),
(115,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_004.jpg'),
(116,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_005.jpg'),
(117,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_006.jpg'),
(118,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_007.jpg'),
(119,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_008.jpg'),
(120,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_009.jpg'),
(121,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_010.jpg'),
(122,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_011.jpg'),
(123,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_012.jpg'),
(124,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_013.jpg'),
(125,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_014.jpg'),
(126,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_015.jpg'),
(127,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_016.jpg'),
(128,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_017.jpg'),
(129,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_018.jpg'),
(130,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_019.jpg'),
(131,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_020.jpg'),
(132,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_021.jpg'),
(133,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_022.jpg'),
(134,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_023.jpg'),
(135,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_024.jpg'),
(136,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_025.jpg'),
(137,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_026.jpg'),
(138,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_027.jpg'),
(139,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_028.jpg'),
(140,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_029.jpg')
ON DUPLICATE KEY UPDATE `id_imagen` = VALUES(`id_imagen`), `id_contenido` = VALUES(`id_contenido`), `ruta` = VALUES(`ruta`);

DROP TABLE IF EXISTS `maquinas`;
CREATE TABLE `maquinas` (
  `id_contenido` int(11) NOT NULL,
  `estado` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'N',
  `modelo` int(11) NOT NULL DEFAULT '0',
  `tipo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  KEY `id_contenido` (`id_contenido`),
  CONSTRAINT `maquinas_ibfk_1` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `maquinas` (`id_contenido`, `estado`, `modelo`, `tipo`, `precio`) VALUES
(1,	'NUEVA',	2013,	'picadora',	215000),
(2,	'NUEVA',	2014,	'tractor',	177000),
(3,	'NUEVA',	2014,	'tractor',	82000),
(4,	'USADA',	2009,	'tractor',	140000),
(5,	'USADA',	2004,	'tractor',	18200),
(6,	'USADA',	2004,	'sembradora',	28000),
(7,	'USADA',	2003,	'pulverizadora',	75000),
(8,	'USADA',	1996,	'tractor',	30000),
(9,	'USADA',	1997,	'picadora',	27000),
(10,	'USADA',	2006,	'tractor',	30000),
(11,	'UUSADA',	2006,	'segadora',	16000)
ON DUPLICATE KEY UPDATE `id_contenido` = VALUES(`id_contenido`), `estado` = VALUES(`estado`), `modelo` = VALUES(`modelo`), `tipo` = VALUES(`tipo`), `precio` = VALUES(`precio`);

DROP TABLE IF EXISTS `mes`;
CREATE TABLE `mes` (
  `id_mes` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `cantidadDias` int(2) NOT NULL,
  PRIMARY KEY (`id_mes`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `mes` (`id_mes`, `nombre`, `cantidadDias`) VALUES
(1,	'enero',	31),
(2,	'febrero',	28)
ON DUPLICATE KEY UPDATE `id_mes` = VALUES(`id_mes`), `nombre` = VALUES(`nombre`), `cantidadDias` = VALUES(`cantidadDias`);

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `usuario` (`id_persona`, `usuario`, `nombre`, `apellido`, `dni_persona`, `fecha_nacimiento`, `email`, `celular`, `telefono_fijo`, `direccion`, `password`, `fecha_registro`, `esAdmin`) VALUES
(1,	'fran',	'Franco',	'Aller',	227417278,	'2001-07-22',	'franco.e.aller@gmail.com',	2147483647,	0,	'4 de Abril',	'fran',	'2020-07-22',	CONV('0', 2, 10) + 0),
(2,	'apecena',	'matias',	'apecena',	0,	'2014-11-12',	'matiasapecena@yahoo.com',	1,	1,	'Costa Rica 146 E 5',	'micaela79',	'2014-11-12',	CONV('1', 2, 10) + 0),
(11,	'roberto',	'carlos ',	'mangieri',	23,	'2014-11-18',	'pepeq@a.com',	0,	0,	'matiasapecena@yahoo.com',	'loquito',	'2014-11-18',	CONV('0', 2, 10) + 0)
ON DUPLICATE KEY UPDATE `id_persona` = VALUES(`id_persona`), `usuario` = VALUES(`usuario`), `nombre` = VALUES(`nombre`), `apellido` = VALUES(`apellido`), `dni_persona` = VALUES(`dni_persona`), `fecha_nacimiento` = VALUES(`fecha_nacimiento`), `email` = VALUES(`email`), `celular` = VALUES(`celular`), `telefono_fijo` = VALUES(`telefono_fijo`), `direccion` = VALUES(`direccion`), `password` = VALUES(`password`), `fecha_registro` = VALUES(`fecha_registro`), `esAdmin` = VALUES(`esAdmin`);

-- 2014-11-23 18:33:41
