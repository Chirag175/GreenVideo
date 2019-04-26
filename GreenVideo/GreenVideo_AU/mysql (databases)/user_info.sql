-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2019 at 07:54 AM
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
-- Database: `user_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `name` varchar(201) NOT NULL,
  `email` varchar(201) NOT NULL,
  `phone` varchar(21) DEFAULT NULL,
  `subject` varchar(201) NOT NULL,
  `message` varchar(2001) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`name`, `email`, `phone`, `subject`, `message`) VALUES
('Chirag Tamhane', 'chiragtam175@gmail.com', '0370105678', 'Amazing Service!!', 'We would like to know that your service is amazing.');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

DROP TABLE IF EXISTS `order_list`;
CREATE TABLE IF NOT EXISTS `order_list` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(11) NOT NULL,
  `booktype` varchar(51) NOT NULL,
  `date` varchar(51) NOT NULL,
  `email` varchar(101) DEFAULT NULL,
  `phone` varchar(51) DEFAULT NULL,
  `add_1` varchar(501) DEFAULT NULL,
  `add_2` varchar(501) DEFAULT NULL,
  `city` varchar(51) DEFAULT NULL,
  `state` varchar(51) DEFAULT NULL,
  `zipcode` varchar(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=153 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_id`, `product_id`, `booktype`, `date`, `email`, `phone`, `add_1`, `add_2`, `city`, `state`, `zipcode`) VALUES
(36, 't2', 'Buy - 14.99 AUD', '12 / December / 2018 - Wednesday', 'chiragtam175@gmail.com', '0370105678', '6 Cambridge Street', 'MCGRATHS HILL - 2756', 'MCGRATHS HILL', 'NSW', '2756');

-- --------------------------------------------------------

--
-- Table structure for table `user_details_au`
--

DROP TABLE IF EXISTS `user_details_au`;
CREATE TABLE IF NOT EXISTS `user_details_au` (
  `fname` varchar(51) NOT NULL,
  `lname` varchar(51) NOT NULL,
  `email` varchar(201) NOT NULL,
  `phone` varchar(21) DEFAULT NULL,
  `bdate` varchar(51) NOT NULL,
  `gender` varchar(21) NOT NULL,
  `add_1` varchar(501) NOT NULL,
  `add_2` varchar(501) DEFAULT NULL,
  `city` varchar(201) NOT NULL,
  `state` varchar(201) NOT NULL,
  `zipcode` varchar(21) NOT NULL,
  `pass` varchar(201) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details_au`
--

INSERT INTO `user_details_au` (`fname`, `lname`, `email`, `phone`, `bdate`, `gender`, `add_1`, `add_2`, `city`, `state`, `zipcode`, `pass`) VALUES
('Chirag', 'Tamhane', 'chiragtam175@gmail.com', '0370105678', '2000-02-29', 'Male', '6 Cambridge Street', 'MCGRATHS HILL - 2756', 'MCGRATHS HILL', 'NSW', '2756', 'chirag123');

-- --------------------------------------------------------

--
-- Table structure for table `user_details_int`
--

DROP TABLE IF EXISTS `user_details_int`;
CREATE TABLE IF NOT EXISTS `user_details_int` (
  `fname` varchar(51) NOT NULL,
  `lname` varchar(51) NOT NULL,
  `email` varchar(201) NOT NULL,
  `phone` varchar(21) DEFAULT NULL,
  `bdate` varchar(51) NOT NULL,
  `gender` varchar(21) NOT NULL,
  `add_1` varchar(501) NOT NULL,
  `add_2` varchar(501) DEFAULT NULL,
  `city` varchar(201) NOT NULL,
  `state` varchar(201) NOT NULL,
  `zipcode` varchar(21) NOT NULL,
  `countrycode` int(11) NOT NULL,
  `country` varchar(3) NOT NULL,
  `pass` varchar(201) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details_int`
--

INSERT INTO `user_details_int` (`fname`, `lname`, `email`, `phone`, `bdate`, `gender`, `add_1`, `add_2`, `city`, `state`, `zipcode`, `countrycode`, `country`, `pass`) VALUES
('Chirag', 'Tamhane', 'tamchirag175@gmail.com', '8129934958', '2000-02-29', 'Male', 'E-53, Sanskruti Complex', 'Near Tejas School, Bopal - 380058', 'Ahmedabad', 'Gujarat', '380058', 91, 'IN', 'chirag123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
