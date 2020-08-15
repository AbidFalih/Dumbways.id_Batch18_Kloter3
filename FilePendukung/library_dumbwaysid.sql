-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 04:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_dumbwaysid`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_tb`
--

CREATE TABLE `book_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `writer_id` int(11) DEFAULT NULL,
  `publication_year` int(11) DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_tb`
--

INSERT INTO `book_tb` (`id`, `name`, `category_id`, `writer_id`, `publication_year`, `img`) VALUES
(32, 'Kambing Jantan', 1, 1, 2005, 'KambingJantan.jpeg'),
(33, 'Radikus Makankakus', 1, 1, 2007, 'Radikus.jpeg'),
(34, 'Babi Ngesot', 1, 1, 2008, 'BabiNgesot.jpeg'),
(35, 'Bumi', 2, 2, 2014, 'Bumi.jpeg'),
(36, 'Bulan', 2, 2, 2015, 'Bulan.jpeg'),
(37, 'Matahari', 2, 2, 2016, 'Matahari.jpeg'),
(38, 'Chamber of Secrets', 3, 3, 1998, 'Chamber.jpeg'),
(39, 'Prisoner of Azkaban', 3, 3, 1999, 'Azkaban.jpeg'),
(40, 'Goblet of Fire', 3, 3, 2000, 'goblet.jpeg'),
(41, 'Eragon', 4, 4, 2003, 'Eragon.jpeg'),
(42, 'Eldest', 4, 4, 2005, 'Eldest.jpeg'),
(43, 'Brisingr', 4, 4, 2008, 'Brisingr.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE `category_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_tb`
--

INSERT INTO `category_tb` (`id`, `name`) VALUES
(1, 'Comedy'),
(2, 'Romance'),
(3, 'Fantasy'),
(4, 'Fiction'),
(5, 'Horrroorrr'),
(6, 'Thrillerrr'),
(7, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `writer_tb`
--

CREATE TABLE `writer_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `writer_tb`
--

INSERT INTO `writer_tb` (`id`, `name`) VALUES
(1, 'Raditya Dika'),
(2, 'Tere Liye'),
(3, 'J. K. Rowling'),
(4, 'Christopher Paolini'),
(5, 'Abid Keren'),
(6, 'TurtleMe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_tb`
--
ALTER TABLE `book_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `writer_id` (`writer_id`);

--
-- Indexes for table `category_tb`
--
ALTER TABLE `category_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writer_tb`
--
ALTER TABLE `writer_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_tb`
--
ALTER TABLE `book_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `category_tb`
--
ALTER TABLE `category_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `writer_tb`
--
ALTER TABLE `writer_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_tb`
--
ALTER TABLE `book_tb`
  ADD CONSTRAINT `book_tb_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category_tb` (`id`),
  ADD CONSTRAINT `book_tb_ibfk_2` FOREIGN KEY (`writer_id`) REFERENCES `writer_tb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
