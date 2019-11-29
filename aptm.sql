-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 29, 2019 at 01:32 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `aptm`
--

-- --------------------------------------------------------

--
-- Table structure for table `parking_spots`
--

CREATE TABLE `parking_spots` (
  `spot` int(11) NOT NULL,
  `dstart` date NOT NULL,
  `tstart` time NOT NULL,
  `tend` time NOT NULL,
  `model` varchar(50) NOT NULL,
  `plate` varchar(10) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parking_spots`
--

INSERT INTO `parking_spots` (`spot`, `dstart`, `tstart`, `tend`, `model`, `plate`, `unit`) VALUES
(1, '2019-11-30', '12:00:00', '15:00:00', 'kia rio black', 'celv234', 606),
(2, '2019-11-30', '13:00:00', '17:00:00', 'chevrolet cruze', 'celv234', 606),
(3, '2019-11-29', '13:00:00', '04:00:00', 'mercedes a250', 'rgerg443', 606),
(4, '2019-11-30', '02:00:00', '08:00:00', 'vw passat', 'fvgt345', 606),
(5, '2019-11-29', '04:00:00', '09:00:00', 'vw jetta blue', 'vfr345', 606);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `number` int(11) NOT NULL,
  `tenant` int(11) NOT NULL,
  `pet` char(1) DEFAULT 'N',
  `sd` tinyint(1) DEFAULT NULL,
  `cod` tinyint(1) DEFAULT NULL,
  `dc` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `unit` int(11) NOT NULL,
  `phone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fname`, `lname`, `unit`, `phone`) VALUES
(3, 'one@one.com', '$2y$10$.DNhQNcZPtZFr9.L75t3uuOxk22Y13DvYzaXYMGbIg8ZjHBJFVANC', 'One', 'First', 100, '1233425346'),
(4, 'two@two.com', '$2y$10$4dHkJbo90skyDGnYYs6H0OLIoNn5Il4qpiLQahaOV1Eb61OCDF5yW', 'Two', 'Second', 100, NULL),
(5, 'three@three.com', '$2y$10$r/8tacCh6N8k6mpdcIQ5h.ReOt9tPipXXKUaHxir8oDhndAeGK7p6', 'Three', 'Third', 103, NULL),
(6, 'four@four.com', '$2y$10$tBbizH.QrX.Fzwd2A6AUWuAj4mA0kE6Vjdc.15wnCFf5Pc1KEh7ry', 'Four', 'Fourth', 100, NULL),
(7, 'five@five.com', '$2y$10$SS7qXqi.orhtWzRHOEF/ye3dFwo2UADFmGPLclgl51KHfHuPkf6jW', 'Five', 'Fifth', 100, NULL),
(8, 'six@six.com', '$2y$10$0/LnwyTMYrG4aGgoulC5a.alSZwa2m12PE6f6JZ0yEI6DuhBhFPme', 'Six', 'Sixth', 606, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `uid` int(11) NOT NULL,
  `role` char(1) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `work_orders`
--

CREATE TABLE `work_orders` (
  `order_no` int(11) NOT NULL,
  `tenant` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_requested` time NOT NULL,
  `repair_requested` varchar(500) NOT NULL,
  `staff` int(11) DEFAULT NULL,
  `repair_parts` text,
  `repair_date` date DEFAULT NULL,
  `repair_time_start` time DEFAULT NULL,
  `repair_time_end` time DEFAULT NULL,
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_orders`
--

INSERT INTO `work_orders` (`order_no`, `tenant`, `date`, `time_requested`, `repair_requested`, `staff`, `repair_parts`, `repair_date`, `repair_time_start`, `repair_time_end`, `comments`) VALUES
(1, 8, '2019-11-30', '16:00:00', 'erttrbbht', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 8, '2019-12-19', '13:00:00', 'djdtjtyktykd', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parking_spots`
--
ALTER TABLE `parking_spots`
  ADD PRIMARY KEY (`spot`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`number`),
  ADD KEY `uid` (`tenant`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit` (`unit`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `work_orders`
--
ALTER TABLE `work_orders`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `tenant` (`tenant`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parking_spots`
--
ALTER TABLE `parking_spots`
  MODIFY `spot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `work_orders`
--
ALTER TABLE `work_orders`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `work_orders`
--
ALTER TABLE `work_orders`
  ADD CONSTRAINT `work_orders_ibfk_1` FOREIGN KEY (`tenant`) REFERENCES `users` (`id`);
