-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 12:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qcu_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `action` text NOT NULL,
  `action_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_id`, `username`, `role`, `action`, `action_time`) VALUES
(1, 'admin1', 'Administrator', 'Created an Admin Account', '2020-12-23 13:30:18'),
(2, 'admin1', 'Administrator', 'Selected Activity Log', '2020-12-23 13:44:28'),
(3, 'admin1', 'Administrator', 'Logout', '2020-12-23 13:44:37'),
(4, 'Power', 'Administrator', 'Selected Monitor Log', '2020-12-23 13:48:18'),
(5, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 13:56:45'),
(6, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 13:56:53'),
(7, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 13:59:03'),
(8, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 13:59:21'),
(9, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 13:59:49'),
(10, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 13:59:59'),
(11, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:00:09'),
(12, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:00:18'),
(13, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:00:41'),
(14, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:06:19'),
(15, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:06:41'),
(16, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:09:06'),
(17, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:09:14'),
(18, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:13:48'),
(19, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:13:53'),
(20, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:15:58'),
(21, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:16:04'),
(22, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:19:04'),
(23, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:19:12'),
(24, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:22:13'),
(25, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:22:44'),
(26, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:24:14'),
(27, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:24:18'),
(28, 'Power', 'Administrator', 'Created a Student Account', '2020-12-23 14:25:38'),
(29, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:25:42'),
(30, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:25:51'),
(31, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:26:03'),
(32, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:26:46'),
(33, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:18'),
(34, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:21'),
(35, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:46'),
(36, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:47'),
(37, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:47'),
(38, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:48'),
(39, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:48'),
(40, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:48'),
(41, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:48'),
(42, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:48'),
(43, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:49'),
(44, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:49'),
(45, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:27:49'),
(46, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:28:10'),
(47, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:29:10'),
(48, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:29:25'),
(49, 'Power', 'Administrator', 'Selected Monitor Log', '2020-12-23 14:29:28'),
(50, 'Power', 'Administrator', 'Selected Monitor Log', '2020-12-23 14:31:39'),
(51, 'Power', 'Administrator', 'Selected Activity Log', '2020-12-23 14:31:41'),
(52, 'Power', 'Administrator', 'Selected Class List', '2020-12-23 14:31:43'),
(53, 'Power', 'Administrator', 'Created a Subject', '2020-12-23 14:43:35'),
(54, 'Power', 'Administrator', 'Created a Subject', '2020-12-23 14:49:57'),
(55, 'Power', 'Administrator', 'Selected Class List', '2020-12-24 14:44:17'),
(56, '', '', 'Logout', '2020-12-24 16:22:03'),
(57, '', '', 'Logout', '2020-12-28 10:20:48'),
(58, '', '', 'Logout', '2020-12-28 14:35:56'),
(59, '', '', 'Logout', '2020-12-31 10:38:29'),
(60, '', '', 'Logout', '2020-12-31 11:36:00'),
(61, '', '', 'Logout', '2020-12-31 11:36:01'),
(62, '', '', 'Logout', '2021-01-06 01:39:13'),
(63, '', '', 'Logout', '2021-01-07 06:15:52'),
(64, 'Power', 'Administrator', 'Selected Class List', '2021-01-07 09:59:25'),
(65, 'Power', 'Administrator', 'Selected Class List', '2021-01-07 09:59:45'),
(66, 'Power', 'Administrator', 'Selected Class List', '2021-01-07 10:23:21'),
(67, 'Power', 'Administrator', 'Selected Class List', '2021-01-07 10:26:13'),
(68, 'juliandomdom', 'Student', 'Selected Class List', '2021-01-07 10:28:54'),
(69, '', '', 'Logout', '2021-01-09 04:19:21'),
(70, '', '', 'Logout', '2021-01-16 02:27:10'),
(71, 'marjoriesolomon', 'Faculty', 'Created a Faculty Account', '2021-02-03 07:10:44'),
(72, 'marjoriesolomon', 'Faculty', 'Logout', '2021-02-03 07:14:12'),
(73, 'genievie', 'Student', 'Created a Student Account', '2021-02-03 07:20:05'),
(74, 'genievie', 'Student', 'Logout', '2021-02-03 07:20:30'),
(75, '', '', 'Logout', '2021-02-03 08:25:03'),
(76, '', '', 'Logout', '2021-02-03 08:25:09'),
(77, 'admin1', 'Administrator', 'Created a Subject', '2021-02-03 08:28:58'),
(78, 'admin1', 'Administrator', 'Logout', '2021-02-03 08:29:16'),
(79, 'ren', 'Student', 'Logout', '2021-02-03 08:48:22'),
(80, 'ren', 'Student', 'Logout', '2021-02-03 11:18:20'),
(81, 'ren', 'Student', 'Logout', '2021-02-03 12:52:47'),
(82, '', '', 'Logout', '2021-02-03 12:52:49'),
(83, 'ren', 'Student', 'Logout', '2021-02-03 12:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `account_id` int(11) NOT NULL,
  `admin_no` varchar(15) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `role` varchar(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `contact` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `emergencyperson` varchar(50) NOT NULL,
  `emergencycon` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`account_id`, `admin_no`, `username`, `password`, `role`, `fname`, `sname`, `mname`, `age`, `bdate`, `gender`, `address`, `contact`, `email`, `emergencyperson`, `emergencycon`) VALUES
(1, '123124', 'admin1', '123123123', 'Administrator', 'brrrt', 'brrrt', 'brrrt', 0, '0000-00-00', 'Unknown', 'saffasfasf', 123435678900, 'sdg@gds.dsf', 'sfvdgsg', 12345678900),
(2, '02', 'Power', '123123123', 'Administrator', 'Power', 'Blood Fiend', '', 0, '0000-00-00', 'Female', 'sdasda', 12345678910, 'power@power.power', 'sada', 0);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_sheet`
--

CREATE TABLE `attendance_sheet` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `checkin_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_sheet`
--

INSERT INTO `attendance_sheet` (`id`, `username`, `status`, `checkin_time`) VALUES
(1, 'marjoriesolomon', 'Time-In', '2020-12-24 23:28:14'),
(2, 'marjoriesolomon', 'Time-out', '2020-12-25 23:28:14'),
(3, 'michaelabonita', 'Time in', '2020-12-24 23:45:55'),
(4, 'michaeltorresabonita', 'Time-out', '2020-12-25 23:45:55'),
(5, 'marjoriesolomon', 'Time - in', '2020-12-25 14:44:40'),
(6, 'marjoriesolomon', 'Time - out', '2020-12-25 14:44:52'),
(7, 'marjoriesolomon', 'Time - out', '2021-02-03 07:08:39'),
(8, 'marjoriesolomon', 'Time - in', '2021-02-03 07:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `classroom_info`
--

CREATE TABLE `classroom_info` (
  `class_id` int(11) NOT NULL,
  `classroom_code` varchar(25) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `subject_name` varchar(200) NOT NULL,
  `schedule` varchar(50) NOT NULL,
  `instructor_name` varchar(50) NOT NULL,
  `target_course` varchar(10) NOT NULL,
  `target_year` varchar(10) NOT NULL,
  `target_section` varchar(10) NOT NULL,
  `target_campus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom_info`
--

INSERT INTO `classroom_info` (`class_id`, `classroom_code`, `subject_code`, `subject_name`, `schedule`, `instructor_name`, `target_course`, `target_year`, `target_section`, `target_campus`) VALUES
(1, 'IC301', 'SIA101', 'System Integration and Architecture 101', 'SATURDAY 9:00 - 4:00', 'marjoriesolomon', 'BSIT', '3', 'C', 'San Bartolome'),
(2, 'IC302', 'SIA101', 'System Integration and Architecture 101', 'THURSDAY / 7:00 - 1:00', 'marjoriesolomon', 'BSIT', '3', 'C', 'Batasan');

-- --------------------------------------------------------

--
-- Table structure for table `classwork_info`
--

CREATE TABLE `classwork_info` (
  `classwork_id` int(11) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `classroom_code` varchar(10) NOT NULL,
  `instructor_name` varchar(100) NOT NULL,
  `target_course` varchar(10) NOT NULL,
  `target_year` varchar(10) NOT NULL,
  `target_section` varchar(10) NOT NULL,
  `target_campus` varchar(50) NOT NULL,
  `classwork_type` varchar(50) NOT NULL,
  `classwork_name` varchar(100) NOT NULL,
  `classwork_filename` text NOT NULL,
  `classwork_time` datetime NOT NULL,
  `classwork_deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classwork_info`
--

INSERT INTO `classwork_info` (`classwork_id`, `subject_code`, `classroom_code`, `instructor_name`, `target_course`, `target_year`, `target_section`, `target_campus`, `classwork_type`, `classwork_name`, `classwork_filename`, `classwork_time`, `classwork_deadline`) VALUES
(1, 'SIA101', 'IC301', 'marjoriesolomon', 'BSIT', '3', 'C', 'San Bartolome', 'Module', 'Module 1 - Blah blah', 'Module1.docx', '2020-12-27 23:48:07', '2021-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `account_id` int(11) NOT NULL,
  `profile_picture` text NOT NULL,
  `employee_no` varchar(15) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `role` varchar(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `contact` bigint(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `emergencyperson` varchar(50) NOT NULL,
  `emergencycontact` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`account_id`, `profile_picture`, `employee_no`, `username`, `password`, `role`, `fname`, `sname`, `mname`, `age`, `bdate`, `gender`, `address`, `contact`, `email`, `emergencyperson`, `emergencycontact`) VALUES
(1, '2.PNG', '123456', 'marjoriesolomon', '123123123', 'Faculty', 'Marjorie', 'Solomon', '', 25, '0000-00-00', 'Female', 'asdasdasd', 12345678910, 'sadas@dsa.co', 'sada', 12345678910),
(2, '', '1234', 'aawd', '123456', 'Faculty', 'warren', 'equinan', 'pusing', 18, '0000-00-00', 'Male', 'awdawdawd', 0, 'Ren@gmail.com', 'awdawd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `school_forum`
--

CREATE TABLE `school_forum` (
  `post_id` int(11) NOT NULL,
  `post_creator` varchar(50) NOT NULL,
  `creator_role` varchar(20) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_date` datetime NOT NULL,
  `post` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_forum`
--

INSERT INTO `school_forum` (`post_id`, `post_creator`, `creator_role`, `post_title`, `post_date`, `post`) VALUES
(1, 'Power', 'Administrator', 'Welcome!', '2020-12-28 21:50:41', 'Welcome to the School Forum. \r\nHere you can ask questions and it will be answered by your professors.\r\n\r\nReminders:\r\n-Be Respectful.\r\n-We\'re watching you.'),
(2, 'juliandomdom', 'Student', 'ah', '2020-12-28 22:03:11', 'ah'),
(3, 'marjoriesolomon', 'Faculty', 'eh', '2020-12-28 15:13:41', 'eh'),
(4, 'marjoriesolomon', 'Faculty', 'ahhhhh', '2021-01-09 04:56:05', 'l\r\nm\r\na\r\no\r\n\r\nx\r\nd\r\nx\r\nd\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `account_id` int(11) NOT NULL,
  `student_no` varchar(7) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `campus` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `contact` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `guardian` varchar(100) NOT NULL,
  `gcontact` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`account_id`, `student_no`, `username`, `password`, `role`, `fname`, `sname`, `mname`, `course`, `year`, `section`, `campus`, `age`, `bdate`, `gender`, `address`, `contact`, `email`, `guardian`, `gcontact`) VALUES
(6, '08-0789', 'ren', '000000', 'Student', 'Warren', 'Equinan', 'Pusing', 'BSIT', '3', 'A', 'San Bartolome', 21, '0000-00-00', 'Male', '45 BLABLA', 9195193761, 'equinanwarren@gmail.com', 'Amy Equinan', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE `subject_list` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(20) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `target_course` varchar(50) NOT NULL,
  `target_year` int(11) NOT NULL,
  `units` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`id`, `subject_code`, `subject_name`, `target_course`, `target_year`, `units`) VALUES
(1, 'SIA101', 'System Integration and Architecture', 'BSIT', 3, 3),
(2, 'A101', 'ANIME WATCHING', 'BSIT', 3, 3),
(3, 'ART-101', 'ART APPRECIATION', 'BSIT', 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `attendance_sheet`
--
ALTER TABLE `attendance_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classroom_info`
--
ALTER TABLE `classroom_info`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `classwork_info`
--
ALTER TABLE `classwork_info`
  ADD PRIMARY KEY (`classwork_id`);

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `school_forum`
--
ALTER TABLE `school_forum`
  ADD PRIMARY KEY (`post_id`);
ALTER TABLE `school_forum` ADD FULLTEXT KEY `post` (`post`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance_sheet`
--
ALTER TABLE `attendance_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `classroom_info`
--
ALTER TABLE `classroom_info`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `classwork_info`
--
ALTER TABLE `classwork_info`
  MODIFY `classwork_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty_info`
--
ALTER TABLE `faculty_info`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_forum`
--
ALTER TABLE `school_forum`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
