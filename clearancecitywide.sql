-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 11:34 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearancecitywide`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'earl', 'a5307dcdfef4c4ecbb514b1670774b'),
(2, 'love', '63d9d7b9202679a4adef678a128c88'),
(3, 'proo', 'fc16521f37878fcde2f89fff5e7ee4'),
(4, 'hoy', 'd6a7c8bcd71293f85ea6ae3adc3b44'),
(5, 'earl', 'a8f5f167f44f4964e6c998dee82711'),
(6, 'budo', '9f1c441765f9cddfa618413dd25fbf'),
(7, 'asdasd', 'a8f5f167f44f4964e6c998dee82711');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `clearance_id` int(30) NOT NULL,
  `or_no` int(30) NOT NULL,
  `person_id` int(30) NOT NULL,
  `barangay_id` int(30) NOT NULL,
  `purpose` varchar(30) NOT NULL,
  `date` int(30) NOT NULL,
  `amount` decimal(30,0) NOT NULL,
  `cedula_id` int(30) NOT NULL,
  `captain_id` int(30) NOT NULL,
  `staff_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `barangay_id` int(30) NOT NULL,
  `barangay_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay_name`) VALUES
(5, 'Mobod');

-- --------------------------------------------------------

--
-- Table structure for table `barangay staff`
--

CREATE TABLE `barangay staff` (
  `staff_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `captain`
--

CREATE TABLE `captain` (
  `captain_id` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captain`
--

INSERT INTO `captain` (`captain_id`, `first_name`, `middle_name`, `last_name`) VALUES
(2, 'Budodo', 'Pogi', 'Egoniaaa');

-- --------------------------------------------------------

--
-- Table structure for table `cedula`
--

CREATE TABLE `cedula` (
  `cedula_number` int(30) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(30,0) NOT NULL,
  `place` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cedula`
--

INSERT INTO `cedula` (`cedula_number`, `date`, `amount`, `place`) VALUES
(2, '2019-02-22', '17', 'Taboc Norte/Sur');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_number` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `middle_initial` varchar(30) NOT NULL,
  `status` text NOT NULL,
  `birthday` date NOT NULL,
  `barangay_id` int(30) NOT NULL,
  `captain_id` int(30) NOT NULL,
  `staff_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_number`, `first_name`, `last_name`, `middle_initial`, `status`, `birthday`, `barangay_id`, `captain_id`, `staff_id`) VALUES
(13, 'Ronil', 'Cajan', 'P.', 'Married', '2019-02-16', 12, 13, 16);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `middle_name`, `last_name`) VALUES
(123123, 'Earl John', 'Pogi', 'Banez');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`clearance_id`),
  ADD KEY `barangay_id` (`barangay_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `captain_id` (`captain_id`),
  ADD KEY `cedula_id` (`cedula_id`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `barangay staff`
--
ALTER TABLE `barangay staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `captain`
--
ALTER TABLE `captain`
  ADD PRIMARY KEY (`captain_id`);

--
-- Indexes for table `cedula`
--
ALTER TABLE `cedula`
  ADD PRIMARY KEY (`cedula_number`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_number`),
  ADD KEY `barangay_id` (`barangay_id`),
  ADD KEY `captain_id` (`captain_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `captain`
--
ALTER TABLE `captain`
  MODIFY `captain_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123124;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
