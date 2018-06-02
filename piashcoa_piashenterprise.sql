-- MySQL dump 10.13  Distrib 5.6.30, for Linux (x86_64)
--
-- Host: localhost    Database: piashcoa_piashenterprise
-- ------------------------------------------------------
-- Server version	5.6.30

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
-- Table structure for table `image_upload`
--

DROP TABLE IF EXISTS `image_upload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_upload`
--

LOCK TABLES `image_upload` WRITE;
/*!40000 ALTER TABLE `image_upload` DISABLE KEYS */;
INSERT INTO `image_upload` (`id`, `product_id`, `image_name`) VALUES (1,1,'50158520.jpg'),(2,1,'coal-shovel2.jpg'),(3,1,'Hands-with-Coal.jpg'),(4,1,'coal-in-fire.jpg'),(5,2,'Coal-By-I-Nostrifikator.jpg'),(6,2,'graphite-coal-250x250.jpg'),(7,2,'coal.jpg'),(8,2,'graphite-coal-250x250.jpg'),(9,3,'Coal_bituminous.jpg'),(10,3,'full-images-bituminous-coal-971478-500x500.jpg'),(11,3,'Coal-chunks-350.jpg'),(12,3,'shutterstock_55441954.jpg'),(13,4,'422297-coal-2.jpg'),(14,4,'8963046-background-and-the-texture-of-coal-Stock-Photo-mining-texture-ore.jpg'),(15,4,'coal-471903_1280_2.jpg'),(16,4,'coal-3.jpg');
/*!40000 ALTER TABLE `image_upload` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_grade` varchar(255) NOT NULL,
  `product_scale` varchar(255) NOT NULL,
  `product_measurement` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `product_grade`, `product_scale`, `product_measurement`) VALUES (1,'High Qty. Indian Coal (G-1)','8700 TK','7700 TK'),(2,'High Qty. Indonesian Coal (G-1)','7100','6100'),(3,'Avg.Qty Indonesian Coal (G-2)','6800','5800'),(4,'Old Indonesian Coal','5500 TK','6500 TK');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_login_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `user_login_name`, `user_name`, `user_pass`) VALUES (1,'ashik_piash','MD. Ashikur Rahman','*#xenonashik#*01');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `validity`
--

DROP TABLE IF EXISTS `validity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `validity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `validity`
--

LOCK TABLES `validity` WRITE;
/*!40000 ALTER TABLE `validity` DISABLE KEYS */;
INSERT INTO `validity` (`id`, `date_from`, `date_to`) VALUES (1,'2016-06-09','2016-06-06');
/*!40000 ALTER TABLE `validity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'piashcoa_piashenterprise'
--

--
-- Dumping routines for database 'piashcoa_piashenterprise'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-10  5:18:44
