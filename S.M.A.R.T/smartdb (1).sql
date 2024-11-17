-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 04:20 PM
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
-- Database: `smartdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `position` varchar(20) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `school_id` int(20) NOT NULL,
  `hashword` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`position`, `full_name`, `school_id`, `hashword`, `bio`) VALUES
('', '', 0, '$2y$10$Ww/pjjZ5d8JPc.6jXhBXAuzcq4Dp46Rwh2Dc7nHTsSZcHY/cvbwHu', ''),
('Admin', 'AdminAccount', 111, '$2y$10$9sZsx5r1XNbvR1CfAmQzAeYHAYyUTkajzneffKWcwBBv20ahZnDpq', 'admin'),
('Student', 'Carl Pioquinto', 1111, '$2y$10$lOPmQps5YUmEpMgpklWarObyeR2NK5z6L7qn52MFrm89F80RafTCe', 'mao jin yu mao siopao pao'),
('Student', 'Stephen Chase N. Nepomuceno', 2000365728, '$2y$10$PgLwWrTBnmwjmFXoVqUOq.FTAAyHGD20qwBqLnwpOCLzHAIhiUVJq', 'stan jinx and vi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD UNIQUE KEY `school_id` (`school_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
