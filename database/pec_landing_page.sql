-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: pec_landing_page
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Infrastructure',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `complaints` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_hospital` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_respond` tinyint(1) NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hospital_complaints` (`id_hospital`),
  CONSTRAINT `id_hospital_complaints` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaints`
--

LOCK TABLES `complaints` WRITE;
/*!40000 ALTER TABLE `complaints` DISABLE KEYS */;
INSERT INTO `complaints` VALUES (1,1,'MUHAMMAD AGUNG MAHARDHIKA','m.agungmahardika12@gmail.com','081373517899','tes','tes',0,NULL,NULL,'2024-05-13 03:50:25','2024-05-13 03:50:25'),(2,1,'MUHAMMAD AGUNG MAHARDHIKA','m.agungmahardika12@gmail.com','081373517899','Judul','pesan',0,NULL,NULL,'2024-05-14 01:52:59','2024-05-14 01:52:59'),(3,1,'MUHAMMAD AGUNG MAHARDHIKA','m.agungmahardika12@gmail.com','081373517899','tes','tes',0,NULL,NULL,'2024-05-14 01:53:45','2024-05-14 01:53:45'),(4,1,'MUHAMMAD AGUNG MAHARDHIKA','m.agungmahardika12@gmail.com','081373517899','tes','tes',0,NULL,NULL,'2024-05-14 01:53:56','2024-05-14 01:53:56'),(5,1,'MUHAMMAD AGUNG MAHARDHIKA','m.agungmahardika12@gmail.com','081373517899','tes','tes',0,NULL,NULL,'2024-05-14 03:54:09','2024-05-14 03:54:09');
/*!40000 ALTER TABLE `complaints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_hospital` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `events_slug_unique` (`slug`),
  KEY `id_hospital_event` (`id_hospital`),
  CONSTRAINT `id_hospital_event` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_of_establishments`
--

DROP TABLE IF EXISTS `history_of_establishments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history_of_establishments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_hospital` bigint unsigned NOT NULL,
  `year` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hospital_history_of_establishment` (`id_hospital`),
  CONSTRAINT `id_hospital_history_of_establishment` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_of_establishments`
--

LOCK TABLES `history_of_establishments` WRITE;
/*!40000 ALTER TABLE `history_of_establishments` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_of_establishments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospitals`
--

DROP TABLE IF EXISTS `hospitals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospitals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `about` text COLLATE utf8mb4_unicode_ci,
  `moto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_profile_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open` time DEFAULT NULL,
  `close` time DEFAULT NULL,
  `root_status` enum('main','branch') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ownership_classification` enum('swasta','negri') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_employe` int NOT NULL DEFAULT '0',
  `year_of_establishment` year DEFAULT NULL,
  `geom_area` geometry DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospitals`
--

LOCK TABLES `hospitals` WRITE;
/*!40000 ALTER TABLE `hospitals` DISABLE KEYS */;
INSERT INTO `hospitals` VALUES (1,'Padang Eye Center','Jl. Pemuda no. 53, Padang, Koto Padang,  West Sumatra, Indonesia','Padang Eye Center adalah rumah sakit khusus mata terbesar di Sumatera Barat dengan akreditasi Paripurna dan memiliki 20 dokter sub spesialis  ','Melayani Sepenuh Hati','logo_default.png','video_default.mp4',NULL,NULL,'main','swasta',150,2008,NULL,'agung_mahardhika',NULL,NULL,NULL);
/*!40000 ALTER TABLE `hospitals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_04_06_104601_create_teams_table',1),(5,'2024_04_26_081945_create_hospitals_table',1),(6,'2024_04_26_085606_create_events_table',1),(7,'2024_04_26_090029_create_services_table',1),(8,'2024_04_26_090509_create_promotions_table',1),(9,'2024_04_26_091856_create_complaints_table',1),(10,'2024_04_26_091857_create_social_accounts_table',1),(11,'2024_04_26_092000_create_testimonials_table',1),(12,'2024_04_26_092213_create_visions_table',1),(13,'2024_04_26_092306_create_missions_table',1),(14,'2024_04_26_092404_create_history_of_establishments_table',1),(15,'2024_04_26_092452_create_news_table',1),(16,'2024_04_26_092859_create_news_images_table',1),(17,'2024_04_26_093101_create_news_paragrafs_table',1),(18,'2024_04_26_093123_create_categories_table',1),(19,'2024_04_26_093805_add_foreign_from_hospitals_to_social_account',1),(20,'2024_04_26_094818_add_foreign_from_hospitals_to_visions',1),(21,'2024_04_26_094926_add_foreign_from_hospitals_to_missions',1),(22,'2024_04_26_095227_add_foreign_from_hospitals_to_history_of_establishments',1),(23,'2024_04_26_095413_add_foreign_from_hospitals_to_news',1),(24,'2024_04_26_095622_add_foreign_from_news_to_news_images',1),(25,'2024_04_26_095802_add_foreign_from_news_to_news_paragrafs',1),(26,'2024_04_26_095840_add_foreign_from_categories_to_news',1),(27,'2024_04_27_082307_add_foreign_from_hospitals_to_testimonials',1),(28,'2024_04_27_085914_add_foreign_from_hospitals_to_events',1),(29,'2024_04_27_090412_add_foreign_from_hospitals_to_services',1),(30,'2024_04_27_090734_add_foreign_from_hospitals_to_promotions',1),(31,'2024_05_06_105001_add_foreign_from_hospitals_to_teams',1),(32,'2024_05_13_092111_add_foreign_from_hospitals_to_complaints',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `missions`
--

DROP TABLE IF EXISTS `missions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `missions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_hospital` bigint unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hospital_mission` (`id_hospital`),
  CONSTRAINT `id_hospital_mission` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `missions`
--

LOCK TABLES `missions` WRITE;
/*!40000 ALTER TABLE `missions` DISABLE KEYS */;
INSERT INTO `missions` VALUES (1,1,'Menyediakan pelayanan mata sub spesialistik yang terpadu',NULL,NULL,NULL,NULL),(2,1,'Menyediakan tenaga medis yang profesional dan kompeten',NULL,NULL,NULL,NULL),(3,1,'Pelayanan yang berorientasi pada kepuasan pasien (Customer Satisfaction)',NULL,NULL,NULL,NULL),(4,1,'Mendorong semangat kebersamaan untuk mencapai tujuan perusahaan',NULL,NULL,NULL,NULL),(5,1,'Menjalin hubungan kerjasama dengan institusi terkait baik nasional maupun internasional',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `missions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_hospital` bigint unsigned NOT NULL,
  `id_category` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('article','post') COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brosur_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_date` date NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`),
  KEY `id_hospital_news` (`id_hospital`),
  KEY `id_category_news` (`id_category`),
  CONSTRAINT `id_category_news` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_hospital_news` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,1,1,'Pemenang Lelang Gedung Padang Eye Center','post','pemenang-lelang-gedung-padang-eye-center','1.jpg','Muhammad Agung Mahardhika','2024-05-14','Pemenang lelang untuk pembangunan gedung Padang Eye Center di jalan Khatib Sulaiman',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_images`
