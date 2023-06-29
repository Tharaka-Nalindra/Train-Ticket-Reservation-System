-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 07:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(2) NOT NULL,
  `class_type` varchar(20) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_type`, `price`) VALUES
(1, 'observation', 1500),
(2, 'Gen_1st', 1100),
(3, 'Gen_2nd', 500),
(4, 'Gen_3rd', 200),
(5, 'AC_spec', 800),
(6, 'Cabin_1st', 700),
(7, 'Seat_2nd', 600),
(8, 'Seat_3rd', 500);

-- --------------------------------------------------------

--
-- Table structure for table `dependents`
--

CREATE TABLE `dependents` (
  `ticket_id` int(8) DEFAULT NULL,
  `nic_dep` varchar(15) DEFAULT NULL,
  `full_name` varchar(50) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `over_18` int(1) DEFAULT NULL,
  `seat_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
--
-- Dumping data for table `dependents`
--

INSERT INTO `dependents` (`ticket_id`, `nic_dep`, `full_name`, `gender`, `over_18`, `seat_id`) VALUES
(NULL, '', 'a', 'M', 0, NULL),
(NULL, '', 'b', 'M', 0, NULL),
(NULL, '', 'c', 'M', 0, NULL),
(NULL, '', 'd', 'M', 0, NULL),
(NULL, '', 'e', 'M', 0, NULL),
(NULL, '', 'f', 'M', 0, NULL),
(NULL, '', 'g', 'M', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT 0,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `ticket_id`, `payment_status`, `date_time`) VALUES
(4, 100784578, 1, '2021-12-12 13:11:29'),
(5, 100784579, 1, '2021-12-14 11:37:51'),
(6, 100784578, 1, '2021-12-14 16:09:01'),
(7, 100784578, 1, '2021-12-18 05:10:07'),
(8, 100784578, 1, '2021-12-18 05:12:52'),
(9, 100784578, 1, '2021-12-18 05:26:42'),
(10, 100784578, 1, '2021-12-18 05:28:01'),
(11, 100784578, 1, '2021-12-18 05:28:01'),
(12, 100784578, 1, '2021-12-18 05:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `ticket_id` int(8) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `address1` varchar(70) DEFAULT NULL,
  `address2` varchar(70) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `zip` int(5) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `nic` varchar(15) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `purpose` int(1) DEFAULT NULL,
  `only_appli` int(1) DEFAULT NULL,
  `time_book` time DEFAULT NULL,
  `date_book` date DEFAULT NULL,
  `class_id` int(2) DEFAULT NULL,
  `seat_id` int(2) DEFAULT NULL,
  `payment_id` int(5) DEFAULT NULL,
  `train_id` varchar(10) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `class_type` varchar(20) DEFAULT NULL,
  `pay_method` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `availibility` int(1) DEFAULT NULL,
  `class_id` int(2) NOT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `seat_id` int(11) NOT NULL,
  `train` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `seat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `seat_name`) VALUES
(1, 'seat 1'),
(2, 'seat 1'),
(3, 'seat 3'),
(4, 'seat 4'),
(5, 'seat 5'),
(6, 'seat 6'),
(7, 'seat 7'),
(8, 'seat 8'),
(9, 'seat 9'),
(10, 'seat 10'),
(11, 'seat 11'),
(12, 'seat 12'),
(13, 'seat 13'),
(14, 'seat 14'),
(15, 'seat 15'),
(16, 'seat 16'),
(17, 'seat 17'),
(18, 'seat 18'),
(19, 'seat 19'),
(20, 'seat 20'),
(21, 'seat 21'),
(22, 'seat 22'),
(23, 'seat 23'),
(24, 'seat 24'),
(25, 'seat 25'),
(26, 'seat 26'),
(27, 'seat 27'),
(28, 'seat 28'),
(29, 'seat 29'),
(30, 'seat 30'),
(31, 'seat 31'),
(32, 'seat 32'),
(33, 'seat 33'),
(34, 'seat 34'),
(35, 'seat 35'),
(36, 'seat 36'),
(37, 'seat 37'),
(38, 'seat 38'),
(39, 'seat 39'),
(40, 'seat 40');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `train_id` varchar(10) NOT NULL,
  `tr_date` datetime DEFAULT NULL,
  `destinantion` varchar(30) DEFAULT NULL,
  `arrive_time` time(5) DEFAULT NULL,
  `start_loc` varchar(30) DEFAULT NULL,
  `departure_time` time(5) DEFAULT NULL,
  `train_name` varchar(30) DEFAULT NULL,
  `route` varchar(15) DEFAULT NULL,
  `availability` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_id`, `tr_date`, `destinantion`, `arrive_time`, `start_loc`, `departure_time`, `train_name`, `route`, `availability`) VALUES
