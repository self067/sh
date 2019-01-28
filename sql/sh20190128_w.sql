-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: localhost    Database: selto149_sh
-- ------------------------------------------------------
-- Server version	5.7.24-log

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'earrings','EARRINGS'),(2,'necklaces','NECKLACES'),(3,'rings','RINGS'),(4,'gift_cards','GIFT CARDS'),(6,'bracelets','BRACELETS');
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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (42,'2019-01-25 18:40:52','thsth','fdghsfgh@aaaa.ry','dfghdfghd','fghdfgh',2200,'Новый'),(43,'2019-01-28 13:16:18','2wwwwww','seltor@mail.ru','23452384','cghuicghweuihcwec',300,'Новый');
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
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'rings','SHARE SPIRIT','rhinestones',790,'ri_share_spirit.jpg','rhinestones','100% Silver','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_share_spirit'),(2,'rings','MICHAEL KORS','Beauty ring ',950,'ri_michael_kors.jpg','rhinestones, logo','925/1000 silver','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_michail_kors'),(3,'rings','MARIA BLACK','ring Maria Black',1150,'ri_maria_black.jpg','rhinestones','18kt Gold-plated','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_maria_black'),(4,'rings','IRO LIFE','ring Iro Life',1150,'ri_iro_life.jpg','rhinestones','Metal','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_iro_life'),(5,'rings','INEZ ANF VINOODH','ring Inez And Vinoodh',750,'ri_inez_and_vinoodh.jpg','rhinestones','no appliques','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_inez_and_vinoodh'),(6,'rings','AURELIE BIDERMANN','ring Aurelie Bidermann',2190,'ri_aurelie_bidermann.jpg','Fine Jewelry - The Spider Collection by Aurelie Bidermann X YOOX','18kt Gold','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','ri_aurelie_bidermann'),(20,'necklaces','ALEXANDER WANG','Item made in Italy, synonymous with quality and design creativity.',520,'nl_alexander_wang.jpg','no appliques, hook fastening, silver effect','100% Brass','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_alexander_wang'),(21,'necklaces','BRUNELLO CUCINELLI','MADE IN ITALY. Item made in Italy, synonymous with quality and design creativity.',2200,'nl_brunello_cucinelli.jpg','Flannel, Beads, Metall Application','Glass, Silver, Mohair wool','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_brunello_cucinelli'),(22,'necklaces','JENNIFER FISHER','Item made in Italy, synonymous with quality and design creativity.',1200,'nl_jennifer_fisher.jpg','no appliques','Metal','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_jennifer_fisher'),(23,'necklaces','LANVIN','Circumference 8.19 inches, Height 3.12 inches',2190,'nl_lanvin.jpg','Rhinestones, Self-tie closure','Metal','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_lanvin'),(24,'necklaces','ROBERTO CAVALLI','MADE IN ITALY. Item made in Italy, synonymous with quality and design creativity.',1250,'nl_roberto_cavalli.jpg','logo, rhinestones, clasp fastening','Metal, Enamel','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_roberto_calli'),(25,'necklaces','DOLCE & GABANA','Item made in Italy, synonymous with quality and design creativity.',1198,'nl_dolce_gabbana.jpg','logo, rhinestones, clasp fastening','40% Crystal, 40% Glass, 20% Brass','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','nl_dolce_gabana'),(26,'bracelets','TIFFANY T NARROW','True Narrow Bracelet',4800,'br_tiffany_t_narrow.jpg','Graphic angles and clean lines blend to create the beautiful clarity of the Tiffany T collection. This intricate bracelet features an alternating pattern that echoes the collection’s iconic T motif.','18k gold, 6.5\" long, Size medium','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_tiffany_t_narrow'),(27,'bracelets','TIFFANY T','Square Bracelet',5500,'br_tiffany_t.jpg','Graphic angles and clean lines blend to create the beautiful clarity of the Tiffany T collection. This sleek bracelet exudes sophistication.','18k gold,Fits wrists up to 6.25, Size medium','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_tiffany_t'),(28,'bracelets','TIFFANY Wire Bracelet','Wire Bracelet',3300,'br_wirebracelet.jpg','Graphic angles and clean lines blend to create the beautiful clarity of the Tiffany T collection. Brilliant diamonds enhance this bracelet\'s timeless elegance.','18k rose gold with round brilliant diamonds,Size medium','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_WireBracelet'),(29,'bracelets','TIFFANY True Narrow Bracelet','True Narrow Bracelet',4800,'br_truenarrowbracelet.jpg','Graphic angles and clean lines blend to create the beautiful clarity of the Tiffany T collection. This intricate bracelet features an alternating pattern that echoes the collection’s iconic T motif.','18k rose gold,Size medium,6.5\" long','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_TrueNarrowBracelet.jpg'),(30,'bracelets','TIFFANY Smile Bracelet','Smile Bracelet',700,'br_smilebracelet.jpg','Graphic angles and clean lines blend to create the beautiful clarity of the Tiffany T collection. The subtle curve of this bracelet is effortlessly elegant.','18k rose gold,Size medium,7\" long','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_SmileBracelet'),(31,'bracelets','TIFFANY Two Double Chain Bracelet','Two Double Chain Bracelet',275,'br_twodoublechainbracelet.jpg','Graphic angles and clean lines blend to create the beautiful clarity of the Tiffany T collection. This bracelet\'s delicate double chains are an elegant contrast to the bold center motif.','Sterling silver,Size medium,13\" long','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_TwoDoubleChainBracelet'),(32,'bracelets','TIFFANY Diamond Flower Bracelet','Diamond Flower Bracelet',2700,'br_diamondflowerbracelet.jpg','Inspired by the idea of abstract flower petals, the new Tiffany Paper Flowers™ collection is a balance of refined femininity and industrial modernity. Accented with brilliant diamonds, this bracelet showcases layers of intricately set petals.','Platinum with round brilliant diamonds,Flower, 12.5 x 12 mm,Carat total weight .17','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_DiamondFlowerBracelet'),(33,'bracelets','Diamond Flower Hinged Bracelet','Diamond Flower Hinged Bracelet',15000,'br_diamondflowerhingedbracelet.jpg','Inspired by the idea of abstract flower petals, the new Tiffany Paper Flowers™ collection is a balance of refined femininity and industrial modernity. This hinged bracelet showcases beautiful layers of delicately set petals.','Platinum with round brilliant diamonds,Flowers, 18 x 17 mm,Carat total weight .68','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_DiamondFlowerHingedBracelet'),(34,'bracelets','TIFFANY Bead Bracelet','Bead Bracelet',150,'br_beadbracelet.jpg','Inspired by the iconic key ring first introduced in 1969, the Return to Tiffany collection is a classic reinvented. This elegant bead bracelet features an engraved tag with a pink enamel finish, evoking a subtle femininity.','Mini heart tag with pink enamel finish on a sterling silver bead bracelet,Size medium, 7\" long,Beads, 4 mm','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_BeadBracelet'),(35,'bracelets','ATLAS Pierced Hinged Bangle','Pierced Hinged Bangle',6100,'br_piercedhingedbangle.jpg','Streamlined and modern, the Atlas collection shines with graphic sophistication and bold simplicity. Rich rubies accent the strong lines of this hinged bangle.','18k rose gold with round rubies,Size medium,Fits wrists up to 6.25\",Carat total weight .10','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_PiercedHingedBangle'),(36,'bracelets','PALOMA\'S MELODY','Bangle',19750,'br_bangle.jpg','The lyrical Paloma\'s Melody collection is crafted from interlocking bands that gently shift shape as they glide with the body, always falling back together as a whole. Shining with diamonds, this bangle’s overlapping bands create the gentle music of a bea','18k gold,Size medium,Fits wrists up to 6.25\",Round brilliant diamonds, carat total weight 2.69,Original designs copyrighted by Paloma Picasso','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_Bangle'),(37,'bracelets','PALOMA PICASSO','Olive Leaf Cuff',12600,'br_oliveleafcuff.jpg','Inspired by the olive branch, a symbol of peace and abundance. Narrow cuff in 18k gold. Size medium. Original designs copyrighted by Paloma Picasso. ','18k gold,Size medium,Fits wrists up to 6.25\",Round brilliant diamonds','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','br_OliveLeafCuff'),(38,'earrings','TIFFANY Wire Bar Earrings','Wire Bar Earrings',3500,'er_wirebarearrings.jpg','Graphic angles and clean lines blend to create the beautiful clarity of the Tiffany T collection. Accented with diamonds, these bold bars are a modern take on the drop earring.','18k gold with round brilliant diamonds,Carat total weight .21','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','er_WireBarEarrings'),(39,'earrings','TIFFANY Wire Hoop Earrings','Wire Hoop Earrings',5600,'er_wirehoopearrings.jpg','Graphic angles and clean lines blend to create the beautiful clarity of the Tiffany T collection. Brilliant diamonds elegantly outline these hoop earrings.','18k rose gold with round brilliant diamonds,Size medium,Carat total weight .41','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','er_WireHoopEarrings'),(40,'earrings','ELSA PERETTI','Mesh Scarf Earrings',2100,'er_meshscarfearrings.jpg','The form is malleable and ergonomic in the way it drapes over the body\'s contours. Earrings in 18k gold, for pierced ears. Size small, 2\" long. Original designs copyrighted by Elsa Peretti.','18k gold,Size medium','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','er_MeshScarfEarrings'),(41,'earrings','TIFFANY BOW','Ribbon Earrings',7200,'er_ribbonearrings.jpg','Evocative of the slender thread one might tie around one’s finger to remember something—or someone—Tiffany Bow is a charming symbol of our most important ties. Traced in diamonds, this design captures the sweeping movement of a flowing ribbon.','18k rose gold with round brilliant diamonds,Size mini,Carat total weight .34','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','er_RibbonEarrings'),(42,'earrings','TIFFANY & CO. SCHLUMBERGER','Twenty Stone Hoop Earrings',15000,'er_twentystonehoopearrings.jpg','Jean Schlumberger’s visionary creations are among the world’s most intricate designs. Blazing diamonds topped by golden X\'s create these glamorous earrings.','18k gold and platinum with round brilliant diamonds,Carat total weight 1.80','Purchases made online may be returned or exchanged within 30 days.We offer free return shipping on all items. You may also return purchases at one of our retail stores.','er_TwentyStoneHoopEarrings'),(43,'gift_cards','Wedding Card Gold','Wedding Card 1000$',1000,'gc_weddingcard1000.jpg','Gift card 1000$','1000$','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','gc_WeddingCard1000'),(44,'gift_cards','Wedding Card','Wedding Card 500$',500,'gc_weddingcard500.jpg','Gift card 500$','500$','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','gc_WeddingCard500'),(45,'gift_cards','Gift Card','Gift Card 300$',300,'gc_giftcard.jpg','Gift card 300$','300$','If you\'re not happy with your purchase, we\'re not happy and we will make it right. You can return your item at any Kay Jewelers store for up to 60 days of purchase or exchange it within 90 days. Watches may be returned or exchanged within 30 days. We can issue refunds from Kay.com, but exchanges must be done at a Kay store.','gc_GiftCard');
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

-- Dump completed on 2019-01-28 14:10:19
