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
-- Table structure for table `birdi_mob`
--

DROP TABLE IF EXISTS `birdi_mob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birdi_mob` (
  `id_mob` int(11) NOT NULL AUTO_INCREMENT,
  `type_mob` varchar(30) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `at` int(11) NOT NULL,
  `prd` int(11) NOT NULL,
  `ev` int(11) NOT NULL,
  `pr` int(11) NOT NULL,
  `pi` varchar(10) NOT NULL,
  `type_arme` varchar(100) NOT NULL,
  `cou` int(11) NOT NULL,
  `rm` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `note` text NOT NULL,
  `niv_min` int(11) NOT NULL,
  `niv_max` int(11) NOT NULL,
  `po` varchar(20) NOT NULL,
  `humanoide` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_mob`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birdi_mob`
--

LOCK TABLES `birdi_mob` WRITE;
/*!40000 ALTER TABLE `birdi_mob` DISABLE KEYS */;
INSERT INTO `birdi_mob` VALUES (1,'Bandit','Brigand de base 1',9,9,18,2,'1D+2','lame une main',8,8,8,'Armé d\'une épée',1,3,'3D',1),(2,'Bandit','Brigand de base 2',8,6,18,2,'1D+3','lame courte',8,8,10,'Armé d\'un arc et d\'une dague - AD 11',1,3,'2D+1',1),(3,'Bandit','Brigand de base 3',8,9,18,2,'1D+3','baton/hache de jet/hache une main/lame courte/lame deux mains',8,8,12,'Peut être armé de presque tout sauf arme à distance',1,3,'',1),(4,'Bandit','Brigand de base 4',8,8,18,2,'1D+2','lame une main/masse une main/baton/lame courte/hache une main/marteau une main',8,8,8,'Peut être armé de presque tout sauf arme à distance',1,3,'5D-10',1),(5,'Orque/Peau-verte','Orque gardien',9,7,15,2,'1D+4','lame une main',8,9,10,'',1,6,'5D-15',1),(6,'Orque/Peau-verte','gros chef Orque ',12,9,35,4,'1D+6','lame deux mains',12,10,25,'',3,6,'4D',1),(7,'Monstre','Homme-Lézard',10,12,25,3,'1D+3','lame une main',16,9,16,'',2,4,'1D',1),(8,'Animal','Araignées tranchantes',9,5,18,1,'1D+2','',17,2,10,'',1,3,'0',0),(9,'Animal','Salamandre du volcan',12,7,32,2,'1D+4','',9,10,30,'Aléatoire 3D+2 (lave) à 4m',2,4,'0',0),(10,'Animal','Sanglier noir fou',10,6,25,2,'1D+4','',20,11,16,'Parade impossible : esquive AD',2,4,'',0),(12,'Orque/Peau-verte','Orque d\'élite',12,12,40,4,'1D+5','hache une main/lame une main/marteau une main/masse une main',14,12,40,'Armé d’un fendoir d’assaut et d’un bouclier',4,7,'5D-6',1),(14,'Dragon/Animal','Dragonne des cimes',14,10,50,6,'2D+3','',20,13,60,'Combat spécial : voir bestiaire avancé P. 17',7,10,'0',0),(15,'Bandit/Barbare','Barbare novice1',11,7,30,2,'1D+3','baton/hache deux mains/hache une main/javelot/lame courte/lame deux mains/lame une main',12,9,20,'',2,3,'2D-4',1),(17,'Gobelin/Peau-verte','Gobelin',8,6,12,2,'1D+2','baton/lame courte/lame une main/marteau une main/masse une main/récupération',5,6,5,'',1,3,'1D-2',1),(18,'Gobelin/Peau-verte','Chef gobelin dément',13,10,18,3,'1D+4','arme bizarre/hache une main/lame courte/lame une main/marteau une main/masse une main',10,7,12,'AD 14, 2 fois plus rapide qu\'un humain',1,3,'3D-6',1),(19,'Gobelin/Peau-verte','Gobelin costaud',10,8,15,3,'1D+3','hache une main/lame courte/lame une main/marteau une main/masse une main/récupération',7,7,8,'',1,3,'2D-4',1),(20,'Garde','Garde 2 village',11,9,17,3,'1D+2','lame une main/masse une main',13,8,10,'Sympathique mais zélé.',2,4,'2D-4',1),(21,'Garde','Chef garde village',11,10,20,3,'1D+4','arme d\'hast',12,8,13,'Force : 13',3,5,'4D',1),(22,'Ogre/Monstre','Ogre vindicatif',10,6,40,3,'2D+5','hache deux mains/lame deux mains/marteau deux mains',20,8,30,'FO 16, AD 6',4,7,'0',1),(23,'Animal','Bouc en colère',12,2,10,1,'1D','',15,8,5,'Parade impossible : Esquive AD',1,3,'0',0),(24,'Monstre','Millepattes monstrueux',12,8,40,6,'1D+6','',20,11,50,'Carapace épaisse, combat avec ses mandibules puissantes',3,6,'0',0);
/*!40000 ALTER TABLE `birdi_mob` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-04 16:40:54
