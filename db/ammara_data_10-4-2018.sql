-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 09:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ammara_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_orders`
--

CREATE TABLE `all_orders` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `batch_release`
--

CREATE TABLE `batch_release` (
  `id` int(11) NOT NULL,
  `wo_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `finish_qty` varchar(255) NOT NULL,
  `packer_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `qty_per_mc` varchar(255) NOT NULL,
  `total_carton` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `finished_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch_release`
--

INSERT INTO `batch_release` (`id`, `wo_id`, `flow_id`, `operator`, `status`, `finish_qty`, `packer_name`, `date`, `qty_per_mc`, `total_carton`, `user_id`, `product_name`, `order_qty`, `finished_qty`, `created_at`) VALUES
(36, 54, 195, '', '332', '', '', '0000-00-00', '', '2133232', 2, 'C/N BAYDAL SYRUP 60ML T/P', 131, 323232, '2018-09-11 11:38:43'),
(37, 54, 195, '', '332', '', '', '0000-00-00', '', '2133232', 2, 'C/N BAYDAL SYRUP 60ML T/P', 131, 323232, '2018-09-11 11:39:39'),
(38, 54, 195, '', '332', '', '', '0000-00-00', '', '2133232', 2, 'C/N BAYDAL SYRUP 60ML T/P', 131, 323232, '2018-09-11 11:40:00'),
(39, 54, 195, '', '323232', '', '', '0000-00-00', '', '222', 2, 'C/N BAYDAL SYRUP 60ML T/P', 131, 3232, '2018-09-11 11:40:15'),
(40, 58, 203, '', '', '', '', '0000-00-00', '', '', 2, 'C/N BAYDAL SYRUP 60ML T/P', 132, 0, '2018-09-12 05:28:59'),
(41, 59, 212, '', '', '', '', '0000-00-00', '', '', 2, 'CARTON VIDAYLN DROPS 10ML.', 0, 0, '2018-09-12 06:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `batch_release_parameters`
--

CREATE TABLE `batch_release_parameters` (
  `id` int(11) NOT NULL,
  `batch_release_id` int(11) NOT NULL,
  `grammage_status` varchar(250) NOT NULL,
  `grammage_remarks` varchar(250) NOT NULL,
  `color_status` varchar(250) NOT NULL,
  `color_remarks` varchar(250) NOT NULL,
  `design_status` varchar(250) NOT NULL,
  `design_remarks` varchar(250) NOT NULL,
  `text_status` varchar(250) NOT NULL,
  `text_remarks` varchar(250) NOT NULL,
  `scum_spots_status` varchar(250) NOT NULL,
  `scum_spots_remarks` varchar(250) NOT NULL,
  `gloss_status` varchar(250) NOT NULL,
  `gloss_remarks` varchar(250) NOT NULL,
  `die_cutting_embossing_status` varchar(250) NOT NULL,
  `die_cutting_embossing_remarks` varchar(250) NOT NULL,
  `creasing_status` varchar(250) NOT NULL,
  `creasing_remarks` varchar(250) NOT NULL,
  `stripping_status` varchar(250) NOT NULL,
  `stripping_remarks` varchar(250) NOT NULL,
  `folding_gluing_status` varchar(250) NOT NULL,
  `folding_gluing_remarks` varchar(250) NOT NULL,
  `labeling_status` varchar(250) NOT NULL,
  `labeling_remarks` varchar(250) NOT NULL,
  `packing_status` varchar(250) NOT NULL,
  `packing_remarks` varchar(250) NOT NULL,
  `master_cartons_status` varchar(250) NOT NULL,
  `master_cartons_remarks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch_release_parameters`
--

INSERT INTO `batch_release_parameters` (`id`, `batch_release_id`, `grammage_status`, `grammage_remarks`, `color_status`, `color_remarks`, `design_status`, `design_remarks`, `text_status`, `text_remarks`, `scum_spots_status`, `scum_spots_remarks`, `gloss_status`, `gloss_remarks`, `die_cutting_embossing_status`, `die_cutting_embossing_remarks`, `creasing_status`, `creasing_remarks`, `stripping_status`, `stripping_remarks`, `folding_gluing_status`, `folding_gluing_remarks`, `labeling_status`, `labeling_remarks`, `packing_status`, `packing_remarks`, `master_cartons_status`, `master_cartons_remarks`) VALUES
(7, 36, '323', '23232', '3232', '323', '3232', '3232', '', '', '', '', '', '', '', '', '', '', '3232', '', '323232', '', '3232', '3232', '32332', '32', '323232', '32321cddsds'),
(8, 37, '323', '23232', '3232', '323', '3232', '3232', '', '', '', '', '', '', '', '', '', '', '3232', '', '323232', '', '3232', '3232', '32332', '32', '323232', '32321cddsds'),
(9, 38, '323', '23232', '3232', '323', '3232', '3232', '', '', '', '', '', '', '', '', '', '', '3232', '', '323232', '', '3232', '3232', '32332', '32', '323232', '32321cddsds'),
(10, 39, '', '', '323232', '', '323232', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 40, '', '', 'dffdfd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 41, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3', '33', '', '33', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bom`
--

CREATE TABLE `bom` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bom`
--

INSERT INTO `bom` (`id`, `item_id`, `product_id`, `qty`, `user_id`, `created_at`) VALUES
(1, 2, 5, 50, 2, '2018-04-07 07:07:09'),
(2, 2, 5, 50, 2, '2018-04-07 07:07:09'),
(3, 2, 18, 50, 2, '2018-04-07 07:07:09'),
(4, 3, 5, 5, 2, '2018-04-09 06:42:30'),
(5, 4, 35, 10, 2, '2018-04-10 11:53:26'),
(6, 4, 35, 10, 2, '2018-04-10 11:53:26'),
(7, 4, 14, 10, 2, '2018-04-10 11:53:26'),
(8, 1, 5, 0, 2, '2018-04-12 09:25:14'),
(9, 7, 6, 0, 2, '2018-04-20 07:04:32'),
(10, 7, 6, 0, 2, '2018-04-20 07:04:32'),
(11, 7, 32, 0, 2, '2018-04-20 07:04:32'),
(12, 7, 6, 0, 2, '2018-04-20 07:04:32'),
(13, 7, 32, 0, 2, '2018-04-20 07:04:32'),
(14, 7, 249, 0, 2, '2018-04-20 07:04:32'),
(15, 0, 0, 0, 0, '2018-04-23 06:31:14'),
(16, 0, 0, 0, 0, '2018-04-23 06:31:14'),
(17, 0, 0, 0, 0, '2018-04-23 06:31:14'),
(18, 6, 5, 0, 2, '2018-04-23 06:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(245) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `Name`, `user_id`, `created_at`) VALUES
(2, 'Paper', 2, '2018-03-12 06:59:12'),
(3, 'Card', 2, '2018-03-12 08:58:11'),
(4, 'Board', 2, '2018-03-12 09:00:07'),
(5, 'Carton', 2, '2018-03-12 09:00:59'),
(6, 'Raw Material', 2, '2018-03-12 09:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) UNSIGNED NOT NULL,
  `client_Name` varchar(250) DEFAULT NULL,
  `Detail` text,
  `order_Margin` int(250) DEFAULT NULL,
  `Contact_Person` varchar(250) DEFAULT NULL,
  `Contact_Number` varchar(250) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Address` tinytext,
  `Company_Name` varchar(250) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_Name`, `Detail`, `order_Margin`, `Contact_Person`, `Contact_Number`, `Email`, `Address`, `Company_Name`, `type`, `user_id`, `created_at`) VALUES
(8, 'BAYER', 'BAYER Pharmaceutical Company', 10, 'NA', '00011122233', 'test@gmail.com', 'karachi, Pakistan', 'BAYER Pharmaceutical Company', 'Gold', 2, '2018-09-10 08:41:06'),
(9, 'ABBOTT', 'ABBOTT Pharmaceutical Company', 10, 'NA', '00011122233', 'test@gmail.com', 'karachi, pakistan', 'ABBOTT Pharmaceutical Company', 'Gold', 2, '2018-09-10 08:41:48'),
(10, 'GETZ', 'GETZ Pharmaceutical Company', 10, 'NA', '00011122233', 'test@gmail.com', 'karachi, Pakistan', 'GETZ Pharmaceutical Company', 'Gold', 2, '2018-09-10 08:56:59'),
(11, 'ATLAS HONDA', 'Atlas Honda is a Pakistani motorcycle manufacturer ', 10, 'NA', '00011122233', 'test@gmail.com', 'karachi, pakistan', 'Atlas Honda is a Pakistani motorcycle manufacturer ', 'Gold', 2, '2018-09-10 08:58:42'),
(12, 'ATCO', 'ATCO Gas industry company', 10, 'NA', '00011122233', 'test@gmail.com', 'karachi, Pakistan', 'ATCO Gas industry company', 'Gold', 2, '2018-09-10 08:59:49'),
(13, 'ICI', 'ICI Pakistan', 10, 'NA', '00011122233', 'test@gmail.com', 'karcahi, Pakistan', 'ICI Pakistan', 'Gold', 2, '2018-09-10 09:00:37'),
(14, 'ASPIN', 'ASPIN Pharmaceutical company', 10, 'NA', '00011122233', 'test@gmail.com', 'karchi, Pakistan', 'ASPIN Pharmaceutical company', 'Gold', 2, '2018-09-10 09:01:45'),
(15, 'CIRIN', 'CIRIN Pharmaceutical company', 10, 'NA', '00011122233', 'test@gmail.com', 'karachi, Pakistan', 'CIRIN Pharmaceutical company', 'Gold', 2, '2018-09-10 09:02:53'),
(16, 'PLATINUM', 'PLATINUM Pharmaceutical company', 10, 'NA', '00011122233', 'test@gmail.com', 'karachi, Pakistan', 'PLATINUM Pharmaceutical company', 'Gold', 2, '2018-09-10 09:03:41'),
(17, 'HELIX', 'HELIX', 10, 'NA', '00011122233', 'test@gmail.com', 'karachi, Pakistan', 'HELIX', 'Gold', 2, '2018-09-10 09:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `coating`
--

CREATE TABLE `coating` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `assistant` varchar(255) NOT NULL,
  `process` varchar(255) NOT NULL,
  `opening` varchar(255) NOT NULL,
  `closing` varchar(255) NOT NULL,
  `output` varchar(255) NOT NULL,
  `waste` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coating`
--

