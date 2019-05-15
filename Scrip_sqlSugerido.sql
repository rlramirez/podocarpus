-- -----------------------------------------------------
-- Table `usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(100) NOT NULL,
  `apellido` VARCHAR(100) NULL,
  `correo` VARCHAR(50) NOT NULL,
  `rol` INT(11) NOT NULL,
  `user` VARCHAR(50) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  )
ENGINE = InnoDB;

--
-- Volcado de datos para la tabla `usuarios`
--


-- -----------------------------------------------------
-- Table `servicios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servicios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nom_servicio` VARCHAR(100) NOT NULL,
  `fecha_ini_tem` VARCHAR(100) NOT NULL,
  `fecha_fin_tem` VARCHAR(50) NOT NULL,
  `capacidad` INT(11) NOT NULL,
  `responsable` VARCHAR(50) NOT NULL,
  `informacion` VARCHAR(100) NULL,
  `galeria` VARCHAR(100) NOT NULL,
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Sector`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sector` (
  `idSector` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(65) NULL,
  )
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Data for table `sector`
-- -----------------------------------------------------
START TRANSACTION;
USE `podocarpusdb`;
INSERT INTO `sector` (`idSector`, `nombre`) VALUES (1, 'Bombuscaro');
INSERT INTO `sector` (`idSector`, `nombre`) VALUES (2, 'Romerillos');
INSERT INTO `sector` (`idSector`, `nombre`) VALUES (3, 'Zona alta');
COMMIT;


-- -----------------------------------------------------
-- Table `lugares`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `lugares`(
  `idLugares` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(100) NOT NULL,
  `latitud` FLOAT NOT NULL,
  `longitud` FLOAT NOT NULL,
  `descripcion` VARCHAR(1000) NULL,
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



-- -----------------------------------------------------
-- Data for table `podocarpusdb`.`fotos`
-- -----------------------------------------------------
START TRANSACTION;
USE `podocarpusdb`;
INSERT INTO `podocarpusdb`.`fotos` (`idFotos`, `url`, `id_lugares`) VALUES (1, 'https://especiales.elcomercio.com/planeta-ideas/imagenes/imagenes/ambiente-laguna.jpg', DEFAULT);
COMMIT;


---------------------------------------------------------
----- INSERTS
---------------------------------------------------------

-- -----------------------------------------------------
-- usuarios
-- -----------------------------------------------------
START TRANSACTION;
USE `podocarpusdb`;
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `rol`, `user`, `password`) VALUES
(1, 'Ramiro', 'Ramírez', '12', 1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
COMMIT;


-- -----------------------------------------------------
-- servicios
-- -----------------------------------------------------
START TRANSACTION;
USE `podocarpusdb`;
INSERT INTO `servicios` (`id`, `nom_servicio`, `fecha_ini_tem`, `fecha_fin_tem`, `capacidad`, `responsable`, `informacion`, `galeria`) VALUES
(1, 'camping', '1 de enero', '31 de diciembre', 15, 'pedro', 'Localidad: San Sebastián,Barrio/Sector: Cajanuma,Atractivo Turístico: Bosque Nublado','pendiente');
COMMIT;



-- -----------------------------------------------------
-- sector
-- -----------------------------------------------------
START TRANSACTION;
USE `podocarpusdb`;
INSERT INTO `podocarpusdb`.`sector` (`idSector`, `nombre`) VALUES (1, 'Bombuscaro');
INSERT INTO `podocarpusdb`.`sector` (`idSector`, `nombre`) VALUES (2, 'Romerillos');
INSERT INTO `podocarpusdb`.`sector` (`idSector`, `nombre`) VALUES (3, 'Zona alta');
COMMIT;

-- -----------------------------------------------------
-- Data for table `podocarpusdb`.`lugares`
-- -----------------------------------------------------
START TRANSACTION;
USE `podocarpusdb`;
INSERT INTO `podocarpusdb`.`lugares` (`idLugares`, `nombre`, `latitud`, `longitud`, `descripcion`, `id_sector`) VALUES (1, 'Lagunas de los Compadres', -4.163348, -79.1108917, 'Constituyen uno de los principales atractivos turísticos del parque. Es un sitio muy recomendado para los que gustan de la pesca deportiva y la aventura. La mejor época para visitar este sector es el mes de noviembre, cuando se puede acampar en sus orillas y recorrer los alrededores. Con algo de suerte es posible observar algunas especies relativamente comunes del sector, como el tapir de montaña o el lobo de páramo.', 1);
COMMIT;

-- -----------------------------------------------------
-- fotos`
-- -----------------------------------------------------
START TRANSACTION;
USE `podocarpusdb`;
INSERT INTO `podocarpusdb`.`fotos` (`idFotos`, `url`, `id_lugares`) VALUES (1, 'https://especiales.elcomercio.com/planeta-ideas/imagenes/imagenes/ambiente-laguna.jpg', 1);
COMMIT;

