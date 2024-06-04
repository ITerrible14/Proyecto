SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` DATETIME COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `datos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(3) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci NOT NULL, 
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(15) COLLATE utf8_unicode_ci NOT NULL,
  `ti` varchar(255) COLLATE utf8_unicode_ci NOT NULL, 
  `universidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `licenciatura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `grado` varchar(255) COLLATE utf8_unicode_ci NOT NULL, 
  `exp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuarios_id` int(11) NOT NULL, 
  PRIMARY KEY (id, usuarios_id), FOREIGN KEY (usuarios_id) REFERENCES usuarios(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
