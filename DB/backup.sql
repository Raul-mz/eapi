-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-03-2017 a las 21:58:16
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sgt`
--
CREATE DATABASE IF NOT EXISTS `sgt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sgt`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sgt_field`
--

CREATE TABLE `sgt_field` (
  `field_id` int(10) NOT NULL,
  `menu_id` int(10) NOT NULL,
  `columnName` varchar(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `type` int(2) NOT NULL,
  `value` varchar(50) NOT NULL,
  `sequence` int(2) NOT NULL,
  `isDisplay` int(1) NOT NULL,
  `isMandatory` int(1) NOT NULL,
  `isSameLine` int(1) NOT NULL,
  `isReadOnly` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sgt_field`
--

INSERT INTO `sgt_field` (`field_id`, `menu_id`, `columnName`, `name`, `type`, `value`, `sequence`, `isDisplay`, `isMandatory`, `isSameLine`, `isReadOnly`) VALUES
(1, 1, 'perfil_id', 'Cod. Perfil', 1, '', 1, 1, 1, 0, 1),
(2, 1, 'fecha_alta', 'Fecha de Alta', 5, '#toDay', 2, 1, 1, 1, 0),
(3, 1, 'nombre', 'Nombre', 1, '', 3, 1, 1, 0, 0),
(4, 1, 'descripcion', 'Descripción', 1, '', 4, 1, 0, 0, 0),
(5, 1, 'fecha_baja', 'Fecha de Baja', 5, '', 5, 1, 0, 0, 1),
(6, 1, 'activo', 'Activo', 4, 'checked', 6, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sgt_menu`
--

CREATE TABLE `sgt_menu` (
  `menu_id` int(10) NOT NULL,
  `tabla` varchar(20) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `secuencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sgt_menu`
--

INSERT INTO `sgt_menu` (`menu_id`, `tabla`, `titulo`, `secuencia`) VALUES
(1, 'sgt_perfil', 'Perfil', 1),
(2, 'sgt_plantilla', 'Plantilla', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sgt_perfil`
--

CREATE TABLE `sgt_perfil` (
  `perfil_id` int(3) NOT NULL,
  `fecha_alta` date NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `fecha_baja` date NOT NULL,
  `activo` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sgt_perfil`
--

INSERT INTO `sgt_perfil` (`perfil_id`, `fecha_alta`, `nombre`, `descripcion`, `fecha_baja`, `activo`) VALUES
(1, '2017-03-21', 'Triple', 'T', '2017-03-22', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sgt_plantilla`
--

CREATE TABLE `sgt_plantilla` (
  `plantilla_id` int(10) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `fecha_baja` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sgt_plantilla`
--

INSERT INTO `sgt_plantilla` (`plantilla_id`, `fecha_alta`, `nombre`, `descripcion`, `modelo`, `fecha_baja`) VALUES
(1, '2017-03-22 03:41:32', 'Plantilla Prueba', 'Prueba', 'xls', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sgt_tipoticket`
--

CREATE TABLE `sgt_tipoticket` (
  `tipoticket_id` int(10) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(100) NOT NULL,
  `clase` varchar(200) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `plantilla_id` int(10) NOT NULL,
  `c_fondo` varchar(10) NOT NULL,
  `c_texto` varchar(10) NOT NULL,
  `fecha_baja` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sgt_field`
--
ALTER TABLE `sgt_field`
  ADD PRIMARY KEY (`field_id`);

--
-- Indices de la tabla `sgt_menu`
--
ALTER TABLE `sgt_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indices de la tabla `sgt_perfil`
--
ALTER TABLE `sgt_perfil`
  ADD PRIMARY KEY (`perfil_id`);

--
-- Indices de la tabla `sgt_plantilla`
--
ALTER TABLE `sgt_plantilla`
  ADD PRIMARY KEY (`plantilla_id`);

--
-- Indices de la tabla `sgt_tipoticket`
--
ALTER TABLE `sgt_tipoticket`
  ADD PRIMARY KEY (`tipoticket_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sgt_field`
--
ALTER TABLE `sgt_field`
  MODIFY `field_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `sgt_menu`
--
ALTER TABLE `sgt_menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sgt_perfil`
--
ALTER TABLE `sgt_perfil`
  MODIFY `perfil_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sgt_plantilla`
--
ALTER TABLE `sgt_plantilla`
  MODIFY `plantilla_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sgt_tipoticket`
--
ALTER TABLE `sgt_tipoticket`
  MODIFY `tipoticket_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
