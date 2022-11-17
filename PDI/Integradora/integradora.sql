-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2022 a las 15:16:49
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integradora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `Legajo` int(10) NOT NULL,
  `Nombre_Apellido` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Puesto` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `Fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`Legajo`, `Nombre_Apellido`, `Puesto`, `Fecha_ingreso`) VALUES
(15, 'saeihnjofsiua', '1', '2022-11-02'),
(16, 'Verdu gez', '5', '2022-11-03'),
(19, 'sas', '3', '2001-03-26'),
(21, 'bobo', '3', '1983-07-21'),
(22, 'bobo', '3', '1983-07-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `id` int(11) NOT NULL,
  `puesto` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `sueldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id`, `puesto`, `sueldo`) VALUES
(1, 'Mozo', 50000),
(2, 'Chef', 240000),
(3, 'Cocinero', 60000),
(4, 'Cajero', 40000),
(5, 'Gerente', 111000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`Legajo`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `Legajo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
