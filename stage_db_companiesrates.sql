-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: stage_db
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `companiesrates`
--

DROP TABLE IF EXISTS `companiesrates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `companiesrates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rate` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `companies_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_companies_rate_companies1_idx` (`companies_id`),
  CONSTRAINT `fk_companies_rate_companies1` FOREIGN KEY (`companies_id`) REFERENCES `companies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companiesrates`
--

LOCK TABLES `companiesrates` WRITE;
/*!40000 ALTER TABLE `companiesrates` DISABLE KEYS */;
INSERT INTO `companiesrates` VALUES (1,1,'2023-03-22 21:25:24','2023-03-23 08:44:20',NULL,1),(2,5,'2023-03-22 21:25:32','2023-03-22 21:25:32',NULL,2),(3,7,'2023-03-22 21:25:39','2023-03-22 21:25:39',NULL,3),(4,10,'2023-03-22 21:25:46','2023-03-22 21:25:46',NULL,4),(5,2,'2023-03-22 21:25:54','2023-03-22 21:25:54',NULL,5),(6,8,'2023-03-22 21:26:24','2023-03-22 21:26:24',NULL,6),(7,6,'2023-03-22 21:26:34','2023-03-22 21:26:34',NULL,7),(8,9,'2023-03-22 21:26:41','2023-03-22 21:26:41',NULL,8),(9,4,'2023-03-22 21:26:49','2023-03-23 08:44:47',NULL,9),(10,4,'2023-03-22 21:26:56','2023-03-23 09:19:33',NULL,10);
/*!40000 ALTER TABLE `companiesrates` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-30 21:27:49
