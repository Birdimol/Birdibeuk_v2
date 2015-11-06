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
-- Table structure for table `birdi_lien_aventurier_compagnie`
--

DROP TABLE IF EXISTS `birdi_lien_aventurier_compagnie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birdi_lien_aventurier_compagnie` (
  `id_lien_aventurier_compagnie` int(11) NOT NULL,
  `id_aventurier` int(11) NOT NULL,
  `id_compagnie` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birdi_lien_aventurier_compagnie`
--

LOCK TABLES `birdi_lien_aventurier_compagnie` WRITE;
/*!40000 ALTER TABLE `birdi_lien_aventurier_compagnie` DISABLE KEYS */;
INSERT INTO `birdi_lien_aventurier_compagnie` VALUES (85,233,15),(84,232,15),(83,149,14),(82,81,14),(81,68,14),(80,49,14),(79,155,11),(78,50,11),(77,14,11),(76,3,11),(100,621,17),(99,618,17),(98,534,17),(86,232,16),(75,1,11),(108,876,21),(107,877,20),(106,876,20),(105,791,19),(104,788,19),(103,788,18),(102,728,17),(101,700,17),(97,532,17),(96,417,17),(113,883,21),(112,880,21),(111,879,21),(110,878,21),(109,877,21);
/*!40000 ALTER TABLE `birdi_lien_aventurier_compagnie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-04 16:40:53
