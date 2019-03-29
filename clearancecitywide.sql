-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 05:01 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3
=======
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 11:34 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
<<<<<<< HEAD
/*!40101 SET NAMES utf8 */;
=======
/*!40101 SET NAMES utf8mb4 */;
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

--
-- Database: `clearancecitywide`
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `admin_account`
--

CREATE TABLE IF NOT EXISTS `admin_account` (
`admin_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password1` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`admin_id`, `username`, `password1`) VALUES
(14, 'admin', 'admin');
=======
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
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `barangay` (
  `barangay_id` int(11) NOT NULL,
=======
CREATE TABLE `barangay` (
  `barangay_id` int(30) NOT NULL,
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
  `barangay_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay_name`) VALUES
<<<<<<< HEAD
(1, 'Mt. Tonturatoy'),
(2, 'Mobod'),
(3, 'Taboc Norte'),
(4, 'Taboc Sur'),
(5, 'Villaflor');
=======
(5, 'Mobod');
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `captain`
--

CREATE TABLE IF NOT EXISTS `captain` (
`captain_id` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captain`
--

INSERT INTO `captain` (`captain_id`, `first_name`, `middle_name`, `last_name`, `barangay_id`) VALUES
(1, 'JR ', 'A.', 'Bolleno', 1),
(2, 'Paul', 'Pol', 'Caburnay', 2);
=======
-- Table structure for table `barangay staff`
--

CREATE TABLE `barangay staff` (
  `staff_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `cedula`
--

CREATE TABLE IF NOT EXISTS `cedula` (
  `cedula_number` int(30) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(30,0) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cedula`
--

INSERT INTO `cedula` (`cedula_number`, `date`, `amount`, `staff_id`) VALUES
(1, '2019-03-12', '21', 19);
=======
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
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Table structure for table `clearance`
--

CREATE TABLE IF NOT EXISTS `clearance` (
`clearance_id` int(30) NOT NULL,
  `person_number` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(30,0) NOT NULL,
  `cedula_number` int(11) NOT NULL,
  `captain_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`clearance_id`, `person_number`, `date`, `amount`, `cedula_number`, `captain_id`, `staff_id`, `barangay_id`, `purpose`) VALUES
(12, 12, '2019-03-09', '90', 1, 2, 18, 2, 'Abroad');
=======
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
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `person` (
`person_number` int(30) NOT NULL,
=======
CREATE TABLE `person` (
  `person_number` int(30) NOT NULL,
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `middle_initial` varchar(30) NOT NULL,
  `status` text NOT NULL,
  `birthday` date NOT NULL,
<<<<<<< HEAD
  `staff_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
=======
  `barangay_id` int(30) NOT NULL,
  `captain_id` int(30) NOT NULL,
  `staff_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

--
-- Dumping data for table `person`
--

<<<<<<< HEAD
INSERT INTO `person` (`person_number`, `first_name`, `last_name`, `middle_initial`, `status`, `birthday`, `staff_id`, `barangay_id`) VALUES
(11, 'ron', 'cajan', 'm', 'Single', '2001-02-11', 18, 2),
(12, 'ron', 'gagalac', 'm', 'Married', '1212-02-12', 18, 2);
=======
INSERT INTO `person` (`person_number`, `first_name`, `last_name`, `middle_initial`, `status`, `birthday`, `barangay_id`, `captain_id`, `staff_id`) VALUES
(13, 'Ronil', 'Cajan', 'P.', 'Married', '2019-02-16', 12, 13, 16);
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `staff` (
`staff_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password2` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
=======
CREATE TABLE `staff` (
  `staff_id` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

--
-- Dumping data for table `staff`
--

<<<<<<< HEAD
INSERT INTO `staff` (`staff_id`, `first_name`, `middle_name`, `last_name`, `username`, `password2`, `position`, `barangay_id`) VALUES
(18, 'Kelvin', 'Mark', 'Badiang', 'mark', 'mark', 'Secretary', 2),
(19, 'JM', 'Sta', 'Clara', 'jm', 'jm', 'Secretary', 4);
=======
INSERT INTO `staff` (`staff_id`, `first_name`, `middle_name`, `last_name`) VALUES
(123123, 'Earl John', 'Pogi', 'Banez');
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

--
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
 ADD PRIMARY KEY (`admin_id`);
=======
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
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
<<<<<<< HEAD
 ADD PRIMARY KEY (`barangay_id`);
=======
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `barangay staff`
--
ALTER TABLE `barangay staff`
  ADD PRIMARY KEY (`staff_id`);
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

--
-- Indexes for table `captain`
--
ALTER TABLE `captain`
<<<<<<< HEAD
 ADD PRIMARY KEY (`captain_id`);
=======
  ADD PRIMARY KEY (`captain_id`);
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

--
-- Indexes for table `cedula`
--
ALTER TABLE `cedula`
<<<<<<< HEAD
 ADD PRIMARY KEY (`cedula_number`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
 ADD PRIMARY KEY (`clearance_id`), ADD KEY `person_id` (`person_number`), ADD KEY `person_id_2` (`person_number`), ADD KEY `person_number` (`person_number`), ADD KEY `cedula_number` (`cedula_number`), ADD KEY `cedula_number_2` (`cedula_number`), ADD KEY `cedula_number_3` (`cedula_number`), ADD KEY `person_number_2` (`person_number`);
=======
  ADD PRIMARY KEY (`cedula_number`);
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

--
-- Indexes for table `person`
--
ALTER TABLE `person`
<<<<<<< HEAD
 ADD PRIMARY KEY (`person_number`), ADD KEY `staff_id` (`staff_id`);
=======
  ADD PRIMARY KEY (`person_number`),
  ADD KEY `barangay_id` (`barangay_id`),
  ADD KEY `captain_id` (`captain_id`),
  ADD KEY `staff_id` (`staff_id`);
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
<<<<<<< HEAD
 ADD PRIMARY KEY (`staff_id`), ADD KEY `barangay_id` (`barangay_id`);
=======
  ADD PRIMARY KEY (`staff_id`);
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a

--
-- AUTO_INCREMENT for dumped tables
--

--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
=======
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
--
-- AUTO_INCREMENT for table `captain`
--
ALTER TABLE `captain`
<<<<<<< HEAD
MODIFY `captain_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
MODIFY `clearance_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
MODIFY `person_number` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
=======
  MODIFY `captain_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
<<<<<<< HEAD
MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
=======
  MODIFY `staff_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123124;
>>>>>>> ce1551d523a15c96845049e8d3f47a8301a6b18a
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
