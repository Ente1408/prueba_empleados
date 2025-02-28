-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2022 a las 02:09:13
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba8`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ds_departamento`
--

CREATE TABLE `ds_departamento` (
  `id` int(11) NOT NULL ,
  `nombre_departamento` varchar(200) NOT NULL,
  `ciudad_departamento` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ds_empleado`
--

CREATE TABLE `ds_empleado` (
  `id` int(11) NOT NULL ,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `salario` decimal(10,0) NOT NULL,
  `id_niveleducacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ds_niveleducacion`
--

CREATE TABLE `ds_niveleducacion` (
  `id` int(11) NOT NULL ,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ds_departamento`
--
ALTER TABLE `ds_departamento`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ds_departamento`
  MODIFY COLUMN `id`  int(11) NOT NULL AUTO_INCREMENT;

--
-- Indices de la tabla `ds_empleado`
--
ALTER TABLE `ds_empleado`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ds_empleado`
  MODIFY COLUMN `id`  int(11) NOT NULL AUTO_INCREMENT;

--
-- Indices de la tabla `ds_niveleducacion`
--
ALTER TABLE `ds_niveleducacion`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ds_niveleducacion`
  MODIFY COLUMN `id`  int(11) NOT NULL AUTO_INCREMENT;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
