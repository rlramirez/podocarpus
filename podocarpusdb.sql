-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2019 a las 02:01:57
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.28

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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `rol`, `user`, `password`) VALUES
(1, 'Ramiro', 'Ramírez', '12', 1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--Estructura de tabla para la tabla 'servicios'

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nom_servicio` varchar(100) NOT NULL,
  `fecha_ini_tem` varchar(100) NOT NULL,
  `fecha_fin_tem` varchar(50) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `informacion` varchar(100) NOT NULL,
  `galeria` varchar(100) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

  INSERT INTO `servicios` (`id`, `nom_servicio`, `fecha_ini_tem`, `fecha_fin_tem`, `capacidad`, `responsable`, `informacion`, `galeria`) VALUES
(null, 'camping', '1 de enero', '31 de diciembre', 15, 'pedro', 'Localidad: San Sebastián,Barrio/Sector: Cajanuma,Atractivo Turístico: Bosque Nublado','pendiente');


--Estructura de tabla para la tabla 'Noticias'

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `noticia` (
  `idNoticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `autor` varchar(45) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `descripcion` varchar(225) NOT NULL,
  `contenido` varchar(5000) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`idNoticia`),
  KEY `id_categoria_idx` (`idCategoria`),
  CONSTRAINT `id_categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


