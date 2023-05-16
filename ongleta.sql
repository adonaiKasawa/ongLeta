-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: ongleta
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.1

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
-- Table structure for table `agriculture`
--

DROP TABLE IF EXISTS `agriculture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agriculture` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT NULL,
  `produit` varchar(255) DEFAULT NULL,
  `date_recolte` datetime DEFAULT NULL,
  `photo_agriculture` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agriculture`
--

LOCK TABLES `agriculture` WRITE;
/*!40000 ALTER TABLE `agriculture` DISABLE KEYS */;
INSERT INTO `agriculture` VALUES (1,NULL,'poisson | 50$',NULL,'ONG/IMG_7769.jpg'),(2,NULL,'Poisson | 100$',NULL,'ONG/IMG_7776.jpg'),(3,NULL,'Poisson | 150$',NULL,'ONG/IMG_7786.jpg'),(4,NULL,'Obergine| 15$/kg',NULL,'ONG/IMG_7837.jpg'),(5,NULL,'Obergine| 10$/kg',NULL,'ONG/IMG_7838.jpg'),(6,NULL,'cochon | 250$',NULL,'ONG/IMG_7811.jpg');
/*!40000 ALTER TABLE `agriculture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ecoles`
--

DROP TABLE IF EXISTS `ecoles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ecoles` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT NULL COMMENT 'Create Time',
  `nom_ecoles` varchar(255) DEFAULT NULL,
  `observation_ecoles` text,
  `groupe_ecole` varchar(255) DEFAULT NULL,
  `photo_ecole` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ecoles`
--

LOCK TABLES `ecoles` WRITE;
/*!40000 ALTER TABLE `ecoles` DISABLE KEYS */;
INSERT INTO `ecoles` VALUES (1,'2023-05-09 16:15:02','kwetima','nous avons vu les enfant dans une situattion comme tout autres enfants avec leurs parent biologique!','kwtima_1','12-.webp'),(2,'2023-05-09 16:15:02','kwetima','nous avons vu les enfant dans une situattion comme tout autres enfants avec leurs parent biologique!','kwtima_1','13-.jpg');
/*!40000 ALTER TABLE `ecoles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ministere`
--

DROP TABLE IF EXISTS `ministere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ministere` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ministere`
--

LOCK TABLES `ministere` WRITE;
/*!40000 ALTER TABLE `ministere` DISABLE KEYS */;
/*!40000 ALTER TABLE `ministere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revenue`
--

DROP TABLE IF EXISTS `revenue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `revenue` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT NULL COMMENT 'Create Time',
  `nom_article` varchar(255) DEFAULT NULL,
  `photo_article` varchar(255) DEFAULT NULL,
  `prix_article` int DEFAULT NULL,
  `categorie_article` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revenue`
--

LOCK TABLES `revenue` WRITE;
/*!40000 ALTER TABLE `revenue` DISABLE KEYS */;
INSERT INTO `revenue` VALUES (1,NULL,'voiture lamborgini','24.jpeg',250000,'voiture'),(2,NULL,'voiture lamborgini','25.webp',40000,'voiture'),(3,NULL,'voiture de famille','27.webp',10000,'voiture'),(4,NULL,'t-shirt','product-8.jpg',50,'habillement'),(5,NULL,'pomade','28.jpg',30,'prod_cosmetique');
/*!40000 ALTER TABLE `revenue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sociales`
--

DROP TABLE IF EXISTS `sociales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sociales` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `type_sociale` varchar(255) DEFAULT NULL,
  `photo_sociale` blob,
  `date_sociale` datetime DEFAULT NULL,
  `description_sociale` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sociales`
--

LOCK TABLES `sociales` WRITE;
/*!40000 ALTER TABLE `sociales` DISABLE KEYS */;
INSERT INTO `sociales` VALUES (1,'filles_mere',_binary '19-.jpg','2023-05-01 08:02:12','Eternity Bands Do Last Forever '),(2,'handicapes',_binary '15.jpg','2023-05-01 08:02:12','What Curling Irons Are The Best Ones'),(3,'veuf',_binary '1.jpeg','2023-03-28 00:00:00','lkvkldlkslskll');
/*!40000 ALTER TABLE `sociales` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-16 11:37:09
