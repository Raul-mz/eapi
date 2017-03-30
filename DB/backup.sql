-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-03-2017 a las 22:59:10
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
-- Estructura de tabla para la tabla `sgt_empresa`
--

CREATE TABLE `sgt_empresa` (
  `empresa_id` int(10) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `pais_id` int(3) NOT NULL,
  `region_id` int(2) NOT NULL,
  `provincia_id` int(2) NOT NULL,
  `localidad_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `reference` varchar(20) NOT NULL,
  `value` varchar(50) NOT NULL,
  `sequence` int(2) NOT NULL,
  `isDisplay` int(1) NOT NULL DEFAULT '1',
  `isMandatory` int(1) NOT NULL DEFAULT '0',
  `isSameLine` int(1) NOT NULL DEFAULT '0',
  `isReadOnly` int(1) NOT NULL DEFAULT '0',
  `isPrimaryKey` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sgt_field`
--

INSERT INTO `sgt_field` (`field_id`, `menu_id`, `columnName`, `name`, `type`, `reference`, `value`, `sequence`, `isDisplay`, `isMandatory`, `isSameLine`, `isReadOnly`, `isPrimaryKey`) VALUES
(1, 1, 'perfil_id', 'Cod. Perfil', 1, '', '', 1, 1, 1, 0, 1, 1),
(2, 1, 'fecha_alta', 'Fecha de Alta', 5, '', '#toDay', 2, 1, 1, 1, 0, 0),
(3, 1, 'nombre', 'Nombre', 1, '', '', 3, 1, 1, 0, 0, 0),
(4, 1, 'descripcion', 'Descripción', 1, '', '', 4, 1, 0, 0, 0, 0),
(5, 1, 'fecha_baja', 'Fecha de Baja', 5, '', '', 5, 1, 0, 0, 1, 0),
(6, 1, 'activo', 'Activo', 4, '', 'checked', 6, 1, 0, 1, 0, 0),
(7, 2, 'plantilla_id', 'Cod. Plantilla', 1, '', '', 0, 1, 0, 0, 1, 1),
(8, 2, 'fecha_alta', 'Fecha de Alta', 5, '', '#toDay', 1, 1, 1, 1, 0, 0),
(9, 2, 'nombre', 'Nombre', 1, '', '', 2, 1, 1, 0, 0, 0),
(10, 2, 'descripcion', 'Descripcion', 2, '', '', 3, 1, 0, 0, 0, 0),
(11, 2, 'modelo', 'Modelo', 3, '', '', 4, 1, 0, 0, 0, 0),
(12, 2, 'fecha_baja', 'Fecha de Baja', 5, '', '', 5, 1, 0, 0, 1, 0),
(13, 2, 'activo', 'Activo', 4, '', 'checked', 7, 1, 0, 1, 0, 0),
(14, 3, 'tipoticket_id', 'Cod. Tipo', 1, '', '', 0, 1, 1, 0, 1, 1),
(15, 3, 'fecha_alta', 'Fecha de Alta', 5, '', '#toDay', 1, 1, 1, 1, 0, 0),
(16, 3, 'nombre', 'Nombre', 1, '', '', 2, 1, 1, 0, 0, 0),
(17, 3, 'clase', 'Clase del Tipo de Ticket', 1, '', '', 3, 1, 0, 0, 0, 0),
(18, 3, 'descripcion', 'Descripcion', 1, '', '', 4, 1, 0, 0, 0, 0),
(19, 3, 'plantilla_id', 'Plantilla', 6, 'sgt_plantilla', '', 5, 1, 1, 0, 0, 0),
(20, 3, 'c_fondo', 'Color de Fondo', 7, '', '', 6, 1, 0, 0, 0, 0),
(21, 3, 'c_texto', 'Color del Texto', 7, '', '', 7, 1, 0, 1, 0, 0),
(22, 3, 'fecha_baja', 'Fecha de Baja', 5, '', '', 8, 1, 0, 0, 0, 0),
(23, 4, 'empresa_id', 'Cod. Empresa', 1, '', '', 0, 1, 0, 0, 1, 1),
(24, 4, 'fecha_alta', 'Fecha de Alta', 5, '', '#toDay', 1, 1, 1, 1, 0, 0),
(25, 4, 'nombre', 'Nombre', 1, '', '', 2, 1, 1, 0, 0, 0),
(28, 4, 'sector', 'Sector de Empresa', 8, '', '', 3, 1, 0, 0, 0, 0),
(29, 4, 'pais_id', 'Cod. Pais', 8, '', '', 4, 1, 0, 0, 0, 0),
(30, 4, 'region_id', 'Cod. Region', 8, '', '', 5, 1, 0, 1, 0, 0),
(31, 4, 'provincia_id', 'Cod. Provincia', 8, '', '', 5, 1, 0, 0, 0, 0),
(32, 4, 'localidad_id', 'Cod. Localidad', 8, '', '', 6, 1, 0, 1, 0, 0),
(33, 5, 'usuario_id', 'Cod. Usuario', 1, '', '', 0, 1, 1, 0, 1, 1),
(34, 5, 'fecha_alta', 'Fecha de Alta', 5, '', '#toDay', 1, 1, 1, 1, 0, 0),
(35, 5, 'nombre', 'Nombre', 1, '', '', 2, 1, 1, 0, 0, 0),
(36, 5, 'apellido', 'Apellido', 1, '', '', 2, 1, 0, 1, 0, 0),
(37, 5, 'usuario', 'Nombre de Usuario', 1, '', '', 3, 1, 1, 0, 0, 0),
(38, 5, 'contrasena', 'Contraseña', 9, '', '', 5, 1, 0, 0, 0, 0),
(39, 5, 'agente', 'Es Agente', 4, '', '', 6, 1, 0, 1, 0, 0);

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
(2, 'sgt_plantilla', 'Plantilla', 2),
(3, 'sgt_tipoticket', 'Tipo de Ticket', 3),
(4, 'sgt_empresa', 'Empresa', 4),
(5, 'sgt_usuario', 'Usuario', 4);

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
(1, '2017-03-21', 'Triple', 'T', '2017-03-22', 1),
(8, '2017-03-30', 's', 'd', '0000-00-00', 1);

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
  `fecha_baja` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `activo` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sgt_plantilla`
--

INSERT INTO `sgt_plantilla` (`plantilla_id`, `fecha_alta`, `nombre`, `descripcion`, `modelo`, `fecha_baja`, `activo`) VALUES
(1, '2017-03-22 03:41:32', 'Plantilla Prueba', 'Prueba', 'xls', '0000-00-00 00:00:00', 1),
(5, '0000-00-00 00:00:00', 'ds', 'asd', 'ds', '0000-00-00 00:00:00', 0);

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
-- Volcado de datos para la tabla `sgt_tipoticket`
--

INSERT INTO `sgt_tipoticket` (`tipoticket_id`, `fecha_alta`, `nombre`, `clase`, `descripcion`, `plantilla_id`, `c_fondo`, `c_texto`, `fecha_baja`) VALUES
(1, '2017-03-30 04:00:00', 'Test', 'Nuevo', '', 1, '#ffffff', '#000000', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sgt_usuario`
--

CREATE TABLE `sgt_usuario` (
  `usuario_id` int(10) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `agente` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sgt_usuario`
--

INSERT INTO `sgt_usuario` (`usuario_id`, `fecha_alta`, `nombre`, `apellido`, `usuario`, `contrasena`, `agente`) VALUES
(1, '2017-03-30 04:00:00', 'test', 'test', 'test', 'test', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sgt_empresa`
--
ALTER TABLE `sgt_empresa`
  ADD PRIMARY KEY (`empresa_id`);

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
-- Indices de la tabla `sgt_usuario`
--
ALTER TABLE `sgt_usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sgt_empresa`
--
ALTER TABLE `sgt_empresa`
  MODIFY `empresa_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sgt_field`
--
ALTER TABLE `sgt_field`
  MODIFY `field_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `sgt_menu`
--
ALTER TABLE `sgt_menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `sgt_perfil`
--
ALTER TABLE `sgt_perfil`
  MODIFY `perfil_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `sgt_plantilla`
--
ALTER TABLE `sgt_plantilla`
  MODIFY `plantilla_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `sgt_tipoticket`
--
ALTER TABLE `sgt_tipoticket`
  MODIFY `tipoticket_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `sgt_usuario`
--
ALTER TABLE `sgt_usuario`
  MODIFY `usuario_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
