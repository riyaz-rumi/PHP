-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2023 at 04:07 AM
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
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `id`) VALUES
('Walt Disney', 'Walt700', 1),
('Mark Disney', 'Mark123', 2),
('Roy Disney', 'Roy007', 3),
('Jack', 'j4', 4),
('Thomas', 'Thomas6', 5),
('Thomas', 'Thomas6', 6),
('Jerry', 'Jerry5', 7),
('Mickey', 'Mickey6', 8),
('Tom', 'Tom3', 9),
('Nobita', 'Nobita6', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
