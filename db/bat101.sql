-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 03:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bat101`
--

-- --------------------------------------------------------

--
-- Table structure for table `bat_c_01`
--

CREATE TABLE `bat_c_01` (
  `id` int(25) NOT NULL,
  `day_time` varchar(30) NOT NULL,
  `create_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bat_c_01`
--

INSERT INTO `bat_c_01` (`id`, `day_time`, `create_date`) VALUES
(1, 'Sun 8:00-9:00', ''),
(7, 'Mon 8:00-9:00', ''),
(8, 'Mon 10:00-11:00', ''),
(2050, 'Sun 19:00-20:00', '2022-03-02'),
(2051, 'Fri 17:00-18:00', '2022-03-02'),
(2055, 'Sun 17:00-18:00', '2022-03-02'),
(2057, 'Sun 10:00-11:00', '2022-03-02'),
(2059, 'Sun 16:00-17:00', '2022-03-02'),
(2060, 'Thu 17:00-18:00', '2022-03-02'),
(2061, 'Thu 12:00-13:00', '2022-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `bat_c_02`
--

CREATE TABLE `bat_c_02` (
  `id` int(25) NOT NULL,
  `day_time` varchar(30) NOT NULL,
  `create_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bat_c_02`
--

INSERT INTO `bat_c_02` (`id`, `day_time`, `create_date`) VALUES
(1, 'Sun 8:00-9:00', '2022-03-02'),
(2, 'Sun 11:00-12:00', '2022-03-02'),
(3, 'Sun 9:00-10:00', '2022-03-02'),
(4, 'Sun 10:00-11:00', '2022-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `bat_c_03`
--

CREATE TABLE `bat_c_03` (
  `id` int(25) NOT NULL,
  `day_time` varchar(30) NOT NULL,
  `create_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bat_c_03`
--

INSERT INTO `bat_c_03` (`id`, `day_time`, `create_date`) VALUES
(8, 'Sun 8:00-9:00', '2022-03-02'),
(9, 'Sat 14:00-15:00', '2022-03-02'),
(10, 'Sun 13:00-14:00', '2022-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `bat_c_04`
--

CREATE TABLE `bat_c_04` (
  `id` int(25) NOT NULL,
  `day_time` varchar(30) NOT NULL,
  `create_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bat_c_04`
--

INSERT INTO `bat_c_04` (`id`, `day_time`, `create_date`) VALUES
(1, 'Sun 8:00-9:00', '2022-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `bat_day`
--

CREATE TABLE `bat_day` (
  `b_id` int(10) NOT NULL,
  `b_day` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bat_day`
--

INSERT INTO `bat_day` (`b_id`, `b_day`) VALUES
(1, 'Sun'),
(2, 'Mon'),
(3, 'Tue'),
(4, 'Wed'),
(5, 'Thu'),
(6, 'Fri'),
(7, 'Sat');

-- --------------------------------------------------------

--
-- Table structure for table `bat_stu`
--

CREATE TABLE `bat_stu` (
  `stu_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bat_stu`
--

INSERT INTO `bat_stu` (`stu_id`) VALUES
('1813170048'),
('1234567890'),
('1111111111'),
('2222222222');

-- --------------------------------------------------------

--
-- Table structure for table `bat_time`
--

CREATE TABLE `bat_time` (
  `b_id` int(10) NOT NULL,
  `b_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bat_time`
--

INSERT INTO `bat_time` (`b_id`, `b_time`) VALUES
(1, '8:00-9:00'),
(2, '9:00-10:00'),
(3, '10:00-11:00'),
(4, '11:00-12:00'),
(5, '12:00-13:00'),
(6, '13:00-14:00'),
(7, '14:00-15:00'),
(8, '15:00-16:00'),
(9, '16:00-17:00'),
(10, '17:00-18:00'),
(11, '18:00-19:00'),
(12, '19:00-20:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bat_c_01`
--
ALTER TABLE `bat_c_01`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `day_time` (`day_time`);

--
-- Indexes for table `bat_c_02`
--
ALTER TABLE `bat_c_02`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `day_time` (`day_time`);

--
-- Indexes for table `bat_c_03`
--
ALTER TABLE `bat_c_03`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `day_time` (`day_time`);

--
-- Indexes for table `bat_c_04`
--
ALTER TABLE `bat_c_04`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `day_time` (`day_time`);

--
-- Indexes for table `bat_day`
--
ALTER TABLE `bat_day`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `bat_time`
--
ALTER TABLE `bat_time`
  ADD PRIMARY KEY (`b_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bat_c_01`
--
ALTER TABLE `bat_c_01`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2062;

--
-- AUTO_INCREMENT for table `bat_c_02`
--
ALTER TABLE `bat_c_02`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bat_c_03`
--
ALTER TABLE `bat_c_03`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bat_c_04`
--
ALTER TABLE `bat_c_04`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bat_day`
--
ALTER TABLE `bat_day`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bat_time`
--
ALTER TABLE `bat_time`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
