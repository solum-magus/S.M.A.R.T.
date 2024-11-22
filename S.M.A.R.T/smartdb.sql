-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2024 at 11:17 AM
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
-- Table structure for table `reportdetails`
--

CREATE TABLE `reportdetails` (
  `report_id` bigint(15) NOT NULL,
  `rname` varchar(128) NOT NULL,
  `plocation` varchar(30) NOT NULL,
  `problem` varchar(50) NOT NULL,
  `pdescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reportdetails`
--

INSERT INTO `reportdetails` (`report_id`, `rname`, `plocation`, `problem`, `pdescription`) VALUES
(5, 'Stephen', 'RM101', 'Aircon', 'the aircons is lowkey broken erm'),
(7, 'stephen', 'Dining Room', 'a,mmongus', 'sussy imposter!!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `sentfeedback`
--

CREATE TABLE `sentfeedback` (
  `id_report` bigint(15) NOT NULL,
  `user_feedback` varchar(255) NOT NULL,
  `rating` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sentfeedback`
--

INSERT INTO `sentfeedback` (`id_report`, `user_feedback`, `rating`) VALUES
(123, '123', 'Good'),
(0, 'dwdadadada', 'Satisfactory');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `position` varchar(20) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `school_id` bigint(11) NOT NULL,
  `hashword` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`position`, `full_name`, `school_id`, `hashword`, `bio`) VALUES
('', '', 0, '$2y$10$Ww/pjjZ5d8JPc.6jXhBXAuzcq4Dp46Rwh2Dc7nHTsSZcHY/cvbwHu', ''),
('Student', 'Stephen Chase N. Nepomuceno', 2000365728, '$2y$10$zRRNKvkgWkJPSe7vrvAVGOdoijt62ccaGZS/yiEl.4ah4kqmb15W.', ''),
('Student', 'AdminSAccount', 12345678901, '$2y$10$naL5Zd.xKo/kPWDLtv/iP.h.19VP/Zt5ZhOdbu6H/mGapAQ0dkHp6', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reportdetails`
--
ALTER TABLE `reportdetails`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD UNIQUE KEY `school_id` (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reportdetails`
--
ALTER TABLE `reportdetails`
  MODIFY `report_id` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
