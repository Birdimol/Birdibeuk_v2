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
-- Table structure for table `birdi_metier`
--

DROP TABLE IF EXISTS `birdi_metier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birdi_metier` (
  `METIER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `METIER_NOM` varchar(20) NOT NULL,
  `METIER_EV` int(11) NOT NULL,
  `METIER_EA` int(11) NOT NULL,
  `METIER_AT` int(11) NOT NULL,
  `METIER_PRD` int(11) NOT NULL,
  `METIER_FOMIN` int(11) NOT NULL,
  `METIER_FOMAX` int(11) NOT NULL,
  `METIER_ADMIN` int(11) NOT NULL,
  `METIER_ADMAX` int(11) NOT NULL,
  `METIER_INTMIN` int(11) NOT NULL,
  `METIER_INTMAX` int(11) NOT NULL,
  `METIER_CHAMIN` int(11) NOT NULL,
  `METIER_CHAMAX` int(11) NOT NULL,
  `METIER_COUMIN` int(11) NOT NULL,
  `METIER_COUMAX` int(11) NOT NULL,
  `METIER_RESTRICTION` text NOT NULL,
  `METIER_BONUS` text NOT NULL,
  `METIER_PRMAX` int(11) NOT NULL,
  PRIMARY KEY (`METIER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birdi_metier`
--

LOCK TABLES `birdi_metier` WRITE;
/*!40000 ALTER TABLE `birdi_metier` DISABLE KEYS */;
INSERT INTO `birdi_metier` VALUES (1,'Assassin',0,0,11,8,0,99,13,99,0,99,0,99,0,99,'Pas d\'armure supérieur à PR3','AT initiale à 11',3),(2,'Guerrier',0,0,0,0,12,99,0,99,0,99,0,99,12,99,'N\'utilise pas la magie.','Apte à la baston dès le plus bas niveau !\r\nPeut échange 1 point de PRD et AT.',0),(3,'Mage',30,30,0,0,0,99,0,99,12,99,0,99,0,99,'Ne peut utiliser autre chose que : bâton, poignard, dague, gourdin comme arme de combat rapproché.\r\nN’utilise pas les arcs ou arbalètes.\r\nN’utilise pas les boucliers.\r\nTransport de charge limitée à 10 kilos (ou moins selon race).\r\nN’utilise pas d’armure supérieure à PR2 (sauf magique).\r\n-30% EV initiale.','Au passage de niveau, choisit d\'augmenter l\'énergie vitale OU l\'énergie astrale (ID6).',2),(4,'Ranger',0,0,0,0,0,99,10,99,0,99,10,99,0,99,'N’utilise pas d’armure supérieure à PR4 (sauf magique ou “spécial voleur/ranger”).','En raison de sa polyvalence, au niveau 1 le Ranger peut choisir de soustraire 1 point d\'une CARAC pour l\'ajouter à une\nautre (INT, CHA, COU, FO, AD).',4),(5,'Aucun',0,0,0,0,0,99,0,99,0,99,0,99,0,99,'','',0),(6,'Ingenieur',0,0,0,0,0,99,11,99,0,99,0,99,0,99,'PR max : 3\r\nPas d\'armes à deux mains','',3),(7,'Menestrel',0,0,0,0,0,99,11,99,0,99,12,99,0,99,'Pas d\'armure > PR2.\r\nBâton, poignard, dague, gourdin uniquement au cac.\r\nPas de bouclier ni d\'arbalète.','',2),(9,'Voleur',0,0,0,0,0,99,12,99,0,99,0,99,0,99,'Pas d\'armure supérieur à PR3','',3),(10,'Pretre',0,20,0,0,0,99,0,99,0,99,12,99,0,99,'','',0),(11,'Paladin',0,10,0,0,9,99,0,99,10,99,11,99,12,99,'','',0),(12,'Pirate',0,0,0,0,0,99,11,99,0,99,0,99,11,99,'','',3),(13,'Marchand',0,0,0,0,0,99,0,99,12,99,11,99,0,99,'','',3),(15,'Bourgeois',0,0,7,9,0,99,0,99,10,99,11,99,0,99,'','',0),(99,'Mafieux',38,0,10,9,11,99,12,99,11,99,0,99,10,99,'','',7);
/*!40000 ALTER TABLE `birdi_metier` ENABLE KEYS */;
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
