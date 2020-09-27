-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 09:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dailyworker`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(3) NOT NULL,
  `contact` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` int(30) NOT NULL,
  `ratings` int(20) NOT NULL,
  `report_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `contact`, `username`, `password`, `ratings`, `report_status`) VALUES
(1, 'cus', 1933, 'customer1', 1234, 3, ''),
(2, 'emp', 1933288410, 'employee2', 5678, 3, 'temproray_ban');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salary_status` tinyint(1) NOT NULL DEFAULT 0,
  `ratings` int(11) NOT NULL,
  `report_status` varchar(30) NOT NULL,
  `salary` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `contact`, `username`, `password`, `salary_status`, `ratings`, `report_status`, `salary`) VALUES
(1, 'employee1', '01712050340', 'emp1', '1234', 1, 5, 'temproray_ban', 10000),
(2, 'employee2', '01712050340', 'employee2', '1234', 1, 3, 'temproray_ban', 50000),
(3, 'employee3', '01712050340', 'emp3', '1234', 1, 4, 'temproray_ban', 500000),
(4, 'employee5', '01712050340', 'emp5', '1234', 1, 0, '2', 20000),
(5, 'employee4', '01712050340', 'emp4', '1234', 1, 0, 'parmanent_ban', 30000),
(6, 'employee6', '01712050340', 'emp6', '1234', 1, 0, '', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `forgettable`
--

CREATE TABLE `forgettable` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgettable`
--

INSERT INTO `forgettable` (`id`, `email`, `status`) VALUES
(1, 'nashif@gmail.com', 1),
(2, 'Iftekhar@gmail.com', 1),
(3, 'rishad@gmail.com', 0),
(4, 'tukun@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE `transection` (
  `id` int(60) NOT NULL,
  `withdraw` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`id`, `withdraw`) VALUES
(1, 1000),
(2, 1000),
(27, 1000),
(28, 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `type` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `gender`, `type`, `username`, `password`) VALUES
(1, 'Md. Nashif Iftekhar', 'nashififtekhar@gmail.com', 1771112552, 'Male', 'admin', 'nashif', '1234'),
(7, 'Tahmid_12', 'tahmid.hassan@gmail.com', 1679299557, 'Male', '', 'tahmid', '123'),
(11, 'Niloy', 'admin@gmail.com', 1679299557, 'Male', '', 'niloy', '123'),
(12, 'Tahmid', 'tah@gmail.com', 1679299557, 'Male', '', 'tahmid', '123'),
(13, 'Niloy Mahmud', 'admin@gmail.com', 1679299557, 'Male', 'Software Developer', 'niloy', '123'),
(16, 'Ishtiaqe', 'admin@gmail.com', 1679299557, 'Male', 'Software Developer', 'isti123', '123'),
(17, 'Ishtiaqe', 'admin@gmail.com', 1679299557, 'Male', 'Software Developer', 'isti123', '123'),
(18, 'Ishtiaqe', 'tah@gmail.com', 1679299557, 'Male', 'Software Developer', 'isti', '1234'),
(20, 'Nashif Rishat Iftekhar', 'nashififtekhar@gmail.com', 1771112552, 'Male', 'Electrical Engineer', 'nashif', '1234'),
(21, 'Fahim sms Tahmid', 'admin@gmail.com', 1771112552, 'Male', 'Electrical Engineer', 'nashif', '1234'),
(22, 'vugichugi', 'admin@gmail.com', 1771112552, 'Male', 'Software Developer', 'nashif', '1234'),
(23, 'Nashif Rishat Iftekhar', 'nashififtekhar@gmail.com', 1771112552, 'Male', 'Admin', 'admin1', '123456'),
(24, 'Nashif Rishat Iftekhar', 'admin@gmail.com', 1771112552, 'Male', 'Admin', 'nashif1234', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `password` int(30) NOT NULL,
  `confirm_password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `worklist`
--

CREATE TABLE `worklist` (
  `id` int(60) NOT NULL,
  `workname` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `status` varchar(60) NOT NULL,
  `hire_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worklist`
--

INSERT INTO `worklist` (`id`, `workname`, `time`, `salary`, `location`, `status`, `hire_id`) VALUES
(1, 'Cleaning', '10 am-12pm', '2000', 'Nikunjo2', 'completed', 748),
(2, 'Washing', '5pm-8pm', '2000', 'Uttora', 'completed', 13),
(4, 'Washing', '5pm-8pm', '2000', 'Uttora', 'completed', 909),
(10, 'Washing', '5pm-8pm', '2000', 'Uttora', 'cancelled', 536),
(14, 'Cleaning', '5pm-8pm', '5000', 'Uttora', 'cancelled', 672),
(15, 'Teaching', '5pm-8pm', '5000', 'Uttora', 'cancelled', 0),
(16, 'Teaching', '5pm-8pm', '2000', 'Dhanmondi', 'cancelled', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgettable`
--
ALTER TABLE `forgettable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transection`
--
ALTER TABLE `transection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worklist`
--
ALTER TABLE `worklist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `forgettable`
--
ALTER TABLE `forgettable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transection`
--
ALTER TABLE `transection`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `worklist`
--
ALTER TABLE `worklist`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
