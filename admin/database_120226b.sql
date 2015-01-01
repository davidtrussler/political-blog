-- MySQL dump 10.13  Distrib 5.1.46, for suse-linux-gnu (x86_64)
--
-- Host: localhost    Database: davidtrussler
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_comments`
--

LOCK TABLES `blog_comments` WRITE;
/*!40000 ALTER TABLE `blog_comments` DISABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (1,'2012-02-12 12:27:22','Racism in football&#8212;how much has changed?','<p>Two recent high-profile incidents in English football have raised the spectre once again of racism in the sport. One is the forthcoming trial of Chelsea&#8217;s John Terry on charges of racially abusing an opponent. The other is the similar incident involving Luis Su&#225;rez and Patrice Evra of Liverpool and Manchester United respectively.</p>\n\n<p>The first of these became even more significant when it apparently forced the resignation of the coach of the English national team, Fabio Capello, over the decision of the FA to strip Terry of the captaincy pending his trial. The latter incident became even more highly-charged yesterday when, only a few days after Su&#225;rez completed an eight-match ban for the incident, Liverpool and Manchester United met in a League match and Su&#225;rez refused the customary pre-match handshake with Evra. This brought harsh words from United manager Alex Ferguson, who went on to suggest that Liverpool Football Club have a particular problem with racism. Liverpool manager Kenny Dalglish on the other hand continued to support his player.</p>\n\n<p>As a football club, Liverpool certainly have a case to answer. The insistence, by Dalglish in particular, that Su&#225;rez remained innocent throughout all the proceedings was shameful and made the situation worse. The response of the club has continued to be one of playing the victim. When the squad and manager emerged pre-match in t-shirts proclaiming their support for the player shortly after the ban was imposed one&#8217;s heart could only sink with the recognition that the club just didn&#8217;t get it. Their actions have done much to ensure that racism has been shown to be alive within football despite the efforts of many and the very real progress the game has made over the last couple of decades.</p>\n\n<p>For me, and this appeared to be what Ferguson had in mind when he spoke of the history of racism in Liverpool, my mind went back some twenty three years and the publication of <span class=\"namedTitle\"><a href=\"http://www.wsc.co.uk/component/page,shop.product_details/flypage,shop.flypage/product_id,47/category_id,9/manufacturer_id,0/option,com_virtuemart/Itemid,67/\" class=\"newWindow\">Out of His Skin</a></span>, by Dave Hill. This fine book, republished by WSC Books in 2001, described the arrival of John Barnes at Anfield and cleverly interwove this with Barnes&#8217; relatively privileged upbringing, the history of Liverpool as a port with its connections to the slave trade and the city&#8217;s accompanying racism, which manifested itself in two clubs&#8212;Everton as well as Liverpool&#8212;who were always painfully slow to accept black players as part of the modern game. The significance, at the time, of Liverpool signing a black player (though Barnes was not in fact the first) is hard to imagine today. The books tells of Liverpool fans going to games at Goodison Park rather than watch their team field a black player. And the cover shows Barnes deftly back-heeling a banana from the pitch which had been thrown at him from the crowd.</p>\n\n<p>The book caused quite some unease at Liverpool Football Club on its publication. Quotes from Kop hero Tommy Smith which appeared in the book particularly illustrate the problem. In an interview he gave to Hill, his casual racism was shocking and, in an <a href=\"http://www.wsc.co.uk/content/view/1123/38/\" class=\"newWindow\">introduction to the new edition</a>, Hill describes how both Smith and Liverpool chairman at the time Peter Robinson responded. Smith threatened legal action, whilst remaining bewildered as to what he had actually done wrong, whilst Robinson declined to speak to him saying &#8220;when someone throws a brick through your window, you don&#8217;t invite them in for a cup of tea&#8221;.</p>\n\n<p>It is alarming how, despite the giant strides that have been made since, the Su&#225;rez incident suggest some of the fundamental problems remain. The parallels with Dalglish today are uneasy to say the least. The siege mentality that has sprung up at the club, their insistence on themselves and their player as being the victim in the whole affair and, above all, their seeming to remain unaware that they have done anything wrong make uncomfortable parallels with those far off, shameful days.</p>\n\n<p>Never has there been a more appropriate time for that book to be re-read.</p>'),(2,'2012-02-26 21:14:32','Why I won&#8217;t be buying <span class=\"namedTitle\">The Sun on Sunday</span>','<p>From today a new title can be found on Britain&#8217;s news-racks. Called <span class=\"namedTitle\">The Sun on Sunday</span> it is, depending on your point of view, a Sunday version of Britain&#8217;s favourite daily or the now defunct <span class=\"namedTitle\">News of the World</span> under a different name. Featuring columnists as wide-ranging as Katie Price, Nancy Dell&#8217;Olio and Toby Young it&#8217;s clearly a mix of celebrity-obsessed trivia and right-wing tub-thumping. Even the Archbishop of York, John Sentamu, has signed up and his truly bizarre first column (reproduced on his own <a class=\"newWindow\" href=\"http://www.archbishopofyork.org/articles.php/2366/celebrating-new-beginnings\">website</a>) is as close as you&#8217;ll get to God himself giving the project the thumbs up.</p>\n\n<p>Needless to say, a paper from the News International stable, released just seven months after the closure of the <span class=\"namedTitle\">News of the World</span> following the disclosure of its phone-hacking activities, was always going to draw opposition. And so it has. People have pledged not to buy it for a number of reasons. Because <span class=\"namedTitle\">The Sun</span> and the <span class=\"namedTitle\">News of the World</span> between them have trivialised our media with an obsession with celebrity culture, because of the phone-hacking scandal&#8212;particularly that concerning Millie Dowler&#8212;or because of the power of these papers which has reached far into successive UK governments. In Liverpool <span class=\"namedTitle\">The Sun</span>&#8217;s reporting after the Hillsborough disaster has ensured that it retains the enmity of those who lost loved ones on that day.</p>\n\n<p>For me it&#8217;s a bit more personal. Twenty six years ago Rupert Murdoch moved the production of four British newspaper titles&#8212;<span class=\"namedTitle\">The Sun</span>, the <span class=\"namedTitle\">Times</span>, <span class=\"namedTitle\">News of the World</span> and <span class=\"namedTitle\">Sunday Times</span>&#8212;into a purpose-built plant at Wapping, East London. As part of the move he sacked 6,000 printers, journalists and other staff and employed non-union labour to replace them, largely helped by the electricians union, EEPTU, led by Eric Hammond in a move that would see them thrown out of the TUC.</p>\n\n<p>I was just starting work in the print industry and was a member of the National Graphical Association (NGA). This union, together with SOGAT and the NUJ, led the protests against Murdoch. This dispute, following the miners&#8217; strike a couple of years before, had a significance outside the print industry. It was all part of the agenda of the Thatcher government to roll back the influence of the trade unions from British industry&#8212;an ideological battle that for me was a fundamental attack on core beliefs.</p>\n\n<p>I participated in protests outside the plant a few times but it was clear that this was an operation planned with military precision and, with the assistance of Her Majesty&#8217;s Constabulary, there was only going to be one winner. And, after a year, so it proved as Murdoch emerged victorious. The new plant was built like a fortress, surrounded by razor wire and the surrounding streets were used as a maze from which lorries would periodically emerge into streets cleared by the police bearing the provocative slogan &#8220;<span class=\"namedTitle\">The Sun</span> keeps on trucking&#8221;. That&#8217;s the thing about people like Murdoch: not only was he carrying out Thatcher&#8217;s agenda, he just had to rub your nose in it as well.</p>\n\n<p>Of course there have been industrial disputes before and since and a temporary boycott of this or that product seems to be part of my daily life. But this one just won&#8217;t go away. Logically I tell myself to let it go but I still shudder when I see someone buying one of those titles. And to make matters worse, Murdoch has continued his grip on our cultural life with his ownership of Sky, and through that the slow strangulation, in my view, of English football. There can be very few people in the UK that don&#8217;t put a little bit of money into this man&#8217;s pocket.</p>\n\n<p>So, should I let this go? Probably. But Murdoch has a unique place in my personal rogues&#8217; gallery. And a world that is prepared to allow someone like him to have so much influence and control over so much of peoples&#8217; lives is a world that has a long way to go.<p>');
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_tag_names`
--

LOCK TABLES `blog_tag_names` WRITE;
/*!40000 ALTER TABLE `blog_tag_names` DISABLE KEYS */;
INSERT INTO `blog_tag_names` VALUES (1,'football'),(2,'racism'),(3,'Liverpool'),(4,'politics'),(5,'Sun on Sunday'),(6,'Rupert Murdoch');
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_tags`
--

LOCK TABLES `blog_tags` WRITE;
/*!40000 ALTER TABLE `blog_tags` DISABLE KEYS */;
INSERT INTO `blog_tags` VALUES (1,1,1),(2,2,1),(3,3,1),(4,4,2),(5,5,2),(6,6,2);
/*!40000 ALTER TABLE `blog_tags` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-02-26 21:15:57