INSERT INTO `coating` (`id`, `plane_id`, `flow_id`, `operator`, `assistant`, `process`, `opening`, `closing`, `output`, `waste`, `user_id`, `created_at`) VALUES
(30, 51, 193, '', 'asdasd', 'Select Process', '21312', '123123', '123123', '123123', 2, '2018-09-11 11:36:13'),
(31, 53, 201, '2233223323', '323232', 'Coating', '32343', '3223', '233232', '3323', 2, '2018-09-12 05:26:00'),
(32, 54, 207, 'saassa', 'saassa', 'Coating', '2', '3', '123123', '212122', 2, '2018-09-12 06:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `coating_complete`
--

CREATE TABLE `coating_complete` (
  `id` int(11) NOT NULL,
  `completed` varchar(100) NOT NULL,
  `feeder` varchar(100) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `cleaning` varchar(100) NOT NULL,
  `specs` varchar(100) NOT NULL,
  `impression` varchar(100) NOT NULL,
  `gauge` varchar(100) NOT NULL,
  `ready` varchar(100) NOT NULL,
  `print_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coating_complete`
--

INSERT INTO `coating_complete` (`id`, `completed`, `feeder`, `delivery`, `cleaning`, `specs`, `impression`, `gauge`, `ready`, `print_id`, `user_id`, `created_at`) VALUES
(30, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 30, 2, '2018-09-11 11:36:46'),
(31, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 31, 2, '2018-09-12 05:26:34'),
(32, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 32, 2, '2018-09-12 06:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `coating_hourse`
--

CREATE TABLE `coating_hourse` (
  `id` int(11) NOT NULL,
  `coating_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `froms` varchar(100) NOT NULL,
  `tos` varchar(100) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `counter` varchar(100) NOT NULL,
  `remarks` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coating_hourse`
--

INSERT INTO `coating_hourse` (`id`, `coating_id`, `code`, `froms`, `tos`, `hours`, `counter`, `remarks`) VALUES
(36, 30, 'Plate Spoiling', '23:11', '12:31', '9 am/pm', 'ewewew', 'weewweew'),
(37, 30, 'Cleaning Plate', '', '', '2 am/pm', 'ewewweewwe', 'ewewew'),
(38, 31, 'Plate Spoiling', '14:11', '00:22', '10 am/pm', 'ewwe', 'ewew'),
(39, 31, 'Waiting', '14:12', '14:02', '11 am/pm', '2', '122'),
(40, 32, 'Plate Spoiling', '', '', '10 am/pm', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `coating_report`
--

CREATE TABLE `coating_report` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complain_assessment_form`
--

CREATE TABLE `complain_assessment_form` (
  `id` int(11) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `caf_no` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `complain` varchar(255) NOT NULL,
  `machine` varchar(255) NOT NULL,
  `name_of_resposible_workers` varchar(255) NOT NULL,
  `further_detail` varchar(255) NOT NULL,
  `qc_personal_name` varchar(255) NOT NULL,
  `complain_reveiwed_name` varchar(255) NOT NULL,
  `complain_reveiwed_signature` varchar(255) NOT NULL,
  `complain_reveiwed_comments` varchar(255) NOT NULL,
  `approved_by_qc_qa` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `corrective_action_request`
--

CREATE TABLE `corrective_action_request` (
  `id` int(11) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `date_of_reporting` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `process` varchar(255) DEFAULT NULL,
  `priority` varchar(255) DEFAULT NULL,
  `description_of_non_conformity` varchar(255) DEFAULT NULL,
  `submit_assigned_to` varchar(255) DEFAULT NULL,
  `submit_assigned_date` varchar(255) DEFAULT NULL,
  `submit_respond_by` varchar(255) DEFAULT NULL,
  `completed_identified_cause` varchar(255) DEFAULT NULL,
  `ca_taken_to_prevent_recurrence` varchar(255) DEFAULT NULL,
  `date_action_completed` varchar(255) DEFAULT NULL,
  `incharge` varchar(255) DEFAULT NULL,
  `return_effectiveness_verified_by` varchar(255) DEFAULT NULL,
  `retrun_date` varchar(255) DEFAULT NULL,
  `return_result` varchar(255) DEFAULT NULL,
  `return_confirmed_by_manager_qa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cutting`
--

CREATE TABLE `cutting` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `assistant` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `conversion` varchar(100) NOT NULL,
  `cleaning` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `production` varchar(100) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cutting`
--

INSERT INTO `cutting` (`id`, `plane_id`, `flow_id`, `operator`, `assistant`, `quantity`, `conversion`, `cleaning`, `size`, `production`, `remarks`, `user_id`, `created_at`) VALUES
(35, 51, 191, '', '', '', 'NA', 'Yes', 'Yes', '', '', 2, '2018-09-11 11:16:02'),
(36, 52, 197, '', '', '', 'NA', 'Yes', 'Yes', '', '', 2, '2018-09-11 11:41:59'),
(37, 53, 199, 'dsdsdsdssd', 'sdsd', 'sdsd', 'NA', 'Yes', 'Yes', 'dsd', 'dsds', 2, '2018-09-12 05:22:52'),
(38, 54, 205, '', '', '', 'NA', 'Yes', 'Yes', '', '', 2, '2018-09-12 05:52:41'),
(39, 56, 217, '', '', '', 'NA', 'Yes', 'Yes', 'fdfd', 'fdfd', 2, '2018-09-14 06:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_challan`
--

CREATE TABLE `delivery_challan` (
  `id` int(11) NOT NULL,
  `wo_id` int(11) NOT NULL,
  `delivery_challan` varchar(100) NOT NULL,
  `line_no` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_challan`
--

INSERT INTO `delivery_challan` (`id`, `wo_id`, `delivery_challan`, `line_no`, `user_id`, `created_at`) VALUES
(1, 59, '', '', 2, '2018-09-12 06:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `design_report`
--

CREATE TABLE `design_report` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design_report`
--

INSERT INTO `design_report` (`id`, `order_id`, `remarks`, `file`, `user_id`, `created_at`) VALUES
(1, 60, 'asdasd', '/uploads/D+Team-09.png', 2, '2018-09-12 10:36:40'),
(2, 61, 'adada', '', 2, '2018-09-13 08:31:50'),
(3, 62, 'asdasd', '/uploads/221.jpg', 2, '2018-09-14 06:55:49'),
(4, 59, 'hhhh', '/uploads/2_copy.jpg', 2, '2018-09-14 07:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `development_report`
--

CREATE TABLE `development_report` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `development_report`
--

INSERT INTO `development_report` (`id`, `order_id`, `remarks`, `file`, `user_id`, `created_at`) VALUES
(1, 60, 'asdasd', '', 2, '2018-09-12 10:35:32'),
(2, 61, 'talha1', '', 2, '2018-09-13 08:31:31'),
(3, 62, 'asdasd', '', 2, '2018-09-14 06:47:04'),
(4, 59, 'i have attached the file please check', '/uploads/22.jpg', 2, '2018-09-14 06:52:32'),
(5, 58, 'ggggg', '/uploads/2_copy1.jpg', 2, '2018-09-14 07:05:29'),
(6, 64, 'assasa', '/uploads/2_copy.jpg', 2, '2018-09-14 09:49:41'),
(7, 63, 'asasasasa', '/uploads/work_order/1_copy.jpg', 2, '2018-09-14 09:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `die_cutting`
--

CREATE TABLE `die_cutting` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `assistant` varchar(100) NOT NULL,
  `process` varchar(100) NOT NULL,
  `opening` varchar(100) NOT NULL,
  `closing` varchar(100) NOT NULL,
  `output` varchar(100) NOT NULL,
  `waste` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `die_cutting`
--

INSERT INTO `die_cutting` (`id`, `plane_id`, `flow_id`, `operator`, `assistant`, `process`, `opening`, `closing`, `output`, `waste`, `user_id`, `created_at`) VALUES
(1, 54, 208, 'saassa', 'saassa', 'Cutting', '2', '3', '123123', '212121', 2, '2018-09-12 06:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `die_cutting_complete`
--

CREATE TABLE `die_cutting_complete` (
  `id` int(11) NOT NULL,
  `die_cutting_id` int(11) NOT NULL,
  `completed` varchar(10) NOT NULL,
  `feeder` varchar(10) NOT NULL,
  `delivery` varchar(10) NOT NULL,
  `die` varchar(10) NOT NULL,
  `plate` varchar(10) NOT NULL,
  `ready` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `die_cutting_complete`
--

INSERT INTO `die_cutting_complete` (`id`, `die_cutting_id`, `completed`, `feeder`, `delivery`, `die`, `plate`, `ready`, `user_id`, `created_at`) VALUES
(1, 1, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 2, '2018-09-12 06:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `die_cutting_hourse`
--

CREATE TABLE `die_cutting_hourse` (
  `id` int(11) NOT NULL,
  `die_cutting_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `froms` varchar(100) NOT NULL,
  `tos` varchar(100) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `counter` varchar(100) NOT NULL,
  `remarks` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `die_cutting_hourse`
--

INSERT INTO `die_cutting_hourse` (`id`, `die_cutting_id`, `code`, `froms`, `tos`, `hours`, `counter`, `remarks`) VALUES
(1, 1, 'Make Ready', '', '', '11 am/pm', '12312', 'sasa');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `name`, `user_id`, `created_at`) VALUES
(3, 'No Of Colors', 2, '2018-01-11 08:45:38'),
(4, 'Varnish', 2, '2018-01-12 06:55:22'),
(5, 'Water Base', 2, '2018-01-11 08:46:06'),
(6, 'UV Coating', 2, '2018-01-11 08:46:24'),
(7, 'Spot UV', 2, '2018-01-11 08:46:38'),
(8, 'Security Feature', 2, '2018-01-12 06:55:15'),
(9, 'Embossing', 2, '2018-01-11 08:47:10'),
(10, 'Foiling', 2, '2018-01-12 06:55:31'),
(11, 'Lamination', 2, '2018-01-12 06:55:39'),
(12, 'Die Cut', 2, '2018-01-12 06:55:47'),
(13, 'striping', 2, '2018-01-11 08:49:35'),
(14, 'straigth pasting', 2, '2018-01-11 08:50:25'),
(15, 'Crash Lock Pasting', 2, '2018-01-11 08:51:32'),
(16, 'Hand Pasting', 2, '2018-01-11 08:51:49'),
(17, 'Folding', 2, '2018-01-11 08:52:04'),
(18, 'label Cutting', 2, '2018-01-11 08:52:30'),
(19, 'leaflet cutting', 2, '2018-01-11 08:53:00'),
(20, 'binding', 2, '2018-01-11 08:53:18'),
(21, 'packing material', 2, '2018-01-11 08:53:36'),
(22, 'Master Carton', 2, '2018-01-11 08:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `flows`
--

CREATE TABLE `flows` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flows`
--

INSERT INTO `flows` (`id`, `Name`, `user_id`, `created_at`) VALUES
(4, 'Cutting', 2, '2018-01-23 10:51:15'),
(5, 'Film Making', 2, '2018-01-23 10:51:24'),
(6, 'Plate Making', 2, '2018-01-23 10:51:34'),
(7, 'Printing', 2, '2018-01-23 10:51:43'),
(8, 'Leaflet Cutting', 2, '2018-01-23 10:52:04'),
(9, 'UV Printing', 2, '2018-01-23 10:52:25'),
(10, 'Sorting', 2, '2018-01-23 10:52:35'),
(11, 'Label Cutting', 2, '2018-01-23 10:52:43'),
(12, 'Folding', 2, '2018-01-23 10:52:55'),
(13, 'Die Cutting', 2, '2018-01-23 10:53:06'),
(14, 'Packing', 2, '2018-01-23 10:53:15'),
(15, 'Pasting', 2, '2018-01-23 10:53:25'),
(16, 'Dispatch', 2, '2018-01-23 10:53:32'),
(20, 'Stripping Report', 2, '2018-09-03 10:40:40'),
(21, 'Flexo Label Machine', 2, '2018-09-04 05:30:40'),
(22, 'Coating', 2, '2018-09-04 10:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `goods_receiving_notes`
--

CREATE TABLE `goods_receiving_notes` (
  `id` int(11) NOT NULL,
  `wo_no` varchar(250) NOT NULL,
  `grn_no` varchar(250) NOT NULL,
  `grn_date` varchar(250) NOT NULL,
  `supplier_name` varchar(250) NOT NULL,
  `requisition_no` varchar(250) NOT NULL,
  `po_no` varchar(250) NOT NULL,
  `po_date` int(11) NOT NULL,
  `delivery_note_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `goods_receiving_notes_item_desc`
--

CREATE TABLE `goods_receiving_notes_item_desc` (
  `id` int(11) NOT NULL,
  `goods_receiving_notes_id` int(11) NOT NULL,
  `item_description` varchar(250) NOT NULL,
  `unit` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `remarks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inprocess_inspection_coating`
--

CREATE TABLE `inprocess_inspection_coating` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `machine` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `registration` varchar(255) NOT NULL,
  `uv_shade` varchar(255) NOT NULL,
  `set_off` varchar(255) NOT NULL,
  `scummy` varchar(255) NOT NULL,
  `unwanted_marks` varchar(255) NOT NULL,
  `uv_gloves_wet` varchar(255) NOT NULL,
  `uv_gloves_dry` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inprocess_inspection_cutting`
--

CREATE TABLE `inprocess_inspection_cutting` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `machine` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `material` varchar(200) NOT NULL,
  `gsm` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `cut_marks` varchar(255) NOT NULL,
  `edges` varchar(255) NOT NULL,
  `stain` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inprocess_inspection_die_cutting`
--

CREATE TABLE `inprocess_inspection_die_cutting` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `machine` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `position` varchar(255) NOT NULL,
  `cutting` varchar(255) NOT NULL,
  `creasing` varchar(255) NOT NULL,
  `bead` varchar(255) NOT NULL,
  `perforation` varchar(255) NOT NULL,
  `ear_lock` varchar(255) NOT NULL,
  `pasting_fold` varchar(255) NOT NULL,
  `embose` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inprocess_inspection_pasting`
--

CREATE TABLE `inprocess_inspection_pasting` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `wo_id` int(11) NOT NULL,
  `machine` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `creasing` varchar(255) NOT NULL,
  `glue_position` varchar(255) NOT NULL,
  `gluing` varchar(255) NOT NULL,
  `stickiness` varchar(255) NOT NULL,
  `scratches` varchar(255) NOT NULL,
  `color_rub` varchar(255) NOT NULL,
  `counting` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inprocess_inspection_printing`
--

CREATE TABLE `inprocess_inspection_printing` (
  `id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `wo_no` varchar(255) NOT NULL,
  `job_name` varchar(255) DEFAULT NULL,
  `colours` varchar(255) DEFAULT NULL,
  `machine` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inprocess_inspection_printing_frequencies`
--

CREATE TABLE `inprocess_inspection_printing_frequencies` (
  `id` int(11) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `inprocess_inspection_printing_id` varchar(255) DEFAULT NULL,
  `standard_frequency_hourly` varchar(255) DEFAULT NULL,
  `colours_density` varchar(255) DEFAULT NULL,
  `col1` varchar(255) DEFAULT NULL,
  `col2` varchar(255) DEFAULT NULL,
  `col3` varchar(255) DEFAULT NULL,
  `col4` varchar(255) DEFAULT NULL,
  `col5` varchar(255) DEFAULT NULL,
  `col6` varchar(255) DEFAULT NULL,
  `col7` varchar(255) DEFAULT NULL,
  `col8` varchar(255) DEFAULT NULL,
  `col9` varchar(255) DEFAULT NULL,
  `col10` varchar(255) DEFAULT NULL,
  `standard_frequency_remarks` varchar(255) DEFAULT NULL,
  `col1_min` varchar(255) DEFAULT NULL,
  `col2_min` varchar(255) DEFAULT NULL,
  `col3_min` varchar(255) DEFAULT NULL,
  `col4_min` varchar(255) DEFAULT NULL,
  `col5_min` varchar(255) DEFAULT NULL,
  `col6_min` varchar(255) DEFAULT NULL,
  `col7_min` varchar(255) DEFAULT NULL,
  `col8_min` varchar(255) DEFAULT NULL,
  `col9_min` varchar(255) DEFAULT NULL,
  `col10_min` varchar(255) DEFAULT NULL,
  `col1_max` varchar(255) DEFAULT NULL,
  `col2_max` varchar(255) DEFAULT NULL,
  `col3_max` varchar(255) DEFAULT NULL,
  `col4_max` varchar(255) DEFAULT NULL,
  `col5_max` varchar(255) DEFAULT NULL,
  `col6_max` varchar(255) DEFAULT NULL,
  `col7_max` varchar(255) DEFAULT NULL,
  `col8_max` varchar(255) DEFAULT NULL,
  `col9_max` varchar(255) DEFAULT NULL,
  `col10_max` varchar(255) DEFAULT NULL,
  `colors_density_remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `investigation_report`
--

CREATE TABLE `investigation_report` (
  `id` int(11) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `complain_received_from` varchar(200) NOT NULL,
  `date_investigation_began` varchar(200) NOT NULL,
  `nature_of_complain` varchar(200) NOT NULL,
  `background_to_the_investigation` varchar(255) NOT NULL,
  `description_of_work` varchar(255) NOT NULL,
  `the_investigation_process` varchar(255) NOT NULL,
  `persons_interviewed` varchar(255) NOT NULL,
  `summary_of_technical_findings` varchar(255) NOT NULL,
  `summary_of_witness_evidence` varchar(255) NOT NULL,
  `secondary_root_cause` varchar(255) NOT NULL,
  `primary_root_cause` varchar(255) NOT NULL,
  `other_relevant_information` varchar(255) NOT NULL,
  `recommendation` varchar(255) NOT NULL,
  `funther_details_on_recommendation` varchar(255) NOT NULL,
  `investigation_complete_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) UNSIGNED NOT NULL,
  `Item_Code` varchar(100) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Client` int(11) DEFAULT NULL,
  `Work_Type` varchar(100) DEFAULT NULL,
  `features` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `print_sheet_size` varchar(250) DEFAULT NULL,
  `ups` varchar(100) DEFAULT NULL,
  `colors` varchar(100) DEFAULT NULL,
  `spl1` varchar(255) DEFAULT NULL,
  `spl2` varchar(255) DEFAULT NULL,
  `spl3` varchar(255) DEFAULT NULL,
  `spl4` varchar(255) DEFAULT NULL,
  `gsm` varchar(100) DEFAULT NULL,
  `conversion` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `Item_Code`, `Description`, `Client`, `Work_Type`, `features`, `type`, `size`, `print_sheet_size`, `ups`, `colors`, `spl1`, `spl2`, `spl3`, `spl4`, `gsm`, `conversion`, `user_id`, `created_at`) VALUES
(2, '86100800', 'C/N BAYDAL SYRUP 60ML T/P', 8, 'Package Carton', 'Select Features', 'NA', '42X29/250GM', '', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(3, '81828938', 'LABEL BAYDAL SYRUP 60ML T/P', 8, 'LeafLet', 'Select Features', 'NA', '40X28/80GM', '', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(4, '86100800', 'C/N CIPROXEN 500MG', 8, 'Package Carton', 'Select Features', 'NA', '46X30/300GM', '', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(5, '85901435', 'C/N CIPROXEN 250MG', 8, 'Package Carton', 'Select Features', 'NA', '23X40/300GM', '', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(6, '85901397', 'C/N CIPROXEN 250MG P/S', 8, 'Package Carton', 'Select Features', 'NA', '45X40/300GM', '', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(7, '85901389', 'C/N CIPROXEN 500MG P/S', 8, 'Package Carton', 'Select Features', 'NA', '23X30/300GM', '', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(8, '81829683', 'C/N BAYCUTEN-N CREAM 15G', 8, 'Package Carton', 'Select Features', 'NA', '25X36/250GM', '', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(9, '81859183', 'C/N BAYCUTEN-N CREAM 5G P/S', 8, 'Package Carton', 'Select Features', 'NA', '44X30/250GM', '', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(10, '', '', 0, '', '', 'NA', '', '', '', '', '', '', '', '', '', '', 0, '2018-09-11 07:40:01'),
(11, '08-001R16P', 'CARTON (CECON) 10ML.', 9, 'Package Carton', 'Select Features', 'NA', '30X50/250GM', '15X25', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(12, '08-002R13P', 'CARTON VIDAYLN DROPS 10ML.', 9, 'Package Carton', 'Select Features', 'NA', '30X50/250GM', '15X25', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(13, '08-004R6P', 'CARTON (VIDAYLIN) P.S.', 9, 'Package Carton', 'Select Features', 'NA', '22X28/250GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(14, '08-006R7P', 'CARTON (VIDAYLIN-M) 30ML. PS', 9, 'Package Carton', 'Select Features', 'NA', '22X28/250GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(15, '08-008R8', 'CARTON (SURBEX-T) 4''s  P.S.', 9, 'Package Carton', 'Select Features', 'NA', '25X32/250GM', '25X16', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(16, '08-027R8P', 'CARTONS (IBERET 500 LIQ.) 30', 9, 'Package Carton', 'Select Features', 'NA', '22X28/250GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(17, '08-032R14', 'CARTON (SURBEX-T)-60''S', 9, 'Package Carton', 'Select Features', 'NA', '30X25/250GM', '30X25', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(18, '08-063R4P', 'CARTONS (VIDALIN DROPS) 5ML.PS', 9, 'Package Carton', 'Select Features', 'NA', '30X50/250GM', '15X25', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(19, '08-068R17', 'CARTON BEVIDOX 30''S', 9, 'Package Carton', 'Select Features', 'NA', '47X27/250GM', '23½X27', '25', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(20, '08-105R9', 'CARTONS (BECEFOL) 4''S PS', 9, 'Package Carton', 'Select Features', 'NA', '25X32/250GM', '25X16', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(21, '08-114R6P', 'CARTON RASHNIL CREAM 10GM P/', 9, 'Package Carton', 'Select Features', 'NA', '25X30/250GM', '25X15', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(22, '08-116R6', 'CARTON IBERET FOLIC P/S', 9, 'Package Carton', 'Select Features', 'NA', '25X32/250GM', '25X16', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(23, '08-154R5P', 'CARTON BREMAX SYRUP 60ML', 9, 'Package Carton', 'Select Features', 'NA', '28X45/250GM', '28X22½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(24, '08-159R5P', 'CARTON VIDAYLIN-L  120 ML', 9, 'Package Carton', 'Select Features', 'NA', '25X36/300GM', '25X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(25, '08-160R2P', 'CARTON VIDAYLIN-L  30ML P/S', 9, 'Package Carton', 'Select Features', 'NA', '44X28/250GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(26, '08-161R6P', 'CARTON TRONOLANE CREAM 20GM', 9, 'Package Carton', 'Select Features', 'NA', '44X33/250GM', '22X16½', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(27, '08-182R10', 'CARTON (BEJECTAL) 10ML', 9, 'Package Carton', 'Select Features', 'NA', '44X30/250GM', '22X15', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(28, '08-183R10', 'CARTON (BEJECTAL-T) 10ML', 9, 'Package Carton', 'Select Features', 'NA', '44X30/250GM', '22X15', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(29, '08-268R5P', 'CARTON EPIVAL SYRUP 30 ML P/', 9, 'Package Carton', 'Select Features', 'NA', '44X28/250GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(30, '08-289R2', 'CARTON IBERET FOLIC 30''S EXP', 9, 'Package Carton', 'Select Features', 'NA', '47X28½/250GM', '23½X14½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(31, '08-340R8', 'CARTON VANCOMYCIN 500MG INJE', 9, 'Package Carton', 'Select Features', 'NA', '25X36/250GM', '25X18', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(32, '08-341R8', 'CARTON VANCOMYCIN 1.GM 1x20M', 9, 'Package Carton', 'Select Features', 'NA', '25X36/250GM', '25X12', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(33, '08-346R2', 'CARTON ARTIFEN INJ.', 9, 'Package Carton', 'Select Features', 'NA', '36X50/250GM', '18X25', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(34, '08-347R2', 'CARTON ARTIFEN INJ.  P/S', 9, 'Package Carton', 'Select Features', 'NA', '30X50/250GM', '10X12½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(35, '08-386R4', 'CARTON SURBEX SYRUP 120 ML', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '34½X27', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(36, '08-387R7P', 'CARTON IBERET-500 LIQ.120ML', 9, 'Package Carton', 'Select Features', 'NA', '25X36/300GM', '25X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(37, '08-388R5', 'CARTON (VIDAYLIN-M) 120 ML', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '34½X27', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(38, '08-389R7', 'CARTON VIDAYLN SYRUP 120 ML', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '34½X27', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(39, '08-426R3', 'CARTON 5X2ML ABOCAIN SPINAL', 9, 'Package Carton', 'Select Features', 'NA', '22X28/250GM', '22X14', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(40, '08-444R5P', 'CARTON KLARICID GRAN. FRT PU', 9, 'Package Carton', 'Select Features', 'NA', '26X50/250GM', '26X16.66', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(41, '08-445R4P', 'CARTONS KLARICID GRAN.P/S F.PUN', 9, 'Package Carton', 'Select Features', 'NA', '25X30/250GM', '12½X15', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(42, '08-457R1P', 'CARTON OPTILETS M 4''S P/S', 9, 'Package Carton', 'Select Features', 'NA', '25X32/250GM', '25X16', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(43, '08-458R1', 'CARTON DSPL 5''S ,ATRCURM 2.5', 9, 'Package Carton', 'Select Features', 'NA', '36X50/250GM', '18X25', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(44, '08-462R1', 'CTN ,ATRCURM 5.0ML WITH HOLD', 9, 'Package Carton', 'Select Features', 'NA', '30X50/250GM', '15X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(45, '08-478R5', 'CARTON KLARICID IV 500MG', 9, 'Package Carton', 'Select Features', 'NA', '50X40/250GM', '25X20', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(46, '08-479R3', 'CARTON KLARICID XL P/S', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(47, '08-480R3', 'CARTON KLARICID IV 500 MG P/', 9, 'Package Carton', 'Select Features', 'NA', '25X36/250GM', '25X18', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(48, '08-481R4', 'CARTON KLARICID 500MG P/S 2''', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(49, '08-482R3', 'CARTON SPARAXIN 100MG P/S', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(50, '08-483R3', 'CARTON KLARICID 250MG 2''S P/', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(51, '08-485P', 'CARTON KLARICID GRAN. 60ML E', 9, 'Package Carton', 'Select Features', 'NA', '44X28/250GM', '14.66X8.88', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(52, '08-486R2', 'CARTON KLARICID IV SRILANKA', 9, 'Package Carton', 'Select Features', 'NA', '25X36/250GM', '25X12', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(53, '08-490R3', 'CARTON EPIVAL CR 500MG P/S 1', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(54, '08-491R3', 'CARTON EPIVAL IV INJ 500MG/5', 9, 'Package Carton', 'Select Features', 'NA', '36X50/250GM', '18X14½/18X11', '16+12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(55, '08-492R3', 'CARTON EPIVAL IV 5ML PS.INJ', 9, 'Package Carton', 'Select Features', 'NA', '36X50/250GM', '18X14½/18X11', '16+12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(56, '08-500R1P', 'CARTON SURBEX Z EXP SL', 9, 'Package Carton', 'Select Features', 'NA', '47X28½/250GM', '23½X14½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(57, '08-515R4', 'CARTON ACYCLOVIR INJ. 500 MG', 9, 'Package Carton', 'Select Features', 'NA', '25X36/250GM', '25X18', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(58, '08-518R2', 'CARTON KLARICID IV EXPORT B.', 9, 'Package Carton', 'Select Features', 'NA', '25X43/250GM', '12½X21½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(59, '08-554R3', 'CTN  SILLIVER 200MG,30 TAB.', 9, 'Package Carton', 'Select Features', 'NA', '47X28½/250GM', '23½X28½', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(60, '08-558R4', 'CARTON NEOPHAGE 500MG 50S', 9, 'Package Carton', 'Select Features', 'NA', '50X40/250GM', '25X20', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(61, '08-560R4', 'CARTON NEOPHAGE 850MG 30S', 9, 'Package Carton', 'Select Features', 'NA', '44X30/250GM', '22X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(62, '08-564R6', 'CARTON ARINAC SUSP 30ML(P/S)', 9, 'Package Carton', 'Select Features', 'NA', '44X31/300GM', '22X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(63, '08-566R5', 'CARTON BRUFEN SUSP.30ML (P/S', 9, 'Package Carton', 'Select Features', 'NA', '44X31/300GM', '22X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(64, '08-572R5', 'CARTON ENTAMIZOLE SUSP 30ML.(P/S)', 9, 'Package Carton', 'Select Features', 'NA', '44X31/300GM', '22X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(65, '08-573R3', 'CARTON FROBEN 50MG 30''S', 9, 'Package Carton', 'Select Features', 'NA', '40X45/250GM', '20X15', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(66, '08-578R6', 'CARTON BRUFEN 600MG 36''S', 9, 'Package Carton', 'Select Features', 'NA', '44X32/300GM', '22X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(67, '08-580R6P', 'CARTON BRUFEN CREAM 30G', 9, 'Package Carton', 'Select Features', 'NA', '23X36/250GM', '23X18', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(68, '08-581R5P', 'CARTON BRUFEN CREAM 10G(P/S)', 9, 'Package Carton', 'Select Features', 'NA', '40X27/250GM', '20X13½', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(69, '08-584R5P', 'CARTON BURNOL 30GM', 9, 'Package Carton', 'Select Features', 'NA', '23X36/250GM', '23X18', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(70, '08-589R5', 'CARTON ENTAMIZOLE D/S 15''S', 9, 'Package Carton', 'Select Features', 'NA', '50X40/300GM', '25X20', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(71, '08-590R5', 'CARTON ENTAMIZOLE S/S 30''S', 9, 'Package Carton', 'Select Features', 'NA', '46X33/300GM', '23X16½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(72, '08-592R4', 'CARTON FROBEN 100MG 30''S', 9, 'Package Carton', 'Select Features', 'NA', '44X30/250GM', '22X15', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(73, '08-595R6P', 'CARTON FROBEN GEL 10GM P/S', 9, 'Package Carton', 'Select Features', 'NA', '46X30/250GM', '23X10', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(74, '08-597R3', 'CARTON PROTHIADEN 25 MG 100''', 9, 'Package Carton', 'Select Features', 'NA', '30X49/300GM', '30X24½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(75, '08-598R3', 'CARTON PROTHIADEN 75 MG 30''S', 9, 'Package Carton', 'Select Features', 'NA', '25X36/300GM', '23X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(76, '08-615R2', 'CARTON  SILLIVER 200MG,P/S 4', 9, 'Package Carton', 'Select Features', 'NA', '47X28½/250GM', '23½X14½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(77, '08-629R3P', 'CARTON DAYCOR 120ML', 9, 'Package Carton', 'Select Features', 'NA', '27X36/300GM', '27X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(78, '08-630R3P', 'CARTON NICOR 120ML', 9, 'Package Carton', 'Select Features', 'NA', '27X36/300GM', '27X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(79, '08-639P', 'CARTON TRONLANE CREAM 20 GM', 9, 'Package Carton', 'Select Features', 'NA', '44X33/250GM', '22X16½', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(80, '08-665R3P', 'CARTON SOMOGEL 10GM P/S', 9, 'Package Carton', 'Select Features', 'NA', '36X40/250GM', '18X13.33', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(81, '08-675R4', 'CARTON ENTAMIZOLE SS 30''S EXP W', 9, 'Package Carton', 'Select Features', 'NA', '36X46/300GM', '18X11½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(82, '08-676R5', 'CARTON ENTAMIZOLE D/S 15''S(E', 9, 'Package Carton', 'Select Features', 'NA', '25X36/300GM', '25X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(83, '08-677R3P', 'CARTON ENTAMIZOLE SUSP 100ML EXP', 9, 'Package Carton', 'Select Features', 'NA', '31X50/300GM', '15½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(84, '08-700R1P', 'CARTON RIBUFEN GEL 25GM', 9, 'Package Carton', 'Select Features', 'NA', '43X31/250GM', '21½X15½', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(85, '08-702R4', 'CARTON SILLIVER SUSP 120ML', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '-', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(86, '08-703R2P', 'CARTON SILLIVER SUSP 30ML P/', 9, 'Package Carton', 'Select Features', 'NA', '47X28½/250GM', '23½X14½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(87, '08-716R3', 'CARTON BRUFEN PLUS TAB 20''S', 9, 'Package Carton', 'Select Features', 'NA', '25X30/250GM', '25X15', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(88, '08-717', 'CARTON ENTAMIZOLE SS 30''S E.AFRI', 9, 'Package Carton', 'Select Features', 'NA', '36X46/300GM', '18X11½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(89, '08-718', 'CARTON ENTAMIZOLE DS 15''S E.AFRI', 9, 'Package Carton', 'Select Features', 'NA', '25X36/300GM', '25X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(90, '08-723P', 'CARTON ENTAMIZOLE SUSP 100ML E.A', 9, 'Package Carton', 'Select Features', 'NA', '31X50/300GM', '15½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(91, '08-730R1P', 'CARTON GANATON OD 150MG', 9, 'Package Carton', 'Select Features', 'NA', '25X31/2500GM', '25X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(92, '08-733R2P', 'CARTON RASHNIL CREAME 50GM', 9, 'Package Carton', 'Select Features', 'NA', '40X36/300GM', '20X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(93, '08-740R3', 'CARTON ABOCN SPNL G.PNJB 5X2', 9, 'Package Carton', 'Select Features', 'NA', '22X28/250GM', '22X14', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(94, '08-742R3', 'CARTON VANCOMYCIN .5GM G.P', 9, 'Package Carton', 'Select Features', 'NA', '25X36/250GM', '25X18', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(95, '08-744R3', 'CARTON SURBEX-Z 30''S', 9, 'Package Carton', 'Select Features', 'NA', '28¾X42/250GM', '28¾X21', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(96, '08-746R3', 'CARTON SURBEX-Z 7''S P/S', 9, 'Package Carton', 'Select Features', 'NA', '25X32/250GM', '25X16', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(97, '08-747R3', 'CARTON (IBERET FOLIC) 30''S', 9, 'Package Carton', 'Select Features', 'NA', '28¾X21/250GM', '', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(98, '08-748R1', 'CARTON (IBERET 500)30''S', 9, 'Package Carton', 'Select Features', 'NA', '28¾X21/250GM', '', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(99, '08-749R3', 'CARTON DAYALETS TAB 30''S', 9, 'Package Carton', 'Select Features', 'NA', '28¾X21/250GM', '', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(100, '08-750R2', 'CARTON OPTILETS M 30''S', 9, 'Package Carton', 'Select Features', 'NA', '28¾X21/250GM', '', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(101, '08-751R2P', 'CARTON VIDAYLIN-T TAB. 30''S', 9, 'Package Carton', 'Select Features', 'NA', '47X32/250GM', '23½X16', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(102, '08-752R4', 'CARTON PRAMET FA F/T 25''S NE', 9, 'Package Carton', 'Select Features', 'NA', '28¾X21/250GM', '', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(103, '08-753R4', 'CARTON PRAMET FA 4''S P/S NEW', 9, 'Package Carton', 'Select Features', 'NA', '25X32/250GM', '25X16', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(104, '08-754R1P', 'CARTON VIDAYLIN-T 4''S P/S NE', 9, 'Package Carton', 'Select Features', 'NA', '47X32/250GM', '23½X16', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(105, '08-756R3', 'CARTON SOMOGEL 20GM', 9, 'Package Carton', 'Select Features', 'NA', '47X28/250GM', '23½X28', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(106, '08-757R2P', 'CARTON RASHNIL CREME 20GM', 9, 'Package Carton', 'Select Features', 'NA', '40X33/250GM', '20X16½', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(107, '08-758R2', 'CARTON BEVIDOX 60''S', 9, 'Package Carton', 'Select Features', 'NA', '44X28/250GM', '', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(108, '08-760R4', 'CARTON ENTAMIZOLE SUSP. 90ML', 9, 'Package Carton', 'Select Features', 'NA', '30X49/300GM', '30X24½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(109, '08-761R2', 'CARTON SURBEX-T 30''S', 9, 'Package Carton', 'Select Features', 'NA', '28¾X42/250GM', '28¾X21', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(110, '08-762R3', 'CARTON (BECEFOL) 25''S', 9, 'Package Carton', 'Select Features', 'NA', '28¾X21/250GM', '28¾X21', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(111, '08-764P', 'CARTON BRUFEN SUSP 90ML EXP', 9, 'Package Carton', 'Select Features', 'NA', '28X47/300GM', '14X23½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(112, '08-768R1P', 'CARTON BRUFEN.90ML EXP MAL', 9, 'Package Carton', 'Select Features', 'NA', '28X47/300GM', '14X23½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(113, '08-769R1P', 'CARTON BRUFEN.600MG EXP MAL', 9, 'Package Carton', 'Select Features', 'NA', '44X30/300GM', '', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(114, '08-787R3', 'CARTON EPIVAL SYRUP 120 ML', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '-', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(115, '08-788R2', 'CARTON BRUFEN DS SUSP.90ML', 9, 'Package Carton', 'Select Features', 'NA', '30X49/300GM', '30X24½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(116, '08-789R3P', 'CARTON MOKSI 400MG TABLETS', 9, 'Package Carton', 'Select Features', 'NA', '44X29/300GM', '22X14½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(117, '08-790R2', 'CARTON MOKSI 400MG P/S', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(118, '08-799R2', 'CARTON BRUFEN DS SUSP PS 30M', 9, 'Package Carton', 'Select Features', 'NA', '44X31/300GM', '22X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(119, '08-806R2', 'CARTON GANATON 50MG TAB 3X10', 9, 'Package Carton', 'Select Features', 'NA', '23X36/250GM', '23X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(120, '08-807R4P', 'CARTON KLARICID GR30MLFP FLA', 9, 'Package Carton', 'Select Features', 'NA', '28X40/250GM', '28X20', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(121, '08-808R3P', 'CARTON KLARICID DS GR 60ML F', 9, 'Package Carton', 'Select Features', 'NA', '26X50/250GM', '26X16.66', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(122, '08-809R2', 'CARTON BRUFEN SUSPENSION 120', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '-', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(123, '08-809R3', 'CARTON BRUFEN SUSPENSION 120 PET', 9, 'Package Carton', 'Select Features', 'NA', '33X24/300GM', '-', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(124, '08-810R1P', 'CARTON FROBEN GEL 50GM', 9, 'Package Carton', 'Select Features', 'NA', '40X38/300GM', '20X12.66', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(125, '08-811R1', 'CARTON ARINAC FORTE 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(126, '08-812R1', 'CARTON BRUFEN 600MG 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(127, '08-813R1', 'CARTONS FROBEN 100MG 2''S P/S', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(128, '08-814R1', 'CARTON ENTAMIZOLE D/S 3''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(129, '08-816R1', 'CARTON BRUFEN 400MG 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(130, '08-817R1', 'CARTON ARINAC TABS 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(131, '08-818R1', 'CARTON ENTAMIZOLE SS 3''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(132, '08-819R2', 'CARTON GANATON 50MG 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(133, '08-820R1', 'CARTON FLEXIN 250MG P/S 2''S', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(134, '08-821R1', 'CARTON FLEXIN 500MG 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(135, '08-822R1', 'CARTON BRUFEN PLUS 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(136, '08-823R1', 'CARTON EPIVAL 250MG 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(137, '08-824R1', 'CARTON EPIVAL 500MG 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(138, '08-825R1', 'CARTON URIXIN 400MG 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(139, '08-826R1', 'CARTON GANATON OD 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(140, '08-827R2', 'CARTON ENOXABID 400MG 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(141, '08-829R2', 'CARTON ARTIFEN 50MG 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(142, '08-830R1P', 'CARTON HYTRIN 5MG 1''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(143, '08-831R1P', 'CARTON HYTRIN 2MG 2''S PS', 9, 'Package Carton', 'Select Features', 'NA', '40X32/250GM', '20X10.66', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(144, '08-834R2', 'CARTON SURBEX-Z TABLETS 60''S', 9, 'Package Carton', 'Select Features', 'NA', '30X25/300GM', '-', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(145, '08-835R2', 'CARTON NEOPHAGE 500M FOR PDF', 9, 'Package Carton', 'Select Features', 'NA', '50X40/250GM', '25X13.33', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(146, '08-836R2', 'CARTON ARINAC SUSPENSION 120', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '-', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(147, '08-858', 'D/CTN KLARICID XL 500MG 14''S', 9, '', 'Select Features', 'NA', '46X30/250GM', '23X30', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(148, '08-859', 'D/CTN KLARICID 500MG 14''S', 9, '', 'Select Features', 'NA', '46X30/300GM', '23X30', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(149, '08-869R2', 'CTN ACYCLOV 500MG INJ G.PUNJ', 9, '', 'Select Features', 'NA', '25X36/250GM', '25X18', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(150, '08-870R2', 'CARTON ATRELEX INJ 2.5ML GOP', 9, 'Package Carton', 'Select Features', 'NA', '36X50/250GM', '18X16.66', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(151, '08-871R1', 'CTN ATRELEX INJ 50MG/5ML GOP', 9, 'Package Carton', 'Select Features', 'NA', '30X25/250GM', '15X25', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(152, '08-875', 'CARTON VANCOMYCIN 500 MG 20ML PDF', 9, 'Package Carton', 'Select Features', 'NA', '25X36/250GM', '25X18', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(153, '08-876R1', 'CARTON VANCOMYCIN 1G 20ML PDF', 9, 'Package Carton', 'Select Features', 'NA', '25X36/250GM', '25X18', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(154, '08-877R1', 'CARTON ACYCLOVIR INJ PDF', 9, 'Package Carton', 'Select Features', 'NA', '25X36/250GM', '25X18', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(155, '08-879R1', 'CARTON BRUFEN SUSP 120ML PDF', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '-', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(156, '08-922', 'CARTON VIDAYLIN SYP. 120ML GOP', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '-', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(157, '08-924R1', 'CARTON NEOPHAGE 500MG TAB GOP', 9, 'Package Carton', 'Select Features', 'NA', '50X40/250GM', '25X13.33', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(158, '08-926', 'CARTON ARTIFEN INJ. PAF', 9, 'Package Carton', 'Select Features', 'NA', '36X50/250GM', '18X25', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(159, '08-929P', 'CARTON EPIVAL SYRUP 120PDF', 9, 'Package Carton', 'Select Features', 'NA', '25X36/300GM', '25X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(160, '08-933', 'CARTON BEVIDOX TAB 30''S GOP', 9, 'Package Carton', 'Select Features', 'NA', '46X32/250GM', '23X16½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(161, '08-934R1', 'CARTON VIDAYLIN-T TAB 30''S GOP', 9, 'Package Carton', 'Select Features', 'NA', '24X32/250GM', '24X16', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(162, '08-935P', 'CARTON MOKSI 400MG TAB GOP', 9, 'Package Carton', 'Select Features', 'NA', '44X29/300GM', '22X14½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(163, '08-936R1', 'CARTON EPIVAL SYRUP 120ML GOP', 9, 'Package Carton', 'Select Features', 'NA', '25X36/300GM', '25X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(164, '08-946', 'CARTON BRUFEN SUSP.  120ML GOP', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '-', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(165, '08-957', 'CARTON VIDAYLIN-M SYRUP 120ML GOP', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '-', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(166, '08-958P', 'CARTON VIDAYLIN-T TAB 30''S GOP', 9, 'Package Carton', 'Select Features', 'NA', '24X32/250GM', '24X16', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(167, '08-973', 'D CARTON KLARICID 500MG GOP', 9, '', 'Select Features', 'NA', '22X28/300GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(168, '08-975', 'CARTON KLARICID GRAN 60ML GOP', 9, 'Package Carton', 'Select Features', 'NA', '26X50/250GM', '26X16.66', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(169, '08-976', 'CARTON BRUFEN SUSP 120ML GOP', 9, 'Package Carton', 'Select Features', 'NA', '34½X27/300GM', '-', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(170, '08-977', 'CARTON FLEXIN 500MG GOP', 9, 'Package Carton', 'Select Features', 'NA', '25X36/300GM', '25X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(171, '62-047R7', 'D.CTN EPIVAL-250MG', 9, '', 'Select Features', 'NA', '46X32/250GM', '23X32', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(172, '62-048R7', 'D.CTN EPIVAL 500MG', 9, '', 'Select Features', 'NA', '30X27/250GM', '-', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(173, '62-051R7', 'D.CTN THEOGRAD TAB', 9, '', 'Select Features', 'NA', '23X36/250GM', '23X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(174, '62-056R9', 'D.CTN URIXIN 400MG BLSTR', 9, '', 'Select Features', 'NA', '30X50/250GM', '15X22.5', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(175, '62-057R5P', 'D.CTN BREMAX 1MG', 9, '', 'Select Features', 'NA', '36X50/250GM', '18X12½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(176, '62-058R5P', 'D.CTN BREMAX 2 MG', 9, '', 'Select Features', 'NA', '40X32/250GM', '20X16', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(177, '62-075R6', 'D.CTN ENOXABID', 9, '', 'Select Features', 'NA', '22X28/300GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(178, '62-076R5', 'D.CTN HYTRIN 1MG TABS. BLSTR', 9, '', 'Select Features', 'NA', '50X40/250GM', '25X13.33', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(179, '62-077R6', 'D.CTN HYTRIN 2 MG BLSTER', 9, '', 'Select Features', 'NA', '50X40/250GM', '25X13.33', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(180, '62-078R6', 'D.CTN HYTRIN 5 MG BLSTER', 9, '', 'Select Features', 'NA', '50X40/250GM', '25X13.33', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(181, '62-092R6', 'D.CTN ARTIFEN 50 MG TAB', 9, '', 'Select Features', 'NA', '23X36/300GM', '23X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(182, '62-165R3', 'D/CTN MUCLATOR(S)30''S', 9, '', 'Select Features', 'NA', '25X36/350GM', '12½X18', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(183, '62-171R8', 'D/CTN CITROSODA GRAN.(100X5G', 9, '', 'Select Features', 'NA', '38X30/350GM', '19X30', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(184, '62-180R1P', 'D/CTN HYTRIN 1MG EXPORT', 9, '', 'Select Features', 'NA', '36X50/250GM', '12X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(185, '62-182R1P', 'D/CTN HYTRIN 2MG EXPORT', 9, '', 'Select Features', 'NA', '36X50/250GM', '12X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(186, '62-183R2P', 'D/CTN HYTRIN 5MG EXPORT', 9, '', 'Select Features', 'NA', '36X50/250GM', '12X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(187, '62-188R4P', 'D/CTN FLEXIN 250MG 20''S', 9, '', 'Select Features', 'NA', '40X32/300GM', '20X10.66', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(188, '62-189R4', 'D/CTN FLEXIN 500MG 20''S', 9, '', 'Select Features', 'NA', '25X36/300GM', '25X36', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(189, '62-198R6', 'D/CTN KLARICID 500 MG  F/T', 9, '', 'Select Features', 'NA', '22X28/300GM', '22X28', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(190, '62-199R8', 'D/CTN  KLARICID 250 MG', 9, '', 'Select Features', 'NA', '22X28/300GM', '22X28', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(191, '62-200R4', 'D/CTN KLARICID XL 500MG 5''S', 9, '', 'Select Features', 'NA', '22X28/250GM', '22X28', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(192, '62-201R2P', 'D/CTN SPARAXIN 100 MG', 9, '', 'Select Features', 'NA', '36X50/250GM', '18X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(193, '62-204R3', 'D/CTN EPIVAL CR 500MG 50''S', 9, '', 'Select Features', 'NA', '26X32/250GM', '26X32', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(194, '62-206R5', 'D/CTN THEOGRAD 350MG PDF', 9, '', 'Select Features', 'NA', '40X36/250GM', '13.33X18', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(195, '62-216P', 'D/CTN KLARICID XL 500 SL EXP', 9, '', 'Select Features', 'NA', '23X16/250GM', '11½X8', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(196, '62-217R1P', 'D/CTN KLARICID 500MG EXP.SL', 9, '', 'Select Features', 'NA', '24X30/250GM', '12X7½', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(197, '62-220R1', 'D/CTN COFCOL TAB (PSE)', 9, '', 'Select Features', 'NA', '52X40/300GM', '26X20', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(198, '62-221R1P', 'D/CTN KLARICID 250MG SRI LAN', 9, '', 'Select Features', 'NA', '22X16/250GM', '11X8', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(199, '62-222R5', 'D/CTN OUTER ARINAC TAB 10X10', 9, '', 'Select Features', 'NA', '50X40/300GM', '25X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(200, '62-224R7', 'D/CTN OUTER ARINAC FORTE', 9, '', 'Select Features', 'NA', '25X43/300GM', '25X21½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(201, '62-225R4', 'D/CTN OUTER BRFN 200MG 500''S', 9, '', 'Select Features', 'NA', '39X30/300GM', '19½X30', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(202, '62-226R4', 'D/CTN OUTER BRFN 400MG 250''S', 9, '', 'Select Features', 'NA', '31X28½/300GM', '15½X28½', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(203, '62-273R4', 'D/CTN CITROSODA GRAN.5gmX20', 9, '', 'Select Features', 'NA', '25X36/300GM', '25X18', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(204, '62-274R1P', 'D/CTN BRUFEN 400 EXP HONG KO', 9, '', 'Select Features', 'NA', '45X29/300GM', '15X29', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(205, '62-275R1', 'D/CTN MUCLATOR 30''S EXP MALY', 9, '', 'Select Features', 'NA', '25X34/350GM', '25X17', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(206, '62-276R1', 'D.CTN EPIVAL 500MG  PDF', 9, '', 'Select Features', 'NA', '30X27/250GM', '-', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(207, '62-277R2', 'D/CTN CITROSODA 5gmX20 ORANG', 9, '', 'Select Features', 'NA', '25X36/300GM', '25X18', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(208, '62-280R1', 'D/CTN CITROSODA 5gmX100 ORAN', 9, '', 'Select Features', 'NA', '38X30/350GM', '19X30', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(209, '62-283R2', 'D.CTN ARTIFEN 50MG TAB PDF', 9, '', 'Select Features', 'NA', '36X50/250GM', '18X25', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(210, '62-285R1P', 'D CARTON HYTRIN 2MG TABLET P', 9, '', 'Select Features', 'NA', '50X40/250GM', '25X13.33', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(211, '62-286R1P', 'D CARTON HYTRIN 5MG TABLET P', 9, '', 'Select Features', 'NA', '50X40250GM', '25X13.33', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(212, '62-293R1', 'D CARTON BRUFEN 400MG GOP', 9, '', 'Select Features', 'NA', '31X28½/300GM', '15½X28½', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(213, '62-294', 'CARTON ARTIFEN 50MG TAB PAF', 9, '', 'Select Features', 'NA', '36X50/250GM', '18X25', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(214, '62-295', 'D/CTN BRUFEN 400MG 250''S PDF', 9, '', 'Select Features', 'NA', '31X28½/300GM', '15½X28½', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(215, '62-296', 'D/CTN BRUFEN 400MG FOR EXP', 9, '', 'Select Features', 'NA', '31X28½/350GM', '15½X28½', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(216, '62-297', 'D/CTN BRUFEN 200MG FOR EXP', 9, '', 'Select Features', 'NA', '39X300/300GM', '19½X30', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(217, '01-005R6', 'LEAFLET PENTOTHAL SODIUM', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(218, '01-027R4', 'LEAFLET BREMAX GROUP', 9, 'LeafLet', 'Select Features', 'NA', '25X36/55GM', '25X36', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(219, '01-028R4', 'LEAFLET TRONOLANE CREAM', 9, 'LeafLet', 'Select Features', 'NA', '25X36/55GM', '25X18', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(220, '01-037R9', 'LEAFLET HYTRIN GROUP', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(221, '01-066R20', 'LEAFLET KLARICID GRANULES', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X36', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(222, '01-071R3', 'LEAFLET URIXIN', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X12', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(223, '01-076R4', 'LEAFLET ENOXABID TABLET', 9, 'LeafLet', 'Select Features', 'NA', '37½X39/55GM', '18½X19½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(224, '01-080R3', 'LEAFLET VANCOMYCIN', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(225, '01-083R2', 'LEAFLET ARTIFEN INJ.', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(226, '01-090R2', 'LEAFLET ABOCAIN SPINAL', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(227, '01-092R5', 'LEAFLET FLEXIN TABLET', 9, 'LeafLet', 'Select Features', 'NA', '25X36/55GM', '25X18', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(228, '01-094R5', 'LEAFLET THEOGRAD TABLET', 9, 'LeafLet', 'Select Features', 'NA', '27X34/55GM', '13½X17', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(229, '01-099R4', 'LEAFLET MUCLATOR SACHET', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(230, '01-100R4', 'LEAFLET ARTIFEN TAB.', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(231, '01-101R15', 'LEAFLET KLARICID IV INJECTIO', 9, 'LeafLet', 'Select Features', 'NA', '27X34/55GM', '27X34', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(232, '01-104R3', 'LEAFLET SPARAXIN 100/200 MG', 9, 'LeafLet', 'Select Features', 'NA', '27X34/55GM', '13½X11?', '1', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(233, '01-105R2', 'LEAFLET ATRELAX INJ 2.5/5ML', 9, 'LeafLet', 'Select Features', 'NA', '27X34/55GM', '13½X17', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(234, '01-107R17', 'LEAFLET KLARICID XL', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(235, '01-115R13', 'LEAFLET KLARICID TABLET', 9, 'LeafLet', 'Select Features', 'NA', '37½X39/55GM', '18½X19½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(236, '01-124R3', 'LEAFLET ACYCLOVIR INJ. 500 M', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(237, '01-129R1', 'LEAFLET IBERET FOLIC EXPORT', 9, 'LeafLet', 'Select Features', 'NA', '25X36/55GM', '25X12', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(238, '01-141R2', 'LEAFLET SILLIVER 200MG TAB', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(239, '01-146R6', 'LEAFLET NEOPHAGE 500MG / 850', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(240, '01-147R8', 'LEAFLET BRUFEN 600MG', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '6+3', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(241, '01-148R6', 'LEAFLET BRUFEN CR.30G/15G', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(242, '01-155R7', 'LEAFLET FROBEN 50/100MG', 9, 'LeafLet', 'Select Features', 'NA', '27X34/55GM', '13½X22½/13½X11½', '8+4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(243, '01-156R6', 'LEAFLET FROBEN GEL', 9, 'LeafLet', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(244, '01-158R6', 'LEAFLET PROTHIADEN.25/75MG', 9, 'LeafLet', 'Select Features', 'NA', '26X29/55GM', '26X29', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(245, '01-173R7', 'LEAFLET GANATON 50MG', 9, 'LeafLet', 'Select Features', 'NA', '25X36/55GM', '25X18', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(246, '01-183R3', 'LEAFLET ENTAMIZOLE SS EX FW.AFR', 9, 'LeafLet', 'Select Features', 'NA', '23X36/70GM', '23X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(247, '01-184R4', 'LEAFLET ENTAMIZOLE DS EXP W.ARR', 9, 'LeafLet', 'Select Features', 'NA', '23X36/70GM', '23X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(248, '01-185R4', 'LEAFLET ENTAMIZOLE SUSP 100ML W', 9, 'LeafLet', 'Select Features', 'NA', '23X36/70GM', '23X18', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(249, '01-197R1', 'LEAFLET RIBUFEN GEL 25GM', 9, 'LeafLet', 'Select Features', 'NA', '39X40/55GM', '19½X20', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(250, '01-203R7', 'LEAFLET BRUFEN PLUS TABLET', 9, 'LeafLet', 'Select Features', 'NA', '20X30/70GM', '20X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(251, '01-204', 'LEAFLET ENTAMIZOLE SS EXP E.AFR', 9, 'LeafLet', 'Select Features', 'NA', '25X35½/70GM', '25X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(252, '01-205', 'LEAFLET ENTAMIZOLE DS EXP E.AFRI', 9, 'LeafLet', 'Select Features', 'NA', '25X35½/70GM', '25X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(253, '01-206', 'LEAFLET ENTAMIZOLE SUSP 100ML E', 9, 'LeafLet', 'Select Features', 'NA', '25X35½/70GM', '25X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(254, '01-207R1', 'LEAFLET GANATON OD 150MG', 9, 'LeafLet', 'Select Features', 'NA', '20X30/70GM', '20X15', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(255, '01-209R2', 'LEAFLET BRUFEN TAB EXP HONG', 9, 'LeafLet', 'Select Features', 'NA', '23X31/70GM', '22½X15½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(256, '01-214R1', 'LEAFLET BRUFEN EXP MALAYSIA', 9, 'LeafLet', 'Select Features', 'NA', '23X31/70GM', '22½X15½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(257, '01-215', 'LEAFLET MUCOLATOR SCHT EXP MA', 9, 'LeafLet', 'Select Features', 'NA', '25X35/70GM', '25X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(258, '01-221R3', 'LEAFLET MOKSI TABLET', 9, 'LeafLet', 'Select Features', 'NA', '25X35½/70GM', '12½X20/12½X15', '6+4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(259, '01-226R4', 'LEAFLET FOR KLARICID DS GR', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(260, '01-227R4', 'LEAFLET FOR KLARICID GRAN 30', 9, 'LeafLet', 'Select Features', 'NA', '23X36/55GM', '23X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(261, '01-239R3', 'LEAFLET EPIVAL GROUP', 9, 'LeafLet', 'Select Features', 'NA', '27X34/55GM', '27X34', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(262, '02-001R13', 'LABEL  CECON 10ML', 9, 'Labels', 'Select Features', 'NA', '19½X26/80GM', '19½X13', '52', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(263, '02-002R10', 'LABEL VIDAYLIN DROPS 10 ML', 9, 'Labels', 'Select Features', 'NA', '19½X26/80GM', '19½X13', '52', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(264, '02-004R8', 'LABEL VIDAYLIN SYRUP 30ML P/S', 9, 'Labels', 'Select Features', 'NA', '40X13/80GM', '20X13', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(265, '02-006R9', 'LABEL VIDAYLIN-M 30 ML P/S', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X13', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(266, '02-008R7', 'LABEL SURBEX-T 4''S  PS', 9, 'Labels', 'Select Features', 'NA', '9X30/80GM', '9X15', '30', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(267, '02-017R18', 'LABEL BEVIDOX TABLETS 30S', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '25', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(268, '02-037R9', 'LABEL IBERET-500 LIQ. 30ML P/S', 9, 'Labels', 'Select Features', 'NA', '19¼X26/80GM', '9½X13', '20', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(269, '02-051R11', 'LABEL SURBEX-T 60''S', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(270, '02-059R4', 'LABEL VIDAYLIN DROPS 5ML P/S', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '8X13', '20', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(271, '02-128R10', 'LABEL BECEFOL 4''S P/S', 9, 'Labels', 'Select Features', 'NA', '40X28/80GM', '20X14', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(272, '02-132R10', 'LABEL CECON CHEWABLE', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X13', '30', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(273, '02-137R7', 'LABEL IBERET FOLIC 500 4''S P/S', 9, 'Labels', 'Select Features', 'NA', '40X28/80GM', '20X14', '25', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(274, '02-192R5', 'LABEL FOR BREMAX SYRUP 60ML', 9, 'Labels', 'Select Features', 'NA', '40X28/80GM', '20X14', '32', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(275, '02-195R3', 'LABEL VIDAYLIN L  120 ML', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(276, '02-196R3', 'LABEL VIDAYLIN-L  30 ML P/S', 9, 'Labels', 'Select Features', 'NA', '20X26/80GM', '20X13', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01');
INSERT INTO `item` (`id`, `Item_Code`, `Description`, `Client`, `Work_Type`, `features`, `type`, `size`, `print_sheet_size`, `ups`, `colors`, `spl1`, `spl2`, `spl3`, `spl4`, `gsm`, `conversion`, `user_id`, `created_at`) VALUES
(277, '02-266R5', 'LABEL EPIVAL SYRUP 30 ML P/S', 9, 'Labels', 'Select Features', 'NA', '20X26/80GM', '20X13', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(278, '02-360R4', 'LABEL  PENTOTHAL SODIUM BOXE', 9, '', 'Select Features', 'NA', '8X26/80GM', '8X6.5', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(279, '02-394R10', 'STICKER ROLLER VANCOMYCIN 50', 9, '', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(280, '02-395R9', 'STICKER ROLER VANCMCIN 1GM I', 9, '', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(281, '02-410R4', 'LABEL SURBEX SYRUP 120ML', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X26', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(282, '02-411R6', 'LABEL VIDAYLIN SYRUP 120 ML', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(283, '02-412R5', 'LABEL VIDAYLIN-M 120 ML', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(284, '02-413R5', 'LABEL IBERET 500 LIQUID 120M', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(285, '02-452R8', 'LABEL KLARACID IV INJ 500mg', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(286, '02-453R4', 'LABEL KLARACID IV,P.S.', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(287, '02-475R6', 'LABEL ADH KLARICID GRN 60ML', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(288, '02-476R5', 'LABEL ADH KLARICID GRN.P/S F', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(289, '02-522P', 'LABEL ADH. KALARICID GRAN.EX', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(290, '02-523R1', 'R STICKER KLARICID IV SRILAN', 9, '', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(291, '02-528R2P', 'LABEL EPIVAL IV INJ 500MG/5M', 9, '', 'Select Features', 'NA', '40X30/80GM', '6.66X7.5', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(292, '02-529R3P', 'LABEL EPIVAL IV 5ML P/S INJ.', 9, '', 'Select Features', 'NA', '40X30/80GM', '6.66X7.5', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(293, '02-543R1P', 'LABEL SURBEX Z EXP SL', 9, '', 'Select Features', 'NA', '40X26/80GM', '6.66X6.5', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(294, '02-565R7', 'STIKR/LABEL ROLL ACYVR 500 I', 9, '', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(295, '02-568R1', 'LABEL KLARICID IV EXPORT B.D', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(296, '02-586R1', 'LABEL IBERET FOLIC 30''S EXP', 9, 'Labels', 'Select Features', 'NA', '19½X26/80GM', '9¾X13', '18', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(297, '02-611R4', 'LABEL COFCOL ELIXIR 120ML(PS', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(298, '02-613R4', 'LABEL COFCL ELXR 15ML PS(PSE', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X13', '20', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(299, '02-614R4', 'LABLE SILLIVER 200MG,30 TAB.', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X13', '39', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(300, '02-616R5', 'LABEL ARINAC SUSP 30ML(P/S)', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '6.66X7.5', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(301, '02-618R4', 'LABEL BRUFEN SUSP.30ML (P/S)', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '6.66X7.5', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(302, '02-622R3', 'LABEL ENTAMIZOLE SUSP30ML(P/', 9, 'Labels', 'Select Features', 'NA', '40X28/80GM', '6.66X7', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(303, '02-626R4', 'LABELS CREMAFFIN 30ML (P/S)', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '6.66X7.5', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(304, '02-627R5', 'LABELS - CREMAFFIN 120ML', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X26', '56', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(305, '02-631R3', 'LABELS-DIJEX MP (MF) 30ML P/', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '6.66X7.5', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(306, '02-632R4', 'LABELS-DIJEX M.P(MF) 120ML', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X26', '56', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(307, '02-634R3', 'LABELS-DIJEX MP 30ML P/S', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '6.66X7.5', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(308, '02-635R4', 'LABELS-DIJEX MP 120ML', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X26', '56', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(309, '02-647R2', 'LABLE SILLIVER 200MG,P/S 4''S', 9, 'Labels', 'Select Features', 'NA', '40X13/80GM', '20X13', '20', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(310, '02-659R4', 'LABEL DAYCOR 120ML', 9, 'Labels', 'Select Features', 'NA', '40X28/80GM', '6.66X7', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(311, '02-660R4', 'LABEL NICOR 120ML', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '6.66X7.5', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(312, '02-673R5', 'LABEL DIJEX MP 120ML PDF', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X26', '56', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(313, '02-695R3P', 'LABEL VIDAYLIN-T TABLET 30''S', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X13', '20', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(314, '02-696R2P', 'LABEL VIDAYLIN-T TAB 4''S P/S', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X13', '20', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(315, '02-704R3', 'LABEL RONDEC C SYP 30ML P/S', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X13', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(316, '02-708R4', 'LABEL SILLIVER SUSP 120ML', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(317, '02-709R3', 'LABEL SILLIVER SUSP 30ml P/S', 9, 'Labels', 'Select Features', 'NA', '9½X26/80GM', '9½X13', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(318, '02-723R4P', 'LABEL ENTMZL SUSP 100ml Exp', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(319, '02-724R1P', 'LABEL ENTMZL SUSP 100ml Exp', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(320, '02-740R4P', 'LABEL BRUFEN SUSP 90ML EXP M', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(321, '02-755R3', 'LABEL VANCOMYCIN .5GM GP', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(322, '02-757R2', 'LABEL SURBEX-Z 30''S', 9, 'Labels', 'Select Features', 'NA', '20½X26/80GM', '20½X13', '42', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(323, '02-758R3P', 'STICKER MOSPEL LIQ 45ML BACK', 9, '', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(324, '02-759R2', 'STICKER MOSPEL LIQ 45ML FRON', 9, '', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(325, '02-760R3', 'LABEL SURBEX-Z 7''S P/S', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X13', '20', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(326, '02-761R3', 'LABEL DAYALETS 30''S NEW SIZE', 9, 'Labels', 'Select Features', 'NA', '20X26/80GM', '20X13', '21', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(327, '02-762R2', 'LABEL IBERET FOLIC 30''S', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X13', '39', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(328, '02-763R1', 'LABEL IBERET-500 30''S', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '8X13', '15', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(329, '02-764R2', 'LABEL OPTILETS M 30''S NEW PA', 9, 'Labels', 'Select Features', 'NA', '20X26/80GM', '20X13', '39', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(330, '02-765R3', 'LABEL PRAMET FA F/T 25''S', 9, 'Labels', 'Select Features', 'NA', '19½X26/80GM', '19½X13', '39', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(331, '02-766R4', 'LABEL PRAMET FA 4''S P/S  NEW', 9, 'Labels', 'Select Features', 'NA', '18X26/80GM', '18X13', '20', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(332, '02-767R2', 'LABEL BEVIDOX 60''S', 9, 'Labels', 'Select Features', 'NA', '19½X26/80GM', '19½X13', '39', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(333, '02-769R2', 'LABEL ENTAMIZOL SUSP. 90ML', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X26', '63', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(334, '02-770R2', 'LABEL SURBEX-T 30''S', 9, 'Labels', 'Select Features', 'NA', '40X13/80GM', '20X13', '21', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(335, '02-771R3', 'LABEL BECEFOL TAB 25''S', 9, 'Labels', 'Select Features', 'NA', '20X26/80GM', '20X13', '39', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(336, '02-773P', 'LABEL BRUFEN SUSP 90ML EXP H', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(337, '02-774', 'STICKER MOSPEL 45ML FRNT SIL', 9, 'Sticker Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(338, '02-775P', 'STICKER MOSPEL 45ML BACK SIL', 9, 'Sticker Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(339, '02-782R2', 'LABEL EPIVAL SYRUP 120 ML', 9, 'Labels', 'Select Features', 'NA', '20X30/70GM', '10X15', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(340, '02-785R2', 'LABELS-BRUFEN DS SUSP.90ML', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X26', '63', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(341, '02-788R2', 'LABEL BRUFEN DS SUSP PS 30ML', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(342, '02-795R2', 'LABEL RONDEC C SYP 120ML', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(343, '02-798R3', 'LABEL ADH KLARICID GRN 30ML', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(344, '02-799R3', 'R/ST KLARICID D/S GR 60ML FP', 9, '', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(345, '02-800R2', 'LABEL BRUFEN SUSPENSION 120M', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X26', '56', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(346, '02-800R3', 'LABEL BRUFEN SUSPENSION 120M (PET BOTTLE)', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(347, '02-802R2', 'LABEL FOR SURBEX-Z TAB 60''S', 9, 'Labels', 'Select Features', 'NA', '20X26/80GM', '20X13', '27', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(348, '02-803R2', 'LABEL ARINAC SUSPENSION 120M', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X26', '56', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(349, '02-820R2', 'R/ST:ACYCLO 500MG INJ G.PUNJ', 9, '', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(350, '02-824', 'R STICKER VANCOMYCIN 0.5GM P', 9, 'Sticker Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(351, '02-825R1', 'R STICKER VANCOMYCIN 1G PDF', 9, 'Sticker Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(352, '02-826R1', 'R STICKER ACYCLOVIR ING PDF', 9, 'Sticker Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(353, '02-828R1', 'LABEL BRUFEN SUSP 120ML PDF', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(354, '02-841', 'LABEL VIDAYLIN SYRUP 120ML G', 9, 'Labels', 'Select Features', 'NA', '20X30/80GM', '10X7.5', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(355, '02-846', 'LABEL EPIVAL SYRUP 120ML PDF', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(356, '02-847', 'LABEL BEVIDOX TAB 30''S GOP', 9, 'Labels', 'Select Features', 'NA', '9X30/80GM', '9X15', '25', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(357, '02-848P', 'LABEL CECON CHEWABLE GOP', 9, 'Labels', 'Select Features', 'NA', '19½X26/80GM', '9¾X13', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(358, '02-849R1P', 'LABEL VIDAYLIN-T TAB 30''S GO', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X13', '20', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(359, '02-850R1', 'LABEL EPIVAL SYRUP 120ML GOP', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(360, '02-852R1', 'LABEL DIJEX MP SUSP 120ML GO', 9, 'Labels', 'Select Features', 'NA', '40X28/80GM', '20X14', '56', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(361, '02-857', 'LABEL BRUFEN SUSP.   120ML P', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X13', '56', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(362, '02-889', 'LABELS VIDAYLIN-M 120ML GOP', 9, 'Labels', 'Select Features', 'NA', '40X30/80GM', '20X15', '24', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(363, '02-890P', 'LABEL VIDAYLIN-T TAB 30''S GO', 9, 'Labels', 'Select Features', 'NA', '17½X26/80GM', '17½X13', '20', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(364, '02-892', 'LABEL ADH KLARICID 60ML GOP', 9, 'Labels', 'Select Features', 'NA', '', '', '', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(365, '02-894', 'LABEL BRUFEN SUSP 120ML GOP', 9, 'Labels', 'Select Features', 'NA', '40X26/80GM', '20X26', '56', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(366, '', '', 0, '', '', 'NA', '', '', '', '', '', '', '', '', '', '', 0, '2018-09-11 07:40:01'),
(367, '200000128', 'CARTON ADVANT TAB 16MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(368, '200000332', 'CARTON CYTOPAN TAB 75MG/200MCG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(369, '200000364', 'CARTON LILAC SYP 30ML PS', 10, 'Package Carton', '', 'NA', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(370, '200000411', 'CARTON LIPIGET TAB 10MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(371, '200000414', 'CARTON LIPIGET TAB 20MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(372, '200000539', 'CARTON GONADIL - F CAPS  PS', 10, 'Package Carton', '', 'NA', '40X28/300GM', '20X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(373, '200000612', 'CARTON ESOME CAPS 20MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(374, '200000704', 'CARTON ADVANT TAB 8MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(375, '200000767', 'CARTON HCQ TAB 200MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(376, '200000840', 'CARTON CYTOPAN TAB 50MG/200MCG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(377, '200000961', 'CARTON LARINEX TAB 5MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(378, '200001030', 'CARTON RIBAZOLE TAB 500MG TP (EXP)', 10, 'Package Carton', '', 'NA', '44X36/300GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(379, '200001053', 'CARTON ORLIFIT CAPS 120MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(380, '200001062', 'CARTON CLARITEK TAB 250MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(381, '200001064', 'CARTON CLARITEK TAB 500MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(382, '200001065', 'CARTON CLARITEK GRAN 50ML TP', 10, 'Package Carton', '', 'NA', '44X28/300GM', '14.66X28', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(383, '200001066', 'CARTON CLARITEK GRAN 15ML PS', 10, 'Package Carton', '', 'NA', '30X50/300GM', '14.66X16.66', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(384, '200001067', 'CARTON CLARITEK DROPS 25ML TP', 10, 'Package Carton', '', 'NA', '50X36½/300GM', '25X18½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(385, '200001068', 'CARTON CLARITEK DROPS 10ML PS', 10, 'Package Carton', '', 'NA', '40X38/300GM', '13.33X19', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(386, '200001142', 'CARTON FEXET TAB 60MG PS', 10, 'Package Carton', '', 'NA', '44X28/300GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(387, '200001144', 'CARTON FEXET TAB 120MG PS', 10, 'Package Carton', '', 'NA', '44X28/300GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(388, '200001236', 'CARTON FEXET D TAB 60MG/120MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(389, '200001315', 'CARTON TRUPRIL TAB 10MG PS (AFG)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(390, '200001319', 'CARTON CO-TRUPRIL TAB 20MG/12.5MGPS(AFG', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(391, '200001379', 'CARTON ZOLID PLUS TAB 15MG/500MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(392, '200001440', 'CARTON INSUGET INJ REGULAR TP', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(393, '200001443', 'CARTON INSUGET INJ NPH TP', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(394, '200001445', 'CARTON INSUGET INJ 70/30 TP', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(395, '200001556', 'CARTON RINCIT TAB 5MG TP (EXP)', 10, 'Package Carton', '', 'NA', '50X36/300GM', '16.66X12', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(396, '200001575', 'CARTON GABICA CAPS 75MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(397, '200001579', 'CARTON GABICA CAPS 100MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(398, '200001592', 'CARTON ZOLID PLUS TAB 15MG/850MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(399, '200001700', 'CARTON FEXET TAB 30MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(400, '200001910', 'CARTON GABICA CAPS 50MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(401, '200001911', 'CARTON GABICA CAPS 150MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(402, '200001934', 'CARTON TAMSOLIN CAPS 0.4MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(403, '200002193', 'CARTON NEXUM IV PS', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(404, '200002237', 'CARTON TRUPRIL TAB 5MG PS (SCI)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(405, '200002240', 'CARTON TRUPRIL TAB 10MG PS (SCI)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(406, '200002244', 'CARTON CO-TRUPRIL TAB 20+12.5MG PS(SCI)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(407, '200002255', 'CARTON PRAZ TAB 0.25MG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(408, '200002258', 'CARTON PRAZ TAB 0.5MG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(409, '200002265', 'CARTON PANSLAY TAB 50MG PS (NEW 1)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(410, '200002268', 'CARTON PANSLAY TAB 75MG PS (SCI)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(411, '200002289', 'CARTON GABICA CAPS 75MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(412, '200002291', 'CARTON GABICA CAPS 100MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(413, '200002360', 'CARTON SCICON MR TAB 30MG TP (SCI)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(414, '200002362', 'CARTON SCICON  TAB 30MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(415, '200002449', 'CARTON FEROTEIN S INJ 100MG TP', 10, 'Package Carton', '', 'NA', '26X38½/300GM', '13X19½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(416, '200002452', 'CARTON FEROTEIN S INJ 100MG PS', 10, 'Package Carton', '', 'NA', '36X50/300GM', '18X12½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(417, '200002480', 'CARTON ORLIFIT CAPS 120MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(418, '200002530', 'CARTON RISEK CAPS 40MG TP (COLOR STAMP)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(419, '200002534', 'CARTON NEXUM CAPS 40MG TP (COLOR STAMP)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(420, '200002544', 'CARTON RISEK IV 40MG TP (COLOR STAMP)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(421, '200002545', 'CARTON NEXUM IV 40MG TP (COLOR STAMP)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(422, '200002546', 'CARTON LIPIGET TAB 10MG TP (COLOR STAMP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X27', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(423, '200002547', 'CARTON LIPIGET TAB 20MG TP (COLOR STAMP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X27', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(424, '200002548', 'CARTON LIPIGET TAB 40MG TP (COLOR STAMP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X27', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(425, '200002557', 'CARTON ESOME CAPS 20MG TP (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(426, '200002559', 'CARTON ESOME CAPS 40MG TP (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(427, '200002563', 'CARTON RISEK CAPS 20MG TP (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(428, '200002565', 'CARTON RISEK CAPS 40MG TP (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(429, '200002574', 'CARTON LIPIGET TAB 10MG TP (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(430, '200002576', 'CARTON LIPIGET TAB 20MG TP (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(431, '200002586', 'CARTON LIPIGET TAB 40MG TP (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(432, '200002668', 'CARTON LILAC SYP 30ML PS (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '46X30/300GM', '23X15', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(433, '200002675', 'CARTON LILAC SYP 120ML TP (TJK) (NEW)', 10, 'Package Carton', '', 'NA', '36X50/300GM', '18X16.66', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(434, '200002684', 'CARTON GABICA CAPS 50MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(435, '200002688', 'CARTON GABICA CAPS 150MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(436, '200002816', 'CARTON ESOME CAPS 20MG TP (TJK) (IMA)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(437, '200002818', 'CARTON ESOME CAPS 40MG TP (TJK) (IMA)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(438, '200003155', 'CARTON CLARITEK TAB 500MG TP (YMN)', 10, 'Package Carton', '', 'NA', '40X31/300GM', '20X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(439, '200003164', 'CARTON RISEK IV 40MG TP (EXP)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(440, '200003216', 'CARTON CLARITEK TAB 250MG PS (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(441, '200003219', 'CARTON CLARITEK TAB 500MG PS (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(442, '200003341', 'CARTON RISEK INSTA GRAN 20MG+1680MG TP', 10, 'Package Carton', '', 'NA', '37X50/300GM', '18½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(443, '200003344', 'CARTON RISEK INSTA GRAN 20MG+1680MG PS', 10, 'Package Carton', '', 'NA', '42X39/300GM', '14X19½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(444, '200003371', 'CARTON SCICON MR TAB 60MG PS (SCI)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(445, '200003413', 'CARTON RISEK IV 40MG TP (TJK)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(446, '200003483', 'CARTON INSUGET INJ NPH TP (EXP)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(447, '200003487', 'CARTON INSUGET INJ 70/30 TP (EXP)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(448, '200003561', 'CARTON MASACOL TAB 400MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(449, '200003564', 'CARTON MASACOL TAB 800MG TP', 10, 'Package Carton', '', 'NA', '42X36/300GM', '21X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(450, '200003567', 'CARTON MASACOL TAB 800MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(451, '200003593', 'CARTON RISEK INSTA GRAN 40MG+1680MG TP', 10, 'Package Carton', '', 'NA', '37X50/300GM', '18½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(452, '200003596', 'CARTON RISEK INSTA GRAN 40MG+1680MG PS', 10, 'Package Carton', '', 'NA', '42X39/300GM', '14X19½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(453, '200003675', 'CARTON FEXET TAB 30MG TP (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '44X28/300GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(454, '200003679', 'CARTON FEXET TAB 60MG TP (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '44X28/300GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(455, '200003686', 'CARTON FEXET TAB 120MG PS (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(456, '200003690', 'CARTON FEXET TAB 180MG PS (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(457, '200003863', 'CARTON LIPIGET TAB 10MG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(458, '200003867', 'CARTON LIPIGET TAB 20MG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(459, '200003871', 'CARTON LIPIGET TAB 40MG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(460, '200003889', 'CARTON LIPIGET TAB 20MG (TJK)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(461, '200004088', 'CARTON NERVON TAB 500MCG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(462, '200004108', 'CARTON ORLIFIT CAPS 60MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(463, '200004154', 'CARTON UNIPEG INJ 180MCG/1ML TP', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(464, '200004261', 'CARTON LIPIGET TAB 10MG TP (VIT) (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(465, '200004386', 'CARTON DIAMISU INJ 70/30 TP (VIT)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(466, '200004389', 'CARTON DIAMISU INJ NPH  TP (VIT)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(467, '200004491', 'CARTON CLARITEK TAB 500MG TP (EXP(NEW 1', 10, 'Package Carton', '', 'NA', '40X31/300GM', '20X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(468, '200004729', 'CARTON IZEK IV 40MG TP (YMN)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(469, '200004924', 'CARTON RISEK IV 40MG PS (NEW)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(470, '200004959', 'CARTON TRUPRIL TAB 10MG TP (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '40X36/300GM', '20X18', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(471, '200004996', 'CARTON EMRIX SR CAPS 15MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(472, '200005003', 'CARTON EMRIX SR CAPS 30MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(473, '200005019', 'CARTON TAMSOLIN CAPS 0.4MG PS (EXP(NEW 1', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(474, '200005073', 'CARTON UNIFERON INJ 3MIU TP (NEW 1)', 10, 'Package Carton', '', 'NA', '48X25/300GM', '16X25', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(475, '200005200', 'CARTON LILAC SYP 120ML TP (EXP) (NEW 1)', 10, 'Package Carton', '', 'NA', '25X32½/300GM', '25X32½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(476, '200005201', 'CARTON LILAC SYP 60ML TP (EXP) (NEW 1)', 10, 'Package Carton', '', 'NA', '40X42/300GM', '13.33X21', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(477, '200005277', 'CARTON SCITIN TAB 8MG PS (SCI)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(478, '200005283', 'CARTON SCITIN TAB 16MG PS (SCI)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(479, '200005286', 'CARTON TRUPRIL TAB 20MG TP (SCI)', 10, 'Package Carton', '', 'NA', '40X36/300GM', '20X18', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(480, '200005289', 'CARTON TRUPRIL TAB 20MG PS (SCI)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(481, '200005294', 'CARTON NEXUM CAPS 20MG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(482, '200005296', 'CARTON NEXUM CAPS 40MG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(483, '200005298', 'CARTON RISEK CAPS 20MG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(484, '200005300', 'CARTON RISEK CAPS 40MG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(485, '200005427', 'CARTON ESOME IV 40MG TP (TJK)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(486, '200005485', 'CARTON INSUGET INJ REGULAR TP (TENDER)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(487, '200005504', 'CARTON INSUGET INJ 70/30 TP (TJK)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(488, '200005506', 'CARTON INSUGET INJ NPH TP (TJK)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(489, '200005508', 'CARTON INSUGET INJ REGULAR TP (TJK)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(490, '200005754', 'CARTON UNIPEG INJ 180MCG/1ML TP (EXP)', 10, 'Package Carton', '', 'NA', '25X34/350GM', '25X17', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(491, '200005814', 'CARTON GETUFER S INJ 100MG/5ML TP (VIT)', 10, 'Package Carton', '', 'NA', '26X28½/300GM', '13X19¼', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(492, '200005833', 'CARTON CARTIGEN TAB 500MG+400MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(493, '200005878', 'CARTON LILAC SYP 120ML TP (INST)', 10, 'Package Carton', '', 'NA', '31X50/300GM', '15½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(494, '200005915', 'CARTON GETCET TAB 5MG TP (PHP)', 10, 'Package Carton', '', 'NA', '50X36/300GM', '16.66X12', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(495, '200005917', 'CARTON GETCET TAB 5MG PS (PHP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(496, '200005994', 'CARTON CLARIGET DROPS 25ML TP (PHP)(NEW', 10, 'Package Carton', '', 'NA', '50X36½/300GM', '25X18¼', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(497, '200006024', 'CARTON ESOME IV 40MG TP (EXP) (NEW)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(498, '200006052', 'CARTON GETZOME INSTA 20+1680MG TP (NGR)', 10, 'Package Carton', '', 'NA', '37X50/300GM', '18½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(499, '200006054', 'CARTON GETZOME INSTA 40+1680MG TP (NGR)', 10, 'Package Carton', '', 'NA', '37X50/300GM', '18½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(500, '200006055', 'CARTON GETZOME IV 40MG TP (NGR)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(501, '200006080', 'CARTON INSUGET INJ 70/30 TP (PHP) (NEW)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(502, '200006083', 'CARTON INSUGET INJ NPH TP (PHP) (NEW)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(503, '200006085', 'CARTON INSUGET INJ REGULAR TP (PHP)(NEW', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(504, '200006102', 'CARTON STARCOX TAB 60MG TP', 10, 'Package Carton', '', 'NA', '36X40/300GM', '18X20', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(505, '200006105', 'CARTON STARCOX TAB 60MG PS', 10, 'Package Carton', '', 'NA', '36X40/300GM', '18X20', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(506, '200006261', 'CARTON RISEK CAPS 20MG PS (PHP) (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(507, '200006311', 'CARTON ZOLID PLUS 15+500MG PS (PHP(NEW', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(508, '200006325', 'CARTON RISEK IV 40MG TP (PHP) (NEW)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(509, '200006361', 'CARTON TAMSOLIN CAPS 0.4MG PS (PHP)(NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(510, '200006529', 'CARTON LILAC SYP 120ML TP (PHP)29-30(NEW', 10, 'Package Carton', '', 'NA', '30X50/300GM', '15X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(511, '200006531', 'CARTON LILAC SYP 60ML TP (PHP)29-30(NEW', 10, 'Package Carton', '', 'NA', '40X42/300GM', '13.33X21', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(512, '200006533', 'CARTON LILAC SYP 30ML PS (PHP) 29-30(NEW', 10, 'Package Carton', '', 'NA', '44X30/300GM', '22X15', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(513, '200006730', 'CARTON CLARIGET TAB 250MG (KAZ) ) CHG', 10, 'Package Carton', '', 'NA', '46X27/300GM', '23X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(514, '200006732', 'CARTON CLARIGET TAB 250MG TP (TJK) CHG', 10, 'Package Carton', '', 'NA', '46X27/300GM', '23X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(515, '200006733', 'CARTON CLARIGET TAB 500MG (KAZ) CHG', 10, 'Package Carton', '', 'NA', '40X31/300GM', '20X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(516, '200006734', 'CARTON CLARIGET TAB 500MG TP (TJK) CHG', 10, 'Package Carton', '', 'NA', '40X31/300GM', '20X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(517, '200006735', 'CARTON CLARITEK TAB 250MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '46X27/300GM', '20X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(518, '200006736', 'CARTON CLARITEK TAB 250MG TP (VIT) CHG', 10, 'Package Carton', '', 'NA', '46X27/300GM', '20X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(519, '200006737', 'CARTON CLARITEK TAB 500MG TP (VIT) CHG', 10, 'Package Carton', '', 'NA', '40X31/300GM', '20X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(520, '200006738', 'CARTON CYTOPAN TAB 50+200MCG TP EXP CHG', 10, 'Package Carton', '', 'NA', '46X27/300GM', '23X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(521, '200006739', 'CARTON CYTOPAN TAB 50MG+200MCG TP CHG', 10, 'Package Carton', '', 'NA', '46X27/300GM', '23X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(522, '200006740', 'CARTON CYTOPAN TAB 75+200MCG TP EXP CHG', 10, 'Package Carton', '', 'NA', '46X27/300GM', '23X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(523, '200006741', 'CARTON CYTOPAN TAB 75MG+200MCG TP CHG', 10, 'Package Carton', '', 'NA', '46X27/300GM', '23X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(524, '200006750', 'CARTON FEXET TAB 120MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(525, '200006752', 'CARTON FEXET TAB 120MG TP (TJK) CHG', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(526, '200006754', 'CARTON FEXET TAB 120MG TP CHG', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(527, '200006755', 'CARTON FEXET TAB 180MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(528, '200006757', 'CARTON FEXET TAB 180MG TP (TJK) CHG', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(529, '200006760', 'CARTON GABICA CAPS 100MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(530, '200006761', 'CARTON GABICA CAPS 100MG TP (VIT) CHG', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(531, '200006763', 'CARTON GABICA CAPS 150MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(532, '200006764', 'CARTON GABICA CAPS 150MG TP (VIT) CHG', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(533, '200006765', 'CARTON GABICA CAPS 150MG TP CHG', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(534, '200006766', 'CARTON GABICA CAPS 300MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '45X40/300GM', '22½X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(535, '200006768', 'CARTON GABICA CAPS 50MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(536, '200006770', 'CARTON GABICA CAPS 75MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(537, '200006787', 'CARTON HCQ TAB 200MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '25X30/300GM', '25X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(538, '200006788', 'CARTON HCQ TAB 200MG TP CHG', 10, 'Package Carton', '', 'NA', '25X30/300GM', '25X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(539, '200006789', 'CARTON HCQ TAB 200MG TP SUD TENDER CHG', 10, 'Package Carton', '', 'NA', '25X30/300GM', '25X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(540, '200006810', 'CARTON ORLIFIT CAPS 120MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '45X38/300GM', '22½X19', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(541, '200006811', 'CARTON ORLIFIT CAPS 120MG TP (TJK) CHG', 10, 'Package Carton', '', 'NA', '45X38/300GM', '22½X19', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(542, '200006813', 'CARTON ORLIFIT CAPS 120MG TP CHG', 10, 'Package Carton', '', 'NA', '44X36/300GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(543, '200006818', 'CARTON RIBAZOLE CAPS 400MG TP(VIT) CHG', 10, 'Package Carton', '', 'NA', '44X36/300GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(544, '200006820', 'CARTON RISEK CAPS 20MG TP (PHP CHG', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(545, '200006821', 'CARTON RISEK CAPS 40MG TP (PHP) CHG', 10, 'Package Carton', '', 'NA', '45X40/300GM', '22½X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(546, '200006830', 'CARTON ZOLID PLUS TAB 15+500MG TPPHP CHG', 10, 'Package Carton', '', 'NA', '44X38/300GM', '22X19', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(547, '200006833', 'CARTON ZOLID PLUS TAB 15MG+850MG TP CHG', 10, 'Package Carton', '', 'NA', '45X40/300GM', '22½X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(548, '200006834', 'CARTON ZOLID PLUS TAB 15MG+500MG TJK CHG', 10, 'Package Carton', '', 'NA', '44X38/300GM', '22X19', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(549, '200006851', 'CARTON FEXET 180MG TP NGR CHG', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(550, '200006868', 'CARTON GETZOME CAPS 20MG TP (NGR) (NEW)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(551, '200006870', 'CARTON GETZOME CAPS 40MG TP (NGR) (NEW)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(552, '200007024', 'CARTON FEXET D TAB 60MG+120MG TP  CHG', 10, 'Package Carton', '', 'NA', '23X34/300GM', '23X17', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(553, '200007113', 'CARTON RISEK CAPS 40MG PS (PHP) (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(554, '200007146', 'CARTON GONADIL - F CAPS TP CHG', 10, 'Package Carton', '', 'NA', '26X38½/300GM', '26X19¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(555, '200007157', 'CARTON LARINEX TAB 5MG TP CHG', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(556, '200007162', 'CARTON CLARITEK TAB 250MG TP CHG', 10, 'Package Carton', '', 'NA', '26½X43/300GM', '26½X21½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01');
INSERT INTO `item` (`id`, `Item_Code`, `Description`, `Client`, `Work_Type`, `features`, `type`, `size`, `print_sheet_size`, `ups`, `colors`, `spl1`, `spl2`, `spl3`, `spl4`, `gsm`, `conversion`, `user_id`, `created_at`) VALUES
(557, '200007163', 'CARTON CLARITEK TAB 500MG TP CHG', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(558, '200007169', 'CARTON CO-TRUPRIL 20+12.5MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '40X36/300GM', '20X18', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(559, '200007180', 'CARTON TRUPRIL TAB 10MG TP (AFG) CHG', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(560, '200007183', 'CARTON CO-TRUPRIL 20+12.5MG TP AFG CHG', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(561, '200007206', 'CARTON TRUPRIL TAB 5MG TP (SCI) CHG', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(562, '200007208', 'CARTON TRUPRIL TAB 10MG TP (SCI) CHG', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(563, '200007211', 'CARTON CO-TRUPRIL 20+12.5MG TP SCI CHG', 10, 'Package Carton', '', 'NA', '40X36/300GM', '20X18', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(564, '200007219', 'CARTON PRAZ TAB 0.25MG TP (SCI) CHG', 10, 'Package Carton', '', 'NA', '24½X26½/300GM', '24½X13¼', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(565, '200007221', 'CARTON PRAZ TAB 0.5MG TP (SCI) CHG', 10, 'Package Carton', '', 'NA', '24½X26½/300GM', '24½X13¼', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(566, '200007223', 'CARTON PRAZ TAB 1MG TP (SCI) CHG', 10, 'Package Carton', '', 'NA', '24½X26½/300GM', '24½X13¼', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(567, '200007256', 'CARTON LARINEX TAB 5MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(568, '200007266', 'CARTON CO-TRUPRIL  20+12.5MG TP TJK CHG', 10, 'Package Carton', '', 'NA', '40X36/300GM', '20X18', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(569, '200007296', 'CARTON TAMSOLIN CAPS 0.4MG TP (PHP) CHG', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(570, '200007308', 'CARTON TRUPRIL TAB 5MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(571, '200007310', 'CARTON TRUPRIL TAB 10MG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(572, '200007313', 'CARTON TAMSOLIN CAPS 0.4MG TP(EXP) CHG', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(573, '200007327', 'CARTON SCITIN TAB 8MG TP (SCI) CHG', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(574, '200007329', 'CARTON SCITIN TAB 16MG TP (SCI) CHG', 10, 'Package Carton', '', 'NA', '44X28/300GM', '22X14', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(575, '200007342', 'CARTON NERVON TAB 500MCG TP (EXP) CHG', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(576, '200007358', 'CARTON CARTIGEN TAB 500MG+400MG TP CHG', 10, 'Package Carton', '', 'NA', '36X42/300GM', '18X21', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(577, '200007399', 'CARTON FEXET TAB 120MG TP (NGR) CHG', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(578, '200007495', 'CARTON FEXET TAB 60MG TP (VIT) (NEW 1)', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(579, '200007498', 'CARTON CIPESTA XR TAB 500MG TP (NEW)', 10, 'Package Carton', '', 'NA', '44X36/300GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(580, '200007501', 'CARTON CIPESTA XR TAB 500MG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(581, '200007508', 'CARTON CIPESTA XR TAB 1000MG PS (NEW)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(582, '200007526', 'CARTON RISEK INSTA 20MG+1680MG TP (PHP)', 10, 'Package Carton', '', 'NA', '37X50/300GM', '18½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(583, '200007528', 'CARTON RISEK INSTA 20MG+1680MG PS (PHP)', 10, 'Package Carton', '', 'NA', '42X39/300GM', '14X19½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(584, '200007530', 'CARTON RISEK INSTA 40MG+1680MG TP (PHP)', 10, 'Package Carton', '', 'NA', '37X50/300GM', '18½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(585, '200007532', 'CARTON RISEK INSTA 40MG+1680MG PS (PHP)', 10, 'Package Carton', '', 'NA', '42X39/300GM', '14X19½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(586, '200007605', 'CARTON FEXET TAB 60MG TP (NEW 1)', 10, 'Package Carton', '', 'NA', '44X28/300GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(587, '200007666', 'CARTON XALGETZ CAPS 0.4MG TP (VIT) CHG', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(588, '200007717', 'CARTON ESOME IV 40MG TP (KAZ)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(589, '200007748', 'CARTON LILAC SYP 120ML TP (NEW 1)', 10, 'Package Carton', '', 'NA', '25X32½/300GM', '25X32½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(590, '200007751', 'CARTON LILAC SYP 30ML PS (NEW 1)', 10, 'Package Carton', '', 'NA', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(591, '200007753', 'CARTON LILAC SYP 120ML (STD GREEN VER-01', 10, 'Package Carton', '', 'NA', '31X50/300GM', '15½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(592, '200007874', 'CARTON FEXET TAB 60MG TP (KAZ) (NEW 5)', 10, 'Package Carton', '', 'NA', '44X28/300GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(593, '200007876', 'CARTON FEXET TAB 120MG TP (KAZ) CHG(NEW', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(594, '200007877', 'CARTON FEXET TAB 180MG TP (KAZ) CHG(NEW', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(595, '200007884', 'CARTON CLARIGET GRAN 50ML TP (KAZ(NEW 3)', 10, 'Package Carton', '', 'NA', '50X37/300GM', '25X18½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(596, '200007964', 'CARTON NEXUM CAPS 20MG TP (NEW 1)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(597, '200007965', 'CARTON NEXUM CAPS 40MG TP (NEW 1)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(598, '200007966', 'CARTON RISEK CAPS 20MG TP (NEW)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(599, '200007978', 'CARTON NERVON INJ 500MCG TP (NEW)', 10, 'Package Carton', '', 'NA', '45X40/300GM', '22½X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(600, '200007981', 'CARTON NERVON INJ 500MCG PS (NEW)', 10, 'Package Carton', '', 'NA', '40X32/300GM', '20X10.66', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(601, '200007984', 'CARTON NERVON TAB 500MCG TP CHG 1', 10, 'Package Carton', '', 'NA', '26½X37/300GM', '26½X18½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(602, '200007986', 'CARTON NERVON TAB 500MCG PS (NEW 1)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(603, '200008018', 'CARTON DIAMISU INJ REGULAR TP (VIT) (NEW', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(604, '200008045', 'CARTON FEXET TAB 120MG TP (INST)', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(605, '200008195', 'CARTON INSUGET INJ 70/30 TP (GREEN(VER-1', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(606, '200008196', 'CARTON INSUGET INJ NPH TP (GREEN(VER-1)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(607, '200008197', 'CARTON INSUGET INJ REGULARTP(GREEN(VER-1', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(608, '200008236', 'CARTON CO-TRUPRIL TAB TP (VIT)', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(609, '200008320', 'CARTON VILGET TAB 50MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(610, '200008324', 'CARTON VILGET-M TAB 50MG+850MG TP', 10, 'Package Carton', '', 'NA', '23X40/300GM', '23X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(611, '200008327', 'CARTON VILGET-M TAB 50MG+850MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(612, '200008331', 'CARTON VILGET-M TAB 50MG+1000MG TP', 10, 'Package Carton', '', 'NA', '23X40/300GM', '23X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(613, '200008334', 'CARTON VILGET-M TAB 50MG+1000MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(614, '200008454', 'CARTON UNIPEG-V INJ 180MCG/1ML TP', 10, 'Package Carton', '', 'NA', '25X36/350GM', '25X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(615, '200008569', 'CARTON TAMSOLIN CAPS 0.4MG TP CHG(VER-01', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(616, '200008655', 'CARTON PANTRA PLUS TAB 37.5MG+325MG TP', 10, 'Package Carton', '', 'NA', '26½X32½/300GM', '26½X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(617, '200008658', 'CARTON PANTRA PLUS TAB 37.5MG+325MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(618, '200008689', 'CARTON FEXET D TAB 60MG+120MG TP(EXP(CHG', 10, 'Package Carton', '', 'NA', '23X34/300GM', '23X17', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(619, '200008724', 'CARTON LILAC SYP 120ML TP (PAK DEFENCE)', 10, 'Package Carton', '', 'NA', '30X50/300GM', '15X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(620, '200008811', 'CARTON ORLIFIT CAPS 120MG TP(20) EXP CH', 10, 'Package Carton', '', 'NA', '22½X40/300GM', '22½X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(621, '200008839', 'CARTON GABICA CAPS 50MG TP 35''S(EXP) CH', 10, 'Package Carton', '', 'NA', '36X42/300GM', '18X21', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(622, '200008840', 'CARTON GABICA CAPS 75MG TP 35''S(EXP) CH', 10, 'Package Carton', '', 'NA', '36X42/300GM', '18X21', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(623, '200008841', 'CARTON GABICA CAPS 100MG TP 35''S(EXP)', 10, 'Package Carton', '', 'NA', '36X42/300GM', '18X21', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(624, '200008842', 'CARTON GABICA CAPS 150MG TP 35''S(EXP)', 10, 'Package Carton', '', 'NA', '36X42/300GM', '18X21', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(625, '200008911', 'CARTON FEXET TAB 30MG TP (EXP)', 10, 'Package Carton', '', 'NA', '44X28/300GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(626, '200008913', 'CARTON FEXET TAB 30MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(627, '200008943', 'CARTON GABICA CAPS 150MG TP (SUD)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(628, '200008944', 'CARTON GABICA CAPS 50MG TP (SUD)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(629, '200008945', 'CARTON GABICA CAPS 75MG TP (SUD)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(630, '200008946', 'CARTON GABICA CAPS 100MG TP (SUD)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(631, '200008982', 'CARTON LIPIGET TAB 10MG TP', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X27', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(632, '200008984', 'CARTON LIPIGET TAB 20MG TP(COLORSTAMP)V1', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X27', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(633, '200008987', 'CARTON LIPIGET TAB 40MG TP(COLORSTAMP)V', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X27', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(634, '200008992', 'CARTON RISEK CAPS 20MG TP', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(635, '200008993', 'CARTON RISEK CAPS 40MG TP (COLORSTAMP)V', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(636, '200009007', 'CARTON ORLIFIT CAPS 120MG TP CHG V1', 10, 'Package Carton', '', 'NA', '44X36/300GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(637, '200009016', 'CARTON FEXET TAB 60MG TP', 10, 'Package Carton', '', 'NA', '44X28/300GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(638, '200009026', 'CARTON CYTOPAN TAB 50MG+200MCG TP', 10, 'Package Carton', '', 'NA', '46X27/300GM', '23X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(639, '200009027', 'CARTON CYTOPAN TAB 75MG+200MCG TP', 10, 'Package Carton', '', 'NA', '46X27/300GM', '23X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(640, '200009028', 'CARTON EMRIX SR CAPS 15MG TP', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(641, '200009029', 'CARTON EMRIX SR CAPS 30MG TP CHG V1', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(642, '200009031', 'CARTON FEXET TAB 120MG TP', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(643, '200009033', 'CARTON FEXET TAB 180MG TP', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(644, '200009034', 'CARTON GABICA CAPS 100MG TP CHG V1', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(645, '200009035', 'CARTON GABICA CAPS 150MG TP CHG V1', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(646, '200009036', 'CARTON GABICA CAPS 300MG TP CHG V1', 10, 'Package Carton', '', 'NA', '45X40/300GM', '22½X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(647, '200009037', 'CARTON GABICA CAPS 50MG TP', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(648, '200009038', 'CARTON GABICA CAPS 75MG TP CHG V1', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(649, '200009040', 'CARTON HCQ TAB 200MG TP CHG V1', 10, 'Package Carton', '', 'NA', '25X30/300GM', '25X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(650, '200009048', 'CARTON ZOLID PLUS TAB 15MG+500MG TP V1', 10, 'Package Carton', '', 'NA', '44X38/300GM', '22X19', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(651, '200009049', 'CARTON ZOLID PLUS TAB 15MG+850MG TP V1', 10, 'Package Carton', '', 'NA', '45X40/300GM', '22½X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(652, '200009058', 'CARTON FEXET D TAB 60MG+120MG TP', 10, 'Package Carton', '', 'NA', '23X34/300GM', '23X17', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(653, '200009060', 'CARTON MASACOL TAB 400MG TP', 10, 'Package Carton', '', 'NA', '50X37/300GM', '25X18½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(654, '200009074', 'CARTON VILGET TAB 50MG TP', 10, 'Package Carton', '', 'NA', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(655, '200009080', 'CARTON CARTIGEN TAB 500MG+400MG TP', 10, 'Package Carton', '', 'NA', '36X42/300GM', '18X21', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(656, '200009084', 'CARTON CLARITEK TAB 250MG TP CHG V1', 10, 'Package Carton', '', 'NA', '26½X43/300GM', '26½X21½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(657, '200009085', 'CARTON CLARITEK TAB 500MG TP', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(658, '200009096', 'CARTON GONADIL - F CAPS TP', 10, 'Package Carton', '', 'NA', '26X38½/300GM', '26X19¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(659, '200009097', 'CARTON LARINEX TAB 5MG TP CHG V1', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(660, '200009100', 'CARTON NERVON TAB 500MCG TP CHG 1 V1', 10, 'Package Carton', '', 'NA', '26½X37/300GM', '26½X18½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(661, '200009106', 'CARTON TRUPRIL TAB 10MG TP (AFG)', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(662, '200009107', 'CARTON TRUPRIL TAB 5MG TP (AFG) CHG V1', 10, 'Package Carton', '', 'NA', '40X38/300GM', '20X12.66', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(663, '200009112', 'CARTON NEXUM CAPS 20MG TP', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(664, '200009113', 'CARTON NEXUM CAPS 40MG TP', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(665, '200009120', 'CARTON ORLIFIT CAPS 120MG TP 20''S (NGR)', 10, 'Package Carton', '', 'NA', '23X40/300GM', '23X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(666, '200009161', 'CARTON NEXUM IV 40MG TP (S.GOV)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(667, '200009165', 'CARTON FEXET TAB 60MG TP (EXP)', 10, 'Package Carton', '', 'NA', '44X28/300GM', '22X14', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(668, '200009166', 'CARTON FEXET TAB 60MG PS (EXP) (NEW)    ', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(669, '200009215', 'CARTON CLARITEK TAB 250MG TP (NGR) CHG', 10, 'Package Carton', '', 'NA', '46X27/300GM', '23X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(670, '200009217', 'CARTON CLARITEK TAB 500MG TP (NGR)', 10, 'Package Carton', '', 'NA', '40X31/300GM', '20X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(671, '200009237', 'CARTON FEXET TAB 180MG TP (EXP)', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(672, '200009241', 'CARTON FEXET TAB 120MG TP (EXP)', 10, 'Package Carton', '', 'NA', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(673, '200009271', 'CARTON CARSAMIN TAB 500MG+400MG TP (KAZ', 10, 'Package Carton', '', 'NA', '36X42/300GM', '18X21', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(674, '200009312', 'CARTON ESOME CAPS 20MG TP (EXP)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(675, '200009316', 'CARTON COVA TAB 80MG TP', 10, 'Package Carton', '', 'NA', '41X33/300GM', '13.66X16½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(676, '200009319', 'CARTON COVA TAB 80MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(677, '200009323', 'CARTON COVA TAB 160MG TP', 10, 'Package Carton', '', 'NA', '41X33/300GM', '13.66X16½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(678, '200009326', 'CARTON COVA-H TAB 80MG+12.5MG TP', 10, 'Package Carton', '', 'NA', '26½X32½/300GM', '13¼X16¼', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(679, '200009329', 'CARTON COVA-H TAB 160MG+12.5MG TP', 10, 'Package Carton', '', 'NA', '26X32½/300GM', '13X16¼', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(680, '200009332', 'CARTON COVA-H TAB 160MG+12.5MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(681, '200009357', 'CARTON ESOME CAPS 20MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(682, '200009404', 'CARTON ESOME CAPS 40MG TP (EXP)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(683, '200009406', 'CARTON ESOME CAPS 40MG PS (EXP)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(684, '200009407', 'CARTON GABICA CAPS 100MG TP (SUD)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(685, '200009408', 'CARTON GABICA CAPS 150MG TP (SUD)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(686, '200009409', 'CARTON GABICA CAPS 50MG TP (SUD)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(687, '200009410', 'CARTON GABICA CAPS 75MG TP (SUD)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(688, '200009422', 'CARTON RISEK IV 40MG TP (PAK DEF)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(689, '200009425', 'CARTON FEROTEIN S INJ 100MG TP (PAK DEF)', 10, 'Package Carton', '', 'NA', '26X38½/300GM', '13X19¼', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(690, '200009457', 'CARTON HCQ TAB 200MG TP (SUD)', 10, 'Package Carton', '', 'NA', '25X30/300GM', '25X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(691, '200009549', 'CARTON VILGET TAB 50MG TP (EXP)', 10, 'Package Carton', '', 'NA', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(692, '200009552', 'CARTON VILGET-M TAB 50MG+850MG TP (EXP)', 10, 'Package Carton', '', 'NA', '23X40/300GM', '23X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(693, '200009554', 'CARTON VILGET-M TAB 50MG+1000MG TP (EXP)', 10, 'Package Carton', '', 'NA', '23X40/300GM', '23X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(694, '200009594', 'CARTON XALGETZ CAPS 0.4MG TP (SUD)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(695, '200009612', 'CARTON RIVAXO TAB 10MG TP', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(696, '200009615', 'CARTON RIVAXO TAB 10MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(697, '200009619', 'CARTON RIVAXO TAB 15MG TP', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(698, '200009622', 'CARTON RIVAXO TAB 15MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(699, '200009625', 'CARTON RIVAXO TAB 20MG TP', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X11½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(700, '200009628', 'CARTON RIVAXO TAB 20MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(701, '200009656', 'CARTON VILGET TAB 50MG TP (SUD)', 10, 'Package Carton', '', 'NA', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(702, '200009728', 'CARTON RISEK CAPS 40MG TP (PHP)', 10, 'Package Carton', '', 'NA', '45X40/300GM', '22½X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(703, '200009729', 'CARTON RISEK INSTA 20MG+1680MG TP (PHP)', 10, 'Package Carton', '', 'NA', '37X50/300GM', '18½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(704, '200009738', 'CARTON TAMSOLIN CAPS 0.4MG TP (PHP)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(705, '200009890', 'CARTON CLARITEK TAB 250MG TP (MCC KPK)', 10, 'Package Carton', '', 'NA', '26½X43/300GM', '26½X21½', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(706, '200009893', 'CARTON CLARITEK TAB 500MG TP (MCC KPK)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(707, '200009912', 'CARTON RISEK IV 40MG TP (MCC KPK)', 10, 'Package Carton', '', 'NA', '50X32½/300GM', '25X16¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(708, '200009918', 'CARTON VILGET TAB 50MG TP (MCC KPK)', 10, 'Package Carton', '', 'NA', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(709, '200009966', 'CARTON VILGET-M TAB 50MG+850MG TP (SUD)', 10, 'Package Carton', '', 'NA', '23X40/300GM', '23X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(710, '200009980', 'CARTON LIPIGET TAB 10MG TP 30''S (EXP)', 10, 'Package Carton', '', 'NA', '25X34/300GM', '25X17', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(711, '200009993', 'CARTON RAZODEX CAPS 30MG TP', 10, 'Package Carton', '', 'NA', '44X36/300GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(712, '200010000', 'CARTON RAZODEX CAPS 60MG TP', 10, 'Package Carton', '', 'NA', '44X36/300GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(713, '200010050', 'CARTON COVA-H TAB 80MG+12.5MG PS', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(714, '200010089', 'CARTON VILGET TAB 50MG TP (NGR)', 10, 'Package Carton', '', 'NA', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(715, '200010090', 'CARTON VILGET-M TAB 50MG+1000MG TP (NGR)', 10, 'Package Carton', '', 'NA', '23X40/300GM', '23X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(716, '200010092', 'CARTON VILGET-M TAB 50MG+850MG TP (NGR)', 10, 'Package Carton', '', 'NA', '23X40/300GM', '23X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(717, '200010102', 'CARTON LILAC SYP 120ML TP (S.GOV)', 10, 'Package Carton', '', 'NA', '31X50/300GM', '15½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(718, '200010111', 'CARTON CLARITEK TAB 250MG TP (S.GOV)', 10, 'Package Carton', '', 'NA', '46X27/300GM', '23X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(719, '200010123', 'CARTON LIPIGET TAB 10MG TP (S.GOV)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(720, '200010126', 'CARTON LIPIGET TAB 20MG TP (S.GOV)', 10, 'Package Carton', '', 'NA', '36X27/300GM', '18X13½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(721, '200010165', 'CARTON CLARITEK TAB 500MG TP (GREEN)', 10, 'Package Carton', '', 'NA', '36X46/300GM', '18X23', '9', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(722, '200000367', 'LEAFLET LILAC SYP', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X35½', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(723, '200001250', 'LEAFLET RISEK CAPS RANGE (UNFOLDED)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X35½', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(724, '200001441', 'LEAFLET INSUGET INJ RANGE', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X35½', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(725, '200001453', 'LEAFLET RISEK IV 40MG', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X15', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(726, '200001457', 'LEAFLET NEXUM IV', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(727, '200001809', 'LEAFLET LIPIGET TAB RANGE (UNFOLDED)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(728, '200002271', 'LEAFLET RINCIT TAB 5MG (EXP) (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(729, '200002455', 'LEAFLET FEROTEIN S INJ 100MG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(730, '200002523', 'LEAFLET ESOME IV 40MG (EXP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(731, '200002560', 'LEAFLET ESOME CAPS RANGE (EXP) (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(732, '200002566', 'LEAFLET RISEK CAPS RANGE (EXP) (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(733, '200002577', 'LEAFLET LIPIGET TAB 10&20MG (EXP) (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(734, '200002839', 'LEAFLET LILAC SYP (TJK) (NEW)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(735, '200003168', 'LEAFLET RISEK IV 40MG (EXP)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X15', '10', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(736, '200003346', 'LEAFLET RISEK INSTA GRAN RANGE', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X35½', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(737, '200003372', 'LEAFLET SCICON MR TAB (SCI)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(738, '200003415', 'LEAFLET RISEK IV 40MG TP (TJK)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24½X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(739, '200003489', 'LEAFLET INSUGET INJ RANGE (EXP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(740, '200003775', 'LEAFLET GETZID MR TAB RANGE (EXP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(741, '200003800', 'LEAFLET CO-TRUPRIL TAB 20+12.5MG (TJK)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(742, '200003805', 'LEAFLET ZOLID PLUS TAB RANGE (TJK)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(743, '200003892', 'LEAFLET LIPIGET TAB RANGE (TJK)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(744, '200004157', 'LEAFLET UNIPEG INJ 180MCG/ML', 10, 'LeafLet', '', 'NA', '25X35½/70GM', '25X17½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(745, '200004393', 'LEAFLET DIAMISU INJ RANGE (VIT)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(746, '200004489', 'LEAFLET FEXET TAB 60MG (EXP) (UNFOLDED)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(747, '200004731', 'LEAFLET IZEK IV 40MG (YMN)', 10, 'LeafLet', '', 'NA', '30X40/55GM', '15X20', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(748, '200004934', 'LEAFLET CLARITEK RANGE (VIT) (FOLDED)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X15', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(749, '200004960', 'LEAFLET TRUPRIL TAB RANGE (EXP) (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(750, '200005202', 'LEAFLET LILAC SYP (EXP) (NEW 1)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(751, '200005288', 'LEAFLET TRUPRIL TAB RANGE (SCI) (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(752, '200005429', 'LEAFLET ESOME IV 40MG (TJK)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(753, '200005484', 'LEAFLET INSUGET INJ RANGE (TJK)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(754, '200005625', 'LEAFLET ESOME CAPS RANGE (EXP)(UNFOLDED)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(755, '200005874', 'LEAFLET ORLIFIT CAPS RANGE (EXP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(756, '200005918', 'LEAFLET GETCET TAB 5MG (PHP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(757, '200006053', 'LEAFLET GETZOME INSTA RANGE (NGR)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(758, '200006057', 'LEAFLET GETZOME IV 40MG (NGR)', 10, 'LeafLet', '', 'NA', '30X40/55GM', '15X20', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(759, '200006107', 'LEAFLET STARCOX TAB 60MG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(760, '200006326', 'LEAFLET RISEK IV 40MG (PHP) (NEW)', 10, 'LeafLet', '', 'NA', '30X40/55GM', '15X20', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(761, '200006535', 'LEAFLET LILAC SYP RANGE (PHP) 29-30 (NEW', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(762, '200006662', 'LEAFLET CLARITEK TAB RANGE  (VIT) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(763, '200006668', 'LEAFLET GABICA CAPS RANGE (EXP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(764, '200006669', 'LEAFLET GABICA CAPS RANGE (VIT) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(765, '200006672', 'LEAFLET FEXET TAB RANGE (EXP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(766, '200006677', 'LEAFLET CLARITEK RANGE (EXP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(767, '200006690', 'LEAFLET CYTOPAN TAB RANGE (EXP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(768, '200006697', 'LEAFLET ZOLID PLUS TAB RANGE CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(769, '200006699', 'LEAFLET EMRIX SR CAPS RANGE CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(770, '200006700', 'LEAFLET HCQ TAB 200MG CHG (SUD)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(771, '200006704', 'LEAFLET CYTOPAN TAB RANGE CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(772, '200006705', 'LEAFLET GABICA CAPS RANGE CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(773, '200006707', 'LEAFLET FEXET TAB RANGE CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(774, '200006710', 'LEAFLET HCQ TAB 200MG CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(775, '200006848', 'LEAFLET RISEK CAPS RANGE (PHP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(776, '200006871', 'LEAFLET GETZOME RANGE (NGR(UNFOLD) (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(777, '200006927', 'LEAFLET LIPIGET TAB 10 & 20MG(VIT(UNFOLD', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X15', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(778, '200007078', 'LEAFLET FEXET D TAB 60MG+120MG CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(779, '200007083', 'LEAFLET MASACOL TAB RANGE CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(780, '200007147', 'LEAFLET GONADIL-F CAPS CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(781, '200007150', 'LEAFLET TRUPRIL TAB RANGE (AFG) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(782, '200007158', 'LEAFLET LARINEX TAB CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(783, '200007164', 'LEAFLET CLARITEK RANGE CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(784, '200007170', 'LEAFLET CO-TRUPRIL TAB 20+12.5MG EXP CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(785, '200007174', 'LEAFLET CO-TRUPRIL TAB 20+12.5MG AFG CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(786, '200007191', 'LEAFLET TAMSOLIN CAPS 0.4MG CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(787, '200007209', 'LEAFLET TRUPRIL TAB RANGE (SCI) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(788, '200007212', 'LEAFLET CO-TRUPRIL TAB 20+12.5MG SCI CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(789, '200007229', 'LEAFLET PANSLAY TAB RANGE (SCI) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(790, '200007232', 'LEAFLET CO-TRUPRIL TAB (VIT) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(791, '200007257', 'LEAFLET LARINEX TAB 5MG (EXP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(792, '200007278', 'LEAFLET ALFAGET TAB 0.5MCG TP (EXP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(793, '200007281', 'LEAFLET ORLIFIT CAPS RANGE CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(794, '200007297', 'LEAFLET TAMSOLIN CAPS 0.4MG (PHP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(795, '200007311', 'LEAFLET TRUPRIL TAB RANGE (EXP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(796, '200007314', 'LEAFLET TAMSOLIN CAPS 0.4MG EXP CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(797, '200007328', 'LEAFLET SCITIN TAB RANGE (SCI) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(798, '200007343', 'LEAFLET NERVON RANGE (EXP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(799, '200007359', 'LEAFLET CARTIGEN TAB 500MG+400MG CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(800, '200007362', 'LEAFLET ORLIFIT CAPS RANGE (EXP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(801, '200007400', 'LEAFLET FEXET TAB RANGE (TJK) CHG', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(802, '200007401', 'LEAFLET CLARIGET RANGE (TJK) CHG', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(803, '200007405', 'LEAFLET ZOLID PLUS TAB RANGE (PHP) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(804, '200007406', 'LEAFLET FEXET TAB 120MG (NGR) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(805, '200007496', 'LEAFLET FEXET TAB 60MG (VIT) (UNFOLD(NEW', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(806, '200007499', 'LEAFLET CIPESTA XR TAB RANGE (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(807, '200007533', 'LEAFLET RISEK INSTA GRAN  RANGE (PHP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(808, '200007567', 'LEAFLET CLARIGET GRAN (KAZ)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(809, '200007568', 'LEAFLET CLARIGET TAB (KAZ) CHG', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(810, '200007606', 'LEAFLET FEXET TAB 60MG (NEW 1) (UNFOLDED', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(811, '200007667', 'LEAFLET XALGETZ CAPS 0.4MG (VIT) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(812, '200007734', 'LEAFLET GETZOME CAPS RANGE (VIT(UNF(NEW1', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(813, '200007746', 'LEAFLET CARSAMIN TAB (KAZ) CHG', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(814, '200007749', 'LEAFLET LILAC SYP (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(815, '200007826', 'LEAFLET ORLIFIT CAPS (TJK) CHG', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(816, '200007875', 'LEAFLET FEXET TAB RANGE (KAZ(UNFOLD (NEW', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(817, '200007878', 'LEAFLET FEXET TAB RANGE (KAZ) CHG (NEW)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(818, '200007935', 'LEAFLET ESOME IV 40MG (KAZ) (NEW)', 10, 'LeafLet', '', 'NA', '24X30/55GM', '24X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(819, '200007968', 'LEAFLET NEXUM CAPS RANGE (UNFOLD) (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(820, '200007969', 'LEAFLET RISEK CAPS RANGE (UNFOLD) (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X35½', '16', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(821, '200007987', 'LEAFLET NERVON RANGE CHG 1', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(822, '200008020', 'LEAFLET DIAMISU INJ RANGE (VIT) (NEW)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(823, '200008322', 'LEAFLET VILGET TAB', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(824, '200008329', 'LEAFLET VILGET-M TAB RANGE', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(825, '200008457', 'LEAFLET UNIPEG-V INJ 180MCG/1ML', 10, 'LeafLet', '', 'NA', '25X35½/70GM', '25X12½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(826, '200008462', 'LEAFLET GABICA CAPS RANGE (ARB) (SUD)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(827, '200008475', 'LEAFLET HCQ TAB 200MG CHG (SUD)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(828, '200008570', 'LEAFLET TAMSOLIN CAPS 0.4MG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(829, '200008660', 'LEAFLET PANTRA PLUS TAB', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(830, '200008690', 'LEAFLET FEXET D TAB 60MG+120MG (EXP(CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(831, '200008812', 'LEAFLET ORLIFIT CAPS RANGE EXP CHG VER-1', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(832, '200008843', 'LEAFLET GABICA CAPS RANGE(EXP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(833, '200008885', 'LEAFLET GABICA CAPS (UNFOLDED)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(834, '200008914', 'LEAFLET FEXET TAB RANGE (EXP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(835, '200009169', 'LEAFLET FEXET TAB RANGE (UNFOLDED) (EXP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01');
INSERT INTO `item` (`id`, `Item_Code`, `Description`, `Client`, `Work_Type`, `features`, `type`, `size`, `print_sheet_size`, `ups`, `colors`, `spl1`, `spl2`, `spl3`, `spl4`, `gsm`, `conversion`, `user_id`, `created_at`) VALUES
(836, '200009173', 'LEAFLET VILGET-M TAB RANGE (UNFOLDED)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(837, '200009218', 'LEAFLET GABICA CAPS RANGE (VIT) CHG', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(838, '200009301', 'LEAFLET PRAZ TAB RANGE (UNFOLDED)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(839, '200009314', 'LEAFLET ESOME CAPS RANGE (EXP)(UNFOLDED)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(840, '200009321', 'LEAFLET COVA TAB RANGE', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(841, '200009334', 'LEAFLET COVA-H TAB RANGE', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(842, '200009355', 'LEAFLET STARCOX TAB RANGE', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(843, '200009358', 'LEAFLET ESOME CAPS RANGE (EXP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(844, '200009550', 'LEAFLET VILGET TAB (EXP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(845, '200009555', 'LEAFLET VILGET-M TAB RANGE (EXP(UNFOLDED', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(846, '200009595', 'LEAFLET XALGETZ CAPS 0.4MG (SUD)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(847, '200009617', 'LEAFLET RIVAXO TAB RANGE', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(848, '200009967', 'LEAFLET VILGET-M TAB RANGE (SUD(UNFOLDED', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(849, '200009981', 'LEAFLET LIPIGET TAB RANGE (EXP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(850, '200009999', 'LEAFLET RAZODEX CAPS RANGE', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(851, '200010026', 'LEAFLET RISEK CAPS RANGE (PHP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(852, '200010029', 'LEAFLET TAMSOLIN CAPS 0.4MG (PHP)', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(853, '200010121', 'LEAFLET VILGET-M TAB RANGE', 10, 'LeafLet', '', 'NA', '24½X35½/55GM', '24½X17½', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 07:40:01'),
(1024, '6020', 'C/N ARTEPIP CAPS 40MG/320MG 1X1`S P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1025, '5976', 'C/N ARTEPIP CAPS 40MG/320MG 1X8`S T/P', 17, 'Package Carton', 'Select Features', '', '22X36/300GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1026, '5981', 'C/N ARYSA CAPS 20MG 1X2`S P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1027, '5980', 'C/N ARYSA CAPS 20MG 2X7`S', 17, 'Package Carton', 'Select Features', '', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1028, '-', 'C/N ARYSA CAPS 40MG 1X2`S P/S', 17, 'Package Carton', 'Select Features', '', '21X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:23:32'),
(1029, 'PM-PRC-0543R1 QAR-P160700293', 'C/N ARYSA CAPS 40MG 2X7`S', 17, 'Package Carton', 'Select Features', '', '41X33/300GM', '20½X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1030, '5775', 'C/N ASCOF COUGH DROPS 20ML', 17, 'Package Carton', 'Select Features', '', '31X50/300GM', '15½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1031, '5780', 'C/N ASCOF COUGH DROPS 5ML P/S', 17, 'Package Carton', 'Select Features', '', '40X31/250GM', '13.33X15½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1032, '5779', 'C/N ASCOF COUGH SYRUP 120ML', 17, 'Package Carton', 'Select Features', '', '31X50/300GM', '15½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1033, '5782', 'C/N ASCOF COUGH SYRUP 30ML P/S', 17, 'Package Carton', 'Select Features', '', '40X31/250GM', '13.33X15½', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1034, '5786', 'C/N DECLAR TAB 60MG 2X14`S', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1035, '5785', 'C/N EPLIPSA INJ 500MG/5ML 1`S T/P', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '21X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1036, '5734', 'C/N EPLIPSA TAB 250MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '42X30/300GM', '21X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1037, '5733', 'C/N EPLIPSA TAB 500MG 1X1`S P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1038, '5737', 'C/N EPLIPSA TAB 500MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1039, '5736', 'C/N ETALOT SYRUP 120ML', 17, 'Package Carton', 'Select Features', '', '46X27/300GM', '15.33X13½', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1040, '6010', 'C/N ETALOT SYRUP 30ML P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '14X15', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1041, '6009', 'C/N G-HELIX TAB 1MG 2X10`S', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1042, '-', 'C/N G-HELIX TAB 2MG 1X2`S P/S', 17, 'Package Carton', 'Select Features', '', '36X50/250GM', '18X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:23:36'),
(1043, '6012', 'C/N G-HELIX TAB 2MG 2X10`S', 17, 'Package Carton', 'Select Features', '', '60X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1044, '-', 'C/N G-HELIX TAB 3MG 2X10`S', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:23:41'),
(1045, '-', 'C/N G-HELIX TAB 4MG 1X2`S P/S', 17, 'Package Carton', 'Select Features', '', '50X30/250GM', '16.66X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:23:44'),
(1046, '-', 'C/N G-HELIX TAB 4MG 2X10`S', 17, 'Package Carton', 'Select Features', '', '40X28/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:23:48'),
(1047, '-', 'C/N HELIXA TAB 10MG 1X1`S P/S', 17, 'Package Carton', 'Select Features', '', '36X50/250GM', '18X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:23:52'),
(1048, '5883', 'C/N HELIXA TAB 10MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1049, '5882', 'C/N HELIXA TAB 20MG 1X1`S P/S', 17, 'Package Carton', 'Select Features', '', '36X50/250GM', '18X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1050, '-', 'C/N HELIXA TAB 20MG 1X14`S T/P', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:23:58'),
(1051, '5973', 'C/N HIFEN-X TAB 300MG 1X2`S P/S', 17, 'Package Carton', 'Select Features', '', '21X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1052, '5970', 'C/N HIFEN-X TAB 300MG 3X10`S', 17, 'Package Carton', 'Select Features', '', '22X36/300GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1053, '5969', 'C/N HIFEN-X TAB 300MG 3X10`S (G.O.P)', 17, 'Package Carton', 'Select Features', '', '23X36/250GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1054, '5803', 'C/N HIFEN-X TAB 400MG 3X10`S', 17, 'Package Carton', 'Select Features', '', '44X36/300GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1055, '5802', 'C/N HIFEN-X TAB 400MG 3X10`S (G.O.P)', 17, 'Package Carton', 'Select Features', '', '23X36/250GM', '22X18', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1056, '5743', 'C/N HIMUTY TAB 1X1`S P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1057, '5744', 'C/N HIMUTY TAB 3X10`S T/P', 17, 'Package Carton', 'Select Features', '', '36X50/300GM', '18X10', '2', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1058, '5746', 'C/N HIPRO TAB 500MG 1X10`S (AJK HEALTH DEPARTMENT) (GREEN)', 17, 'Package Carton', 'Select Features', '', '40X45/250GM', '20X15', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1059, '5740', 'C/N IRONAL-S INJ 100MG 5X1`S P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1060, '5578', 'C/N IRONAL-S INJ 100MG/5MLX5`S', 17, 'Package Carton', 'Select Features', '', '50X40/300GM', '16.66X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1061, '5577', 'C/N IRONAL-S INJ 5X5ML (G.O.P)', 17, 'Package Carton', 'Select Features', '', '50X40/300GM', '16.66X20', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1062, '5635', 'C/N JUVIA-M PLUS TAB 50MG/100MG T/P', 17, 'Package Carton', 'Select Features', '', '44X38/300GM', '22X19', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1063, '6000', 'C/N JUVIA-M PLUS TAB 50MG/500MG P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1064, '6002', 'C/N JUVIA-M PLUS TAB 50MG/500MG T/P', 17, 'Package Carton', 'Select Features', '', '40X30/300GM', '20X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1065, '6000', 'C/N LEPRIDE TAB 50MG 1X2`S P/S', 17, 'Package Carton', 'Select Features', '', '21X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1066, '-', 'C/N LEPRIDE TAB 50MG 2X10`S', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:24:06'),
(1067, '6007', 'C/N LOSTER TAB 10MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1068, '6006', 'C/N LOSTER TAB 10MG 1X2`S P/S', 17, 'Package Carton', 'Select Features', '', '36X50/250GM', '18X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1069, '5757', 'C/N LOSTER TAB 20MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1070, '5754', 'C/N LOSTER TAB 5MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X42/300GM', '20X14', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1071, '5791', 'C/N METHER INJ 40MG/1ML 1`S P/S', 17, 'Package Carton', 'Select Features', '', '36X50/250GM', '18X10', '12', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1072, '5794', 'C/N METHER INJ 40MG/1ML 10`S', 17, 'Package Carton', 'Select Features', '', '44X31/300GM', '22X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1073, '5789', 'C/N METHER PLUS TAB 1X2`S P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1074, '5788', 'C/N NITAZIDE SUSP 100MG/5ML', 17, 'Package Carton', 'Select Features', '', '37X50/300GM', '', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1075, '5791', 'C/N NITAZIDE SUSP 100MG/5ML 15ML P/S', 17, 'Package Carton', 'Select Features', '', '37X50/300GM', '12X16.66', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1076, '5868', 'C/N NITAZIDE SUSP 100MG/5ML 30ML', 17, 'Package Carton', 'Select Features', '', '37X50/300GM', '12X16.66', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1077, '5869', 'C/N NITAZIDE SUSP 100MG/5ML 60ML', 17, 'Package Carton', 'Select Features', '', '30X50/300GM', '15X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1078, '5872', 'C/N NITAZIDE TAB 500MG 1X1`S P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1079, '-', 'C/N NITAZIDE TAB 500MG 2X10`S', 17, 'Package Carton', 'Select Features', '', '40X32/300GM', '20X16', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:24:13'),
(1080, '5875', 'C/N PROSARTAN TAB 16MG 2X14`S', 17, 'Package Carton', 'Select Features', '', '60X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1081, '5878', 'C/N PROSARTAN TAB 8MG 1X14`S', 17, 'Package Carton', 'Select Features', '', '40X28/300GM', '20X14', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1082, '-', 'C/N Q-PAR TAB 100MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X28/300GM', '20X14', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:24:20'),
(1083, '5942', 'C/N Q-PAR TAB 200MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '21X30/300GM', '21X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1084, '5941', 'C/N Q-PAR TAB 25MG 1X1`S P/S', 17, 'Package Carton', 'Select Features', '', '36X50/250GM', '18X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1085, 'PM-PRC-0544R1', 'C/N Q-PAR TAB 25MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1086, 'QAR-P160700296', 'C/N Q-PER TAB 100MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1087, 'PM-PRC-0545R1', 'C/N RECEPT TAB 1MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X30/250GM', '20X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1088, 'QAR-P160700297', 'C/N RECEPT TAB 1MG 1X2`S P/S', 17, 'Package Carton', 'Select Features', '', '36X50/250GM', '18X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1089, '5908', 'C/N RECEPT TAB 2MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X30/250GM', '20X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1090, '5907', 'C/N RECEPT TAB 2MG 1X10`S (G.O.P) (GREEN)', 17, 'Package Carton', 'Select Features', '', '40X32/250GM', '20X10.66', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1091, '5907', 'C/N RECEPT TAB 3MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X30/250GM', '20X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1092, '5912', 'C/N RECEPT TAB 4MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X30/250GM', '20X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1093, '5929', 'C/N RECEPT TAB 4MG 1X10`S (G.O.P) (GREEN)', 17, 'Package Carton', 'Select Features', '', '40X32/250GM', '20X10', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1094, '-', 'C/N SOLCINA TAB 5MG 1X1`S P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:24:26'),
(1095, '5927', 'C/N SOLCINA TAB 5MG 1X10`S', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1096, '5926', 'C/N TUSCOLIN COUGH SYRUP 120ML', 17, 'Package Carton', 'Select Features', '', '31X50/300GM', '15½X25', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1097, '5922', 'C/N TUSCOLIN COUGH SYRUP 30ML P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '14X15', '4', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1098, '-', 'C/N ULORA TAB 40MG P/S', 17, 'Package Carton', 'Select Features', '', '21X45/250GM', '21X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:24:36'),
(1099, '5923', 'C/N ULORA TAB 40MG T/P', 17, 'Package Carton', 'Select Features', '', '40X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1100, '5922', 'C/N ULORA TAB 40MG T/P', 17, 'Package Carton', 'Select Features', '', '60X29/300GM', '20X14½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '0000-00-00 00:00:00'),
(1101, '-', 'C/N ULORA TAB 80MG P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:24:42'),
(1102, '-', 'C/N VALSAR-M TAB 10MG+160MG 2X7`S', 17, 'Package Carton', 'Select Features', '', '42X30/300GM', '21X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:24:45'),
(1103, '-', 'C/N VALSAR-M TAB 5MG+160MG 14`S (G.O.P)', 17, 'Package Carton', 'Select Features', '', '44X33/250GM', '22X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:24:49'),
(1104, '-', 'C/N VALSAR-M TAB 5MG+160MG 1X1`S P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:24:53'),
(1105, '-', 'C/N VALSAR-M TAB 5MG+160MG 2X7`S', 17, 'Package Carton', 'Select Features', '', '44X30/300GM', '22X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:24:56'),
(1106, '-', 'C/N VALSAR-M TAB 5MG+180MG 2X7`S', 17, 'Package Carton', 'Select Features', '', '44X30/300GM', '22X15½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:25:01'),
(1107, '-', 'C/N VALSAR-M TAB 5MG+80MG (G.O.P)', 17, 'Package Carton', 'Select Features', '', '44X33/250GM', '22X16½', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:25:04'),
(1108, '-', 'C/N VALSAR-M TAB 5MG+80MG 1X1`S P/S', 17, 'Package Carton', 'Select Features', '', '42X45/250GM', '20½X11¼', '8', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:25:07'),
(1109, '-', 'C/N VALSAR-M TAB 5MG+850MG 2X7`S', 17, 'Package Carton', 'Select Features', '', '42X30/300GM', '21X15', '6', 'Black', '', '', '', '', 'NA', 'NA', 2, '2018-09-11 08:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `label_cutting`
--

CREATE TABLE `label_cutting` (
  `id` int(11) NOT NULL,
  `WO_no` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `Job_Description` varchar(250) NOT NULL,
  `machine_Name` varchar(250) NOT NULL,
  `machine` varchar(250) NOT NULL,
  `po_no` int(11) NOT NULL,
  `Planned_qty` int(11) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `assistant` varchar(100) NOT NULL,
  `paper_size` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `conversion` varchar(100) NOT NULL,
  `machine_cleaning` varchar(10) NOT NULL,
  `size_set` varchar(10) NOT NULL,
  `start_date` varchar(250) NOT NULL,
  `end_date` varchar(250) NOT NULL,
  `total_production` varchar(100) NOT NULL,
  `waste` varchar(100) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `packers_name` varchar(250) NOT NULL,
  `master_carton` varchar(250) NOT NULL,
  `weight` varchar(250) NOT NULL,
  `packing_Size` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `label_cutting`
--

INSERT INTO `label_cutting` (`id`, `WO_no`, `plane_id`, `flow_id`, `shift`, `Job_Description`, `machine_Name`, `machine`, `po_no`, `Planned_qty`, `operator`, `assistant`, `paper_size`, `quantity`, `conversion`, `machine_cleaning`, `size_set`, `start_date`, `end_date`, `total_production`, `waste`, `remarks`, `packers_name`, `master_carton`, `weight`, `packing_Size`, `user_id`, `created_at`) VALUES
(10, 54, 51, 194, 'G', 'C/N BAYDAL SYRUP 60ML T/P', '', '', 0, 0, 'cc', 'ddsfd', 'ccc', '23123', 'fcc', 'Yes', 'Yes', '', '', 'cc', 'cc', 'cc', 'cc', '33', 'cc', 'ds', 2, '2018-09-11 11:37:18'),
(11, 58, 53, 202, 'G', 'C/N BAYDAL SYRUP 60ML T/P', '', '', 0, 0, 'dffdd', 'dfddf', 'fdfdfd', '3232', '3233', 'Yes', 'Yes', '', '', '333', '333', '3333', '33', '332', '22vv', 'ee222', 2, '2018-09-12 05:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `leaflet_cutting`
--

CREATE TABLE `leaflet_cutting` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `assistant` varchar(100) NOT NULL,
  `paper` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `conversion` varchar(100) NOT NULL,
  `cleaning` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `production` varchar(100) NOT NULL,
  `waste` varchar(100) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `line_clearance`
--

CREATE TABLE `line_clearance` (
  `id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `previous` varchar(100) NOT NULL,
  `material` varchar(10) NOT NULL,
  `material_remarks` varchar(255) NOT NULL,
  `printed` varchar(10) NOT NULL,
  `printed_remarks` varchar(255) NOT NULL,
  `document` varchar(10) NOT NULL,
  `document_remarks` varchar(255) NOT NULL,
  `waste` varchar(10) NOT NULL,
  `waste_remarks` varchar(255) NOT NULL,
  `oil` varchar(10) NOT NULL,
  `oil_remarks` varchar(255) NOT NULL,
  `clean` varchar(10) NOT NULL,
  `clean_remarks` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id` int(11) UNSIGNED NOT NULL,
  `machine_Name` tinytext,
  `detail` text,
  `feature` varchar(100) DEFAULT NULL,
  `flows` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`id`, `machine_Name`, `detail`, `feature`, `flows`, `user_id`, `created_at`) VALUES
(1, 'CM1', 'Cutting Machine', NULL, '4', 2, '2018-04-07 07:15:46'),
(2, 'CM2', 'Cutting Machine', NULL, '4', 2, '2018-04-07 07:15:57'),
(3, 'CM3', 'Cutting Machine', NULL, '4', 2, '2018-04-07 07:16:16'),
(4, 'FM1', 'Film Making', '14', '5', 2, '2018-04-07 07:17:34'),
(5, 'FM2', 'Film Making', NULL, '5', 2, '2018-04-07 07:17:45'),
(6, 'PM1', 'Plate Making', NULL, '6', 2, '2018-04-07 07:19:33'),
(7, 'PM2', 'Plate Making', NULL, '6', 2, '2018-04-07 07:19:59'),
(8, 'PR1', 'Printing Machine', NULL, '7', 2, '2018-04-07 07:20:24'),
(9, 'PR2', 'Printing Machine', '15', '7', 2, '2018-04-07 07:20:44'),
(10, 'LC1', 'Leaflet Cutting', NULL, '8', 2, '2018-04-07 07:25:31'),
(11, 'LC2', 'Leaflet Cutting', NULL, '8', 2, '2018-04-07 07:25:50'),
(12, 'UV1', 'UV Printing', '6', '9', 2, '2018-04-07 07:26:15'),
(13, 'UV2', 'UV Printing', '6', '9', 2, '2018-04-07 07:26:29'),
(14, 'LB1', 'Label Cutting', '18', '11', 2, '2018-04-07 07:27:03'),
(15, 'LB2', 'Label Cutting', '18', '11', 2, '2018-04-07 07:33:12'),
(16, 'FD1', 'Folding Machine', '20', '12', 2, '2018-04-07 07:33:38'),
(17, 'FD2', 'Folding Machine', '20', '12', 2, '2018-04-07 07:34:01'),
(18, 'DC1', 'Die cutting', '12', '13', 2, '2018-04-07 07:34:32'),
(19, 'DC2', 'Die Cutting', '12', '13', 2, '2018-04-07 07:34:58'),
(20, 'PC1', 'Packing Machine', '21', '14', 2, '2018-04-07 07:35:39'),
(21, 'PC2', 'Packing Machine', '21', '14', 2, '2018-04-07 07:35:57'),
(22, 'PS1', 'Pasting Machine', '16', '15', 2, '2018-04-07 07:36:20'),
(23, 'PS2', 'Pasting Machine', '16', '15', 2, '2018-04-07 07:36:38'),
(24, 'DP1', 'Dispatch', '21', '16', 2, '2018-04-07 07:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `main_name` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `main_name`, `sort`, `icon`, `url`, `parent_id`, `user_id`) VALUES
(2, 'Dashboard', 'dashboard', 1, 'home', '', 0, 4),
(3, 'Modules', 'modules', 4, 'home', 'modules', 65, 4),
(5, 'Role/Permission', 'role', 2, 'home', 'role', 65, 4),
(7, 'Users', 'user', 3, 'perm_identity', 'users', 0, 2),
(21, 'Orders', 'orders', 5, 'work', 'orders', 0, 2),
(25, 'Work Orders', 'work_orders', 6, 'work', 'work_orders', 0, 2),
(27, 'All Orders', 'all_orders', 8, 'work', 'all_orders', 0, 2),
(33, 'Machines', 'machines', 10, '<i class="fa fa-cogs"></i>', 'machines', 0, 2),
(34, 'Features', 'feature', 8, 'extension', 'feature', 0, 2),
(35, 'Clients', 'clients', 11, 'people', 'clients', 0, 2),
(36, 'Production Plan', 'production_plan', 12, 'assignment', 'production_plan', 0, 2),
(37, 'Item', 'item', 5, 'list', 'item', 0, 2),
(38, 'Development', 'development', 8, 'code', 'development', 60, 2),
(39, 'Design', 'design', 9, 'brush', 'design', 60, 2),
(40, 'Profing', 'printing', 10, 'home', 'printing', 60, 2),
(41, 'Approval ', 'approval ', 11, 'home', 'approval ', 60, 2),
(42, 'Printing', 'printing_plane', 13, 'print', 'printing_plane', 0, 2),
(43, 'Die Cutting', 'die_cutting', 13, 'content_cut', 'die_cutting', 0, 2),
(44, 'Pasting', 'pasting', 14, 'content_paste', 'pasting', 0, 2),
(46, 'Flows', 'flows', 5, 'show_chart', 'flows', 0, 2),
(47, 'Cutting', 'cutting', 14, 'content_cut', 'cutting', 0, 2),
(48, 'Film Making', 'film_making', 14, 'local_movies', 'film_making', 0, 2),
(49, 'Plate Making', 'plate_making', 14, 'build', 'plate_making', 0, 2),
(51, 'Leaflet Cutting', 'leaflet_cutting', 14, 'content_cut', 'leaflet_cutting', 0, 2),
(52, 'UV Printing', 'uv_printing', 14, '<i class="fa fa-first-order" aria-hidden="true"></i>', 'uv_printing', 0, 2),
(53, 'Sorting', 'sorting', 14, 'sort', 'sorting', 0, 2),
(54, 'Label Cutting', 'label_cutting', 14, 'content_cut', 'label_cutting', 0, 2),
(55, 'Folding', 'folding', 14, 'folder', 'folding', 0, 2),
(56, 'Packing', 'packing', 14, 'layers', 'packing', 0, 2),
(57, 'Dispatch', 'dispatch', 14, 'exit_to_app', 'dispatch', 0, 2),
(58, 'Machine Utilization', 'machine_utilization', 10, 'insert_chart', 'machine_utilization', 0, 2),
(59, 'QC', 'qc', 6, 'playlist_add_check', 'qc', 0, 2),
(60, 'Pre Process ', 'pre_process', 7, '<i class="fa fa-spinner" aria-hidden="true"></i>', '#', 0, 2),
(61, 'Inventory', 'inventory', 5, '<i class="fa fa fa-cube" aria-hidden="true"></i>', '#', 0, 2),
(62, 'Category', 'category', 6, 'home', 'category', 61, 2),
(63, 'Sub Category', 'sub_category', 7, 'home', 'sub_category', 61, 2),
(64, 'Product', 'product', 1, 'home', 'product', 61, 2),
(65, 'Setting', 'setting', 2, 'settings', '#', 0, 2),
(67, 'Store', 'store', 6, 'store', '#', 0, 2),
(68, 'Vendor', 'vednor', 2, 'home', 'vendor', 61, 2),
(69, 'Stock', 'stock', 1, 'home', 'stock', 67, 2),
(70, 'Purchases', 'purchases', 1, 'home', 'purchases', 67, 2),
(71, 'Quantity Adjustments', 'quantity_adjustments', 3, 'home', 'quantity_adjustments', 67, 2),
(72, 'Sub Store', 'sub_store', 4, 'home', 'sub_store', 67, 2),
(73, 'Product Release', 'product_release', 5, 'home', 'product_release', 67, 2),
(74, 'Store Stock', 'store_stock', 6, 'home', 'store_stock', 67, 2),
(75, 'Requisition', 'requisition', 7, 'home', 'requisition', 67, 2),
(76, 'Reporting', 'reporting', 4, 'playlist_add_check', '#', 0, 2),
(77, 'Jobs', 'jobs', 1, 'home', 'jobs', 76, 2),
(78, 'Machines Report', 'machines_report', 2, 'home', 'machines_report', 76, 2),
(79, 'Left Over Inventory', 'over_inventory', 9, 'home', 'over_inventory', 67, 2),
(80, 'Job Inventory Report', 'job_inventory_report', 3, 'home', 'job_inventory_report', 76, 2),
(81, 'Client Inventory Report', 'client_inventory_report', 4, 'home', 'client_inventory_report', 76, 2),
(82, 'Machine Down Time', 'machine_down_time', 11, 'insert_chart', 'machine_down_time', 0, 2),
(83, 'Client Order Report', 'client_order_report', 5, 'home', 'client_order_report', 76, 2),
(84, 'Daily Dispatch', 'daily_dispatch', 6, 'home', 'daily_dispatch', 76, 2),
(88, 'Stripping Report', 'stripping_report', 14, 'home', 'stripping_report', 0, 2),
(89, 'Flexo Label Machine', 'flexo_label_machine', 15, 'filter_list', 'flexo_label_machine', 0, 2),
(90, 'Coating', 'coating_plane', 15, 'book', 'coating_plane', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules_fileds`
--

CREATE TABLE `modules_fileds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `filed_type` varchar(100) NOT NULL,
  `options` varchar(255) NOT NULL,
  `filed_multiple` varchar(10) DEFAULT 'no',
  `length` int(11) NOT NULL,
  `required` int(11) NOT NULL DEFAULT '0',
  `module_id` int(11) NOT NULL,
  `is_relation` int(11) NOT NULL,
  `relation_column` varchar(100) DEFAULT NULL,
  `relation_table` varchar(100) DEFAULT NULL,
  `value_column` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules_fileds`
--

INSERT INTO `modules_fileds` (`id`, `name`, `type`, `filed_type`, `options`, `filed_multiple`, `length`, `required`, `module_id`, `is_relation`, `relation_column`, `relation_table`, `value_column`) VALUES
(0, 'name', 'VARCHAR', 'input', '', 'no', 250, 0, 30, 0, NULL, NULL, NULL),
(0, 'machine_Name', 'TEXT', 'textarea', '', 'no', 250, 0, 32, 0, NULL, NULL, NULL),
(0, 'detail', 'TEXT', 'textarea', '', 'no', 500, 0, 32, 0, NULL, NULL, NULL),
(0, 'features', 'VARCHAR', 'select', '', 'no', 250, 0, 32, 0, NULL, NULL, NULL),
(0, 'machine_Name', 'VARCHAR', 'input', '', 'no', 250, 0, 33, 0, NULL, NULL, NULL),
(0, 'detail', 'TEXT', 'textarea', '', 'no', 500, 0, 33, 0, NULL, NULL, NULL),
(0, 'feature', 'INT', 'input', '', 'no', 11, 0, 33, 1, 'id', 'feature', 'name'),
(0, 'client_Name', 'VARCHAR', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Detail', 'TEXT', 'textarea', '', 'no', 500, 0, 35, 0, NULL, NULL, NULL),
(0, 'order_Margin', 'INT', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Contact_Person', 'VARCHAR', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Contact_Number', 'VARCHAR', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Email', 'VARCHAR', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Address', 'TEXT', 'textarea', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Company_Name', 'VARCHAR', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 20, 0, 36, 0, NULL, NULL, NULL),
(0, 'WO_no', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 1, 'id', 'work_orders', 'Description,Item_Code'),
(0, 'MIS_no', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Job_Description', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Board_Name', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Gsm', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Board_Size', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Quantity', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Conversion', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Planned_sheet_Size', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Balanced_Offcut_Size', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Offcut_Quantity', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'PO_Qty', 'INT', 'input', '', 'no', 11, 0, 36, 0, NULL, NULL, NULL),
(0, 'Planned_qty_sheets', 'INT', 'input', '', 'no', 11, 0, 36, 0, NULL, NULL, NULL),
(0, 'Ups', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Planned_qty', 'INT', 'input', '', 'no', 11, 0, 36, 0, NULL, NULL, NULL),
(0, 'Item_Code', 'VARCHAR', 'input', '', 'no', 100, 1, 37, 0, NULL, NULL, NULL),
(0, 'Description', 'VARCHAR', 'input', '', 'no', 255, 1, 37, 0, NULL, NULL, NULL),
(0, 'Client', 'INT', 'input', '', 'no', 11, 1, 37, 1, 'id', 'clients', 'client_Name'),
(0, 'Work_Type', 'VARCHAR', 'select', 'Package Carton,LeafLet,Labels,Sticker Labels', 'no', 100, 1, 37, 0, NULL, NULL, NULL),
(0, 'Name', 'VARCHAR', 'input', '', 'no', 100, 1, 46, 0, NULL, NULL, NULL),
(0, 'Name', 'VARCHAR', 'input', '', 'no', 245, 1, 62, 0, NULL, NULL, NULL),
(0, 'Name', 'VARCHAR', 'input', '', 'no', 245, 1, 63, 0, NULL, NULL, NULL),
(0, 'Parent_Category', 'INT', 'input', '', 'no', 11, 1, 63, 1, 'id', 'category', 'Name'),
(0, 'Product_Name', 'VARCHAR', 'input', '', 'no', 255, 1, 64, 0, NULL, NULL, NULL),
(0, 'Product_Code', 'VARCHAR', 'input', '', 'no', 100, 1, 64, 0, NULL, NULL, NULL),
(0, 'Barcode', 'VARCHAR', 'input', '', 'no', 100, 1, 64, 0, NULL, NULL, NULL),
(0, 'Category', 'INT', 'input', '', 'no', 11, 1, 64, 1, 'id', 'category', 'Name'),
(0, 'Sub_Category', 'INT', 'input', '', 'no', 11, 0, 64, 1, 'id', 'sub_category', 'Name'),
(0, 'Product_Unit', 'VARCHAR', 'input', '', 'no', 100, 1, 64, 0, NULL, NULL, NULL),
(0, 'Product_Cost', 'VARCHAR', 'input', '', 'no', 100, 0, 64, 0, NULL, NULL, NULL),
(0, 'Product_Price', 'VARCHAR', 'input', '', 'no', 100, 1, 64, 0, NULL, NULL, NULL),
(0, 'Product_Image', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 'no', 255, 1, 64, 0, NULL, NULL, NULL),
(0, 'Product_Details', 'TEXT', 'textarea', '', 'no', 500, 0, 64, 0, NULL, NULL, NULL),
(0, 'Product_details_for_invoice', 'TEXT', 'textarea', '', 'no', 500, 0, 64, 0, NULL, NULL, NULL),
(0, 'Product', 'INT', 'input', '', 'no', 11, 1, 66, 1, 'id', 'product', 'Product_Name,Product_Code'),
(0, 'Quantity', 'INT', 'input', '', 'no', 100, 1, 66, 0, NULL, NULL, NULL),
(0, 'Name', 'VARCHAR', 'input', '', 'no', 100, 1, 68, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Reference_No', 'INT', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Status', 'VARCHAR', 'select', 'Received,Pending,Ordered', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Attach_Document', 'VARCHAR', 'file', 'doc,docs,pdf,xlx,xlsx', 'no', 255, 0, 70, 0, NULL, NULL, NULL),
(0, 'Supplier', 'INT', 'input', '', 'no', 11, 1, 70, 1, 'id', 'vednor', 'Name'),
(0, 'Order_Tax', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Discount_(5/5%)', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Shipping', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Payment_Term', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Note', 'TEXT', 'textarea', '', 'no', 500, 0, 70, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Reference_No', 'INT', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Status', 'VARCHAR', 'select', 'Received,Pending,Ordered', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Attach_Document', 'VARCHAR', 'file', 'doc,docs,pdf,xlx,xlsx', 'no', 255, 0, 70, 0, NULL, NULL, NULL),
(0, 'Supplier', 'INT', 'input', '', 'no', 11, 1, 70, 1, 'id', 'vednor', 'Name'),
(0, 'Order_Tax', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Discount_(5/5%)', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Shipping', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Payment_Term', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Note', 'TEXT', 'textarea', '', 'no', 500, 0, 70, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Reference_No', 'INT', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Status', 'VARCHAR', 'select', 'Received,Pending,Ordered', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Attach_Document', 'VARCHAR', 'file', 'doc,docs,pdf,xlx,xlsx', 'no', 255, 0, 70, 0, NULL, NULL, NULL),
(0, 'Supplier', 'INT', 'input', '', 'no', 11, 1, 70, 1, 'id', 'vednor', 'Name'),
(0, 'Order_Tax', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Discount_(5/5%)', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Shipping', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Payment_Term', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Note', 'TEXT', 'textarea', '', 'no', 500, 0, 70, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 100, 1, 71, 0, NULL, NULL, NULL),
(0, 'Type', 'VARCHAR', 'select', 'Addition,Subtraction', 'no', 100, 1, 71, 0, NULL, NULL, NULL),
(0, 'Quantity', 'INT', 'input', '', 'no', 100, 1, 71, 0, NULL, NULL, NULL),
(0, 'Note', 'TEXT', 'textarea', '', 'no', 500, 1, 71, 0, NULL, NULL, NULL),
(0, 'Product', 'INT', 'input', '', 'no', 100, 1, 71, 1, 'id', 'product', 'Product_Name'),
(0, 'Name', 'VARCHAR', 'input', '', 'no', 100, 1, 72, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 100, 1, 73, 0, NULL, NULL, NULL),
(0, 'Reference_No', 'INT', 'input', '', 'no', 100, 1, 73, 0, NULL, NULL, NULL),
(0, 'Store', 'INT', 'input', '', 'no', 11, 1, 73, 1, 'id', 'sub_store', 'Name'),
(0, 'Status', 'VARCHAR', 'select', 'Pending,complete', 'no', 100, 1, 73, 0, NULL, NULL, NULL),
(0, 'Note', 'TEXT', 'textarea', '', 'no', 500, 0, 73, 0, NULL, NULL, NULL),
(0, 'c1', 'VARCHAR', 'input', '', 'no', 255, 1, 85, 0, NULL, NULL, NULL),
(0, 'c2', 'VARCHAR', 'textarea', '', 'no', 255, 1, 85, 0, NULL, NULL, NULL),
(0, 'Category_Name', 'INT', 'input', '', 'no', 11, 1, 85, 0, NULL, NULL, NULL),
(0, 'Sub_Category_Name', 'INT', 'input', '', 'no', 23, 1, 85, 0, NULL, NULL, NULL),
(0, 'Category_Name', 'INT', 'input', '', 'no', 11, 1, 85, 0, NULL, NULL, NULL),
(0, 'Sub_Category_Name', 'INT', 'input', '', 'no', 23, 1, 85, 0, NULL, NULL, NULL),
(0, 'Category_Name', 'INT', 'input', '', 'no', 11, 1, 85, 0, NULL, NULL, NULL),
(0, 'Sub_Category_Name', 'INT', 'input', '', 'no', 23, 1, 85, 0, NULL, NULL, NULL),
(0, 'Sub_Category_Name', 'INT', 'input', '', 'no', 11, 1, 86, 0, NULL, NULL, NULL),
(0, 'Category_Name', 'INT', 'textarea', '', 'no', 11, 0, 86, 0, NULL, NULL, NULL),
(0, 'report_id', 'INT', 'input', '', 'no', 11, 1, 85, 0, NULL, NULL, NULL),
(0, 'description', 'VARCHAR', 'input', '', 'no', 255, 1, 87, 0, NULL, NULL, NULL),
(0, 'description', 'VARCHAR', 'input', '', 'no', 255, 1, 87, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `non_comfirmity_report`
--

CREATE TABLE `non_comfirmity_report` (
  `id` int(11) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `ncr_no` int(11) NOT NULL,
  `name_of_assessor` varchar(255) NOT NULL,
  `date_of_reporting` varchar(255) NOT NULL,
  `concerned_depatment_person` varchar(255) NOT NULL,
  `location` varchar(250) NOT NULL,
  `non_coformance_category` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `m_r_nominee_sign` varchar(255) NOT NULL,
  `root_cause` varchar(255) NOT NULL,
  `corrective_action` varchar(255) NOT NULL,
  `preventive_action` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `assessor_auditor` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `date_action_completed` varchar(255) NOT NULL,
  `confirmed_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `Date` date DEFAULT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `Designation` varchar(250) DEFAULT NULL,
  `quantity` varchar(250) DEFAULT NULL,
  `Attach_File` varchar(250) DEFAULT NULL,
  `Order_Type` varchar(250) DEFAULT NULL,
  `Remarks` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_flow_start`
--

CREATE TABLE `order_flow_start` (
  `id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_flow_start`
--

INSERT INTO `order_flow_start` (`id`, `flow_id`, `created_at`) VALUES
(82, 129, '2018-09-03 07:43:31'),
(83, 130, '2018-09-03 07:43:45'),
(84, 131, '2018-09-03 07:43:58'),
(85, 132, '2018-09-03 07:44:19'),
(86, 133, '2018-09-03 07:44:44'),
(87, 134, '2018-09-03 07:45:06'),
(88, 135, '2018-09-03 07:51:08'),
(89, 136, '2018-09-03 07:51:34'),
(90, 137, '2018-09-03 07:51:50'),
(91, 138, '2018-09-03 07:52:40'),
(92, 139, '2018-09-03 07:53:06'),
(93, 140, '2018-09-03 07:53:27'),
(94, 142, '2018-09-03 08:59:08'),
(95, 143, '2018-09-03 08:59:19'),
(96, 144, '2018-09-03 08:59:48'),
(97, 148, '2018-09-03 10:48:51'),
(98, 149, '2018-09-03 10:49:17'),
(99, 150, '2018-09-03 10:50:00'),
(100, 151, '2018-09-03 10:50:20'),
(101, 152, '2018-09-03 10:50:35'),
(102, 153, '2018-09-03 10:50:48'),
(103, 159, '2018-09-04 05:51:32'),
(104, 160, '2018-09-04 05:51:49'),
(105, 161, '2018-09-04 05:52:09'),
(106, 162, '2018-09-04 05:52:29'),
(107, 163, '2018-09-04 05:53:00'),
(108, 164, '2018-09-04 05:53:16'),
(109, 169, '2018-09-04 06:24:41'),
(110, 170, '2018-09-04 06:24:53'),
(111, 171, '2018-09-04 06:25:16'),
(112, 172, '2018-09-05 05:08:37'),
(113, 173, '2018-09-05 05:09:31'),
(114, 178, '2018-09-05 05:24:14'),
(115, 179, '2018-09-05 05:24:50'),
(116, 180, '2018-09-05 05:25:26'),
(117, 181, '2018-09-05 05:52:10'),
(118, 182, '2018-09-05 05:53:16'),
(119, 183, '2018-09-05 05:55:53'),
(120, 174, '2018-09-05 06:12:09'),
(121, 184, '2018-09-05 06:35:29'),
(122, 185, '2018-09-05 06:35:43'),
(123, 186, '2018-09-05 06:35:59'),
(124, 187, '2018-09-05 06:36:23'),
(125, 188, '2018-09-05 06:36:42'),
(126, 189, '2018-09-05 06:37:08'),
(127, 190, '2018-09-05 06:37:25'),
(128, 191, '2018-09-11 11:16:02'),
(129, 192, '2018-09-11 11:34:32'),
(130, 193, '2018-09-11 11:36:13'),
(131, 194, '2018-09-11 11:37:18'),
(132, 195, '2018-09-11 11:37:56'),
(133, 197, '2018-09-11 11:41:59'),
(134, 199, '2018-09-12 05:22:52'),
(135, 200, '2018-09-12 05:24:33'),
(136, 201, '2018-09-12 05:26:00'),
(137, 202, '2018-09-12 05:27:25'),
(138, 203, '2018-09-12 05:28:04'),
(139, 205, '2018-09-12 05:52:41'),
(140, 206, '2018-09-12 06:01:15'),
(141, 207, '2018-09-12 06:11:30'),
(142, 208, '2018-09-12 06:13:48'),
(143, 209, '2018-09-12 06:18:12'),
(144, 210, '2018-09-12 06:19:20'),
(145, 211, '2018-09-12 06:20:21'),
(146, 212, '2018-09-12 06:20:56'),
(147, 213, '2018-09-12 06:21:48'),
(148, 217, '2018-09-14 06:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `order_flow_submission`
--

CREATE TABLE `order_flow_submission` (
  `id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_flow_submission`
--

INSERT INTO `order_flow_submission` (`id`, `flow_id`, `created_at`) VALUES
(82, 129, '2018-09-03 07:43:33'),
(83, 130, '2018-09-03 07:43:50'),
(84, 131, '2018-09-03 07:44:00'),
(85, 132, '2018-09-03 07:44:20'),
(86, 133, '2018-09-03 07:44:47'),
(87, 134, '2018-09-03 07:45:08'),
(88, 135, '2018-09-03 07:51:10'),
(89, 136, '2018-09-03 07:51:39'),
(90, 137, '2018-09-03 07:51:52'),
(91, 138, '2018-09-03 07:52:51'),
(92, 139, '2018-09-03 07:53:09'),
(93, 140, '2018-09-03 07:53:29'),
(94, 142, '2018-09-03 08:59:10'),
(95, 143, '2018-09-03 08:59:24'),
(96, 144, '2018-09-03 08:59:50'),
(97, 148, '2018-09-03 10:48:52'),
(98, 149, '2018-09-03 10:49:21'),
(99, 150, '2018-09-03 10:50:01'),
(100, 151, '2018-09-03 10:50:25'),
(101, 152, '2018-09-03 10:50:40'),
(102, 153, '2018-09-03 10:50:50'),
(103, 159, '2018-09-04 05:51:35'),
(104, 160, '2018-09-04 05:51:54'),
(105, 161, '2018-09-04 05:52:11'),
(106, 162, '2018-09-04 05:52:35'),
(107, 163, '2018-09-04 05:53:04'),
(108, 164, '2018-09-04 05:53:18'),
(109, 169, '2018-09-04 06:24:43'),
(110, 170, '2018-09-04 06:24:58'),
(111, 171, '2018-09-04 06:25:18'),
(112, 172, '2018-09-05 05:08:40'),
(113, 173, '2018-09-05 05:09:36'),
(114, 178, '2018-09-05 05:24:17'),
(115, 179, '2018-09-05 05:25:15'),
(116, 180, '2018-09-05 05:25:27'),
(117, 181, '2018-09-05 05:52:12'),
(118, 182, '2018-09-05 05:53:20'),
(119, 183, '2018-09-05 05:56:14'),
(120, 174, '2018-09-05 06:12:13'),
(121, 184, '2018-09-05 06:35:32'),
(122, 185, '2018-09-05 06:35:49'),
(123, 186, '2018-09-05 06:36:05'),
(124, 187, '2018-09-05 06:36:27'),
(125, 188, '2018-09-05 06:36:47'),
(126, 189, '2018-09-05 06:37:10'),
(127, 190, '2018-09-05 06:37:32'),
(128, 191, '2018-09-11 11:16:17'),
(129, 192, '2018-09-11 11:35:12'),
(130, 193, '2018-09-11 11:36:46'),
(131, 194, '2018-09-11 11:37:21'),
(132, 195, '2018-09-11 11:37:58'),
(133, 197, '2018-09-11 11:42:02'),
(134, 199, '2018-09-12 05:22:56'),
(135, 200, '2018-09-12 05:24:59'),
(136, 201, '2018-09-12 05:26:34'),
(137, 202, '2018-09-12 05:27:29'),
(138, 203, '2018-09-12 05:28:07'),
(139, 205, '2018-09-12 05:52:44'),
(140, 206, '2018-09-12 06:01:39'),
(141, 207, '2018-09-12 06:12:01'),
(142, 208, '2018-09-12 06:14:02'),
(143, 209, '2018-09-12 06:18:22'),
(144, 210, '2018-09-12 06:19:23'),
(145, 211, '2018-09-12 06:20:26'),
(146, 212, '2018-09-12 06:20:59'),
(147, 213, '2018-09-12 06:21:50'),
(148, 217, '2018-09-14 06:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `pasting`
--

CREATE TABLE `pasting` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `assistant` varchar(100) NOT NULL,
  `opening` varchar(100) NOT NULL,
  `closing` varchar(100) NOT NULL,
  `output` varchar(100) NOT NULL,
  `waste` varchar(100) NOT NULL,
  `carton` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasting`
--

INSERT INTO `pasting` (`id`, `plane_id`, `flow_id`, `operator`, `assistant`, `opening`, `closing`, `output`, `waste`, `carton`, `qty`, `weight`, `user_id`, `created_at`) VALUES
(1, 54, 209, 'saassa', 'saassa', '22', '22', '', '2', '', 'e', 'e', 2, '2018-09-12 06:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `pasting_complete`
--

CREATE TABLE `pasting_complete` (
  `id` int(11) NOT NULL,
  `pasting_id` int(11) NOT NULL,
  `ready` varchar(10) NOT NULL,
  `completed` varchar(10) NOT NULL,
  `cleaning` varchar(10) NOT NULL,
  `guide` varchar(10) NOT NULL,
  `glue` varchar(10) NOT NULL,
  `blanket` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasting_complete`
--

INSERT INTO `pasting_complete` (`id`, `pasting_id`, `ready`, `completed`, `cleaning`, `guide`, `glue`, `blanket`, `user_id`, `created_at`) VALUES
(1, 1, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 2, '2018-09-12 06:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `pasting_hourse`
--

CREATE TABLE `pasting_hourse` (
  `id` int(11) NOT NULL,
  `pasting_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `froms` varchar(100) NOT NULL,
  `tos` varchar(100) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `counter` varchar(100) NOT NULL,
  `remarks` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasting_hourse`
--

INSERT INTO `pasting_hourse` (`id`, `pasting_id`, `code`, `froms`, `tos`, `hours`, `counter`, `remarks`) VALUES
(1, 1, '', '', '', '10 am/pm', 'qwwq', 'wqwqwq');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `view_all` int(11) NOT NULL DEFAULT '0',
  `created` int(11) DEFAULT '0',
  `edit` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `disable` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `module_id`, `user_id`, `user_type_id`, `view`, `view_all`, `created`, `edit`, `deleted`, `disable`) VALUES
(1155, 2, 2, 2, 1, 1, 1, 1, 1, 1),
(1156, 3, 2, 2, 0, 0, 0, 0, 0, 0),
(1157, 5, 2, 2, 0, 0, 0, 0, 0, 0),
(1158, 7, 2, 2, 0, 0, 0, 0, 0, 0),
(1159, 21, 2, 2, 0, 0, 0, 0, 0, 0),
(1160, 25, 2, 2, 0, 0, 0, 0, 0, 0),
(1161, 27, 2, 2, 0, 0, 0, 0, 0, 0),
(1162, 33, 2, 2, 0, 0, 0, 0, 0, 0),
(1163, 34, 2, 2, 0, 0, 0, 0, 0, 0),
(1164, 35, 2, 2, 0, 0, 0, 0, 0, 0),
(1165, 36, 2, 2, 1, 1, 1, 1, 1, 1),
(1166, 37, 2, 2, 0, 0, 0, 0, 0, 0),
(1167, 38, 2, 2, 0, 0, 0, 0, 0, 0),
(1168, 39, 2, 2, 0, 0, 0, 0, 0, 0),
(1169, 40, 2, 2, 0, 0, 0, 0, 0, 0),
(1170, 41, 2, 2, 0, 0, 0, 0, 0, 0),
(1171, 42, 2, 2, 0, 0, 0, 0, 0, 0),
(1172, 43, 2, 2, 0, 0, 0, 0, 0, 0),
(1173, 44, 2, 2, 0, 0, 0, 0, 0, 0),
(1174, 45, 2, 2, 0, 0, 0, 0, 0, 0),
(1175, 46, 2, 2, 0, 0, 0, 0, 0, 0),
(1176, 47, 2, 2, 0, 0, 0, 0, 0, 0),
(1177, 48, 2, 2, 0, 0, 0, 0, 0, 0),
(1178, 49, 2, 2, 0, 0, 0, 0, 0, 0),
(1179, 50, 2, 2, 0, 0, 0, 0, 0, 0),
(1180, 51, 2, 2, 0, 0, 0, 0, 0, 0),
(1181, 52, 2, 2, 0, 0, 0, 0, 0, 0),
(1182, 53, 2, 2, 0, 0, 0, 0, 0, 0),
(1183, 54, 2, 2, 0, 0, 0, 0, 0, 0),
(1184, 55, 2, 2, 0, 0, 0, 0, 0, 0),
(1185, 56, 2, 2, 0, 0, 0, 0, 0, 0),
(1186, 57, 2, 2, 0, 0, 0, 0, 0, 0),
(1187, 58, 2, 2, 0, 0, 0, 0, 0, 0),
(1188, 59, 2, 2, 0, 0, 0, 0, 0, 0),
(1189, 60, 2, 2, 0, 0, 0, 0, 0, 0),
(1190, 61, 2, 2, 0, 0, 0, 0, 0, 0),
(1191, 62, 2, 2, 0, 0, 0, 0, 0, 0),
(1192, 63, 2, 2, 0, 0, 0, 0, 0, 0),
(1193, 64, 2, 2, 0, 0, 0, 0, 0, 0),
(1194, 65, 2, 2, 0, 0, 0, 0, 0, 0),
(1195, 66, 2, 2, 0, 0, 0, 0, 0, 0),
(1995, 2, 2, 3, 1, 1, 1, 1, 1, 1),
(1996, 3, 2, 3, 0, 0, 0, 0, 0, 0),
(1997, 5, 2, 3, 0, 0, 0, 0, 0, 0),
(1998, 7, 2, 3, 0, 0, 0, 0, 0, 0),
(1999, 21, 2, 3, 0, 0, 0, 0, 0, 0),
(2000, 25, 2, 3, 1, 1, 1, 1, 1, 1),
(2001, 27, 2, 3, 1, 1, 1, 1, 1, 1),
(2002, 33, 2, 3, 0, 0, 0, 0, 0, 0),
(2003, 34, 2, 3, 0, 0, 0, 0, 0, 0),
(2004, 35, 2, 3, 1, 1, 1, 1, 1, 1),
(2005, 36, 2, 3, 0, 0, 0, 0, 0, 0),
(2006, 37, 2, 3, 1, 1, 1, 1, 1, 1),
(2007, 38, 2, 3, 0, 0, 0, 0, 0, 0),
(2008, 39, 2, 3, 0, 0, 0, 0, 0, 0),
(2009, 40, 2, 3, 0, 0, 0, 0, 0, 0),
(2010, 41, 2, 3, 0, 0, 0, 0, 0, 0),
(2011, 42, 2, 3, 0, 0, 0, 0, 0, 0),
(2012, 43, 2, 3, 0, 0, 0, 0, 0, 0),
(2013, 44, 2, 3, 0, 0, 0, 0, 0, 0),
(2014, 46, 2, 3, 0, 0, 0, 0, 0, 0),
(2015, 47, 2, 3, 0, 0, 0, 0, 0, 0),
(2016, 48, 2, 3, 0, 0, 0, 0, 0, 0),
(2017, 49, 2, 3, 0, 0, 0, 0, 0, 0),
(2018, 50, 2, 3, 0, 0, 0, 0, 0, 0),
(2019, 51, 2, 3, 0, 0, 0, 0, 0, 0),
(2020, 52, 2, 3, 0, 0, 0, 0, 0, 0),
(2021, 53, 2, 3, 0, 0, 0, 0, 0, 0),
(2022, 54, 2, 3, 0, 0, 0, 0, 0, 0),
(2023, 55, 2, 3, 0, 0, 0, 0, 0, 0),
(2024, 56, 2, 3, 0, 0, 0, 0, 0, 0),
(2025, 57, 2, 3, 0, 0, 0, 0, 0, 0),
(2026, 58, 2, 3, 0, 0, 0, 0, 0, 0),
(2027, 59, 2, 3, 0, 0, 0, 0, 0, 0),
(2028, 60, 2, 3, 0, 0, 0, 0, 0, 0),
(2029, 61, 2, 3, 0, 0, 0, 0, 0, 0),
(2030, 62, 2, 3, 0, 0, 0, 0, 0, 0),
(2031, 63, 2, 3, 0, 0, 0, 0, 0, 0),
(2032, 64, 2, 3, 0, 0, 0, 0, 0, 0),
(2033, 65, 2, 3, 0, 0, 0, 0, 0, 0),
(2034, 67, 2, 3, 0, 0, 0, 0, 0, 0),
(2035, 68, 2, 3, 0, 0, 0, 0, 0, 0),
(2036, 69, 2, 3, 0, 0, 0, 0, 0, 0),
(2037, 70, 2, 3, 0, 0, 0, 0, 0, 0),
(2038, 71, 2, 3, 0, 0, 0, 0, 0, 0),
(2039, 72, 2, 3, 0, 0, 0, 0, 0, 0),
(2040, 73, 2, 3, 0, 0, 0, 0, 0, 0),
(2041, 74, 2, 3, 0, 0, 0, 0, 0, 0),
(2042, 75, 2, 3, 0, 0, 0, 0, 0, 0),
(2043, 76, 2, 3, 0, 0, 0, 0, 0, 0),
(2044, 77, 2, 3, 0, 0, 0, 0, 0, 0),
(2045, 78, 2, 3, 0, 0, 0, 0, 0, 0),
(2046, 2, 2, 7, 1, 1, 1, 1, 1, 1),
(2047, 3, 2, 7, 0, 0, 0, 0, 0, 0),
(2048, 5, 2, 7, 0, 0, 0, 0, 0, 0),
(2049, 7, 2, 7, 0, 0, 0, 0, 0, 0),
(2050, 21, 2, 7, 0, 0, 0, 0, 0, 0),
(2051, 25, 2, 7, 0, 0, 0, 0, 0, 0),
(2052, 27, 2, 7, 0, 0, 0, 0, 0, 0),
(2053, 33, 2, 7, 0, 0, 0, 0, 0, 0),
(2054, 34, 2, 7, 0, 0, 0, 0, 0, 0),
(2055, 35, 2, 7, 0, 0, 0, 0, 0, 0),
(2056, 36, 2, 7, 0, 0, 0, 0, 0, 0),
(2057, 37, 2, 7, 0, 0, 0, 0, 0, 0),
(2058, 38, 2, 7, 0, 0, 0, 0, 0, 0),
(2059, 39, 2, 7, 0, 0, 0, 0, 0, 0),
(2060, 40, 2, 7, 0, 0, 0, 0, 0, 0),
(2061, 41, 2, 7, 0, 0, 0, 0, 0, 0),
(2062, 42, 2, 7, 1, 1, 1, 1, 1, 1),
(2063, 43, 2, 7, 1, 1, 1, 1, 1, 1),
(2064, 44, 2, 7, 1, 1, 1, 1, 1, 1),
(2065, 46, 2, 7, 1, 1, 1, 1, 1, 1),
(2066, 47, 2, 7, 1, 1, 1, 1, 1, 1),
(2067, 48, 2, 7, 1, 1, 1, 1, 1, 1),
(2068, 49, 2, 7, 1, 1, 1, 1, 1, 1),
(2069, 50, 2, 7, 1, 1, 1, 1, 1, 1),
(2070, 51, 2, 7, 1, 1, 1, 1, 1, 1),
(2071, 52, 2, 7, 1, 1, 1, 1, 1, 1),
(2072, 53, 2, 7, 1, 1, 1, 1, 1, 1),
(2073, 54, 2, 7, 1, 1, 1, 1, 1, 1),
(2074, 55, 2, 7, 1, 1, 1, 1, 1, 1),
(2075, 56, 2, 7, 1, 1, 1, 1, 1, 1),
(2076, 57, 2, 7, 1, 1, 1, 1, 1, 1),
(2077, 58, 2, 7, 0, 0, 0, 0, 0, 0),
(2078, 59, 2, 7, 0, 0, 0, 0, 0, 0),
(2079, 60, 2, 7, 0, 0, 0, 0, 0, 0),
(2080, 61, 2, 7, 0, 0, 0, 0, 0, 0),
(2081, 62, 2, 7, 0, 0, 0, 0, 0, 0),
(2082, 63, 2, 7, 0, 0, 0, 0, 0, 0),
(2083, 64, 2, 7, 0, 0, 0, 0, 0, 0),
(2084, 65, 2, 7, 0, 0, 0, 0, 0, 0),
(2085, 67, 2, 7, 0, 0, 0, 0, 0, 0),
(2086, 68, 2, 7, 0, 0, 0, 0, 0, 0),
(2087, 69, 2, 7, 0, 0, 0, 0, 0, 0),
(2088, 70, 2, 7, 0, 0, 0, 0, 0, 0),
(2089, 71, 2, 7, 0, 0, 0, 0, 0, 0),
(2090, 72, 2, 7, 0, 0, 0, 0, 0, 0),
(2091, 73, 2, 7, 0, 0, 0, 0, 0, 0),
(2092, 74, 2, 7, 0, 0, 0, 0, 0, 0),
(2093, 75, 2, 7, 0, 0, 0, 0, 0, 0),
(2094, 76, 2, 7, 0, 0, 0, 0, 0, 0),
(2095, 77, 2, 7, 0, 0, 0, 0, 0, 0),
(2096, 78, 2, 7, 0, 0, 0, 0, 0, 0),
(2148, 2, 2, 6, 1, 1, 1, 1, 1, 1),
(2149, 3, 2, 6, 0, 0, 0, 0, 0, 0),
(2150, 5, 2, 6, 0, 0, 0, 0, 0, 0),
(2151, 7, 2, 6, 0, 0, 0, 0, 0, 0),
(2152, 21, 2, 6, 0, 0, 0, 0, 0, 0),
(2153, 25, 2, 6, 1, 1, 1, 1, 1, 1),
(2154, 27, 2, 6, 1, 1, 1, 1, 1, 1),
(2155, 33, 2, 6, 0, 0, 0, 0, 0, 0),
(2156, 34, 2, 6, 0, 0, 0, 0, 0, 0),
(2157, 35, 2, 6, 0, 0, 0, 0, 0, 0),
(2158, 36, 2, 6, 0, 0, 0, 0, 0, 0),
(2159, 37, 2, 6, 0, 0, 0, 0, 0, 0),
(2160, 38, 2, 6, 0, 0, 0, 0, 0, 0),
(2161, 39, 2, 6, 0, 0, 0, 0, 0, 0),
(2162, 40, 2, 6, 0, 0, 0, 0, 0, 0),
(2163, 41, 2, 6, 0, 0, 0, 0, 0, 0),
(2164, 42, 2, 6, 0, 0, 0, 0, 0, 0),
(2165, 43, 2, 6, 0, 0, 0, 0, 0, 0),
(2166, 44, 2, 6, 0, 0, 0, 0, 0, 0),
(2167, 46, 2, 6, 0, 0, 0, 0, 0, 0),
(2168, 47, 2, 6, 0, 0, 0, 0, 0, 0),
(2169, 48, 2, 6, 0, 0, 0, 0, 0, 0),
(2170, 49, 2, 6, 0, 0, 0, 0, 0, 0),
(2171, 50, 2, 6, 0, 0, 0, 0, 0, 0),
(2172, 51, 2, 6, 0, 0, 0, 0, 0, 0),
(2173, 52, 2, 6, 0, 0, 0, 0, 0, 0),
(2174, 53, 2, 6, 0, 0, 0, 0, 0, 0),
(2175, 54, 2, 6, 0, 0, 0, 0, 0, 0),
(2176, 55, 2, 6, 0, 0, 0, 0, 0, 0),
(2177, 56, 2, 6, 0, 0, 0, 0, 0, 0),
(2178, 57, 2, 6, 0, 0, 0, 0, 0, 0),
(2179, 58, 2, 6, 0, 0, 0, 0, 0, 0),
(2180, 59, 2, 6, 1, 1, 1, 1, 1, 1),
(2181, 60, 2, 6, 0, 0, 0, 0, 0, 0),
(2182, 61, 2, 6, 0, 0, 0, 0, 0, 0),
(2183, 62, 2, 6, 0, 0, 0, 0, 0, 0),
(2184, 63, 2, 6, 0, 0, 0, 0, 0, 0),
(2185, 64, 2, 6, 0, 0, 0, 0, 0, 0),
(2186, 65, 2, 6, 0, 0, 0, 0, 0, 0),
(2187, 67, 2, 6, 0, 0, 0, 0, 0, 0),
(2188, 68, 2, 6, 0, 0, 0, 0, 0, 0),
(2189, 69, 2, 6, 0, 0, 0, 0, 0, 0),
(2190, 70, 2, 6, 0, 0, 0, 0, 0, 0),
(2191, 71, 2, 6, 0, 0, 0, 0, 0, 0),
(2192, 72, 2, 6, 0, 0, 0, 0, 0, 0),
(2193, 73, 2, 6, 0, 0, 0, 0, 0, 0),
(2194, 74, 2, 6, 0, 0, 0, 0, 0, 0),
(2195, 75, 2, 6, 0, 0, 0, 0, 0, 0),
(2196, 76, 2, 6, 0, 0, 0, 0, 0, 0),
(2197, 77, 2, 6, 0, 0, 0, 0, 0, 0),
(2198, 78, 2, 6, 0, 0, 0, 0, 0, 0),
(2199, 2, 2, 8, 1, 1, 1, 1, 1, 1),
(2200, 3, 2, 8, 0, 0, 0, 0, 0, 0),
(2201, 5, 2, 8, 0, 0, 0, 0, 0, 0),
(2202, 7, 2, 8, 0, 0, 0, 0, 0, 0),
(2203, 21, 2, 8, 0, 0, 0, 0, 0, 0),
(2204, 25, 2, 8, 1, 1, 1, 1, 1, 1),
(2205, 27, 2, 8, 1, 1, 1, 1, 1, 1),
(2206, 33, 2, 8, 0, 0, 0, 0, 0, 0),
(2207, 34, 2, 8, 0, 0, 0, 0, 0, 0),
(2208, 35, 2, 8, 0, 0, 0, 0, 0, 0),
(2209, 36, 2, 8, 0, 0, 0, 0, 0, 0),
(2210, 37, 2, 8, 0, 0, 0, 0, 0, 0),
(2211, 38, 2, 8, 0, 0, 0, 0, 0, 0),
(2212, 39, 2, 8, 0, 0, 0, 0, 0, 0),
(2213, 40, 2, 8, 0, 0, 0, 0, 0, 0),
(2214, 41, 2, 8, 0, 0, 0, 0, 0, 0),
(2215, 42, 2, 8, 0, 0, 0, 0, 0, 0),
(2216, 43, 2, 8, 0, 0, 0, 0, 0, 0),
(2217, 44, 2, 8, 0, 0, 0, 0, 0, 0),
(2218, 46, 2, 8, 0, 0, 0, 0, 0, 0),
(2219, 47, 2, 8, 0, 0, 0, 0, 0, 0),
(2220, 48, 2, 8, 0, 0, 0, 0, 0, 0),
(2221, 49, 2, 8, 0, 0, 0, 0, 0, 0),
(2222, 50, 2, 8, 0, 0, 0, 0, 0, 0),
(2223, 51, 2, 8, 0, 0, 0, 0, 0, 0),
(2224, 52, 2, 8, 0, 0, 0, 0, 0, 0),
(2225, 53, 2, 8, 0, 0, 0, 0, 0, 0),
(2226, 54, 2, 8, 0, 0, 0, 0, 0, 0),
(2227, 55, 2, 8, 0, 0, 0, 0, 0, 0),
(2228, 56, 2, 8, 0, 0, 0, 0, 0, 0),
(2229, 57, 2, 8, 0, 0, 0, 0, 0, 0),
(2230, 58, 2, 8, 1, 1, 1, 1, 1, 1),
(2231, 59, 2, 8, 0, 0, 0, 0, 0, 0),
(2232, 60, 2, 8, 0, 0, 0, 0, 0, 0),
(2233, 61, 2, 8, 0, 0, 0, 0, 0, 0),
(2234, 62, 2, 8, 0, 0, 0, 0, 0, 0),
(2235, 63, 2, 8, 0, 0, 0, 0, 0, 0),
(2236, 64, 2, 8, 0, 0, 0, 0, 0, 0),
(2237, 65, 2, 8, 0, 0, 0, 0, 0, 0),
(2238, 67, 2, 8, 0, 0, 0, 0, 0, 0),
(2239, 68, 2, 8, 0, 0, 0, 0, 0, 0),
(2240, 69, 2, 8, 0, 0, 0, 0, 0, 0),
(2241, 70, 2, 8, 0, 0, 0, 0, 0, 0),
(2242, 71, 2, 8, 0, 0, 0, 0, 0, 0),
(2243, 72, 2, 8, 0, 0, 0, 0, 0, 0),
(2244, 73, 2, 8, 0, 0, 0, 0, 0, 0),
(2245, 74, 2, 8, 0, 0, 0, 0, 0, 0),
(2246, 75, 2, 8, 0, 0, 0, 0, 0, 0),
(2247, 76, 2, 8, 1, 1, 1, 1, 1, 1),
(2248, 77, 2, 8, 1, 1, 1, 1, 1, 1),
(2249, 78, 2, 8, 1, 1, 1, 1, 1, 1),
(2250, 2, 2, 4, 1, 1, 1, 1, 1, 1),
(2251, 3, 2, 4, 0, 0, 0, 0, 0, 0),
(2252, 5, 2, 4, 0, 0, 0, 0, 0, 0),
(2253, 7, 2, 4, 0, 0, 0, 0, 0, 0),
(2254, 21, 2, 4, 0, 0, 0, 0, 0, 0),
(2255, 25, 2, 4, 0, 0, 0, 0, 0, 0),
(2256, 27, 2, 4, 1, 1, 0, 0, 0, 0),
(2257, 33, 2, 4, 0, 0, 0, 0, 0, 0),
(2258, 34, 2, 4, 0, 0, 0, 0, 0, 0),
(2259, 35, 2, 4, 0, 0, 0, 0, 0, 0),
(2260, 36, 2, 4, 0, 0, 0, 0, 0, 0),
(2261, 37, 2, 4, 0, 0, 0, 0, 0, 0),
(2262, 38, 2, 4, 1, 1, 1, 1, 1, 1),
(2263, 39, 2, 4, 1, 1, 1, 1, 1, 1),
(2264, 40, 2, 4, 1, 1, 1, 1, 1, 1),
(2265, 41, 2, 4, 1, 1, 1, 1, 1, 1),
(2266, 42, 2, 4, 0, 0, 0, 0, 0, 0),
(2267, 43, 2, 4, 0, 0, 0, 0, 0, 0),
(2268, 44, 2, 4, 0, 0, 0, 0, 0, 0),
(2269, 46, 2, 4, 0, 0, 0, 0, 0, 0),
(2270, 47, 2, 4, 0, 0, 0, 0, 0, 0),
(2271, 48, 2, 4, 0, 0, 0, 0, 0, 0),
(2272, 49, 2, 4, 0, 0, 0, 0, 0, 0),
(2273, 50, 2, 4, 0, 0, 0, 0, 0, 0),
(2274, 51, 2, 4, 0, 0, 0, 0, 0, 0),
(2275, 52, 2, 4, 0, 0, 0, 0, 0, 0),
(2276, 53, 2, 4, 0, 0, 0, 0, 0, 0),
(2277, 54, 2, 4, 0, 0, 0, 0, 0, 0),
(2278, 55, 2, 4, 0, 0, 0, 0, 0, 0),
(2279, 56, 2, 4, 0, 0, 0, 0, 0, 0),
(2280, 57, 2, 4, 0, 0, 0, 0, 0, 0),
(2281, 58, 2, 4, 0, 0, 0, 0, 0, 0),
(2282, 59, 2, 4, 0, 0, 0, 0, 0, 0),
(2283, 60, 2, 4, 1, 1, 1, 1, 1, 1),
(2284, 61, 2, 4, 0, 0, 0, 0, 0, 0),
(2285, 62, 2, 4, 0, 0, 0, 0, 0, 0),
(2286, 63, 2, 4, 0, 0, 0, 0, 0, 0),
(2287, 64, 2, 4, 0, 0, 0, 0, 0, 0),
(2288, 65, 2, 4, 0, 0, 0, 0, 0, 0),
(2289, 67, 2, 4, 0, 0, 0, 0, 0, 0),
(2290, 68, 2, 4, 0, 0, 0, 0, 0, 0),
(2291, 69, 2, 4, 0, 0, 0, 0, 0, 0),
(2292, 70, 2, 4, 0, 0, 0, 0, 0, 0),
(2293, 71, 2, 4, 0, 0, 0, 0, 0, 0),
(2294, 72, 2, 4, 0, 0, 0, 0, 0, 0),
(2295, 73, 2, 4, 0, 0, 0, 0, 0, 0),
(2296, 74, 2, 4, 0, 0, 0, 0, 0, 0),
(2297, 75, 2, 4, 0, 0, 0, 0, 0, 0),
(2298, 76, 2, 4, 0, 0, 0, 0, 0, 0),
(2299, 77, 2, 4, 0, 0, 0, 0, 0, 0),
(2300, 78, 2, 4, 0, 0, 0, 0, 0, 0),
(2301, 79, 2, 4, 0, 0, 0, 0, 0, 0),
(2302, 2, 2, 5, 1, 1, 1, 1, 1, 1),
(2303, 3, 2, 5, 0, 0, 0, 0, 0, 0),
(2304, 5, 2, 5, 0, 0, 0, 0, 0, 0),
(2305, 7, 2, 5, 0, 0, 0, 0, 0, 0),
(2306, 21, 2, 5, 0, 0, 0, 0, 0, 0),
(2307, 25, 2, 5, 0, 0, 0, 0, 0, 0),
(2308, 27, 2, 5, 0, 0, 0, 0, 0, 0),
(2309, 33, 2, 5, 0, 0, 0, 0, 0, 0),
(2310, 34, 2, 5, 0, 0, 0, 0, 0, 0),
(2311, 35, 2, 5, 0, 0, 0, 0, 0, 0),
(2312, 36, 2, 5, 0, 0, 0, 0, 0, 0),
(2313, 37, 2, 5, 0, 0, 0, 0, 0, 0),
(2314, 38, 2, 5, 0, 0, 0, 0, 0, 0),
(2315, 39, 2, 5, 0, 0, 0, 0, 0, 0),
(2316, 40, 2, 5, 0, 0, 0, 0, 0, 0),
(2317, 41, 2, 5, 0, 0, 0, 0, 0, 0),
(2318, 42, 2, 5, 0, 0, 0, 0, 0, 0),
(2319, 43, 2, 5, 0, 0, 0, 0, 0, 0),
(2320, 44, 2, 5, 0, 0, 0, 0, 0, 0),
(2321, 46, 2, 5, 0, 0, 0, 0, 0, 0),
(2322, 47, 2, 5, 0, 0, 0, 0, 0, 0),
(2323, 48, 2, 5, 0, 0, 0, 0, 0, 0),
(2324, 49, 2, 5, 0, 0, 0, 0, 0, 0),
(2325, 50, 2, 5, 0, 0, 0, 0, 0, 0),
(2326, 51, 2, 5, 0, 0, 0, 0, 0, 0),
(2327, 52, 2, 5, 0, 0, 0, 0, 0, 0),
(2328, 53, 2, 5, 0, 0, 0, 0, 0, 0),
(2329, 54, 2, 5, 0, 0, 0, 0, 0, 0),
(2330, 55, 2, 5, 0, 0, 0, 0, 0, 0),
(2331, 56, 2, 5, 0, 0, 0, 0, 0, 0),
(2332, 57, 2, 5, 0, 0, 0, 0, 0, 0),
(2333, 58, 2, 5, 0, 0, 0, 0, 0, 0),
(2334, 59, 2, 5, 0, 0, 0, 0, 0, 0),
(2335, 60, 2, 5, 0, 0, 0, 0, 0, 0),
(2336, 61, 2, 5, 1, 1, 1, 1, 1, 1),
(2337, 62, 2, 5, 1, 1, 1, 1, 1, 1),
(2338, 63, 2, 5, 1, 1, 1, 1, 1, 1),
(2339, 64, 2, 5, 1, 1, 1, 1, 1, 1),
(2340, 65, 2, 5, 0, 0, 0, 0, 0, 0),
(2341, 67, 2, 5, 1, 1, 1, 1, 1, 1),
(2342, 68, 2, 5, 1, 1, 1, 1, 1, 1),
(2343, 69, 2, 5, 1, 1, 1, 1, 1, 1),
(2344, 70, 2, 5, 1, 1, 1, 1, 1, 1),
(2345, 71, 2, 5, 1, 1, 1, 1, 1, 1),
(2346, 72, 2, 5, 1, 1, 1, 1, 1, 1),
(2347, 73, 2, 5, 1, 1, 1, 1, 1, 1),
(2348, 74, 2, 5, 1, 1, 1, 1, 1, 1),
(2349, 75, 2, 5, 1, 1, 1, 1, 1, 1),
(2350, 76, 2, 5, 0, 0, 0, 0, 0, 0),
(2351, 77, 2, 5, 0, 0, 0, 0, 0, 0),
(2352, 78, 2, 5, 0, 0, 0, 0, 0, 0),
(2353, 79, 2, 5, 1, 1, 1, 1, 1, 1),
(2919, 2, 2, 1, 1, 1, 1, 1, 1, 1),
(2920, 3, 2, 1, 1, 1, 1, 1, 1, 1),
(2921, 5, 2, 1, 1, 1, 1, 1, 1, 1),
(2922, 7, 2, 1, 1, 1, 1, 1, 1, 1),
(2923, 21, 2, 1, 1, 1, 1, 1, 1, 1),
(2924, 25, 2, 1, 1, 1, 1, 1, 1, 1),
(2925, 27, 2, 1, 1, 1, 1, 1, 1, 1),
(2926, 33, 2, 1, 1, 1, 1, 1, 1, 1),
(2927, 34, 2, 1, 1, 1, 1, 1, 1, 1),
(2928, 35, 2, 1, 1, 1, 1, 1, 1, 1),
(2929, 36, 2, 1, 1, 1, 1, 1, 1, 1),
(2930, 37, 2, 1, 1, 1, 1, 1, 1, 1),
(2931, 38, 2, 1, 1, 1, 1, 1, 1, 1),
(2932, 39, 2, 1, 1, 1, 1, 1, 1, 1),
(2933, 40, 2, 1, 1, 1, 1, 1, 1, 1),
(2934, 41, 2, 1, 1, 1, 1, 1, 1, 1),
(2935, 42, 2, 1, 1, 1, 1, 1, 1, 1),
(2936, 43, 2, 1, 1, 1, 1, 1, 1, 1),
(2937, 44, 2, 1, 1, 1, 1, 1, 1, 1),
(2938, 46, 2, 1, 1, 1, 1, 1, 1, 1),
(2939, 47, 2, 1, 1, 1, 1, 1, 1, 1),
(2940, 48, 2, 1, 1, 1, 1, 1, 1, 1),
(2941, 49, 2, 1, 1, 1, 1, 1, 1, 1),
(2942, 51, 2, 1, 1, 1, 1, 1, 1, 1),
(2943, 52, 2, 1, 1, 1, 1, 1, 1, 1),
(2944, 53, 2, 1, 1, 1, 1, 1, 1, 1),
(2945, 54, 2, 1, 1, 1, 1, 1, 1, 1),
(2946, 55, 2, 1, 1, 1, 1, 1, 1, 1),
(2947, 56, 2, 1, 1, 1, 1, 1, 1, 1),
(2948, 57, 2, 1, 1, 1, 1, 1, 1, 1),
(2949, 58, 2, 1, 1, 1, 1, 1, 1, 1),
(2950, 59, 2, 1, 1, 1, 1, 1, 1, 1),
(2951, 60, 2, 1, 1, 1, 1, 1, 1, 1),
(2952, 61, 2, 1, 1, 1, 1, 1, 1, 1),
(2953, 62, 2, 1, 1, 1, 1, 1, 1, 1),
(2954, 63, 2, 1, 1, 1, 1, 1, 1, 1),
(2955, 64, 2, 1, 1, 1, 1, 1, 1, 1),
(2956, 65, 2, 1, 1, 1, 1, 1, 1, 1),
(2957, 67, 2, 1, 1, 1, 1, 1, 1, 1),
(2958, 68, 2, 1, 1, 1, 1, 1, 1, 1),
(2959, 69, 2, 1, 1, 1, 1, 1, 1, 1),
(2960, 70, 2, 1, 1, 1, 1, 1, 1, 1),
(2961, 71, 2, 1, 1, 1, 1, 1, 1, 1),
(2962, 72, 2, 1, 1, 1, 1, 1, 1, 1),
(2963, 73, 2, 1, 1, 1, 1, 1, 1, 1),
(2964, 74, 2, 1, 1, 1, 1, 1, 1, 1),
(2965, 75, 2, 1, 1, 1, 1, 1, 1, 1),
(2966, 76, 2, 1, 1, 1, 1, 1, 1, 1),
(2967, 77, 2, 1, 1, 1, 1, 1, 1, 1),
(2968, 78, 2, 1, 1, 1, 1, 1, 1, 1),
(2969, 79, 2, 1, 1, 1, 1, 1, 1, 1),
(2970, 80, 2, 1, 1, 1, 1, 1, 1, 1),
(2971, 81, 2, 1, 1, 1, 1, 1, 1, 1),
(2972, 82, 2, 1, 1, 1, 1, 1, 1, 1),
(2973, 83, 2, 1, 1, 1, 1, 1, 1, 1),
(2974, 84, 2, 1, 1, 1, 1, 1, 1, 1),
(2975, 88, 2, 1, 1, 1, 1, 1, 1, 1),
(2976, 89, 2, 1, 1, 1, 1, 1, 1, 1),
(2977, 90, 2, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `printing`
--

CREATE TABLE `printing` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `assistant` varchar(255) NOT NULL,
  `process` varchar(255) NOT NULL,
  `opening` varchar(255) NOT NULL,
  `closing` varchar(255) NOT NULL,
  `output` varchar(255) NOT NULL,
  `waste` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printing`
--

INSERT INTO `printing` (`id`, `plane_id`, `flow_id`, `operator`, `assistant`, `process`, `opening`, `closing`, `output`, `waste`, `user_id`, `created_at`) VALUES
(29, 51, 192, '', 'fdfd', 'Coating', '444', '444', 'ffff', 'rrffff', 2, '2018-09-11 11:35:12'),
(30, 53, 200, 'dssd2121', 'fdfdds', 'Coating', '32332', '323232', '3232323', '323232', 2, '2018-09-12 05:24:59'),
(31, 54, 206, '', 'saassa', 'Coating', '', '', '', '', 2, '2018-09-12 06:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `printing_complete`
--

CREATE TABLE `printing_complete` (
  `id` int(11) NOT NULL,
  `completed` varchar(100) NOT NULL,
  `feeder` varchar(100) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `cleaning` varchar(100) NOT NULL,
  `specs` varchar(100) NOT NULL,
  `impression` varchar(100) NOT NULL,
  `gauge` varchar(100) NOT NULL,
  `ready` varchar(100) NOT NULL,
  `print_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printing_complete`
--

INSERT INTO `printing_complete` (`id`, `completed`, `feeder`, `delivery`, `cleaning`, `specs`, `impression`, `gauge`, `ready`, `print_id`, `user_id`, `created_at`) VALUES
(29, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 29, 2, '2018-09-11 11:35:12'),
(30, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 30, 2, '2018-09-12 05:24:59'),
(31, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 31, 2, '2018-09-12 06:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `printing_hourse`
--

CREATE TABLE `printing_hourse` (
  `id` int(11) NOT NULL,
  `printing_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `froms` varchar(100) NOT NULL,
  `tos` varchar(100) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `counter` varchar(100) NOT NULL,
  `remarks` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printing_hourse`
--

INSERT INTO `printing_hourse` (`id`, `printing_id`, `code`, `froms`, `tos`, `hours`, `counter`, `remarks`) VALUES
(35, 29, 'Plate Spoiling', '14:06', '15:43', '9 am/pm', 'fg', 'fd fsdsdfsdfsdfs'),
(36, 30, 'Cleaning Plate', '15:22', '15:23', 'Pelease Select', '32332', 'ewds'),
(37, 30, 'Plate Correction', '', '', '7 am/pm', '32', '23'),
(38, 31, '', '', '', '10 am/pm', '', ''),
(39, 31, 'Plate Spoiling', '', '', '10 am/pm', '', ''),
(40, 31, '', '', '', '9 am/pm', 'fg', '132123'),
(41, 31, 'setting W/B', '', '', '11 am/pm', 'fg', '');

-- --------------------------------------------------------

--
-- Table structure for table `printing_report`
--

CREATE TABLE `printing_report` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printing_report`
--

INSERT INTO `printing_report` (`id`, `order_id`, `remarks`, `file`, `user_id`, `created_at`) VALUES
(1, 60, 'asdsad', '/uploads/D+Team-10.png', 2, '2018-09-12 10:37:08'),
(2, 61, 'wewrwerw', '', 2, '2018-09-13 08:32:18'),
(3, 61, 'wewrwerw', '', 2, '2018-09-13 08:32:18'),
(4, 62, 'asdasd', '/uploads/customized6.jpg', 2, '2018-09-14 06:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `process_procedure`
--

CREATE TABLE `process_procedure` (
  `id` int(11) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `date` varchar(250) NOT NULL,
  `po_no` int(11) NOT NULL,
  `challan_number` varchar(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `min_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `process_procedure_item_desc`
--

CREATE TABLE `process_procedure_item_desc` (
  `id` int(11) NOT NULL,
  `process_procedure_id` int(11) NOT NULL,
  `sr_no` int(11) NOT NULL,
  `item_description` varchar(250) NOT NULL,
  `unit` varchar(250) NOT NULL,
  `qty_rec` varchar(250) NOT NULL,
  `qty_ok` varchar(250) NOT NULL,
  `qty_rej` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `process_procedure_remarks`
--

CREATE TABLE `process_procedure_remarks` (
  `id` int(11) NOT NULL,
  `product_release_id` int(11) NOT NULL,
  `apperance` varchar(255) NOT NULL,
  `grammage` varchar(255) NOT NULL,
  `thickness` varchar(255) NOT NULL,
  `moisture` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL,
  `grain_direction` varchar(255) NOT NULL,
  `presence_of_insects` varchar(255) NOT NULL,
  `oil_and_grease_stains` varchar(255) NOT NULL,
  `shade` varchar(255) NOT NULL,
  `strength` varchar(255) NOT NULL,
  `stick_ability` varchar(255) NOT NULL,
  `miscibility` varchar(255) NOT NULL,
  `purity` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_Code` varchar(100) NOT NULL,
  `Barcode` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `gramage` varchar(100) NOT NULL,
  `Category` int(11) NOT NULL,
  `Sub_Category` int(11) DEFAULT NULL,
  `Product_Unit` varchar(100) NOT NULL,
  `Product_Cost` varchar(100) DEFAULT NULL,
  `Product_Price` varchar(100) NOT NULL,
  `Product_Image` varchar(255) NOT NULL,
  `Product_Details` text,
  `Product_details_for_invoice` text,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Product_Name`, `Product_Code`, `Barcode`, `size`, `brand`, `gramage`, `Category`, `Sub_Category`, `Product_Unit`, `Product_Cost`, `Product_Price`, `Product_Image`, `Product_Details`, `Product_details_for_invoice`, `user_id`, `created_at`) VALUES
(5, 'ART PAPER 17.5X23', '1', '123', '17.5X23', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(6, 'ART PAPER 40X26', '2', '123', '40X26', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(7, 'ART PAPER 40X27', '3', '123', '40X27', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(8, 'ART PAPER 40X28', '4', '123', '40X28', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(9, 'ART PAPER 23X30', '5', '123', '23X30', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(10, 'ART PAPER 30X26', '6', '123', '30X26', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(11, 'ART PAPER 30X27', '7', '123', '30X27', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(12, 'ART PAPER 30X24', '8', '123', '30X24', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(13, 'OFFSET PAPER 24.5X35.5', '9', '123', '24.5X35.5', 'Offset Paper', '55', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(14, 'OFFSET PAPER 24X30', '10', '123', '24X30', 'Offset Paper', '55', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(15, 'OFFSET PAPER 30X40', '11', '123', '30X40', 'Offset Paper', '55', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(16, 'OFFSET PAPER 25X36', '12', '123', '25X36', 'Offset Paper', '55', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(17, 'OFFSET PAPER 23X31', '13', '123', '23X31', 'Offset Paper', '68', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(18, 'OFFSET PAPER 19X30', '14', '123', '19X30', 'Offset Paper', '68', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(19, 'OFFSET PAPER 20X30', '15', '123', '20X30', 'Offset Paper', '70', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(20, 'OFFSET PAPER 27X34', '16', '123', '27X34', 'Offset Paper', '70', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(21, 'OFF SET PAPER 23X36', '17', '123', '23X36', 'Offset Paper', '70', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(22, 'OFFSET PAPER 25X35.5', '18', '123', '25X35.5', 'Offset Paper', '70', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(23, 'OFF SET PAPER 30X40', '19', '123', '30X40', 'Offset Paper', '70', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(24, 'FLYING PAPER 23X22', '20', '123', '23X22', 'Flying Paper', '55', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(25, 'FLYING PAPER 23X36', '21', '123', '23X36', 'Flying Paper', '55', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(26, 'FLYING PAPER 25X36', '22', '123', '25X36', 'Flying Paper', '55', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(27, 'FLYING PAPER 20X30', '23', '123', '20X30', 'Flying Paper', '53', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(28, 'FLYING PAPER 26X29', '24', '123', '26X29', 'Flying Paper', '55', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(29, 'FLYING PAPER 27X34', '25', '123', '27X34', 'Flying Paper', '52', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(30, 'FLYING PAPER 37.5X39', '26', '123', '37.5X39', 'Flying Paper', '52', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(31, 'FLYING PAPER 39X40', '27', '123', '39X40', 'Flying Paper', '55', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(32, 'ART CARD 25X36', '28', '123', '25X36', 'Art Card', '190', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(33, 'ART CARD 31X43', '29', '123', '31X43', 'Art Card', '260', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(34, 'ART CARD 25X36', '30', '123', '25X36', 'Art Card', '260', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(35, 'ART CARD 21X15.5', '31', '123', '21X15.5', 'Art Card', '210', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(36, 'ART CARD 23X36', '32', '123', '23X36', 'Art Card', '210', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(37, 'ART CARD 22X28', '33', '123', '22X28', 'Art Card', '250', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(38, 'ART CARD 23X36', '34', '123', '23X36', 'Art Card', '190', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(39, 'ART CARD 36X23                       ', '35', '123', '36X23', 'Art Card', '190', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(40, 'ART CARD 25X36', '36', '123', '25X36', 'Art Card', '210', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(41, 'PLASTIC CARD 11X30       ', '37', '123', '11X30', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(42, 'PLASTIC CARD 19X28', '38', '123', '19X28', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(43, 'PLASTIC CARD 25X36             ', '39', '123', '25X36', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(44, 'PLASTIC CARD 27X28             ', '40', '123', '27X28', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(45, 'PLASTIC CARD 25X30', '41', '123', '25X30', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(46, 'PLASTIC CARD 44X30           ', '42', '123', '44X30', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(47, 'PLASTIC CARD 28X50', '43', '123', '28X50', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(48, 'PLASTIC CARD 31X50', '44', '123', '31X50', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(49, 'PLASTIC CARD 31X43                ', '45', '123', '31X43', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(50, 'MAAT PAPER 23X36', '46', '123', '23X36', 'Maat Paper', '128', 2, 14, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(51, 'MAAT PAPER 25X16', '47', '123', '25X16', 'Maat Paper', '80', 2, 14, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(52, 'MAAT PAPER 23X21', '48', '123', '23X21', 'Maat Paper', '80', 2, 14, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(53, 'MAAT PAPER 36X23', '49', '123', '36X23', 'Maat Paper', '80', 2, 14, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(54, 'STICKER 20X30', '50', '123', '20X30', 'INDO', '0', 2, 15, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(55, '18X26', '51', '123', '18X26', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(56, '14X39', '52', '123', '14X39', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(57, '18.5X25', '53', '123', '18.5X25', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(58, '21X32', '54', '123', '21X32', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(59, '20X29', '55', '123', '20X29', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(60, '20X32', '56', '123', '20X32', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(61, '40X16.5', '57', '123', '40X16.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(62, '22X38.50', '58', '123', '22X38.50', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(63, '22.5X40', '59', '123', '22.5X40', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(64, '23X30', '60', '123', '23X30', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(65, '23X27', '61', '123', '23X27', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(66, '23X28', '62', '123', '23X28', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(67, '23X40', '63', '123', '23X40', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(68, '25X37', '64', '123', '25X37', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(69, '25X31', '65', '123', '25X31', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(70, '25X32.5', '66', '123', '25X32.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(71, '25X26.5', '67', '123', '25X26.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(72, '26.5X32.5', '68', '123', '26.5X32.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(73, '26X32.5', '69', '123', '26X32.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(74, '27X36.5', '70', '123', '27X36.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(75, '28X47', '71', '123', '28X47', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(76, '34X36.5', '72', '123', '34X36.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(77, '34X40', '73', '123', '34X40', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(78, '30X44', '74', '123', '30X44', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(79, '30X28', '75', '123', '30X28', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(80, '30X22', '76', '123', '30X22', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(81, '31X34', '77', '123', '31X34', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(82, '31X42', '78', '123', '31X42', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(83, '31X50', '79', '123', '31X50', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(84, '34X26.5', '80', '123', '34X26.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(85, '34X37', '81', '123', '34X37', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(86, '36X42', '82', '123', '36X42', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(87, '36X46', '83', '123', '36X46', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(88, '36X29', '84', '123', '36X29', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(89, '36X50', '85', '123', '36X50', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(90, '37X50', '86', '123', '37X50', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(91, '37X25', '87', '123', '37X25', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(92, '37X27', '88', '123', '37X27', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(93, '40X28', '89', '123', '40X28', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(94, '40X29', '90', '123', '40X29', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(95, '40.5X31', '91', '123', '40.5X31', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(96, '40X32', '92', '123', '40X32', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(97, '40X13', '93', '123', '40X13', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(98, '41X30', '94', '123', '41X30', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(99, '41X32', '95', '123', '41X32', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(100, '42X28', '96', '123', '42X28', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(101, '42X26', '97', '123', '42X26', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(102, '42X33', '98', '123', '42X33', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(103, '42X39', '99', '123', '42X39', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(104, '43X17.5', '100', '123', '43X17.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(105, '43X47', '101', '123', '43X47', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(106, '44X36', '102', '123', '44X36', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(107, '44X42', '103', '123', '44X42', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(108, '44X29', '104', '123', '44X29', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(109, '44X38', '105', '123', '44X38', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(110, '45X29', '106', '123', '45X29', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(111, '46X26', '107', '123', '46X26', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(112, '46X34', '108', '123', '46X34', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(113, '26.5X49', '109', '123', '26.5X49', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(114, '54X24.5', '110', '123', '54X24.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(115, '50X30', '111', '123', '50X30', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(116, '50X34', '112', '123', '50X34', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(117, '50X37', '113', '123', '50X37', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(118, '50X36', '114', '123', '50X36', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(119, '53X42', '115', '123', '53X42', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(120, '54X27', '116', '123', '54X27', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(121, '56.69X33.5', '117', '123', '56.69X33.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(122, '52X38.5', '118', '123', '52X38.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(123, '52X43', '119', '123', '52X43', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(124, '60X38', '120', '123', '60X38', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(125, '60X42', '121', '123', '60X42', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(126, '60X36', '122', '123', '60X36', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(127, '31X28.5', '123', '123', '31X28.5', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(128, '25X34', '124', '123', '25X34', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(129, '45X29', '125', '123', '45X29', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(130, '15X9.66', '126', '123', '15X9.66', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(131, '36X40.5', '127', '123', '36X40.5', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(132, '50X36', '128', '123', '50X36', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(133, '20X31', '129', '123', '20X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(134, '22X15', '130', '123', '22X15', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(135, '23X36', '131', '123', '23X36', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(136, '36X23', '132', '123', '36X23', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(137, '24X32', '133', '123', '24X32', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(138, '25X30', '134', '123', '25X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(139, '22X45', '135', '123', '22X45', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(140, '27X31', '136', '123', '27X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(141, '36X50', '137', '123', '36X50', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(142, '17X31', '138', '123', '17X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(143, '21.5X20', '139', '123', '21.5X20', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(144, '22X31', '140', '123', '22X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(145, '22X33', '141', '123', '22X33', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(146, '40X28', '142', '123', '40X28', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(147, '40X30', '143', '123', '40X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(148, '48X32', '144', '123', '48X32', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(149, '40X32', '145', '123', '40X32', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(150, '40X36', '146', '123', '40X36', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(151, '42X45', '147', '123', '42X45', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(152, '44X30', '148', '123', '44X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(153, '44X33', '149', '123', '44X33', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(154, '42X30', '150', '123', '42X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(155, '40X31', '151', '123', '40X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(156, '42X26', '152', '123', '42X26', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(157, '44X31', '153', '123', '44X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(158, '44X14', '154', '123', '44X14', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(159, '46X30', '155', '123', '46X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(160, '42X29', '156', '123', '42X29', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(161, '50X30', '157', '123', '50X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(162, '50X32', '158', '123', '50X32', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(163, '50X43', '159', '123', '50X43', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(164, '25X31', '160', '123', '25X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(165, '48X28.5', '161', '123', '48X28.5', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(166, '40X23', '162', '123', '40X23', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(167, '36X25.5 (Simplicity)', '163', '123', '36X25.5', 'POLO', '230', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(168, '23X36', '164', '123', '23X36', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(169, '30X25', '165', '123', '30X25', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(170, '22X28', '166', '123', '22X28', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(171, '25X30', '167', '123', '25X30', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(172, '25X36', '168', '123', '25X36', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(173, '28X45', '169', '123', '28X45', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(174, '36X40', '170', '123', '36X40', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(175, '36X50', '171', '123', '36X50', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(176, '28.5X42', '172', '123', '28.5X42', 'LOCAL', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(177, '28.75X21', '173', '123', '28.75X21', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(178, '30X27', '174', '123', '30X27', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(179, '30X50', '175', '123', '30X50', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(180, '40X27', '176', '123', '40X27', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(181, '40X45', '177', '123', '40X45', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(182, '40X32', '178', '123', '40X32', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(183, '44X30', '179', '123', '44X30', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(184, '44X33', '180', '123', '44X33', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(185, '44X34.5', '181', '123', '44X34.5', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(186, '46X32', '182', '123', '46X32', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(187, '34X27', '183', '123', '34X27', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(188, '47X28.5', '184', '123', '47X28.5', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(189, '47X27', '185', '123', '47X27', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(190, '47X28', '186', '123', '47X28', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(191, '40X33', '187', '123', '40X33', 'LOCAL', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(192, '40X33', '188', '123', '40X33', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(193, '40X36', '189', '123', '40X36', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(194, '40X50', '190', '123', '40X50', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(195, '50X40', '191', '123', '50X40', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(196, '50X40', '192', '123', '50X40', 'LOCAL', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(197, '22X28', '193', '123', '22X28', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(198, '23X35', '194', '123', '23X35', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(199, '23X36', '195', '123', '23X36', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(200, '25X41', '196', '123', '25X41', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(201, '25X42', '197', '123', '25X42', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(202, '25X43', '198', '123', '25X43', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(203, '30X25', '199', '123', '30X25', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(204, '31X28.5', '200', '123', '31X28.5', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(205, '32X46', '201', '123', '32X46', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(206, '33X24', '202', '123', '33X24', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(207, '35X26', '203', '123', '35X26', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(208, '42X36', '204', '123', '42X36', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(209, '40X30', '205', '123', '40X30', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(210, '40X36', '206', '123', '40X36', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(211, '40X32', '207', '123', '40X32', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(212, '40X52', '208', '123', '40X52', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(213, '40X50', '209', '123', '40X50', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(214, '34.5X27', '210', '123', '34.5X27', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(215, '44X30', '211', '123', '44X30', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(216, '44X31', '212', '123', '44X31', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(217, '44X33', '213', '123', '44X33', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(218, '46X30', '214', '123', '46X30', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(219, '30X49', '215', '123', '30X49', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(220, '36X50', '216', '123', '36X50', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(221, '36X42', '217', '123', '36X42', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(222, '46X33', '218', '123', '46X33', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(223, '50X40', '219', '123', '50X40', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(224, '52X40', '220', '123', '52X40', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(225, '25X30', '221', '123', '25X30', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(226, '25X36', '222', '123', '25X36', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(227, '36X26.5', '223', '123', '36X26.5', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(228, '40X28', '224', '123', '40X28', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(229, '19.5X28', '225', '123', '19.5X28', 'LOCAL', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(230, '38X30', '226', '123', '38X30', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(231, '25X36', '227', '123', '25X36', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(232, '43X27', '228', '123', '43X27', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(233, '47X27', '229', '123', '47X27', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(234, '44X34', '230', '123', '44X34', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(235, '46X42', '231', '123', '46X42', 'BURGO', '250', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(236, '46X17', '232', '123', '46X17', 'BURGO', '250', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(237, '25X30', '233', '123', '25X30', 'BURGO', '300', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(238, '36X50', '234', '123', '36X50', 'BURGO', '300', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(239, '36X29', '235', '123', '36X29', 'BURGO', '300', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(240, '46X18', '236', '123', '46X18', 'BURGO', '300', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(241, '46X33', '237', '123', '46X33', 'BURGO', '300', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(242, '25X30', '238', '123', '25X30', 'BURGO', '350', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(243, 'MC-1', '239', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(244, 'MC- 2', '240', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(245, 'MC- 3', '241', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(246, 'MC- 4', '242', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(247, 'MC- 5', '243', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(248, 'MC- 6', '244', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(249, 'MC- 7', '245', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(250, 'MC- 8', '246', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(251, 'MC- 10', '247', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(252, 'MC-11', '248', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(253, 'MC-12', '249', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(254, 'MC-13', '250', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(255, 'MC-14', '251', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(256, 'MC-15', '252', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(257, 'MC-16', '253', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(258, 'MC-17', '254', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(259, 'MC-18', '255', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(260, 'MC-18(new)', '256', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(261, 'MC-19', '257', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(262, 'MC-20', '258', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(263, 'MC-21', '259', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(264, 'MC-22', '260', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(265, 'MC-23', '261', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(266, 'MC-24', '262', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(267, 'MC-25', '263', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(268, 'MC-26', '264', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(269, 'MC-27', '265', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(270, 'MC-28', '266', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(271, 'MC-29', '267', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(272, 'MC-30', '268', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(273, 'MC-32', '269', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(274, 'MC-33', '270', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(275, 'MC-34', '271', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(276, 'MC-35', '272', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `production_flow`
--

CREATE TABLE `production_flow` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `machine` int(11) NOT NULL,
  `priority` varchar(10) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_flow`
--

INSERT INTO `production_flow` (`id`, `plane_id`, `type`, `machine`, `priority`, `parent_id`, `start_date`, `end_date`) VALUES
(129, 38, '4', 1, 'Hi', 0, '2018-09-04 01:02:00', '2018-09-10 01:00:00'),
(130, 38, '7', 8, 'Hi', 4, '2018-09-06 10:10:00', '2018-09-07 14:00:00'),
(131, 38, '8', 10, 'Hi', 7, '2018-09-06 01:00:00', '2018-09-07 01:00:00'),
(132, 38, '12', 16, 'Hi', 8, '2018-09-08 01:00:00', '2018-09-09 01:00:00'),
(133, 38, '10', 0, 'Hi', 12, '2018-09-10 01:00:00', '2018-09-11 01:00:00'),
(134, 38, '16', 24, 'Hi', 10, '2018-09-10 01:00:00', '2018-09-10 01:00:00'),
(135, 39, '4', 1, 'Hi', 0, '2018-09-04 01:00:00', '2018-09-05 01:00:00'),
(136, 39, '7', 8, 'Hi', 4, '2018-09-06 01:00:00', '2018-09-07 02:00:00'),
(137, 39, '10', 0, 'Hi', 7, '2018-09-08 01:01:00', '2018-09-09 01:00:00'),
(138, 39, '13', 18, 'Hi', 10, '2018-09-09 01:00:00', '2018-09-10 01:00:00'),
(139, 39, '15', 22, 'Hi', 13, '2018-09-11 01:00:00', '2018-09-12 01:00:00'),
(140, 39, '16', 24, 'Hi', 15, '2018-09-13 01:00:00', '2018-09-14 01:00:00'),
(141, 39, '17', 0, 'Hi', 16, '2018-09-15 01:00:00', '2018-09-16 01:00:00'),
(142, 40, '4', 1, 'Hi', 0, '2018-09-03 13:00:00', '2018-09-04 12:21:00'),
(143, 40, '7', 8, 'Hi', 4, '2018-09-05 01:00:00', '2018-09-06 01:00:00'),
(144, 40, '10', 0, 'Hi', 7, '2018-09-07 01:01:00', '2018-09-08 01:01:00'),
(145, 40, '13', 18, 'Hi', 13, '2018-09-09 01:00:00', '2018-09-10 01:00:00'),
(146, 40, '15', 22, 'Hi', 13, '2018-09-11 01:00:00', '2018-09-14 01:00:00'),
(147, 40, '16', 24, 'Hi', 15, '2018-09-15 01:01:00', '2018-09-24 13:00:00'),
(148, 41, '4', 1, 'Hi', 0, '2018-09-04 00:12:00', '2018-09-05 00:12:00'),
(149, 41, '7', 8, 'Hi', 4, '2018-09-06 01:00:00', '2018-09-07 01:01:00'),
(150, 41, '10', 0, 'Hi', 7, '2018-09-08 01:00:00', '2018-09-09 01:00:00'),
(151, 41, '13', 18, 'Hi', 10, '2018-09-10 00:12:00', '2018-09-11 00:12:00'),
(152, 41, '15', 22, 'Hi', 13, '2018-09-12 00:12:00', '2018-09-13 02:12:00'),
(153, 41, '16', 24, 'Hi', 15, '2018-09-14 04:45:00', '2018-09-15 00:12:00'),
(154, 41, '20', 0, 'Hi', 16, '2018-09-16 00:12:00', '2018-09-17 00:12:00'),
(155, 42, '21', 0, 'Hi', 0, '2018-09-05 01:00:00', '2018-09-06 01:00:00'),
(156, 42, '16', 24, 'Hi', 21, '2018-09-07 01:00:00', '2018-09-25 01:00:00'),
(157, 43, '21', 0, 'Hi', 0, '2018-09-05 01:00:00', '2018-09-08 01:00:00'),
(158, 43, '16', 24, 'Hi', 21, '2018-09-09 01:00:00', '2018-09-11 01:00:00'),
(159, 44, '4', 1, 'Low', 0, '2018-09-05 01:00:00', '2018-09-05 01:00:00'),
(160, 44, '7', 8, 'Hi', 4, '2018-09-06 01:59:00', '2018-09-07 01:00:00'),
(161, 44, '10', 0, 'Hi', 7, '2018-09-08 01:00:00', '2018-09-09 01:00:00'),
(162, 44, '13', 18, 'Hi', 10, '2018-09-10 01:00:00', '2018-09-11 01:00:00'),
(163, 44, '15', 22, 'Hi', 13, '2018-09-11 01:00:00', '2018-09-11 01:00:00'),
(164, 44, '16', 24, 'Hi', 15, '2018-09-12 02:00:00', '2018-09-12 01:00:00'),
(165, 44, '20', 0, 'Hi', 16, '2018-09-13 01:00:00', '2018-09-13 01:00:00'),
(166, 45, '4', 1, 'Hi', 4, '2018-09-05 01:00:00', '2018-09-05 01:00:00'),
(167, 45, '7', 8, 'Hi', 4, '2018-09-06 01:00:00', '2018-09-07 01:00:00'),
(168, 45, '8', 10, 'Hi', 7, '2018-09-07 01:00:00', '2018-09-08 01:00:00'),
(169, 46, '4', 1, 'Hi', 0, '2018-09-05 01:00:00', '2018-09-06 01:00:00'),
(170, 46, '7', 8, 'Hi', 4, '2018-09-06 01:01:00', '2018-09-07 13:00:00'),
(171, 46, '8', 10, 'Hi', 7, '2018-09-05 01:00:00', '2018-09-06 01:00:00'),
(172, 47, '4', 1, 'Hi', 0, '2018-09-06 02:00:00', '2018-09-07 01:01:00'),
(173, 47, '7', 8, 'Hi', 4, '2018-09-08 01:01:00', '2018-09-09 02:00:00'),
(174, 47, '22', 0, 'Hi', 7, '2018-09-09 01:01:00', '2018-09-10 01:01:00'),
(175, 47, '20', 0, 'Hi', 22, '2018-09-11 14:00:00', '2018-09-12 13:00:00'),
(176, 47, '21', 0, 'Hi', 20, '2018-09-13 14:00:00', '2018-09-14 13:00:00'),
(177, 47, '16', 24, 'Hi', 21, '2018-09-15 13:01:00', '2018-09-16 01:00:00'),
(178, 48, '4', 1, 'Hi', 0, '2018-09-06 01:00:00', '2018-09-09 01:00:00'),
(179, 48, '7', 8, 'Hi', 4, '2018-09-10 01:00:00', '2018-09-16 01:02:00'),
(180, 48, '16', 24, 'Hi', 7, '2018-10-17 01:00:00', '2018-09-24 01:00:00'),
(181, 49, '4', 1, 'Hi', 0, '2018-09-06 14:00:00', '2018-09-09 14:00:00'),
(182, 49, '7', 8, 'Hi', 4, '2018-09-10 14:00:00', '2018-09-14 14:00:00'),
(183, 49, '22', 0, 'Hi', 7, '2018-09-15 13:01:00', '2018-09-19 13:00:00'),
(184, 50, '4', 1, 'Hi', 0, '2018-09-06 01:01:00', '2018-09-07 01:00:00'),
(185, 50, '7', 8, 'Hi', 4, '2018-09-08 13:00:00', '2018-09-10 13:00:00'),
(186, 50, '22', 0, 'Hi', 7, '2018-09-11 02:00:00', '2018-09-13 01:01:00'),
(187, 50, '13', 18, 'Hi', 22, '2018-09-14 13:12:00', '2018-09-15 12:31:00'),
(188, 50, '15', 22, 'Hi', 13, '2018-09-16 01:00:00', '2018-09-20 01:00:00'),
(189, 50, '20', 0, 'Hi', 15, '2018-09-21 01:00:00', '2018-09-22 01:01:00'),
(190, 50, '16', 24, 'Hi', 20, '2018-09-23 01:00:00', '2018-09-24 01:00:00'),
(191, 51, '4', 1, 'Hi', 0, '2018-09-11 16:13:00', '2018-09-12 14:22:00'),
(192, 51, '7', 8, 'Hi', 4, '2018-09-13 14:22:00', '2018-09-14 14:22:00'),
(193, 51, '22', 0, 'Hi', 7, '2018-09-15 14:22:00', '2018-09-16 14:22:00'),
(194, 51, '11', 14, 'Hi', 22, '2018-09-17 14:22:00', '2018-09-18 14:22:00'),
(195, 51, '10', 0, 'Hi', 11, '2018-09-19 14:22:00', '2018-09-20 14:22:00'),
(196, 51, '16', 24, 'Hi', 10, '2018-09-21 14:22:00', '2018-09-21 14:22:00'),
(197, 52, '4', 1, 'Hi', 0, '2018-09-13 14:22:00', '2018-09-13 14:22:00'),
(198, 52, '16', 0, 'Hi', 4, '2018-09-20 14:22:00', '2018-09-15 14:22:00'),
(199, 53, '4', 1, 'Hi', 0, '2018-09-20 14:22:00', '2018-09-21 14:22:00'),
(200, 53, '7', 0, 'Hi', 4, '2018-09-22 12:12:00', '2018-09-23 15:44:00'),
(201, 53, '22', 0, 'Hi', 7, '2018-09-24 14:22:00', '2018-09-25 14:22:00'),
(202, 53, '11', 14, 'Hi', 22, '2018-09-26 14:22:00', '2018-09-28 14:22:00'),
(203, 53, '10', 0, 'Hi', 11, '2018-09-29 14:22:00', '2018-09-30 14:22:00'),
(204, 53, '16', 24, 'Hi', 10, '2018-09-30 14:22:00', '2018-10-01 14:22:00'),
(205, 54, '4', 1, 'Hi', 0, '2018-09-12 14:22:00', '2018-09-26 14:22:00'),
(206, 54, '7', 8, 'Hi', 4, '2018-09-13 23:11:00', '2018-09-13 11:11:00'),
(207, 54, '22', 0, 'Hi', 7, '2018-09-14 23:11:00', '2018-09-15 23:11:00'),
(208, 54, '13', 18, 'Hi', 22, '2018-09-16 16:04:00', '2018-09-17 16:44:00'),
(209, 54, '15', 22, 'Hi', 13, '2018-09-18 12:59:00', '2018-09-19 12:59:00'),
(210, 54, '14', 20, 'Hi', 15, '2018-09-20 15:33:00', '2018-09-21 14:33:00'),
(211, 54, '10', 0, 'Hi', 14, '2018-09-22 14:22:00', '2018-09-23 14:22:00'),
(212, 54, '20', 0, 'Hi', 10, '2018-09-24 14:22:00', '2018-09-25 14:22:00'),
(213, 54, '16', 24, 'Hi', 20, '2018-09-25 15:33:00', '2018-09-26 17:55:00'),
(214, 54, '4', 1, 'Hi', 0, '2018-09-14 15:33:00', '2018-09-15 15:33:00'),
(215, 54, '7', 8, 'Hi', 4, '2018-09-16 14:22:00', '2018-09-17 14:23:00'),
(216, 54, '16', 24, 'Low', 7, '2018-09-18 14:32:00', '2018-09-19 14:22:00'),
(217, 56, '4', 2, 'Hi', 0, '2018-09-14 14:22:00', '2018-09-15 14:22:00'),
(218, 56, '7', 8, 'Hi', 4, '2018-09-16 14:22:00', '2018-09-17 14:22:00'),
(219, 56, '16', 24, 'Hi', 7, '2018-09-19 14:22:00', '2018-09-20 14:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `production_plan`
--

CREATE TABLE `production_plan` (
  `id` int(11) UNSIGNED NOT NULL,
  `Date` date DEFAULT NULL,
  `WO_no` varchar(250) DEFAULT NULL,
  `MIS_no` varchar(250) DEFAULT NULL,
  `Job_Description` varchar(250) DEFAULT NULL,
  `Board_Name` varchar(250) DEFAULT NULL,
  `Gsm` varchar(250) DEFAULT NULL,
  `Board_Size` varchar(250) DEFAULT NULL,
  `Quantity` varchar(250) DEFAULT NULL,
  `pack_sheet` int(11) NOT NULL,
  `Conversion` varchar(250) DEFAULT NULL,
  `Planned_sheet_Size` varchar(250) DEFAULT NULL,
  `Balanced_Offcut_Size` varchar(250) DEFAULT NULL,
  `Offcut_Quantity` varchar(250) DEFAULT NULL,
  `PO_Qty` int(11) DEFAULT NULL,
  `Planned_qty_sheets` int(11) DEFAULT NULL,
  `Ups` varchar(250) DEFAULT NULL,
  `Planned_qty` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_plan`
--

INSERT INTO `production_plan` (`id`, `Date`, `WO_no`, `MIS_no`, `Job_Description`, `Board_Name`, `Gsm`, `Board_Size`, `Quantity`, `pack_sheet`, `Conversion`, `Planned_sheet_Size`, `Balanced_Offcut_Size`, `Offcut_Quantity`, `PO_Qty`, `Planned_qty_sheets`, `Ups`, `Planned_qty`, `user_id`, `created_at`) VALUES
(51, '2018-09-11', '54', '', 'C/N BAYDAL SYRUP 60ML T/P', 'NA', 'NA', '42X29/250GM', '0', 0, 'NA', '', '', '', 131, 24, '6', 144, 2, '2018-09-11 11:10:05'),
(52, '2018-09-11', '55', '', 'C/N BAYDAL SYRUP 60ML T/P', 'NA', 'NA', '42X29/250GM', '0', 0, 'NA', '', '', '', 22, 4, '6', 24, 2, '2018-09-11 11:41:07'),
(53, '2018-09-12', '58', '', 'C/N BAYDAL SYRUP 60ML T/P', 'NA', 'NA', '42X29/250GM', '0', 0, 'NA', '3212', '', '22332', 132, 24, '6', 145, 2, '2018-09-12 05:17:57'),
(54, '2018-09-12', '59', 'fffdfdfd', 'CARTON VIDAYLN DROPS 10ML.', 'NA', 'NA', '30X50/250GM', '0', 0, 'NA', 'ffddf', 'dfdf', 'fdfd', 0, 0, '12', 0, 2, '2018-09-12 05:42:07'),
(55, '2018-09-12', '60', '5558', 'LEAFLET IZEK IV 40MG (YMN)', 'NA', 'NA', '30X40/55GM', '0', 0, 'NA', '', '', '', 50000, 6875, '8', 55000, 2, '2018-09-12 10:46:21'),
(56, '2018-09-14', '61', '', 'CARTON ADVANT TAB 16MG PS', 'NA', 'NA', '36X27/300GM', '0', 0, 'NA', '', '', '', 1000, 138, '8', 1100, 2, '2018-09-14 06:16:31'),
(57, '2018-09-14', '62', '', 'LABEL BAYDAL SYRUP 60ML T/P', 'NA', 'NA', '40X28/80GM', '0', 0, 'NA', '', '', '', 50000, 4583, '12', 55000, 2, '2018-09-14 11:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_release`
--

CREATE TABLE `product_release` (
  `id` int(11) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Reference_No` int(100) NOT NULL,
  `Store` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Note` text,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_release_product`
--

CREATE TABLE `product_release_product` (
  `id` int(11) NOT NULL,
  `product_release_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `received_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Reference_No` int(100) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `Attach_Document` varchar(255) DEFAULT NULL,
  `Supplier` int(11) NOT NULL,
  `Order_Tax` varchar(100) DEFAULT NULL,
  `Discount` varchar(100) DEFAULT NULL,
  `Shipping` varchar(100) DEFAULT NULL,
  `Payment_Term` varchar(100) DEFAULT NULL,
  `Note` text,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_product`
--

CREATE TABLE `purchase_product` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `received_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quality_inspection_machine_report`
--

CREATE TABLE `quality_inspection_machine_report` (
  `id` int(11) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `po_no` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `operator_name` varchar(255) NOT NULL,
  `good_qty` varchar(255) NOT NULL,
  `total_time_consumed` varchar(255) NOT NULL,
  `time_consumed_to` varchar(255) NOT NULL,
  `time_consumed_from` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quality_inspection_machine_report_parameters`
--

CREATE TABLE `quality_inspection_machine_report_parameters` (
  `id` int(11) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `quality_inspection_machine_report_id` int(11) NOT NULL,
  `color_variation_accept` varchar(255) NOT NULL,
  `color_variation_reject_qty` varchar(255) NOT NULL,
  `color_variation_remarks` varchar(255) NOT NULL,
  `oil_stains_accept` varchar(255) NOT NULL,
  `oil_stains_reject_qty` varchar(255) NOT NULL,
  `oil_stains_remarks` varchar(255) NOT NULL,
  `ghosting_accept` varchar(255) NOT NULL,
  `ghosting_reject_qty` varchar(255) NOT NULL,
  `ghosting_remarks` varchar(255) NOT NULL,
  `bur_accept` varchar(255) NOT NULL,
  `bur_reject_qty` varchar(255) NOT NULL,
  `bur_remarks` varchar(255) NOT NULL,
  `spots_accept` varchar(255) NOT NULL,
  `spots_reject_qty` varchar(255) NOT NULL,
  `spots_remarks` varchar(255) NOT NULL,
  `edges_accept` varchar(255) NOT NULL,
  `edges_reject_qty` varchar(255) NOT NULL,
  `edges_remarks` varchar(255) NOT NULL,
  `cutting_out_accept` varchar(255) NOT NULL,
  `cutting_out_reject_qty` varchar(255) NOT NULL,
  `cutting_out_remarks` varchar(255) NOT NULL,
  `scum_accept` varchar(255) NOT NULL,
  `scum_reject_qty` varchar(255) NOT NULL,
  `scum_remarks` varchar(255) NOT NULL,
  `cracking_accept` varchar(255) NOT NULL,
  `cracking_reject_qty` varchar(255) NOT NULL,
  `cracking_remarks` varchar(255) NOT NULL,
  `dark_background_accept` varchar(255) NOT NULL,
  `dark_background_reject_qty` varchar(255) NOT NULL,
  `dark_background_remarks` varchar(255) NOT NULL,
  `light_background_accept` varchar(255) NOT NULL,
  `light_background_reject_qty` varchar(255) NOT NULL,
  `light_background_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quantity_adjustments`
--

CREATE TABLE `quantity_adjustments` (
  `id` int(11) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Note` text NOT NULL,
  `Product` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rejection_report`
--

CREATE TABLE `rejection_report` (
  `id` int(11) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `date` varchar(200) DEFAULT NULL,
  `po_no` varchar(200) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `sorter_name` varchar(255) DEFAULT NULL,
  `good_qty` varchar(255) DEFAULT NULL,
  `time_consumed_to` varchar(255) DEFAULT NULL,
  `time_consumed_from` varchar(255) DEFAULT NULL,
  `type_of_rejection` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rejection_report_parameter`
--

CREATE TABLE `rejection_report_parameter` (
  `id` int(11) NOT NULL,
  `rejection_report_id` int(11) NOT NULL,
  `wo_no` int(100) NOT NULL,
  `color_variation_accept` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_variation_reject_qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_variation_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stains_accept` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stains_reject_qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stains_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bur_accept` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bur_reject_qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bur_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `over_glueing_accept` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `over_glueing_reject_qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `over_glueing_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sport_accept` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sport_reject_qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sport_reject_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edges_accept` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edges_reject_qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edges_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cutting_out_accept` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cutting_out_reject_qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cutting_out_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `print_un_smooth_accept` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `print_un_smooth_reject_qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `print_un_smooth_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scum_accept` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scum_reject_qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scum_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cutting_hard_accept` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cutting_hard_reject_qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cutting_hard_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cracking_accept` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cracking_reject_qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cracking_remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requisition`
--

CREATE TABLE `requisition` (
  `id` int(11) NOT NULL,
  `wo_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requisition_product`
--

CREATE TABLE `requisition_product` (
  `id` int(11) NOT NULL,
  `requisition_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `received_quantity` int(11) NOT NULL,
  `pending_quantity` int(11) NOT NULL DEFAULT '0',
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sorting`
--

CREATE TABLE `sorting` (
  `id` int(11) NOT NULL,
  `wo_no` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `date` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `name_of_sorter` varchar(250) NOT NULL,
  `time_from` varchar(250) NOT NULL,
  `time_to` varchar(250) NOT NULL,
  `recived_quantity` int(11) NOT NULL,
  `good_quantity` int(11) NOT NULL,
  `half_good_quantity` int(11) NOT NULL,
  `waste_quantity` int(11) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sorting`
--

INSERT INTO `sorting` (`id`, `wo_no`, `plane_id`, `flow_id`, `date`, `description`, `name_of_sorter`, `time_from`, `time_to`, `recived_quantity`, `good_quantity`, `half_good_quantity`, `waste_quantity`, `remarks`, `user_id`) VALUES
(10, 54, 51, 195, '', 'C/N BAYDAL SYRUP 60ML T/P', 'sdfsd', '15:33', '02:22', 33, 333, 33, 333, '3', 2),
(11, 58, 53, 203, '', 'C/N BAYDAL SYRUP 60ML T/P', 'sdfsd', '15:33', '15:33', 0, 33, 33, 0, '', 2),
(12, 59, 54, 211, '', 'CARTON VIDAYLN DROPS 10ML.', '', '', '', 0, 0, 0, 0, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stripping_report`
--

CREATE TABLE `stripping_report` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `WO_no` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `description` varchar(250) NOT NULL,
  `name_of_workers` varchar(100) NOT NULL,
  `time_from` varchar(250) NOT NULL,
  `time_to` varchar(250) NOT NULL,
  `recived_quantity` int(11) NOT NULL,
  `finished_quantity` int(11) NOT NULL,
  `sorter` varchar(250) NOT NULL,
  `supervisior` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stripping_report`
--

INSERT INTO `stripping_report` (`id`, `plane_id`, `flow_id`, `WO_no`, `date`, `description`, `name_of_workers`, `time_from`, `time_to`, `recived_quantity`, `finished_quantity`, `sorter`, `supervisior`, `user_id`, `created_at`) VALUES
(1, 54, 212, 59, '2018/09/12', 'dd', 'sdsd', '', '', 231, 2121, '2121', '2121', 2, '2018-09-12 06:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(245) NOT NULL,
  `Parent_Category` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `Name`, `Parent_Category`, `user_id`, `created_at`) VALUES
(2, 'Art Paper', 2, 2, '2018-03-12 06:59:40'),
(3, 'Offset Paper', 2, 2, '2018-03-12 06:59:54'),
(4, 'Flying Paper', 2, 2, '2018-03-12 07:00:05'),
(5, 'Art Card', 3, 2, '2018-03-12 08:58:21'),
(6, 'Plastic Card', 3, 2, '2018-03-12 08:58:28'),
(7, 'Bleach Card', 3, 2, '2018-03-12 08:59:10'),
(8, 'Box Board Polo', 4, 2, '2018-03-12 09:00:22'),
(9, 'Box Board Burgo', 4, 2, '2018-03-12 09:00:44'),
(10, 'Master Carton ', 5, 2, '2018-03-12 09:03:10'),
(11, 'Ink', 6, 2, '2018-03-12 09:04:10'),
(12, 'Chemicals', 6, 2, '2018-03-12 09:04:22'),
(14, 'Maat Paper', 2, 2, '2018-03-12 09:29:23'),
(15, 'Sticker', 2, 2, '2018-03-12 09:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `sub_store`
--

CREATE TABLE `sub_store` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_store`
--

INSERT INTO `sub_store` (`id`, `Name`, `user_id`, `created_at`) VALUES
(1, 'First Store', 2, '2018-03-13 05:42:49'),
(2, 'Second Store ', 2, '2018-03-13 05:43:00'),
(3, 'Third Store', 2, '2018-03-13 05:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) UNSIGNED NOT NULL,
  `Remarks` varchar(321) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(2, 'admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 1),
(5, 'Production', 'production@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2),
(6, 'Originated', 'originated@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 3),
(7, 'Process', 'process@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 4),
(8, 'Store', 'store@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 5),
(9, 'Qc', 'qc@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 6),
(10, 'Reports', 'report@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 8),
(11, 'Hammad Ahmed', 'hammada526@gmail.com', '60136e8ad62a65a3a1765aea3866e749', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `user_id`) VALUES
(1, 'Admin', 2),
(2, 'Production Plane', 2),
(3, 'Originated dep', 2),
(4, 'Pre Process', 2),
(5, 'Store', 2),
(6, 'Qc', 2),
(7, 'Press', 2),
(8, 'Report', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vednor`
--

CREATE TABLE `vednor` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vednor`
--

INSERT INTO `vednor` (`id`, `Name`, `user_id`, `created_at`) VALUES
(1, 'Pakistan Paper Products', 2, '2018-03-12 06:44:10'),
(2, 'RIFLE PAPER Co', 2, '2018-03-12 06:44:24'),
(3, 'Sullivan Paper Company', 2, '2018-03-12 06:44:33'),
(4, 'The Printing Ink Company', 2, '2018-03-12 06:44:53'),
(5, 'Superior Printing Inks', 2, '2018-03-12 06:45:10'),
(6, 'Quantum Ink', 2, '2018-03-12 06:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `work_orders`
--

CREATE TABLE `work_orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `Client` int(11) DEFAULT NULL,
  `Item_Code` int(11) DEFAULT NULL,
  `quantity` varchar(250) DEFAULT NULL,
  `PO_No` varchar(250) DEFAULT NULL,
  `PO_Date` varchar(250) DEFAULT NULL,
  `Batch_No` varchar(250) DEFAULT NULL,
  `Delivery_Date` varchar(250) DEFAULT NULL,
  `Delivery_Status` varchar(250) DEFAULT NULL,
  `Instruction_Remarks` text,
  `approval` int(11) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_orders`
--

INSERT INTO `work_orders` (`id`, `Client`, `Item_Code`, `quantity`, `PO_No`, `PO_Date`, `Batch_No`, `Delivery_Date`, `Delivery_Status`, `Instruction_Remarks`, `approval`, `status`, `user_id`, `created_at`) VALUES
(56, 0, 0, '13', '123ffff', '2018-09-19', 'test323', '2018-09-13', 'N', '32332', 0, 'New', 2, '2018-09-12 05:16:04'),
(57, 0, 0, '3233', '3232', '', '3232', '', 'N', '2323', 0, 'New', 2, '2018-09-12 05:16:22'),
(58, 8, 2, '132', '2121', '2018-09-12', '21212', '2018-09-14', 'N', '2121', 0, 'New', 2, '2018-09-12 05:17:30'),
(59, 9, 12, '', 'fddf', '2018-09-12', 'fddf', '2018-09-13', 'N', 'ffd', 0, 'New', 2, '2018-09-12 05:41:31'),
(60, 10, 747, '50000', '5525', '2018-09-12', '', '2018-09-28', 'N', 'asd', 0, 'New', 2, '2018-09-12 10:33:57'),
(61, 10, 367, '1000', 'ads', '2018-12-31', '23e2432', '2018-12-31', 'N', 'weqeweq', 1, 'New', 2, '2018-09-13 11:58:21'),
(62, 8, 3, '50000', '558', '2018-09-14', '222', '2018-09-29', 'N', 'ASAP', 0, 'New', 2, '2018-09-14 06:44:59'),
(63, 9, 23, '2332', '3232', '2018-09-14', '3232', '2018-09-15', 'N', '33', 0, 'New', 2, '2018-09-14 09:39:22'),
(64, 8, 8, '2332', '2332', '2018-09-15', '2323', '2018-09-19', 'N', '32332', 0, 'New', 2, '2018-09-14 09:48:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch_release`
--
ALTER TABLE `batch_release`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch_release_parameters`
--
ALTER TABLE `batch_release_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bom`
--
ALTER TABLE `bom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coating`
--
ALTER TABLE `coating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coating_complete`
--
ALTER TABLE `coating_complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coating_hourse`
--
ALTER TABLE `coating_hourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coating_report`
--
ALTER TABLE `coating_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain_assessment_form`
--
ALTER TABLE `complain_assessment_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corrective_action_request`
--
ALTER TABLE `corrective_action_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutting`
--
ALTER TABLE `cutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_challan`
--
ALTER TABLE `delivery_challan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_report`
--
ALTER TABLE `design_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `development_report`
--
ALTER TABLE `development_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `die_cutting`
--
ALTER TABLE `die_cutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `die_cutting_complete`
--
ALTER TABLE `die_cutting_complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `die_cutting_hourse`
--
ALTER TABLE `die_cutting_hourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flows`
--
ALTER TABLE `flows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods_receiving_notes`
--
ALTER TABLE `goods_receiving_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods_receiving_notes_item_desc`
--
ALTER TABLE `goods_receiving_notes_item_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inprocess_inspection_coating`
--
ALTER TABLE `inprocess_inspection_coating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inprocess_inspection_cutting`
--
ALTER TABLE `inprocess_inspection_cutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inprocess_inspection_die_cutting`
--
ALTER TABLE `inprocess_inspection_die_cutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inprocess_inspection_pasting`
--
ALTER TABLE `inprocess_inspection_pasting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inprocess_inspection_printing`
--
ALTER TABLE `inprocess_inspection_printing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inprocess_inspection_printing_frequencies`
--
ALTER TABLE `inprocess_inspection_printing_frequencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investigation_report`
--
ALTER TABLE `investigation_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `label_cutting`
--
ALTER TABLE `label_cutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaflet_cutting`
--
ALTER TABLE `leaflet_cutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line_clearance`
--
ALTER TABLE `line_clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non_comfirmity_report`
--
ALTER TABLE `non_comfirmity_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_flow_start`
--
ALTER TABLE `order_flow_start`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_flow_submission`
--
ALTER TABLE `order_flow_submission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasting`
--
ALTER TABLE `pasting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasting_complete`
--
ALTER TABLE `pasting_complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasting_hourse`
--
ALTER TABLE `pasting_hourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printing`
--
ALTER TABLE `printing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printing_complete`
--
ALTER TABLE `printing_complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printing_hourse`
--
ALTER TABLE `printing_hourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printing_report`
--
ALTER TABLE `printing_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_procedure`
--
ALTER TABLE `process_procedure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_procedure_item_desc`
--
ALTER TABLE `process_procedure_item_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_procedure_remarks`
--
ALTER TABLE `process_procedure_remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production_flow`
--
ALTER TABLE `production_flow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production_plan`
--
ALTER TABLE `production_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_release`
--
ALTER TABLE `product_release`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_release_product`
--
ALTER TABLE `product_release_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality_inspection_machine_report`
--
ALTER TABLE `quality_inspection_machine_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality_inspection_machine_report_parameters`
--
ALTER TABLE `quality_inspection_machine_report_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantity_adjustments`
--
ALTER TABLE `quantity_adjustments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejection_report`
--
ALTER TABLE `rejection_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejection_report_parameter`
--
ALTER TABLE `rejection_report_parameter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisition`
--
ALTER TABLE `requisition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisition_product`
--
ALTER TABLE `requisition_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sorting`
--
ALTER TABLE `sorting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripping_report`
--
ALTER TABLE `stripping_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_store`
--
ALTER TABLE `sub_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vednor`
--
ALTER TABLE `vednor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_orders`
--
ALTER TABLE `work_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch_release`
--
ALTER TABLE `batch_release`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `batch_release_parameters`
--
ALTER TABLE `batch_release_parameters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `bom`
--
ALTER TABLE `bom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `coating`
--
ALTER TABLE `coating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `coating_complete`
--
ALTER TABLE `coating_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `coating_hourse`
--
ALTER TABLE `coating_hourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `coating_report`
--
ALTER TABLE `coating_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `complain_assessment_form`
--
ALTER TABLE `complain_assessment_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `corrective_action_request`
--
ALTER TABLE `corrective_action_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cutting`
--
ALTER TABLE `cutting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `delivery_challan`
--
ALTER TABLE `delivery_challan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `design_report`
--
ALTER TABLE `design_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `development_report`
--
ALTER TABLE `development_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `die_cutting`
--
ALTER TABLE `die_cutting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `die_cutting_complete`
--
ALTER TABLE `die_cutting_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `die_cutting_hourse`
--
ALTER TABLE `die_cutting_hourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `flows`
--
ALTER TABLE `flows`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `goods_receiving_notes`
--
ALTER TABLE `goods_receiving_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `goods_receiving_notes_item_desc`
--
ALTER TABLE `goods_receiving_notes_item_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inprocess_inspection_coating`
--
ALTER TABLE `inprocess_inspection_coating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inprocess_inspection_cutting`
--
ALTER TABLE `inprocess_inspection_cutting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inprocess_inspection_die_cutting`
--
ALTER TABLE `inprocess_inspection_die_cutting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inprocess_inspection_pasting`
--
ALTER TABLE `inprocess_inspection_pasting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inprocess_inspection_printing`
--
ALTER TABLE `inprocess_inspection_printing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inprocess_inspection_printing_frequencies`
--
ALTER TABLE `inprocess_inspection_printing_frequencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `investigation_report`
--
ALTER TABLE `investigation_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1110;
--
-- AUTO_INCREMENT for table `label_cutting`
--
ALTER TABLE `label_cutting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `leaflet_cutting`
--
ALTER TABLE `leaflet_cutting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `line_clearance`
--
ALTER TABLE `line_clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `non_comfirmity_report`
--
ALTER TABLE `non_comfirmity_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_flow_start`
--
ALTER TABLE `order_flow_start`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `order_flow_submission`
--
ALTER TABLE `order_flow_submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `pasting`
--
ALTER TABLE `pasting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pasting_complete`
--
ALTER TABLE `pasting_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pasting_hourse`
--
ALTER TABLE `pasting_hourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2978;
--
-- AUTO_INCREMENT for table `printing`
--
ALTER TABLE `printing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `printing_complete`
--
ALTER TABLE `printing_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `printing_hourse`
--
ALTER TABLE `printing_hourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `printing_report`
--
ALTER TABLE `printing_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `process_procedure`
--
ALTER TABLE `process_procedure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `process_procedure_item_desc`
--
ALTER TABLE `process_procedure_item_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `process_procedure_remarks`
--
ALTER TABLE `process_procedure_remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;
--
-- AUTO_INCREMENT for table `production_flow`
--
ALTER TABLE `production_flow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
--
-- AUTO_INCREMENT for table `production_plan`
--
ALTER TABLE `production_plan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `product_release`
--
ALTER TABLE `product_release`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_release_product`
--
ALTER TABLE `product_release_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase_product`
--
ALTER TABLE `purchase_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quality_inspection_machine_report`
--
ALTER TABLE `quality_inspection_machine_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quality_inspection_machine_report_parameters`
--
ALTER TABLE `quality_inspection_machine_report_parameters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quantity_adjustments`
--
ALTER TABLE `quantity_adjustments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rejection_report`
--
ALTER TABLE `rejection_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rejection_report_parameter`
--
ALTER TABLE `rejection_report_parameter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requisition`
--
ALTER TABLE `requisition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requisition_product`
--
ALTER TABLE `requisition_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sorting`
--
ALTER TABLE `sorting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `stripping_report`
--
ALTER TABLE `stripping_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sub_store`
--
ALTER TABLE `sub_store`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `vednor`
--
ALTER TABLE `vednor`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `work_orders`
--
ALTER TABLE `work_orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
