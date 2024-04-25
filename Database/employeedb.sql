-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 11:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `password_string` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `password_string`, `status`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'admin@ems.com', '$2y$10$rrwZV.aNjbwv2bl2xUGJm.kKlvcOYUQT.dNpFg3AegXyqdGZ8apNO', '123', 2, '2024-04-20 18:53:24', 0, '2024-04-20 17:05:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`) VALUES
(1, 'IT', 'Information Technology'),
(2, 'HR', 'Human Resources'),
(3, 'FIN', 'Finance'),
(4, 'SALES', 'Sales'),
(5, 'MARK', 'Marketing'),
(6, 'ENG', 'Engineering'),
(7, 'ADM', 'Administration'),
(8, 'QA', 'Quality Assurance'),
(9, 'OP', 'Operations'),
(10, 'LEGAL', 'Legal');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `reference_code` varchar(50) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `department_id` int(11) DEFAULT 0,
  `salary` decimal(10,2) DEFAULT 0.00,
  `password` varchar(255) NOT NULL,
  `password_string` varchar(255) NOT NULL,
  `OTP` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `profile_status` int(11) NOT NULL DEFAULT 0,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `reference_code`, `firstname`, `lastname`, `email`, `mobile_number`, `gender`, `department_id`, `salary`, `password`, `password_string`, `OTP`, `status`, `profile_status`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(4, 'EMP/001', 'Abdullah', 'Asghar Ali', 'tah@gmail.com', '123456789', '0', 3, '30000.00', '$2y$10$rrwZV.aNjbwv2bl2xUGJm.kKlvcOYUQT.dNpFg3AegXyqdGZ8apNO', '123', 'JSDBF8', 2, 0, '2024-04-19 19:32:16', 0, '2024-04-24 20:48:41', 0),
