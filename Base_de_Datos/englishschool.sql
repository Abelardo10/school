-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2018 a las 13:17:59
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
-- Estructura de tabla para la tabla `tbacudiente`
--

CREATE TABLE `tbacudiente` (
  `Acudiente_id` int(11) NOT NULL,
  `primer_nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `segundo_nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_paterno` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_materno` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_documento` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `documento_identidad` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `grupo_sanguineo` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Barrio_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Gestión de acudiente';

--
-- Volcado de datos para la tabla `tbacudiente`
--

INSERT INTO `tbacudiente` (`Acudiente_id`, `primer_nombre`, `segundo_nombre`, `apellido_paterno`, `apellido_materno`, `tipo_documento`, `documento_identidad`, `email`, `grupo_sanguineo`, `Barrio_id`) VALUES
(2, 'prueba', 'prueba', 'prueba', 'prueba', 'Cedula', 1212121, 'prueba@gmail.com', 'A-', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbbarrio`
--

CREATE TABLE `tbbarrio` (
  `Barrio_id` int(11) NOT NULL,
  `barrio` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Gestión de Barrio';

--
-- Volcado de datos para la tabla `tbbarrio`
--

INSERT INTO `tbbarrio` (`Barrio_id`, `barrio`) VALUES
(1, 'Los lagos'),
(2, 'Las Orquideas'),
(3, 'Andres Sanin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbdocente`
--

CREATE TABLE `tbdocente` (
  `Docente_id` int(11) NOT NULL,
  `primer_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `segundo_nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_paterno` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_materno` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_documento` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `documento_identidad` int(11) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `grupo_sanguineo` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Barrio_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Gestión de Docentes';

--
-- Volcado de datos para la tabla `tbdocente`
--

INSERT INTO `tbdocente` (`Docente_id`, `primer_nombre`, `segundo_nombre`, `apellido_paterno`, `apellido_materno`, `tipo_documento`, `documento_identidad`, `email`, `grupo_sanguineo`, `Barrio_id`) VALUES
(2, 'prueba', 'prueba', 'prueba', 'prueba', 'Cedula', 1212121212, 'prueba@gmail.com', 'A-', NULL);

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
  `tipo_documento` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
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

INSERT INTO `tbestudiante` (`Estudiante_id`, `primer_nombre`, `segundo_nombre`, `apellido_paterno`, `apellido_materno`, `tipo_documento`, `documento_identidad`, `email`, `Grado_id`, `Barrio_id`, `Acudiente_id`, `grupo_sanguineo`) VALUES
(2, 'Cristian', 'Camilo', 'Bastidas', 'Sinisterra', 'Cedula', 10101010, 'camilo@gmail.com', 0, 0, 0, 'B+');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbgrado`
--

CREATE TABLE `tbgrado` (
  `Grado_id` int(11) NOT NULL,
  `grado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Gestion de Grado';

--
-- Volcado de datos para la tabla `tbgrado`
--

INSERT INTO `tbgrado` (`Grado_id`, `grado`) VALUES
(1, '8-1'),
(2, '8-2'),
(4, '8-3');

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

--
-- Volcado de datos para la tabla `tbrol`
--

INSERT INTO `tbrol` (`Rol_id`, `rol`) VALUES
(1, 'administrador'),
(3, 'Docente'),
(4, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbstatus`
--

CREATE TABLE `tbstatus` (
  `Status_id` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Gestion de Status';

--
-- Volcado de datos para la tabla `tbstatus`
--

INSERT INTO `tbstatus` (`Status_id`, `status`) VALUES
(1, 'activo'),
(2, 'Inactivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbacudiente`
--
ALTER TABLE `tbacudiente`
  ADD PRIMARY KEY (`Acudiente_id`);

--
-- Indices de la tabla `tbbarrio`
--
ALTER TABLE `tbbarrio`
  ADD PRIMARY KEY (`Barrio_id`);

--
-- Indices de la tabla `tbdocente`
--
ALTER TABLE `tbdocente`
  ADD PRIMARY KEY (`Docente_id`);

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
-- AUTO_INCREMENT de la tabla `tbacudiente`
--
ALTER TABLE `tbacudiente`
  MODIFY `Acudiente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbbarrio`
--
ALTER TABLE `tbbarrio`
  MODIFY `Barrio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbdocente`
--
ALTER TABLE `tbdocente`
  MODIFY `Docente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbestudiante`
--
ALTER TABLE `tbestudiante`
  MODIFY `Estudiante_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbgrado`
--
ALTER TABLE `tbgrado`
  MODIFY `Grado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `Login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbrol`
--
ALTER TABLE `tbrol`
  MODIFY `Rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbstatus`
--
ALTER TABLE `tbstatus`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
