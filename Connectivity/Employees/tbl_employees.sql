-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2023 at 03:38 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

DROP TABLE IF EXISTS `tbl_employees`;
CREATE TABLE IF NOT EXISTS `tbl_employees` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Age` int(2) NOT NULL,
  `Experience` int(2) NOT NULL,
  `Salary` int(6) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`ID`, `Name`, `Age`, `Experience`, `Salary`) VALUES
(1, 'Rohan', 35, 5, 50000),
(2, 'Rajesh', 32, 8, 60500),
(3, 'Raju', 28, 4, 45000),
(4, 'Jay', 35, 6, 40000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
