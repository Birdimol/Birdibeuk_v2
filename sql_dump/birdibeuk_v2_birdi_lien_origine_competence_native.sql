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
-- Table structure for table `birdi_lien_origine_competence_native`
--

DROP TABLE IF EXISTS `birdi_lien_origine_competence_native`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birdi_lien_origine_competence_native` (
  `ID_ORIGINE` int(11) NOT NULL,
  `ID_COMPETENCE` int(11) NOT NULL,
  PRIMARY KEY (`ID_ORIGINE`,`ID_COMPETENCE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birdi_lien_origine_competence_native`
--

LOCK TABLES `birdi_lien_origine_competence_native` WRITE;
/*!40000 ALTER TABLE `birdi_lien_origine_competence_native` DISABLE KEYS */;
INSERT INTO `birdi_lien_origine_competence_native` VALUES (2,1),(2,14),(2,44),(2,46),(3,5),(3,29),(3,37),(3,40),(4,22),(4,43),(4,48),(5,3),(5,16),(5,21),(5,33),(6,15),(6,36),(6,39),(6,47),(6,48),(7,2),(7,19),(7,21),(7,47),(8,2),(8,4),(8,5),(8,10),(8,28),(8,44),(8,46),(9,2),(9,14),(9,28),(9,44),(9,46),(10,2),(10,3),(10,4),(10,9),(10,28),(10,29),(10,44),(10,46),(11,5),(11,6),(11,7),(11,28),(11,30),(11,44),(11,46),(12,5),(12,9),(12,18),(12,28),(12,42),(13,1),(13,3),(13,15),(13,16),(13,19),(13,29);
/*!40000 ALTER TABLE `birdi_lien_origine_competence_native` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-04 16:40:51
