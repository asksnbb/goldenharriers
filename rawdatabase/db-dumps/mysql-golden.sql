
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
DROP TABLE IF EXISTS `academiceventgalleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `academiceventgalleries` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `academiceventgalleries` WRITE;
/*!40000 ALTER TABLE `academiceventgalleries` DISABLE KEYS */;
INSERT INTO `academiceventgalleries` VALUES (1,'Drawing Competition','https://i.imgur.com/9wGKZlB.jpg','2022-10-30 10:02:12','2022-10-30 15:21:20'),(17,'class view','https://i.imgur.com/I7l0wg3.jpg','2022-10-30 11:29:47','2022-10-30 15:23:35'),(18,'Palm Painting','https://i.imgur.com/jXcOG2W.jpg','2022-10-30 11:36:55','2022-10-30 11:36:55'),(19,'Science Exhibition','https://i.imgur.com/cLIBhQW.jpg','2022-10-30 11:38:22','2022-10-30 11:38:22'),(20,'traffic light activity','https://i.imgur.com/ug3fsBW.jpg','2022-10-30 11:44:14','2022-10-30 11:44:14'),(21,'house competition','https://i.imgur.com/c78E5Jq.jpg','2022-10-30 11:45:26','2022-10-30 15:10:31'),(24,'Vigilance Awareness Week (VAW) -2023','https://imgur.com/wxedRT8.jpg','2023-11-04 04:15:53','2023-11-04 05:44:44'),(26,'.','https://imgur.com/zhDXbqE.jpg','2023-11-04 04:23:00','2023-11-04 04:23:00'),(29,'.','https://imgur.com/AYKUM6Y.jpg','2023-11-04 04:28:35','2023-11-04 04:28:35'),(31,'.','https://imgur.com/dsvdEkg.jpg','2023-11-04 04:31:08','2023-11-04 04:31:08'),(32,'.','https://imgur.com/zObtyrz.jpg','2023-11-04 04:32:39','2023-11-04 04:32:39'),(36,'.','https://imgur.com/VPzHrfI.jpg','2023-11-04 05:51:43','2023-11-04 05:51:43');
/*!40000 ALTER TABLE `academiceventgalleries` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `announcements` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `announcements` WRITE;
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (14,'0','0','https://i.imgur.com/gV3s2AB.jpg','2022-11-01 15:32:11','2022-11-03 08:00:26'),(26,'.','.','https://imgur.com/ypGQWuB.jpg','2023-03-15 08:42:17','2023-03-15 08:42:17'),(30,'.','.','https://imgur.com/0BxQDAp.jpg','2023-04-06 07:02:24','2023-04-06 07:02:24'),(31,'.','.','https://imgur.com/qyuVrBf.jpg','2023-04-06 07:04:02','2023-04-06 07:04:02'),(33,'Vigilance Awareness Week (VAW) - 2023','.','https://imgur.com/C5lNCXd.jpg','2023-11-06 03:08:12','2023-11-06 03:08:12'),(43,'Vigilance Awareness Week (VAW) - 2023','.','https://imgur.com/BbWEHIO.jpg','2023-11-06 03:39:01','2023-11-06 03:39:01'),(46,'Amusement Day','Amusement Day Glimpse','https://imgur.com/bX1YqWu.jpg','2023-12-02 04:30:17','2023-12-02 04:30:17'),(47,'Amusement Day','Amusement Day Glimpse','https://imgur.com/502SZUn.jpg','2023-12-02 04:34:05','2023-12-02 04:34:05'),(49,'Amusement Day','.','https://imgur.com/f1dNqyR.jpg','2023-12-02 04:40:40','2023-12-02 04:40:40'),(50,'Half Yearly Prize Distribution Ceremony',NULL,'https://imgur.com/icaEEHB.jpg','2023-12-08 06:52:46','2023-12-08 06:52:46'),(51,'Half Yearly Prize Distribution Ceremony','.','https://imgur.com/T1mDqH4.jpg','2023-12-08 06:54:29','2023-12-08 06:54:29'),(52,'Science Exhibition','.','https://imgur.com/XrnCzeJ.jpg','2023-12-08 06:56:57','2023-12-08 06:56:57'),(54,'Science Exhibition','.','https://imgur.com/CMEiV7t.jpg','2023-12-08 06:59:43','2023-12-08 06:59:43'),(55,'Science Exhibition','.','https://imgur.com/DKaRHIi.jpg','2023-12-08 07:02:53','2023-12-08 07:02:53'),(56,'Amusement day activity','.','https://imgur.com/g2kJoWJ.jpg','2023-12-11 07:13:21','2023-12-11 07:13:21'),(57,'Pre-Primary Sports Meet',NULL,'https://imgur.com/P6rLpP9.jpg','2023-12-13 08:20:33','2023-12-13 08:20:33'),(62,'Sports Meet (2023-24)','.','https://imgur.com/B3ctu1E.jpg','2023-12-26 04:15:08','2023-12-26 04:15:08'),(63,'.','.','https://imgur.com/7VeonwR.jpg','2023-12-26 04:16:13','2023-12-26 04:16:13'),(64,'.','.','https://imgur.com/iR1g7Fb.jpg','2023-12-26 04:16:41','2023-12-26 04:16:41'),(65,'.','.','https://imgur.com/TkNyZSb.jpg','2023-12-26 04:17:11','2023-12-26 04:17:11'),(66,'.','.','https://imgur.com/s4lfTg7.jpg','2023-12-26 04:17:41','2023-12-26 04:17:41'),(67,'.','.','https://imgur.com/IPJuKIB.jpg','2023-12-26 04:18:05','2023-12-26 04:18:05');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `circulars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `circulars` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `downloadlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `circulars` WRITE;
/*!40000 ALTER TABLE `circulars` DISABLE KEYS */;
/*!40000 ALTER TABLE `circulars` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `culturaleventgalleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `culturaleventgalleries` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `culturaleventgalleries` WRITE;
/*!40000 ALTER TABLE `culturaleventgalleries` DISABLE KEYS */;
INSERT INTO `culturaleventgalleries` VALUES (1,'Annual function','https://imgur.com/3yRbfhe.jpg','2022-10-30 10:44:46','2023-01-17 12:19:28'),(2,'Rakhi making','https://i.imgur.com/tyI3d0F.jpg','2022-10-30 10:45:59','2022-10-30 10:45:59'),(5,'annual function','https://imgur.com/3uVhsrj.jpg','2022-10-30 10:53:20','2023-01-17 12:10:17'),(7,'Christmas day','https://i.imgur.com/YfMcAtp.jpg','2022-10-30 10:59:23','2022-10-30 10:59:23'),(9,'Band','https://imgur.com/ZNSOSlC.jpg','2023-01-04 04:33:12','2023-01-04 04:33:12'),(11,'admission','https://imgur.com/yCLBBgD.jpg','2023-04-06 06:02:05','2023-04-06 06:02:05');
/*!40000 ALTER TABLE `culturaleventgalleries` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `datesheets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datesheets` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `downloadlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `datesheets` WRITE;
/*!40000 ALTER TABLE `datesheets` DISABLE KEYS */;
/*!40000 ALTER TABLE `datesheets` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `downloads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `downloads` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `downloadFile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `downloads` WRITE;
/*!40000 ALTER TABLE `downloads` DISABLE KEYS */;
INSERT INTO `downloads` VALUES (1,'Class X Sample Papers English Lang & Lit (187)','https://www.dropbox.com/s/ostv9d6d0b67uvt/English%20SQP%20Class%20X.pdf?dl=1','2022-11-01 15:15:08','2022-11-01 15:47:14'),(2,'Class X Sample Papers  Hindi Course-A (002)','https://www.dropbox.com/s/8pc24dvhjpb0yrr/HindiCourseA-SQP%20Class%20X%20%28code%20002%29.pdf?dl=1','2022-11-01 15:16:22','2022-11-01 15:46:41'),(3,'Class X Sample Papers Math Standard(041)','https://www.dropbox.com/s/7syw6obmewmqx4a/MathsStandard-SQP%20Class%20X%20%28code-041%29.pdf?dl=1','2022-11-01 15:17:25','2022-11-01 15:45:34'),(4,'Class X Sample Papers  Science 086','https://www.dropbox.com/s/idj4dspfpiif1m9/Science%20Class%20X.pdf?dl=1','2022-11-01 15:19:09','2022-11-01 15:44:18'),(5,'Class X Sample Papers Social Science (087)','https://www.dropbox.com/s/k0fgqj63wq95wp2/SocialScience-SQP%20Class%20X%20code%20087.pdf?dl=1','2022-11-01 15:20:31','2022-11-01 15:43:11'),(6,'Class XII Physics(042)','https://www.dropbox.com/s/rfguxb61z0qhqma/Physics-SQP%20042.pdf?dl=1','2022-11-01 15:40:21','2022-11-01 15:40:21'),(7,'Class XII Chemistry(043)','https://www.dropbox.com/s/soie2xmb4quztlc/Chemistry-SQP%20Class%20XII%20043.pdf?dl=1','2022-11-01 15:41:04','2022-11-01 15:41:04'),(8,'Class XII Biology(044)','https://www.dropbox.com/s/7uf15xsyvrj8u0r/Biology-SQP%20Biology%20044.pdf?dl=1','2022-11-01 15:42:15','2022-11-01 15:42:15'),(9,'Class XII Math(041)','https://www.dropbox.com/s/rvrsb7qa836czaj/Maths-SQP%20class%20XII%20041.pdf?dl=1','2022-11-01 15:45:01','2022-11-01 15:45:01'),(10,'Class XII Accountancy(055)','https://www.dropbox.com/s/i3evo21v6igl6x0/Accountancy-SQP%20Class%20XII%20Accountancy.pdf?dl=1','2022-11-01 15:48:00','2022-11-01 15:48:44'),(11,'Class XII BST(054)','https://www.dropbox.com/s/b3eapy18cxx0zl5/BusinessStudies-SQP%20Class%20XII%20054.pdf?dl=1','2022-11-01 15:48:32','2022-11-01 15:48:32'),(12,'Class XII English Core(301)','https://www.dropbox.com/s/sbfjg5md88tzbhe/EnglishCore-SQP%20code%20301.pdf?dl=1','2022-11-01 15:49:31','2022-11-01 15:52:23'),(13,'Class XII Geography(029)','https://www.dropbox.com/s/vp7499ycare52z2/Geography-SQP%20029.pdf?dl=1','2022-11-01 15:50:19','2022-11-01 15:50:19'),(14,'Class XII Economics(030)','https://www.dropbox.com/s/0460hgdwrx7svtb/Economics-SQP%20Class%20XII%20030.pdf?dl=1','2022-11-01 15:51:22','2022-11-01 15:51:22'),(15,'Class XII History (027)','https://www.dropbox.com/s/ogw91v7cxnl8fpl/History-SQP%20027.pdf?dl=1','2022-11-01 15:52:04','2022-11-01 15:52:04'),(16,'Class XII PHE(048)','https://www.dropbox.com/s/lhbtmqxwjnarekz/PhysicalEducation-SQP%20phe%20048.pdf?dl=1','2022-11-01 15:54:00','2022-11-01 15:54:00'),(17,'Class XII IP(065)','https://www.dropbox.com/s/rxipoh43srlyvy8/InformaticsPractices-SQP%20065.pdf?dl=1','2022-11-01 15:54:31','2022-11-01 15:54:31');
/*!40000 ALTER TABLE `downloads` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `educationaleventgalleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `educationaleventgalleries` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `educationaleventgalleries` WRITE;
/*!40000 ALTER TABLE `educationaleventgalleries` DISABLE KEYS */;
INSERT INTO `educationaleventgalleries` VALUES (1,'kidzania tour','https://i.imgur.com/Xd3VNbX.jpg','2022-10-30 11:22:16','2022-10-30 11:22:16'),(2,'kidzania tour','https://i.imgur.com/fTLZQCa.jpg','2022-10-30 11:28:32','2022-10-30 11:28:32'),(4,'trip','https://i.imgur.com/N2GTTs0.jpg','2022-10-30 12:03:03','2022-10-30 15:56:17');
/*!40000 ALTER TABLE `educationaleventgalleries` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `faculties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faculties` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `faculties` WRITE;
/*!40000 ALTER TABLE `faculties` DISABLE KEYS */;
INSERT INTO `faculties` VALUES (1,'DR. ANKUR ROHILLA','PRINCIPAL','PhD','15  Years',NULL,'2022-11-03 05:03:54','2023-03-15 08:33:31'),(2,'DR. NISHA','ACADEMIC COORDINATOR','PhD','10 Years',NULL,'2022-11-03 05:04:49','2022-11-03 05:04:49'),(3,'MS. REKHA','NTT TEACHER','NTT','3 Years',NULL,'2022-11-03 05:06:48','2022-11-03 05:06:48'),(4,'MS. PRIYA SINGH','NTT TEACHER','B.ED','3 Years',NULL,'2022-11-03 05:13:03','2022-11-03 05:13:03'),(5,'MS. VEENA','NTT TEACHER','NTT','13 Years',NULL,'2022-11-03 05:14:03','2022-11-03 05:14:03'),(6,'MS. PALAK','NUR/KG TEACHER','B.ED','5 Years',NULL,'2022-11-03 05:17:27','2022-11-03 05:25:13'),(7,'MS. REKHA ANTIL','NUR/KG TEACHER','JBT,NTT','5 Years',NULL,'2022-11-03 05:25:00','2022-11-03 05:25:00'),(8,'MS. SHALINI','PRT MOTHERTEACHER','B.ED,NTT','4 Years',NULL,'2022-11-03 05:32:11','2022-11-03 05:32:11'),(9,'MS. NIKITA','PRT MOTHERTEACHER','B.ED','3.5 Years',NULL,'2022-11-03 05:32:45','2022-11-03 05:32:45'),(11,'MS.PUSTI','PRT','M.A','2 Years',NULL,'2022-11-03 12:00:02','2022-11-03 12:00:24'),(13,'MS. SUSHMA','PRT','JBT','5 Years',NULL,'2022-11-03 12:05:44','2022-11-03 12:05:44'),(15,'MS.SUMAN','PRT','B.ED','2 Years',NULL,'2022-11-03 12:15:15','2022-11-03 12:15:15'),(17,'MS. MONIKA CHAUHAN','TGT','M.TECH','5 Years',NULL,'2022-11-03 16:01:11','2022-11-03 16:01:11'),(18,'MS. KANUPRIYA','TGT','M.SC , B.ED','5 Years',NULL,'2022-11-03 16:02:00','2022-11-03 16:02:00'),(20,'MS. ADITI','PRT','B.ED','6 Years',NULL,'2022-11-03 16:04:19','2022-11-03 16:04:19'),(22,'MS.BHAVNA','TGT','M.A , B.ED','6 Years',NULL,'2022-11-03 16:05:56','2022-11-03 16:05:56'),(24,'MS. MANISHA','TGT','M.A , B.ED','4 Years',NULL,'2022-11-03 16:15:06','2022-11-03 16:16:33'),(25,'MS. KUSUM','PGT','M.A , B.ED','5 Years',NULL,'2022-11-03 16:17:21','2022-11-03 16:17:21'),(26,'MS. NITU','TGT','M.A , B.ED','6 Years',NULL,'2022-11-03 16:17:49','2022-11-03 16:17:49'),(27,'MS. SUNITA DAHIYA','TGT','MCA,B.ED','5 Years',NULL,'2022-11-03 16:18:27','2022-11-03 16:18:27'),(28,'MS.EKTA','TGT','B.ED','6 Years',NULL,'2022-11-03 16:19:07','2022-11-03 16:19:07'),(29,'MR. MONU PARASHAR','PGT','M.SC , B.ED','6 Years',NULL,'2022-11-03 16:19:44','2022-11-03 16:19:44'),(30,'MS. DIKSHA','PGT','M.SC , B.ED','3 Years',NULL,'2022-11-03 16:20:25','2022-11-03 16:20:25'),(32,'MR. MANOJ','PGT','M.A , B.ED','9 Years',NULL,'2022-11-03 16:21:29','2022-11-03 16:21:29'),(33,'MR. PRANAV','PGT','M.SC , B.ED','3 Years',NULL,'2022-11-03 16:22:20','2022-11-03 16:22:20'),(34,'MS. SUNITA JOHAR','PGT','M.Com','5 Years',NULL,'2022-11-03 16:23:19','2023-03-15 08:31:55'),(35,'Mr. Harvinder','PGT','M.Com, MBA','5 Yrs',NULL,'2023-03-15 07:59:49','2023-03-15 08:32:12'),(36,'Mohini Jain','PRT','M-Tech','5 Years',NULL,'2023-10-26 07:26:43','2023-10-26 07:26:56'),(37,'NEHA','PGT','B.ED','7 Years',NULL,'2023-10-26 07:50:32','2023-10-26 07:50:32'),(38,'VINOD KUMAR','TGT','B.ED','8 Years',NULL,'2023-10-26 07:51:28','2023-10-26 07:51:28'),(39,'POOJA','PGT','B.ED','8 Years',NULL,'2023-10-26 07:53:14','2023-10-26 07:53:14');
/*!40000 ALTER TABLE `faculties` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_10_28_115820_create_faculties_table',1),(6,'2022_10_28_131004_create_announcements_table',1),(7,'2022_10_29_015235_create_downloads_table',1),(8,'2022_10_29_031117_create_academiceventgalleries_table',1),(9,'2022_10_29_033225_add_updated_at_to_academiceventgalleries_table',1),(10,'2022_10_29_045451_create_culturaleventgalleries_table',1),(11,'2022_10_29_050136_create_sportseventgalleries_table',1),(12,'2022_10_29_051101_create_educationaleventgalleries_table',1),(13,'2022_10_29_061417_create_circulars_table',1),(14,'2022_10_29_082704_create_datesheets_table',1),(15,'2022_10_30_033508_create_teachers_table',1),(16,'2022_10_30_051636_create_banners_table',1),(17,'2022_11_01_134721_create_toppers_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `sportseventgalleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sportseventgalleries` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `sportseventgalleries` WRITE;
/*!40000 ALTER TABLE `sportseventgalleries` DISABLE KEYS */;
INSERT INTO `sportseventgalleries` VALUES (1,'annual sports day','https://i.imgur.com/VKEGywW.jpg','2022-10-30 11:02:10','2022-10-30 11:02:10'),(2,'basketball match','https://i.imgur.com/3C1FLiw.jpg','2022-10-30 11:03:55','2022-10-30 11:03:55'),(4,'basketball champion','https://i.imgur.com/Ah74bOs.jpg','2022-10-30 11:10:38','2022-10-30 11:10:38'),(6,'annual sports meet','https://i.imgur.com/ezPougd.jpg','2022-10-30 11:15:54','2022-10-30 15:40:29'),(7,'shooting','https://i.imgur.com/6qRuFaF.jpg','2022-10-30 12:32:03','2022-10-30 15:31:42'),(8,'gymnastics','https://imgur.com/LWPMt0p.jpg','2023-01-17 12:12:49','2023-01-17 12:12:49'),(12,'Taekwondo Games ( IX-A Chetan Selected for national Level )','https://imgur.com/okLIDiq.jpg','2023-10-31 08:39:57','2023-10-31 08:39:57');
/*!40000 ALTER TABLE `sportseventgalleries` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teachers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'Dr. Nisha','Academic Coord.  & PGT','https://i.imgur.com/Bmcn8Lx.jpg','2022-10-30 09:16:55','2023-01-04 04:54:29'),(4,'Mr. Sidharth','PGT','https://i.imgur.com/UAGRITx.jpg','2022-10-30 09:19:16','2023-01-04 04:53:41'),(5,'Veena','Motherteacher','https://i.imgur.com/54PHwpf.jpg','2022-10-30 09:41:29','2022-10-30 09:41:29'),(6,'Mr. Pranav','PGT','https://i.imgur.com/VBDNl0z.jpg','2022-10-30 09:47:03','2023-01-04 04:53:27'),(7,'Ms. Anita','Pre-Primary Coordinator','https://i.imgur.com/6AAKA4n.jpg','2022-10-30 09:50:44','2022-10-30 09:50:44'),(8,'Ms. Upasana','CBSE Coordinator & TGT','https://i.imgur.com/am2f8pD.jpg','2022-10-30 09:57:22','2023-01-04 04:54:09'),(11,'Ms. Pusti','PRT','https://imgur.com/SY15sgV.jpg','2023-01-04 04:53:03','2023-01-04 04:53:03'),(12,'Ms. Aditi','TGT','https://imgur.com/V3uYlfk.jpg','2023-01-04 04:55:20','2023-01-04 04:55:20'),(13,'Mr. Harvinder','PGT','https://imgur.com/OffkJ0i.jpg','2023-03-15 07:58:50','2023-03-15 08:30:23');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `toppers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `toppers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `toppers` WRITE;
/*!40000 ALTER TABLE `toppers` DISABLE KEYS */;
INSERT INTO `toppers` VALUES (11,'Ankit (Science Stream)','https://i.imgur.com/SXGxCru.jpg','XII A','2022-23','96%','2023-08-08 10:05:13','2023-08-08 10:05:13'),(12,'Samiksha (Commerce Stream)','https://i.imgur.com/NvOZzyb.jpg','XII B','2022-23','95%','2023-08-08 10:06:41','2023-08-08 10:06:41'),(13,'Anjali (Humanities Stream)','https://i.imgur.com/3VvvxFo.jpg','XII C','2022-23','94.4%','2023-08-08 10:07:59','2023-08-08 10:07:59'),(14,'Khushi Chauhan','https://i.imgur.com/6rJQiVs.jpg','X','2022-23','96.6%','2023-08-08 10:11:39','2023-08-08 10:11:39'),(15,'Aryan','https://i.imgur.com/J4ocu5g.jpg','X','2022-23','95%','2023-08-08 10:13:47','2023-08-08 10:13:47'),(16,'Aditya Chauhan','https://i.imgur.com/9qg5AMi.jpg','X','2022-23','94.2%','2023-08-08 10:15:17','2023-08-08 10:15:17');
/*!40000 ALTER TABLE `toppers` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Golden Harrier School','goldenharriers@gmail.com',NULL,'$2y$10$cnH3Z/1oYz8OkYOV0XLFUu612LwFgY2bgFwGvwbNqDqV4NHUsu46m','5eBVTs4WybNbvSHfO8hAlxuJjZ6uVNSWA14FOLS9O7NSX8EUT5B2Q0jByuHe',0,'2022-10-30 09:16:10','2022-10-30 09:16:10');
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

