-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2019 a las 19:11:51
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

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
-- Estructura de tabla para la tabla `caicedo_sensor`
--

CREATE TABLE `caicedo_sensor` (
  `hora` text NOT NULL,
  `fecha` date NOT NULL,
  `temperatura` float NOT NULL,
  `anemometro` float NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `caicedo_sensor`
--

INSERT INTO `caicedo_sensor` (`hora`, `fecha`, `temperatura`, `anemometro`, `id`) VALUES
('10:00', '2019-05-19', 18.5, 20.3, 6),
('12:00', '2019-05-19', 16.5, 22.3, 7),
('15:00', '2019-05-19', 12, 27, 8),
('10:00', '2019-05-20', 25, 12.5, 9),
('12:00', '2019-05-20', 15, 123, 10),
('15:00', '2019-05-20', 10.5, 14.5, 11),
('10:00', '2019-05-21', 8, 140.5, 12),
('12:00', '2019-05-21', 20, 89.5, 13),
('15:00', '2019-05-21', 14, 142, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aves`
--

CREATE TABLE `aves` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nombre_c` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `habitat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aves`
--

INSERT INTO `aves` (`id`, `nombre`, `nombre_c`, `descripcion`, `habitat`) VALUES
(1, 'Águila', 'Aquila chrysaetos', 'Águila es el nombre dado a las mayores aves depredadoras. Las diversas especies y subespecies de águilas pueden encontrarse en casi cualquier parte del mundo excepto en la Antártida. Son miembros de las aves de presa, del orden de Accipitriformes, (o Falconiformes acorde a una clasificación anterior), familia Accipitridae, subfamilia Buteoninae.', 'Zona montañosa con bosques');

-- --------------------------------------------------------

CREATE TABLE `febre_examen` (
  `id_febre` int(11) NOT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `temperatura` float DEFAULT NULL,
  `fecha` varchar(200) DEFAULT NULL,
  `anemometro` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `febre_examen` (`id_febre`, `hora`, `temperatura`, `fecha`, `anemometro`) VALUES
(1, '18:00', 24, '2019-05-12', 34),
(2, '17:00', 45, '2019-05-19', 37);

--
<<<<<<< HEAD
-- Estructura de tabla para la tabla `jaramillo_examen`
--

CREATE TABLE `jaramillo_examen` (
  `id` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `hora` varchar(11) NOT NULL,
  `fecha` varchar(11) NOT NULL,
  `anemometro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jaramillo_examen`
--

INSERT INTO `jaramillo_examen` (`id`, `temperatura`, `hora`, `fecha`, `anemometro`) VALUES
(4, 35, '13:00', '22/05/2019', 10),
(5, 30, '15:00', '23/05/2019', 28),
(6, 22, '10:00', '24/05/2019', 15),
(7, 20, '08:00', '26/05/2019', 32);
=======
-- Estructura de tabla para la tabla `ramon_datos`
--

CREATE TABLE `ramon_datos` (
  `id` int(11) NOT NULL,
  `temperatura` double NOT NULL,
  `hora` varchar(20) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `anemometro` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ramon_datos`
--

INSERT INTO `ramon_datos` (`id`, `temperatura`, `hora`, `fecha`, `anemometro`) VALUES
(1, 65, '15:00', '22/05/2019', 65),
(2, 69, '12:00', '23/05/2019', 25),
(3, 75, '12:00', '2019-04-30', 12),
(4, 75, '16:00', '2019-01-02', 75),
(5, 78, '15:00', '2019-05-01', 20);
>>>>>>> c6c0345c64cf6fbb959c86f67be2dc75146db1a1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

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

-- --------------------------------------------------------
INSERT INTO `servicios` (`id_servicios`, `nom_servicio`, `fecha_ini_tem`, `fecha_fin_tem`, `capacidad`, `responsable`, `informacion`, `galeria`) VALUES
(1, 'Caminatas', '2019-02-01', '2019-04-01', 35, 'Danilo Alfredo  Perez  Ochoa', '<p>Ofrece a los turistas caminatas y excursiones por los senderos educativos autoguiados, el m&aacute;s corto es el sendero Oso de Anteojos, cuyo recorrido dura 15 min.&nbsp;</p>', '1558498006_caminata.jpg'),
(2, 'Caballos', '2019-01-01', '2019-12-24', 22, 'Luis Eduar Cajas Macas', '<p>Es un centro ecuestre muy conocido y tamb&eacute;n nosotros le ofrecemos varios tours directamente de la hoster&iacute;a, en cooperaci&oacute;n con los mejores gu&iacute;as nativos de Podocarpus.</p>', '1558647415_CABALLOS.jpg'),
(3, 'Fotos', '2019-04-15', '2019-08-31', 100, 'Mariuxi Fernanda Extrada Paucar', '<p>Dentro de la hoster&iacute;a se pueden observar una gran variedad de aves nativas , en el parque nacional &quot;Podocarpus&quot; existen alrededor de 620 especies.</p>', '1558373328_por-que-observar-aves1.jpg'),
(4, 'Campamento', '2019-05-01', '2019-11-07', 170, 'Karla Fernanda Torrez Macas', '<p>Nos permite disfrutar del contacto con la naturaleza, el descubrimiento personal unico, compartir con familiares en un &aacute;mbito diferente.</p>', '1558234701_campamento.jpg');
--
-- Estructura de tabla para la tabla `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `domicilio` varchar(300) NOT NULL,
  `nacionalidad` varchar(150) NOT NULL,
  `lugarEncargo` varchar(150) NOT NULL,
  `urlAvatar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `staff`
--

INSERT INTO `staff` (`id`, `nombres`, `apellidos`, `correo`, `celular`, `domicilio`, `nacionalidad`, `lugarEncargo`, `urlAvatar`) VALUES
(1, 'Juan', 'Perez', 'jperez@gmail.com', '0999999999', 'Manuel Agustin Aguirre y SUcre', 'Ecuatoriana', 'PN Podocarpus Refugio', 'url'),
(4, 'Ramiro', 'Leon', 'rleon1@yahoo.es', '0919191919', ' bolivar y sucre', 'venezuelan', 'Administracion', 'url1');

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
(1, 'Ramiro', 'Ramirez', '12@gmail.com', 1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jaramillo_examen`
--
ALTER TABLE `jaramillo_examen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aves`
--
ALTER TABLE `aves`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aves`
--
ALTER TABLE `aves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;


-- -----------------------------------------------------
-- Table `Sector`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sector` (
  `idSector` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(65) NULL
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lugares`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `lugares`(
  `idLugares` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(100) NOT NULL,
  `latitud` FLOAT NOT NULL,
  `longitud` FLOAT NOT NULL,
  `descripcion` VARCHAR(1000) NULL,
  `url` VARCHAR(1000) NOT NULL,
  `id_sector` INT NOT NULL,
  CONSTRAINT `fk_lugares_Sector`
    FOREIGN KEY (id_sector) REFERENCES sector (idSector)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- Table `fotos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fotos` (
  `idFotos` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `url` VARCHAR(650) NULL,
  `id_lugares` INT NOT NULL,
  CONSTRAINT `fk_Foto_lugares`
    FOREIGN KEY (`id_lugares`)
    REFERENCES `lugares` (`idLugares`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `sector` (`idSector`, `nombre`) VALUES (1, 'Bombuscaro');
INSERT INTO `sector` (`idSector`, `nombre`) VALUES (2, 'Romerillos');
INSERT INTO `sector` (`idSector`, `nombre`) VALUES (3, 'Zona Alta');
INSERT INTO `sector` (`idSector`, `nombre`) VALUES (4, 'Zona Baja');

INSERT INTO `podocarpusdb`.`lugares` (`idLugares`, `nombre`, `latitud`, `longitud`, `descripcion`, `url`, `id_sector`) VALUES (1, 'Lagunas de los Compadres', -4.163348, -79.1108917, 'Constituyen uno de los principales atractivos turísticos del parque. Es un sitio muy recomendado para los que gustan de la pesca deportiva y la aventura. La mejor época para visitar este sector es el mes de noviembre, cuando se puede acampar en sus orillas y recorrer los alrededores. Con algo de suerte es posible observar algunas especies relativamente comunes del sector, como el tapir de montaña o el lobo de páramo.', 'https://especiales.elcomercio.com/planeta-ideas/imagenes/imagenes/ambiente-laguna.jpg',1);

-- -----------------------------------------------------
-- fotos`
-- -----------------------------------------------------
INSERT INTO `podocarpusdb`.`fotos` (`idFotos`, `url`, `id_lugares`) VALUES (1, 'https://especiales.elcomercio.com/planeta-ideas/imagenes/imagenes/ambiente-laguna.jpg', 1);

<<<<<<< HEAD
CREATE TABLE `gaona_sensor` (
  `id` int(11) NOT NULL,
  `temperatura` varchar(50) NOT NULL,
  `hora` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `adem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gaona_sensor`
--

INSERT INTO `gaona_sensor` (`id`, `temperatura`, `hora`, `fecha`, `adem`) VALUES
(4, '30', '12:45', '05/06/2019', '30'),
(5, '40', '20:45', '06/06/2019', '50'),
(6, '36', '11:44', '07/06/2019', '10'),
(7, '18', '11:40', '08/06/2019', '20');
=======
<<<<<<< HEAD
CREATE TABLE `guarnizo_examen` (
  `id` int(11) NOT NULL,
  `temperatura` int(50) NOT NULL,
  `hora` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `medidor` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `guarnizo_examen` (`id`, `temperatura`, `hora`, `fecha`, `medidor`) VALUES
(4, 10, '10:00 am', '2019-05-22', 30),
(5, 10, '12:30', '2019-05-04', 40),
(6, 40, '14:00', '2019-05-11', 29),
(7, 69, '13:40', '2019-05-04', 40);

ALTER TABLE `guarnizo_examen`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `guarnizo_examen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


=======

CREATE TABLE `apolo_examen` ( 
  `idSensor` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  `temperatura` INT NOT NULL , 
  `hora` TIME NOT NULL ,
  `fecha` DATE NOT NULL , 
  `velocidad` INT NOT NULL 
  ) ENGINE = InnoDB;

INSERT INTO `apolo_examen` (`temperatura`, `hora`, `fecha`, `velocidad`) VALUES (34, '12:17:00', '2019-05-28', 4);






--
-- Estructura de tabla para la tabla `quito_datos`
--

CREATE TABLE `quito_datos` (
  `id` int(11) NOT NULL,
  `hora` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `anemometro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `quito_datos`
--

INSERT INTO `quito_datos` (`id`, `hora`, `fecha`, `anemometro`) VALUES
(1, '15:30', '2019-05-22', '100'),
(2, '15:31', '2019-05-22', '100'),
(3, '15:32', '2019-05-22', '100'),
(4, '15:33', '2019-05-23', '100');

-- --------------------------------------------------------

-- Indices de la tabla `quito_datos`
--
ALTER TABLE `quito_datos`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT de la tabla `quito_datos`
--
ALTER TABLE `quito_datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


--Tabla de Freddy Villavicencio ---

CREATE TABLE `villavicencio_examen` (
  `id` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `velocidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `villavicencio_examen`
--

INSERT INTO `villavicencio_examen` (`id`, `temperatura`, `hora`, `fecha`, `velocidad`) VALUES
(7, 10, '17:23', '2019-05-22', 10),
(9, 10, '17:43', '2019-05-22', 10);

CREATE TABLE `pachar_sensores` (
  `idSensores` int(11) NOT NULL,
  `temperatura` VARCHAR(10)DEFAULT NULL,
  `hora` VARCHAR(10) DEFAULT NULL
  `fecha` varchar(100) DEFAULT NULL,
  `anemometro` VARCHAR(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `pachar_sensore` (`idSensores`, `temperatura`, `hora`, `fecha`, `anemometro`) VALUES (1, '43', '09:00', '2019-05-30', '345');
INSERT INTO `pachar_sensore` (`idSensores`, `temperatura`, `hora`, `fecha`, `anemometro`) VALUES (2, '43', '10:00', '2015-04-05', '234');
INSERT INTO `pachar_sensore` (`idSensores`, `temperatura`, `hora`, `fecha`, `anemometro`) VALUES (6, '43', '19:00', '2019-07-22', '275');
INSERT INTO `pachar_sensore` (`idSensores`, `temperatura`, `hora`, `fecha`, `anemometro`) VALUES (7, '43', '08:00', '2019-05-20', '30');
INSERT INTO `pachar_sensore` (`idSensores`, `temperatura`, `hora`, `fecha`, `anemometro`) VALUES (8, '43', '18:00', '2019-07-20', '55');
>>>>>>> 8a415802202b666857e1ba005a8a8d88f99dcd37

<<<<<<< HEAD
--Estructura de tabla para la tabla 'Noticias y categoria'
---------------------------------------------------------
---------------------------------------------------------
=======
>>>>>>> 041167ca255354af9d7fca91e03001c02e559bd6

<<<<<<< HEAD
CREATE TABLE `margory_ayala` (
  `temperatura` decimal(30,0) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `anemometro` decimal(50,0) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `margory_ayala`
--

INSERT INTO `margory_ayala` (`temperatura`, `hora`, `fecha`, `anemometro`, `id`) VALUES
('24', '06:01:00', '2019-05-23', '10', 1),
('45', '04:05:00', '2019-05-26', '0', 4),
('5', '06:07:00', '2019-05-26', '0', 5),
('34', '07:02:00', '2019-05-18', '0', 6),
('23', '03:04:00', '2019-05-25', '3', 7),
('54', '03:05:00', '2019-05-18', '44', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `margory_ayala`
--
ALTER TABLE `margory_ayala`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `margory_ayala`
--
ALTER TABLE `margory_ayala`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
=======
>>>>>>> c50c7dd66db94046ca4a1d55ca858c67f2c1a883
>>>>>>> 16fb486524a96bfc5ddaf8af37bfed94c372e15e

<<<<<<< HEAD
CREATE TABLE `test`.`atiencia_examen` ( `Temperatura` INT NOT NULL , `Hora` VARCHAR NOT NULL , `Fecha` VARCHAR NOT NULL , `anemometro` INT NOT NULL ) ENGINE = InnoDB;
INSERT INTO `atiencia_examen` (`Temperatura`, `Hora`, `Fecha`, `anemometro`) VALUES
(45, '10:00', '20/05/2019', 27),
(30, '10:00', '14/05/2019', 26),
(36, '14:00', '14/05/2019', 25),
(35, '15:00', '14/05/2019', 30),
(40, '16:00', '14/05/2019', 28),
(27, '14:00', '14/05/2019', 36),
(39, '16:00', '14/05/2019', 34),
(38, '17:00', '14/05/2019', 35);
=======
CREATE TABLE `yoderaguirre` (
  `id` int(11) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `hora` datetime NOT NULL,
  `fecha` date NOT NULL,
  `anemometro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

----
INSERT INTO `categoria` (`idCategoria`, `categoria`) VALUES
(0, 'Plantas'),
(0, 'InvestigaciÃ³n'),
(0, 'MontaÃ±as'),
(0, 'EcologÃ­a'),
(0, 'Aves'),
(0, 'Rios'),
(0, 'Especies'),
(0, 'Serpientes'),
(0, 'Lagos'),
(0, 'Vertebrados');

INSERT INTO `noticia` (`idNoticia`, `titulo`, `fecha`, `autor`, `imagen`, `descripcion`, `contenido`, `idCategoria`) VALUES
(0, 'Ciudad de MÃ©xico prohibirÃ¡ plÃ¡sticos de uso Ãºnico', '2019-05-11', 'Freddy Villavicencio', 'imagenes/img3.jpg', 'El Congreso de Ciudad de MÃ©xico aprobÃ³ este jueves prohibir la comercializaciÃ³n, distribuciÃ³n y entrega de bolsas y diversos artÃ­culos de plÃ¡stico de un solo uso, una medida contra la contaminaciÃ³n ambiental.', '<p>El Congreso de Ciudad de M&eacute;xico aprob&oacute; este jueves prohibir la comercializaci&oacute;n, distribuci&oacute;n y entrega de bolsas y diversos art&iacute;culos de pl&aacute;stico de un solo uso, una medida contra la contaminaci&oacute;n ambiental que entrar&aacute; en vigor entre diciembre de 2020 y enero de 2021.</p><p>La reforma a la Ley de Residuos S&oacute;lidos de la capital mexicana, una las urbes m&aacute;s grandes y pobladas del mundo, <strong>restringir&aacute; primero el uso de fundas, salvo que sean biodegradables, y se extender&aacute; luego a objetos como cubiertos, platos, sorbetes, c&aacute;psulas de caf&eacute;, bastoncillos para hisopos, globos, entre otros</strong>, detall&oacute; el Congreso en un comunicado.</p><p>&quot;De esta medida quedan excluidas las bolsas que son necesarias por razones de higiene o que previenen el desperdicio de alimentos, siempre y cuando no existan alternativas&quot;, precis&oacute; el Legislativo local. La lista incluye a todos aquellos objetos fabricados total o parcialmente de pl&aacute;stico y que se desechan despu&eacute;s de un solo uso.</p><p>Los legisladores locales, que aprobaron la reforma casi por unanimidad, reconocieron que aunque la medida &quot;trastoca intereses&quot; <strong>es un primer paso hacia una regulaci&oacute;n que atienda &quot;un problema ambiental grave&quot;</strong>. Se busca trabajar en conjunto con las empresas afectadas en el proceso de cambio hacia el uso de otros materiales menos perjudiciales para el medio ambiente, dijeron.</p><p>&quot;Es un proceso que les permitir&aacute; a las empresas modificar sus esquemas de producci&oacute;n, modificar los elementos que utilizan para cada uno de sus productos&quot;, explic&oacute; Jos&eacute; Luis Rodr&iacute;guez, diputado del partido oficialista Morena, citado en el comunicado.</p><p>El legislador agreg&oacute; que a partir de septiembre el Congreso podr&iacute;a discutir la generaci&oacute;n de un esquema de est&iacute;mulos fiscales para las empresas que migren sus producciones de pl&aacute;sticos a materiales biodegradables.<strong> En Am&eacute;rica Latina y el Caribe se produce aproximadamente un 10% de los residuos generados a nivel global</strong>, seg&uacute;n datos de Naciones Unidas citados por el Congreso local.</p><p>En marzo, los pa&iacute;ses miembros de la ONU reunidos en Nairobi, Kenia, se comprometieron a una &quot;reducci&oacute;n significativa&quot; del pl&aacute;stico de uso &uacute;nico en la pr&oacute;xima d&eacute;cada, pese a las reticencias de varios pa&iacute;ses ricos a imponer restricciones a los productos contaminantes. Cada a&ntilde;o se vierten en los oc&eacute;anos ocho millones de toneladas de pl&aacute;stico.</p>', 1),
(0, 'Alemania inaugurÃ³ su primera autopista elÃ©ctrica', '2019-05-11', 'Freddy Villavicencio', 'imagenes/img2.jpg', 'Un tramo de la autopista A5 cerca de FrÃ¡ncfort se adapta a la recarga en movimiento de camiones con motores elÃ©ctricos. El gobierno busca soluciones para disminuir emisiones de contaminantes para el transporte de carga.', '<p>Un tramo de la autopista A5 cerca de <em><strong>Fr&aacute;ncfort</strong></em> se adapta a la recarga en movimiento de camiones con motores el&eacute;ctricos. El gobierno busca soluciones para disminuir emisiones de contaminantes para el transporte de carga. La primera autopista el&eacute;ctrica de Alemania, dirigida al transporte de carga, fue inaugurada el martes cerca de Frankfurt.</p><p>Se trata de un tramo de 5 kil&oacute;metros en la autopista A5, en el estado de Hesse. En ambos lados de la pista se colocaron cables a&eacute;reos, similares a los usados â€‹â€‹por los tranv&iacute;as el&eacute;ctricos. Los camiones con motores el&eacute;ctricos pueden acoplarse a los cables a&eacute;reos y recargar sus bater&iacute;as al pasar por el tramo. Cinco transportistas participan en una fase de pruebas, supervisada por el Ministerio de Medio Ambiente de Alemania.</p><p>Los camiones de la prueba tienen tecnolog&iacute;a h&iacute;brida (motores el&eacute;ctricos y de combusti&oacute;n), y el tramo con los cables sirve para la recarga de las bater&iacute;as, que pueden entonces ser utilizadas. Cuando se agotan, se activa el motor a combusti&oacute;n. El Ministerio quiere probar modelos para el transporte de carga en las carreteras. Se invirtieron 50 millones de euros (unos 56 millones de d&oacute;lares al cambio actual) en tres tramos de pruebas. Uno es el que est&aacute; cerca de Fr&aacute;ncfort, y los otros dos se construir&aacute;n en los estados de Schleswig-Holstein y Baden-W&uuml;rttemberg.</p><p>El objetivo final es encontrar soluciones para el transporte de carga que sean al mismo tiempo poco contaminantes y que emitan poco ruido. Las pruebas tambi&eacute;n evaluar&aacute;n si el cambio obstaculiza el tr&aacute;nsito y cu&aacute;l es el costo adicional de mantenimiento de las carreteras. Seg&uacute;n el Ministerio, el transporte de carga ha aumentado en los &uacute;ltimos a&ntilde;os y es un gran emisor de gases de efecto invernadero.</p><p>El Ministerio justific&oacute; la opci&oacute;n por la A5 con el fuerte tr&aacute;fico, de m&aacute;s de 130 mil veh&iacute;culos por d&iacute;a, de los cuales 13 mil son camiones. &quot;Si funciona aqu&iacute;, funciona en cualquier lugar&quot;, dijo un responsable.</p><p>Eso no significa que todas las autopistas del pa&iacute;s ser&iacute;an adaptadas. Seg&uacute;n c&aacute;lculos del Ministerio, bastar&iacute;an mil kil&oacute;metros para cubrir el transporte de carga. El costo final ser&iacute;a de 1 mill&oacute;n de euros ($ 1&#39;120.000) por kil&oacute;metro, o 1.000 millones de euros ($ 1.124 millones) en total.</p><p>No est&aacute; claro qui&eacute;n cargar&aacute; con los costos de la adaptaci&oacute;n de los camiones al nuevo sistema. Seg&uacute;n los c&aacute;lculos de la montadora Scania, que fabric&oacute; los prototipos para la prueba, un cami&oacute;n que se puede recargar mientras avanza, cuesta del 50 por ciento al 75 por ciento m&aacute;s que un cami&oacute;n normal.</p><p>Los actuales camiones que andan solo con motores el&eacute;ctricos pueden circular como m&aacute;ximo 10 kil&oacute;metros hasta que se queden sin carga. El objetivo es llegar a 60 kil&oacute;metros. Adem&aacute;s de Alemania, Suecia y Estados Unidos tambi&eacute;n tienen tramos de &quot;carreteras el&eacute;ctricas&quot;.</p>', 1),
(0, ' Excremento de focas y pingÃ¼inos, clave para mantener la biodiversidad en la AntÃ¡rtida', '2019-05-11', 'Freddy Villavicencio', 'imagenes/img6.png', 'Por mÃ¡s de medio siglo, los biÃ³logos estudiosos de la AntÃ¡rtida enfocaron sus investigaciones en entender las capacidades de los organismos para afrontar la sequÃ­a y el frÃ­o mÃ¡s severos del planeta.', '<p>Por m&aacute;s de medio siglo, los bi&oacute;logos estudiosos de la Ant&aacute;rtida enfocaron sus investigaciones en entender las capacidades de los organismos para afrontar la sequ&iacute;a y el fr&iacute;o m&aacute;s severos del planeta. Pero, hasta ahora, no han tenido en cuenta la relevancia de los excrementos de las colonias de ping&uuml;inos y focas, que contribuyen al ecosistema con su aporte de nitr&oacute;geno.</p><p>Un nuevo estudio publicado el jueves en el diario cient&iacute;fico Current Biology indica que los desechos ayudan a las comunidades de musgos y l&iacute;quenes, y que a su vez han sostenido a una gran cantidad de animales microsc&oacute;picos como col&eacute;mbolos y &aacute;caros m&aacute;s de 1.000 metros m&aacute;s all&aacute; de la colonia.</p><p>&quot;Lo que vemos es que el excremento producido por focas y ping&uuml;inos se evapora en parte como amon&iacute;aco&quot;, dijo el coautor Stef Bokhorst, del Departamento de Ciencias Ecol&oacute;gicas de la universidad de Vrije de Amsterdam.</p><p>Seg&uacute;n explic&oacute; el especialista, el amon&iacute;aco es recogido por el viento en la costa y trasladado hacia adentro del continente, donde se deposita en el suelo, proveyendo nitr&oacute;geno a los productores primarios. Es decir, lo que necesitan para sobrevivir en este entorno. Los investigadores desafiaron al fr&iacute;o y recorrieron &aacute;reas con desechos de animales, por no mencionar las hordas de elefantes marinos y ping&uuml;inos gent&uacute;, barbijo y Adelia, para examinar los suelos y las plantas circundantes.</p><p>Con aparatos capaces de medir su respiraci&oacute;n, recogieron muestras y las examinaron en laboratorios. Las revelaciones mostraron que hab&iacute;a millones de invertebrados diminutos por kil&oacute;metro cuadrado por la falta de predadores en el ambiente, a diferencia de lo que ocurre en las praderas europeas o estadounidenses, donde el n&uacute;mero apenas ronda entre 50.000 y 100.000.</p><p>&quot;Cuantos m&aacute;s animales obtengamos, mayor ser&aacute; la huella que existe, y encontraremos una mayor diversidad en esos sitios&quot;, dijo Bokhorst a AFP. De acuerdo con el experto, la riqueza de las especies est&aacute; m&aacute;s relacionada con los nutrientes a&ntilde;adidos por el excremento que con la naturaleza fr&iacute;a y seca de la regi&oacute;n.</p><p>La investigaci&oacute;n permiti&oacute; que el equipo realizara un mapa de los puntos calientes en la pen&iacute;nsula ant&aacute;rtica, encontrando que las colonias de ping&uuml;inos eran un agente de la biodiversidad. Los mapas pueden actualizarse en el futuro utilizando im&aacute;genes satelitales para determinar el tama&ntilde;o y la ubicaci&oacute;n de las colonias reproductoras, lo que libera a los futuros cient&iacute;ficos de tener que realizar un trabajo de campo peligroso.</p><p>Para Bokhorst, la Ant&aacute;rtida fue un &quot;laboratorio natural ideal&quot; para estudiar la relaci&oacute;n entre nutrientes y biodiversidad, por la simplicidad de la red alimentaria, en contraste con otras partes del mundo donde los ecosistemas son mucho m&aacute;s complejos. Pero el estudio tambi&eacute;n subray&oacute; cu&aacute;n interconectado estaba el ecosistema del continente y, por lo tanto, su vulnerabilidad a la actividad humana.</p><p>Todos los pa&iacute;ses que trabajan en el continente est&aacute;n bajo el Tratado Ant&aacute;rtico, que los obliga a proteger la vida silvestre. Pero Bokhorst dijo que el estudio mostr&oacute; que &quot;si empiezas a tocar en un extremo, tendr&aacute; un efecto en el otro&quot;.</p><p>&quot;Debes estar atento a que no est&aacute;s sobreexplotando los oc&eacute;anos para no da&ntilde;ar los suministros de alimentos; de lo contrario, tendr&aacute;s un impacto sobre la biodiversidad&quot;. Las comunidades invertebradas de la pen&iacute;nsula afrontan nuevos predadores, ya que el turismo creciente representa mayores chances de que los visitantes puedan traer semillas o incluso insectos con ellos.</p><p>&Eacute;stos, a su vez, podr&iacute;an beneficiarse del enriquecimiento del suelo y establecerse, amenazando a las especies nativas. &quot;Ese es un muy buen argumento de por qu&eacute; debemos tener cuidado con la Ant&aacute;rtida&quot;, dijo Bokhorst.</p>', 2),
(0, 'AdiÃ³s a las fundas plÃ¡sticas', '2019-05-12', 'Freddy Villavicencio', 'imagenes/img11.png', 'Este lunes, DÃ­a de la Tierra, EL UNIVERSO inicia un nuevo espacio: EcoUniverso, destinado a compartir informaciÃ³n que impulse a tomar acciones a favor del cuidado ambiental.', '<p>Este lunes, D&iacute;a de la Tierra, EL UNIVERSO inicia un nuevo espacio: EcoUniverso, destinado a compartir informaci&oacute;n que impulse a tomar acciones a favor del cuidado ambiental.</p><p><strong>&iquest;Por qu&eacute; es tan urgente tomar acciones?</strong> Porque el peligro es real. Los humanos ya viven las consecuencias de la contaminaci&oacute;n ambiental y el cambio clim&aacute;tico. Ecuador tambi&eacute;n est&aacute; siendo afectado. Solo durante unas horas de trabajo, el pasado 16 de abril, voluntarios de la organizaci&oacute;n ecuatoriana <strong>Mingas por el Mar</strong> lograron recolectar 142 kilos de desechos en la playa de Villamil. Los art&iacute;culos m&aacute;s encontrados fueron vasos y cubiertos pl&aacute;sticos, platos y tarrinas de foam y fundas pl&aacute;sticas.</p><p>En esta primera publicaci&oacute;n, el espacio EcoUniverso propone decir: <strong>Adi&oacute;s a las fundas pl&aacute;sticas.&nbsp;</strong></p><p><strong>Toma conciencia: </strong>Seguramente en alguna farmacia, alguna vez, te entregaron una peque&ntilde;a pastilla dentro de una funda. &iquest;Es necesario? No, no lo es. No necesitas fundas para todo. Puedes guardas las cosas directamente en tu cartera, mochila o bolsillo.</p><p><strong>Pasa a la acci&oacute;n: </strong>Usa fundas reutilizables. Cuando te entreguen algo en funda de tela u otro material que permita reutilizarse, gu&aacute;rdalas para usarlas luego. Tambi&eacute;n puedes comprar algunas fundas de yute, pl&aacute;stico o lona reciclada, entre otros materiales resistentes. Ser&aacute; una peque&ntilde;a inversi&oacute;n econ&oacute;mica a cambio de una gran ayuda para el planeta. Estas fundas reutilizables se venden en los principales supermercados del pa&iacute;s y en tiendas especializadas en productos amigables con el ambiente.</p><p><strong>Crea el h&aacute;bito:</strong> No siempre existieron las fundas pl&aacute;sticas. &iquest;Recuerdas que las abuelitas usaban canastas para ir al mercado? T&uacute; puedes guardar tus fundas reutilizables en el auto o siempre llevar una en tu cartera o mochila.&nbsp;</p><p>Puedes colocar un recordatorio (&iexcl;Fundas ecol&oacute;gicas!) en la puerta del refrigerador o de tu casa. Si acostumbras hacer las compras el d&iacute;a domingo, por ejemplo, puedes programar una alarma en tu tel&eacute;fono celular.&nbsp;As&iacute;, antes de salir, te aseguras de llevarlas.</p><p><strong>Es m&aacute;s f&aacute;cil de lo que crees. &iexcl;Vamos a intentarlo!</strong></p>', 1),
(0, 'Una reserva ecolÃ³gica del Guayas rodeada de sembrÃ­os, pesca y recintos en Ecuador', '2019-05-12', 'Freddy Villavicencio', 'imagenes/img12.jpg', 'Plantaciones de cacao y arroz, pastizales y las actividades pesqueras conviven con la Reserva EcolÃ³gica Manglares Churute, la primera Ã¡rea protegida de manglares del paÃ­s.', '<p>Las canoas encadenadas a los troncos m&aacute;s gruesos de los manglares, de los que se desprenden ramales m&aacute;s delgados que apuntan hacia el suelo fangoso en el que hay orificios, guaridas del cangrejo rojo (Ucides Occidentalis), son una evidencia de las capturas que se realizan al interior de la Reserva Ecol&oacute;gica Manglares Churute, en Naranjal en la provincia del Guayas.</p><p>La tranquilidad matutina de un lunes matizada con el cantar de las aves y el zumbido de los insectos se ve interrumpida con el ir y venir de los recolectores, que en motos usan el sendero de tierra para el traslado de los cangrejos, crust&aacute;ceo que es una exquisitez gastron&oacute;mica de Guayaquil y la regi&oacute;n Costa.</p><p>La extracci&oacute;n es parte de un manejo sustentable en una zona, que antes de ser declarada como &aacute;rea protegida hace 40 a&ntilde;os en 1979, ya inclu&iacute;a actividades productivas. Estas hoy se desarrollan justo en los l&iacute;mites de la reserva en los que hay plantaciones de arroz, cacao, pastizales y camaroneras, al igual que poblaciones.</p><p>Manglares Churute, ubicado a una hora desde Guayaquil hacia Naranjal en el margen occidental del estuario del r&iacute;o Guayas, es una muestra del manejo obligatorio que deben tener la mayor parte de las &aacute;reas protegidas del Ecuador, pa&iacute;s que al ser el m&aacute;s densamente poblado de Am&eacute;rica del Sur (56,5 habitantes por km2), tiene reservas naturales con habitantes que explotan los recursos.</p><p>&ldquo;Aqu&iacute; se cuenta con acuerdos de uso sostenible y custodia del manglar firmados entre la asociaci&oacute;n de pescadores y el Ministerio del Ambiente del Ecuador (MAE)&rdquo;, explica Juan Alejo Ch&aacute;vez, gerente del proyecto marino costero de la autoridad ambiental nacional.</p><p>Como parte del pacto est&aacute; prohibido recoger cangrejos hembras, ni juveniles. La talla m&iacute;nima capturable es que tenga un carapacho igual o mayor de 7,5 cm de ancho, seg&uacute;n la reforma de enero del 2014 al Acuerdo Ministerial No. 16 que norma la recolecci&oacute;n del crust&aacute;ceo. La autoregulaci&oacute;n de los recolectores es clave.</p><p>En la Reserva Ecol&oacute;gica Manglares Churute, 17 organizaciones son parte de estos acuerdos con 1.440 socios.</p><p>Uno de los recintos que est&aacute; en los linderos del &aacute;rea protegida es El Mirador, donde vive Edmundo Moreira, un pescador de 47 a&ntilde;os que tambi&eacute;n lleva a los turistas en los botes a los puntos de atracci&oacute;n. A las islas Matorrillos, Los Ingleses, Los &Aacute;lamos, Malabrigo, Cabeza de Mate y Churutillo que son parte de la reserva se va para el observamiento de aves y cocodrilos. &ldquo;Aqu&iacute; no se puede cortar un &aacute;rbol sin permiso&rdquo;, dice mientras se escucha el sonido de una motosierra con la que otro poblador corta las ramas de un &aacute;rbol que flanquea el camino de tierra de 7 km, que separa la v&iacute;a principal de la Costa con de la zona de manglares, donde hay garitas, senderos y un muelle.</p><p>Uno de los caminos denominado Aulladores sirve para internarse en el &aacute;rea de bosque de neblina para ver mam&iacute;feros como los monos. El 60% de la reserva son manglares y ecosistemas acu&aacute;ticos, indica el sitio web sobre las &aacute;reas protegidas del MAE. De ah&iacute; que los r&iacute;os y estuarios sean comunes.</p><p>El r&iacute;o Taura, por ejemplo, es lo que divide las comunidades de Puerto Baquerizo y Nuevo Porvenir del &aacute;rea protegida. Desde all&iacute; se internan en la reserva para capturar cangrejos, camarones y peces.</p><p>&ldquo;Hay m&aacute;s presiones del mercado de consumo que gusta de los cangrejos entonces si se observa una reducci&oacute;n del recurso pero es manejable. Hemos pensado en repoblar el manglar para extender el h&aacute;bitat&rdquo;, indica Alonso Mejillones, uno de los 150 socios de la Cooperativa de Producci&oacute;n Pesquera Artesanal Nuevo Porvenir.</p>', 1),
(0, ' Un millÃ³n de especies estÃ¡n en peligro de extinciÃ³n ', '2019-05-12', 'Freddy Villavicencio', 'imagenes/img13.jpg', 'El panda gigante y el atÃºn rojo en el MediterrÃ¡neo son algunas de las especies cuya situaciÃ³n ha mejorado gracias a medidas de protecciÃ³n. No obstante, otras, como los corales y los tiburones, estÃ¡n mÃ¡s que nunca en rie', '<p>El panda gigante y el at&uacute;n rojo en el Mediterr&aacute;neo son algunas de las especies cuya situaci&oacute;n ha mejorado gracias a medidas de protecci&oacute;n.</p><p>No obstante, otras, como los corales y los tiburones, est&aacute;n m&aacute;s que nunca en riesgo. V&iacute;ctimas de la acci&oacute;n humana, hasta un mill&oacute;n de especies animales y vegetales est&aacute;n en peligro de extinci&oacute;n, seg&uacute;n un informe de la <a target=\"_blank\" href=\"https://www.un.org/es/\">Organizaci&oacute;n de Naciones Unidas</a> presentado la semana pasada en Par&iacute;s.</p><p>&ldquo;Gran parte de la naturaleza ya est&aacute; perdida, y lo que queda contin&uacute;a en declive&rdquo;, afirmaron expertos en la cita.</p><p>Entre las especies afectadas est&aacute; la rana acu&aacute;tica de Sehuencas. Hasta hace poco este anfibio estaba condenado a desaparecer, con un solo macho conocido, Romeo, en el Museo de Historia Natural de Cochabamba, en Bolivia. Pero gracias a una campa&ntilde;a internacional para obtener fondos, una expedici&oacute;n de especialistas dio con su Julieta. Solo falta que la pareja se reproduzca.</p><p>Los arrecifes de coral tambi&eacute;n est&aacute;n en el listado. Estos cubren solo el 0,2% de la superficie de los oc&eacute;anos, pero contienen alrededor del 30% de las especies marinas.</p><p>Est&aacute;n amenazados por las instalaciones portuarias y tur&iacute;sticas, la pesca con explosivos o cianuro, la contaminaci&oacute;n, el calentamiento de las aguas que provocan su blanqueo o la acidificaci&oacute;n de los oc&eacute;anos.</p><p>Seg&uacute;n un informe del Grupo Intergubernamental de Expertos sobre el Cambio Clim&aacute;tico, si el calentamiento global aumentara la temperatura 1,5 &deg;C entre el 70% y el 90% ser&iacute;an condenados a desaparecer.</p><p>Los tiburones, que habitan los oc&eacute;anos desde hace 400 millones de a&ntilde;os, son v&iacute;ctimas del apetito humano por su carne y sus aletas. De las 58 especies de rayas y tiburones evaluadas, 17 est&aacute;n en riesgo de extinci&oacute;n, seg&uacute;n la Uni&oacute;n Internacional para la Conservaci&oacute;n de la Naturaleza.</p><p>La extinci&oacute;n del &lsquo;Solitario George&rsquo; es una muestra del peligro. En 2012, a los 90 a&ntilde;os, muri&oacute; el &uacute;ltimo representante de la emblem&aacute;tica especie de tortuga gigante terrestre <em>Chelonoidis abigdoni</em> que viv&iacute;a en una de las islas del archipi&eacute;lago de Gal&aacute;pagos.</p><p>Su muerte por causas naturales se produjo tras d&eacute;cadas de esfuerzos para que se reprodujera, lo cual lo convirti&oacute; en un s&iacute;mbolo de la lucha por la conservaci&oacute;n de la fauna.</p><p>La advertencia de que la humanidad se acerca a una era de extinci&oacute;n masiva de especies se considerar&aacute; en la primera evaluaci&oacute;n de los ecosistemas en los &uacute;ltimos quince a&ntilde;os que se publicar&aacute; tras una reuni&oacute;n en Francia esta semana.</p><p>Saber ancestral&nbsp;</p><p>&ldquo;La ciencia nos dice aquello que los saberes tradicionales nos se&ntilde;alan ya desde hace a&ntilde;os: la Tierra est&aacute; muriendo&rdquo;, admite Jos&eacute; Gregorio Mirabal, presidente de Coica, entidad que re&uacute;ne organizaciones ind&iacute;genas del Amazonas. El informe mundial que se elabora tiene en consideraci&oacute;n los conocimientos y las prioridades de las poblaciones aut&oacute;ctonas.</p>', 1),
(0, 'Actividad humana provoca retroceso glacial del Chimborazo en Ecuador', '2019-05-13', 'Freddy Villavicencio', 'imagenes/img14.jpg', 'El pÃ¡ramo andino, que se extiende tambiÃ©n por Colombia, PerÃº y Venezuela, ocupa alrededor de 1,5 millones de hectÃ¡reas en Ecuador (6% del territorio nacional).', '<p>Comenzaron a secarse las fuentes y los ind&iacute;genas miraron al cielo: el glaciar retroced&iacute;a imparable en el volc&aacute;n nevado Chimborazo, pero en las faldas del pico m&aacute;s alto de<em><strong> </strong></em><strong><em>Ecuador </em></strong>el panorama no era menos dram&aacute;tico.</p><p>El p&aacute;ramo que acumula el agua que brota del disminuido glaciar hab&iacute;a sido alterado. <strong>Donde solo deb&iacute;a haber pajonal crecen cultivos y pastan vacas introducidos por los mismos ind&iacute;genas y mestizos que se asientan en los pies del Chimborazo, de 6.310 metros de altura.</strong></p><p>Vistos a s&iacute; mismos como guardianes de la naturaleza, los nativos hab&iacute;an contribuido a causar un enorme da&ntilde;o al ecosistema.</p><ul><li><a target=\"_blank\" href=\"https://www.eluniverso.com/noticias/2019/03/11/nota/7228976/3500-personas-murieron-chile-durante-2017-contaminacion\">3.500 personas murieron en Chile durante el 2017 por contaminaci&oacute;n</a></li></ul><p>Fue por &quot;desconocimiento&quot;, se&ntilde;ala Gustavo Paca, un l&iacute;der ind&iacute;gena que lleva un diente de oro, poncho rojo de lana de oveja y sombrero negro.</p><p>Como &quot;en la parte baja la agricultura no produc&iacute;a, dec&iacute;amos: avancemos a la parte alta porque ah&iacute; la tierra es f&eacute;rtil. Produc&iacute;amos en calidad y cantidad, pero hoy ya vemos que ha bajado el caudal del agua&quot; para las aldeas, cuenta arrepentido Paca, de 49 a&ntilde;os.</p><p>Nadie en los alrededores del Chimborazo crey&oacute; que el glaciar que surte a los p&aacute;ramos -una suerte de esponja natural que retiene agua- pudiera retroceder.</p><p>Aunque se trata de un fen&oacute;meno natural, los cient&iacute;ficos creen que la actividad humana, especialmente la quema de combustibles f&oacute;siles, ha acelerado el retroceso del glaciar, lo que no repercutir&iacute;a menos si abajo no se hubiera alterado la naturaleza.</p><p>El p&aacute;ramo andino, que se extiende tambi&eacute;n por Colombia, Per&uacute; y Venezuela, ocupa alrededor de 1,5 millones de hect&aacute;reas en Ecuador (6% del territorio).</p><p>Nost&aacute;lgica, Mar&iacute;a Chaza, de 70 a&ntilde;os, recuerda el gigante manto de nieve y p&aacute;ramos con bosques de sigse, pajonal y romerillo.</p><p>&quot;&iexcl;Qu&eacute; maravilla de cerro se sab&iacute;a ver! Ahora solo sembr&iacute;o, ganado, solo eso est&aacute;. Pelaron al Chimborazo, por eso no hay ag&uuml;ita (...) y estamos sufriendo&quot;, dice la mujer.</p><p>Conforme se secan los pozos y crece la poblaci&oacute;n, los ind&iacute;genas deben salir con azad&oacute;n a hurgar en el p&aacute;ramo en busca de nuevas fuentes.</p><p>Desde 1962, los cient&iacute;ficos registran el retroceso del glaciar del Chimborazo, que ten&iacute;a 27 km2 de hielo macizo y se redujo a 7,6 km2 en 2016. &quot;Ha perdido el 72,4% de su cobertura&quot;, alerta C&aacute;ceres.</p>', 2),
(0, 'Dos boas son rescatadas y reinsertadas en el Parque Nacional Sangay', '2019-05-13', 'Freddy Villavicencio', 'imagenes/img15.jpg', 'Una boa arcoÃ­ris (Epicrates cenchria) y una boa matacaballo (Boa constrictor) fueron liberadas en el Parque Nacional Sangay por tÃ©cnicos de la DirecciÃ³n Provincial del Ambiente de Morona Santiago.', '<p><strong>Una boa arco&iacute;ris (Epicrates cenchria) y una boa matacaballo (Boa constrictor) </strong>fueron liberadas en el Parque Nacional Sangay por t&eacute;cnicos de la Direcci&oacute;n Provincial del Ambiente de Morona Santiago, luego de ser rescatadas en dos domicilios del cant&oacute;n Suc&uacute;a, indic&oacute; el Ministerio del Ambiente (MAE) a trav&eacute;s de su portal web.&nbsp;</p><ul><li><a target=\"_blank\" href=\"https://www.eluniverso.com/vida/2018/02/11/nota/6618544/diez-nuevas-especies-localiza-sangay-estudio-8-anos\">Diez nuevas especies localiza en Sangay un estudio de 8 a&ntilde;os</a></li></ul><p>Los espec&iacute;menes recibieron atenci&oacute;n veterinaria para determinar su estado de salud. No se evidenciaron heridas ni lesiones, por lo cual se recomend&oacute; que fueran devueltas en su h&aacute;bitat natural.</p><ul><li><a target=\"_blank\" href=\"https://www.eluniverso.com/noticias/2019/03/17/nota/7233491/se-buscan-recursos-manejo-nuevo-parque-nacional-rio-negro-sopladora\">Se buscan recursos para manejo de nuevo Parque Nacional R&iacute;o Negro-Sopladora en Ecuador</a></li></ul><p>El hecho fue reportado al Cuerpo de Bomberos de la localidad para realizar el rescate conforme protocolos de bioseguridad para el manejo de fauna silvestre.</p><p>Seg&uacute;n el MAE,<strong> se han registrado un total de 10 especies de boas distribuidas en la sierra, costa y amazonia.</strong> Estos reptiles son depredadores que logran mantener el ecosistema equilibrado, pues sus presas, principalmente roedores, podr&iacute;an ocasionar graves afectaciones a la biodiversidad si su poblaci&oacute;n no es controlada. (I)</p>', 4),
(0, 'ONU informa sobre nuevos rÃ©cords de temperatura en los ocÃ©anos del planeta', '2019-05-13', 'Freddy Villavicencio', 'imagenes/img16.jpg', 'La OrganizaciÃ³n MeteorolÃ³gica Mundial (OMM) a travÃ©s de un informe suministrÃ³ precisiones sobre la proliferaciÃ³n de las \"manifestaciones fÃ­sicas\" del cambio climÃ¡tico en los oceÃ¡nos del planeta. ', '<p>Los oc&eacute;anos alcanzaron r&eacute;cords de temperatura en 2018, alert&oacute; el jueves la <em><strong>ONU</strong></em>, que se preocupa por los riesgos para la vida a causa del cambio clim&aacute;tico.</p><p>La <a target=\"_blank\" href=\"https://www.un.org/es/\">ONU</a> indic&oacute; en febrero que el periodo 2015-2018 fue el m&aacute;s caliente desde el inicio de los registros meteorol&oacute;gicos.</p><p>En el informe publicado este jueves sobre el estado del clima en el mundo, la Organizaci&oacute;n Meteorol&oacute;gica Mundial (OMM) suministr&oacute; precisiones sobre la proliferaci&oacute;n de las &quot;manifestaciones f&iacute;sicas&quot; del cambio clim&aacute;tico, como los fen&oacute;menos meteorol&oacute;gicos extremos, y ofreci&oacute; detalles sobre su impacto socioecon&oacute;mico creciente.</p><p>Seg&uacute;n la OMM, el contenido t&eacute;rmico de los oc&eacute;anos alcanz&oacute; nuevos niveles en 2018 entre 0 y 700 m de profundidad (registros que se remontan a 1955) y entre 0 y 2.000 m (registros que se remontan a 2005), &quot;pulverizando los r&eacute;cords de 2017&quot;.</p><p><strong>El alza del nivel del mar continu&oacute; &quot;a ritmo acelerado&quot;,</strong> alcanzando un r&eacute;cord, seg&uacute;n la OMM.</p><p>Este aceleramiento del alza del nivel medio del mar es causado especialmente por el &quot;ritmo creciente de p&eacute;rdida de la masa glaciar de los inlandsis&quot; (glaciares permanentes o cascos polares).</p><p>La extensi&oacute;n de la banquisa &aacute;rtica fue inferior a la normal a lo largo de 2018, mostrando r&eacute;cords a la baja en enero y febrero. Y a fines de 2018 la extensi&oacute;n de los hielos mar&iacute;timos, en promedio diario, era cercana a las m&aacute;s bajas jam&aacute;s observadas.</p><p>&quot;Los datos divulgados son muy preocupantes. Los cuatro &uacute;ltimos a&ntilde;os son los m&aacute;s calientes jam&aacute;s reportados, y la temperatura media en la superficie del globo en 2018 era superior en 1&deg;C a los valores preindustriales&quot;, subray&oacute; el secretario general de la ONU, Antonio Guterres en la introducci&oacute;n a la declaraci&oacute;n.</p><ul><li><a target=\"_blank\" href=\"https://www.eluniverso.com/noticias/2019/01/10/nota/7132622/estudio-revela-acelerado-incremento-temperatura-oceanos\">Estudio revela un acelerado incremento en la temperatura de los oc&eacute;anos</a></li></ul><p>&quot;Ya no hay tiempo para titubeos&quot;, agreg&oacute;.</p><p>Seg&uacute;n el informe, en 2018, la mayor&iacute;a de los <strong>peligros naturales, de los que fueron v&iacute;ctimas cerca de 62 millones de personas, estaban relacionados con las condiciones meteorol&oacute;gicas</strong> y clim&aacute;ticas extremas.</p><p>Como en el pasado, las inundaciones afectaron a m&aacute;s personas, alcanzando la cifra de 35 millones.</p><p>M&aacute;s de 1.600 muertes est&aacute;n relacionadas con las <strong>oleadas de intenso calor y los incendios forestales que afectaron a Europa, Jap&oacute;n y Estados Unidos</strong>, y los da&ntilde;os materiales se acercan a la cifra de 24.000 millones de d&oacute;lares en ese &uacute;ltimo pa&iacute;s.</p><p>En India, el Estado de Kerala no hab&iacute;a conocido lluvias tan abundantes e inundaciones tan devastadoras desde hace casi un siglo.</p>', 4);



--TODO PARA EL CRUD DE NOTICIAS

--
-- Volcado de datos para la tabla `yoderaguirre`
--

INSERT INTO `yoderaguirre` (`id`, `temperatura`, `hora`, `fecha`, `anemometro`) VALUES
(1, 50, '2019-05-22 07:00:00', '2019-05-23', 20),
(2, 5, '0000-00-00 00:00:00', '2019-05-17', 5),
(3, 5, '0000-00-00 00:00:00', '2019-05-17', 5),
(4, 4, '0000-00-00 00:00:00', '2019-05-10', 4),
(5, 21, '0000-00-00 00:00:00', '2019-05-11', 12),
(6, 546456, '0000-00-00 00:00:00', '0000-00-00', 546546);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `yoderaguirre`
--
ALTER TABLE `yoderaguirre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `yoderaguirre`
--
ALTER TABLE `yoderaguirre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

>>>>>>> 04ee64182dd986aa9314525ea314febb73601bb7
>>>>>>> 041167ca255354af9d7fca91e03001c02e559bd6
