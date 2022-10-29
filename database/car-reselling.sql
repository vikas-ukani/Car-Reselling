-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: car-reselling
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `car_resells`
--

DROP TABLE IF EXISTS `car_resells`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_resells` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Car name',
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Normal Car' COMMENT 'Car Type',
  `price` double(8,2) NOT NULL COMMENT 'Car Price',
  `top_speed` int NOT NULL COMMENT 'Car Top Speed',
  `user_id` bigint DEFAULT NULL COMMENT 'Car Belongs to user.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_resells`
--

LOCK TABLES `car_resells` WRITE;
/*!40000 ALTER TABLE `car_resells` DISABLE KEYS */;
INSERT INTO `car_resells` VALUES (1,'Normal Car Name','Normal Car',10000.00,100,1,'2022-10-29 01:28:59','2022-10-29 01:28:59'),(2,'Luxury Car Name','Luxury Car',20000.00,200,1,'2022-10-29 01:28:59','2022-10-29 01:28:59'),(3,'Sports Car Name','Sports Car',30000.00,300,1,'2022-10-29 01:28:59','2022-10-29 01:28:59'),(4,'Sports Car Name 2','Sports Car',40000.00,400,1,'2022-10-29 01:28:59','2022-10-29 01:28:59'),(5,'Normal Name 2','Normal Car',400.00,40,1,'2022-10-29 01:28:59','2022-10-29 01:28:59'),(6,'Luxury Name 2','Luxury Car',200.00,299,1,'2022-10-29 01:28:59','2022-10-29 01:28:59'),(7,'Stewart Alford','Normal Car',951.00,222,2,'2022-10-29 02:22:52','2022-10-29 02:57:29'),(8,'Keelie Houston','Sports Car',506.00,444,2,'2022-10-29 02:23:05','2022-10-29 02:23:05'),(9,'Xerxes Townsend','Luxury Car',763.00,333,2,'2022-10-29 02:23:17','2022-10-29 02:56:59'),(10,'Marsden Wilkins','Normal Car',847.00,2,1,'2022-10-29 03:38:37','2022-10-29 03:38:37'),(11,'Zahir Kinney','Normal Car',91.00,73,1,'2022-10-29 03:43:28','2022-10-29 03:43:28'),(12,'Some','Normal Car',20.00,20,1,'2022-10-29 03:46:15','2022-10-29 03:46:15'),(13,'Rose Conrad','Normal Car',470.00,40,1,'2022-10-29 03:48:31','2022-10-29 03:48:31'),(14,'Kylie Peterson','Normal Car',874.00,31,1,'2022-10-29 04:01:03','2022-10-29 04:01:03');
/*!40000 ALTER TABLE `car_resells` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-29 15:12:20
