-- MySQL dump 10.13  Distrib 5.6.31, for Win64 (x86_64)
--
-- Host: localhost    Database: swa
-- ------------------------------------------------------
-- Server version	5.6.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `articles_user_id_foreign` (`user_id`),
  CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,1,'Тестовая версия сайта запущена!','Завершена работа созданию структуры и разработке дизайна сайта, запущена тестовая версия, началась работа по его наполнению контентом.','2016-12-07 18:00:21','2016-12-07 18:14:08','2016-12-07 18:14:08'),(2,1,'Небольшая прогулка по Большому Каньону','Опубликован отчет о дневном пешем походе на дно большого каньона и обратно.','2016-12-07 18:15:31','2016-12-07 18:15:31','2016-12-07 18:15:31'),(3,1,'Сайт перехал на хостинг! Hello World!','Материалы сайта размещены на внешнем сайте. Переезд прошел гладко. Спасибо бесплатному хостингу от Hostinger.ru.','2016-12-23 08:33:12','2016-12-23 08:37:33','2016-12-23 08:37:33');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `locations_user_id_foreign` (`user_id`),
  CONSTRAINT `locations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,1,'Sequoia National Park','Парк Секвой (Sequoia National Park, CA) - расположенный в северной части Калифорнии парк гигантских деревьев. Некоторые из огромных деревьев наблюдают за развитием нашей цивилизации более 6000 лет','sequoia','sequoia.jpg','2016-12-07 09:42:21','2016-12-07 09:42:21','2016-12-07 09:42:21'),(2,1,'Долина Огня','Долина Огня (Valley of Fire State Park, NV) - своеобразный сад камней. Приезжать в парк нужно рано утром, желательно к рассвету, днем (после 10:00) здесь испепеляющая жара, бродить среди раскаленных камней небезопасно','vofire','vofire.jpg','2016-12-07 14:34:35','2016-12-07 14:34:35','2016-12-07 14:34:35'),(3,1,'Большой Каньон','Гранд Каньон (Grand Canyon, AZ) самый большой каньон и одно из самых посещаемых туристами место. Вы можете не только полюбоваться потрясающими видами, но и совершить запоминающееся путешествие - спуск в каньон\r\n				','gc','gc.jpg','2016-12-07 14:56:45','2016-12-07 14:56:45','2016-12-07 14:56:45'),(4,1,'Пэйдж','В окрестностях города Пэйдж (Page, AZ) расположено множество интересных мест. Потрясающий цвет озера Пауэлл (Powell), можно не только любоваться но и искупаться - ни с чем не сравнимое удовольствие в 40 градусную жару!','page','page.jpg','2016-12-07 15:15:54','2016-12-07 15:15:54','2016-12-07 15:15:54'),(5,1,'Долина Монументов','Долина Монументов (Monument Valley Navajo Tribal Park, AZ) - необычные каменные великаны хорошо известные любителям вестернов. Наиболее впечатляюще они смотрятся в лучах закатного солнца','monument','monument.jpg','2016-12-07 15:17:20','2016-12-07 15:17:20','2016-12-07 15:17:20'),(6,1,'Парк Арки','Национальный парк Арки (Arches National Park). На относительно небольшой территории парка Вы найдете удивительную коллекцию необычных природных образований - арок\r\n','arches','arches.jpg','2016-12-07 15:18:52','2016-12-07 15:18:52','2016-12-07 15:18:52'),(7,1,'Остров в небесах','Остров в небесах (Island in the Sky - Canyonlands National Park, UT) - совершенно невозможно не посетить место с таким названием. Потрясающее и не очень популярное у туристов, а потому пустынное место','skyisle','skyisle.jpg','2016-12-07 15:19:56','2016-12-07 15:19:56','2016-12-07 15:19:56'),(8,1,'Каньон Брайс','Каньон Брайс (Bryce Canyon) - территория каменных изваяний Худусов. По легенде индейцев Навахо Худусы - души умерших. Кто и зачем собирает армию мертвых в каньоне неизвестно','bryce','bryce.jpg','2016-12-07 15:21:38','2016-12-07 15:21:38','2016-12-07 15:21:38'),(73,1,'Каньон Зайон','Zion Canyon National Park -  \"действующий\" каньон, предлагает своим посетителям прогулки по руслу протекающей в каньоне реке (The Narrows). Если что-то пойдет не так, забраться на стену можно не везде...','2y10f170VK','2y10f170VK.jpg','2016-12-19 08:09:25','2016-12-23 14:41:27','2016-12-23 14:41:27');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (11,'2014_10_12_000000_create_users_table',1),(12,'2014_10_12_100000_create_password_resets_table',1),(13,'2016_11_13_114104_create_articles_table',1),(14,'2016_12_07_113253_create_locations_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Alex','alexvn.home@gmail.com','$2y$10$FcdJCkloaEavGLnXKoigHuTedpWui9IfTy1r1zC2ypIxOyQZRCwji','$2y$10$Mrh.jpg',NULL,'2016-12-07 09:41:49','2016-12-07 18:55:30'),(2,'Масяня','masha@gmail.com','$2y$10$ooIrnMZfU1j2IYN17Xln5.cMFGCcvj2wOcvs6UUAH5ePOi8Qjuchy','$2y$10$2Xx.jpg',NULL,'2016-12-07 18:09:28','2016-12-07 18:54:59'),(3,'Vasily','vasya@ya.ru','$2y$10$hP5KIuHizjxJLC0kJ/UNCOLkktLYtVxt0YUDb4AaeIgC5ueMWjaaa','$2y$10$SV0.jpg',NULL,'2016-12-07 18:42:39','2016-12-14 08:38:55'),(6,'Ivan Ivanovich','ivan@gmail.com','$2y$10$TqsWtfB0ffB5lUAL9M5G7uBZJUTSlL/Fra7iHN//vpRYjr4XJOSTm','2y10PQmUsB.jpg',NULL,'2016-12-19 09:33:24','2016-12-19 09:33:24');
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

-- Dump completed on 2017-01-05 15:27:06
