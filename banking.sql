-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 07:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `userid` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `acc_number` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userid`, `name`, `acc_number`, `email`, `balance`) VALUES
(1, 'Ashtral', 'AC12345678', 'ashtral@gmail.com', 10589),
(2, 'Shrilakshmi', 'AC12456733', 'shrilakshmi2@gmail.com', 39100),
(3, 'Nithya', 'AC34567844', 'nithya51@gmail.com', 5053),
(4, 'Anushri', 'AC384743912', 'anushri43@gmail.com', 60635),
(5, 'Sandra', 'AC47882822', 'sandra21@gmail.com', 128346),
(6, 'Sarah', 'AC768434492', 'sarah7@gmail.com', 8929);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `t_no` int(11) NOT NULL,
  `s_name` varchar(15) NOT NULL,
  `s_acc_no` varchar(25) NOT NULL,
  `r_name` varchar(15) NOT NULL,
  `r_acc_no` varchar(25) NOT NULL,
  `amount` float NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`t_no`, `s_name`, `s_acc_no`, `r_name`, `r_acc_no`, `amount`, `date_time`) VALUES
(9, 'Shrilakshmi', 'AC12456733', 'Sarah', 'AC768434492', 1000, '2022-04-12 05:40:59'),
(10, 'Ashtral', 'AC12345678', 'Anushri', 'AC384743912', 1, '2022-04-12 06:17:38'),
(11, 'Ashtral', 'AC12345678', 'Nithya', 'AC34567844', 20, '2022-04-15 18:52:16'),
(12, 'Nithya', 'AC34567844', 'Sarah', 'AC768434492', 500, '2022-04-15 19:07:59'),
(13, 'Sandra', 'AC47882822', 'Sarah', 'AC768434492', 654, '2022-04-15 19:13:38'),
(14, 'Ashtral', 'AC12345678', 'Anushri', 'AC384743912', 100, '2022-04-17 11:27:57'),
(15, 'Sarah', 'AC768434492', 'Ashtral', 'AC12345678', 2000, '2022-04-17 11:30:56'),
(16, 'Ashtral', 'AC12345678', 'Sandra', 'AC47882822', 50000, '2022-04-17 11:31:48'),
(17, 'Ashtral', 'AC12345678', 'Shrilakshmi', 'AC12456733', 100, '2022-04-17 12:00:35'),
(18, 'Ashtral', 'AC12345678', 'Sarah', 'AC768434492', 100, '2022-04-17 12:06:42'),
(19, 'Shrilakshmi', 'AC12456733', 'Ashtral', 'AC12345678', 10000, '2022-04-17 12:14:19'),
(20, 'Ashtral', 'AC12345678', 'Anushri', 'AC384743912', 90, '2022-04-18 12:45:37'),
(21, 'Ashtral', 'AC12345678', 'Anushri', 'AC384743912', 1000, '2022-04-18 14:43:13'),
(22, 'Sandra', 'AC47882822', 'Nithya', 'AC34567844', 1000, '2022-05-21 15:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `acc_number` (`acc_number`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`t_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `t_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
