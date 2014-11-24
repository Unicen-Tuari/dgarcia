SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';


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