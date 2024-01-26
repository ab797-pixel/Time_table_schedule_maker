-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 12:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `time_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `alias` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `alias`) VALUES
(26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS'),
(27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS'),
(28, 'III BSC COMPUTER SCIENCE T/M', 'IIIBSCCST/M'),
(29, 'III BSC COMPUTER SCIENCE SHIFT 1', 'IIIBSCCSS1'),
(30, 'III BSC COMPUTER SCIENCE SHIFT 2', 'IIIBSCCSS2'),
(31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M'),
(32, 'II BSC COMPUTER SCIENCE SHIFT 1', 'IIBSCCSS1'),
(33, 'II BSC COMPUTER SCIENCE SHIFT 2', 'IIBSCCSS2'),
(34, 'I BSC COMPUTER SCIENCE T/M', 'IBSCCST/M'),
(35, 'I BSC COMPUTER SCIENCE SHIFT 1', 'IBSCCSS1'),
(36, 'I BSC COMPUTER SCIENCE SHIFT 2', 'IBSCCSS2');

-- --------------------------------------------------------

--
-- Table structure for table `class_subjects`
--

CREATE TABLE `class_subjects` (
  `id` int(30) NOT NULL,
  `class_id` int(30) NOT NULL,
  `subject_staff_id` int(30) NOT NULL,
  `subject_id` int(30) NOT NULL,
  `staff_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_subjects`
--

INSERT INTO `class_subjects` (`id`, `class_id`, `subject_staff_id`, `subject_id`, `staff_id`) VALUES
(7, 26, 41, 3, 41),
(8, 26, 46, 5, 41),
(9, 26, 48, 4, 41);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `alias` varchar(10) NOT NULL,
  `is_available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `email`, `password`, `alias`, `is_available`) VALUES
(38, '.M.GNANASEGARAN.', 'MG@gmail.com', '123', '.MG.', 1),
(39, '.S.MAKILA.', NULL, NULL, '.SM.', 1),
(40, '.J.JOHNAKIRAMAN.', NULL, NULL, '.JJ.', 1),
(41, '.R.JAYABHARATHI.', 'RJ@gmail.com', '123', '.RJ.', 1),
(42, '.D.JAYADHURGA.', NULL, NULL, '.DJ.', 1),
(43, '.G.KAVITHA.', NULL, NULL, '.GK.', 1),
(44, '.DEVI.', NULL, NULL, '.D.', 1),
(45, '.T.BHUVENESHWARI.', NULL, NULL, '.TB.', 1),
(46, '.P.ANITHA.', NULL, NULL, '.PA.', 1),
(47, '.SRIRAM.', NULL, NULL, '.S.', 1),
(48, '.G.VATHANA.', NULL, NULL, '.GV.', 1),
(50, 'MOHAMED RAIYAN', 'MR@gmail.com', '123', 'MR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `alias` varchar(30) DEFAULT NULL,
  `subcode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `alias`, `subcode`) VALUES
(1, 'AIRTIFICIAL INTELLIGENCE', 'AI', 'P22CS000'),
(3, 'AGILE TECHNOLOGY', 'AT', 'P22CS8907'),
(4, 'COULD COMPUTING', 'CC', 'P22CDS9789'),
(5, 'BUSINESS INNOVATION', 'BI', 'P22CS7645');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`(20));

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `class_subjects`
--
ALTER TABLE `class_subjects`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
