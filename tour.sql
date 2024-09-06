-- MySQL dump 10.13  Distrib 8.2.0, for Linux (x86_64)
--
-- Host: localhost    Database: tour
-- ------------------------------------------------------
-- Server version	8.2.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `__EFMigrationsHistory`
--

DROP TABLE IF EXISTS `__EFMigrationsHistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `__EFMigrationsHistory` (
  `migration_id` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_version` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`migration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `__EFMigrationsHistory`
--

LOCK TABLES `__EFMigrationsHistory` WRITE;
/*!40000 ALTER TABLE `__EFMigrationsHistory` DISABLE KEYS */;
INSERT INTO `__EFMigrationsHistory` VALUES ('20240905160438_init','7.0.2');
/*!40000 ALTER TABLE `__EFMigrationsHistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking_service`
--

DROP TABLE IF EXISTS `booking_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `service_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_booking_service_booking_id` (`booking_id`),
  KEY `ix_booking_service_service_id` (`service_id`),
  CONSTRAINT `fk_booking_service_bookings_booking_id` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_booking_service_services_service_id` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking_service`
--

LOCK TABLES `booking_service` WRITE;
/*!40000 ALTER TABLE `booking_service` DISABLE KEYS */;
INSERT INTO `booking_service` VALUES (11,13,-3),(12,13,-2),(13,13,-1);
/*!40000 ALTER TABLE `booking_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `orders_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `number_of_visitor` int NOT NULL,
  `booking_date` datetime(6) NOT NULL,
  `duration` int NOT NULL,
  `user_id` int NOT NULL,
  `tour_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_bookings_tour_id` (`tour_id`),
  KEY `ix_bookings_user_id` (`user_id`),
  CONSTRAINT `fk_bookings_tours_tour_id` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_bookings_users_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (13,'Rama',2,'2024-09-06 00:00:00.000000',2,-1,-5);
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `tour_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_images_tour_id` (`tour_id`),
  CONSTRAINT `fk_images_tours_tour_id` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (-6,'https://images.unsplash.com/photo-1642869647610-65eb585168c1','Gunung Semeru',-4),(-5,'https://images.unsplash.com/photo-1655138499775-21176ee8dc2c','Gunung Rinjani',-3),(-4,'https://images.unsplash.com/photo-1639833723487-5bef3e1b5904','Pantai Kuta',-2),(-3,'https://images.pexels.com/photos/413958/pexels-photo-413958.jpeg','Pantai Kuta',-2),(-2,'https://images.pexels.com/photos/7361776/pexels-photo-7361776.jpeg','Monas',-5),(-1,'https://images.pexels.com/photos/2310754/pexels-photo-2310754.jpeg','Kota Tua',-1);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (-4,'Malang','Kota Dingin yang Menawan, Alam dan Wisata Edukasi yang Memikat',0,0),(-3,'Lombok','Keindahan yang Tersembunyi, Pulau Seribu Masjid',0,0),(-2,'Bali','Pulau Dewata, Surga Tropis yang Memikat Hati',0,0),(-1,'Jakarta','Ibukota yang Dinamis, Tempat Sejarah Bertemu dengan Modernitas',0,0);
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (-3,'Makanan','','',500000),(-2,'Penginapan','','',1000000),(-1,'Transportasi','','',1200000);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tour_type`
--

DROP TABLE IF EXISTS `tour_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tour_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tour_id` int NOT NULL,
  `type_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tour_types_tour_id` (`tour_id`),
  KEY `ix_tour_types_type_id` (`type_id`),
  CONSTRAINT `fk_tour_types_tours_tour_id` FOREIGN KEY (`tour_id`) REFERENCES `tours` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_tour_types_types_type_id` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour_type`
--

LOCK TABLES `tour_type` WRITE;
/*!40000 ALTER TABLE `tour_type` DISABLE KEYS */;
INSERT INTO `tour_type` VALUES (-5,-5,-6),(-4,-4,-3),(-3,-3,-3),(-2,-2,-1),(-1,-1,-6);
/*!40000 ALTER TABLE `tour_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tours`
--

DROP TABLE IF EXISTS `tours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `location_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ix_tours_location_id` (`location_id`),
  CONSTRAINT `fk_tours_locations_location_id` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tours`
--

LOCK TABLES `tours` WRITE;
/*!40000 ALTER TABLE `tours` DISABLE KEYS */;
INSERT INTO `tours` VALUES (-5,'Monas','Monumen Nasional (Monas) adalah simbol kebanggaan Indonesia yang menjulang tinggi di jantung Jakarta. Dengan puncak berlapis emas, Monas menawarkan pemandangan kota Jakarta yang menakjubkan dari dek observasi. Di dalamnya, terdapat museum yang menceritakan perjuangan bangsa Indonesia untuk meraih kemerdekaan. Taman yang luas di sekitarnya menjadi tempat yang ideal untuk bersantai dan menikmati suasana kota. Monas adalah destinasi wajib bagi siapa pun yang ingin merasakan semangat nasionalisme dan keindahan sejarah Indonesia.',1000000,-1),(-4,'Gunung Semeru','Gunung Semeru, puncak tertinggi di Pulau Jawa, adalah surga bagi para pendaki dan pencinta alam. Dengan trek yang menantang menuju puncak Mahameru, pendaki akan disuguhi pemandangan luar biasa dari Ranu Kumbolo, danau tenang di tengah pegunungan. Asap vulkanik yang keluar dari puncak menambah keajaiban alam Semeru. Setiap langkah di Gunung Semeru adalah pengalaman mendalam yang menghubungkan diri dengan alam, menjadikannya destinasi impian bagi mereka yang mencari petualangan sejati.',2300000,-4),(-3,'Gunung Rinjani','Gunung Rinjani, puncak tertinggi kedua di Indonesia, menawarkan petualangan mendaki yang menantang dengan pemandangan alam yang luar biasa. Dari kawah Danau Segara Anak yang mempesona hingga mata air panas alami di sekitarnya, setiap langkah di Gunung Rinjani adalah pengalaman yang memukau. Pendakian ini bukan hanya tentang mencapai puncak, tetapi juga menikmati keindahan alam Lombok yang luar biasa. Bagi para pecinta alam dan petualangan, Gunung Rinjani adalah destinasi yang wajib dijelajahi.',3100000,-3),(-2,'Pantai Kuta','Pantai Kuta Bali, dengan pasir putihnya yang luas dan ombaknya yang sempurna untuk berselancar, adalah destinasi ikonik yang wajib dikunjungi. Menikmati matahari terbenam yang menakjubkan sambil bersantai di tepi pantai adalah pengalaman tak terlupakan. Di sepanjang pantai, Anda juga bisa menemukan berbagai restoran, bar, dan toko yang menawarkan suasana yang hidup dan penuh energi. Pantai Kuta adalah tempat yang ideal untuk menikmati keindahan alam Bali sambil merasakan kehidupan pantai yang dinamis.',4000000,-2),(-1,'Kota Tua','Kota Tua Jakarta, dikenal juga sebagai Batavia Lama, adalah jantung sejarah Jakarta. Dengan bangunan kolonial Belanda yang megah, museum-museum yang kaya akan sejarah, dan suasana klasik yang memikat, tempat ini menjadi destinasi yang sempurna untuk mengenal lebih dalam sejarah dan budaya Jakarta. Jangan lewatkan untuk berkunjung ke Museum Fatahillah, Pelabuhan Sunda Kelapa, dan menikmati kuliner khas di sekitar alun-alun. Kota Tua Jakarta adalah perpaduan sempurna antara masa lalu dan masa kini, yang wajib dikunjungi!',3000000,-1);
/*!40000 ALTER TABLE `tours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `image_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (-6,'Kota','Jelajahi Hiruk Pikuk dan Keindahan Tersembunyi','https://images.pexels.com/photos/399610/pexels-photo-399610.jpeg'),(-5,'Air Terjun','Rasakan Keajaiban Alam di Setiap Tetesan','https://images.pexels.com/photos/949194/pexels-photo-949194.jpeg'),(-4,'Hutan','Masuki Kedalaman Alam dan Temukan Ketenangan','https://images.pexels.com/photos/38136/pexels-photo-38136.jpeg'),(-3,'Pegunungan','Raih Puncak, Rasakan Kebebasan','https://images.pexels.com/photos/618833/pexels-photo-618833.jpeg'),(-2,'Danau','Temukan Kedamaian di Permukaan Air yang Tenang','https://images.pexels.com/photos/210288/pexels-photo-210288.jpeg'),(-1,'Pantai','Nikmati Ketentraman di Bawah Matahari Terbenam','https://images.pexels.com/photos/269583/pexels-photo-269583.jpeg');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password_hash` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ix_users_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (-1,'Customer','customer@gmail.com','customer',1);
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

-- Dump completed on 2024-09-06  7:14:25
