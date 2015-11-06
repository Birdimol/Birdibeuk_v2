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
-- Table structure for table `birdi_lien_metier_competence_choix`
--

DROP TABLE IF EXISTS `birdi_lien_metier_competence_choix`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birdi_lien_metier_competence_choix` (
  `id_metier` int(11) NOT NULL,
  `id_competence` int(11) NOT NULL,
  PRIMARY KEY (`id_metier`,`id_competence`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birdi_lien_metier_competence_choix`
--

LOCK TABLES `birdi_lien_metier_competence_choix` WRITE;
/*!40000 ALTER TABLE `birdi_lien_metier_competence_choix` DISABLE KEYS */;
INSERT INTO `birdi_lien_metier_competence_choix` VALUES (1,1),(1,14),(1,15),(1,24),(1,30),(1,47),(1,49),(2,1),(2,14),(2,15),(2,24),(2,30),(2,47),(2,49),(3,3),(3,13),(3,15),(3,26),(3,32),(3,39),(4,1),(4,13),(4,17),(4,20),(4,22),(4,23),(4,33),(4,39),(4,47),(6,3),(6,15),(6,18),(6,22),(6,35),(6,39),(7,33),(7,34),(7,39),(7,43),(7,47),(9,8),(9,20),(9,22),(9,23),(9,25),(9,27),(9,33),(9,42),(10,8),(10,15),(10,18),(10,26),(10,39),(10,40),(10,43),(11,7),(11,14),(11,22),(11,26),(11,39),(12,21),(12,27),(12,29),(12,33),(12,34),(12,47),(13,13),(13,15),(13,18),(13,24),(13,29),(13,43),(15,8),(15,13),(15,31),(15,33),(15,35),(15,43),(99,3),(99,8),(99,10),(99,11),(99,20),(99,21),(99,26),(99,33),(99,38),(99,45),(99,47);
/*!40000 ALTER TABLE `birdi_lien_metier_competence_choix` ENABLE KEYS */;
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
