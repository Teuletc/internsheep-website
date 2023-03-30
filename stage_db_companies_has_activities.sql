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
-- Table structure for table `companies_has_activities`
--

DROP TABLE IF EXISTS `companies_has_activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `companies_has_activities` (
  `companies_id` int NOT NULL,
  `activities_id` int NOT NULL,
  PRIMARY KEY (`companies_id`,`activities_id`),
  KEY `fk_companies_has_activities_activities1_idx` (`activities_id`),
  KEY `fk_companies_has_activities_companies1_idx` (`companies_id`),
  CONSTRAINT `fk_companies_has_activities_activities1` FOREIGN KEY (`activities_id`) REFERENCES `activities` (`id`),
  CONSTRAINT `fk_companies_has_activities_companies1` FOREIGN KEY (`companies_id`) REFERENCES `companies` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies_has_activities`
--

LOCK TABLES `companies_has_activities` WRITE;
/*!40000 ALTER TABLE `companies_has_activities` DISABLE KEYS */;
INSERT INTO `companies_has_activities` VALUES (2,1),(8,1),(31,1),(34,1),(5,2),(8,2),(32,2),(5,3),(9,3),(4,4),(9,4),(33,4),(1,5),(6,5),(9,5),(7,6),(10,6),(6,7),(10,7),(10,8),(1,9),(3,9),(8,9),(10,9),(3,10),(5,10),(10,10);
/*!40000 ALTER TABLE `companies_has_activities` ENABLE KEYS */;
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
