-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 02:04 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `age` int(11) NOT NULL,
  `catagoryid` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `appoinment` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `name`, `email`, `age`, `catagoryid`, `doctorid`, `phone`, `status`, `appoinment`, `datetime`) VALUES
(38, 'Mr. Kamal Hossain', 'Kamal@gmail.com', 45, 1, 1, '03287564378', 0, '4 :60 Pm', '2016-11-02 04:04:56'),
(39, 'Mr. Kamal Hossain', 'Kamal@gmail.com', 58, 1, 1, '03287564378', 0, '5 :10 Pm', '2016-11-02 04:04:56'),
(40, 'Md Jafor Khan', 'jafor@gmail.com', 25, 1, 1, '03287564378', 0, '4 :60 Pm', '2016-11-02 04:04:56'),
(41, 'Md Jafor Khan', 'jafor@gmail.com', 12, 1, 1, '03287564378', 0, '4 :10Pm', '2016-11-02 04:04:56'),
(43, 'Mr. Patient Hossain', 'Patient@gmail.com', 25, 1, 6, '+8801910077628', 1, '4 :0Pm', '2016-11-02 04:04:56'),
(44, 'Mr. Patient Hossain', 'Patient@gmail.com', 25, 1, 6, '+8801910077628', 1, '5 :40 Pm', '2016-11-02 04:04:56'),
(45, 'Mr. Patient Hossain', 'Patient@gmail.com', 34, 1, 6, '+8801910077628', 0, '5 :50 Pm', '2016-11-02 04:04:56'),
(46, 'Md. Rashed Jaman 2', 'jmrashed@gmail.com', 23, 1, 6, '01723943290', 1, '4 :0Pm', '2016-11-02 04:04:56'),
(47, 'Md. Rashed Jaman 2', 'jmrashed@gmail.com', 22, 1, 6, '01723943290', 1, '4 :10Pm', '2016-11-02 04:04:56'),
(48, 'tasnia', 'tasnia@gmail.com', 20, 1, 7, '01723943290', 1, '4 :0Pm', '2016-11-02 04:04:56'),
(49, 'Md Jafor Khan', 'jafor@gmail.com', 21, 4, 7, '01711086428', 0, '4 :0Pm', '2016-11-02 04:04:56'),
(51, 'mashiat', 'm@gmail.com', 23, 2, 7, '1234567', 1, '4 :0Pm', '2016-11-08 14:08:47'),
(52, 'mashiat', 'm@gmail.com', 24, 1, 6, '01723943290', 1, '4 :10Pm', '2016-11-08 14:10:05'),
(53, 'm', '', 0, 0, 0, '', 1, '', '2016-11-09 06:20:09'),
(54, 'q', 'q@gmail.com', 45, 1, 6, '0174554657', 1, '4 :10Pm', '2016-11-09 06:46:54'),
(55, 'q', 'q@gmail.com', 21, 1, 6, '0174554657', 1, '4 :20Pm', '2016-11-09 06:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `catagory_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `catagory_name`) VALUES
(1, 'Medicine'),
(2, 'Neoroscience'),
(3, 'Surgery'),
(4, 'Emergency'),
(5, 'Onocology'),
(6, 'Cardiology'),
(7, 'Anesthesiology'),
(8, 'Skin & VD');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `name`, `title`, `description`, `datetime`) VALUES
(3, 'Mr. Patient Hossain', 'Health', 'I am suffering ', '2016-11-02 13:51:31'),
(4, 'tasnia', 'late ', ' \r\n		i m sufffering for the late coming		   \r\n				 ', '2016-11-02 13:51:31'),
(5, 'q', 'Soanrgoan City Dhaka', ' \r\n             This is a tets \r\n         ', '2016-11-09 06:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'Medicine'),
(2, 'Neoroscience'),
(3, 'Surgery'),
(4, 'Emergency'),
(5, 'Onocology'),
(6, 'Cardiology'),
(7, 'Anesthesiology'),
(8, 'Skin & VD');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `hospital_id` text NOT NULL,
  `catagory_id` text NOT NULL,
  `doctorname` text NOT NULL,
  `dusername` varchar(30) NOT NULL,
  `demail` text NOT NULL,
  `dpass` text NOT NULL,
  `description` text NOT NULL,
  `address` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `hospital_id`, `catagory_id`, `doctorname`, `dusername`, `demail`, `dpass`, `description`, `address`, `status`, `datetime`) VALUES