('EB1001', '2021-01-01 00:00:00', 'Trincomalee', '06:05:00.00000', 'Colombo Fort', '13:55:00.00000', 'Express (B)	', 'Eastern line', 'N'),
('EB1002', '2021-01-01 00:00:00', 'Batticaloa', '06:05:00.00000', 'Colombo fort', '15:45:00.00000', 'Express (B)	', 'Eastern line', 'Y'),
('EB1003', '2021-01-01 00:00:00', 'Colombo fort', '10:00:00.00000', 'Trincomalee', '19:00:00.00000', 'Express (B)	', 'Eastern line', 'Y'),
('EB1004', '2021-01-01 00:00:00', 'Colombo fort', '05:20:00.00000', 'Batticaloa', '15:50:00.00000', 'Express (B)	', 'Eastern line', 'Y'),
('EB1005', '2021-01-01 00:00:00', 'Matara', '12:00:00.00000', 'Colombo Fort', '08:35:00.00000', 'Express (B)', 'Coastal Line', 'Y'),
('EB1006', '2021-01-01 00:00:00', 'Matara', '11:00:00.00000', 'Colombo Fort', '06:55:00.00000', 'Express (B)', 'Coastal Line', 'Y'),
('EB1007', '2021-01-01 00:00:00', 'Colombo fort', '10:00:00.00000', 'Matara', '14:00:00.00000', 'Express (B)', 'Coastal Line', 'Y'),
('GK1001', '2021-01-01 00:00:00', 'Matara', '18:00:00.00000', 'Maradana', '13:00:00.00000', 'Galu Kumari', 'Coastal Line', 'Y'),
('GK1002', '2021-01-01 00:00:00', 'Maradana', '10:00:00.00000', 'Matara', '05:00:00.00000', 'Galu Kumari', 'Coastal Line', 'N'),
('MG1001', '2021-01-01 00:00:00', 'Colombo Fort', '18:00:00.00000', 'Batticlao', '08:00:00.00000', 'Meena Gaya', 'Eastern', 'Y'),
('MG1002', '2021-01-01 00:00:00', 'Batticlao', '18:00:00.00000', 'Colombo Fort', '08:00:00.00000', 'Meena Gaya', 'Eastern', 'Y'),
('MK1001', '2021-01-01 00:00:00', 'Chilaw', '20:42:00.00000', 'Colombo Fort', '18:05:00.00000', 'Muthu Kumari (A)', 'Puttalam Line', 'Y'),
('MK1002', '2021-01-01 00:00:00', 'Puttalam', '07:49:00.00000', 'Chilaw', '05:20:00.00000', 'Muthu Kumari (A)', 'Puttalam Line', 'Y'),
('NA1001', '2021-01-01 00:00:00', 'Noor Nagar', '08:27:00.00000', 'Colombo Fort', '04:00:00.00000', 'Normal (A)', 'Puttalam Line', 'Y'),
('NA1002', '2021-01-01 00:00:00', 'Puttalam', '12:10:00.00000', 'Colombo Fort', '07:35:00.00000', 'Normal (A)', 'Puttalam Line', 'Y'),
('NA1003', '2021-01-01 00:00:00', 'Noor Nagar', '15:33:00.00000', 'Colombo Fort', '11:30:00.00000', 'Normal (A)', 'Puttalam Line', 'N'),
('NA1004', '2021-01-01 00:00:00', 'Puttalam', '20:43:00.00000', 'Colombo Fort', '17:30:00.00000', 'Normal (A)', 'Puttalam Line', 'Y'),
('NA1005', '2021-01-01 00:00:00', 'Puttalam', '23:20:00.00000', 'Colombo Fort', '17:10:00.00000', 'Normal (A)', 'Puttalam Line', 'Y'),
('NA1006', '2021-01-01 00:00:00', 'Colombo fort', '08:10:00.00000', 'Noor Nagar', '19:00:00.00000', 'Normal (A)', 'Puttalam Line', 'Y'),
('NA1007', '2021-01-01 00:00:00', 'Colombo fort', '14:04:00.00000', 'Noor Nagar', '04:35:00.00000', 'Normal (A)', 'Puttalam Line', 'Y'),
('NA1008', '2021-01-01 00:00:00', 'Colombo fort', '20:55:00.00000', 'Noor Nagar', '09:50:00.00000', 'Normal (A)', 'Puttalam Line', 'Y'),
('NC1001', '2021-01-01 00:00:00', 'Anuradhapura', '08:45:00.00000', 'Colombo fort', '14:10:00.00000', 'Normal (C)	', 'Northern line', 'Y'),
('NC1002', '2021-01-01 00:00:00', 'Colombo Fort', '08:40:00.00000', 'Anuradhapura', '14:00:00.00000', 'Normal (C)	', 'Northern line', 'Y'),
('NC1003', '2021-01-01 00:00:00', 'Galle', '21:00:00.00000', 'Maradana', '17:00:00.00000', 'Normal (C)', 'Coastal Line', 'Y'),
('NC1004', '2021-01-01 00:00:00', 'Galle', '22:00:00.00000', 'Maradana', '18:00:00.00000', 'Normal (C)', 'Coastal Line', 'Y'),
('NC1005', '2021-01-01 00:00:00', 'Maradana', '07:00:00.00000', 'Galle', '03:00:00.00000', 'Normal (C)', 'Coastal Line', 'Y'),
('NC1006', '2021-01-01 00:00:00', 'Maradana', '07:00:00.00000', 'Galle', '04:00:00.00000', 'Normal (C)', 'Coastal Line', 'Y'),
('NC1007', '2021-01-01 00:00:00', 'Maradana', '13:00:00.00000', 'Galle', '09:00:00.00000', 'Normal (C)', 'Coastal Line', 'Y'),
('NC1008', '2021-01-01 00:00:00', 'Matara', '22:00:00.00000', 'Maradana', '17:00:00.00000', 'Normal (C)', 'Coastal Line', 'N'),
('NM1001', '2021-01-01 00:00:00', 'Vavuniya', '22:00:00.00000', 'Colombo Fort', '05:05:00.00000', 'Night Mail	', 'Northern line', 'Y'),
('NM1002', '2021-01-01 00:00:00', 'Colombo Fort', '22:00:00.00000', 'Vavuniya', '04:45:00.00000', 'Night Mail	', 'Northern line', 'Y'),
('NM1003', '2021-01-01 00:00:00', 'Trincomalee', '21:00:00.00000', 'Colombo Fort', '05:10:00.00000', 'Night mail', 'Eastern line', 'Y'),
('NM1004', '2021-01-01 00:00:00', 'Batticaloa', '21:00:00.00000', 'Colombo Fort', '08:05:00.00000', 'Night mail', 'Eastern line', 'Y'),
('NM1005', '2021-01-01 00:00:00', 'Colombo Fort', '19:00:00.00000', 'Trincomalee', '04:15:00.00000', 'Night mail', 'Eastern line', 'N'),
('NM1006', '2021-01-01 00:00:00', 'Colombo Fort', '17:20:00.00000', 'Batticaloa', '04:15:00.00000', 'Night mail', 'Eastern line', 'Y'),
('PM1001', '2021-01-01 00:00:00', 'Colombo Fort', '20:00:00.00000', 'Badulla', '10:00:00.00000', 'Podi Manike', 'Main Line', 'N'),
('PM1002', '2021-01-01 00:00:00', 'Badulla', '20:00:00.00000', 'Colombo Fort', '10:00:00.00000', 'Podi Manike', 'Main Line', 'Y'),
('RK1001', '2021-01-01 00:00:00', 'Matara', '19:00:00.00000', 'Maradana', '15:00:00.00000', 'Ruhunu Kumari', 'Coastal Line', 'Y'),
('RK1002', '2021-01-01 00:00:00', 'Maradana', '09:00:00.00000', 'Matara', '05:00:00.00000', 'Ruhunu Kumari', 'Coastal Line', 'Y'),
('RR1001', '2021-01-01 00:00:00', 'Colombo Fort', '09:30:00.00000', 'Matara', '13:20:00.00000', 'Rajarata Rajini	', 'Northern line', 'Y'),
('RR1002', '2021-01-01 00:00:00', 'Vavuniya', '13:45:00.00000', 'Colombo Fort', '20:15:00.00000', 'Rajarata Rajini	', 'Northern line', 'Y'),
('RR1003', '2021-01-01 00:00:00', 'Colombo Fort', '03:15:00.00000', 'Vavuniya', '09:55:00.00000', 'Rajarata Rajini	', 'Northern line', 'N'),
('RR1004', '2021-01-01 00:00:00', 'Matara', '10:30:00.00000', 'Colombo Fort', '14:26:00.00000', 'Rajarata Rajini	', 'Northern line', 'Y'),
('S1001', '2021-01-01 00:00:00', 'Matara', '19:00:00.00000', 'Maradana', '16:00:00.00000', 'Sangarika', 'Coastal Line', 'Y'),
('S1002', '2021-01-01 00:00:00', 'Maradana', '08:00:00.00000', 'Matara', '04:00:00.00000', 'Sangarika', 'Coastal Line', 'N'),
('SD1001', '2021-01-01 00:00:00', 'Galle', '20:00:00.00000', 'Maradana', '17:00:00.00000', 'Samudra Devi', 'Coastal Line', 'Y'),
('SD1002', '2021-01-01 00:00:00', 'Maradana', '08:00:00.00000', 'Galle', '05:00:00.00000', 'Samudra Devi', 'Coastal Line', 'Y'),
('UM1005', '2021-01-01 00:00:00', 'Colombo Fort', '18:00:00.00000', 'Badulla', '08:00:00.00000', 'Udarata Manike', 'Main Line', 'Y'),
('UM1006', '2021-01-01 00:00:00', 'Badulla', '18:00:00.00000', 'Colombo Fort', '08:00:00.00000', 'Udarata Manike', 'Main Line', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `dependents`
--
ALTER TABLE `dependents`
  ADD PRIMARY KEY (`full_name`),
  ADD KEY `ticket_id` (`ticket_id`);


--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `train_id` (`train_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`,`class_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `seat_id_2` (`seat_id`),
  ADD KEY `train` (`train`),
  ADD KEY `train_2` (`train`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`train_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `ticket_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dependents`
--
ALTER TABLE `dependents`
  ADD CONSTRAINT `dependents_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `persons` (`ticket_id`);

--
-- Constraints for table `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `persons_ibfk_1` FOREIGN KEY (`train_id`) REFERENCES `train` (`train_id`),
  ADD CONSTRAINT `persons_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`train`) REFERENCES `train` (`train_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
