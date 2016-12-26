
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2016 at 11:44 AM
-- Server version: 10.0.20-MariaDB-log
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u476506544_gvhss`
--

-- --------------------------------------------------------

--
-- Table structure for table `mltb`
--

CREATE TABLE IF NOT EXISTS `mltb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `rollno` varchar(8) NOT NULL,
  `year` varchar(8) NOT NULL,
  `adyr` varchar(9) NOT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `triggera` varchar(11) DEFAULT NULL,
  `english1` varchar(12) DEFAULT NULL,
  `english2` varchar(12) DEFAULT NULL,
  `english3` varchar(12) DEFAULT NULL,
  `english4` varchar(12) DEFAULT NULL,
  `english5` varchar(12) DEFAULT NULL,
  `english6` varchar(12) DEFAULT NULL,
  `ed1` varchar(12) DEFAULT NULL,
  `ed2` varchar(12) DEFAULT NULL,
  `ed3` varchar(12) DEFAULT NULL,
  `ed4` varchar(12) DEFAULT NULL,
  `ed5` varchar(12) DEFAULT NULL,
  `ed6` varchar(12) DEFAULT NULL,
  `mlt1` varchar(12) DEFAULT NULL,
  `mlt2` varchar(12) DEFAULT NULL,
  `mlt3` varchar(12) DEFAULT NULL,
  `mlt4` varchar(12) DEFAULT NULL,
  `mlt5` varchar(12) DEFAULT NULL,
  `mlt6` varchar(12) DEFAULT NULL,
  `physics1` varchar(12) DEFAULT NULL,
  `physics2` varchar(12) DEFAULT NULL,
  `physics3` varchar(12) DEFAULT NULL,
  `physics4` varchar(12) DEFAULT NULL,
  `physics5` varchar(12) DEFAULT NULL,
  `physics6` varchar(12) DEFAULT NULL,
  `chemistry1` varchar(12) DEFAULT NULL,
  `chemistry2` varchar(12) DEFAULT NULL,
  `chemistry3` varchar(12) DEFAULT NULL,
  `chemistry4` varchar(12) DEFAULT NULL,
  `chemistry5` varchar(12) DEFAULT NULL,
  `chemistry6` varchar(12) DEFAULT NULL,
  `biology1` varchar(12) DEFAULT NULL,
  `biology2` varchar(12) DEFAULT NULL,
  `biology3` varchar(12) DEFAULT NULL,
  `biology4` varchar(12) DEFAULT NULL,
  `biology5` varchar(12) DEFAULT NULL,
  `biology6` varchar(12) DEFAULT NULL,
  `mltp1` varchar(12) DEFAULT NULL,
  `mltp2` varchar(12) DEFAULT NULL,
  `mltp3` varchar(12) DEFAULT NULL,
  `mltp4` varchar(12) DEFAULT NULL,
  `mltp5` varchar(12) DEFAULT NULL,
  `mltp6` varchar(12) DEFAULT NULL,
  `cp1` varchar(12) DEFAULT NULL,
  `cp2` varchar(12) DEFAULT NULL,
  `cp3` varchar(12) DEFAULT NULL,
  `cp4` varchar(12) DEFAULT NULL,
  `cp5` varchar(12) DEFAULT NULL,
  `cp6` varchar(12) DEFAULT NULL,
  `pp1` varchar(12) DEFAULT NULL,
  `pp2` varchar(12) DEFAULT NULL,
  `pp3` varchar(12) DEFAULT NULL,
  `pp4` varchar(12) DEFAULT NULL,
  `pp5` varchar(12) DEFAULT NULL,
  `pp6` varchar(12) DEFAULT NULL,
  `bp1` varchar(12) DEFAULT NULL,
  `bp2` varchar(12) DEFAULT NULL,
  `bp3` varchar(12) DEFAULT NULL,
  `bp4` varchar(12) DEFAULT NULL,
  `bp5` varchar(12) DEFAULT NULL,
  `bp6` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
