-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2018 at 05:55 AM
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
-- Database: `product_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(50) NOT NULL,
  `name` varchar(201) NOT NULL,
  `genre` varchar(51) NOT NULL,
  `rating` varchar(21) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `imgpath` varchar(501) DEFAULT 'images/default.jpg',
  `imdbpath` varchar(201) DEFAULT NULL,
  `bookpath` varchar(101) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `genre`, `rating`, `price`, `imgpath`, `imdbpath`, `bookpath`) VALUES
(1, 'The Nutcracker and the Four Realms', 'Adventure , Family , Fantasy', 'PG', '24.99', 'images/Movies_1.jpg', 'https://www.imdb.com/title/tt5523010/', 'book.php?book=m1'),
(2, 'Fantastic Beasts: The Crimes of Grindelwald', ' Adventure , Family , Fantasy', 'PG-13', '24.99', 'images/Movies_2.jpg', 'https://www.imdb.com/title/tt4123430/', 'book.php?book=m2'),
(3, 'Venom', ' Action , Sci-Fi', 'PG-13', '19.99', 'images/Movies_3.jpg', 'https://www.imdb.com/title/tt1270797/', 'book.php?book=m3'),
(4, 'The Equalizer 2', 'Action , Crime , Thriller', 'R', '24.99', 'images/Movies_4.jpg', 'https://www.imdb.com/title/tt3766354/', 'book.php?book=m4'),
(5, 'Mission: Impossible - Fallout', 'Action , Adventure , Thriller', 'PG-13', '19.99', 'images/Movies_5.jpg', 'https://www.imdb.com/title/tt4912910/', 'book.php?book=m5'),
(6, 'The Nun', 'Horror , Mystery , Thriller', 'R', '19.99', 'images/Movies_6.jpg', 'https://www.imdb.com/title/tt5814060/', 'book.php?book=m6'),
(7, 'Ant Man and the Wasp', 'Action , Adventure , Comedy', 'PG-13', '17.99', 'images/Movies_7.jpg', 'https://www.imdb.com/title/tt5095030/', 'book.php?book=m7'),
(8, 'Ralph Breaks the Internet', 'Animation , Adventure , Comedy', 'PG', '24.99', 'images/Movies_8.jpg', 'https://www.imdb.com/title/tt5848272/', 'book.php?book=m8'),
(9, 'Incredibles Combo', 'Animation , Action , Adventure', 'PG', '29.99', 'images/Movies_9.jpg', 'https://www.imdb.com/title/tt3606756/', 'book.php?book=m9');

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

DROP TABLE IF EXISTS `tv`;
CREATE TABLE IF NOT EXISTS `tv` (
  `id` int(50) NOT NULL,
  `name` varchar(201) NOT NULL,
  `genre` varchar(51) NOT NULL,
  `rating` varchar(21) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `imgpath` varchar(501) DEFAULT 'images/default.jpg',
  `imdbpath` varchar(201) DEFAULT NULL,
  `bookpath` varchar(101) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`id`, `name`, `genre`, `rating`, `price`, `imgpath`, `imdbpath`, `bookpath`) VALUES
(1, 'Sherlock', 'Crime , Drama , Mystery', 'PG-14', '14.99', 'images/TV_1.jpg', 'https://www.imdb.com/title/tt1475582/', 'book.php?book=t1'),
(2, 'Rick and Morty', 'Animation , Adventure , Comedy', 'MA', '14.99', 'images/TV_2.jpg', 'https://www.imdb.com/title/tt2861424/', 'book.php?book=t2'),
(3, 'Stranger Things', 'Drama , Fantasy , Horror', 'PG-14', '19.99', 'images/TV_3.jpg', 'https://www.imdb.com/title/tt4574334/', 'book.php?book=t3'),
(4, 'Mars', 'Adventure , Drama , Sci-Fi', 'PG', '19.99', 'images/TV_4.jpg', 'https://www.imdb.com/title/tt4939064/', 'book.php?book=t4'),
(5, 'Silicon Valley', 'Comedy', 'MA', '14.99', 'images/TV_5.jpg', 'https://www.imdb.com/title/tt2575988/', 'book.php?book=t5'),
(6, 'Daredevil', 'Action , Crime , Drama', 'MA', '19.99', 'images/TV_6.jpg', 'https://www.imdb.com/title/tt3322312/', 'book.php?book=t6'),
(7, 'Breaking Bad', 'Crime , Drama , Thriller', 'MA', '14.99', 'images/TV_7.jpg', 'https://www.imdb.com/title/tt0903747/', 'book.php?book=t7'),
(8, 'Friends', 'Comedy , Romance', 'PG-14', '29.99', 'images/TV_8.jpg', 'https://www.imdb.com/title/tt0108778/', 'book.php?book=t8'),
(9, 'The Flash', 'Action , Adventure , Drama', 'PG', '17.99', 'images/TV_9.jpg', 'https://www.imdb.com/title/tt3107288/', 'book.php?book=t9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
