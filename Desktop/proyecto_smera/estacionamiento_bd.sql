CREATE DATABASE  IF NOT EXISTS `estacionamiento_bd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `estacionamiento_bd`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: estacionamiento_bd
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.26-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `conductores`
--

DROP TABLE IF EXISTS `conductores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conductores` (
  `ctr_id_conductor` int(11) NOT NULL AUTO_INCREMENT,
  `ctr_rut` varchar(13) NOT NULL,
  `ctr_nombres` varchar(40) NOT NULL,
  `ctr_apellidos` varchar(40) NOT NULL,
  PRIMARY KEY (`ctr_id_conductor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conductores`
--

LOCK TABLES `conductores` WRITE;
/*!40000 ALTER TABLE `conductores` DISABLE KEYS */;
/*!40000 ALTER TABLE `conductores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalles_pagos`
--

DROP TABLE IF EXISTS `detalles_pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalles_pagos` (
  `dts_id_detalle_pago` int(11) NOT NULL AUTO_INCREMENT,
  `dts_patente` varchar(9) NOT NULL,
  `dts_rut` varchar(13) NOT NULL,
  `dts_nombre` varchar(30) NOT NULL,
  `dts_valor` double NOT NULL,
  `dts_descriocion` varchar(20) NOT NULL,
  `dts_hora_ingreso` time(1) NOT NULL,
  `dts_hora_egreso` time(1) NOT NULL,
  `dts_fecha_ingreso` date NOT NULL,
  `dts_fecha_egreso` date NOT NULL,
  `dts_id_usuario` int(11) NOT NULL,
  `dts_id_conductor` int(11) NOT NULL,
  `dts_id_parametro` int(11) NOT NULL,
  `dts_id_vehiculo` int(11) NOT NULL,
  PRIMARY KEY (`dts_id_detalle_pago`),
  KEY `detalles_usuarios_idx` (`dts_id_usuario`),
  KEY `detalles_conductor_idx` (`dts_id_conductor`),
  KEY `detalles_vehiculos_idx` (`dts_id_vehiculo`),
  KEY `detalles_parametros_idx` (`dts_id_parametro`),
  CONSTRAINT `detalles_conductor` FOREIGN KEY (`dts_id_conductor`) REFERENCES `conductores` (`ctr_id_conductor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `detalles_parametros` FOREIGN KEY (`dts_id_parametro`) REFERENCES `parametros` (`pts_id_parametro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `detalles_usuarios` FOREIGN KEY (`dts_id_usuario`) REFERENCES `usuarios` (`usr_id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `detalles_vehiculos` FOREIGN KEY (`dts_id_vehiculo`) REFERENCES `vehiculos` (`vho_id_vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalles_pagos`
--

LOCK TABLES `detalles_pagos` WRITE;
/*!40000 ALTER TABLE `detalles_pagos` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalles_pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parametros`
--

DROP TABLE IF EXISTS `parametros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parametros` (
  `pts_id_parametro` int(11) NOT NULL AUTO_INCREMENT,
  `pts_descripcion` varchar(20) NOT NULL,
  `pts_valor` double NOT NULL,
  PRIMARY KEY (`pts_id_parametro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parametros`
--

LOCK TABLES `parametros` WRITE;
/*!40000 ALTER TABLE `parametros` DISABLE KEYS */;
/*!40000 ALTER TABLE `parametros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sectores`
--

DROP TABLE IF EXISTS `sectores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sectores` (
  `str_id_sector` int(11) NOT NULL AUTO_INCREMENT,
  `str_nombre` varchar(20) NOT NULL,
  `str_estado` varchar(20) NOT NULL,
  PRIMARY KEY (`str_id_sector`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sectores`
--

LOCK TABLES `sectores` WRITE;
/*!40000 ALTER TABLE `sectores` DISABLE KEYS */;
INSERT INTO `sectores` VALUES (1,'Administrativos','habilitado'),(2,'Docentes','habilitados'),(3,'Minusvalidos','habilitado');
/*!40000 ALTER TABLE `sectores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sensor_i`
--

DROP TABLE IF EXISTS `sensor_i`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sensor_i` (
  `snr_id` int(11) NOT NULL AUTO_INCREMENT,
  `snr_estado` varchar(45) NOT NULL,
  `snr_numero` varchar(45) NOT NULL,
  `snr_id_ubicacion` int(11) NOT NULL,
  PRIMARY KEY (`snr_id`),
  KEY `sensor_ubi_1_idx` (`snr_id_ubicacion`),
  CONSTRAINT `sensor_ubi_1` FOREIGN KEY (`snr_id_ubicacion`) REFERENCES `ubicaciones` (`ubc_id_ubicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1068 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sensor_i`
--

LOCK TABLES `sensor_i` WRITE;
/*!40000 ALTER TABLE `sensor_i` DISABLE KEYS */;
INSERT INTO `sensor_i` VALUES (1067,'libre','1',1);
/*!40000 ALTER TABLE `sensor_i` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sensor_ii`
--

DROP TABLE IF EXISTS `sensor_ii`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sensor_ii` (
  `snr_id` int(11) NOT NULL AUTO_INCREMENT,
  `snr_estado` varchar(45) NOT NULL,
  `snr_numero` varchar(45) NOT NULL,
  `snr_id_ubicacion` int(11) NOT NULL,
  PRIMARY KEY (`snr_id`),
  KEY `sensor_ubi2_idx` (`snr_id_ubicacion`),
  CONSTRAINT `sensor_ubi2` FOREIGN KEY (`snr_id_ubicacion`) REFERENCES `ubicaciones` (`ubc_id_ubicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1073 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sensor_ii`
--

LOCK TABLES `sensor_ii` WRITE;
/*!40000 ALTER TABLE `sensor_ii` DISABLE KEYS */;
INSERT INTO `sensor_ii` VALUES (1072,'libre','2',2);
/*!40000 ALTER TABLE `sensor_ii` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sensor_iii`
--

DROP TABLE IF EXISTS `sensor_iii`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sensor_iii` (
  `snr_id` int(11) NOT NULL AUTO_INCREMENT,
  `snr_estado` varchar(45) NOT NULL,
  `snr_numero` varchar(45) NOT NULL,
  `snr_id_ubicacion` int(11) NOT NULL,
  PRIMARY KEY (`snr_id`),
  KEY `sensor_ubi3_idx` (`snr_id_ubicacion`),
  CONSTRAINT `sensor_ubi3` FOREIGN KEY (`snr_id_ubicacion`) REFERENCES `ubicaciones` (`ubc_id_ubicacion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sensor_iii`
--

LOCK TABLES `sensor_iii` WRITE;
/*!40000 ALTER TABLE `sensor_iii` DISABLE KEYS */;
INSERT INTO `sensor_iii` VALUES (150,'libre','3',3);
/*!40000 ALTER TABLE `sensor_iii` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicacion_vehiculo`
--

DROP TABLE IF EXISTS `ubicacion_vehiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ubicacion_vehiculo` (
  `uv_id_ubicacion` int(11) NOT NULL AUTO_INCREMENT,
  `uv_numero` int(11) DEFAULT NULL,
  `uv_estado` varchar(20) DEFAULT NULL,
  `uv_feha_hora` datetime DEFAULT NULL,
  `uv_ubicacion` int(11) DEFAULT NULL,
  PRIMARY KEY (`uv_id_ubicacion`),
  KEY `ubicacion_vehiculo_idx` (`uv_ubicacion`),
  CONSTRAINT `ubicacion_vehiculo` FOREIGN KEY (`uv_ubicacion`) REFERENCES `vehiculos` (`vho_id_vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicacion_vehiculo`
--

LOCK TABLES `ubicacion_vehiculo` WRITE;
/*!40000 ALTER TABLE `ubicacion_vehiculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `ubicacion_vehiculo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ubicaciones`
--

DROP TABLE IF EXISTS `ubicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ubicaciones` (
  `ubc_id_ubicacion` int(11) NOT NULL AUTO_INCREMENT,
  `ubc_ubicacion` int(11) NOT NULL,
  `ubc_estado` varchar(20) NOT NULL,
  `ubc_id_sector` int(11) NOT NULL,
  PRIMARY KEY (`ubc_id_ubicacion`),
  KEY `ubicaciones_sectores_idx` (`ubc_id_sector`),
  CONSTRAINT `ubicaciones_sectores` FOREIGN KEY (`ubc_id_sector`) REFERENCES `sectores` (`str_id_sector`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ubicaciones`
--

LOCK TABLES `ubicaciones` WRITE;
/*!40000 ALTER TABLE `ubicaciones` DISABLE KEYS */;
INSERT INTO `ubicaciones` VALUES (1,1,'habilitado',1),(2,2,'habilitado',2),(3,3,'habilitado',3);
/*!40000 ALTER TABLE `ubicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usr_id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usr_rut` varchar(13) NOT NULL,
  `usr_nombres` varchar(40) NOT NULL,
  `usr_apellido_paterno` varchar(15) NOT NULL,
  `usr_apellido_materno` varchar(15) NOT NULL,
  `usr_fecha_hora` date NOT NULL,
  `usr_tipo` varchar(20) NOT NULL,
  `usr_contrasenia` varchar(30) NOT NULL,
  PRIMARY KEY (`usr_id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (17,'18882911-2','Emmanuel','Ortiz','Matus','2017-12-20','superSU','123'),(18,'12674329-7','Pedro','Gaete','Villegas','2017-12-20','usuario','123'),(20,'8430536-7','Pablo','Ortiz','Monsalve','2017-12-20','admin','123');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehiculos` (
  `vho_id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `vho_patente` varchar(9) NOT NULL,
  `vho_hora_ingreso` time(1) NOT NULL,
  `vho_fecha_ingreso` date NOT NULL,
  `vho_ubicacion` int(11) NOT NULL,
  PRIMARY KEY (`vho_id_vehiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculos`
--

LOCK TABLES `vehiculos` WRITE;
/*!40000 ALTER TABLE `vehiculos` DISABLE KEYS */;
/*!40000 ALTER TABLE `vehiculos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-27 20:01:37
