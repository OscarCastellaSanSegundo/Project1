-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: juego
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `curso` (
  `Id` int NOT NULL,
  `Nombre` varchar(65) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES (1,'Grau mitjà activitats comercials'),(2,'Grau superior màrqueting i publicitat'),(3,'Grau superior gestió de vendes i espais comercials'),(4,'Grau superior comerç internacional'),(5,'Grau superior agències de viatges i gestió esdeveniments'),(6,'Grau mitjà sistemes microinformàtics i xarxes'),(7,'Grau superior aplicacions multiplataforma'),(8,'Grau superior desenvolupament aplicacions web'),(9,'Grau mitjà gestió administrativa'),(10,'Grau superior administració i finances'),(11,'Grau superior assistència a la direcció');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idioma`
--

DROP TABLE IF EXISTS `idioma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `idioma` (
  `Id` int NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idioma`
--

LOCK TABLES `idioma` WRITE;
/*!40000 ALTER TABLE `idioma` DISABLE KEYS */;
INSERT INTO `idioma` VALUES (1,'Castellano'),(2,'Catalan'),(3,'Ingles');
/*!40000 ALTER TABLE `idioma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juego`
--

DROP TABLE IF EXISTS `juego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `juego` (
  `Id` int NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juego`
--

LOCK TABLES `juego` WRITE;
/*!40000 ALTER TABLE `juego` DISABLE KEYS */;
INSERT INTO `juego` VALUES (1,'Run to Politècnics'),(2,'Salvacursos'),(3,'Consigue tu práctica'),(4,'Consigue tus pergaminos');
/*!40000 ALTER TABLE `juego` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_iniciada`
--

DROP TABLE IF EXISTS `session_iniciada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `session_iniciada` (
  `UsuarioActual` int NOT NULL,
  PRIMARY KEY (`UsuarioActual`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_iniciada`
--

LOCK TABLES `session_iniciada` WRITE;
/*!40000 ALTER TABLE `session_iniciada` DISABLE KEYS */;
INSERT INTO `session_iniciada` VALUES (13);
/*!40000 ALTER TABLE `session_iniciada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Admin` tinyint NOT NULL,
  `Idioma` int NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Email_UNIQUE` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (13,'ocastellas2021@cepnet.net','Oscar','Castella','$2y$10$cJXFuvZ73d5cTPOxwd7Fsui22Jd2/H51sdrBwcZ/iULNLrXl9PqsO',0,1),(14,'baladrongonzalezalexandra@gmail.com','Alexandra','Baladron Gonzalez','$2y$10$HD7jWVhpPXty1lEMqARIleUmyYnIpTvum.aB3JvgSDUnFG.Zex6NK',0,1),(15,'bagarciab2021@cepnet.net','borjita','garcilaso','$2y$10$yj3ikoAzlZUSTkTt2cPdO.ICTX5B3iaRYgIUw9szDAqbq9d3T/Gn2',0,1),(16,'andres@hotmail.com','Andrés','Toro','$2y$10$VZNxLnD9swT137tSZbmIcO0G465w6rrG77cXIKCo3y1Vn/9SCitYe',0,1),(17,'prueba2@hotmail.com','Oscar','Gonzalez','$2y$10$yS6BK/s5V9wY92IWL1e.aOCtxa3.vWDiyHpHSMM2XbRGCvpjRknja',0,1),(18,'1@2.com','Joan','Serrano','$2y$10$oWyX2XnrLZ5KrmzUtJc85eml8qUFGkkzNpLa/eSXCeW5k.6IQObiy',0,1),(23,'ffernandez@politecnics.barcelona','Francisco','Fernández','$2y$10$dRPSPJ6oCrRQdaiIEVdSZe6/TW2SDl8RB5Byvmu7O5rC8YgeZuV4S',0,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_juego_curso`
--

DROP TABLE IF EXISTS `usuario_juego_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario_juego_curso` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `IdJuego` int NOT NULL,
  `IdUsuario` int NOT NULL,
  `IdCurso` int DEFAULT NULL,
  `Puntuacion` int DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Usuario_idx` (`IdUsuario`),
  KEY `FK_Juego_idx` (`IdJuego`),
  KEY `FK_Curso_idx` (`IdCurso`),
  KEY `FK_Usuario_jidx` (`IdUsuario`),
  KEY `FK_Juego_idix` (`IdJuego`),
  KEY `FK_Curso_idix` (`IdCurso`),
  CONSTRAINT `FK_CursoJuego` FOREIGN KEY (`IdCurso`) REFERENCES `curso` (`Id`),
  CONSTRAINT `FK_JuegoJuego` FOREIGN KEY (`IdJuego`) REFERENCES `juego` (`Id`),
  CONSTRAINT `FK_UsuarioJuego` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_juego_curso`
--

LOCK TABLES `usuario_juego_curso` WRITE;
/*!40000 ALTER TABLE `usuario_juego_curso` DISABLE KEYS */;
INSERT INTO `usuario_juego_curso` VALUES (1,4,13,1,11547),(74,4,14,3,9077),(75,4,15,3,3851),(76,4,16,3,7183),(77,4,18,3,3935);
/*!40000 ALTER TABLE `usuario_juego_curso` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-16 15:50:41
