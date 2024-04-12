-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 12:42 AM
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
(10, 26, 41, 3, 41),
(11, 26, 48, 4, 41),
(12, 26, 46, 5, 41),
(13, 27, 45, 6, 41),
(14, 27, 40, 7, 41),
(15, 27, 38, 8, 41),
(16, 27, 48, 9, 41),
(29, 31, 41, 17, 41),
(30, 31, 43, 19, 41),
(31, 31, 53, 20, 41),
(32, 31, 47, 15, 41);

-- --------------------------------------------------------

--
-- Table structure for table `day_orders`
--

CREATE TABLE `day_orders` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `day_orders`
--

INSERT INTO `day_orders` (`id`, `name`) VALUES
(52, 'one'),
(53, 'two'),
(54, 'three'),
(55, 'four'),
(56, 'five'),
(57, 'six');

-- --------------------------------------------------------

--
-- Table structure for table `hours`
--

CREATE TABLE `hours` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hours`
--

INSERT INTO `hours` (`id`, `name`) VALUES
(44, '9-10'),
(45, '10-11'),
(46, '11-12'),
(47, '12-1'),
(48, '1-2'),
(49, '2-3'),
(50, '3-4');

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
(50, 'MOHAMED RAIYAN', 'MR@gmail.com', '123', 'MR', 1),
(51, 'M.ELAKKIYA', 'ME@gmail.com', '123', 'ME', 1),
(52, 'M.PETER PARKER', 'MPP@gmail.com', '123', 'MPP', 1),
(53, 'M.ELAYA BHARATHI', 'MEB@gmail.com', '123', 'MEB', 1),
(54, 'M.BRUCE WAYNE', 'MBW@gmail.com', '123', 'MBW', 1);

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
(5, 'BUSINESS INNOVATION', 'BI', 'P22CS7645'),
(6, 'WEB TECHNOLOGY', 'WT', 'P22CS01'),
(7, 'COMPUTER GRAPHIES', 'CG', 'P22CS02'),
(8, 'DISTRIBUTED TECHNOLOGY', 'DT', 'P22CS03'),
(9, 'PYTHON', 'PY', 'P22CS04'),
(10, 'COMPUTER NETWORK', 'CN', 'B0922CS05'),
(11, 'OPERACTING SYSTEM', 'OS', 'B0922CS06'),
(12, 'DATA STRUCTRE AND ALGORITHM', 'DS & A', 'B0922CS07'),
(13, 'SOFTWARE ENGINEERING', 'SE', 'B0922CS08'),
(14, 'TAMIL 1', 'T1', 'B0922CS09'),
(15, 'TAMIL 2', 'T2', 'B0922CS09'),
(16, 'ENGLISH 1', 'E1', 'B0922CS10'),
(17, 'ENGLISH 2', 'E2', 'B0922CS11'),
(18, 'C', 'C', 'B0922CS12'),
(19, 'PEN KALVI', 'PK', 'B0922CS13'),
(20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 'B0922CS14'),
(21, 'GENDER QUALITY', 'GQ', 'B0922CS15');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(30) NOT NULL,
  `day_order` varchar(30) NOT NULL,
  `hours` varchar(30) NOT NULL,
  `class_id` int(30) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `class_alias` varchar(30) NOT NULL,
  `subject_id` int(30) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `subject_alias` varchar(30) NOT NULL,
  `staff_id` int(30) NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `staff_alias` varchar(30) NOT NULL,
  `fixed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `day_order`, `hours`, `class_id`, `class_name`, `class_alias`, `subject_id`, `subject_name`, `subject_alias`, `staff_id`, `staff_name`, `staff_alias`, `fixed`) VALUES
