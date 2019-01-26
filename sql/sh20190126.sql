-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: selto149_sh
-- ------------------------------------------------------
-- Server version	5.5.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(45) NOT NULL,
  `browser_name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'earrings','EARRINGS'),(2,'necklaces','NECKLACES'),(3,'rings','RINGS'),(4,'gift_cards','GIFT CARDS');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sum` int(11) NOT NULL,
  `status` enum('Новый','Завершен') NOT NULL DEFAULT 'Новый',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (42,'2019-01-25 18:40:52','thsth','fdghsfgh@aaaa.ry','dfghdfghd','fghdfgh',2200,'Новый');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_good`
--

DROP TABLE IF EXISTS `order_good`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `order_good` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sum` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_good`
--

LOCK TABLES `order_good` WRITE;
/*!40000 ALTER TABLE `order_good` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_good` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `brief` varchar(255) DEFAULT '',
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `specification` varchar(255) DEFAULT '',
  `returns` varchar(555) DEFAULT NULL,
  `link_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `link_name_UNIQUE` (`link_name`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'rings','SHARE SPIRIT','rhinestones',790,'ri_share_spirit.jpg','rhinestones','100% Silver','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_share_spirit'),(2,'rings','MICHAEL KORS','Beauty ring ',950,'ri_michael_kors.jpg','rhinestones, logo','925/1000 silver','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_michail_kors'),(3,'rings','MARIA BLACK','ring Maria Black',1150,'ri_maria_black.jpg','rhinestones','18kt Gold-plated','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_maria_black'),(4,'rings','IRO LIFE','ring Iro Life',1150,'ri_iro_life.jpg','rhinestones','Metal','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_iro_life'),(5,'rings','INEZ ANF VINOODH','ring Inez And Vinoodh',750,'ri_inez_and_vinoodh.jpg','rhinestones','no appliques','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_inez_and_vinoodh'),(6,'rings','AURELIE BIDERMANN','ring Aurelie Bidermann',2190,'ri_aurelie_bidermann.jpg','Fine Jewelry - The Spider Collection by Aurelie Bidermann X YOOX','18kt Gold','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_aurelie_bidermann'),(20,'necklaces','ALEXANDER WANG','Item made in Italy, synonymous with quality and design creativity.',520,'nl_alexander_wang.jpg','no appliques, hook fastening, silver effect','100% Brass','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_alexander_wang'),(21,'necklaces','BRUNELLO CUCINELLI','MADE IN ITALY. Item made in Italy, synonymous with quality and design creativity.',2200,'nl_brunello_cucinelli.jpg','Flannel, Beads, Metall Application','Glass, Silver, Mohair wool','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_brunello_cucinelli'),(22,'necklaces','JENNIFER FISHER','Item made in Italy, synonymous with quality and design creativity.',1200,'nl_jennifer_fisher.jpg','no appliques','Metal','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_jennifer_fisher'),(23,'necklaces','LANVIN','Circumference 8.19 inches, Height 3.12 inches',2190,'nl_lanvin.jpg','Rhinestones, Self-tie closure','Metal','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_lanvin'),(24,'necklaces','ROBERTO CAVALLI','MADE IN ITALY. Item made in Italy, synonymous with quality and design creativity.',1250,'nl_roberto_cavalli.jpg','logo, rhinestones, clasp fastening','Metal, Enamel','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_roberto_calli'),(25,'necklaces','DOLCE & GABANA','Item made in Italy, synonymous with quality and design creativity.',1198,'nl_dolce_gabbana.jpg','logo, rhinestones, clasp fastening','40% Crystal, 40% Glass, 20% Brass','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_dolce_gabana');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-26 20:15:56
