-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2020 at 04:10 PM
-- Server version: 5.7.15-log
-- PHP Version: 7.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emr`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(10) NOT NULL,
  `s_emr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `s_value` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `s_emr`, `s_value`) VALUES
(1, 'emr_id', '7'),
(2, 'token', 'x]vf4yp0yf');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `id` int(10) NOT NULL,
  `s_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `i_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`id`, `s_name`, `i_status`) VALUES
(1, 'Back home', 1),
(2, 'Forward', 1),
(3, 'Enter the ward', 1),
(4, 'Dead (Discharg refer admit dea)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `id` int(10) NOT NULL,
  `s_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `s_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสยา',
  `s_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `d_manufacture` date NOT NULL,
  `d_expiration` date NOT NULL,
  `i_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`id`, `s_name`, `s_code`, `s_detail`, `d_manufacture`, `d_expiration`, `i_status`) VALUES
(1, 'Paracetamol', '0001', 'It is a drug that can be sold without a doctor\'s prescription. Has analgesic and antipyretic effects. Which is a basic medicine that is often used to relieve fever Headaches And aches', '2020-11-24', '2021-12-24', 1),
(2, 'Aspirin', '0002', 'As a salicylate It is often used as a pain reliever. Antipyretic and anti-inflammatory drugs Aspirin also has an antiplatelet effect by inhibiting the production of tromboxane. Which normally connects platelet molecules together to form a plume above the damaged vascular wall.', '2020-11-24', '2020-12-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(10) NOT NULL,
  `i_hn` int(10) NOT NULL COMMENT 'id tbl user',
  `s_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_noun` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `s_gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `d_birthday` date NOT NULL,
  `s_idcard` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `s_blood` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `s_marital` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'สถานภาพสมรส',
  `s_race` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เชื้อชาติ',
  `s_education` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'การศึกษา',
  `s_religion` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ศาสนา',
  `s_house_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'บ้านเลขที่',
  `s_moo` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'หมู่ที่',
  `s_soi` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ซอย',
  `s_road` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ถนน',
  `s_subdistrict` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ตำบล',
  `s_district` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อำเภอ',
  `s_province` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'จังหวัด',
  `s_postal` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสไปรษณีย์',
  `s_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'โทรศัพท์',
  `i_weight` int(20) NOT NULL,
  `i_height` int(20) NOT NULL,
  `s_allergy` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'การแพ้ยา',
  `s_disease` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'โรคประจำตัว',
  `d_post_date` datetime NOT NULL,
  `i_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `i_hn`, `s_first_name`, `s_last_name`, `s_noun`, `s_gender`, `d_birthday`, `s_idcard`, `s_blood`, `s_marital`, `s_race`, `s_education`, `s_religion`, `s_house_no`, `s_moo`, `s_soi`, `s_road`, `s_subdistrict`, `s_district`, `s_province`, `s_postal`, `s_phone`, `i_weight`, `i_height`, `s_allergy`, `s_disease`, `d_post_date`, `i_status`) VALUES
