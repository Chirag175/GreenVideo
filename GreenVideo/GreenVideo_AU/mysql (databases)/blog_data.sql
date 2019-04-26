-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2018 at 09:52 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

DROP TABLE IF EXISTS `admindata`;
CREATE TABLE IF NOT EXISTS `admindata` (
  `name_admin` varchar(501) NOT NULL,
  `email_admin` varchar(301) NOT NULL,
  `pass_admin` varchar(201) NOT NULL,
  PRIMARY KEY (`email_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`name_admin`, `email_admin`, `pass_admin`) VALUES
('Chirag Tamhane', 'chiragtam175@gmail.com', 'chirag123'),
('Tom Cruise', 'tomcruise1962@gmail.com', '19cruisetom62'),
('Robert Downey Jr.', 'robertdowney1965@gmail.com', '19downeyrobert65'),
('Selena Gomez', 'selenagomez1992@gmail.com', '19gomezselena92');

-- --------------------------------------------------------

--
-- Table structure for table `blogposts`
--

DROP TABLE IF EXISTS `blogposts`;
CREATE TABLE IF NOT EXISTS `blogposts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(301) NOT NULL,
  `time_date` varchar(201) NOT NULL,
  `title` varchar(501) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogposts`
--

INSERT INTO `blogposts` (`id`, `email`, `time_date`, `title`, `content`) VALUES
(12, 'robertdowney1965@gmail.com', '8:17:50am @ 14/12/2018', 'Isn\'t it time for some Iron Man?', '<p>Everyone, I think it\'s time for some Iron Man action! How many years has it been since we witnessed the first movie? Let me tell you, not a few years but an entire decade has passed since Iron Man 1. And since the last movie in the franchise? Still 5 years! So, yes! We definitely need a recap before we can jump onto the new one, the latest one and trust me, the best one! So, to take a quick look, here is the summary of the entire franchise until now, all in just 12 minutes and then after you watch it, let me share with you a sneak peak of something cool. </p>\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/NUk4bW3dHmo?controls=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n<p>So, that now you\'ve seen the summary, it\'s time for a good news and a bad news. Let\'s start with the bad news, so that we can end with the good one. Iron Man 4 may or may not happen and even if it does, I may or may not be in it. But, the movie below is for sure gonna arrive in your nearest theatres and I\'m for sure in it. Take a look for yourselves and get the hype train rolling!</p>\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/wuOvmyuYFMo?controls=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, 'chiragtam175@gmail.com', '07:32:13pm @ 13/12/2018', 'What is this place all about? (included instructions and guidelines)', '<p>The <a href=\'blog.php\'> blog </a> section of the GreenVideo website is dedicated to display updates regarding upcoming movies and tv shows to our catalog as well as to the brand plus discounts and sales would be something to look out for. Along with reviews and audience feedback on new movies and new seasons of tv shows, there would also be FAQs and Fun Facts about the website and the brand. And much more coming soon!</p>\r\n<p>\r\nAlso, the login/signup option that appears on the homepage and all other pages is for customers of GreenVideo whereas the login option that appears on the blog page and other blog-related pages are for admins only where registered users can <a href=\'adminaccount.php\'>login</a> and write a post similar to the way I just did.</p>\r\n<p>\r\nQuick Tip! You can write and edit your content just as you would in an HTML document. You\'re free to insert images and videos (as long as they abide by our guidelines) in the way you want.\r\n</p>'),
(11, 'selenagomez1992@gmail.com', '10:00:30pm @ 13/12/2018', 'Are you hyped for Toy Story 4?!', '<p>For those who don\'t know anything about Toy Story, the franchise is all about Toys coming to life for an epic adventure. Seriously, that\'s the entire franchise summarised in a sentence. However, it\'s also an experience that you can\'t really explain and understand without actually becoming a part of it for which the franchise is popular for. It almost feels that you\'re on the ground level (and also beyond infinity) with those toys prancing around.</p>\r\n<p> Again, the best thing about the franchise is it\'s diverse cast of unique characters. Each character has something to say, a story to tell. For a quick go-through on the entire franchise until now, visit this <a href=\'https://www.youtube.com/watch?v=JHutd0VPkz8\'>link!</a> BEWARE OF SPOILERS</p>\r\n<p> Even though, not a lot is known about the upcoming Toy Story but it\'s release date is rumoured to be June 21, 2019 after being delayed for two (long - for me and other fans &#9785; ) years with the original voice actors coming back to bring back the good ol\' Toy Story we all are waiting for. Now, what this means for GreenVideo customers is that you guys will be able to watch the movie at home in full 4K as the Blu-ray copy of the movie will be available for purchase and rental 2 weeks after the release. So, stay tuned for that!</p>\r\nFinally, before leaving, here is an exclusive teaser trailer of Toy Story 4.<br> <div style=\'float: left;\'> <iframe width=\"560\" height=\"315\" src=\"https://www.youtube-nocookie.com/embed/LDXYRzerjzU?controls=0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></div><br><br><br><br><br><br><br><br><br><br><br><br>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
