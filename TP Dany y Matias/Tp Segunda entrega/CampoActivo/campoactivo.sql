-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `campoactivo`;
CREATE DATABASE `campoactivo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `campoactivo`;

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(250) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `Telefono` varchar(250) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `Correoelectronico` varchar(250) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `Cometario` longtext COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `contactos` (`id`, `Nombre`, `Apellido`, `Telefono`, `Correoelectronico`, `Cometario`) VALUES
(1,	'Matias',	'Apecena',	'00000000001',	'matiasapecena@yahoo.com',	''),
(2,	'nacho',	'profe',	'1234',	'msmms@gmail.com',	'prueba');

DROP TABLE IF EXISTS `contenido`;
CREATE TABLE `contenido` (
  `id_contenido` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `texto` longtext COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_contenido`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `contenido` (`id_contenido`, `nombre`, `texto`) VALUES
(1,	'FR600',	'0Km, 4WD, Motor FPT Cursor 13 Tier III, 6 cilindros en línea, 544 cv de potencia nominal hasta 600 cv de potencia máxima, tanque de combustible de 1.220 lts, de capacidad, transmisión hidrostática con traba de diferencial, velocidad máxima en carretera de 40 km. a 1400 rpm, detección de metal con indicador de posición.\r\nCabezal de 6 mts. 8-70.'),
(2,	'New Holland Erca',	'La línea T8 llega para atender a una agricultura moderna y al productor exigente. Robusta y versátil, su modelo más potente llega a alcanzar 389 cv.\r\nIntegra el proyecto de alineación global de la marca y coloca a New Holland como la marcacon el mejor escalonamiento de potencia: de 55 cv a 389 cv.\r\nEl productor exigente va a tener asegurados el rendimiento y la alta productividad de esta línea, que posee un desempeño superior en las más diversas actividades.\r\nSu Sistema de Administración de Potencia (EPM) coloca a disposición más potencia para la toma de fuerza y aplicaciones hidráulicas, lo que le da una enorme capacidad de trabajo y un elevado rendimiento. Con ergonomía de clase mundial, su consola SideWinder IITM hace que la operación sea más intuitiva y con menores niveles de fatiga.\r\nNotablemente confortable, su cabina es la mayor y la más silenciosa del mercado.\r\nCon un sistema hidráulico de elevada capacidad y transmisión FullPowershift 18x4, los tractores T8 son verdaderas máquinas de productividad en gran escala.'),
(3,	'New Holland T6080 y T6090',	'Con el sistema de gestión de potencia del motor usted obtiene mucho más. \r\nLa potencia nominal de todos los modelos T6000 Range Command o Power Command aumenta de manera automática para responder a aplicaciones exigentes de transporte, del sistema hidráulico o de la TDF. Hasta 36 CV de potencia y 68 Nm de par adicionales aportan la reserva de potencia que usted necesita para realizar el trabajo. \r\nSiempre en el momento adecuado.'),
(4,	'CR9080 DUAL 4WD',	'Vendemos CR9080/4CD, año 2009, doble tracción, rodado dual, cabezal \"35, piloto automático, 2400 hs de uso. IMPECABLE.'),
(5,	'FIAT 60',	'Estado bueno, tdf, toma de fuerza y dirección hidráulica.'),
(6,	'GherardiG-230',	'30 Líneas a 17,5, cajón alfalfero y monitor de siembra. Muy buen estado.'),
(7,	'JactoUnipor2000plus',	'Año 2003, computadora de abordo, banderillero satelital Trimble, rodado 12.4x36, cabina con A/A, 21 mts botalon.'),
(8,	'New Holland 8030DT',	'132 CV, caja 16 x 4 con Dual Power, rodado 23.1x30, año 1996.'),
(9,	'New Holland FX375',	'Año 1997, única mano, cabezal de maíz, sorgo, CLASS y cabezal de pasturas original NH, uso particular, no de contratista, con pocas horas de uso. EXCELENTE.'),
(10,	'New Holland TL75',	'Año 2006, 4400 hs de uso, con pala frontal TBeH, LH3P y cabina Cabimetal.'),
(11,	'Segadora Acondicionadora 1411',	'3,16 mts de trabajo, rodillos acondicionadores de goma Chevron, lanza curva hidráulica, tdf 540 rpm, año 2006. Muy buena.'),
(12,	'12° Fiesta del Chacarer&oacute;',	'Estuvimos presentes en la Fiesta del Chacarero que se realizó en Chillar.'),
(13,	'Agroactiva 2014',	'Agroactiva, la exposición anual de productores agropecuarios, empresas fabricantes de maquinarias e insumos, celebra este años sus primeros 20 años.\r\nLa muestra agropecuaria a campo abierto más grande del mundo que se desarrolla en Argentina del 4 al 7 de junio de 2014, en ruta nacional Nº 9 kilómetro 386, Cañada de Gómez, Santa Fe.'),
(14,	'Fiesta de la Cebolla 2014',	'El segundo carretón partió hoy para la ciudad de Hilario Ascasubi con cinco unidades para la expo. Los esperamos en nuestro stand desde el 11 al 14!!!!.'),
(15,	'maquina',	'pruebaaaa');

