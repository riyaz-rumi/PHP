-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 06:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
  `book_publication` date NOT NULL,
  `book_price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bookinfo`
--

INSERT INTO `tbl_bookinfo` (`book_id`, `book_name`, `book_publication`, `book_price`) VALUES
(1, 'My Last Breath', '2026-01-01', 3000),
(2, 'My Childhood', '2025-01-02', 3500),
(3, 'The Paradise', '2024-07-04', 2500),
(4, 'The Moon', '2026-03-04', 1400),
(5, 'One Memorable Event ', '2028-08-07', 4500),
(6, 'History is Mistry', '2026-09-02', 1500),
(7, 'The Big Bang', '2025-04-02', 4500),
(8, 'Precious incidents', '2025-04-03', 5400),
(9, 'Truth v/s Wrong', '2026-03-02', 2500),
(10, 'The Prophets', '2029-03-08', 4500),
(11, 'God - The One', '2030-05-05', 10000),
(12, 'The Angels', '2032-05-06', 4700);

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
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
