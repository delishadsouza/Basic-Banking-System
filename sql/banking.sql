-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 05:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
(1, 'Radha', 'AC12345678', 'radha1@gmail.com', 18800),
(2, 'Krishna', 'AC23456781', 'krishna2@gmail.com', 41000),
(3, 'john', 'AC34567891', 'john51@gmail.com', 26500),
(4, 'Browney', 'AC45678912', 'browney43@gmail.com', 20500),
(5, 'Saina', 'AC56789123', 'saina21@gmail.com', 38500),
(6, 'Sindhu', 'AC67891234', 'sinduji7@gmail.com', 20700),
(7, 'Sukanya', 'AC78912345', 'sukanya83@gmail.com', 9500),
(8, 'Bhuvan', 'AC89123456', 'bhuvan22@gmail.com', 25000),
(9, 'Chinmayi', 'AC91234567', 'chinnu88@gmail.com', 15700),
(10, 'Zakir', 'AC94462535', 'zakir123@gmail.com', 20600);

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
(8, 'Radha', 'AC12345678', 'Sindhu', 'AC67891234', 200, '2022-02-27 16:52:59');

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
  MODIFY `t_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
