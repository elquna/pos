-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: pos
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `activitylogs`
--

DROP TABLE IF EXISTS `activitylogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activitylogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object` text COLLATE utf8mb4_unicode_ci,
  `branch_id` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activitylogs`
--

LOCK TABLES `activitylogs` WRITE;
/*!40000 ALTER TABLE `activitylogs` DISABLE KEYS */;
INSERT INTO `activitylogs` VALUES (1,'2024-01-17 13:09:05','2024-01-17 13:09:05','127.0.0.1','Added user with name : QDwdq',1,'Superadmin ','{\"firstname\":\"QDwdq\",\"lastname\":\"WDAWF\",\"truncate\":\"MTcwNTUwMDU0NTEyMw==\",\"phone\":\"AWFAWFE\",\"role\":2,\"address\":\"trendysetup@gmail.com\",\"branch_id\":1,\"email\":\"WWRFWE\",\"updated_at\":\"2024-01-17T14:09:05.000000Z\",\"created_at\":\"2024-01-17T14:09:05.000000Z\",\"id\":4}','1'),(2,'2024-01-23 14:30:27','2024-01-23 14:30:27','127.0.0.1','Added category with name : ',1,'Superadmin ','{\"branch_id\":1,\"category\":\"Clothes\",\"updated_at\":\"2024-01-23T15:30:27.000000Z\",\"created_at\":\"2024-01-23T15:30:27.000000Z\",\"id\":2}','1'),(3,'2024-01-23 14:43:44','2024-01-23 14:43:44','127.0.0.1','Added category with name : Grocerreries',1,'Superadmin ','{\"branch_id\":1,\"category\":\"Grocerreries\",\"updated_at\":\"2024-01-23T15:43:44.000000Z\",\"created_at\":\"2024-01-23T15:43:44.000000Z\",\"id\":3}','1'),(4,'2024-01-23 14:44:25','2024-01-23 14:44:25','127.0.0.1','Added category with name : Shoes',1,'Superadmin ','{\"branch_id\":1,\"category\":\"Shoes\",\"updated_at\":\"2024-01-23T15:44:25.000000Z\",\"created_at\":\"2024-01-23T15:44:25.000000Z\",\"id\":4}','1'),(5,'2024-01-25 15:07:56','2024-01-25 15:07:56','127.0.0.1','Added Product with name : Hyderbad Cake',1,'Superadmin ','{\"branch_id\":1,\"category_id\":\"2\",\"price\":\"1000\",\"added_by\":1,\"slug\":\"RSA1706198876\",\"name\":\"Hyderbad Cake\",\"qr\":\"RSA1706198876\",\"updated_at\":\"2024-01-25T16:07:56.000000Z\",\"created_at\":\"2024-01-25T16:07:56.000000Z\",\"id\":1}','1'),(6,'2024-01-25 15:11:32','2024-01-25 15:11:32','127.0.0.1','Added Product with name : Hyderbad Cakes00o',1,'Superadmin ','{\"branch_id\":1,\"category_id\":\"2\",\"price\":\"10009\",\"added_by\":1,\"slug\":\"CPS1706199092\",\"name\":\"Hyderbad Cakes00o\",\"qr\":\"<div style=\\\"font-size:0;position:relative;width:0px;height:30px;\\\">\\n<\\/div>\\n\",\"updated_at\":\"2024-01-25T16:11:32.000000Z\",\"created_at\":\"2024-01-25T16:11:32.000000Z\",\"id\":1}','1'),(7,'2024-01-25 15:13:38','2024-01-25 15:13:38','127.0.0.1','Added Product with name : Hyderbad Cakes00o9',1,'Superadmin ','{\"branch_id\":1,\"category_id\":\"2\",\"price\":\"10009\",\"added_by\":1,\"slug\":\"GOA1706199218\",\"name\":\"Hyderbad Cakes00o9\",\"qr\":\"<div style=\\\"font-size:0;position:relative;width:0px;height:30px;\\\">\\n<\\/div>\\n\",\"updated_at\":\"2024-01-25T16:13:38.000000Z\",\"created_at\":\"2024-01-25T16:13:38.000000Z\",\"id\":3}','1'),(8,'2024-01-25 15:14:55','2024-01-25 15:14:55','127.0.0.1','Added Product with name : Hyderbad Cakes00o900',1,'Superadmin ','{\"branch_id\":1,\"category_id\":\"2\",\"price\":\"10009\",\"added_by\":1,\"slug\":\"MNL1706199295\",\"name\":\"Hyderbad Cakes00o900\",\"qr\":\"<div style=\\\"font-size:0;position:relative;width:0px;height:30px;\\\">\\n<\\/div>\\n\",\"updated_at\":\"2024-01-25T16:14:55.000000Z\",\"created_at\":\"2024-01-25T16:14:55.000000Z\",\"id\":4}','1'),(9,'2024-01-25 15:21:12','2024-01-25 15:21:12','127.0.0.1','Added Product with name : Dermian Shirt',1,'Superadmin ','{\"branch_id\":1,\"category_id\":\"2\",\"price\":\"8500\",\"added_by\":1,\"slug\":\"HKB1706199672\",\"name\":\"Dermian Shirt\",\"updated_at\":\"2024-01-25T16:21:12.000000Z\",\"created_at\":\"2024-01-25T16:21:12.000000Z\",\"id\":1}','1'),(10,'2024-01-26 04:51:03','2024-01-26 04:51:03','127.0.0.1','Added Product with name : Hyderbad Cake',1,'Superadmin ','{\"branch_id\":1,\"category_id\":\"3\",\"price\":\"20000\",\"added_by\":1,\"slug\":\"QEB1706248263\",\"name\":\"Hyderbad Cake\",\"updated_at\":\"2024-01-26T05:51:03.000000Z\",\"created_at\":\"2024-01-26T05:51:03.000000Z\",\"id\":2}','1'),(11,'2024-01-26 05:13:24','2024-01-26 05:13:24','127.0.0.1','Added Product with name : Onions',1,'Superadmin ','{\"branch_id\":1,\"category_id\":\"3\",\"price\":\"1000\",\"added_by\":1,\"slug\":\"ADE1706249604\",\"name\":\"Onions\",\"updated_at\":\"2024-01-26T06:13:24.000000Z\",\"created_at\":\"2024-01-26T06:13:24.000000Z\",\"id\":3}','1');
/*!40000 ALTER TABLE `activitylogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_category_unique` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,'2024-01-23 14:30:27','2024-01-23 14:30:27','Clothes','1'),(3,'2024-01-23 14:43:44','2024-01-23 14:43:44','Grocerreries','1'),(4,'2024-01-23 14:44:25','2024-01-23 14:44:25','Shoes','1');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_01_17_101045_create_activitylogs_table',2),(6,'2024_01_17_141810_create_categories_table',3),(7,'2024_01_24_114203_create_products_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int NOT NULL,
  `branch_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int unsigned NOT NULL,
  `remaining` int NOT NULL DEFAULT '0',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trashed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'2024-01-25 15:21:12','2024-01-25 15:21:12',2,1,'Dermian Shirt','1',8500,0,'HKB1706199672','0'),(2,'2024-01-26 04:51:03','2024-01-26 04:51:03',3,1,'Hyderbad Cake','1',20000,0,'QEB1706248263','0'),(3,'2024-01-26 05:13:24','2024-01-26 05:13:24',3,1,'Onions','1',1000,0,'ADE1706249604','0');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 superadmin, 2 sellers, 3 customers',
  `truncate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `lastlogin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `branch_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Superadmin',NULL,'admin',NULL,'$2y$10$bMIYM3nGZW8GnjLq8fKRWufj3k37OVUQMnueoCMVvKedEfpyTMok2',NULL,'07039201828','1','$2y$10$bMIYM3nGZW8GnjLq8fKRWufj3k37OVUQMnueoCMVvKedEfpyTMok2',NULL,NULL,NULL,NULL,1),(2,'Nsima','Edeheudim','nsimamfon@gmail.com',NULL,'$2y$10$5W/uyPt9gc2Q4uffw6rVXusCAdrKIDYnSNHx.zPpL63w8nujoeuRi',NULL,'07039201828','2','MTcwNTQ5Mjg1NWNvbXB1dGVy','57 Ebitu Ukiwe Street Jabi',NULL,'2024-01-17 11:00:55','2024-01-17 11:00:55',1),(3,'Uduak','Simons','nsimadigital@yahoo.com',NULL,'$2y$10$RwjdmXOe2kUt.XxyAfG6YOLINlj2lWIDBGr3bKlpBb/20SP8SgZEu',NULL,'09076154057','2','MTcwNTQ5OTQzOXBhc3N3b3Jk','I Ezegwu street',NULL,'2024-01-17 12:50:39','2024-01-17 12:50:39',1),(4,'QDwdq','WDAWF','WWRFWE',NULL,'$2y$10$qFS2Rxj6ckBk8qhJebQIKu5gru6TQIYCLh/ui1CaEAqEygWhBgsHi',NULL,'AWFAWFE','2','MTcwNTUwMDU0NTEyMw==','trendysetup@gmail.com',NULL,'2024-01-17 13:09:05','2024-01-17 13:09:05',1);
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

-- Dump completed on 2024-01-26  7:19:42
