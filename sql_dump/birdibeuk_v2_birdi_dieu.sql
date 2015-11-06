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
-- Table structure for table `birdi_dieu`
--

DROP TABLE IF EXISTS `birdi_dieu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birdi_dieu` (
  `ID_DIEU` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(30) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PALADIN` int(11) NOT NULL,
  `PRETRE` int(11) NOT NULL,
  PRIMARY KEY (`ID_DIEU`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birdi_dieu`
--

LOCK TABLES `birdi_dieu` WRITE;
/*!40000 ALTER TABLE `birdi_dieu` DISABLE KEYS */;
INSERT INTO `birdi_dieu` VALUES (1,'Braav\'','Braav’ est le dieu loyal-bon de la gentillesse, de la défense des opprimés, du bien et de la bonne action - un paladin puissant qui doit suivre en permanence le droit chemin !',1,0),(2,'Dlul','Dlul est le dieu chaotique du sommeil et de l\'ennui. Son prêtre dispose toutefois de quelques pouvoirs très utiles, voire même dangereux ! Son paladin peut se révéler puissant, tant qu\'on ne l\'empêche pas de dormir.',1,1),(3,'Youclidh','Youclidh est le dieu asexué de la Bonne Santé, du Bien-être et de la Guérison - un soigneur du côté du Bien.',0,1),(4,'Slanoush','Slanoush est le dieu des secrets, des vices, de la perversion, de la psychologie et des rêves - cela donne un prêtre polyvalent et un paladin quelque peu sournois. (à déconseiller aux mineurs)',1,1),(5,'Khornettoh','Khornettoh est le dieu de la violence et du sang - un paladin donc assez teigneux !',1,0),(6,'Adathie','Adathie est la déesse de la Justice et des Merguez - un prêtre assez polyvalent dans un genre qui tend plutôt vers le \"bon\" (discipline à l\'origine proposée par Cham von Schrapwitz, Siegmund Krönfeld et Nak’hua Thorp)',0,1);
/*!40000 ALTER TABLE `birdi_dieu` ENABLE KEYS */;
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
