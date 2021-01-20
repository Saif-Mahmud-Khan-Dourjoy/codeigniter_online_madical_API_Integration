-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 02:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnc`
--

-- --------------------------------------------------------

--
-- Table structure for table `advices`
--

CREATE TABLE `advices` (
  `id` int(5) NOT NULL,
  `advice` text NOT NULL,
  `doc_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `appointment_id` int(255) NOT NULL,
  `type` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advices`
--

INSERT INTO `advices` (`id`, `advice`, `doc_id`, `user_id`, `appointment_id`, `type`, `date`) VALUES
(1, 'napa', 0, 0, 0, NULL, '2020-05-21 06:57:49'),
(2, 'flazyl', 0, 0, 0, NULL, '2020-05-21 06:57:49'),
(3, 'napa', 3, 1, 3, NULL, '2020-05-21 07:00:17'),
(4, 'test', 3, 1, 3, NULL, '2020-05-21 07:01:58'),
(5, 'Bp', 3, 1, 16, NULL, '2020-05-22 15:27:30'),
(6, 'Go to bed bu 10 pm', 3, 1, 18, NULL, '2020-05-23 11:26:06'),
(7, 'Nai', 3, 1, 20, NULL, '2020-06-07 06:22:25'),
(8, 'Drink warm water', 3, 1, 26, NULL, '2020-06-08 06:39:50'),
(9, '', 1, 1, 1, NULL, '2020-06-10 09:53:24'),
(10, 'test', 1, 1, 1, 'treatment', '2020-06-11 06:14:40'),
(11, 'ttst', 1, 1, 1, 'treatment', '2020-06-11 06:14:40'),
(12, 'ffsf', 1, 1, 1, 'investigation', '2020-06-11 06:14:40'),
(13, 'ffff', 1, 1, 1, 'investigation', '2020-06-11 06:14:40'),
(14, 'ddf', 1, 1, 1, 'cc_notes', '2020-06-11 06:14:40'),
(15, 'ffd', 1, 1, 1, 'cc_notes', '2020-06-11 06:14:40'),
(16, 'ffd', 1, 1, 1, 'ho_notes', '2020-06-11 06:14:40'),
(17, 'fff', 1, 1, 1, 'ho_notes', '2020-06-11 06:14:40'),
(18, 'fff', 1, 1, 1, 'dd_notes', '2020-06-11 06:14:40'),
(19, 'ddadadd', 1, 1, 1, 'treatment', '2020-06-11 06:20:11'),
(20, 'adadad', 1, 1, 1, 'investigation', '2020-06-11 06:20:11'),
(21, 'dadadad', 1, 1, 1, 'cc_notes', '2020-06-11 06:20:11'),
(22, 'dadadad', 1, 1, 1, 'ho_notes', '2020-06-11 06:20:11'),
(23, 'adadad', 1, 1, 1, 'provisionald_notes', '2020-06-11 06:20:11'),
(24, 'adadad', 1, 1, 1, 'dd_notes', '2020-06-11 06:20:11'),
(25, 'lfjlajflsdf', 3, 1, 40, 'treatment', '2020-07-02 16:02:35'),
(26, 'asdljdsa', 3, 1, 40, 'investigation', '2020-07-02 16:02:35'),
(27, 'fdfd', 3, 1, 40, 'cc_notes', '2020-07-02 16:02:35'),
(28, 'lsdlasdld', 3, 1, 40, 'ho_notes', '2020-07-02 16:02:35'),
(29, 'ljasd', 3, 1, 40, 'provisionald_notes', '2020-07-02 16:02:35'),
(30, 'dsadj', 3, 1, 40, 'dd_notes', '2020-07-02 16:02:35'),
(31, 'Test', 3, 1, 43, 'treatment', '2020-07-02 17:11:51'),
(32, 'Test', 3, 1, 43, 'investigation', '2020-07-02 17:11:51'),
(33, 'Test', 3, 1, 43, 'cc_notes', '2020-07-02 17:11:51'),
(34, 'Tedt', 3, 1, 43, 'ho_notes', '2020-07-02 17:11:51'),
(35, 'Test', 3, 1, 43, 'provisionald_notes', '2020-07-02 17:11:51'),
(36, 'Test', 3, 1, 43, 'dd_notes', '2020-07-02 17:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `alternative_dep`
--

CREATE TABLE `alternative_dep` (
  `id` int(5) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_dep`
--

INSERT INTO `alternative_dep` (`id`, `department`) VALUES
(1, 'Homeopathic'),
(2, 'Unani'),
(3, 'Ayurvedic');

-- --------------------------------------------------------

--
-- Table structure for table `apply_service`
--

CREATE TABLE `apply_service` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `service_id` int(5) NOT NULL,
  `applicant_name` varchar(20) NOT NULL,
  `applicant_number` varchar(20) NOT NULL,
  `applicant_voter_id` varchar(20) NOT NULL,
  `patient_name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply_service`
--

