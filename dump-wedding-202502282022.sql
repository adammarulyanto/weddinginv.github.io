-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: wedding
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `attendance` enum('Hadir','Tidak Hadir','Belum Pasti') NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Adam Marulyanto','Selamat atas acara ini! Semoga sukses.','Hadir','2025-02-28 10:00:00'),(2,'Nadhiratul Auliyah','Maaf, saya tidak bisa hadir. Semoga lancar!','Tidak Hadir','2025-02-28 10:05:00'),(3,'Budi Santoso','Saya akan mencoba hadir jika tidak ada halangan.','Belum Pasti','2025-02-28 10:10:00'),(4,'Siti Aisyah','Insya Allah saya akan hadir, tidak sabar bertemu semua!','Hadir','2025-02-28 10:15:00'),(5,'Rizky Fauzan','Mohon maaf, saya berhalangan hadir. Semoga acaranya meriah!','Tidak Hadir','2025-02-28 10:20:00'),(6,'Dewi Kartika','Saya pasti hadir! Tidak sabar untuk acara ini.','Hadir','2025-02-28 10:25:00'),(7,'Andi Wijaya','Belum bisa memastikan, tapi semoga bisa hadir.','Belum Pasti','2025-02-28 10:30:00'),(8,'asdas','asdasd','Hadir','2025-02-28 05:21:19'),(9,'bbbbbbbbbbb','asdasd','Hadir','2025-02-28 05:21:38'),(10,'asdas','asdas','Hadir','0000-00-00 00:00:00'),(11,'asdasd','asdas','Hadir','2025-02-28 11:23:37'),(12,'asdas','asdasd','Hadir','2025-02-28 11:23:45'),(13,'asdasdas','asdasd','Hadir','2025-02-28 12:52:18'),(14,'Adam','asdasdas','Hadir','2025-02-28 12:52:29'),(15,'asdasdas','asdasd','Hadir','2025-02-28 12:59:19'),(16,'asdads','asdasd','Hadir','2025-02-28 12:59:22');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `wa` varchar(20) DEFAULT NULL,
  `ig` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Adam & Aul','081234567890','adam_ig','2025-02-28 09:04:19'),(2,'Nadhiratul Auliyah asdasda','089876543210','nadhira_ig','2025-02-28 09:04:19'),(3,'John Doe','085612345678','johndoe_ig','2025-02-28 09:04:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'wedding'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-28 20:22:31
