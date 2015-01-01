-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2012 at 09:12 PM
-- Server version: 5.0.92
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `davidtru_davidtrussler`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_authors`
--

CREATE TABLE IF NOT EXISTS `blog_authors` (
  `author_id` int(11) NOT NULL auto_increment,
  `name` tinytext,
  PRIMARY KEY  (`author_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE IF NOT EXISTS `blog_comments` (
  `commentId` int(11) NOT NULL auto_increment,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `author` tinytext,
  `email` tinytext,
  `website` tinytext,
  `postId` int(11) default NULL,
  `body` text,
  `title` tinytext,
  `notify` tinytext,
  PRIMARY KEY  (`commentId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE IF NOT EXISTS `blog_posts` (
  `postId` int(11) NOT NULL auto_increment,
  `timestamp` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `title` tinytext,
  `body` text,
  PRIMARY KEY  (`postId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postId`, `timestamp`, `title`, `body`) VALUES
(1, '2012-02-12 12:27:22', 'Racism in football&#8212;how much has changed?', '<p>Two recent high-profile incidents in English football have raised the spectre once again of racism in the sport. One is the forthcoming trial of Chelsea&#8217;s John Terry on charges of racially abusing an opponent. The other is the similar incident involving Luis Su&#225;rez and Patrice Evra of Liverpool and Manchester United respectively.</p>\n\n<p>The first of these became even more significant when it apparently forced the resignation of the coach of the English national team, Fabio Capello, over the decision of the FA to strip Terry of the captaincy pending his trial. The latter incident became even more highly-charged yesterday when, only a few days after Su&#225;rez completed an eight-match ban for the incident, Liverpool and Manchester United met in a League match and Su&#225;rez refused the customary pre-match handshake with Evra. This brought harsh words from United manager Alex Ferguson, who went on to suggest that Liverpool Football Club have a particular problem with racism. Liverpool manager Kenny Dalglish on the other hand continued to support his player.</p>\n\n<p>As a football club, Liverpool certainly have a case to answer. The insistence, by Dalglish in particular, that Su&#225;rez remained innocent throughout all the proceedings was shameful and made the situation worse. The response of the club has continued to be one of playing the victim. When the squad and manager emerged pre-match in t-shirts proclaiming their support for the player shortly after the ban was imposed one&#8217;s heart could only sink with the recognition that the club just didn&#8217;t get it. Their actions have done much to ensure that racism has been shown to be alive within football despite the efforts of many and the very real progress the game has made over the last couple of decades.</p>\n\n<p>For me, and this appeared to be what Ferguson had in mind when he spoke of the history of racism in Liverpool, my mind went back some twenty three years and the publication of <span class="namedTitle"><a href="http://www.wsc.co.uk/component/page,shop.product_details/flypage,shop.flypage/product_id,47/category_id,9/manufacturer_id,0/option,com_virtuemart/Itemid,67/" class="newWindow">Out of His Skin</a></span>, by Dave Hill. This fine book, republished by WSC Books in 2001, described the arrival of John Barnes at Anfield and cleverly interwove this with Barnes&#8217; relatively privileged upbringing, the history of Liverpool as a port with its connections to the slave trade and the city&#8217;s accompanying racism, which manifested itself in two clubs&#8212;Everton as well as Liverpool&#8212;who were always painfully slow to accept black players as part of the modern game. The significance, at the time, of Liverpool signing a black player (though Barnes was not in fact the first) is hard to imagine today. The books tells of Liverpool fans going to games at Goodison Park rather than watch their team field a black player. And the cover shows Barnes deftly back-heeling a banana from the pitch which had been thrown at him from the crowd.</p>\n\n<p>The book caused quite some unease at Liverpool Football Club on its publication. Quotes from Kop hero Tommy Smith which appeared in the book particularly illustrate the problem. In an interview he gave to Hill, his casual racism was shocking and, in an <a href="http://www.wsc.co.uk/content/view/1123/38/" class="newWindow">introduction to the new edition</a>, Hill describes how both Smith and Liverpool chairman at the time Peter Robinson responded. Smith threatened legal action, whilst remaining bewildered as to what he had actually done wrong, whilst Robinson declined to speak to him saying &#8220;when someone throws a brick through your window, you don&#8217;t invite them in for a cup of tea&#8221;.</p>\n\n<p>It is alarming how, despite the giant strides that have been made since, the Su&#225;rez incident suggest some of the fundamental problems remain. The parallels with Dalglish today are uneasy to say the least. The siege mentality that has sprung up at the club, their insistence on themselves and their player as being the victim in the whole affair and, above all, their seeming to remain unaware that they have done anything wrong make uncomfortable parallels with those far off, shameful days.</p>\n\n<p>Never has there been a more appropriate time for that book to be re-read.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE IF NOT EXISTS `blog_tags` (
  `tagId` int(11) NOT NULL auto_increment,
  `tagNameId` int(11) default NULL,
  `postId` int(11) default NULL,
  PRIMARY KEY  (`tagId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`tagId`, `tagNameId`, `postId`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag_names`
--

CREATE TABLE IF NOT EXISTS `blog_tag_names` (
  `tagNameId` int(11) NOT NULL auto_increment,
  `name` tinytext,
  PRIMARY KEY  (`tagNameId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog_tag_names`
--

INSERT INTO `blog_tag_names` (`tagNameId`, `name`) VALUES
(1, 'football'),
(2, 'racism'),
(3, 'Liverpool');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