INSERT INTO `apply_service` (`id`, `user_id`, `service_id`, `applicant_name`, `applicant_number`, `applicant_voter_id`, `patient_name`, `gender`) VALUES
(1, 1, 1, 'fdgsd', '541', '44498', 'dfgsd', 'Male'),
(2, 1, 1, '', '', '', '', 'Male'),
(3, 1, 2, '', '', '', '', 'Male'),
(4, 1, 1, 'fdtyu', '45223', '542452', 'hihihihi', 'Male'),
(5, 1, 2, 'dfgdfg', '01675332900', '54541', 'hihihihi', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(5) NOT NULL,
  `doctor_id` int(5) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `user_id` int(5) NOT NULL,
  `patient_name` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `appointment_date` date NOT NULL,
  `next_appointment` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` varchar(2) NOT NULL DEFAULT '1',
  `address` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctor_id`, `doctor_name`, `user_id`, `patient_name`, `age`, `appointment_date`, `next_appointment`, `time`, `status`, `address`, `gender`) VALUES
(1, 3, 'roger', 1, 'khalil', 32, '2020-05-18', '2020-06-18', '04:10:00', '2', '', ''),
(4, 1, 'Zidan', 1, 'khalil', 32, '2020-05-21', NULL, '09:50:00', '1', 'dhaka', 'Male'),
(17, 3, 'Roger', 18, 'N', 50, '2020-05-23', NULL, '08:00:00', '2', 'Mdpur', 'Female'),
(18, 3, 'Roger', 1, 'sfgsdg', 50, '2020-08-13', NULL, NULL, '1', 'sgd', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_timeanddate`
--

CREATE TABLE `appointment_timeanddate` (
  `id` int(5) NOT NULL,
  `doc_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `app_date` varchar(50) NOT NULL,
  `app_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_timeanddate`
--

INSERT INTO `appointment_timeanddate` (`id`, `doc_id`, `user_id`, `app_date`, `app_time`) VALUES
(16, 3, 1, '2020_09_20', '10:00'),
(17, 3, 1, '2020_09_21', '08:30'),
(18, 3, 1, '2020_09_21', '11:00'),
(19, 3, 1, '2020_09_22', '11:15'),
(20, 3, 1, '2020_09_20', '11:00'),
(21, 3, 1, '2020_09_21', '11:15'),
(22, 3, 1, '2020_09_22', '13:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `medicine_id` int(5) NOT NULL,
  `medicine_name` varchar(20) NOT NULL,
  `price` text NOT NULL,
  `quantity` int(5) NOT NULL,
  `total_price` varchar(10) NOT NULL,
  `store_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `name`, `phone`, `address`, `medicine_id`, `medicine_name`, `price`, `quantity`, `total_price`, `store_id`) VALUES
(1, 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'rtesrtg', 1, 'napa', '5.00', 5, '25', 0),
(2, 'fygj', 'chgj', '01675332900', 'xftuh', 1, 'napa', '5.00', 7, '35', 0),
(3, 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'xcfghdfg', 2, 'histacin', '2.00', 6, '12', 0),
(4, 'dourjoykhan@gmail.co', 'dfgh', 'dfcgh', 'drgdfg', 2, 'histacin', '2.00', 5, '10', 0),
(5, 'saer', 'sdtf', 'sdtfg', 'ser', 2, 'histacin', '2.00', 5, '10', 0),
(6, 'bhjkbhjkl', 'hjioolikujl', '745674', 'cfghfgc', 1, 'napa', '5.00', 5, '25', 1),
(7, 'khalil@devszone.com', 'khalil', '01874041873', 'dhaka', 4, 'histacin', '2.00', 1, '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `total_cost` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `address`, `total_cost`, `user_id`) VALUES
(1, '', '', '', '', '272', 1),
(2, '', '', '', '', '272', 1),
(3, '', '', '', '', '272', 1),
(4, '', '', '', '', '272', 1),
(5, '', '', '', '', '62', 1),
(6, '', '', '', '', '62', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(5) NOT NULL,
  `dept_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'Mental Health'),
(2, 'General physician'),
(3, 'Gynaecologist'),
(4, 'Cardiologist');

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic_center`
--

CREATE TABLE `diagnostic_center` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `author_name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diagnostic_center`
--

INSERT INTO `diagnostic_center` (`id`, `name`, `author_name`, `phone`, `address`, `pass`) VALUES
(1, 'Islami Hospital', 'hello', '0135754564', 'mirpur purobi', '1212'),
(2, 'Alok', 'hi', '0354113543', 'Mirpur 11.5', '1213');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `specialized` varchar(54) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `sub_dept_id` int(5) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` int(5) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL,
  `duty_start` time NOT NULL,
  `duty_end` time NOT NULL,
  `charge` int(11) NOT NULL,
  `post` text NOT NULL,
  `institute` text NOT NULL,
  `active` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `specialized`, `degree`, `designation`, `sub_dept_id`, `email`, `age`, `phone`, `address`, `password`, `confirm_password`, `duty_start`, `duty_end`, `charge`, `post`, `institute`, `active`) VALUES
