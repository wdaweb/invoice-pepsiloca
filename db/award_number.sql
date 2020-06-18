-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 02:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `award_number`
--

CREATE TABLE `award_number` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '流水號',
  `year` year(4) NOT NULL COMMENT '年',
  `period` tinyint(1) UNSIGNED NOT NULL COMMENT '期',
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '號碼',
  `type` tinyint(1) UNSIGNED NOT NULL COMMENT '獎別'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award_number`
--

INSERT INTO `award_number` (`id`, `year`, `period`, `number`, `type`) VALUES
(37, 2020, 2, '91911374', 1),
(38, 2020, 2, '08501338', 2),
(39, 2020, 2, '57161318', 3),
(40, 2020, 2, '23570653', 3),
(41, 2020, 2, '47332279', 3),
(42, 2020, 2, '519', 4),
(43, 2020, 1, '12620024', 1),
(44, 2020, 1, '39793895', 2),
(45, 2020, 1, '67913945', 3),
(46, 2020, 1, '09954061', 3),
(47, 2020, 1, '54574947', 3),
(48, 2020, 1, '007', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `award_number`
--
ALTER TABLE `award_number`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `award_number`
--
ALTER TABLE `award_number`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
