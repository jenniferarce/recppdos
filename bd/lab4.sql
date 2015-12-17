-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2015 a las 03:54:46
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lab4`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarMascota`(IN `nom` VARCHAR(50), IN `clas` VARCHAR(50), IN `clav` VARCHAR(50), IN `tip` VARCHAR(50))
    NO SQL
insert into mascota(nombre,clase,clave,tipo) VALUES(nom,clas,clav,tip)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarMascota`(IN `nom` VARCHAR(50), IN `clas` VARCHAR(50), IN `clav` VARCHAR(50), IN `tip` VARCHAR(50), IN `idd` INT(50))
    NO SQL
UPDATE mascota set nombre=nom,clave=clav,tipo=tip WHERE id=idd and clase=clas$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerMascotas`()
    NO SQL
select * from mascota$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerMascotasId`(IN `idd` INT)
    NO SQL
select * from mascota where id=idd$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `validarMascota`(IN `nom` VARCHAR(50), IN `clas` VARCHAR(50), IN `clav` VARCHAR(50))
    NO SQL
select nombre from mascota where nombre=nom and clase=clas and clave=clav$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE IF NOT EXISTS `mascota` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `clase` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id`, `nombre`, `clase`, `clave`, `tipo`) VALUES
(1, 'lola', 'Perro', '123', NULL),
(2, 'Pepe', 'Gato', '123', NULL),
(4, 'tito', 'Perro', '456', 'Guardian'),
(5, 'tere', 'Perro', '789', NULL),
(6, 'lila', 'Gato', '123', 'Mascota');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
