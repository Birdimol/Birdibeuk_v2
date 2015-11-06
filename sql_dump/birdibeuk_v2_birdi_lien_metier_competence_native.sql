-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: birdibeuk_v2
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `birdi_lien_metier_competence_native`
--

DROP TABLE IF EXISTS `birdi_lien_metier_competence_native`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birdi_lien_metier_competence_native` (
  `ID_METIER` int(11) NOT NULL,
  `ID_COMPETENCE` int(11) NOT NULL,
  PRIMARY KEY (`ID_METIER`,`ID_COMPETENCE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birdi_lien_metier_competence_native`
--

LOCK TABLES `birdi_lien_metier_competence_native` WRITE;
/*!40000 ALTER TABLE `birdi_lien_metier_competence_native` DISABLE KEYS */;
INSERT INTO `birdi_lien_metier_competence_native` VALUES (1,19),(1,25),(1,47),(2,7),(2,10),(3,22),(3,41),(3,43),(4,15),(4,19),(4,21),(4,35),(4,38),(6,11),(6,20),(6,24),(6,42),(6,45),(7,9),(7,15),(7,22),(7,26),(7,31),(7,36),(9,3),(9,16),(9,19),(9,21),(9,45),(10,22),(10,33),(10,41),(11,15),(11,30),(11,41),(12,3),(12,5),(12,8),(12,16),(12,23),(12,35),(13,3),(13,8),(13,22),(13,26),(13,33),(15,3),(15,9),(15,15),(15,22),(15,37),(99,1),(99,5),(99,10),(99,16),(99,29),(99,40),(99,42),(99,99),(99,100);
/*!40000 ALTER TABLE `birdi_lien_metier_competence_native` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-04 16:40:52