(1, 'Robert', 'Gynaecologist', 'FCPS', 'Professor', 6, 'robert@gmail.com', 0, '01673654652', '', 'robert11', 'robert11', '08:00:00', '13:30:00', 500, '', 'DMC', 0),
(3, 'Roger', 'Psychiatrist', 'MBBS', 'Professor', 0, 'roger@gmail.com', 0, '1234', '', 'roger11', 'roger11', '08:00:00', '13:00:00', 500, 'Asst Surgeon', 'Dept of Medicine, DMCH', 1),
(4, 'DourjoyKhan', 'Clinical Psycologist', 'FCPS', 'Professor', 8, 'ibmojib@gmail.com', 0, '1212121212', '', '121212', '121212', '00:00:00', '00:00:00', 300, '', 'DMC', 0),
(5, 'Dourjoy', 'Gynaecologist', 'FCPS', 'Professor', 6, 'doctor@gmail.com', 20, '57467', 'ftgh', '121212', '121212', '10:00:00', '12:00:00', 1000, '', 'DMC', 0),
(6, 'Robert', 'Gynaecologist', 'FCPS', 'Professor', 6, 'robert@gmail.com', 0, '01673654652', '', 'robert11', 'robert11', '08:00:00', '13:30:00', 500, '', 'DMC', 1),
(7, 'Kabir', 'Medicine', 'FCPS', 'Professor', 0, 'kabir@gmail.com', 30, '56353', 'xfgh', 'kabir', 'kabir', '00:00:00', '00:00:00', 0, '', 'RMC', 0),
(8, 'Irfan', 'Cardiologist', 'FCPS', 'Professor', 0, 'irfan@gmail.com', 30, '52242', 'dxg', 'irfan', 'irfan', '00:00:00', '00:00:00', 0, '', 'afdasf', 0),
(9, 'Irfan', 'General Physician', 'MBBS', 'Professor', 0, 'irfan@gmail.com', 35, '453245235432', 'Mirpur', '1515151515', '1515151515', '10:00:00', '12:00:00', 1000, '', 'RMC', 1),
(10, 'Naina', 'Homeopathic', 'BHMS', '', 0, 'naina@gmail.com', 35, '684424246', 'mirpur', '13131313', '13131313', '08:00:00', '00:00:10', 500, '', 'BHC', 0),
(11, 'Jabbar', 'Ayurvedic', 'B.A.M.S', '', 0, 'jabbar@gmail.com', 40, '2454668', 'mirpur', '18181818', '18181818', '09:00:00', '11:00:00', 500, '', 'MAC', 0),
(12, 'Rahim', 'Unani', 'BUMS', '', 0, 'rahim@gmail.com', 35, '35744343', 'mirpur', '19191919', '19191919', '00:00:08', '11:00:00', 500, '', 'BUC', 0),
(13, 'Raju', 'Companion Animal Veterinarian', 'BVM', '', 0, 'raju@gmail.com', 35, '45453', 'Mirpur', '11111', '11111', '00:00:08', '12:00:00', 300, '', 'BVC', 0),
(14, 'Shaju', 'Veterinary Specialist', 'BVM', '', 0, 'shaju@gmail.com', 30, '545654456', 'mirpur', '2222', '2222', '10:00:00', '12:00:00', 0, '', 'BVC', 0),
(15, 'Kawsar', 'Food Animal Veterinarian', 'BVM', '', 0, 'kawsar@gmail.com', 26, '544545', 'sdfg', '33333', '33333', '10:00:00', '12:00:00', 300, '', 'BVC', 0),
(16, 'Robin', 'Food Safety And Inspection Veterinarian', 'BVM', '', 0, 'robin@gmail.com', 35, '54635463', 'cfghfcg', '1212121212', '1212121212', '09:00:00', '11:00:00', 300, '', 'BVC', 0),
(17, 'Kabir', 'Research Veterinarian', 'BVM', '', 0, 'kabir@gmail.com', 30, '54354246', 'sdfgdfg', '363636', '363636', '10:00:00', '12:00:00', 300, '', 'BVC', 0);

-- --------------------------------------------------------

--
-- Table structure for table `drug_store`
--

CREATE TABLE `drug_store` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drug_store`
--

INSERT INTO `drug_store` (`id`, `name`, `phone`, `address`) VALUES
(1, 'hena', '01655654', 'mirpur-11'),
(2, '24hrs', '01673654652', 'Mirpur Muslim Bazar');

-- --------------------------------------------------------

--
-- Table structure for table `med`
--

CREATE TABLE `med` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicine_list`
--

