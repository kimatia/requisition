-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2018 at 10:54 PM
-- Server version: 5.6.34-log
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `requisitiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE IF NOT EXISTS `budgets` (
  `Budget_id` int(11) NOT NULL,
  `startDate` varchar(50) NOT NULL,
  `endDate` varchar(50) NOT NULL,
  `Budget_amt` int(11) NOT NULL,
  `Available_bal` int(11) NOT NULL,
  `Budget_target` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budgets`
--

INSERT INTO `budgets` (`Budget_id`, `startDate`, `endDate`, `Budget_amt`, `Available_bal`, `Budget_target`) VALUES
(3, '2018-06-23', '2019-06-23', 100000, 100000, 2),
(4, '2018-06-23', '2019-06-23', 150000, 150000, 3),
(5, '2018-06-23', '2019-06-23', 200000, 200000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'manager'),
(2, 'catering'),
(3, 'engineering'),
(4, 'medicine');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `employeenumber` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'normal_user',
  `image` varchar(100) NOT NULL DEFAULT 'blank-profile-picture.png'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`employeenumber`, `firstname`, `lastname`, `email`, `username`, `password`, `faculty`, `faculty_id`, `role`, `image`) VALUES
(1, 'David', 'muia', 'davidmuia254@gmail.com', 'hodCat', 'hodCat', 'catering', 2, 'admin', 'blank-profile-picture.png'),
(2, 'Isaiah', 'Mumo', 'isa@gmail.com', 'Isaiah', 'isaiah', 'catering', 2, 'normal_user', 'blank-profile-picture.png'),
(3, 'emos', 'mutua', 'emos@gmail.com', 'emos', 'emos', 'engineering', 3, 'normal_user', 'blank-profile-picture.png'),
(4, 'angeline', 'mutwa', 'angel@gmail.com', 'manager', 'manager', 'manager', 1, 'procurement_manager', 'blank-profile-picture.png'),
(5, 'isaac', 'kyalo', 'isaac@gmail.com', 'isaac', 'isaac', 'catering', 2, 'normal_user', 'blank-profile-picture.png'),
(6, 'shavril', 'mueni', 'shav@gmail.com', 'shavril', 'shavril', 'medicine', 4, 'normal_user', 'blank-profile-picture.png'),
(7, 'Simon', 'Kaniu', 'simon@gmail.com', 'simon', 'simon', 'catering', 2, 'normal_user', 'blank-profile-picture.png'),
(8, 'John', 'Alex', 'john@gmail.com', 'johnalex', 'johnalex', 'catering', 2, 'normal_user', 'blank-profile-picture.png'),
(12, 'hg', 'gh', 'h@d', 'fgh', '987654', 'medicine', 4, 'normal_user', 'blank-profile-picture.png'),
(13, 'Theo', 'James', 'theo@gmail.com', 'hodEng', 'hodEng', 'engineering', 3, 'admin', 'blank-profile-picture.png'),
(14, 'ken', 'stan', 'ken@gmail.com', 'hodMed', 'hodMed', 'medicine', 4, 'admin', 'blank-profile-picture.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_no` int(11) NOT NULL,
  `created` varchar(50) NOT NULL,
  `items` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'notdelivered',
  `faculty_id` int(11) NOT NULL,
  `vendor` varchar(50) NOT NULL DEFAULT 'ABC Suppliers'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_no`, `created`, `items`, `quantity`, `description`, `price`, `status`, `faculty_id`, `vendor`) VALUES
(5, '2018', 'router', 1, 'Cisco', 0, 'notdelivered', 2, 'ABC Suppliers'),
(6, '2018', 'catridges', 1, 'catridge', 0, 'notdelivered', 2, 'ABC Suppliers'),
(7, '2018', 'catridges', 1, 'catridge', 0, 'notdelivered', 2, 'ABC Suppliers'),
(8, '2018', 'printer', 5, 'hp', 0, 'notdelivered', 4, 'ABC Suppliers');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL,
  `item` varchar(100) CHARACTER SET latin1 NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `justification` varchar(100) NOT NULL DEFAULT 'not availabe',
  `status` varchar(50) NOT NULL DEFAULT 'unapproved',
  `request_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `employeeid` int(11) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `item`, `quantity`, `description`, `justification`, `status`, `request_date`, `employeeid`, `faculty`, `faculty_id`) VALUES
(0, 'lab coats', 2, 'white lab coats', 'current ones are worn out', 'finalapproved', '2018-06-12 17:22:29', 6, 'medicine', 4),
(3, 'printer', 1, 'hp', 'Faulty', 'finalrejected', '2018-06-12 18:24:29', 2, 'catering', 2),
(4, 'catridges', 1, 'catridge', 'depleted', 'finalapproved', '2018-06-12 06:10:26', 8, 'catering', 2),
(7, 'telephone', 1, 'avaya phone', 'Damaged', 'flagged', '2018-06-12 11:33:32', 5, 'catering', 2),
(8, 'extension', 1, 'astra model extension', 'Damaged', 'rejected', '2018-06-12 11:41:05', 5, 'catering', 2),
(10, 'ethernets', 6, 'ethernet', 'inadequate', 'finalflagged', '2018-06-24 09:13:19', 2, 'catering', 2),
(11, 'router', 1, 'Cisco', 'Faulty', 'finalapproved', '2018-06-24 09:15:12', 2, 'catering', 2),
(12, 'printer', 5, 'hp', 'damaged', 'finalapproved', '2018-06-27 13:21:22', 6, 'medicine', 4),
(13, 'mouse', 3, 'dell', 'notworking', 'ordered', '2018-06-27 14:41:08', 5, 'catering', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `item` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`item`, `quantity`, `price`) VALUES
('catridges', 100, 500),
('lab coats', 10, 5000),
('printer', 0, 3000),
('router', 70, 1000),
('spanner', 5, 50),
('spoon', 100, 10),
('telephone', 10, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`Budget_id`),
  ADD KEY `Budget_target` (`Budget_target`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`employeenumber`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `items` (`items`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employeeid` (`employeeid`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `item` (`item`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`item`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `Budget_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `employeenumber` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `budgets`
--
ALTER TABLE `budgets`
  ADD CONSTRAINT `budgets_ibfk_1` FOREIGN KEY (`Budget_target`) REFERENCES `department` (`department_id`) ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `department` (`department_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`items`) REFERENCES `stores` (`item`) ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`employeeid`) REFERENCES `login` (`employeenumber`) ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `department` (`department_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
