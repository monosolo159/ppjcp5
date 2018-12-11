-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 05:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppjcp5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(200) NOT NULL,
  `admin_lname` varchar(200) NOT NULL,
  `admin_type_id` int(11) NOT NULL,
  `admin_username` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_type_id`, `admin_username`, `admin_password`) VALUES
(1, 'วิเชษฐ์พงศ์', 'เขตสุภา', 1, 'admin', 'admin'),
(2, 'อธิภัทร', 'มีชัย', 1, 'admin1', 'admin1'),
(3, 'วิทวัส', 'ศิริจันทพันธ์', 1, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `admin_type`
--

CREATE TABLE `admin_type` (
  `admin_type` int(11) NOT NULL,
  `admin_type_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_type`
--

INSERT INTO `admin_type` (`admin_type`, `admin_type_name`) VALUES
(1, 'Admin'),
(2, 'Moderator');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(200) NOT NULL,
  `department_status` int(11) NOT NULL DEFAULT '1',
  `department_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_status`, `department_order`) VALUES
(1, 'กลุ่มงานบริหารงานวิชาการ', 1, 1),
(2, 'กลุ่มบริหารงานงบประมาณ', 1, 2),
(3, 'กลุ่มบริหารงานบุคคล', 1, 3),
(4, 'กลุ่มบริหารงานทั่วไป', 1, 4),
(5, 'กลุ่มบริหารงานพิเศษ', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `menu_access_list`
--

CREATE TABLE `menu_access_list` (
  `menu_access_list_id` int(11) NOT NULL,
  `menu_list_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu_list`
--

CREATE TABLE `menu_list` (
  `menu_list_id` int(11) NOT NULL,
  `menu_list_name` varchar(200) NOT NULL,
  `menu_list_link` varchar(500) NOT NULL,
  `menu_list_order` int(11) NOT NULL,
  `menu_list_active` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_code` varchar(20) NOT NULL,
  `student_personal_code` varchar(20) NOT NULL,
  `student_fname` varchar(200) NOT NULL,
  `student_lname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_personal_id` varchar(20) NOT NULL,
  `teacher_username` varchar(100) NOT NULL,
  `teacher_password` varchar(200) NOT NULL,
  `teacher_fname` int(200) NOT NULL,
  `teacher_lname` int(200) NOT NULL,
  `teacher_address` varchar(1000) NOT NULL,
  `teacher_tel` varchar(20) NOT NULL,
  `teacher_birth_date` datetime NOT NULL,
  `teacher_position_id` int(11) NOT NULL,
  `teacher_academic_standing_id` int(11) NOT NULL,
  `teacher_status_id` int(11) NOT NULL,
  `teacher_start` datetime NOT NULL,
  `teacher_end` datetime NOT NULL,
  `teacher_note` varchar(1000) NOT NULL,
  `teacher_last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ครู' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_academic_standing`
--

CREATE TABLE `teacher_academic_standing` (
  `teacher_academic_standing_id` int(11) NOT NULL,
  `teacher_academic_standing_name` varchar(200) NOT NULL,
  `teacher_academic_standing_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_academic_standing`
--

INSERT INTO `teacher_academic_standing` (`teacher_academic_standing_id`, `teacher_academic_standing_name`, `teacher_academic_standing_order`) VALUES
(1, 'คศ. 1', 1),
(2, 'คศ. 2', 2),
(3, 'คศ. 3', 3),
(4, 'คศ. 4', 4),
(5, 'คศ. 5', 5);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_department`
--

CREATE TABLE `teacher_department` (
  `teacher_department_id` int(11) NOT NULL,
  `teacher_department_name` varchar(200) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_department_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_education`
--

CREATE TABLE `teacher_education` (
  `teacher_education_id` int(11) NOT NULL,
  `teacher_education_name` varchar(200) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_education_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_position`
--

CREATE TABLE `teacher_position` (
  `teacher_position_id` int(11) NOT NULL,
  `teacher_position_name` varchar(200) NOT NULL,
  `teacher_position_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_position`
--

INSERT INTO `teacher_position` (`teacher_position_id`, `teacher_position_name`, `teacher_position_order`) VALUES
(1, 'ผู้อำนวยการ', 1),
(2, 'รองผู้อำนวยการ', 2),
(3, 'ครู', 3),
(4, 'ครูผู้ช่วย', 4),
(5, 'พนักงานราชการ', 5),
(6, 'อัตราจ้าง สพป.', 6),
(7, 'อัตราจ้างโรงเรียน', 7),
(8, 'ธุรการ', 8),
(9, 'เจ้าหน้าที่ ICT Talent', 9),
(10, 'ICT', 10),
(11, 'ช่างครุภัณฑ์', 11),
(12, 'นักการภารโรง', 12);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_status`
--

CREATE TABLE `teacher_status` (
  `teacher_status_id` int(11) NOT NULL,
  `teacher_status_name` varchar(200) NOT NULL,
  `teacher_status_active` varchar(10) NOT NULL,
  `teacher_status_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_status`
--

INSERT INTO `teacher_status` (`teacher_status_id`, `teacher_status_name`, `teacher_status_active`, `teacher_status_order`) VALUES
(1, 'เกษียณ', 'active', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_type`
--
ALTER TABLE `admin_type`
  ADD PRIMARY KEY (`admin_type`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `menu_access_list`
--
ALTER TABLE `menu_access_list`
  ADD PRIMARY KEY (`menu_access_list_id`);

--
-- Indexes for table `menu_list`
--
ALTER TABLE `menu_list`
  ADD PRIMARY KEY (`menu_list_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_academic_standing`
--
ALTER TABLE `teacher_academic_standing`
  ADD PRIMARY KEY (`teacher_academic_standing_id`);

--
-- Indexes for table `teacher_education`
--
ALTER TABLE `teacher_education`
  ADD PRIMARY KEY (`teacher_education_id`);

--
-- Indexes for table `teacher_position`
--
ALTER TABLE `teacher_position`
  ADD PRIMARY KEY (`teacher_position_id`);

--
-- Indexes for table `teacher_status`
--
ALTER TABLE `teacher_status`
  ADD PRIMARY KEY (`teacher_status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_type`
--
ALTER TABLE `admin_type`
  MODIFY `admin_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu_access_list`
--
ALTER TABLE `menu_access_list`
  MODIFY `menu_access_list_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu_list`
--
ALTER TABLE `menu_list`
  MODIFY `menu_list_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacher_education`
--
ALTER TABLE `teacher_education`
  MODIFY `teacher_education_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
