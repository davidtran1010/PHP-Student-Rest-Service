-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2017 at 02:37 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2434575_ktpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `FullName` text,
  `Birthday` text,
  `IDNumber` text,
  `AcaYear` int(11) DEFAULT NULL,
  `Major` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`ID`, `FullName`, `Birthday`, `IDNumber`, `AcaYear`, `Major`) VALUES
(1, 'Tran Thien Anh123', '04/03/1997', '12345789', 2019, 'Ky thuat pm test'),
(7, 'tran thien An', '12/3/1996', '12345', 2012, 'ktpm1'),
(18, 'Tran Thien An123', '3/5/1996', '12345789', 2014, 'ktpm'),
(21, 'Tran Van D', '12/3/1996', '12345', 2012, 'ktpm1'),
(26, 'Tran Van C', '12/3/1996', '12345', 2012, 'ktpm1'),
(27, 'Tran Van 123', '12/3/1996', '12345', 2012, 'ktpm1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
