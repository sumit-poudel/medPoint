-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2025 at 09:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medpointdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcart`
--

CREATE TABLE `tbcart` (
  `username` varchar(10) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `count` int(11) NOT NULL,
  `buydate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbproduct`
--

CREATE TABLE `tbproduct` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `image_path` text DEFAULT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `username` varchar(10) NOT NULL,
  `fullname` text NOT NULL,
  `password` text NOT NULL,
  `phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcart`
--
ALTER TABLE `tbcart`
  ADD KEY `fk_username` (`username`),
  ADD KEY `fk_pid` (`pid`);

--
-- Indexes for table `tbproduct`
--
ALTER TABLE `tbproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbproduct`
--
ALTER TABLE `tbproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbcart`
--
ALTER TABLE `tbcart`
  ADD CONSTRAINT `fk_pid` FOREIGN KEY (`pid`) REFERENCES `tbproduct` (`id`),
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `tbuser` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
