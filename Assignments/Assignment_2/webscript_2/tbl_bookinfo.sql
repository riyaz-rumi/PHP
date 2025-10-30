-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 08:51 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

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

CREATE TABLE `tbl_bookinfo` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `book_publication` varchar(30) NOT NULL,
  `book_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bookinfo`
--

INSERT INTO `tbl_bookinfo` (`book_id`, `book_name`, `book_publication`, `book_price`) VALUES
(1, 'My Last Breath', 'Roy Academic Publishers', 3000),
(2, 'My Childhood', 'Jamnadas Prakashan', 3500),
(3, 'The Paradise', 'Bharat Prakashan', 2500),
(4, 'The Moon', 'Rajdhani Publication', 1400),
(5, 'The Big Bang', 'Tata MCGrawHill Publishers', 4500),
(6, 'History is Mistry', 'Roy Academic Publishers', 1500),
(8, 'Precious incidents', 'Bharat Prakashan', 5400),
(9, 'Truth v/s Wrong', 'Rajdhani Publication', 2500),
(10, 'The Angels', 'Tata MCGrawHill Publishers', 4700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bookinfo`
--
ALTER TABLE `tbl_bookinfo`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bookinfo`
--
ALTER TABLE `tbl_bookinfo`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
