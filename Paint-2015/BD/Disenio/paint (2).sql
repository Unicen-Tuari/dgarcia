-- Adminer 4.0.2 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-03:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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
(2,	'Paisajismo')
ON DUPLICATE KEY UPDATE `id_categoria` = VALUES(`id_categoria`), `nombre` = VALUES(`nombre`);

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_noticia` int(11) NOT NULL,
  `ruta` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO `imagenes` (`id_imagen`, `fk_id_noticia`, `ruta`) VALUES
(40,	38,	'uploads/images/562589f1089d3g1.jpg'),
(41,	39,	'uploads/images/5625926f50984g3.jpg'),
(42,	40,	'uploads/images/562593b83d3b0g4.jpg'),
(43,	41,	'uploads/images/5625948aae0a3g5.jpg'),
(44,	42,	'uploads/images/562595238c74eg7.jpg'),
(47,	45,	'uploads/images/562595e72bac3g8.jpg'),
(48,	46,	'uploads/images/5625969fdf05ag9.jpg'),
(49,	47,	'uploads/images/56259769d4292g10.jpg'),
(50,	48,	'uploads/images/562598cdce11ag11.jpg'),
(51,	49,	'uploads/images/56259c5f52dc5g14.jpg')
ON DUPLICATE KEY UPDATE `id_imagen` = VALUES(`id_imagen`), `fk_id_noticia` = VALUES(`fk_id_noticia`), `ruta` = VALUES(`ruta`);

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `contenido` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_noticia`),
  KEY `fk_cat` (`id_categoria`),
  CONSTRAINT `fk_cat` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

INSERT INTO `noticias` (`id_noticia`, `id_categoria`, `contenido`, `titulo`) VALUES
(38,	1,	'Se muestran caracter&iacute;sticas de valores vigentes como: maderas de calidad, tallados singulares, azulejos decorados, pisos artesanales, vitrales elaborados, herrer&iacute;a art&iacute;stica y bronces trabajados.',	'Living cl&aacute;sico'),
(39,	1,	'En esta combinaci&oacute;n se pueden presentar ideas ,opciones y oportunidades para decorar la casa, de crear viviendas contempor&aacute;neas en hermosos entornos antiguos que mantiene su arquitectura ',	'Estilo antiguo'),
(40,	1,	'La ornamentaci&oacute;n es abundante y complicada, pero a diferencia del barroco europeo es emotivo y alucinado.  La rica poolicrom&iacute;a de la escultura o el atormentado movimiento de las figuras est&aacute;n sustentadas ',	'Estilo barroco'),
(41,	1,	'Ese concepto de arquitectura , se caracteriza por la simplificaci&oacute;n de las formas, la ausencia de ornamento y la renuncia consciente a la composici&oacute;n acad&eacute;mica cl&aacute;sica, que fue sustituida por otra est&eacute;tica',	'Estilo moderno'),
(42,	1,	'La arquitectura futurista se caracteriza en sus inicios por el antihistoricismo y largas l&iacute;neas horizontales que suger&iacute;an velocidad, movimiento y urgencia.',	'Estilo futurista'),
(45,	2,	'Es una t&eacute;cnica que permite aprovechar los espacios y embellecer un lugar. Todo, de manera sustentable: las paredes verdes aportan muchos beneficios, como recuperar ox&iacute;geno, atenuar los ruidos y limpiar el aire de smog.',	'Jard&iacute;n vertical'),
(46,	2,	'El uso de piedras es una de las alternativas m&aacute;s utilizadas por su valor est&eacute;tico que aqu&eacute;llas transmiten al entorno consiguiendo un espacio acogedor en el exterior de tu casa. Adem&aacute;s, las piedras  son muy resistentes',	'Piedras y c&eacute;sped'),
(47,	2,	'Los arbustos son muy vers&aacute;tiles, ya sea el jard&iacute;n grande o peque&ntilde;o. Abarcan desde las plantas enanas, adecuadas para la parte delantera de una parcela, hasta los ejemplares grandes que alcanzan un par de metros de altura',	'Arbustos'),
(48,	2,	'Cubrir el suelo con un denso tapiz de plantas tapizantes o cubresuelos, es una t&eacute;cnica de plantado reciente, diseñada primordialmente para reducir la tarea de la eliminaci&oacute;n de maleza entre las plantas ornamentales. ',	'Entrada'),
(49,	2,	'El uso de piedras es una de las alternativas más utilizadas por su valor estético que aquéllas transmiten al entorno consiguiendo un espacio acogedor en el exterior de tu casa. Además, las piedras son muy resistentes',	'Piedras')
ON DUPLICATE KEY UPDATE `id_noticia` = VALUES(`id_noticia`), `id_categoria` = VALUES(`id_categoria`), `contenido` = VALUES(`contenido`), `titulo` = VALUES(`titulo`);

-- 2015-10-20 14:48:46