DROP TABLE IF EXISTS `evento`;
CREATE TABLE `evento` (
  `id_contenido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `ubicacion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  KEY `id_contenido` (`id_contenido`),
  CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `evento` (`id_contenido`, `fecha`, `ubicacion`) VALUES
(12,	'2014-03-21',	'Chillar'),
(13,	'2014-06-08',	'Cañada de Gómez'),
(14,	'2014-04-11',	'Hilario Ascasubi');

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `id_contenido` int(11) NOT NULL,
  `ruta` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_imagen`),
  KEY `id_contenido` (`id_contenido`),
  CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `imagenes` (`id_imagen`, `id_contenido`, `ruta`) VALUES
(1,	1,	'images/Nuevos/FR600/FR600_001.jpg'),
(2,	1,	'images/Nuevos/FR600/FR600_002.jpg'),
(3,	1,	'images/Nuevos/FR600/FR600_003.jpg'),
(4,	1,	'images/Nuevos/FR600/FR600_004.jpg'),
(5,	1,	'images/Nuevos/FR600/FR600_005.jpg'),
(6,	1,	'images/Nuevos/FR600/FR600_006.jpg'),
(7,	1,	'images/Nuevos/FR600/FR600_007.jpg'),
(8,	1,	'images/Nuevos/FR600/FR600_008.jpg'),
(9,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_001.jpg'),
(10,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_002.jpg'),
(12,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_004.jpg'),
(13,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_005.jpg'),
(14,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_006.jpg'),
(16,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_008.jpg'),
(17,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_009.jpg'),
(18,	2,	'images/Nuevos/NewHollandErca/NewHollandErca_010.jpg'),
(19,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_001.jpg'),
(20,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_002.jpg'),
(21,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_003.jpg'),
(22,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_004.jpg'),
(23,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_005.jpg'),
(24,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_006.jpg'),
(25,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_007.jpg'),
(26,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_008.jpg'),
(27,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_009.jpg'),
(28,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_010.jpg'),
(29,	3,	'images/Nuevos/NEWHOLLANDT6080yT6090/NEWHOLLANDT6080yT6090_011.jpg'),
(30,	4,	'images/Usados/CR9080DUAL4WD/CR9080DUAL4WD_001.jpg'),
(31,	4,	'images/Usados/CR9080DUAL4WD/CR9080DUAL4WD_002.jpg'),
(32,	4,	'images/Usados/CR9080DUAL4WD/CR9080DUAL4WD_003.jpg'),
(33,	4,	'images/Usados/CR9080DUAL4WD/CR9080DUAL4WD_004.jpg'),
(34,	5,	'images/Usados/FIAT60/FIAT60_001.jpg'),
(35,	5,	'images/Usados/FIAT60/FIAT60_002.jpg'),
(36,	5,	'images/Usados/FIAT60/FIAT60_003.jpg'),
(37,	6,	'images/Usados/GherardiG-230/GherardiG-230_001.jpg'),
(38,	6,	'images/Usados/GherardiG-230/GherardiG-230_002.jpg'),
(39,	6,	'images/Usados/GherardiG-230/GherardiG-230_003.jpg'),
(40,	6,	'images/Usados/GherardiG-230/GherardiG-230_004.jpg'),
(41,	6,	'images/Usados/GherardiG-230/GherardiG-230_005.jpg'),
(42,	6,	'images/Usados/GherardiG-230/GherardiG-230_006.jpg'),
(43,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_001.jpg'),
(44,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_002.jpg'),
(45,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_003.jpg'),
(46,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_004.jpg'),
(47,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_005.jpg'),
(48,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_006.jpg'),
(49,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_007.jpg'),
(50,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_008.jpg'),
(51,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_009.jpg'),
(52,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_010.jpg'),
(53,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_011.jpg'),
(54,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_012.jpg'),
(55,	7,	'images/Usados/JactoUnipor2000plus/JactoUnipor2000plus_013.jpg'),
(56,	8,	'images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_001.jpg'),
(57,	8,	'images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_002.jpg'),
(58,	8,	'images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_003.jpg'),
(59,	8,	'images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_004.jpg'),
(60,	8,	'images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_005.jpg'),
(62,	8,	'images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_007.jpg'),
(63,	8,	'images/Usados/NEWHOLLAND8030DT/NEWHOLLAND8030DT_008.jpg'),
(64,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_001.jpg'),
(65,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_002.jpg'),
(66,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_003.jpg'),
(67,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_004.jpg'),
(68,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_005.jpg'),
(69,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_006.jpg'),
(71,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_008.jpg'),
(72,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_009.jpg'),
(73,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_010.jpg'),
(74,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_011.jpg'),
(75,	9,	'images/Usados/NEWHOLLANDFX375/NEWHOLLANDFX375_012.jpg'),
(76,	10,	'images/Usados/NewHollandTL75/NewHollandTL75_001.jpg'),
(77,	10,	'images/Usados/NewHollandTL75/NewHollandTL75_002.jpg'),
(78,	10,	'images/Usados/NewHollandTL75/NewHollandTL75_003.jpg'),
(79,	10,	'images/Usados/NewHollandTL75/NewHollandTL75_004.jpg'),
(80,	10,	'images/Usados/NewHollandTL75/NewHollandTL75_005.jpg'),
(82,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_001.jpg'),
(83,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_002.jpg'),
(84,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_003.jpg'),
(85,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_004.jpg'),
(86,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_005.jpg'),
(87,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_006.jpg'),
(88,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_007.jpg'),
(89,	11,	'images/Usados/SegadoraAcondicionadora1411/SegadoraAcondicionadora1411_008.jpg'),
(90,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_001.jpg'),
(91,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_002.jpg'),
(92,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_003.jpg'),
(93,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_004.jpg'),
(94,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_005.jpg'),
(95,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_006.jpg'),
(96,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_007.jpg'),
(97,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_008.jpg'),
(98,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_009.jpg'),
(99,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_010.jpg'),
(100,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_011.jpg'),
(101,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_012.jpg'),
(102,	12,	'images/Eventos/12FiestadelChacarero/12FiestadelChacarero_013.jpg'),
(103,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_001.jpg'),
(104,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_002.jpg'),
(105,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_003.jpg'),
(106,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_004.jpg'),
(107,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_005.jpg'),
(108,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_006.jpg'),
(109,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_007.jpg'),
(110,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_008.jpg'),
(111,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_009.jpg'),
(112,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_010.jpg'),
(113,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_011.jpg'),
(114,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_012.jpg'),
(115,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_013.jpg'),
(116,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_014.jpg'),
(117,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_015.jpg'),
(118,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_016.jpg'),
(119,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_017.jpg'),
(120,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_018.jpg'),
(121,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_019.jpg'),
(122,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_020.jpg'),
(123,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_021.jpg'),
(124,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_022.jpg'),
(125,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_023.jpg'),
(126,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_024.jpg'),
(127,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_025.jpg'),
(128,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_026.jpg'),
(129,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_027.jpg'),
(130,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_028.jpg'),
(131,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_029.jpg'),
(132,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_030.jpg'),
(133,	13,	'images/Eventos/AGROACTIVA2014/AGROACTIVA2014_031.jpg'),
(134,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_001.jpg'),
(135,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_002.jpg'),
(136,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_003.jpg'),
(137,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_004.jpg'),
(138,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_005.jpg'),
(139,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_006.jpg'),
(140,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_007.jpg'),
(141,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_008.jpg'),
(142,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_009.jpg'),
(143,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_010.jpg'),
(144,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_011.jpg'),
(145,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_012.jpg'),
(146,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_013.jpg'),
(147,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_014.jpg'),
(148,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_015.jpg'),
(149,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_016.jpg'),
(150,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_017.jpg'),
(151,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_018.jpg'),
(152,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_019.jpg'),
(153,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_020.jpg'),
(154,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_021.jpg'),
(155,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_022.jpg'),
(156,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_023.jpg'),
(157,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_024.jpg'),
(158,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_025.jpg'),
(159,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_026.jpg'),
(160,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_027.jpg'),
(161,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_028.jpg'),
(162,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_029.jpg'),
(163,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_030.jpg'),
(164,	14,	'images/Eventos/FiestadelaCebolla2014/FiestadelaCebolla2014_031.jpg'),
(165,	15,	'images\\Nuevos\\ZANELLO 500 C\\ZANELLO 500 C_001.jpg');

DROP TABLE IF EXISTS `maquinas`;
CREATE TABLE `maquinas` (
  `id_contenido` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'N',
  `modelo` int(11) NOT NULL DEFAULT '0',
  `tipo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  KEY `id_contenido` (`id_contenido`),
  CONSTRAINT `maquinas_ibfk_1` FOREIGN KEY (`id_contenido`) REFERENCES `contenido` (`id_contenido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `maquinas` (`id_contenido`, `estado`, `modelo`, `tipo`, `precio`) VALUES
(1,	'N',	2013,	'picadora',	215000),
(2,	'N',	2014,	'tractor',	177712),
(3,	'N',	2014,	'tractor',	82488),
(4,	'U',	2009,	'tractor',	140090),
(5,	'U',	2004,	'tractor',	18200),
(6,	'U',	2004,	'sembradora',	28286),
(7,	'U',	2003,	'pulverizador',	75000),
(8,	'U',	1996,	'tractor',	30000),
(9,	'U',	1997,	'picadora',	27202),
(10,	'U',	2006,	'tractor',	29800),
(11,	'U',	2006,	'segadora',	16000),
(15,	'N',	2014,	'picadora',	50000);

-- 2014-07-08 03:35:34