(6, 'Lab Aid Hospital', 'Medicine', 'Md. Mostofa Jamal', 'jamal', 'jamal@gmail.com', '123', 'MBBS', 'Dhaka', '1', '2016-11-02 17:20:59'),
(7, 'Popular Hospital', 'Neoroscience', 'Dr. Sale Nasim', 'hay', 'hay', 'hay', 'MBBS', 'test', '1', '2016-11-02 17:20:59'),
(8, 'Lab Aid Hospital', 'Dental & Maxillofacial Surgery', 'Dr. Abdul Hay', 'hay', 'hay', 'hay', 'MBBS', 'test', '1', '2016-11-02 17:20:59'),
(9, 'Square Hospital', 'Neoroscience', 'Dr. Doctor  Motin ', 'Doctor', 'Doctor@gmail.com', 'Doctor', 'MBS, FCPS', 'Dhaka', '1', '2016-11-02 17:20:59'),
(10, 'Ahmed Medical Centre Ltd.', 'Medicine', 'Mrs.Delowara begum', 'delwoar', 'delowar@gmail.com', '9876', 'mbbs', 'dhaka', '0', '2016-11-04 17:20:59'),
(11, 'Square Hospital', 'Eye', 'prof.Asfaq Rahman', 'asfaq', 'asfaq@gmail.com', '567', 'doctoret', 'chittagong', '0', '2016-11-04 17:20:59'),
(12, 'Popular Hospital', 'Medicine', 'Dr. Karim Khan', 'karim', 'karim@gmail.com', 'karim', 'MBBS', 'Dhaka', '1', '2016-11-02 17:20:59'),
(13, 'Lab Aid Hospital', 'Eye', 'prof.manna', 'm', 'm@gmail.com', 'm', 'FCPPS', 'chittagong', '1', '2016-11-08 13:58:31'),
(14, 'Popular Hospital', 'Medicine', 'q', 'q', 'q@demo.com', 'q', 'MBBS, FCPS', 'q', '1', '2016-11-09 06:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `experiment`
--

CREATE TABLE `experiment` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experiment`
--

INSERT INTO `experiment` (`id`, `name`) VALUES
(1, 'Eye Test'),
(2, 'Urin Test'),
(3, 'Blood Test');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `hospital_name` text NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `hospital_name`, `address`, `contact`) VALUES
(1, 'Popular Hospital', 'Service Rd, Dhaka 1230', '9122560-78'),
(2, 'Lab Aid Hospital', 'House- 06, Road No 4, Dhaka 1205', '9353391-3'),
(3, 'Ahmed Medical Centre Ltd.', 'House # 71, Road # 15-A, (New), Dhanmondi ', '8113628-3'),
(4, 'Square Hospital', '18F, Bir Uttam Qazi Nuruzzaman Sarak, West Panthapath, Dhaka 1205', '8144400');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `senderid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `senderid`, `receiverid`, `message`, `status`, `datetime`) VALUES
(1, 1, 4, 'Talk at the CLI Symposium held at the 40th Annual World Finals of the ACM International Collegiate, in Phuket, Thailand.', 0, '2016-11-02 02:20:15'),
(2, 2, 4, 'Need a Band 7 or above in IELTS Writing? My free live training will help you get the scores you need.', 0, '2016-11-02 02:20:15'),
(3, 2, 4, 'Training will help you get the scores you need.', 0, '2016-11-02 02:20:15'),
(4, 4, 9, 'Please doctor Come to my home', 0, '2016-11-02 02:20:15'),
(5, 1, 2, '12', 0, '2016-11-02 02:20:15'),
(6, 0, 8, 'This is a test Mr. Abdul Hay', 0, '2016-11-02 02:20:15'),
(7, 0, 8, 'This is a test Mr. Abdul Hay', 0, '2016-11-02 02:20:15'),
(8, 9, 9, 'Please doctor Come to my home ', 0, '2016-11-02 02:20:15'),
(9, 9, 4, 'Hey, Are you there? I need Your help.', 0, '2016-11-02 02:20:15'),
(10, 9, 4, 'Whats Happen?', 0, '2016-11-02 02:20:15'),
(11, 0, 9, 'I am okay ! I shall come', 0, '2016-11-02 02:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `pusername` varchar(30) NOT NULL,
  `pemail` text NOT NULL,
  `ppass` text NOT NULL,
  `status` text NOT NULL,
  `info` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `fullname`, `pusername`, `pemail`, `ppass`, `status`, `info`, `phone`, `address`, `datetime`) VALUES
