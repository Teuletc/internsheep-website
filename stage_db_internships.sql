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
-- Table structure for table `internships`
--

DROP TABLE IF EXISTS `internships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `internships` (
  `id` int NOT NULL AUTO_INCREMENT,
  `offer_internships` varchar(128) NOT NULL,
  `date_internships` timestamp NOT NULL,
  `duration_internships` varchar(32) NOT NULL,
  `nbr_students_places` int DEFAULT NULL,
  `remuneration` varchar(32) NOT NULL,
  `additional_info` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `companies_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_stage_entreprise1_idx` (`companies_id`),
  CONSTRAINT `fk_stage_entreprise1` FOREIGN KEY (`companies_id`) REFERENCES `companies` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internships`
--

LOCK TABLES `internships` WRITE;
/*!40000 ALTER TABLE `internships` DISABLE KEYS */;
INSERT INTO `internships` VALUES (1,'Stage- Ingénieur cybersécurité F/H','2024-03-18 23:00:00','1 week',35,'7',NULL,'2023-03-22 21:27:47','2023-03-22 21:27:47',NULL,6),(2,'STAGE INGENIEUR INFORMATIQUE CONCEPTION ET DEVELOPPEMENT FULL-STACK','2024-07-31 22:00:00','15 week',35,'7',NULL,'2023-03-22 21:29:23','2023-03-22 21:29:23',NULL,1),(3,'Stage Ingenieur Developpeur - Outil d Automatisation H/F','2023-03-31 22:00:00','6 month',1,'9',NULL,'2023-03-22 21:31:48','2023-03-22 21:31:48',NULL,2),(4,'STAGE INGENIEUR INFORMATIQUE DECISIONNELLE ET ANALYSE POWER-BI','2023-12-14 23:00:00','2 month',5,'4.05',NULL,'2023-03-22 21:32:58','2023-03-22 21:32:58',NULL,3),(5,'Stage Ingénieur-e Réalité virtuelle/Réalité augmentée F/H','2023-12-31 23:00:00','1 years',16,'5',NULL,'2023-03-22 21:35:20','2023-03-22 21:35:20',NULL,4),(6,'Stage Ingenieur Developpeur - Outil E-Netconf H/F','2025-10-09 22:00:00','10 month',5,'8',NULL,'2023-03-22 21:38:15','2023-03-22 21:38:15',NULL,5),(7,'Stage Ingénieur Virtualisation Multi Aircraft H/F','2025-07-12 22:00:00','12 weeks',0,'12',NULL,'2023-03-22 21:45:31','2023-03-22 21:45:31',NULL,7),(8,'Stage - Ingénieur informaticien Open Source Java/Web - H/F','2024-09-19 22:00:00','20 weeks',5,'14',NULL,'2023-03-22 21:46:18','2023-03-22 21:46:18',NULL,8),(9,'stage ingénieur java full stack h/f','2026-01-14 23:00:00','2 years',37,'11',NULL,'2023-03-22 21:47:05','2023-03-22 21:47:05',NULL,9),(10,'Stage Ingenieur Ivvq Mission Telecom H/F','2023-07-09 22:00:00','5 weeks',12,'20',NULL,'2023-03-22 21:49:24','2023-03-22 21:49:24',NULL,10),(11,'Front-end developer - Alternance Toulouse','2012-06-22 22:00:00','3 years',NULL,'10',NULL,'2023-03-28 17:05:16','2023-03-28 17:05:16',NULL,NULL);
/*!40000 ALTER TABLE `internships` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-30 21:27:48