CREATE TABLE `medicine_list` (
  `medicine_id` int(5) NOT NULL,
  `store_id` int(5) NOT NULL,
  `medicine_name` varchar(20) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_list`
--

INSERT INTO `medicine_list` (`medicine_id`, `store_id`, `medicine_name`, `company_name`, `price`) VALUES
(1, 1, 'napa', 'fgfg', '5.00'),
(2, 1, 'histacin', 'szdf', '2.00'),
(3, 2, 'napa', 'adfsdf', '5.00'),
(4, 2, 'histacin', 'sdf', '2.00'),
(5, 1, 'Alatrol', 'sdfsd', '3.00'),
(6, 1, 'X-Cold', 'sdf', '40.00');

-- --------------------------------------------------------

--
-- Table structure for table `med_service`
--

CREATE TABLE `med_service` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `medicine_name` varchar(100) NOT NULL,
  `mg_ml_cc` int(5) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `med_service`
--

INSERT INTO `med_service` (`id`, `user_id`, `medicine_name`, `mg_ml_cc`, `quantity`) VALUES
(1, 1, 'Napa', 0, 2),
(2, 1, 'Histacin', 0, 5),
(3, 1, 'd', 0, 0),
(4, 1, 'hjsdf', 500, 5);

-- --------------------------------------------------------

--
-- Table structure for table `msg_appoint`
--

CREATE TABLE `msg_appoint` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `doc_id` int(5) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msg_appoint`
--

INSERT INTO `msg_appoint` (`id`, `user_id`, `doc_id`, `message`) VALUES
(1, 1, 5, 'sdrtfgdsfhgsdh'),
(2, 1, 5, 'zdxfgdzfg'),
(3, 1, 5, 'zdxfgdzfg');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(5) NOT NULL,
  `notes` text NOT NULL,
  `doc_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `appointment_id` int(255) NOT NULL,
  `type` text DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `notes`, `doc_id`, `user_id`, `appointment_id`, `type`, `date`) VALUES
(1, 'napa', 0, 0, 0, NULL, '2020-05-21 06:57:49'),
(2, 'flazyl', 0, 0, 0, NULL, '2020-05-21 06:57:49'),
(3, 'napa', 3, 1, 3, NULL, '2020-05-21 07:00:17'),
(4, 'test', 3, 1, 3, NULL, '2020-05-21 07:01:58'),
(5, 'Bp', 3, 1, 16, NULL, '2020-05-22 15:27:30'),
(6, 'Go to bed bu 10 pm', 3, 1, 18, NULL, '2020-05-23 11:26:06'),
(7, 'Nai', 3, 1, 20, NULL, '2020-06-07 06:22:25'),
(8, 'Drink warm water', 3, 1, 26, NULL, '2020-06-08 06:39:50'),
(9, '', 1, 1, 1, NULL, '2020-06-10 09:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `ordercustomer`
--

CREATE TABLE `ordercustomer` (
  `id` int(5) NOT NULL,
  `store_id` int(11) NOT NULL,
  `medicine_name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `count` int(10) NOT NULL,
  `item_cost` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `total_cost` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordercustomer`
--

INSERT INTO `ordercustomer` (`id`, `store_id`, `medicine_name`, `price`, `count`, `item_cost`, `email`, `name`, `phone`, `address`, `total_cost`, `user_id`) VALUES
(1, 1, 'napa', '5.00', 1, '5', 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'Mirpur 12', '100', 1),
(2, 1, 'histacin', '2.00', 3, '6', 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'Mirpur 12', '100', 1),
(3, 1, 'Alatrol', '3.00', 3, '9', 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'Mirpur 12', '100', 1),
(4, 1, 'X-Cold', '40.00', 2, '80', 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'Mirpur 12', '100', 1),
(5, 2, 'napa', '5.00', 3, '15', 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'Mirpur 12', '21', 1),
(6, 2, 'histacin', '2.00', 3, '6', 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'Mirpur 12', '21', 1),
(7, 1, 'napa', '5.00', 2, '10', 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'sdfgsz', '60', 14),
(8, 1, 'histacin', '2.00', 2, '4', 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'sdfgsz', '60', 14),
(9, 1, 'Alatrol', '3.00', 2, '6', 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'sdfgsz', '60', 14),
(10, 1, 'X-Cold', '40.00', 1, '40', 'dourjoykhan@gmail.co', 'DourjoyKhan', '01675332900', 'sdfgsz', '60', 14);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(5) NOT NULL,
  `medicine_name` text NOT NULL,
  `timez` text NOT NULL,
  `quantity` text NOT NULL,
  `doc_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `appointment_id` int(255) NOT NULL,
  `beforeAfter` text DEFAULT NULL,
  `power` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `medicine_name`, `timez`, `quantity`, `doc_id`, `user_id`, `appointment_id`, `beforeAfter`, `power`) VALUES
