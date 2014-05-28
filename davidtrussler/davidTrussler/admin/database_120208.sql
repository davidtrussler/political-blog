-- MySQL dump 10.13  Distrib 5.1.46, for suse-linux-gnu (x86_64)
--
-- Host: localhost    Database: gimaju
-- ------------------------------------------------------
-- Server version	5.1.46-log

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
-- Table structure for table `blog_authors`
--

DROP TABLE IF EXISTS `blog_authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_authors` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  PRIMARY KEY (`author_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_authors`
--

LOCK TABLES `blog_authors` WRITE;
/*!40000 ALTER TABLE `blog_authors` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_comments`
--

DROP TABLE IF EXISTS `blog_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_comments` (
  `commentId` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` tinytext,
  `email` tinytext,
  `website` tinytext,
  `postId` int(11) DEFAULT NULL,
  `body` text,
  `title` tinytext,
  `notify` tinytext,
  PRIMARY KEY (`commentId`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_comments`
--

LOCK TABLES `blog_comments` WRITE;
/*!40000 ALTER TABLE `blog_comments` DISABLE KEYS */;
INSERT INTO `blog_comments` VALUES (1,'2011-07-17 15:34:20','Lewis Davis','mail@davidtrussler.net','web.net',8,'I am not concerned','This is the title','false'),(49,'2011-07-17 15:34:20','me','mail@davidtrussler.net','',7,'this isn\'t really a comment','','false'),(3,'2011-07-17 15:34:20','Miles Davis','lewis@davidson.com','web.net',8,'I really am concerned','This is the title','false'),(4,'2011-07-17 15:34:20','Miles Lewis','david@lewis.com','web.net',8,'I am awfully concerned.','This is the title','false'),(5,'2011-07-17 15:34:20','Joe Blogs','blog@blogworld.com','web.net',6,'Here is a new comment about this post.','This is the title','false'),(6,'2011-07-17 15:34:20','Joe Blogs','blog@blogworld.com','web.net',6,'Here is a new comment about this post.','This is the title','false'),(7,'2011-07-17 15:34:20','Lew Miles','lew@miles.com','web.net',8,'This is a comment to say that I really could not care less!','This is the title','false'),(19,'2011-07-17 15:34:20','trane','tranemail',NULL,8,'i\'m trane','This is the title','false'),(12,'2011-07-17 15:34:20','name','email','web.net',4,'comment','This is the title','false'),(17,'2011-07-17 15:34:20','Miles','milesmail',NULL,8,'I\'m miles','This is the title','false'),(18,'2011-07-17 15:34:20','David','davidmail',NULL,8,'i\'m david','This is the title','false'),(15,'2011-07-17 15:34:20','My name','My email ','web.net',4,'My comment. </p><p>Here it is. </p><p>It\'s on four lines. </p><p>It\'s got apostrophes. ','This is the title','false'),(16,'2011-07-17 15:34:20','Autechre','mail',NULL,1,'Hey you\'ve   taken  our   title             idea!</p><p>You are a \"bastard\" and no mistake!!</p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p>Loads of lines later.','This is the title','false'),(20,'2011-07-17 15:34:20','David Trussler','email',NULL,7,'David Trussler is ace','This is the title','false'),(21,'2011-07-17 15:34:20','David Trussler','email',NULL,7,'David Trussler is ace','This is the title','false'),(22,'2011-07-17 15:34:20','David Trussler','',NULL,7,'David Trussler is ace','This is the title','false'),(23,'2011-07-17 15:34:20','David Trussler','',NULL,7,'David Trussler is still ace','This is the title','false'),(24,'2011-07-17 15:34:20','Anti-autechre','aa@aa.com',NULL,1,'Yeah well, I bet you didn\'t think of it even, did you.</p><p></p><p>I bet it was an errer!','This is the title','false'),(25,'2011-07-17 15:34:20','Judes','',NULL,1,'I think this is the best blog I\'ve ever read!</p><p>','This is the title','false'),(26,'2011-07-17 15:34:20',NULL,NULL,NULL,NULL,NULL,'This is the title','false'),(27,'2011-07-17 15:34:20',NULL,NULL,NULL,NULL,NULL,'This is the title','false'),(28,'2011-07-17 15:34:20','David Trussler','lew@miles.com',NULL,4,'<p>the comment</p>','The title of the comment','false'),(29,'2011-07-17 15:34:20','name','email','website',8,'<p>my comment</p>','','false'),(30,'2011-07-17 15:34:20','name','email','website',8,'<p>my comment</p>','','false'),(31,'2011-07-17 15:34:20','name','','',8,'<p>comment</p>','','false'),(32,'2011-07-17 15:34:20','Dave lewy','mail@lewy.com','',7,'<p>this is me speaking</p>','lewy speaks','false'),(33,'2011-07-17 15:34:20','David Trussler','mail@davidtrussler.net','www.davidtrussler.net',7,'<p>This is a pretty meaningless comment.</p>','My comment','false'),(34,'2011-07-17 15:34:20','David Trussler','mail@davidtrussler.net','www.davidtrussler.net',7,'Right, I\'ve done my bit now get yer finger out!','Comment','false'),(35,'2011-07-17 15:34:20','David Trussler','mail@davidtrussler.net','www.davidtrussler.net',9,'This is my comment','My comment','false'),(47,'2011-07-17 15:34:20','me','mail@davidtrussler.net','',7,'this isn\'t really a comment','','false'),(48,'2011-07-17 15:34:20','me','mail@davidtrussler.net','',7,'this isn\'t really a comment','','false'),(42,'2011-07-17 15:34:20','sdsd','sd@sdf.co','',4,'This is my comment. It\'s not that long. \nBut it\'s ling enouth to makesure that the text overflows the bos and thereby tests the esxpanding box. Yes that seems to work ok. I\'ll jyst typw a bit more to check. ','','false'),(43,'2011-07-17 15:34:20','sdsd','sd@sdf.co','',4,'This is my comment. It\'s not that long. \nBut it\'s ling enouth to makesure that the text overflows the bos and thereby tests the esxpanding box. Yes that seems to work ok. I\'ll jyst typw a bit more to check. ','','false'),(50,'2011-07-17 15:34:20','me','mail@davidtrussler.net','',7,'this isn\'t really a comment','','false'),(55,'2011-07-17 15:34:20','n','n@n.net','',10,'comment','','false'),(52,'2011-07-17 15:34:20','wer','wer@df.co','',10,'asdadasdsa','','false'),(53,'2011-07-17 15:34:20','Michael Caine','mail@davidtrussler.net','',10,'This is my comment. Hope you like it.','','false'),(54,'2011-07-17 15:34:20','name','name@name.com','',10,'comment','','false'),(56,'2011-07-17 15:34:20','dkh','mail@davidtrussler.net','',10,'comment','','false'),(57,'2011-07-17 15:34:20','n','a@b.com','',10,'comment','','false'),(58,'2011-07-17 15:34:20','a','a@b.com','',10,'comment','','false'),(59,'2011-07-17 15:35:45','name','mail@davidtrussler.net','',10,'comment','','true'),(60,'2011-07-17 16:12:53','name','mail@davidtrussler.net','',10,'my comment','','true'),(61,'2011-07-17 16:30:29','name','mail@gimaju.net','',10,'comment','','true'),(62,'2011-07-17 16:30:50','name','email@email.com','',10,'comment','','true'),(63,'2011-07-17 16:32:33','name','mail@davidtrussler.net','',10,'comment','','true'),(64,'2011-07-17 16:33:28','nam','mail@davidtrussler.net','',10,'comment','','true'),(65,'2011-07-17 16:35:10','name','mail@gimaju.net','',10,'comment','','true'),(66,'2011-08-08 20:28:37','name','mail@davidtrussler.net','',74,'comment','','true'),(67,'2011-08-08 20:31:20','name','mail@davidtrussler.net','',74,'comment','','false'),(68,'2011-08-08 20:48:41','name','mail@dadvidtrussler.net','',74,'ommentcm','','false');
/*!40000 ALTER TABLE `blog_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_posts` (
  `postId` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` tinytext,
  `body` text,
  PRIMARY KEY (`postId`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (3,'2010-11-10 22:32:38','Hello World','this is some content'),(4,'2010-11-10 22:32:38','Hello World','Here is come content for the fourth post'),(5,'2010-12-10 22:32:38','Hello World','this is some new content'),(6,'2010-12-10 22:32:38','even newer post','content of the even bewer post'),(7,'2011-04-24 17:41:08','Thursday Afternoon','<p>This post was made on Thursday Afternoon. It was a really nice day. But the next day was even nicer. <span id=\"cut\"></span>And the day after that was even nicer still.</p>'),(8,'2011-01-01 22:32:38','AfternoonTea','I always have tea in the afternoon.'),(9,'2011-04-24 17:25:35','new title','<p>This is the body isn\'t it?<span id=\"cut\"></span></p>\n<p>Yes it is.</p>'),(10,'2011-06-14 20:26:54','new post','body of new post'),(74,'2011-07-30 19:57:27','Newest post to test rss feed','This is the first sentence of the new post. This is the second sentence which shouldn\'t appear on the feed as it is currently set to show the first sentence only. This is the third sentence - if this shows up in the feed then something really has gone pear-shaped.');
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_tag_names`
--

DROP TABLE IF EXISTS `blog_tag_names`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_tag_names` (
  `tagNameId` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  PRIMARY KEY (`tagNameId`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_tag_names`
--

LOCK TABLES `blog_tag_names` WRITE;
/*!40000 ALTER TABLE `blog_tag_names` DISABLE KEYS */;
INSERT INTO `blog_tag_names` VALUES (1,'hello'),(2,'goodbye'),(3,'three'),(4,'fourth'),(5,'firth'),(6,'hexagon'),(7,'devil'),(8,'achtung'),(9,'neuf'),(10,'Thursday'),(11,'Wednesday'),(30,'attention'),(29,'old'),(20,'u2'),(19,'baby');
/*!40000 ALTER TABLE `blog_tag_names` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_tags`
--

DROP TABLE IF EXISTS `blog_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_tags` (
  `tagId` int(11) NOT NULL AUTO_INCREMENT,
  `tagNameId` int(11) DEFAULT NULL,
  `postId` int(11) DEFAULT NULL,
  PRIMARY KEY (`tagId`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_tags`
--

LOCK TABLES `blog_tags` WRITE;
/*!40000 ALTER TABLE `blog_tags` DISABLE KEYS */;
INSERT INTO `blog_tags` VALUES (1,1,8),(2,2,8),(3,3,8),(4,4,8),(5,5,8),(6,6,6),(7,7,6),(8,8,6),(9,9,6),(27,11,7),(26,7,7),(12,8,7),(13,8,5),(14,9,5),(15,6,5),(16,6,4),(17,2,4),(18,7,4),(19,7,3),(20,3,4),(21,4,4),(23,6,3),(24,19,7),(25,20,7),(35,29,9),(34,19,9),(33,8,9),(36,9,9),(37,30,9),(38,8,10),(39,30,10),(40,8,11),(41,8,12),(42,8,74);
/*!40000 ALTER TABLE `blog_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `email` tinytext COLLATE utf8_unicode_ci,
  `password` tinytext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'judes@gimaju.net','rlTOPPtRs7tPM');
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

-- Dump completed on 2012-02-08 18:01:56
