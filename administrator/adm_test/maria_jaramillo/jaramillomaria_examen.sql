-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2019 a las 01:12:10
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `podocarpusdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jaramillomaria_examen`
--

CREATE TABLE `jaramillomaria_examen` (
  `id` int(11) NOT NULL,
  `temperatura` int(3) NOT NULL,
  `hora` int(25) NOT NULL,
  `fecha` date NOT NULL,
  `anemometro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `jaramillomaria_examen`
--

INSERT INTO `jaramillomaria_examen` (`id`, `temperatura`, `hora`, `fecha`, `anemometro`) VALUES
(1, 15, 122015, '2019-05-01', 0),
(2, 18, 12, '2019-05-02', 0),
(3, 26, 10, '2019-05-23', 30),
(4, 11, 9, '2019-05-12', 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jaramillomaria_examen`
--
ALTER TABLE `jaramillomaria_examen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jaramillomaria_examen`
--
ALTER TABLE `jaramillomaria_examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