(1, 'napa', '1+1+1', '3', 0, 0, 0, NULL, ''),
(2, 'flazyl', '1+0+1', '3', 0, 0, 0, NULL, ''),
(3, 'napa', '1+1+1', '3', 0, 0, 0, NULL, ''),
(4, 'napa', '1+1+1', '3', 0, 0, 0, NULL, ''),
(5, 'napa', '1+1+1', '3', 0, 0, 0, NULL, ''),
(6, 'napa', '1+1+1', '3', 0, 0, 0, NULL, ''),
(7, 'napa', '1+1+1', '3', 0, 0, 0, NULL, ''),
(8, 'napa', '1+1+1', '3', 0, 0, 0, NULL, ''),
(9, '', '', '', 0, 0, 0, NULL, ''),
(10, 'napa', '1+1+1', '3', 0, 1, 4, NULL, ''),
(11, 'napa', '1+1+1', '4', 2, 1, 4, NULL, ''),
(12, 'Napa', '111', '7', 3, 1, 1, NULL, ''),
(15, 'napa', '1+1+1', '30', 0, 0, 0, NULL, ''),
(16, 'flazyl', '1+0+1', '5', 0, 0, 0, NULL, ''),
(18, 'napa', '1+1+1', '30', 3, 1, 3, NULL, ''),
(19, 'Napa', '1+1+0', '7days', 3, 1, 16, NULL, ''),
(20, 'Seclo', '1+0+1', '15days', 3, 1, 16, NULL, ''),
(21, 'Napa', '+1+1', '7Days', 3, 18, 17, NULL, ''),
(22, 'Seclo', '1+0+0', '15days', 3, 18, 17, NULL, ''),
(23, 'Tan Napa', '1+0+1', '7 days', 3, 1, 18, NULL, ''),
(24, 'Tab Ciprocin', '1+1+1', '5 days', 3, 1, 18, NULL, ''),
(25, '', '', '', 3, 1, 18, NULL, ''),
(26, 'Nai', '', '', 3, 1, 20, NULL, ''),
(27, 'Tab Ciprocin 500mg', '1+0+1', '7 day', 3, 1, 26, NULL, ''),
(28, 'Tab Napa 500 mg', '1 tan if fever is more than 101', '', 3, 1, 26, NULL, ''),
(30, '', '1+1+1', '30', 1, 1, 1, 'after', '123'),
(31, 'dadad', '1+1+1', '10', 1, 1, 1, 'after', '123'),
(32, 'Napa', '1+0+1', '3 Days', 3, 1, 40, 'After Meal', ''),
(33, 'Napa', '1+0+1', 'After meal', 3, 1, 43, '', '10mg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `store_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(20) NOT NULL,
  `sale_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `store_id`, `name`, `description`, `price`, `sale_count`) VALUES
(1, 1, 'napa', 'fgfg', '5.00', 0),
(2, 1, 'histacin', 'szdf', '2.00', 0),
(3, 2, 'napa', 'adfsdf', '5.00', 0),
(4, 2, 'histacin', 'sdf', '2.00', 0),
(5, 1, 'Alatrol', 'sdfsd', '3.00', 0),
(6, 1, 'X-Cold', 'sdf', '40.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recharge_request`
--

CREATE TABLE `recharge_request` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recharge_request`
--

INSERT INTO `recharge_request` (`id`, `user_id`, `amount`, `status`, `date`, `details`) VALUES
(1, 1, 19500, '1', '2020-05-22 06:33:15', ''),
(2, 1, 500, '1', '2020-05-22 07:38:10', 'test'),
(3, 18, 1000, '1', '2020-05-22 15:10:53', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(5) NOT NULL,
  `service_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`) VALUES
(1, 'Emergency Psychiatric Service'),
(2, 'Home Medicine Delivery ');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `phone`, `address`, `type`) VALUES
(1, 'medica', '0135433565', 'mirpur 7 dhaka', '');

-- --------------------------------------------------------

--
-- Table structure for table `specialist_dep`
--

CREATE TABLE `specialist_dep` (
  `id` int(5) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialist_dep`
--

INSERT INTO `specialist_dep` (`id`, `department`) VALUES
(1, 'Gynaecologist'),
(2, 'Cardiologist');

-- --------------------------------------------------------

--
-- Table structure for table `sub_department`
--

CREATE TABLE `sub_department` (
  `sub_dept_id` int(5) NOT NULL,
  `sub_dept_name` varchar(20) NOT NULL,
  `dept_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_department`
--

INSERT INTO `sub_department` (`sub_dept_id`, `sub_dept_name`, `dept_id`) VALUES
(1, 'psychiatrist', 1),
(2, 'Clinical Psychologis', 1),
(3, 'Emergency Psychiatri', 1),
(4, 'Non-emergency physic', 2),
(5, 'Emergency physician', 2),
(6, 'Non-emergency Gynaec', 3),
(7, 'Emergency Gynaecolog', 3),
(8, 'Non-emergency Cardio', 4),
(9, 'Emergency Cardiologi', 4);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `user_id`, `name`, `detail`) VALUES
(1, 1, 'rahat', 'Facing problems');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model_video_id`
--

CREATE TABLE `tbl_model_video_id` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `appoinment_id` int(11) DEFAULT NULL,
  `seen_id` int(11) DEFAULT 0,
  `notification` varchar(255) DEFAULT NULL,
  `appoinment_date` date DEFAULT NULL,
  `video_id` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `s_time` text DEFAULT NULL,
  `e_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_model_video_id`
--

INSERT INTO `tbl_model_video_id` (`id`, `doctor_id`, `patient_id`, `appoinment_id`, `seen_id`, `notification`, `appoinment_date`, `video_id`, `date`, `s_time`, `e_time`) VALUES
(1, 3, 1, 1, 1, 'New Video Calling', '2020-05-18', '?roomid=1rxp3cgrav94ac5z8j5', '2020-05-18', '04:10:00', NULL),
(2, 3, 1, 2, 3, 'New Video Calling', '2020-05-18', '?roomid=136c5zr1wjhpc7a6p1b6', '2020-05-18', '05:50:00', NULL),
(3, 3, 1, 3, 1, 'New Video Calling', '2020-05-21', '?roomid=1rxp3cgrav94ac5z8j5', '2020-05-21', '05:40:00', NULL),
(5, 3, 1, 5, 1, 'New Video Calling', '2020-05-22', '?roomid=xvn34ei5a5', '2020-05-22', '08:00:00', NULL),
(6, 3, 1, 10, 3, 'New Video Calling', '2020-05-22', '?roomid=1i9xg5hbh29t11qomm30', '2020-05-22', '08:15:00', NULL),
(7, 3, 1, 11, 1, 'New Video Calling', '2020-05-22', '?roomid=6w3dsp4nwov', '2020-05-22', '08:30:00', NULL),
(8, 3, 1, 12, 1, 'New Video Calling', '2020-05-22', '?roomid=f963o2wwmmf', '2020-05-22', '08:45:00', NULL),
(14, 3, 1, 16, 1, 'New Video Calling', '2020-05-22', '?roomid=3xfxrhhh3mj', '2020-05-22', '09:15:00', NULL),
(15, 3, 18, 17, 1, 'New Video Calling', '2020-05-23', '?roomid=ga5yvrc0zzd', '2020-05-23', '08:00:00', NULL),
(16, 3, 1, 18, 1, 'New Video Calling', '2020-05-23', '?roomid=ga5yvrc0zzd', '2020-05-23', '08:15:00', NULL),
(17, 3, 1, 20, 1, 'New Video Calling', '2020-06-07', '?roomid=i8pk8w6drr', '2020-06-07', '08:00:00', NULL),
(18, 3, 1, 23, 1, 'New Video Calling', '2020-06-07', '?roomid=879nygdg0gs', '2020-06-07', '08:45:00', NULL),
(19, 3, 1, 21, 1, 'New Video Calling', '2020-06-07', '?roomid=4nwa5xnw3mx', '2020-06-07', '08:15:00', NULL),
(20, 3, 1, 22, 1, 'New Video Calling', '2020-06-07', '?roomid=ei3akprjs8b', '2020-06-07', '08:30:00', NULL),
(21, 3, 1, 24, 1, 'New Video Calling', '2020-06-07', '?roomid=20np2ck6ock', '2020-06-07', '09:00:00', NULL),
(28, 3, 1, 31, 1, 'New Video Calling', '2020-06-27', '?roomid=20np2ck6ock', '2020-06-27', '08:00:00', NULL),
(29, 3, 1, 33, 3, 'New Video Calling', '2020-06-29', '?roomid=presc-sec', '2020-06-29', '08:15:00', NULL),
(30, 3, 1, 32, 1, 'New Video Calling', '2020-06-29', '?roomid=xx2bx2govcm', '2020-06-29', '08:00:00', NULL),
(31, 3, 1, 34, 3, 'New Video Calling', '2020-06-29', '?roomid=20np2ck6ock', '2020-06-29', '08:30:00', NULL),
(32, 3, 1, 35, 1, 'New Video Calling', '2020-06-29', '?roomid=20np2ck6ock', '2020-06-29', '08:45:00', NULL),
(33, 3, 1, 36, 1, 'New Video Calling', '2020-06-29', '?roomid=20np2ck6ock', '2020-06-29', '09:00:00', NULL),
(34, 3, 1, 38, 1, 'New Video Calling', '2020-06-29', '?roomid=20np2ck6ock', '2020-06-29', '09:30:00', NULL),
(35, 3, 1, 37, 1, 'New Video Calling', '2020-06-29', '?roomid=20np2ck6ock', '2020-06-29', '09:15:00', NULL),
(36, 3, 1, 39, 1, 'New Video Calling', '2020-06-30', '?roomid=20np2ck6ock', '2020-06-30', '08:00:00', NULL),
(37, 3, 1, 40, 1, 'New Video Calling', '2020-07-02', '?roomid=20np2ck6ock', '2020-07-02', '08:00:00', NULL),
(38, 3, 1, 41, 1, 'New Video Calling', '2020-07-02', '?roomid=f1trccj3mrt', '2020-07-02', '08:15:00', NULL),
(39, 3, 1, 42, 1, 'New Video Calling', '2020-07-02', '?roomid=7swd2m7of7v', '2020-07-02', '08:30:00', NULL),
(40, 3, 1, 43, 1, 'New Video Calling', '2020-07-02', '?roomid=bbjb14cdpkw', '2020-07-02', '08:45:00', NULL),
(41, 3, 1, 45, 1, 'New Video Calling', '2020-07-02', '?roomid=5wzxngzpr2x', '2020-07-02', '09:15:00', NULL),
(42, 3, 1, 44, 1, 'New Video Calling', '2020-07-02', '?roomid=eenesac1zf', '2020-07-02', '09:00:00', NULL),
(43, 3, 1, 46, 1, 'New Video Calling', '2020-07-22', '?roomid=7yqnqfr41ti', '2020-07-22', '08:00:00', NULL),
(44, 3, 1, 47, 1, 'New Video Calling', '2020-07-22', '?roomid=iqq3sq7g5vo', '2020-07-22', '08:15:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(5) NOT NULL,
  `diagnostic_id` int(5) NOT NULL,
  `test_list` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` text NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `diagnostic_id`, `test_list`, `date`, `time`, `user_id`) VALUES
