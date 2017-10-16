-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: db.dojo.rinaldojonathan.id    Database: musicdb
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1-log

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
-- Table structure for table `domains`
--

DROP TABLE IF EXISTS `domains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domains` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `domain` (`domain`)
) ENGINE=InnoDB AUTO_INCREMENT=308 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `terms`
--

DROP TABLE IF EXISTS `terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terms` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `term` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `term` (`term`)
) ENGINE=InnoDB AUTO_INCREMENT=9186932 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ytapi`
--

DROP TABLE IF EXISTS `ytapi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ytapi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `api` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quota` int(11) NOT NULL DEFAULT '1000000',
  `used` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `api` (`api`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-13  8:35:56
-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: db.dojo.rinaldojonathan.id    Database: musicdb
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1-log

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
-- Table structure for table `domains`
--

DROP TABLE IF EXISTS `domains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domains` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `domain` (`domain`)
) ENGINE=InnoDB AUTO_INCREMENT=308 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domains`
--

LOCK TABLES `domains` WRITE;
/*!40000 ALTER TABLE `domains` DISABLE KEYS */;
-- INSERT INTO `domains` VALUES (1,'musictophitz.com','Music Top Hitz'),(2,'muvizamp3.bid','Muviza MP3'),(3,'musixmax.accountant','MusixMax'),(4,'musixmax.bid','MusixMax'),(5,'musixmax.cricket','MusixMax'),(6,'musixmax.date','MusixMax'),(7,'musixmax.download','MusixMax'),(8,'musixmax.faith','MusixMax'),(9,'musixmax.host','MusixMax'),(10,'musixmax.loan','MusixMax'),(11,'musixmax.online','MusixMax'),(12,'musixmax.racing','MusixMax'),(13,'musixmax.review','MusixMax'),(14,'musixmax.site','MusixMax'),(15,'musixmax.stream','MusixMax'),(16,'musixmax.tech','MusixMax'),(17,'musixmax.top','MusixMax'),(18,'musixmax.trade','MusixMax'),(19,'musixmax.us','MusixMax'),(20,'musixmax.webcam','MusixMax'),(21,'musixmax.website','MusixMax'),(22,'musixmax.win','MusixMax'),(23,'mp3mediasource.website','Mp3 Media Source'),(24,'mp3mediasource.online','Mp3 Media Source'),(25,'mp3mediasource.site','Mp3 Media Source'),(26,'mp3mediasource.space','Mp3 Media Source'),(27,'mp3mediasource.top','Mp3 Media Source'),(28,'mp3mediasource.xyz','Mp3 Media Source'),(29,'mp3mediasource.tech','Mp3 Media Source'),(30,'mp3mediasource.download','Mp3 Media Source'),(31,'mp3mediasource.stream','Mp3 Media Source'),(32,'mp3mediasource.win','Mp3 Media Source'),(33,'mp3mediasource.party','Mp3 Media Source'),(34,'mp3mediasource.review','Mp3 Media Source'),(35,'mp3mediasource.host','Mp3 Media Source'),(36,'mp3mediasource.racing','Mp3 Media Source'),(37,'',''),(38,'mymp3download.cricket','My Mp3 Download'),(39,'mymp3download.date','My Mp3 Download'),(40,'mymp3download.faith','My Mp3 Download'),(41,'mymp3download.host','My Mp3 Download'),(42,'mymp3download.loan','My Mp3 Download'),(43,'mymp3download.party','My Mp3 Download'),(44,'mymp3download.press','My Mp3 Download'),(45,'mymp3download.racing','My Mp3 Download'),(46,'mymp3download.review','My Mp3 Download'),(47,'mymp3download.science','My Mp3 Download'),(48,'mymp3download.site','My Mp3 Download'),(49,'mymp3download.space','My Mp3 Download'),(50,'mymp3download.tech','My Mp3 Download'),(51,'mymp3download.top','My Mp3 Download'),(52,'mymp3download.webcam','My Mp3 Download'),(53,'mymp3download.win','My Mp3 Download'),(54,'mp3machine.racing','Mp3 Machine'),(55,'mp3machine.loan','Mp3 Machine'),(56,'mp3machine.online','Mp3 Machine'),(57,'mp3machine.website','mp3machine.website'),(59,'mp3machine.space','Mp3 Machine'),(60,'mp3machine.tech','Mp3 Machine'),(61,'mp3machine.host','Mp3 Machine'),(62,'mp3machine.webcam','Mp3 Machine'),(63,'udownloadmp3.com','uDownloadMP3'),(64,'udownloadmp3.download','uDownloadMP3'),(65,'mp3machine.download','MP3 Machine'),(66,'mp3downloadsite.host','Mp3 Download Site'),(67,'mp3downloadsite.online','Mp3 Download Site'),(68,'mp3downloadsite.tech','Mp3 Download Site'),(69,'mp3downloadsite.site','Mp3 Download Site'),(70,'mp3downloadsite.space','Mp3 Download Site'),(71,'mp3downloadsite.bid','Mp3 Download Site'),(72,'mp3downloadsite.club','Mp3 Download Site'),(73,'mp3downloadsite.webcam','Mp3 Download Site'),(74,'mp3downloadsite.download','Mp3 Download Site'),(75,'mp3downloadsite.racing','Mp3 Download Site'),(76,'cloudmusic.space','Cloud Music'),(77,'cloudmusic.online','Cloud Music'),(78,'cloudmusic.press','Cloud Music'),(79,'cloudmusic.site','Cloud Music'),(80,'yourhelperto.download','Your Helper 2 Download'),(81,'topchartmusic.cricket','Top Chart Music'),(82,'topchartmusic.date','Top Chart Music'),(83,'topchartmusic.download','Top Chart Music'),(84,'topchartmusic.faith','Top Chart Music'),(85,'topchartmusic.host','Top Chart Music'),(86,'topchartmusic.online','Top Chart Music'),(87,'topchartmusic.party','Top Chart Music'),(88,'topchartmusic.review','Top Chart Music'),(89,'topchartmusic.site','Top Chart Music'),(90,'topchartmusic.stream','Top Chart Music'),(91,'topchartmusic.tech','Top Chart Music'),(92,'topchartmusic.top','Top Chart Music'),(93,'topchartmusic.webcam','Top Chart Music'),(94,'topchartmusic.website','Top Chart Music'),(95,'topchartmusic.win','Top Chart Music'),(96,'stafalagu.co','Stafa Lagu'),(97,'stafamp3.co','Stafa Mp3'),(98,'udownloadmp3.co','uDownload MP3'),(99,'yourmusicsource.accountant','Your Music Source'),(100,'yourmusicsource.club','Your Music Source'),(101,'yourmusicsource.cricket','Your Music Source'),(102,'yourmusicsource.date','Your Music Source'),(103,'yourmusicsource.download','Your Music Source'),(104,'yourmusicsource.faith','Your Music Source'),(105,'yourmusicsource.host','Your Music Source'),(106,'yourmusicsource.online','Your Music Source'),(107,'yourmusicsource.party','Your Music Source'),(108,'yourmusicsource.press','Your Music Source'),(109,'yourmusicsource.pw','Your Music Source'),(110,'yourmusicsource.review','Your Music Source'),(111,'yourmusicsource.science','Your Music Source'),(112,'yourmusicsource.site','Your Music Source'),(113,'yourmusicsource.stream','Your Music Source'),(114,'yourmusicsource.top','Your Music Source'),(115,'yourmusicsource.trade','Your Music Source'),(116,'yourmusicsource.website','Your Music Source'),(117,'yourmusicsource.win','Your Music Source'),(118,'stafalagu.click','Stafa Lagu'),(119,'stafalagu.link','Stafa Lagu'),(120,'stafalagu.stream','Stafa Lagu'),(121,'stafalagu.space','Stafa Lagu'),(122,'stafalagu.website','Stafa Lagu'),(123,'stafalagu.site','Stafa Lagu'),(124,'stafalagu.gdn','Stafa Lagu'),(125,'musixnow.click','Musix Now'),(126,'musixnow.gdn','Musix Now'),(127,'musixnow.space','Musix Now'),(128,'musixnow.link','Musix Now'),(129,'udownloadmp3.click','uDownload MP3'),(130,'udownloadmp3.space','uDownload MP3'),(131,'udownloadmp3.website','uDownload MP3'),(132,'udownloadmp3.link','uDownload MP3'),(133,'udownloadmp3.stream','uDownload MP3'),(134,'udownloadmp3.site','uDownload MP3'),(135,'udownloadmp3.gdn','uDownload MP3'),(136,'stafamp3.asia','Stafa MP3'),(137,'stafamp3.science','Stafa MP3'),(138,'stafamp3.click','Stafa MP3'),(139,'stafamp3.space','Stafa MP3'),(140,'stafamp3.link','Stafa MP3'),(141,'stafamp3.stream','Stafa MP3'),(142,'stafamp3.gdn','Stafa MP3'),(143,'musikgratis.top','Musik Gratis'),(144,'bursalagu.link','Bursa Lagu'),(145,'mp3lion.top','MP3 Lion'),(146,'urbandubmusic.tk','urbandubmusic'),(147,'urbandubmusic.ml','urbandubmusic'),(148,'urbandubmusic.ga','urbandubmusic'),(149,'urbandubmusic.gq','urbandubmusic'),(150),'musicdownloadwebsite.club','Music Download Website'),(151,'musicdownloadwebsite.com','Music Download Website'),(152,'musicdownloadwebsite.download','Music Download Website'),(153,'musicdownloadwebsite.host','Music Download Website'),(154,'musicdownloadwebsite.online','Music Download Website'),(155,'musicdownloadweb.site','Music Download Website'),(156,'musicdownloadwebsite.stream','Music Download Website'),(157,'musicdownload.website','Music Download Website'),(158,'musicdownloadingwebsite.club','Music Downloading Website'),(159,'musicdownloadingwebsite.com','Music Downloading Website'),(160,'musicdownloading.website','Music Downloading Website'),(161,'musicdownloadingweb.site','Music Downloading Website'),(165,'mp3downloadwebsite.bid','Mp3 Download Site'),(166,'mp3downloadwebsite.club','Mp3 Download Site'),(167,'mp3downloadwebsite.cricket','Mp3 Download Site'),(168,'mp3downloadwebsite.date','Mp3 Download Site'),(169,'mp3downloadwebsite.faith','Mp3 Download Site'),(170,'mp3downloadwebsite.host','Mp3 Download Site'),(171,'mp3downloadwebsite.info','Mp3 Download Site'),(172,'mp3downloadwebsite.loan','Mp3 Download Site'),(173,'mp3downloadwebsite.men','Mp3 Download Site'),(174,'mp3downloadwebsite.online','Mp3 Download Site'),(175,'mp3downloadwebsite.party','Mp3 Download Site'),(176,'mp3downloadwebsite.press','Mp3 Download Site'),(177,'mp3downloadwebsite.pro','Mp3 Download Site'),(178,'mp3downloadwebsite.racing','Mp3 Download Site'),(179,'mp3downloadwebsite.review','Mp3 Download Site'),(180,'mp3downloadwebsite.space','Mp3 Download Site'),(181,'mp3downloadwebsite.stream','Mp3 Download Site'),(182,'mp3downloadwebsite.tech','Mp3 Download Site'),(183,'mp3downloadwebsite.top','Mp3 Download Site'),(184,'mp3downloadwebsite.win','Mp3 Download Site'),(223,'musicdownloadwebsite.accountant','Music Download Website'),(224,'musicdownloadwebsite.bid','Music Download Website'),(228,'musicdownloadwebsite.faith','Music Download Website'),(230,'musicdownloadwebsite.loan','Music Download Website'),(232,'musicdownloadwebsite.press','Music Download Website'),(233,'musicdownloadwebsite.racing','Music Download Website'),(234,'musicdownloadwebsite.site','Music Download Website'),(235,'musicdownloadwebsite.space','Music Download Website'),(237,'musicdownloadwebsite.tech','Music Download Website'),(238,'musicdownloadwebsite.top','Music Download Website'),(239,'musicdownloadwebsite.trade','Music Download Website'),(240,'musicdownloadwebsite.webcam','Music Download Website'),(241,'musicdownloadwebsite.win','Music Download Website'),(249,'mp3orange.guru','Mp3 Orange'),(250,'mp3orange.design','Mp3 Orange'),(251,'mp3panda.guru','Mp3 Panda'),(252,'mp3panda.design','Mp3 Panda'),(253,'mp3panda.me','Mp3 Panda'),(254,'musicdownloadwebsite.guru','Music Download Website'),(255,'musicdownloadwebsite.design','Music Download Website'),(256,'musicdownloadwebsite.me','Music Download Website'),(257,'musicdownloadingwebsite.me','Music Downloading Website'),(258,'musicdownloadingwebsite.design','Music Downloading Website'),(259,'musicdownloadingwebsite.guru','Music Downloading Website'),(260,'musicsearchengine.design','Music Search Engine'),(261,'musicsearchengine.guru','Music Search Engine'),(262,'musicsearchengine.me','Music Search Engine'),(263,'mp3searchengine.me','Mp3 Search Engine'),(264,'mp3searchengine.guru','Mp3 Search Engine'),(265,'mp3searchengine.design','Mp3 Search Engine'),(266,'musicstack.design','Music Stack'),(267,'musicstack.guru','Music Stack'),(268,'musicstack.me','Music Stack'),(269,'mp3haystack.com','Mp3 Haystack'),(270,'mp3haystack.net','Mp3 Haystack'),(271,'mp3haystack.design','Mp3 Haystack'),(272,'mp3haystack.me','Mp3 Haystack'),(273,'mp3orange.me','Mp3 Orange'),(274,'mp3apple.me','Mp3 Apple'),(275,'mp3apple.design','Mp3 Apple'),(276,'mp3apple.guru','Mp3 Apple'),(277,'mp3orange.co','Mp3 Orange'),(278,'musicsearchengine.co','Music Search Engine'),(279,'mp3searchengine.co','Mp3 Search Engine'),(280,'musicstack.co','Music Stack'),(281,'musicdownloadingwebsite.co','Music Downloading Website'),(282,'musicdownloadwebsite.co','Music Download Website'),(283,'musicstream.design','musicstream.design'),(284,'musicstream.me','musicstream.me'),(285,'musichost.design','musichost.design'),(286,'musichost.co','Music Host'),(287,'mp3host.design','Mp3 Host'),(288,'mp3host.me','Mp3 Host'),(289,'mp3network.design','Mp3 Network'),(290,'mp3network.me','Mp3 Network'),(291,'mp3stream.design','Mp3 Stream'),(292,'mp3stream.me','Mp3 Stream'),(293,'mp3topchart.design','Mp3 Top Chart'),(294,'mp3topchart.me','Mp3 Top Chart'),(295,'mp3warehouse.design','Mp3 Warehouse'),(296,'mp3warehouse.me','Mp3 Warehouse'),(298,'musichost.me','Music Host'),(299,'musicnetwork.design','Music Network'),(302,'musictopchart.design','Music Top Chart'),(303,'musictopchart.me','Music Top Chart'),(304,'musicwarehouse.design','Music Warehouse'),(305,'musicwarehouse.me','Music Warehouse'),(306,'http://stafabandmusik.net','stafabandmusik'),(307,'http://stafabanddl.net','stafabandmusik');
/*!40000 ALTER TABLE `domains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ytapi`
--

DROP TABLE IF EXISTS `ytapi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ytapi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `api` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quota` int(11) NOT NULL DEFAULT '1000000',
  `used` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `api` (`api`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ytapi`
--

LOCK TABLES `ytapi` WRITE;
/*!40000 ALTER TABLE `ytapi` DISABLE KEYS */;
INSERT INTO `ytapi` VALUES (1,'AIzaSyDGEwafyWFkzhz8EKYqx-HbX9iqM7_m7ok',50000000,55902),(2,'AIzaSyB7ukwXRkCynNCxyo6w9J3OpJQXkJYoKns',50000000,57450),(3,'AIzaSyDY72Hl6TDRJhu6-UhopkGR3d-K_wT2KHs',50000000,57944),(6,'AIzaSyDjIhM8q9dyhyy4iFWcxCC05pYBjMOrxo8',1000000,51052),(7,'AIzaSyAlwyEBhEiQvWY8OFYnCmqLnrxvSqD0R3Y',1000000,55996),(8,'AIzaSyBVWCcXm25AqPa7678S2lsSfBemv6xz-0c',1000000,55254),(9,'AIzaSyAt_cTUfoHRrHoBAcgZ9PgSuLVA-J0WK3A',1000000,56030),(10,'AIzaSyA7GmZr-T8p7JGdaoATT0FRd_ylTp2zUps',1000000,58278),(11,'AIzaSyBPOXMxsOUskhRNSHY0fNnCLadmS9ai34g',1000000,48464),(12,'AIzaSyCRUwVRWSh9m4Cj7ztWKHS_QW9EvFIWpf4',1000000,54384),(13,'AIzaSyD8dJs2dluvLH3yc-SCIlEslJ9yczgWF8w',1000000,56782),(14,'AIzaSyCFAyjJE-yXNmwmtdNKdawPo11XhiszLfk',1000000,57546),(15,'AIzaSyBDjbsiTcy2eYIKURdsFXhHOL6sfpOotxQ',1000000,54994),(16,'AIzaSyDKLTFCb83TA09WC5qlNTaw1aY9W_-gKpE',1000000,58112),(17,'AIzaSyCCHp3WcGPU6m4VImT6eGVKrryq2-2Y4AA',1000000,55384),(18,'AIzaSyAGHgMhzhqrXiDmTTB8eQPuiwCL0fw-Vsg',1000000,54274),(19,'AIzaSyCl-L5p22XpkW0ca6BpXirXJneP01TDt98',1000000,55364),(20,'AIzaSyAIUtKTeyQKXcoct_SJxMe7HHlXVLoVHqE',1000000,56054),(21,'AIzaSyD2znISpBrRAqz6JAtURDn2sia320SpJWA',1000000,54950),(22,'AIzaSyCceyeYPmcugAEPp2OvR-Fz-38n7M-a_MQ',1000000,54678),(23,'AIzaSyDLEjdhFzmxmXpOOzE93rfLEEWwJPMAr_E',1000000,51468),(24,'AIzaSyCi7voQhIfFGYxWGspR02iwzBNF6e16ihU',1000000,56872),(25,'AIzaSyAZ_AW9JluAesHg8U9LCqd0exkBEwT9EVM',1000000,54468),(26,'AIzaSyCztuamEOB1qM5AvQmdPqshoEVfHz8odfo',1000000,56400),(27,'AIzaSyB2vimpz4ReeChfr8mSD7Bjgt17CDi_emY',1000000,50196),(28,'AIzaSyChkA5XWR40X0F-APEHmpm6tKHNFrpvW1k',1000000,53834),(29,'AIzaSyCwQ8GI_gloX7FL8GewsTyyxQAtAyZjvhQ',1000000,55596),(30,'AIzaSyBPbvKyGMWN_9inX4uXCgu11hdSNbct4eY',1000000,54728),(31,'AIzaSyCJ0NsXg0nDAg0khP7EtHH8BKuBg5G3Ai0',1000000,56632),(32,'AIzaSyDb5q0E3o0UFpOHEwvT812ZBDc1sIZMLYU',1000000,58420),(33,'AIzaSyDAhbeaqeYcSYjZSvR1RB4R86A97lq2Yzo',1000000,52346),(34,'AIzaSyBIxFOJaaEDqR1LyW6baCwT88VmTYgSEVw',1000000,55674),(35,'AIzaSyDUXejmRnhhHwOg4YxdiMaekmwzxDiLfMg',1000000,55930),(36,'AIzaSyCDcg3NwaTLx56tj-vkqzS9L-CUyX5jC6A',1000000,52904),(37,'AIzaSyDspRCQGORvcN_HAF29q154r5I0U3LVbLk',1000000,53580),(38,'AIzaSyCzahz4wd1bJEFZyXNedQuxM0tcKAg7Qz0',1000000,53844),(39,'AIzaSyBQqsQuhefuG2YSZuCfv-Ne6M8sn-Wve3M',1000000,52762),(40,'AIzaSyDrBc4mhoo0jR1ur15wvD1cquCEWoMlwf8',1000000,56266),(41,'AIzaSyCRpMhKzCR9JYooMaNQQqP4znxH9WsS-84',1000000,53124),(42,'AIzaSyA2G7j746Y9oOMF3O3IF4cJpf4TLm1-DJw',1000000,56064),(43,'AIzaSyCRr2xaZtMuxS-NCXo43GR7Fp3JG-hKZHw',1000000,56660),(44,'AIzaSyCSRo0oC7NUoeZOBituk5XY5QdzLCTded4',1000000,55596),(45,'AIzaSyAqupbXWybJ0VLX0JLdhhO6ToElr6WhNxs',1000000,57664),(46,'AIzaSyCgwjmw77eTz__uIX_mAi9j7EHrblqzuis',1000000,49992),(47,'AIzaSyARN4LhYP8oRGypIwmI_8QjqqjDg6v4gNY',1000000,54538),(48,'AIzaSyCHT4KLzZ9YH4O_tcAMW6RdBXfCDiZGHCE',1000000,56018),(49,'AIzaSyD6vUXIhglsP-H-GwyBWqSUIFX5v8YVjNM',1000000,56518),(50,'AIzaSyB9xn20FswJZ_Q8DB0kcPwUYhR8pRE5Mdc',1000000,54894),(51,'AIzaSyD3hD6gi5RKvpFN_SQxt0GkHq_IlsedkQE',1000000,51118),(52,'AIzaSyCOjejmMBmO85adQUD7VWto0wLJJh91B58',1000000,52674),(53,'AIzaSyDB1qczPS8iIKFbAXKVJdzqIsRRkjAA6jQ',1000000,55592),(54,'AIzaSyDIqVkxyGEEkrHjmFJeaT-8HWgjZIG_hDA',1000000,54418),(55,'AIzaSyChLLbvCIocpDRNIVABJ2p3P5CQfF9k4iE',1000000,54480),(56,'AIzaSyCGTqboB1hOh2J9oJgV2kR65JfZRszOEf4',1000000,56898),(57,'AIzaSyCNgmmjuszM0lJ99JzwWuKKpZxGXFJ3hIM',1000000,53950),(58,'AIzaSyDyhG_aTyLd3MaDgtYkFfhO6ZW3mU2I67Q',1000000,55580),(59,'AIzaSyACFxJWkpEXqzrhsh7etCnhPz63GFBIvh4',1000000,56778),(60,'AIzaSyB16sI2gbNgXd9eMWBDzP9wKxF7niup_-c',1000000,54654),(61,'AIzaSyBs0Om8HXu2ZM-psI070WKA3QXYydMWLGg',1000000,51554),(62,'AIzaSyBcXOE7WY3lovD8IAffiG4XCJENCZiN4qI',1000000,57150),(63,'AIzaSyBE_pI3m6mWPnGhd_Ac6L64b9CXGjFLrck',1000000,56376),(64,'AIzaSyACfv-oIi6GSzamZxMOm6p4lmgfz6iZHIk',1000000,57458),(65,'AIzaSyB_9lHVdTlWiwvIIHnu7OqqzJeFe8X1UH4',1000000,55236),(66,'AIzaSyAxke7oH8n8dc1VY9oDvhVzVe6xhESGnQ4',1000000,54950),(67,'AIzaSyCocA80wuJV-PQ9ubuuXzCJ7t9ZCWp4veA',1000000,56358),(68,'AIzaSyBD90uu3IzYsyDGMfiyISheZq520_BUNfw',1000000,59782),(69,'AIzaSyAqDF-oa3obrhraM1oibK7PRgqOlrsVe3k',1000000,50920),(70,'AIzaSyCse8l-53J27MILORZ18ruWDQs3iHs8e_A',1000000,49826),(71,'AIzaSyDjsLetm1_zB3pbXzpYvWlVBPKzNqL_OEc',1000000,58560),(72,'AIzaSyBYUeipMPJjMhDgmk4T8gtd-SJwPeIpygY',1000000,60436),(75,'AIzaSyDpRMHMGNvbH1Tp7IdY1IRPBLGIap2hNNs',1000000,54070),(76,'AIzaSyBT4Xlqjezcy3Redikl4qlx39ZQt2-McyI',1000000,59626),(77,'AIzaSyAngm1JABYhCvxVxjm6rCozFhvknDjieW8',1000000,52066),(78,'AIzaSyDKwu2InKwx3NM_49igFg_9w_KSCxuorsk',1000000,55202),(79,'AIzaSyBCRxnUnnp3lskbWSDNKSnYdeWjQLILOFA',1000000,58938),(80,'AIzaSyDtaMvWyCDZN6q1vY8vo6aN2cKxE9JJ4QA',1000000,54490);
/*!40000 ALTER TABLE `ytapi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-13  8:35:08
