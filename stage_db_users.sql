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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usersname` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `email` varchar(80) NOT NULL,
  `motivation_letter` varchar(64) DEFAULT NULL,
  `cv` varchar(64) DEFAULT NULL,
  `logo` varchar(64) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `roles_id` int NOT NULL,
  `addresses_id` int NOT NULL,
  `companies_rate_id` int DEFAULT NULL,
  `schools_id` int DEFAULT NULL,
  `promotions_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_users_roles1_idx` (`roles_id`),
  KEY `fk_users_adresses1_idx` (`addresses_id`),
  KEY `fk_users_companies_rate1_idx` (`companies_rate_id`),
  KEY `fk_users_schools1_idx` (`schools_id`),
  KEY `fk_users_promotions1_idx` (`promotions_id`),
  CONSTRAINT `fk_users_adresses1` FOREIGN KEY (`addresses_id`) REFERENCES `addresses` (`id`),
  CONSTRAINT `fk_users_companies_rate1` FOREIGN KEY (`companies_rate_id`) REFERENCES `companiesrates` (`id`),
  CONSTRAINT `fk_users_promotions1` FOREIGN KEY (`promotions_id`) REFERENCES `promotions` (`id`),
  CONSTRAINT `fk_users_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `fk_users_schools1` FOREIGN KEY (`schools_id`) REFERENCES `schools` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'CHADESM','Cachou2003','Chades','Martin','Martin.chades@viacesi.fr',NULL,NULL,NULL,'2023-03-22 23:11:38','2023-03-22 23:11:38',NULL,2,11,1,6,2),(2,'GORDALE','alexgord','Gordien','Alexis','Alexis.gordien@viacesi.fr',NULL,NULL,NULL,'2023-03-22 23:13:27','2023-03-22 23:14:44',NULL,2,12,2,10,2),(3,'JAAFGOUTH','jimmy','Darghouth','Jaafar','Jaafar.darghouth@viacesi.fr',NULL,NULL,NULL,'2023-03-22 23:16:19','2023-03-22 23:16:19',NULL,2,13,3,25,2),(4,'Username','mdp','Teulet','Corentin','Corentin.teulet@viacesi.fr',NULL,NULL,NULL,'2023-03-22 23:17:16','2023-03-22 23:17:16',NULL,2,14,4,8,2),(5,'ADMIN','MDPADMIN','Olivier','Mougin','Olivier.mougin@cesi.fr',NULL,NULL,NULL,'2023-03-22 23:25:03','2023-03-22 23:25:03',NULL,3,15,NULL,NULL,NULL),(7,'lEAU','PIEWW','LHOmme','Pierre','Pierre.LHomme@viacesi.fr',NULL,NULL,NULL,'2023-03-22 23:30:29','2023-03-22 23:33:10',NULL,2,17,5,25,3),(8,'DAMSO','ROSS','Rossi','Damien','Damien.Rossi@viacesi.fr',NULL,NULL,NULL,'2023-03-22 23:33:41','2023-03-22 23:33:41',NULL,2,18,6,17,4),(9,'Pagnure','sophico','Pagnucco','Sophie','Sophie.Pagnucco@viacesi.fr',NULL,NULL,NULL,'2023-03-22 23:34:53','2023-03-22 23:34:53',NULL,2,19,7,23,2),(11,'ALAUMOND','password123','LAUMOND','ANTOINE','alaumond@viacesi.fr',NULL,NULL,NULL,'2023-03-29 00:36:45','2023-03-29 00:36:45',NULL,1,11,NULL,25,2),(12,'john.doe','password123','Doe','John','john.doe@example.com',NULL,NULL,NULL,'2023-03-29 00:41:13','2023-03-29 00:41:13',NULL,2,1,NULL,1,1),(13,'jane.doe','password456','Doe','Jane','jane.doe@example.com',NULL,NULL,NULL,'2023-03-29 00:41:24','2023-03-29 00:41:24',NULL,2,2,NULL,2,2),(14,'bob.smith','password789','Smith','Bob','bob.smith@example.com',NULL,NULL,NULL,'2023-03-29 00:42:40','2023-03-29 00:42:40',NULL,3,3,NULL,3,1),(15,'sarah.johnson','password321','Johnson','Sarah','sarah.johnson@example.com',NULL,NULL,NULL,'2023-03-29 00:42:40','2023-03-29 00:42:40',NULL,3,4,NULL,2,3);
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

-- Dump completed on 2023-03-30 21:27:49