(5, 'EMP/002', 'Ali', 'Haider', 'ali@gmail.com', '032323245676', '0', 2, '20000.00', '$2y$10$rrwZV.aNjbwv2bl2xUGJm.kKlvcOYUQT.dNpFg3AegXyqdGZ8apNO', '123', 'JSDBF8', 2, 0, '2024-04-24 15:36:59', 0, '2024-04-24 20:55:40', 0),
(6, 'EMP/003', 'Malaika', 'Yousaf', 'malaika@gmail.com', '0234561783', '1', 3, '7000.00', '$2y$10$rrwZV.aNjbwv2bl2xUGJm.kKlvcOYUQT.dNpFg3AegXyqdGZ8apNO', '123', 'JSDBF8', 2, 0, '2024-04-24 15:36:59', 0, '2024-04-24 14:18:03', 0),
(7, 'EMP/007', 'Alia', 'Hamza', 'alia@gmail.com', '7684856', '1', 4, '20000.00', '$2y$10$rrwZV.aNjbwv2bl2xUGJm.kKlvcOYUQT.dNpFg3AegXyqdGZ8apNO', '123', 'T0HWCZ', 2, 1, '2024-04-24 16:33:33', 0, '2024-04-24 14:37:48', 0),
(8, 'EMP/008', 'Talha', 'Khan', 'talha@gmail.com', '56482468', '0', 1, '123.00', '$2y$10$EvUohyPwqfkaSZ1APFEYWOktvCadfQGW7ywJTdjYidhka296y7iUi', '123', 'H5FUYW', 2, 0, '2024-04-24 22:24:50', 0, '2024-04-24 20:24:50', 0),
(9, 'EMP/009', 'Mudassir', 'Zaheer', 'mudassir@gmail.com', '92348014787', '0', 1, '7000.00', '$2y$10$p/pSY3rlWkxBbyO0nTxkZ./qjqFA3WFgbF8RqLKIjc1A.YMStIlz.', '123', '1YSA1G', 2, 0, '2024-04-24 22:50:46', 0, '2024-04-24 20:50:46', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `id` int(11) NOT NULL,
  `reference_code` varchar(255) NOT NULL DEFAULT '',
  `firstname` varchar(255) NOT NULL DEFAULT '',
  `lastname` varchar(255) NOT NULL DEFAULT '',
  `reason` varchar(255) NOT NULL DEFAULT '',
  `leaveFrom` date NOT NULL,
  `leaveTill` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0 = PENDING\r\n1 = APPROVED\r\n2 = REJECTED\r\n3 = Cancelled by user',
  `added_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `updated_by` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`id`, `reference_code`, `firstname`, `lastname`, `reason`, `leaveFrom`, `leaveTill`, `status`, `added_on`, `updated_on`, `updated_by`) VALUES
(1, 'EMP/001', 'Abdullah', 'Asghar', 'Going abroad', '2024-04-25', '2024-05-02', 2, '2024-04-24', '2024-04-24', 'Admin'),
(2, 'EMP/001', 'Abdullah', 'Asghar', 'Going on trip', '2024-04-18', '2024-04-25', 3, '2024-04-24', '2024-04-24', 'EMP/001'),
(3, 'EMP/001', 'Abdullah', 'Asghar', 'Going on trip', '2024-04-02', '2024-04-25', 3, '2024-04-24', '2024-04-24', 'EMP/001'),
(4, 'EMP/001', 'Abdullah', 'Asghar', 'report that', '2024-04-01', '2024-04-25', 1, '2024-04-24', '2024-04-24', 'Admin'),
(5, 'EMP/001', 'Abdullah', 'Asghar Ali', 'Emergency', '2024-04-25', '2024-04-26', 0, '2024-04-24', '0000-00-00', ''),
(6, 'EMP/002', 'Ali', 'Haider', 'Going to Hospital for checkuo', '2024-04-03', '2024-04-25', 0, '2024-04-24', '0000-00-00', ''),
(7, 'EMP/003', 'Malaika', 'Yousaf', 'Yearly Leaves', '2024-04-09', '2024-04-30', 0, '2024-04-24', '0000-00-00', ''),
(8, 'EMP/008', 'Talha', 'Khan', 'Going for Hajj', '2024-04-01', '2024-04-23', 0, '2024-04-24', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `reference_code` varchar(255) NOT NULL DEFAULT '',
  `action` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `added_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `reference_code`, `action`, `status`, `added_on`) VALUES
(1, 'Admin', 'Logged In', 'Success', '2024-04-25'),
(2, 'Admin', 'Logged In', 'Success', '2024-04-25'),
(3, 'EMP/001', 'Logged In', 'Success', '2024-04-25'),
(4, 'EMP/001', 'Updated Information', 'Success', '2024-04-25'),
(5, 'Admin', 'Logged In', 'Success', '2024-04-25'),
(6, 'Admin', 'Approved Leave with id4', 'Success', '2024-04-25'),
(7, 'Admin', 'Added New Department', 'Success', '2024-04-25'),
(8, 'Admin', 'Added New user', 'Success', '2024-04-25'),
(9, 'EMP/001', 'Logged In', 'Success', '2024-04-25'),
(10, 'EMP/001', 'Applied Leave', 'Success', '2024-04-25'),
(11, 'EMP/002', 'Logged In', 'Success', '2024-04-25'),
(12, 'EMP/002', 'Updated Information', 'Success', '2024-04-25'),
(13, 'EMP/002', 'Applied Leave', 'Success', '2024-04-25'),
(14, 'EMP/003', 'Logged In', 'Success', '2024-04-25'),
(15, 'EMP/003', 'Applied Leave', 'Success', '2024-04-25'),
(16, 'EMP/008', 'Logged In', 'Success', '2024-04-25'),
(17, 'EMP/008', 'Applied Leave', 'Success', '2024-04-25'),
(18, 'Admin', 'Logged In', 'Success', '2024-04-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_department_id` (`department_id`);

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `leave_requests`
--
ALTER TABLE `leave_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk_department_id` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
