-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 10:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud3`
--

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`id`, `emp_id`, `emp_name`, `emp_email`, `gender`, `designation`, `contact`, `address`) VALUES
(14, '1', 'Meera Singh', 'meerasingh@mail.com', 'Female', 'UI Designer', '767676565', 'New Delhi,Sec-21'),
(15, '2', 'Seeta sanka', 'seeta@mail.com', 'Female', 'UXDesigner', '905454343', 'Server404,Internet'),
(16, '3', 'Vivek Miley', 'vivek@mail.com', 'Male', 'Web Developer', '90909787', 'Hosting server place'),
(17, '4', 'Raj link', 'raj@mail.com', 'Male', 'Frontend Developer', '898900322', 'New Delhi,Sec-21'),
(18, '5', 'Roneey gul', 'raneey@mail.com', 'Male', 'Business Development ', '788989090', 'Hostingly FREE'),
(19, '6', 'Priya miley', 'priya@mail.com', 'Female', 'Hr manager', '909089888', 'Server3 place'),
(21, '12', 'Geetha R', 'geetha@mail.com', 'Female', 'Kitchen staff', '898989892', 'server4,hosting cloude'),
(22, '21', 'Mohan kr', 'mohankr23@v.com', 'Male', 'Poen Staff', '656565653', 'Server4,S'),
(23, '43', 'Raju k', 'raju@mail.com', 'Male', 'Staff', '56565444', 'server54'),
(24, '23', 'Ferlim sheikh', 'ferlim@m', 'Female', 'operator', '454545433', 'fatanpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cc`
--
ALTER TABLE `cc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cc`
--
ALTER TABLE `cc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