--

DROP TABLE IF EXISTS `news_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_news` bigint unsigned NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_news_news_image` (`id_news`),
  CONSTRAINT `id_news_news_image` FOREIGN KEY (`id_news`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_images`
--

LOCK TABLES `news_images` WRITE;
/*!40000 ALTER TABLE `news_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_paragrafs`
--

DROP TABLE IF EXISTS `news_paragrafs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_paragrafs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_news` bigint unsigned NOT NULL,
  `number` int NOT NULL,
  `source_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_news_news_paragraf` (`id_news`),
  CONSTRAINT `id_news_news_paragraf` FOREIGN KEY (`id_news`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_paragrafs`
--

LOCK TABLES `news_paragrafs` WRITE;
/*!40000 ALTER TABLE `news_paragrafs` DISABLE KEYS */;
INSERT INTO `news_paragrafs` VALUES (1,1,1,'','','Sehubungan dengan pengadaan pelaksanaan lelang Pekerjaan Pembangunan Gedung Rumah Sakit Khusus Mata Padang Eye Center oleh peserta lelang, telah diadakan evaluasi teknis dan biaya dengan hasil terdapat 2 perusahaan yaitu PT.GRAFOS GRAHAPERSADA dengan Alamat Perusahaan Jln.Jenderal Sudirman No. 42 Padang dengan harga penawaran terkoreksi : Rp. 47.124.498.242,- (Empat Puluh Tujuh Milyar Seratus Dua Puluh Empat Juta Empat Ratus Sembilan Puluh Delapan Ribu Dua Ratus Empat Puluh Dua Rupiah). Perusahaan PT. HARAFIEL TRI JAYA dengan alamat perusahaan  Jl.Sentosa Raya Timur Blok B2 No.27A Cikarang Selatan, Bekasi dengan harga penawaran terkoreksi :Rp. 49.387.200.000,- (Empat Puluh Sembilan Milyar Tiga Ratus Delapan puluh Tujuh Juta Dua Ratus Ribu Rupiah).',NULL,NULL,NULL,NULL),(2,1,1,'','','Dari hasil evaluasi teknis dan biaya serta hasil keputusan rapat antara owner, direksi dan mk untuk penentuan pemenang Pekerjaan Pembangunan Gedung Rumah Sakit Khusus Mata Padang Eye Center, dengan ini diumumkan hasil Pemenang Lelang adalah PT HARAFIEL TRI JAYA dengan harga penawaran Rp. 49.387.200,000,- (Empat Puluh Sembilan Milyar Tiga Ratus Delapan puluh Tujuh Juta Dua Ratus Ribu Rupiah) dengan score akhir 96,33.',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `news_paragrafs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promotions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_hospital` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brosur_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `term_and_conditions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hospital_promotions` (`id_hospital`),
  CONSTRAINT `id_hospital_promotions` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotions`
--

LOCK TABLES `promotions` WRITE;
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_hospital` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_date` date NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_slug_unique` (`slug`),
  KEY `id_hospital_services` (`id_hospital`),
  CONSTRAINT `id_hospital_services` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('7N0lO6xxfqCsetvZcQv7dufk4IAWegmAzuZ0VR2c',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoidnJVWE0wUGxWMEdVYUhoQVhHT3hMN0FlUEVDZnpwam0xOFlxcTJUUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1715685173);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_accounts`
--

DROP TABLE IF EXISTS `social_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `social_accounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_hospital` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hospital_social_account` (`id_hospital`),
  CONSTRAINT `id_hospital_social_account` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_accounts`
--

LOCK TABLES `social_accounts` WRITE;
/*!40000 ALTER TABLE `social_accounts` DISABLE KEYS */;
INSERT INTO `social_accounts` VALUES (1,1,'email','rskmpadangeyecenter@yahoo.com',NULL,NULL,NULL,NULL),(2,1,'call','081373517899',NULL,NULL,NULL,NULL),(3,1,'instagram','pec_padangeyecenter',NULL,NULL,NULL,NULL),(4,1,'facebook','padangeyecenter',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `social_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_hospital` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hospital_teams` (`id_hospital`),
  CONSTRAINT `id_hospital_teams` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,1,'dr. Joni Sastra, SpM','Katarak','A.jpg','','','','',NULL,NULL,NULL,NULL),(2,1,'dr. Mardijas Efendi, Sp.M','Tumor, Katarak','K.jpg','','','','',NULL,NULL,NULL,NULL),(3,1,'dr. Prof.Khalilul Rahman, Sp.M (K)','Vitreoretina','B.jpg','','','','',NULL,NULL,NULL,NULL),(4,1,'dr. Heksan, SpM (K)','Vitreoretina, Katarak','C.jpg','','','','',NULL,NULL,NULL,NULL),(5,1,'dr. Marjis, SpM','Katarak','D.jpg','','','','',NULL,NULL,NULL,NULL),(6,1,'dr. Yandrison, SpM','Katarak','E.jpg','','','','',NULL,NULL,NULL,NULL),(7,1,'dr. Andrini Ariesti, SpM','Glaukoma','G.jpg','','','','',NULL,NULL,NULL,NULL),(8,1,'dr. Romi Yusardi, SpM','Glaukoma, Katarak','L.jpg','','','','',NULL,NULL,NULL,NULL),(9,1,'dr. Fitratul Ilahi, SpM (K)','Glaukoma, Katarak, Neuro Ophthalmology','J.jpg','','','','',NULL,NULL,NULL,NULL),(10,1,'dr. Havriza Vitresia, Sp.M','Infeksi Immunologi, Katarak','I.jpg','','','','',NULL,NULL,NULL,NULL),(11,1,'dr. Weni Helvinda, SpM (K)','Vitreoretina, Katarak','H.jpg','','','','',NULL,NULL,NULL,NULL),(12,1,'dr. Rinda Wati, Sp.M (K)','Refraksi Lensa Low Kontak, Katarak','M.jpg','','','','',NULL,NULL,NULL,NULL),(13,1,'dr. Naima Lassie, SpM','Vitreoretina, Katarak','N.jpg','','','','',NULL,NULL,NULL,NULL),(14,1,'dr. Haves Ashan, SpM','Katarak dan Medical Retina','M.jpg','','','','',NULL,NULL,NULL,NULL),(15,1,'dr. Syahrial Haroes, SpM (K)','Katarak','F.jpg','','','','',NULL,NULL,NULL,NULL),(16,1,'dr. Reni Anggraini, SpM','Infeksi Immunologi, Katarak','P.jpg','','','','',NULL,NULL,NULL,NULL),(17,1,'dr. Desty Ria Tiffani, Sp.M','Katarak','Q.jpg','','','','',NULL,NULL,NULL,NULL),(18,1,'dr. Felichia Yovianda, SpM','-','R.jpg','','','','',NULL,NULL,NULL,NULL),(19,1,'dr. Nova Herdana','Retina','default.png','','','','',NULL,NULL,NULL,NULL),(20,1,'dr. Messia Refni Rahmi','-','default.png','','','','',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_hospital` bigint unsigned NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_age` int NOT NULL,
  `client_birth_of_day` date NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` date NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hospital_testimonial` (`id_hospital`),
  CONSTRAINT `id_hospital_testimonial` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visions`
--

DROP TABLE IF EXISTS `visions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `visions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_hospital` bigint unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_hospital_vision` (`id_hospital`),
  CONSTRAINT `id_hospital_vision` FOREIGN KEY (`id_hospital`) REFERENCES `hospitals` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visions`
--

LOCK TABLES `visions` WRITE;
/*!40000 ALTER TABLE `visions` DISABLE KEYS */;
INSERT INTO `visions` VALUES (1,1,'Menjadikan Rumah Sakit yang terpercaya dan terkemuka di bidang pelayanan kesehatan mata masyarakat dengan implementasi nilai–nilai kepuasan pasien costumer satisfaction',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `visions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-14 19:00:39
