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
-- Table structure for table `birdi_lien_origine_competence_choix`
--

DROP TABLE IF EXISTS `birdi_lien_origine_competence_choix`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birdi_lien_origine_competence_choix` (
  `id_origine` int(11) NOT NULL,
  `id_competence` int(11) NOT NULL,
  PRIMARY KEY (`id_competence`,`id_origine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birdi_lien_origine_competence_choix`
--

LOCK TABLES `birdi_lien_origine_competence_choix` WRITE;
/*!40000 ALTER TABLE `birdi_lien_origine_competence_choix` DISABLE KEYS */;
INSERT INTO `birdi_lien_origine_competence_choix` VALUES (7,1),(3,3),(12,3),(2,7),(8,7),(9,7),(3,8),(2,10),(3,10),(9,10),(11,10),(3,11),(5,11),(10,11),(4,13),(3,14),(8,14),(11,14),(2,15),(4,15),(5,15),(7,16),(12,16),(6,17),(13,17),(6,19),(10,20),(13,20),(13,21),(5,22),(7,22),(12,22),(2,23),(5,23),(7,23),(9,23),(10,23),(13,23),(3,24),(7,24),(10,24),(7,25),(12,25),(3,26),(12,26),(5,27),(8,27),(9,27),(11,27),(12,27),(12,29),(2,30),(8,30),(9,30),(4,31),(6,31),(13,31),(11,32),(3,33),(7,33),(5,34),(12,34),(13,34),(2,35),(4,35),(5,35),(6,35),(9,35),(13,35),(2,38),(6,38),(7,38),(4,39),(7,43),(13,45),(6,46),(2,47),(3,47),(4,47),(5,47),(9,47),(12,47),(2,49),(3,49),(8,49),(9,49),(11,49);
/*!40000 ALTER TABLE `birdi_lien_origine_competence_choix` ENABLE KEYS */;
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
