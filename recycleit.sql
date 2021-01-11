-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 08:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recycleit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(15) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `password` varchar(150) NOT NULL,
  `house_no` varchar(10) NOT NULL,
  `road_no` varchar(25) NOT NULL,
  `area` varchar(25) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `thana` varchar(15) NOT NULL,
  `post_office` varchar(25) NOT NULL,
  `sold_amount` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `phone_no`, `password`, `house_no`, `road_no`, `area`, `post_code`, `thana`, `post_office`, `sold_amount`) VALUES
(5, 'sami', 'sami@mail.com', '414124124', '81dc9bdb52d04dc20036dbd8313ed055', '65', '70', 'Uttor Jatrabari', '1306', 'Dholaipar', 'Dholaipar', 0),
(6, 'abul', 'abc@mail.com', '24124124', 'd93591bdf7860e1e4ee2fca799911215', '80', '3', 'dhanmondi', '1209', 'dhanmondi', 'dhanmondi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(5) NOT NULL,
  `location` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `em_phn_no` varchar(15) NOT NULL,
  `employee_pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_pickup`
--

CREATE TABLE `employee_pickup` (
  `req_no` int(5) NOT NULL,
  `employee_id` int(5) NOT NULL,
  `adminemail` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pick_up`
--

CREATE TABLE `pick_up` (
  `Area` varchar(10) NOT NULL,
  `post_code` int(10) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(15) NOT NULL,
  `req_no` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(5) NOT NULL,
  `type` varchar(15) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `type`, `price`) VALUES
(1, '5 kg bottle', 10),
(2, '0.5 kg bottle', 2),
(3, '10 kg bottle', 30),
(4, '0.5 kg jug', 30),
(6, '1 kg bottle', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_request`
--

CREATE TABLE `product_request` (
  `req_no` int(5) NOT NULL,
  `product_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_no` int(5) NOT NULL,
  `phn_no` varchar(15) NOT NULL,
  `prefered_time` varchar(15) NOT NULL,
  `details` varchar(25) NOT NULL,
  `status` int(1) NOT NULL,
  `customer_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `em_phn_no` (`em_phn_no`);

--
-- Indexes for table `employee_pickup`
--
ALTER TABLE `employee_pickup`
  ADD PRIMARY KEY (`req_no`),
  ADD KEY `FKemployee_p349989` (`req_no`),
  ADD KEY `FKemployee_p623174` (`employee_id`),
  ADD KEY `FKemployee_p423607` (`adminemail`);

--
-- Indexes for table `pick_up`
--
ALTER TABLE `pick_up`
  ADD PRIMARY KEY (`req_no`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `FKpick_up353659` (`req_no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_request`
--
ALTER TABLE `product_request`
  ADD PRIMARY KEY (`req_no`,`product_id`),
  ADD KEY `FKproduct_re228138` (`req_no`),
  ADD KEY `FKproduct_re330749` (`product_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_no`),
  ADD KEY `FKrequest256525` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_no` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_pickup`
--
ALTER TABLE `employee_pickup`
  ADD CONSTRAINT `FKemployee_p349989` FOREIGN KEY (`req_no`) REFERENCES `pick_up` (`req_no`),
  ADD CONSTRAINT `FKemployee_p423607` FOREIGN KEY (`adminemail`) REFERENCES `admin` (`email`),
  ADD CONSTRAINT `FKemployee_p623174` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `pick_up`
--
ALTER TABLE `pick_up`
  ADD CONSTRAINT `FKpick_up353659` FOREIGN KEY (`req_no`) REFERENCES `request` (`req_no`);

--
-- Constraints for table `product_request`
--
ALTER TABLE `product_request`
  ADD CONSTRAINT `FKproduct_re228138` FOREIGN KEY (`req_no`) REFERENCES `request` (`req_no`),
  ADD CONSTRAINT `FKproduct_re330749` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `FKrequest256525` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
