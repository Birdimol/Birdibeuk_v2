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
-- Table structure for table `birdi_origine`
--

DROP TABLE IF EXISTS `birdi_origine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birdi_origine` (
  `ORIGINE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ORIGINE_NOM` varchar(20) NOT NULL,
  `ORIGINE_EV` int(11) NOT NULL,
  `ORIGINE_AT` int(11) NOT NULL,
  `ORIGINE_PRD` int(11) NOT NULL,
  `ORIGINE_FOMIN` int(11) NOT NULL,
  `ORIGINE_FOMAX` int(11) NOT NULL,
  `ORIGINE_ADMIN` int(11) NOT NULL,
  `ORIGINE_ADMAX` int(11) NOT NULL,
  `ORIGINE_INTMIN` int(11) NOT NULL,
  `ORIGINE_INTMAX` int(11) NOT NULL,
  `ORIGINE_CHAMIN` int(11) NOT NULL,
  `ORIGINE_CHAMAX` int(11) NOT NULL,
  `ORIGINE_COUMIN` int(11) NOT NULL,
  `ORIGINE_COUMAX` int(11) NOT NULL,
  `ORIGINE_RESTRICTION` text NOT NULL,
  `ORIGINE_BONUS` text NOT NULL,
  `ORIGINE_MAGIE` int(11) NOT NULL,
  `ORIGINE_PRMAX` int(11) NOT NULL,
  `ORIGINE_BOUCLIER` int(11) NOT NULL,
  `ORIGINE_JET` int(11) NOT NULL,
  `ORIGINE_MALADIE` int(11) NOT NULL DEFAULT '1',
  `ORIGINE_PETITE_TAILLE` int(11) NOT NULL DEFAULT '0',
  `ORIGINE_PR_MAX` int(11) NOT NULL,
  PRIMARY KEY (`ORIGINE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birdi_origine`
--

LOCK TABLES `birdi_origine` WRITE;
/*!40000 ALTER TABLE `birdi_origine` DISABLE KEYS */;
INSERT INTO `birdi_origine` VALUES (1,'Humain',30,8,10,0,99,0,99,0,99,0,99,0,99,'','',1,0,1,1,1,0,0),(2,'Barbare',35,9,9,13,99,0,99,0,99,0,99,12,99,'Pas de magie sauf arme enchantée (et encore), n\'utilise pas d\'arbalète, pas d\'armure complète ou enchantée, pas de bouclier.\r\nInterdit : Plastron, jambières, bracelet, casque ou Plastron, jambières, brassières','',0,0,0,1,1,0,0),(3,'Nain',35,8,10,12,99,0,99,0,99,0,99,11,99,'n’utilise pas la magie sauf sur arme ou protection enchantée\r\nn’utilise pas d’arc ou arbalète\r\nn’utilise pas les armes à 2 mains \"humaines\"\r\nPas d\'armes de jet non-naine.','',0,0,1,0,1,1,0),(4,'Haut-elfe',25,8,10,0,12,12,99,11,99,12,99,0,99,'ne peut utiliser les armes à 2 mains\r\ntransport de charge limitée à 10 kilos\r\nPR4 max (sauf magique)','+1 CHA au niveau 2 et 3.\r\nExcellente vue, nyctalopie moyenne. Ouïe plus développée que la moyenne.\r\n',1,4,0,1,1,0,4),(5,'Demi-elfe',28,0,0,0,99,11,99,0,99,10,99,0,99,'ne peut utiliser les armes à 2 mains\r\ntransport de charge limitée à 15 kilos\r\nn’utilise pas d’armure supérieure à PR5 (sauf magique)\r\n','Excellente vue, nyctalopie moyenne.',1,5,0,1,1,0,5),(6,'Elfe-sylvain',25,0,0,0,11,10,99,0,99,12,99,0,99,'pas d’aptitudes à la magie (métier de mage ou prêtrise)\r\nne peut utiliser les armes à 2 mains\r\ntransport de charge limitée à 10 kilos\r\nn’utilise pas d’armure supérieure à PR4 (sauf magique)','Excellente vue, bon odorat, nyctalopie totale.\r\n+1 point au CHARISME au passage des niveaux 2 et 3.',0,4,0,1,1,0,4),(7,'Elfe-noir',25,8,10,0,12,13,99,12,99,0,99,0,99,'ne peut utiliser les armes à 2 mains\r\nne peut utiliser les boucliers\r\ntransport de charge limitée à 15 kilos\r\nn’utilise pas d’armure supérieure à PR3 (sauf magique)','Excellente vue, nyctalopie totale, ouïe très développée.',1,3,1,1,1,0,3),(8,'Orque',35,9,9,12,99,0,99,0,8,0,10,0,99,'Mauvaise vue\r\nn’utilise aucune forme de magie\r\nn’utilise pas d’arbalète ou d\'armes complexes','Excellent odorat : peut flairer le sang ou le danger à 50 m. Nyctalopie totale.',0,0,1,1,1,0,0),(9,'Demi-orque',35,10,8,12,99,0,11,0,10,0,99,0,99,'n’utilise pas la magie sauf sur arme ou protection enchantée\r\nn’utilise pas d’arbalète ou d\'armes complexes\r\n','Très bon odorat : peut flairer le sang ou le danger à 25 m. Nyctalopie moyenne.',0,0,1,1,1,0,0),(10,'Gobelin',20,0,0,0,9,0,99,0,10,0,8,0,10,'Tous les vêtements/protections sont 20% plus chers.\r\nn’utilise aucune forme de magie\r\nne parle pas la langue\r\ntransport de charge limité à 10 kilos\r\nPR3 max','Excellent odorat : peut flairer le sang ou le danger à 50 m. Bonne vue, nyctalopie totale.\r\nLe malus de PARADE relatif au matériel ne s\'applique jamais',0,3,1,1,1,1,0),(11,'Ogre',45,9,9,13,99,0,11,0,9,0,10,0,99,'Tous les vêtements/protections sont 30% plus chers.\r\nn’utilise pas d’armes compliquées à manier\r\nn’utilise aucune forme de magie\r\nne parle pas la langue\r\nn’utilise pas de lame courte, d\'armes de jet, d\'arc ou d\'arbalète\r\nn’utilise pas d’armure supérieure à 4PR','Très bon odorat : peut flairer le sang ou le danger à 50 m.\r\nL\'Ogre a le droit de retrancher jusqu\'à 3 points à son score de base en ATTAQUE et/ou en PARADE pour en faire un bonus de dégâts (au corps à corps, toutes armes confondues). Ainsi il peut avoir +3 en dégâts en plus de ses \r\nautres bonus de FORCE, mais son côté bourrin le rend maladroit. Le bonus est à choisir en début de carrière et ne pourra \r\nêtre modifié par la suite.\r\n',0,4,0,0,1,0,4),(12,'Hobbit',25,0,0,0,10,0,99,10,99,0,99,12,99,'n’utilise pas la magie sauf sur arme, objet ou protection enchantée\r\n?n’utilise pas d’arc ni d’arme à 2 mains « à taille humaine »\r\nn’utilise pas d’armure complète\r\nn’utilise pas d’armure supérieure à PR3 (sauf magique)\r\ntransport de charge limité à 10 kilos','Ev +1D4 par niveau',0,3,0,1,1,1,3),(13,'Gnome',15,12,6,0,8,13,99,10,99,0,99,0,99,'Tous les vêtements/protections sont 50% plus chers.\r\nn’utilise pas la magie sauf sur arme ou protection enchantée\r\narmes autorisées : poignards, dagues, couteaux uniquement\r\ntransport de charge limitée à 2 kilos\r\nne parle pas la langue\r\nn’utilise pas d’armure supérieure à PR2 (sauf magique)\r\nPas d\'armes de jet, car il est trop faible, exception pour une sabacane.','EV +1D4 par niveau\r\nil peut esquiver les coups de \r\nmanière permanente sans rater aucun assaut',0,2,0,0,1,0,2);
/*!40000 ALTER TABLE `birdi_origine` ENABLE KEYS */;
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
