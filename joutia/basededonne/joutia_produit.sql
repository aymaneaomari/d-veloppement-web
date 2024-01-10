CREATE DATABASE  IF NOT EXISTS `joutia` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `joutia`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: joutia
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `path` varchar(100) NOT NULL,
  `type` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_fk` (`type`),
  CONSTRAINT `type_fk` FOREIGN KEY (`type`) REFERENCES `typeproduit` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produit`
--

LOCK TABLES `produit` WRITE;
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
INSERT INTO `produit` VALUES (1,'Spring Oversize Bomber Jacket',545.54,'assets/jackets/product1.jpeg',1),(2,'Beige Vintage Jacket',610.25,'assets/jackets/product2.jpeg',1),(3,'Neon Genesis Jacket',450.75,'assets/jackets/product3.jpeg',1),(4,'Tie Dye Puffer Jacket - Green',450.75,'assets/jackets/product4.jpeg',1),(5,'Auspicious Clouds Jacket',660.50,'assets/jackets/product5.jpeg',1),(6,'Patchwork Pockets Sherpa Coat',800.75,'assets/jackets/product6.jpeg',1),(7,'Lemandik Reversible Sherpa Jacket',500.75,'assets/jackets/product7.jpg',1),(8,'Fleece-lined Corduroy Jacket',800.00,'assets/jackets/product8.jpeg',1),(9,'Green vintage',450.75,'assets/jackets/product9.jpg',1),(10,'Green White sweater',300.00,'assets/sweaters/sweater1.png',2),(11,'Red Sweater',300.00,'assets/sweaters/sweater2.png',2),(12,'Brown Sweater',300.00,'assets/sweaters/sweater3.png',2),(13,'Beige Sweater',300.00,'assets/sweaters/sweater4.png',2),(14,'Hunter Sweater',300.00,'assets/sweaters/sweater5.png',2),(15,'Violet Sweater',300.00,'assets/sweaters/sweater6.png',2),(16,'Dark gray Sweater',300.00,'assets/sweaters/sweater7.png',2),(17,'Charcoal Sweater',300.00,'assets/sweaters/sweater8.png',2),(18,'Selery sweater',300.00,'assets/sweaters/sweater9.png',2),(19,'Gray Urban Sweatpant',600.00,'assets/PANTS/pant1.jpg',3),(20,'Cargo Blue Jean',600.00,'assets/PANTS/pant2.png',3),(21,'Black Cargo Pant',600.00,'assets/PANTS/pant3.png',3),(22,'Black Cargo Painted Pant',600.00,'assets/PANTS/pant4.png',3),(23,'Light Blue Cargo Pant',600.00,'assets/PANTS/pant5.png',3),(24,'Black Scratched Jean',600.00,'assets/PANTS/pant6.png',3),(25,'Green Cargo Pant',600.00,'assets/PANTS/pant7.png',3),(26,'Black Jean Pant',600.00,'assets/PANTS/pant8.png',3),(27,'Sea Foam Cargo Pant',600.00,'assets/PANTS/pant9.png',3),(28,'Green Vintage T-Shirt',350.00,'assets/T-SHIRT/ts1.png',4),(29,'Turquois T-Shirt',350.00,'assets/T-SHIRT/ts2.png',4),(30,'Brown Vintage T-Shirt',350.00,'assets/T-SHIRT/ts3.png',4),(40,'White vintage T-Shirt',350.00,'assets/T-SHIRT/ts4.png',4),(50,'Black T-Shirt',350.00,'assets/T-SHIRT/ts5.png',4),(51,'Brown T-Shirt',350.00,'assets/T-SHIRT/ts6.png',4),(52,'White painted T-Shirt',350.00,'assets/T-SHIRT/ts7.png',4),(53,'Black Painted T-Shirt',350.00,'assets/T-SHIRT/ts8.png',4),(54,'Black Gris T-Shirt',350.00,'assets/T-SHIRT/ts9.png',4),(55,'New balance',400.00,'assets/sneackers/1.png',5),(56,'Lacoste sneacker',400.00,'assets/sneackers/2.png',5),(57,'DC sneacker',500.00,'assets/sneackers/3.png',5),(58,'Convers sneacker',300.00,'assets/sneackers/4.png',5),(59,'New balance basket',600.00,'assets/sneackers/5.png',5),(60,'SS scneacker',350.00,'assets/sneackers/6.png',5),(61,'nike yeezy ',800.00,'assets/sneackers/7.png',5),(62,'Air nike jordan ',400.00,'assets/sneackers/8.png',5),(63,'nike basket sneacker',350.00,'assets/sneackers/9.png',5);
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-07 14:14:21
