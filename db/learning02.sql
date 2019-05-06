-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 04:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning02`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_learning`
--

CREATE TABLE `user_learning` (
  `user_learning_id` int(10) NOT NULL,
  `choice_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_learning_bf` int(20) NOT NULL,
  `user_learning_af` varchar(20) NOT NULL,
  `user_learning_time_bf` varchar(20) NOT NULL,
  `user_learning_time_af` varchar(20) NOT NULL,
  `user_learning_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_learning`
--

INSERT INTO `user_learning` (`user_learning_id`, `choice_id`, `user_id`, `user_learning_bf`, `user_learning_af`, `user_learning_time_bf`, `user_learning_time_af`, `user_learning_status`) VALUES
(71, 1, 47, 6, '6', '6 วินาที', '3 วินาที', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_learning`
--
ALTER TABLE `user_learning`
  ADD PRIMARY KEY (`user_learning_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_learning`
--
ALTER TABLE `user_learning`
  MODIFY `user_learning_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
