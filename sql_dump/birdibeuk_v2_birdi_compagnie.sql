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
-- Table structure for table `birdi_compagnie`
--

DROP TABLE IF EXISTS `birdi_compagnie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birdi_compagnie` (
  `id_compagnie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(350) NOT NULL,
  `id_createur` int(11) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_compagnie`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birdi_compagnie`
--

LOCK TABLES `birdi_compagnie` WRITE;
/*!40000 ALTER TABLE `birdi_compagnie` DISABLE KEYS */;
INSERT INTO `birdi_compagnie` VALUES (12,'La compagnie mal nommée',11,'2015-08-18 13:27:10'),(11,'Les lâches de fer',9,'2015-08-18 13:04:19'),(14,'La compagnie du test',20,'2015-08-18 22:13:36'),(15,'Youclidh',46,'2015-08-19 08:50:27'),(16,'t e s t',46,'2015-08-19 08:52:22'),(17,'Mes persos',49,'2015-08-25 09:57:34'),(18,'inconnue',105,'2015-10-01 16:24:43'),(19,'inconnue',105,'2015-10-02 16:03:57'),(20,'La compagnie du Malt',123,'2015-10-12 08:52:52'),(21,'La Compagnie du Malt',123,'2015-10-12 09:29:56');
/*!40000 ALTER TABLE `birdi_compagnie` ENABLE KEYS */;
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