(1, 1, 'Blood_Test,X-ray', '0000-00-00', '', 1),
(3, 1, 'Blood_Test,X-ray,MRI', '2020-08-20', '22:14', 1),
(4, 2, 'Blood_Test,CT Scan,MRI', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tests_list`
--

CREATE TABLE `tests_list` (
  `test_id` int(5) NOT NULL,
  `diagnostic_center_id` int(5) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests_list`
--

INSERT INTO `tests_list` (`test_id`, `diagnostic_center_id`, `test_name`, `price`) VALUES
(1, 1, 'Blood_Test', '100'),
(2, 1, 'X-ray', '450'),
(3, 2, 'Blood_Test', '100'),
(4, 2, 'CT Scan', '2000'),
(5, 2, 'MRI', '500'),
(6, 2, 'Urine_Test', '1200'),
(7, 1, 'MRI', '500'),
(8, 1, 'Hepa-B', '1550'),
(10, 1, 'Ultrasonography', '500'),
(11, 1, 'dsfhg', '1550'),
(12, 1, 'sfg', '541'),
(13, 1, 'sDgsfdr', '365'),
(14, 1, 'hello_hello', '1550'),
(15, 1, 'helllllo', 'hello150'),
(16, 1, 'hi', 'hi15');

-- --------------------------------------------------------

--
-- Table structure for table `tests_result`
--

CREATE TABLE `tests_result` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `diagnostic_center_id` int(5) NOT NULL,
  `test_result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests_result`
--

INSERT INTO `tests_result` (`id`, `user_id`, `diagnostic_center_id`, `test_result`) VALUES
(3, 1, 1, '{\"Blood_Test\":\"100\",\"X-ray\":\"500\",\"MRI\":\"300\"}');

-- --------------------------------------------------------

--
-- Table structure for table `useage_history`
--

CREATE TABLE `useage_history` (
  `id` int(255) NOT NULL,
  `appointment_id` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useage_history`
--

INSERT INTO `useage_history` (`id`, `appointment_id`, `amount`, `date`) VALUES
(1, 5, 500, '2020-05-21 11:45:05'),
(2, 6, 500, '2020-05-21 13:23:39'),
(3, 7, 500, '2020-05-21 13:27:54'),
(4, 8, 500, '2020-05-21 16:07:16'),
(5, 9, 500, '2020-05-21 16:11:32'),
(6, 10, 500, '2020-05-22 06:12:27'),
(7, 11, 500, '2020-05-22 14:21:28'),
(8, 12, 500, '2020-05-22 14:23:45'),
(9, 13, 500, '2020-05-22 14:29:46'),
(10, 14, 500, '2020-05-22 15:12:40'),
(11, 15, 500, '2020-05-22 15:20:54'),
(12, 16, 500, '2020-05-22 15:25:23'),
(13, 17, 500, '2020-05-23 11:08:52'),
(14, 18, 500, '2020-05-23 11:22:44'),
(15, 19, 500, '2020-06-06 13:20:32'),
(16, 20, 500, '2020-06-07 05:06:07'),
(17, 21, 500, '2020-06-07 05:06:09'),
(18, 22, 500, '2020-06-07 05:09:24'),
(19, 23, 500, '2020-06-07 05:24:20'),
(20, 24, 500, '2020-06-07 06:28:24'),
(21, 25, 500, '2020-06-08 06:27:37'),
(22, 26, 500, '2020-06-08 06:28:27'),
(23, 27, 500, '2020-06-25 14:45:22'),
(24, 28, 500, '2020-06-25 15:02:45'),
(25, 29, 500, '2020-06-25 15:11:24'),
(26, 30, 500, '2020-06-26 17:01:35'),
(27, 31, 500, '2020-06-27 14:33:36'),
(28, 32, 500, '2020-06-29 10:51:27'),
(29, 33, 500, '2020-06-29 10:55:26'),
(30, 34, 500, '2020-06-29 11:08:27'),
(31, 35, 500, '2020-06-29 11:09:47'),
(32, 36, 500, '2020-06-29 11:17:20'),
(33, 37, 500, '2020-06-29 11:28:51'),
(34, 38, 500, '2020-06-29 13:30:22'),
(35, 39, 500, '2020-06-30 15:23:41'),
(36, 40, 500, '2020-07-02 14:29:40'),
(37, 41, 500, '2020-07-02 16:05:15'),
(38, 42, 500, '2020-07-02 16:35:30'),
(39, 43, 500, '2020-07-02 17:05:30'),
(40, 44, 500, '2020-07-02 17:07:13'),
(41, 45, 500, '2020-07-02 17:21:47'),
(42, 46, 500, '2020-07-22 17:06:04'),
(43, 47, 500, '2020-07-22 17:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` int(5) DEFAULT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(20) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `phone`, `age`, `address`, `password`, `confirm_password`, `description`) VALUES
(1, 'dourjoykhan@gmail.com', 'Dourjoy Khan', '01675332900', 27, 'House 264, Road 3, Avenue 3, Mirpur DOHS, Pallabi Dhaka', '121212', '121212', 'test'),
(3, 'ibmojib@gmail.com', 'Mujib', '2242462425', 40, 'Mirpur ', '212121', '212121', NULL),
(4, 'saif15-7098@diu.edu.bd', '', '', NULL, '', 'saifmahmud11', 'saifmahmud11', NULL),
(5, 'tohfa.moon.7', '', '', NULL, '', '545454', '545454', NULL),
(6, '+8801753023345', '', '', NULL, '', 'asasas', 'asasas', NULL),
(7, 'saif15-7098@diu.edu.bd', '', '', NULL, '', '12131415', '12131415', NULL),
(8, 'ibmojib@gmail.com', '', '', NULL, '', '111111', '111111', NULL),
(9, 'ibmojib@yahoo.com', '', '', NULL, '', '11111', '11111', NULL),
(10, 'dourjoykhan@gmail.com', '', '', NULL, '', '171717', '171717', NULL),
(11, 'xfcg', '', '', NULL, '', 'fx', 'xf', NULL),
(12, 'sfd', '', '', NULL, '', 'sfdg', '', NULL),
(13, 'sdf', '', '', NULL, '', 'sedf', 'sdf', NULL),
(14, 'ibmojib@gmail.com', 'rahat', '01675332900', NULL, '', '151416', '151416', NULL),
(15, 'dourjoykhan@gmail.com', 'DourjoyKhan', '01675332900', NULL, '', 'sdf', 'zsdf', NULL),
(16, '', '', '', 0, 'text', '', '', ''),
(17, '', '', '', 0, '', '', '', NULL),
(18, 'me@estiak.com', 'Estiak', '01874041870', 90, '', '1234', '1234', NULL),
(19, '', '', '', 0, '', '', '', NULL),
(20, '', '', '', 0, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `veterinary_dep`
--

CREATE TABLE `veterinary_dep` (
  `id` int(5) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `veterinary_dep`
--

INSERT INTO `veterinary_dep` (`id`, `department`) VALUES
(1, 'Companion Animal Veterinarian'),
(2, 'Veterinary Specialist'),
(3, 'Food Animal Veterinarian '),
(4, 'Food Safety And Inspection Veterinarian'),
(5, 'Research Veterinarian');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `user_id`, `amount`) VALUES
(1, 1, 1500),
(2, 18, 16000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advices`
--
ALTER TABLE `advices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_dep`
--
ALTER TABLE `alternative_dep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_service`
--
ALTER TABLE `apply_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_timeanddate`
--
ALTER TABLE `appointment_timeanddate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `diagnostic_center`
--
ALTER TABLE `diagnostic_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug_store`
--
ALTER TABLE `drug_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `med`
--
ALTER TABLE `med`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_list`
--
ALTER TABLE `medicine_list`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `med_service`
--
ALTER TABLE `med_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg_appoint`
--
ALTER TABLE `msg_appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordercustomer`
--
ALTER TABLE `ordercustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recharge_request`
--
ALTER TABLE `recharge_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialist_dep`
--
ALTER TABLE `specialist_dep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_department`
--
ALTER TABLE `sub_department`
  ADD PRIMARY KEY (`sub_dept_id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_model_video_id`
--
ALTER TABLE `tbl_model_video_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests_list`
--
ALTER TABLE `tests_list`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `tests_result`
--
ALTER TABLE `tests_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useage_history`
--
ALTER TABLE `useage_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veterinary_dep`
--
ALTER TABLE `veterinary_dep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advices`
--
ALTER TABLE `advices`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `alternative_dep`
--
ALTER TABLE `alternative_dep`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apply_service`
--
ALTER TABLE `apply_service`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `appointment_timeanddate`
--
ALTER TABLE `appointment_timeanddate`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diagnostic_center`
--
ALTER TABLE `diagnostic_center`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `drug_store`
--
ALTER TABLE `drug_store`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `med`
--
ALTER TABLE `med`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicine_list`
--
ALTER TABLE `medicine_list`
  MODIFY `medicine_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `med_service`
--
ALTER TABLE `med_service`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `msg_appoint`
--
ALTER TABLE `msg_appoint`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ordercustomer`
--
ALTER TABLE `ordercustomer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recharge_request`
--
ALTER TABLE `recharge_request`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialist_dep`
--
ALTER TABLE `specialist_dep`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_department`
--
ALTER TABLE `sub_department`
  MODIFY `sub_dept_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_model_video_id`
--
ALTER TABLE `tbl_model_video_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tests_list`
--
ALTER TABLE `tests_list`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tests_result`
--
ALTER TABLE `tests_result`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `useage_history`
--
ALTER TABLE `useage_history`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `veterinary_dep`
--
ALTER TABLE `veterinary_dep`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
