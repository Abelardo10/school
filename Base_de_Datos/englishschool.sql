-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2018 a las 06:25:55
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `englishschool`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbestudiante`
--

CREATE TABLE `tbestudiante` (
  `Estudiante_id` int(11) NOT NULL,
  `primer_nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `segundo_nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_paterno` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_materno` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `documento_identidad` bigint(20) NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Grado_id` int(11) NOT NULL,
  `Barrio_id` int(11) NOT NULL,
  `Acudiente_id` int(11) NOT NULL,
  `grupo_sanguineo` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbestudiante`
--

INSERT INTO `tbestudiante` (`Estudiante_id`, `primer_nombre`, `segundo_nombre`, `apellido_paterno`, `apellido_materno`, `documento_identidad`, `email`, `Grado_id`, `Barrio_id`, `Acudiente_id`, `grupo_sanguineo`) VALUES
(1, 'Cristian', 'Camilo', 'Bastidas', '', 1007234567, 'camilo@gmail.com', 1, 1, 1, 'A+');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbgrado`
--

CREATE TABLE `tbgrado` (
  `Grado_id` int(11) NOT NULL,
  `grado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Gestion de Grado';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblogin`
--

CREATE TABLE `tblogin` (
  `Login_id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Status_id` int(11) NOT NULL,
  `Rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Gestion de Login';

--
-- Volcado de datos para la tabla `tblogin`
--

INSERT INTO `tblogin` (`Login_id`, `usuario`, `password`, `Status_id`, `Rol_id`) VALUES
(1, 'Camilo', '123', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrol`
--

CREATE TABLE `tbrol` (
  `Rol_id` int(11) NOT NULL,
  `rol` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbstatus`
--

CREATE TABLE `tbstatus` (
  `Status_id` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Gestion de Status';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbestudiante`
--
ALTER TABLE `tbestudiante`
  ADD PRIMARY KEY (`Estudiante_id`);

--
-- Indices de la tabla `tbgrado`
--
ALTER TABLE `tbgrado`
  ADD PRIMARY KEY (`Grado_id`);

--
-- Indices de la tabla `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`Login_id`);

--
-- Indices de la tabla `tbrol`
--
ALTER TABLE `tbrol`
  ADD PRIMARY KEY (`Rol_id`);

--
-- Indices de la tabla `tbstatus`
--
ALTER TABLE `tbstatus`
  ADD PRIMARY KEY (`Status_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbestudiante`
--
ALTER TABLE `tbestudiante`
  MODIFY `Estudiante_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbgrado`
--
ALTER TABLE `tbgrado`
  MODIFY `Grado_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `Login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbrol`
--
ALTER TABLE `tbrol`
  MODIFY `Rol_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbstatus`
--
ALTER TABLE `tbstatus`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
