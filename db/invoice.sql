-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 02:34 PM
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
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` tinyint(1) UNSIGNED NOT NULL,
  `expend` int(6) UNSIGNED NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `code`, `number`, `period`, `expend`, `year`) VALUES
(2, 'ZU', '14161454', 5, 292, '2020'),
(4, 'CZ', '29615663', 5, 1429, '2020'),
(7, 'XX', '98003536', 6, 5070, '2020'),
(10, 'RX', '49903421', 5, 7799, '2020'),
(11, 'ZU', '77842279', 2, 6515, '2020'),
(12, 'CJ', '83749260', 4, 9108, '2020'),
(13, 'SZ', '67040590', 6, 495, '2020'),
(15, 'XC', '54883361', 1, 7845, '2020'),
(16, 'SF', '93817367', 4, 7300, '2020'),
(17, 'RF', '58544530', 4, 6876, '2020'),
(18, 'DJ', '72870806', 4, 2394, '2020'),
(20, 'UD', '83222491', 4, 6283, '2020'),
(21, 'JZ', '99271217', 2, 6334, '2020'),
(22, 'CS', '14330836', 5, 1923, '2020'),
(23, 'FD', '58606440', 3, 8361, '2020'),
(24, 'XU', '78509458', 6, 5514, '2020'),
(25, 'ZD', '30677919', 5, 701, '2020'),
(26, 'SG', '73161714', 2, 408, '2020'),
(27, 'XZ', '90223153', 3, 6189, '2020'),
(28, 'YC', '17143474', 2, 2986, '2020'),
(29, 'FY', '43395135', 4, 903, '2020'),
(30, 'DJ', '56336969', 3, 8676, '2020'),
(31, 'FC', '63626960', 3, 9908, '2020'),
(32, 'AA', '12366007', 1, 168, '2020'),
(33, 'CD', '66666007', 1, 20, '2020'),
(34, 'bb', '57161318', 2, 600, '2020'),
(35, 'CD', '66666007', 3, 99, '2020'),
(50, 'SA', '34599259', 4, 1425, '2020'),
(51, 'ZJ', '42519782', 1, 3373, '2020'),
(52, 'UY', '74592799', 1, 5080, '2020'),
(53, 'SJ', '23523030', 1, 731, '2020'),
(54, 'JZ', '39835699', 1, 447, '2020'),
(56, 'GJ', '58673663', 4, 2907, '2020'),
(57, 'JJ', '27377441', 3, 4482, '2020'),
(58, 'XZ', '91102233', 5, 1492, '2020'),
(59, 'DC', '42456685', 5, 7436, '2020'),
(60, 'SY', '95318790', 5, 6968, '2020'),
(61, 'DZ', '59657463', 6, 511, '2020'),
(62, 'XC', '57827333', 5, 378, '2020'),
(63, 'ZZ', '98848076', 6, 8120, '2020'),
(64, 'YJ', '49047978', 6, 9882, '2020'),
(65, 'UF', '88767707', 2, 5112, '2020'),
(66, 'RX', '51969135', 2, 6916, '2020'),
(67, 'JX', '76502885', 2, 2880, '2020'),
(68, 'SF', '86211593', 4, 6942, '2020'),
(69, 'FA', '88621228', 3, 366, '2020'),
(70, 'CC', '89950962', 3, 7773, '2020'),
(71, 'YZ', '66841849', 3, 3906, '2020'),
(72, 'ZS', '67539760', 2, 5221, '2020'),
(73, 'JR', '50687818', 5, 9744, '2020'),
(74, 'YZ', '87076873', 2, 3719, '2020'),
(75, 'UA', '85715373', 2, 6862, '2020'),
(76, 'DU', '76515936', 1, 2997, '2020'),
(77, 'FU', '19065044', 1, 8317, '2020'),
(78, 'ZX', '62768547', 4, 7111, '2020'),
(79, 'AZ', '99033099', 4, 9384, '2020'),
(81, 'CG', '34567819', 3, 225, '2020'),
(83, 'RR', '66666007', 3, 356, '2020'),
(99, 'ZU', '77842279', 2, 6515000, '2020'),
(103, 'LA', '12345678', 3, 30, '2020'),
(105, 'CD', '12345678', 1, 90, '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
