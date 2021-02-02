-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: shoopingcart
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about`
--

LOCK TABLES `about` WRITE;
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` VALUES (1,'Come and experience the warmth and hospitality in the NEWEST and ONE of the FINEST hotels in Pagadian City.&#9829; (opened last Oct 28, 2011)<br><br>\r\n<strong>Description</strong><br>\r\nThe newest hotel in Pagadian City nestled along the highway towards the city from the airport. It has a relaxing pool at the back of its hotel where guests can truly enjoy the hassle-free accommodation and relaxation. -Pagadian.info\r\n<br><br><strong>General Information</strong><br>\r\nTo provide guests a calm, modest, charm and cozy ambiance, a well-refurbished 1,700 sq. meter hotel was opened in National highway, Tuburan district, Pagadian City.\r\n<br><br>\r\nThe hotel, named ?four queens? after the owner and her three daughters: Princess, Vanessa, and Paulline, has two (2) elegant and fully-air conditioned function halls, swimming pools, green house (a garden wedding and reception venue),\r\nand a videoke bar.\r\n<br><br>\r\nIt has superior, comfortable, elegant, clean and fully-air conditioned rooms with flat screen cable television and hot-and cold water shower rooms where some rooms have private balcony, with spectacular view of the pool area. All rooms are at affordable rates.\r\n<br><br>\r\nTo provide an ideal venue for conferences, training, seminars, and assessment meetings, the Empress hall equipped with an LCD projector, a state-of-the art audio visual equipment and Wi-fi internet access which can accommodate 100-200 persons, is ready to serve. It has also Duchess hall, an open air hall beside the pool fully equipped with audio-visual facilities and wireless internet connection which can house comfortably 50-100 persons.\r\nbyGideon C. Corgue\r\n<br><br><br>\r\n\r\nHOTEL FEATURES<br>\r\n&#9829; Banquet services, wedding packages & conference facilities<br>\r\n&#9829; Outdoor Adult and Kiddy pools<br>\r\n&#9829; Coffee Shop<br>\r\n&#9829; Bar and Restaurant<br>\r\n&#9829; high-speed Internet access in all guestrooms, meeting facilities, and in all public areas<br>\r\n&#9829; Airport Transfers<br>\r\n&#9829; Laundry and Pressing Services<br>\r\n&#9829; 24 hour Room service<br>\r\n&#9829; Body massage<br>\r\n&#9829; Daily housekeeping service<br>\r\n&#9829; Security Surveillance cameras<br>\r\n&#9829; 24-hour standby generator<br>\r\n&#9829; PABX telephone system<br>');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (1,'Telephone Number: <br>(062) 214-4157 or (062) 308-1022<br>\r\nEmail:<br>admin@fourqueensresort.com<br>\r\nAddress: <br>Rizal Avenue, Tuburan District, Pagadian City,\r\nZamboanga del Sur, Philippines																				');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookings` (
  `bookid` int(5) NOT NULL AUTO_INCREMENT,
  `hotelid` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `numroom` int(3) NOT NULL,
  `numguest` int(3) NOT NULL,
  `type` varchar(20) NOT NULL,
  `arrdate` varchar(10) NOT NULL,
  `depdate` varchar(10) NOT NULL,
  `bill` int(6) NOT NULL,
  `invoice` int(6) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (2,1,'A','P','ap@gmail.com',914516513,1,2,'premium','2019-11-29','2019-12-05',0,0),(4,1,'Atyu','Plkjh','ap@gmail.com',914516513,1,2,'standard','2019-11-29','2019-12-05',0,0),(5,1,'Arindam','Paul','ap@gmail.com',918975422,1,2,'standard','2019-11-29','2019-12-05',0,0),(50,1,'','','',91,0,0,'0','','',5320,8000),(51,1,'qqsqw','','qwqw@gmail',9174557,0,0,'0','','',5320,2614),(52,2,'arin','Paul','qwqw@gmail',9174557,2,0,'0','2021-02-08','2021-02-19',4250,3505),(53,1,'Arindam','axa','ap@gmail.com',2147483647,1,0,'1596','2021-03-04','2021-03-14',6916,7754);
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (13,'roo19.jpg'),(14,'room1.jpg'),(15,'room2.jpg'),(16,'room3.jpg'),(17,'room4.jpg'),(18,'room5.jpg'),(19,'room6.jpg'),(20,'room7.jpg'),(21,'room8.jpg'),(22,'room9.jpg'),(23,'room10.jpg'),(24,'room10.jpg'),(25,'room11.jpg'),(26,'room12.jpg'),(27,'room13.jpg'),(28,'room15.jpg'),(29,'room17.jpg'),(30,'room18.jpg'),(31,'room20.jpg'),(32,'room21.jpg'),(33,'room22.jpg'),(34,'room23.jpg'),(35,'room24.jpg');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotels` (
  `hotelid` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `description` varchar(700) NOT NULL,
  `rating` float NOT NULL,
  `icon` varchar(30) NOT NULL,
  `img1` varchar(30) NOT NULL,
  `img2` varchar(30) NOT NULL,
  `rate` int(5) NOT NULL,
  PRIMARY KEY (`hotelid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` VALUES (1,'Cape Grace','Malleswaram','bangalore',456423131,'The Cape Grace hotel has easy access to many of the city’s top attractions, including the Casino, Museums, and Sport centers etc. Cozy guest rooms with panoramic views allow you to unwind, and an indoor pool and sauna ensure that your stay is filled with ease.',4.2,'\\hotelBooking\\img\\icon\\4.jpg','\\hotelBooking\\img\\img1\\4.jpg','',5320),(2,'Coast Hotels','Koramangala','bangalore',456423131,'Coast Hotels puts you close to plenty of prominent nearby attractions including the Olympia Conference Centre, Hyde Park, Knightsbridge and Kensington\'s thriving high street and business district. Inviting, modern and cozy!',3.9,'\\hotelBooking\\img\\icon\\1.jpg','\\hotelBooking\\img\\img1\\1.jpg','',4250),(3,'Eagles Watch Resort','Hebbal','bangalore',456423131,'Eagles Watch Resort is famous for its rare and gorgeous cloud forest and friendly community. The views of the Gulf of Nicoya from the hotel\'s 4,200 foot elevation are spectacular. Experience Hotel Fonda Vela\'s natural approach to life with style!',3.5,'\\hotelBooking\\img\\icon\\3.jpg','\\hotelBooking\\img\\img1\\3.jpg','',2542),(4,'Candlewood Suites','Jayanagar','bangalore',456423131,'Candlewood Suites is conveniently situated away from congestion and crowds, we provide you with a refreshing opportunity to experience choices and flexibility like never before. Complimentary high-speed Internet is available throughout our hotel, along with a 24-hour fitness center.',4.8,'\\hotelBooking\\img\\icon\\5.jpg','\\hotelBooking\\img\\img1\\5.jpg','',5670),(5,'Hilltop Heaven Resort','Banashankari','bangalore',456423131,'Hilltop Heaven Resort offers ultimate comfort and luxury. This 4-storied hotel is a beautiful combination of traditional grandeur and modern facilities. The 255 exclusive guest rooms are furnished with a range of modern amenities such as television and internet access.',3.2,'\\hotelBooking\\img\\icon\\2.jpg','\\hotelBooking\\img\\img1\\2.jpg','',2450);
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internet_shop`
--

DROP TABLE IF EXISTS `internet_shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internet_shop` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `img` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `room_number` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `img` (`img`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internet_shop`
--

LOCK TABLES `internet_shop` WRITE;
/*!40000 ALTER TABLE `internet_shop` DISABLE KEYS */;
INSERT INTO `internet_shop` VALUES (12,'t_standardDouble.jpg','Standard Double','1 single bed and 1 pull out single bed with own CR, Hot and cold shower, flat screen tv, and fully airconditioned room. ',999,'111'),(13,'t_deluxe.jpg','Deluxe','1 double bed, flat screen tv, hot and cold shower, and fully airconditioned and with own terrace.',1199,'111'),(11,'t_standard.jpg','Standard','Two single beds, fully airconditioned, with flat screen tv, and common CR.',699,'111'),(14,'t_juniorSuite.jpg','Junior Suite','1 queen sized bed, flat screen tv, hot and cold shower, and fully airconditioned, and with own terrace.',1299,'111'),(15,'t_suite.jpg','Suite','1 queen sized bed and 1 single bed, hot and cold shower, flat screen tv, fully airconditioned room, with own mini refrigerator, and with own terrace.',1799,'111'),(16,'t_family.jpg','Family','2 double beds, with flat sCReen tv, fully airconditioned room and with hot and cold shower.',2299,'111'),(17,'t_superiorFamily.jpg','Superior Family','2 queen sized beds, with flat screen tv, fully airconditioned room, and with hot and cold shower.',2499,'111'),(18,'t_dormitory.jpg','Dormitory Type','Double deck beds that will occupy maximum of 32/42 persons and a minimum of 15 persons. Rooms are fully airconditioned, and with common CR.',4485,'111');
/*!40000 ALTER TABLE `internet_shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (1,'iuyyuyuyu','yuyuyuyu','yuyuyuyu','yuyuyuyu'),(2,'jkjjk','jkjkjk','jkjkjkjk','kjkjkjkj'),(3,'errer','dsdsds@sdsds.com','kkjkjkjk','kjkjkjkjkjkj');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `result` int(11) NOT NULL,
  `payable` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (4,'jkj','kjkjkjk','kjkjkj','jkjkjkj','kjkjkjk','email',0,'12/12/2012','13/12/2012',1,211212,'Cancel','jfvby8kv'),(3,'argie','policar[io','bacolod','talisay','philippines','email',909090909,'03/12/2012','09/12/2012',6,2248,'Cancel','sw8jx83n'),(5,'','','','','','email',0,'26/12/2012','27/12/2012',1,0,'active','sz3w0cmq'),(6,'hghg','hghghg','gh','hghgh','ghgh','email',0,'26/12/2012','27/12/2012',1,2498,'active','720c36aa'),(7,'tytyt','ytytyt','ytytyt','ytytyt','ytytyt','email',0,'17/12/2012','19/12/2012',2,7283,'active','qie3thni');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooinventory`
--

DROP TABLE IF EXISTS `rooinventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooinventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `confirmation` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooinventory`
--

LOCK TABLES `rooinventory` WRITE;
/*!40000 ALTER TABLE `rooinventory` DISABLE KEYS */;
INSERT INTO `rooinventory` VALUES (1,11,1,'26/12/2012','27/12/2012','active','720c36aa'),(2,15,1,'26/12/2012','27/12/2012','active','720c36aa'),(3,15,1,'17/12/2012','19/12/2012','active','qie3thni'),(4,12,1,'17/12/2012','19/12/2012','active','qie3thni'),(5,18,1,'17/12/2012','19/12/2012','active','qie3thni');
/*!40000 ALTER TABLE `rooinventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slideshow`
--

LOCK TABLES `slideshow` WRITE;
/*!40000 ALTER TABLE `slideshow` DISABLE KEYS */;
INSERT INTO `slideshow` VALUES (9,'room11.jpg'),(10,'room3.jpg'),(11,'room18.jpg'),(12,'room23.jpg'),(13,'room22.jpg'),(14,'room21.jpg');
/*!40000 ALTER TABLE `slideshow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` int(20) NOT NULL,
  `phone` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Arindam','Paul','ap@gmail.com',1234,498654823),(2,'A','P','gjg@gmail.com',45312,456845616),(3,'ro','d','rode@gmail.com',8523,2147483647),(4,'dox','axa','rode@gmail.com',0,9174557);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-02 12:25:16
