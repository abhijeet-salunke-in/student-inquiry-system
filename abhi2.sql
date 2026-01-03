-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2025 at 06:17 AM
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
-- Database: `abhi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `in_id` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(52) NOT NULL,
  `watts_no` varchar(50) NOT NULL,
  `next_fees_date` varchar(53) NOT NULL,
  `cources` varchar(54) NOT NULL,
  `institution` varchar(56) NOT NULL,
  `class` varchar(50) NOT NULL,
  `fees` varchar(52) NOT NULL,
  `feesgave` varchar(50) NOT NULL,
  `feesbalenced` varchar(50) NOT NULL,
  `hapte` varchar(50) NOT NULL,
  `occupation` varchar(51) NOT NULL,
  `addate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `in_id`, `photo`, `name`, `address`, `mobile`, `watts_no`, `next_fees_date`, `cources`, `institution`, `class`, `fees`, `feesgave`, `feesbalenced`, `hapte`, `occupation`, `addate`) VALUES
(1, '1', 'boy.png', 'Abhijeet Salunke', 'Salunke Galli, Vaijapur', '8698291380', '8698291380', '2023-11-01', 'Software/Web Development + 11 cources-', 'VP College', '11 Science', '15000', '10000', '5000', '2', 'Farmer', '2023-10-11'),
(2, '3', 'boy.png', 'Krushnaraj Somase', 'vaijapur', '123456651', '51684165', '2023-10-30', 'C++', 'sangivani', '11 Science', '2000', '1500', '500', '2', 'FARMER', '2023-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(52) NOT NULL,
  `mobile` varchar(52) NOT NULL,
  `watts_no` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(54) NOT NULL,
  `institution` varchar(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `cources` varchar(50) NOT NULL,
  `fees` varchar(11) NOT NULL,
  `occupation` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `mobile`, `watts_no`, `address`, `date`, `institution`, `class`, `cources`, `fees`, `occupation`) VALUES
(1, 'Abhijeet Salunke', '8698291380', '8698291380', 'Salunke Galli, Vaijapur', '2023-10-05', 'VP College', '11 Science', 'Software/Web Development + 11 cources-', '15000', 'Farmer'),
(2, 'SWARAJ KUNDE', '45465465', '9168163938', 'KHARAJ', '2023-10-10', 'MIT', '3RD YEAR', 'Software/Web Development + 11 cources-', '15500', 'FARMER'),
(3, 'Krushnaraj Somase', '123456651', '51684165', 'vaijapur', '2023-10-20', 'sangivani', '11 Science', 'C++', '2000', 'FARMER');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `password`) VALUES
(1, 'abhi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