(4, 'Mr. Patient Hossain', 'patient', 'patient@gmail.com', 'patient', '1', 'Kamal', '032413535413', 'Dhaka-1217', '2016-11-02 09:21:16'),
(5, 'Md. Kamrul Hasan', 'kaziminmizan2@gmail.com', 'tonmoybanerjee0927@gmail.com', 'ehatbd', '1', '', '01580077628', 'Dhakja', '2016-11-02 09:21:16'),
(6, 'Md Jafor Khan', 'jafor', 'jafor@gmail.com', '1', '1', ' \r\n			I am new patient\r\n				', '8765', 'Dhaka', '2016-11-02 09:21:16'),
(7, 'Md. Mostofa Jamal', 'jamal', 'jamal@gmail.com', '123', '1', 'MBBS', '', 'Dhaka', '2016-11-02 09:21:16'),
(8, 'Md. Mostofa Jamal', 'jamal', 'jamal@gmail.com', '123', '0', 'MBBS', '', 'Dhaka', '2016-11-02 09:21:16'),
(9, 'Md. Mostofa Jamal', 'jamal', 'motin@tx.com', '123', '1', ' Dhaka\r\n				\r\n				', '+8801910077628', 'Dhaka', '2016-11-02 09:21:16'),
(10, 'tasnia', 'tasnia', 'tasnia@gmail.com', '123', '1', ' \r\n				\r\n				hand problem', '01723943290', 'rampura', '2016-11-02 09:21:16'),
(11, 'nourin ahana', 'ahana', 'ahana@gmail.com', '1', '1', ' \r\n				\r\n		suffocating breath		', '01911210859', 'dhaka', '2016-11-02 09:21:16'),
(12, 'abc', 'abc', 'abc@gmail.com', '2', '1', ' \r\n				\r\n			eye	', '01723943290', 'dhaka', '2016-11-02 09:21:16'),
(13, 'mashiat', 'm', 'm@gmail.com', 'm', '1', ' \r\n				\r\n		leg		', '1234567', 'comilla', '2016-11-08 14:08:15'),
(14, 'q', 'q', 'q@gmail.com', 'q', '1', ' \r\nPain        ', '0174554657', '52/4, South Basabo, Dhaka-1214', '2016-11-09 06:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `email`, `password`) VALUES
(1, 'm', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_test`
--

CREATE TABLE `treatment_test` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `desease` text NOT NULL,
  `test_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_test`
--

INSERT INTO `treatment_test` (`id`, `patient_name`, `desease`, `test_name`) VALUES
(1, 'm', 'Test', '1'),
(2, 'm', 'Test', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiment`
--
ALTER TABLE `experiment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_test`
--
ALTER TABLE `treatment_test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `experiment`
--
ALTER TABLE `experiment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `treatment_test`
--
ALTER TABLE `treatment_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
