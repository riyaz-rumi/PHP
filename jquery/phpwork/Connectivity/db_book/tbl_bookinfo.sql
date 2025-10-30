-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2023 at 03:41 AM
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
-- Database: `db_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookinfo`
--

DROP TABLE IF EXISTS `tbl_bookinfo`;
CREATE TABLE IF NOT EXISTS `tbl_bookinfo` (
  `book_id` int(2) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(30) NOT NULL,
  `book_publication` date NOT NULL,
  `book_price` int(5) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bookinfo`
--

INSERT INTO `tbl_bookinfo` (`book_id`, `book_name`, `book_publication`, `book_price`) VALUES
(1, 'The Rabbit', '2025-01-31', 450),
(2, 'The Rabbit 2', '2026-01-31', 550),
(3, 'The Rabbit 3', '2027-01-02', 1080),
(4, 'The Rabbit 4', '2028-01-31', 2400),
(5, 'Rabbit v/s Turtle', '2030-01-28', 2500),
(6, 'The Cat', '2025-02-02', 4500),
(7, 'The Cat 2', '2026-03-02', 4000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