(1, 1, 'VGVzdGZpcnN0bmFtZQ==', 'VGVzdGZpcnN0bmFtZQ==', 'TXIu', 'TWFsZQ==', '1993-10-01', 'MTgzOTkwMDMxMjg', 'bw==', 'U2luZ2xl', 'VGhhaQ==', 'QmFjaGVsb3IncyBkZWdyZWU=', 'QnVkZGhpc20=', 'MTMvMg==', 'MQ==', 'LQ==', 'VGhlcHByYXRoYW4=', 'UmF0c2FkYQ==', 'TXVlYW5n', 'UGh1a2V0', 'ODMwMDA=', 'MDk1MjY4MzU1NQ==', 63, 175, 'LQ==', 'LQ==', '2020-11-25 00:00:00', 1),
(2, 2, 'VGVzdF9w', 'MDE=', 'TXIu', 'Male', '1993-10-01', 'MTgzOTkwNTIxOTU', 'bw==', 'U2luZ2xl', 'VGhhaQ==', 'QmFjaGVsb3IncyBkZWdyZWU=', 'QnVkZGhpc20=', 'MTMvMg==', 'MQ==', 'LQ==', 'VGhlcHByYXRoYW4=', 'UmF0c2FkYQ==', 'TXVlYW5n', 'UGh1a2V0', 'ODMwMDA=', 'MDk1MjY4MzU1NQ==', 75, 180, 'LQ==', 'LQ==', '2020-11-25 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient_backup`
--

CREATE TABLE `patient_backup` (
  `id` int(10) NOT NULL,
  `i_hn` int(10) NOT NULL COMMENT 'id tbl user',
  `s_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_noun` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `s_gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `d_birthday` date NOT NULL,
  `s_idcard` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `s_blood` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `s_marital` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'สถานภาพสมรส',
  `s_race` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เชื้อชาติ',
  `s_education` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'การศึกษา',
  `s_religion` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ศาสนา',
  `s_house_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'บ้านเลขที่',
  `s_moo` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'หมู่ที่',
  `s_soi` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ซอย',
  `s_road` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ถนน',
  `s_subdistrict` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ตำบล',
  `s_district` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'อำเภอ',
  `s_province` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'จังหวัด',
  `s_postal` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสไปรษณีย์',
  `s_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'โทรศัพท์',
  `i_weight` int(20) NOT NULL,
  `i_height` int(20) NOT NULL,
  `s_allergy` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'การแพ้ยา',
  `s_disease` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'โรคประจำตัว',
  `d_post_date` datetime NOT NULL,
  `i_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient_backup`
--

INSERT INTO `patient_backup` (`id`, `i_hn`, `s_first_name`, `s_last_name`, `s_noun`, `s_gender`, `d_birthday`, `s_idcard`, `s_blood`, `s_marital`, `s_race`, `s_education`, `s_religion`, `s_house_no`, `s_moo`, `s_soi`, `s_road`, `s_subdistrict`, `s_district`, `s_province`, `s_postal`, `s_phone`, `i_weight`, `i_height`, `s_allergy`, `s_disease`, `d_post_date`, `i_status`) VALUES
(1, 1, 'Testfirstname', 'Testlastname', 'Mr.', 'Male', '1993-10-01', '1839900312881', 'o', 'Single', 'Thai', 'Bachelor\'s degree', 'Buddhism', '13/2', '1', '-', 'Thepprathan', 'Ratsada', 'Mueang', 'Phuket', '83000', '0952683555', 62, 175, '-', '-', '2020-11-25 00:00:00', 1),
(2, 2, 'Test_p', '01', 'Mr.', 'Male', '1993-10-01', '1839905219520', 'o', 'Single', 'Thai', 'Bachelor\'s degree', 'Buddhism', '13/2', '1', '-', 'Thepprathan', 'Ratsada', 'Mueang', 'Phuket', '83000', '0952683555', 75, 180, '-', '-', '2020-11-25 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) NOT NULL,
  `s_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `i_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `s_name`, `i_status`) VALUES
(1, 'ADMIT', 1),
(2, 'EXAMINATION', 1),
(3, 'DISPENSE', 1),
(4, 'TREAT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `s_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `i_type` int(5) NOT NULL,
  `s_username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `s_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `i_hn` int(10) NOT NULL DEFAULT '0',
  `i_status` tinyint(1) NOT NULL DEFAULT '1',
  `d_post_date` datetime NOT NULL,
  `d_last_update` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `s_first_name`, `s_last_name`, `s_email`, `i_type`, `s_username`, `s_password`, `i_hn`, `i_status`, `d_post_date`, `d_last_update`) VALUES
(1, 'Testfirstname', 'Testlastname', 'test@test.com', 1, 'dGVzdF9wMQ==', 'MTIz', 1, 1, '2020-11-25 00:00:00', '2020-11-25 00:00:00'),
(2, 'Nurse', '01', 'test@test.com', 2, 'bnVyc2VfMDE=', 'MTIz', 0, 1, '2020-11-25 00:00:00', '2020-11-25 00:00:00'),
(3, 'Doctor', '01', 'test@test.com', 3, 'ZG9jdG9yXzAx', 'MTIz', 0, 1, '2020-11-27 00:00:00', '2020-11-27 00:00:00'),
(4, 'Pharmacist', '01', 'test@test.com', 4, 'cGhjXzAx', 'MTIz', 0, 1, '2020-11-28 00:00:00', '2020-11-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_backup`
--

CREATE TABLE `user_backup` (
  `id` int(10) NOT NULL,
  `s_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `i_type` int(5) NOT NULL,
  `s_username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `s_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `i_hn` int(10) NOT NULL DEFAULT '0',
  `i_status` tinyint(1) NOT NULL DEFAULT '1',
  `d_post_date` datetime NOT NULL,
  `d_last_update` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_backup`
--

INSERT INTO `user_backup` (`id`, `s_first_name`, `s_last_name`, `s_email`, `i_type`, `s_username`, `s_password`, `i_hn`, `i_status`, `d_post_date`, `d_last_update`) VALUES
(1, 'Testfirstname', 'Testlastname', 'test@test.com', 1, 'test_p1', '123', 1, 1, '2020-11-25 00:00:00', '2020-11-25 00:00:00'),
(2, 'Nurse', '01', 'test@test.com', 2, 'nurse_01', '123', 0, 1, '2020-11-25 00:00:00', '2020-11-25 00:00:00'),
(3, 'Doctor', '01', 'test@test.com', 3, 'doctor_01', '123', 0, 1, '2020-11-27 00:00:00', '2020-11-27 00:00:00'),
(4, 'Pharmacist', '01', 'test@test.com', 4, 'phc_01', '123', 0, 1, '2020-11-28 00:00:00', '2020-11-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(10) NOT NULL,
  `s_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `s_table` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `i_status` tinyint(1) NOT NULL DEFAULT '1',
  `d_post_date` datetime NOT NULL,
  `d_last_update` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `s_name`, `s_table`, `i_status`, `d_post_date`, `d_last_update`) VALUES
(1, 'Patient', 'user_patient', 1, '2020-11-23 19:53:00', '2020-11-23 19:53:00'),
(2, 'Nurse', 'user_nurse', 1, '2020-11-23 19:53:00', '2020-11-23 19:53:00'),
(3, 'Doctor', 'user_doctor', 1, '2020-11-23 19:53:00', '2020-11-23 19:53:00'),
(4, 'Pharmacist', 'user_type', 1, '2020-11-23 19:53:00', '2020-11-23 19:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_backup`
--
ALTER TABLE `patient_backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_backup`
--
ALTER TABLE `user_backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient_backup`
--
ALTER TABLE `patient_backup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_backup`
--
ALTER TABLE `user_backup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