(1, 'one', '9-10', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 3, 'AGILE TECHNOLOGY', 'AT', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(2, 'one', '9-10', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(3, 'one', '9-10', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 19, 'PEN KALVI', 'PK', 43, '.G.KAVITHA.', '.GK.', 0),
(4, 'one', '10-11', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 3, 'AGILE TECHNOLOGY', 'AT', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(5, 'one', '10-11', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 9, 'PYTHON', 'PY', 48, '.G.VATHANA.', '.GV.', 0),
(6, 'one', '10-11', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 53, 'M.ELAYA BHARATHI', 'MEB', 0),
(7, 'one', '11-12', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(8, 'one', '11-12', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 9, 'PYTHON', 'PY', 48, '.G.VATHANA.', '.GV.', 0),
(9, 'one', '11-12', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 19, 'PEN KALVI', 'PK', 43, '.G.KAVITHA.', '.GK.', 0),
(10, 'one', '12-1', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(11, 'one', '12-1', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(12, 'one', '12-1', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(13, 'one', '1-2', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(14, 'one', '1-2', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(15, 'one', '1-2', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 53, 'M.ELAYA BHARATHI', 'MEB', 0),
(16, 'one', '2-3', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(17, 'one', '2-3', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(18, 'one', '2-3', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 53, 'M.ELAYA BHARATHI', 'MEB', 0),
(19, 'one', '3-4', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 3, 'AGILE TECHNOLOGY', 'AT', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(20, 'one', '3-4', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 9, 'PYTHON', 'PY', 48, '.G.VATHANA.', '.GV.', 0),
(21, 'one', '3-4', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(22, 'two', '9-10', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(23, 'two', '9-10', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(24, 'two', '9-10', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 19, 'PEN KALVI', 'PK', 43, '.G.KAVITHA.', '.GK.', 0),
(25, 'two', '10-11', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(26, 'two', '10-11', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(27, 'two', '10-11', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 53, 'M.ELAYA BHARATHI', 'MEB', 0),
(28, 'two', '11-12', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(29, 'two', '11-12', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(30, 'two', '11-12', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(31, 'two', '12-1', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(32, 'two', '12-1', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(33, 'two', '12-1', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 17, 'ENGLISH 2', 'E2', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(34, 'two', '1-2', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(35, 'two', '1-2', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(36, 'two', '1-2', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(37, 'two', '2-3', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(38, 'two', '2-3', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 8, 'DISTRIBUTED TECHNOLOGY', 'DT', 38, '.M.GNANASEGARAN.', '.MG.', 0),
(39, 'two', '2-3', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 53, 'M.ELAYA BHARATHI', 'MEB', 0),
(40, 'two', '3-4', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(41, 'two', '3-4', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(42, 'two', '3-4', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 19, 'PEN KALVI', 'PK', 43, '.G.KAVITHA.', '.GK.', 0),
(43, 'three', '9-10', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 3, 'AGILE TECHNOLOGY', 'AT', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(44, 'three', '9-10', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(45, 'three', '9-10', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 19, 'PEN KALVI', 'PK', 43, '.G.KAVITHA.', '.GK.', 0),
(46, 'three', '10-11', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(47, 'three', '10-11', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(48, 'three', '10-11', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 19, 'PEN KALVI', 'PK', 43, '.G.KAVITHA.', '.GK.', 0),
(49, 'three', '11-12', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(50, 'three', '11-12', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(51, 'three', '11-12', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 19, 'PEN KALVI', 'PK', 43, '.G.KAVITHA.', '.GK.', 0),
(52, 'three', '12-1', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(53, 'three', '12-1', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 8, 'DISTRIBUTED TECHNOLOGY', 'DT', 38, '.M.GNANASEGARAN.', '.MG.', 0),
(54, 'three', '12-1', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 53, 'M.ELAYA BHARATHI', 'MEB', 0),
(55, 'three', '1-2', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(56, 'three', '1-2', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(57, 'three', '1-2', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 17, 'ENGLISH 2', 'E2', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(58, 'three', '2-3', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(59, 'three', '2-3', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(60, 'three', '2-3', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(61, 'three', '3-4', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(62, 'three', '3-4', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(63, 'three', '3-4', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 19, 'PEN KALVI', 'PK', 43, '.G.KAVITHA.', '.GK.', 0),
(64, 'four', '9-10', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(65, 'four', '9-10', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(66, 'four', '9-10', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(67, 'four', '10-11', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(68, 'four', '10-11', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(69, 'four', '10-11', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 53, 'M.ELAYA BHARATHI', 'MEB', 0),
(70, 'four', '11-12', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(71, 'four', '11-12', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(72, 'four', '11-12', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 17, 'ENGLISH 2', 'E2', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(73, 'four', '12-1', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(74, 'four', '12-1', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(75, 'four', '12-1', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 19, 'PEN KALVI', 'PK', 43, '.G.KAVITHA.', '.GK.', 0),
(76, 'four', '1-2', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(77, 'four', '1-2', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(78, 'four', '1-2', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(79, 'four', '2-3', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 3, 'AGILE TECHNOLOGY', 'AT', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(80, 'four', '2-3', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(81, 'four', '2-3', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 53, 'M.ELAYA BHARATHI', 'MEB', 0),
(82, 'four', '3-4', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(83, 'four', '3-4', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(84, 'four', '3-4', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(85, 'five', '9-10', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(86, 'five', '9-10', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 8, 'DISTRIBUTED TECHNOLOGY', 'DT', 38, '.M.GNANASEGARAN.', '.MG.', 0),
(87, 'five', '9-10', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 17, 'ENGLISH 2', 'E2', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(88, 'five', '10-11', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(89, 'five', '10-11', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 8, 'DISTRIBUTED TECHNOLOGY', 'DT', 38, '.M.GNANASEGARAN.', '.MG.', 0),
(90, 'five', '10-11', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 17, 'ENGLISH 2', 'E2', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(91, 'five', '11-12', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(92, 'five', '11-12', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 8, 'DISTRIBUTED TECHNOLOGY', 'DT', 38, '.M.GNANASEGARAN.', '.MG.', 0),
(93, 'five', '11-12', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(94, 'five', '12-1', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(95, 'five', '12-1', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 8, 'DISTRIBUTED TECHNOLOGY', 'DT', 38, '.M.GNANASEGARAN.', '.MG.', 0),
(96, 'five', '12-1', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 53, 'M.ELAYA BHARATHI', 'MEB', 0),
(97, 'five', '1-2', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(98, 'five', '1-2', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(99, 'five', '1-2', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(100, 'five', '2-3', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 3, 'AGILE TECHNOLOGY', 'AT', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(101, 'five', '2-3', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(102, 'five', '2-3', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(103, 'five', '3-4', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 3, 'AGILE TECHNOLOGY', 'AT', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(104, 'five', '3-4', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 8, 'DISTRIBUTED TECHNOLOGY', 'DT', 38, '.M.GNANASEGARAN.', '.MG.', 0),
(105, 'five', '3-4', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(106, 'six', '9-10', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 3, 'AGILE TECHNOLOGY', 'AT', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(107, 'six', '9-10', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 9, 'PYTHON', 'PY', 48, '.G.VATHANA.', '.GV.', 0),
(108, 'six', '9-10', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(109, 'six', '10-11', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 3, 'AGILE TECHNOLOGY', 'AT', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(110, 'six', '10-11', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 8, 'DISTRIBUTED TECHNOLOGY', 'DT', 38, '.M.GNANASEGARAN.', '.MG.', 0),
(111, 'six', '10-11', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 19, 'PEN KALVI', 'PK', 43, '.G.KAVITHA.', '.GK.', 0),
(112, 'six', '11-12', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 5, 'BUSINESS INNOVATION', 'BI', 46, '.P.ANITHA.', '.PA.', 0),
(113, 'six', '11-12', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 9, 'PYTHON', 'PY', 48, '.G.VATHANA.', '.GV.', 0),
(114, 'six', '11-12', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(115, 'six', '12-1', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(116, 'six', '12-1', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 8, 'DISTRIBUTED TECHNOLOGY', 'DT', 38, '.M.GNANASEGARAN.', '.MG.', 0),
(117, 'six', '12-1', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 53, 'M.ELAYA BHARATHI', 'MEB', 0),
(118, 'six', '1-2', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(119, 'six', '1-2', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 6, 'WEB TECHNOLOGY', 'WT', 45, '.T.BHUVENESHWARI.', '.TB.', 0),
(120, 'six', '1-2', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 17, 'ENGLISH 2', 'E2', 41, '.R.JAYABHARATHI.', '.RJ.', 0),
(121, 'six', '2-3', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(122, 'six', '2-3', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 8, 'DISTRIBUTED TECHNOLOGY', 'DT', 38, '.M.GNANASEGARAN.', '.MG.', 0),
(123, 'six', '2-3', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 15, 'TAMIL 2', 'T2', 47, '.SRIRAM.', '.S.', 0),
(124, 'six', '3-4', 26, 'II M.SC COMPUTER SCIENCE', 'IIMSCCS', 4, 'COULD COMPUTING', 'CC', 48, '.G.VATHANA.', '.GV.', 0),
(125, 'six', '3-4', 27, 'I M.SC COMPUTER SCIENCE', 'IMSCCS', 7, 'COMPUTER GRAPHIES', 'CG', 40, '.J.JOHNAKIRAMAN.', '.JJ.', 0),
(126, 'six', '3-4', 31, 'II BSC COMPUTER SCIENCE T/M', 'IIBSCCST/M', 20, 'JAVA PROGRAMMING LANGUAGE', 'JAVA', 53, 'M.ELAYA BHARATHI', 'MEB', 0);

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
-- Indexes for table `day_orders`
--
ALTER TABLE `day_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hours`
--
ALTER TABLE `hours`
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
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
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
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `day_orders`
--
ALTER TABLE `day_orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `hours`
--
ALTER TABLE `hours`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
