-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: agenda
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.32-MariaDB-0ubuntu0.20.04.1

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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `idEvent` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `dateEvent` datetime NOT NULL,
  `duration` time DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idEvent`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (2,'partielle bassee','2016-01-20 16:26:00','17:27:00','local'),(3,'générale','2019-04-03 20:00:00','02:00:00','local'),(4,'partielle flûtes clarinettes','2019-04-10 19:00:00','01:00:00','local'),(5,'générale','2019-04-10 20:00:00','02:00:00','local'),(6,'partielle saxophones','2019-04-17 19:00:00','01:00:00','local'),(7,'séminaire musical','2019-04-13 09:00:00','10:00:00','montagne'),(8,'séminaire musical','2019-04-14 09:00:00','05:00:00','montagne'),(9,'générale','2019-04-17 20:00:00','02:00:00','local'),(10,'générale','2019-05-01 20:00:00','02:00:00','local'),(11,'générale','2019-05-08 19:30:00','02:30:00','salle de concert'),(12,'raccord','2019-05-12 15:30:00','01:00:00','salle de concert'),(13,'concert','2019-05-12 17:00:00','02:30:00','salle de concert'),(14,'générale','2019-04-15 20:00:00','02:00:00','local'),(15,'générale','2019-04-22 20:00:00','02:00:00','local'),(16,'raccord','2019-05-26 15:30:00','01:00:00','ailleurs'),(17,'concert','2019-05-26 17:00:00','02:30:00','ailleurs'),(18,'assemblée générale','2019-06-04 19:00:00','01:00:00','local'),(19,'générale','2019-06-05 20:00:00','02:00:00','local'),(20,'générale','2019-06-12 20:00:00','02:00:00','local'),(21,'générale','2019-06-19 20:00:00','02:00:00','local'),(22,'générale','2019-06-26 20:00:00','02:00:00','local'),(23,'défilé des promotions','2019-06-28 18:00:00','03:00:00','école'),(24,'fête nationale','2019-08-01 19:00:00','03:00:00','sur les quais');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instruments`
--

DROP TABLE IF EXISTS `instruments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instruments` (
  `idInstrument` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `instrument` varchar(20) NOT NULL,
  PRIMARY KEY (`idInstrument`),
  UNIQUE KEY `instrument` (`instrument`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instruments`
--

LOCK TABLES `instruments` WRITE;
/*!40000 ALTER TABLE `instruments` DISABLE KEYS */;
INSERT INTO `instruments` VALUES (5,'Bassons'),(6,'Clarinette'),(7,'Clarinette basse'),(13,'Cor'),(1,'Direction'),(15,'Euphonium'),(2,'Flûte traversière'),(4,'Hautbois'),(17,'Percussions'),(3,'Piccolo'),(9,'Saxophone Alto'),(11,'Saxophone Baryton'),(8,'Saxophone Soprano'),(10,'Saxophone Ténor'),(14,'Trombone'),(12,'Trompette'),(16,'Tuba');
/*!40000 ALTER TABLE `instruments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'agenda'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-09  7:35:22
