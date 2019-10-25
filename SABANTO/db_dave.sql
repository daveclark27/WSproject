-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2019 at 11:28 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_dave`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `comments` text NOT NULL,
  `date_publish` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `name`, `comments`, `date_publish`) VALUES
(1, 'clark', 'langga nakoooo', '2019-10-23 07:32:37'),
(2, 'daveismyname', 'my name is dave', '2019-10-23 07:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `profID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(20) NOT NULL,
  `age` varchar(30) NOT NULL,
  `bday` varchar(30) NOT NULL,
  `bplace` varchar(100) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `language` varchar(100) NOT NULL,
  `hobbies` varchar(200) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`profID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`profID`, `name`, `street`, `city`, `email`, `contact`, `age`, `bday`, `bplace`, `religion`, `nationality`, `status`, `language`, `hobbies`, `image`) VALUES
(1, 'CHEROBEL H. SABANTO', 'Cabuyoan, Barangay 19', 'Gingoog City, Misamis Oriental 9014', 'cherobelsabanto@gmail.com', '(+63) 967 6882 621', '21 years old', 'May 27, 1998', 'Gingoog City', 'Roman Catholic', 'Filipino', 'Single', 'Cebuano, Tagalog, English', 'Singing, Cooking, Playing Online Games, Lifestyle', 'assets/img/222.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE IF NOT EXISTS `tbl_shop` (
  `prod_id` int(10) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `img_url` text NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`prod_id`, `prod_name`, `price`, `img_url`) VALUES
(1, 'VANS 1', 1203, 'assets/img/vans1.jpg'),
(2, 'VANS 2', 1303, 'assets/img/vans2.jpg'),
(3, 'VANS 3', 1403, 'assets/img/vans3.jpg'),
(4, 'VANS 4', 1503, 'assets/img/vans4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `passwd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `passwd`) VALUES
(1, 'admin', 'admin1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
