-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2023 at 03:26 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp`
--

DROP TABLE IF EXISTS `tbl_temp`;
CREATE TABLE IF NOT EXISTS `tbl_temp` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NAME` varchar(15) NOT NULL,
  `AGE` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_temp`
--

INSERT INTO `tbl_temp` (`ID`, `NAME`, `AGE`) VALUES
(1, 'Walt Disney', 38),
(2, 'Roy Disney', 40),
(3, 'Allen Breche', 47),
(4, 'Berry Boehm', 67),
(5, 'Mark Boehm', 65),
(6, 'Morris Mano', 60),
(7, 'Roger Pressman', 42),
(8, 'Anton Chekhov', 45),
(9, 'Eric Disney', 35),
(10, 'Joy Rowan', 39);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
