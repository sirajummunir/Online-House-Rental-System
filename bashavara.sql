-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 04:34 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bashavara`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$0wdXwZCGRgrLP9syjUVlduzWA9XTAaH43/XZWIfp3OvNWOMV0Oq8K');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `ad_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `balcony` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `washroom` int(11) NOT NULL,
  `details` text NOT NULL,
  `active` int(11) NOT NULL,
  `pending` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`ad_id`, `owner_id`, `title`, `category`, `month`, `bedroom`, `balcony`, `kitchen`, `washroom`, `details`, `active`, `pending`, `image`) VALUES
(1, 1, 'Roommate Wanted', 'One_Seat', 'March', 1, 1, 1, 1, 'If you feel any query please call the contact number.', 1, 1, 'resource/images/banglatolet_productP7TEh1uGlRuF_main.jpg'),
(2, 1, 'Roommate Wanted', 'One_Seat', 'March', 2, 1, 1, 1, '', 1, 1, 'resource/images/01eae45da.jpg'),
(3, 1, 'Roommate Wanted', 'Two_Seat', 'March', 1, 1, 1, 1, '', 1, 1, 'resource/images/BD-511.jpg'),
(4, 1, 'Roommate Wanted', 'Family', 'March', 3, 2, 1, 1, '', 1, 0, 'resource/images/modern-home.jpg'),
(5, 1, 'Bachelor Flat Available', 'Bachelor', 'March', 2, 2, 1, 2, 'Full fresh', 1, 0, 'resource/images/download_(1).jpg'),
(6, 1, 'One Room Available', 'One_Room', 'March', 1, 1, 1, 1, '', 1, 0, 'resource/images/gubhostel3.jpg'),
(7, 1, 'Bachelor Flat Available', 'Bachelor', 'March', 2, 1, 1, 2, '', 0, 1, 'resource/images/download1.jpg'),
(8, 1, 'Room Available', 'One_Room', 'April', 1, 0, 1, 1, 'If you feel any query please call the contact number.', 1, 0, 'resource/images/unnamed.jpg'),
(9, 1, 'One Flat Available', 'Family', 'December', 5, 3, 2, 3, 'Urgent', 0, 0, 'resource/images/food1.png'),
(10, 1, 'One Flat Available', 'Family', 'December', 1, 4, 1, 1, 'Urgent', 1, 0, 'resource/images/10.jpg'),
(11, 1, 'One Flat Available', 'Family', 'December', 3, 2, 1, 2, 'Fully tiles', 1, 1, 'resource/images/unnamed1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `house_name` varchar(50) NOT NULL,
  `house_no` int(11) NOT NULL,
  `road_no` int(11) NOT NULL,
  `block` varchar(10) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `block_account` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `first_name`, `last_name`, `occupation`, `position`, `gender`, `nationality`, `nid`, `email`, `mobile`, `house_name`, `house_no`, `road_no`, `block`, `area_name`, `city`, `password`, `block_account`) VALUES
(1, 'Sojib', 'Khan', 'Businessman', 'Director', 'Male', 'Bangladeshi', '1234567890', 'sojib@gmail.com', '01761400688', 'Ma Villa', 10, 3, 'A', 'Mirpur', 'Dhaka', '$2y$10$0wdXwZCGRgrLP9syjUVlduzWA9XTAaH43/XZWIfp3OvNWOMV0Oq8K', 0);

-- --------------------------------------------------------

--
-- Table structure for table `owner_report`
--

CREATE TABLE `owner_report` (
  `report_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_report`
--

INSERT INTO `owner_report` (`report_id`, `owner_id`, `renter_id`, `reason`) VALUES
(1, 1, 1, 'Fake Owner.'),
(2, 1, 1, 'Attitude is so bad.');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `renter_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `block` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`renter_id`, `first_name`, `last_name`, `occupation`, `position`, `gender`, `religion`, `email`, `mobile`, `p_address`, `city`, `nationality`, `nid`, `password`, `block`) VALUES
(1, 'Himel', 'Khan', 'Service Holder', 'Manager', 'Male', 'Islam', 'himel@gmail.com', '01626723717', 'Mirpur-Dhaka', 'Dhaka', 'Bangladeshi', '1234567890', '$2y$10$v.GgNf6DWeaOuZattN0kI.MS/JZKVLlrVaiKVpJ.esAnWIf2f7AfK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `owner_id`, `renter_id`, `reason`) VALUES
(1, 1, 1, 'The renter attitude is very bad.'),
(2, 1, 1, 'Renter behavior is so bad.'),
(3, 1, 1, 'Bad Attitude');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `renter_id` int(11) NOT NULL,
  `visiting_date` varchar(20) NOT NULL,
  `visiting_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `ad_id`, `renter_id`, `visiting_date`, `visiting_time`) VALUES
(1, 7, 1, '2020-02-25', '08:00'),
(2, 6, 1, '2020-02-26', '08:00'),
(3, 5, 1, '2020-02-27', '10:00'),
(4, 1, 1, '2020-02-26', '00:00'),
(5, 9, 1, '2020-11-07', '04:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `owner_report`
--
ALTER TABLE `owner_report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`renter_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owner_report`
--
ALTER TABLE `owner_report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `renter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
