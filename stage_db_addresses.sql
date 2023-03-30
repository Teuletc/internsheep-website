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
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `addresses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `countries` varchar(32) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `zip_code` varchar(16) DEFAULT NULL,
  `name_street` varchar(128) DEFAULT NULL,
  `num_way` varchar(16) DEFAULT NULL,
  `additional_addresses` varchar(32) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `companies_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_addresses_companies1_idx` (`companies_id`),
  CONSTRAINT `fk_addresses_companies1` FOREIGN KEY (`companies_id`) REFERENCES `companies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,'France','Toulouse','31000','Charles de Gaulle ','35','','2023-03-22 22:05:06','2023-03-22 22:05:06',NULL,1),(2,'France','Toulouse','31000','Louis Pasteur ','12','','2023-03-22 22:06:26','2023-03-22 22:06:26',NULL,2),(3,'France','Toulouse','31000','Victor Hugo ','1 bis','','2023-03-22 22:06:55','2023-03-22 22:06:55',NULL,3),(4,'France','Colomier','31770','Jean Jaurès','153','','2023-03-22 22:09:57','2023-03-22 22:09:57',NULL,4),(5,'France','Blagnac','31700','Jean Moulin','5 ter','','2023-03-22 22:11:14','2023-03-22 22:12:03',NULL,5),(6,'France','Blagnac','31700','Léon Gambetta','50','','2023-03-22 22:15:32','2023-03-22 22:15:41',NULL,6),(7,'France','Ramonville-saint-agne','31520','place Marnac','12','','2023-03-22 22:16:40','2023-03-22 22:16:40',NULL,7),(8,'France','Ramonville-saint-agne','31520','Général Leclerc','2','','2023-03-22 22:17:25','2023-03-22 22:17:25',NULL,8),(11,'France','Nanterre','92000','GEORGES CLÉMENCEAU','12','','2023-03-22 22:24:37','2023-03-22 22:24:37',NULL,NULL),(12,'France','Paris','75000','rue du chateau','1','','2023-03-22 22:32:02','2023-03-22 22:32:02',NULL,NULL),(13,'France','Paris','75000','rue de la mairie','9','','2023-03-22 22:32:18','2023-03-22 22:32:18',NULL,NULL),(14,'France','Monferran saves','32490','Allée George Pompidou','9','','2023-03-22 22:34:10','2023-03-22 22:34:10',NULL,NULL),(15,'Tunisie','Tunis','1000','Avenue de la mer','78','','2023-03-22 22:34:42','2023-03-22 22:35:30',NULL,NULL),(16,'Tunisie','Tunis','1000','Rue Kouttab Ouazir','4','','2023-03-22 22:37:16','2023-03-22 22:37:16',NULL,NULL),(17,'France','Strasbourg','67000','Allée Comtes','6 bis','','2023-03-22 22:38:20','2023-03-22 22:38:20',NULL,NULL),(18,'France','Strasbourg','67000','Allée Reuss','167','','2023-03-22 22:38:38','2023-03-22 22:38:38',NULL,NULL),(19,'France','Marseille','13000','Allée de la Robertsau','1','','2023-03-22 22:39:41','2023-03-22 22:39:41',NULL,NULL),(20,'France','Lyon','69000','Quai du Général Sarrail','68','','2023-03-22 22:40:33','2023-03-22 22:40:33',NULL,NULL),(24,'France','Toulouse','31400','Rue Jorge Semprun','5',NULL,'2023-03-28 21:27:12','2023-03-28 21:27:12',NULL,32);
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
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
