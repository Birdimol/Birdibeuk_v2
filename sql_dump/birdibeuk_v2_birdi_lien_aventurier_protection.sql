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
-- Table structure for table `birdi_lien_aventurier_protection`
--

DROP TABLE IF EXISTS `birdi_lien_aventurier_protection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `birdi_lien_aventurier_protection` (
  `ID_AVENTURIER` int(11) NOT NULL,
  `ID_PROTECTION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `birdi_lien_aventurier_protection`
--

LOCK TABLES `birdi_lien_aventurier_protection` WRITE;
/*!40000 ALTER TABLE `birdi_lien_aventurier_protection` DISABLE KEYS */;
INSERT INTO `birdi_lien_aventurier_protection` VALUES (29,23),(29,44),(31,33),(31,23),(31,44),(35,13),(35,38),(35,43),(36,13),(36,38),(36,43),(42,42),(42,26),(42,37),(48,1),(53,27),(55,27),(56,54),(67,54),(70,33),(70,27),(58,68),(74,38),(74,22),(76,23),(77,27),(86,42),(87,45),(87,38),(87,24),(87,33),(88,44),(104,38),(104,27),(113,27),(114,67),(115,67),(125,23),(126,27),(127,13),(127,43),(129,27),(129,33),(129,43),(129,37),(133,28),(134,31),(134,27),(134,43),(134,38),(107,25),(83,52),(83,59),(106,13),(108,25),(142,27),(143,27),(135,27),(135,43),(135,38),(146,48),(146,1),(146,43),(147,54),(132,62),(132,49),(153,27),(162,25),(162,43),(157,38),(165,27),(165,43),(165,33),(166,27),(167,27),(167,43),(167,38),(168,27),(168,43),(168,38),(169,43),(170,22),(170,43),(81,1),(81,44),(172,50),(173,23),(174,22),(181,27),(181,43),(181,37),(184,28),(184,64),(184,37),(189,27),(189,67),(195,54),(195,45),(196,25),(199,27),(199,44),(200,26),(201,13),(208,25),(213,32),(216,27),(216,64),(216,44),(221,38),(221,32),(222,38),(222,32),(227,22),(227,43),(228,25),(229,25),(229,44),(232,51),(233,87),(233,88),(233,89),(211,28),(240,35),(241,43),(241,27),(242,27),(243,13),(243,37),(244,23),(245,13),(246,32),(246,44),(248,28),(249,27),(249,38),(249,43),(249,37),(250,22),(175,22),(225,43),(225,25),(210,64),(210,37),(210,22),(258,27),(258,43),(258,38),(259,22),(259,33),(260,26),(260,38),(260,42),(260,37),(262,22),(262,43),(262,38),(266,36),(273,103),(274,32),(274,35),(274,38),(274,43),(274,38),(185,27),(275,53),(275,60),(279,49),(279,43),(279,37),(207,67),(207,27),(207,102),(207,37),(286,22),(286,43),(285,24),(285,45),(285,37),(285,38),(287,22),(287,38),(287,43),(288,37),(288,1),(288,44),(291,26),(291,33),(292,143),(292,67),(292,43),(294,35),(296,26),(296,46),(297,28),(297,43),(299,22),(299,37),(299,43),(301,27),(301,45),(302,49),(298,28),(303,22),(333,155),(333,149),(335,27),(331,22),(331,43),(305,27),(305,43),(305,38),(342,33),(342,28),(346,26),(346,64),(346,38),(347,24),(347,43),(348,24),(348,43),(349,51),(354,27),(355,27),(355,42),(356,27),(356,67),(357,43),(357,27),(357,37),(358,1),(359,1),(361,1),(361,46),(362,27),(364,1),(365,27),(366,52),(369,22),(369,43),(370,259),(370,45),(370,27),(370,260),(377,26),(372,262),(372,258),(372,27),(372,257),(373,143),(209,22),(209,256),(209,257),(209,258),(371,257),(371,39),(371,27),(368,54),(368,254),(368,255),(374,43),(374,258),(374,261),(374,22),(380,50),(380,59),(382,22),(382,43),(385,51),(386,64),(386,26),(386,43),(386,37),(386,38),(393,152),(394,27),(394,43),(394,258),(395,43),(395,27),(395,258),(238,22),(71,45),(110,49),(237,27),(45,27),(45,37),(45,43),(401,37),(401,43),(401,27),(404,52),(404,59),(405,28),(407,50),(408,47),(408,47),(295,38),(295,28),(295,43),(409,27),(409,35),(409,43),(409,38),(411,38),(411,43),(411,25),(412,263),(412,259),(412,257),(413,44),(413,24),(417,38),(417,33),(417,27),(419,27),(419,34),(420,27),(420,33),(420,43),(421,22),(421,44),(422,47),(422,1),(422,37),(422,44),(422,35),(423,53),(423,60),(410,23),(410,35),(424,1),(424,47),(424,44),(427,58),(427,53),(428,48),(428,59),(428,43),(429,59),(429,48),(429,43),(430,24),(430,67),(431,22),(432,64),(432,37),(432,22),(438,52),(438,61),(220,38),(220,32),(439,27),(441,61),(441,52),(418,140),(437,27),(437,37),(448,143),(450,43),(450,48),(449,257),(449,268),(449,270),(452,44),(452,63),(452,22),(457,45),(457,37),(458,27),(458,43),(459,33),(267,23),(267,38),(267,44),(267,277),(267,282),(267,283),(267,289),(267,291),(445,275),(445,276),(463,38),(463,37),(463,43),(463,33),(463,26),(464,27),(464,37),(464,43),(464,38),(465,22),(466,38),(466,37),(466,43),(466,63),(466,22),(467,38),(467,37),(467,43),(467,63),(467,22),(468,152),(468,27),(468,33),(469,27),(469,36),(471,47),(471,153),(473,28),(474,28),(476,35),(476,44),(476,27),(478,28),(478,43),(478,35),(478,37),(400,34),(400,45),(477,43),(477,24),(481,152),(482,54),(483,46),(483,29),(484,37),(484,257),(484,27),(398,293),(398,294),(398,295),(398,297),(479,27),(479,257),(485,26),(485,46),(485,44),(485,33),(486,26),(486,46),(486,44),(486,33),(489,218),(492,59),(492,218),(493,40),(493,28),(493,44),(494,28),(494,45),(497,28),(497,45),(498,28),(498,45),(503,27),(503,43),(504,35),(506,25),(507,27),(508,22),(508,38),(446,45),(446,298),(509,38),(510,38),(518,48),(155,55),(155,43),(520,32),(520,35),(521,53),(475,24),(525,27),(527,52),(527,57),(528,43),(528,22),(529,22),(529,44),(530,43),(530,37),(530,63),(532,13),(531,27),(531,301),(538,44),(538,22),(538,63),(543,26),(544,43),(544,38),(544,27),(547,37),(547,43),(547,27),(551,152),(261,43),(261,27),(261,64),(558,52),(559,52),(559,59),(561,22),(561,44),(561,34),(562,22),(563,29),(564,22),(553,302),(554,23),(554,38),(554,33),(554,46),(567,22),(567,64),(567,43),(575,22),(578,40),(578,36),(582,22),(583,59),(524,59),(524,218),(293,38),(293,37),(293,28),(293,306),(593,50),(594,50),(597,13),(597,43),(597,37),(599,28),(599,33),(600,35),(600,37),(601,37),(601,35),(601,43),(598,27),(598,44),(598,37),(513,257),(513,22),(606,33),(606,42),(608,38),(615,50),(615,61),(605,27),(605,67),(605,45),(617,48),(603,27),(514,35),(514,129),(624,1),(624,33),(625,13),(627,43),(627,35),(627,38),(628,27),(629,26),(629,43),(629,37),(629,33),(197,67),(607,50),(607,61),(633,23),(633,37),(634,23),(634,37),(635,23),(635,37),(636,28),(637,47),(619,43),(619,37),(619,22),(640,23),(641,46),(641,1),(641,38),(643,23),(643,46),(644,27),(644,43),(644,37),(647,22),(647,38),(647,37),(648,23),(648,46),(652,43),(652,39),(652,35),(652,26),(654,38),(655,48),(657,149),(14,13),(14,66),(1,28),(1,76),(1,45),(1,34),(3,2),(3,36),(3,4),(3,31),(658,47),(658,26),(658,34),(658,44),(50,26),(50,43),(659,23),(659,38),(659,38),(660,13),(661,148),(662,32),(663,32),(664,27),(664,43),(664,37),(602,44),(602,129),(602,121),(602,107),(602,35),(665,61),(665,50),(665,37),(665,44),(666,27),(666,33),(666,46),(667,43),(667,38),(670,27),(670,35),(671,27),(671,43),(671,34),(672,27),(672,44),(673,27),(674,27),(674,37),(674,43),(679,27),(681,52),(682,27),(682,35),(682,44),(631,43),(631,37),(631,27),(631,33),(631,46),(653,27),(653,37),(653,45),(683,28),(683,33),(499,34),(499,28),(684,67),(684,40),(685,44),(686,48),(686,59),(687,48),(687,59),(688,22),(689,22),(691,13),(692,24),(692,36),(692,44),(692,37),(693,33),(693,27),(695,44),(695,36),(695,22),(696,27),(697,27),(148,46),(148,27),(148,299),(148,31),(148,34),(703,59),(703,52),(569,27),(569,38),(569,34),(569,43),(704,29),(704,47),(443,27),(443,33),(443,257),(707,46),(707,27),(669,313),(708,38),(708,32),(708,33),(709,27),(709,38),(709,37),(712,27),(712,44),(715,314),(715,315),(711,38),(522,24),(718,46),(718,26),(718,33),(719,27),(719,43),(720,144),(721,23),(721,38),(721,43),(722,38),(723,38),(723,13),(724,38),(724,22),(725,38),(725,27),(726,13),(729,35),(731,28),(731,67),(732,48),(734,25),(363,28),(604,54),(735,47),(149,28),(149,46),(149,44),(736,51),(737,42),(742,51),(743,27),(744,47),(747,22),(747,23),(748,48),(750,26),(750,260),(751,319),(758,1),(758,33),(758,43),(758,38),(761,37),(761,45),(761,34),(761,28),(741,317),(741,125),(767,28),(767,34),(767,45),(767,38),(767,37),(768,28),(768,34),(768,45),(768,37),(768,38),(769,37),(770,45),(749,27),(789,48),(788,46),(788,328),(788,329),(783,34),(783,28),(783,37),(793,152),(793,44),(794,34),(794,27),(794,43),(778,27),(778,33),(796,26),(797,28),(797,43),(798,28),(798,67),(808,32),(809,337),(810,32),(811,13),(806,38),(806,332),(806,333),(806,334),(806,336),(812,13),(813,27),(814,27),(815,37),(815,1),(756,257),(756,26),(756,67),(818,27),(818,46),(818,64),(819,27),(819,33),(820,22),(820,38),(820,37),(820,63),(821,38),(821,37),(821,22),(821,63),(822,27),(822,45),(823,23),(823,43),(824,23),(824,67),(825,28),(825,44),(826,38),(826,38),(827,38),(827,38),(831,46),(832,26),(833,22),(833,38),(833,43),(833,63),(834,28),(835,37),(836,64),(837,45),(837,22),(828,61),(830,37),(830,37),(830,67),(830,22),(839,27),(839,37),(838,27),(841,48),(841,43),(841,33),(841,37),(844,27),(844,35),(844,257),(840,27),(840,64),(845,1),(845,37),(845,43),(845,33),(847,38),(850,125),(850,45),(850,34),(807,330),(807,331),(772,154),(854,22),(854,38),(854,44),(854,64),(855,38),(855,43),(855,28),(855,33),(853,47),(853,27),(853,33),(856,38),(856,28),(856,43),(857,13),(857,46),(858,13),(858,46),(859,46),(859,13),(860,40),(851,48),(851,59),(861,46),(861,65),(861,27),(861,38),(862,40),(862,27),(862,37),(862,33),(862,43),(863,38),(863,37),(863,43),(863,33),(863,27),(864,38),(864,37),(864,43),(864,33),(864,27),(852,46),(852,13),(867,51),(867,62),(868,32),(868,35),(868,42),(869,302),(869,67),(870,67),(872,38),(872,22),(872,43),(872,37),(873,59),(874,22),(875,27),(876,22),(877,61),(878,28),(878,64),(879,50),(879,43),(879,37),(880,27),(883,155),(885,139),(886,13),(888,22),(888,259),(888,257),(618,259),(618,33),(618,27),(621,38),(621,33),(621,27),(621,43),(842,339),(842,343),(842,344),(895,38),(895,27),(895,43),(897,27),(897,38),(899,50),(899,43),(900,43),(900,259),(903,50),(890,27),(890,67),(904,347),(904,348),(904,351),(904,352),(907,27),(907,44),(909,27),(910,28),(911,27),(912,27),(912,43),(913,27),(913,43),(914,46),(914,27),(914,35),(919,48),(922,45),(922,258),(920,48),(560,24),(560,341),(887,38),(887,35),(887,27),(752,320),(752,323),(916,139),(923,13),(924,48),(924,59),(925,48),(925,59),(925,43),(926,43),(926,38),(926,37),(926,33),(926,1),(927,37),(927,43),(927,27),(927,33),(928,37),(928,49),(928,43),(929,63),(929,37),(929,27),(929,43),(843,27),(843,44),(843,34),(930,49),(930,43),(931,22),(931,37),(931,43),(774,152),(774,37),(921,50),(932,22),(932,45),(935,46),(935,27),(936,55),(938,1),(938,37),(938,42),(938,64),(938,38),(939,38),(939,37),(939,42),(939,64),(940,23),(942,46),(942,35),(942,27),(942,43),(943,27),(943,35),(944,27),(944,35),(937,355),(946,27),(947,1),(947,43),(947,63),(948,26),(949,1),(950,43),(950,27),(950,63),(953,43),(953,38),(955,112),(955,45),(955,93),(896,50),(896,59),(896,44),(957,1),(958,1),(959,13),(961,13),(961,43),(961,37),(776,192),(892,38),(892,37),(892,42),(892,33),(892,1),(235,27),(235,37),(235,43),(235,316),(962,28),(963,40),(964,59),(964,48),(965,48),(965,59),(966,24),(966,43),(780,52),(753,320),(753,308),(753,301),(753,358),(969,26),(969,43),(969,38),(972,38),(974,38),(975,46),(975,34),(975,24),(977,1),(978,48),(979,50),(982,27),(982,43),(982,359),(967,1),(983,27),(983,326),(980,50),(984,231),(976,33),(976,37),(976,43),(976,28),(986,38),(987,57),(987,48),(992,24),(992,38),(985,362),(985,363),(993,143),(993,22),(988,57),(988,48),(989,309),(989,22),(991,149),(991,22),(981,361),(981,364),(952,1),(952,44),(971,27),(971,33),(970,27),(970,38),(994,143),(995,143),(105,38),(105,22),(105,43),(996,27),(894,27),(894,35),(990,152),(990,63),(990,43),(951,24),(951,67),(951,356),(951,357),(999,27),(999,43),(997,37),(997,257),(997,365),(234,62),(234,185);
/*!40000 ALTER TABLE `birdi_lien_aventurier_protection` ENABLE KEYS */;
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
