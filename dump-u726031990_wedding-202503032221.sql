-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: u726031990_wedding
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
  `id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `attendance` enum('Hadir','Tidak Hadir','Belum Pasti') DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,0,'Adam Marulyanto','Selamat atas acara ini! Semoga sukses.','Hadir','2025-02-28 10:00:00'),(2,0,'Nadhiratul Auliyah','Maaf, saya tidak bisa hadir. Semoga lancar!','Tidak Hadir','2025-02-28 10:05:00'),(3,0,'Budi Santoso','Saya akan mencoba hadir jika tidak ada halangan.','Belum Pasti','2025-02-28 10:10:00'),(4,0,'Siti Aisyah','Insya Allah saya akan hadir, tidak sabar bertemu semua!','Hadir','2025-02-28 10:15:00'),(5,0,'Rizky Fauzan','Mohon maaf, saya berhalangan hadir. Semoga acaranya meriah!','Tidak Hadir','2025-02-28 10:20:00'),(6,0,'Dewi Kartika','Saya pasti hadir! Tidak sabar untuk acara ini.','Hadir','2025-02-28 10:25:00'),(7,0,'Andi Wijaya','Belum bisa memastikan, tapi semoga bisa hadir.','Belum Pasti','2025-02-28 10:30:00'),(8,0,'asdas','asdasd','Hadir','2025-02-28 05:21:19'),(9,0,'bbbbbbbbbbb','asdasd','Hadir','2025-02-28 05:21:38'),(10,0,'asdas','asdas','Hadir','0000-00-00 00:00:00'),(11,0,'asdasd','asdas','Hadir','2025-02-28 11:23:37'),(12,0,'asdas','asdasd','Hadir','2025-02-28 11:23:45'),(13,0,'asdasdas','asdasd','Hadir','2025-02-28 12:52:18'),(14,0,'Adam','asdasdas','Hadir','2025-02-28 12:52:29'),(15,0,'asdasdas','asdasd','Hadir','2025-02-28 12:59:19'),(16,0,'asdads','asdasd','Hadir','2025-02-28 12:59:22'),(17,0,'Adamm','asdads','Belum Pasti','2025-03-02 13:15:24'),(18,0,'ADammmmm','asd12easd21qasd12','Tidak Hadir','2025-03-02 19:35:59'),(19,0,'Marul','asldhadklshjasdkljashdlkj\r\nalsdkjaklsasd\r\nalskdjadklsjkasd\r\naklsdjsklasd','Hadir','2025-03-02 19:36:10'),(20,9,'adasdasd','asdasdas','Hadir','2025-03-02 21:41:44'),(21,1,'adam','asdasd','Hadir','2025-03-02 21:47:35'),(22,3,'ASdadsasd','asdasdasd','Hadir','2025-03-02 21:47:55'),(23,3,'John Doe','asdasdasd','Hadir','2025-03-02 21:51:10'),(24,3,'John Doe','sadasdasdasdasdasd asd asdasd asd as das dasd asdasdas asdasdasd asdasdasd asdasdasd as','Hadir','2025-03-02 23:07:06'),(25,1,'Adam & Aul','Ah bisa aja lu John','Hadir','2025-03-02 23:10:57'),(26,2,'Nadhiratul Auliyah asdasda','Iya bisa aja dia','Hadir','2025-03-02 23:11:30'),(27,2,'Yudha','Selamat yudha!','Hadir','2025-03-03 22:06:42');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `wa` varchar(20) DEFAULT NULL,
  `ig` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Adam','088809329788','adamarulyanto','2025-03-02 23:26:11'),(2,'Yudha','0895320881516','yuda_prtama','2025-03-02 23:26:11'),(3,'Rafky',NULL,'kyfarhann','2025-03-02 23:26:11'),(4,'Adam','088809329788','adamarulyanto','2025-03-03 15:10:27'),(5,'Yudha','0895320881516','yuda_prtama','2025-03-03 15:10:27'),(6,'Rafky',NULL,'kyfarhann','2025-03-03 15:10:27'),(7,'Adam','088809329788','adamarulyanto','2025-03-03 15:11:29'),(8,'Yudha','0895320881516','yuda_prtama','2025-03-03 15:11:29'),(9,'Rafky',NULL,'kyfarhann','2025-03-03 15:11:29'),(NULL,'Adam','088809329788','adamarulyanto','2025-03-03 15:20:49'),(NULL,'Yudha','0895320881516','yuda_prtama','2025-03-03 15:20:49'),(NULL,'Rafky',NULL,'kyfarhann','2025-03-03 15:20:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'u726031990_wedding'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-03 22:21:35
