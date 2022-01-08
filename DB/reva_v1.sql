-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 12:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reva_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `rsm_customer`
--

CREATE TABLE `rsm_customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state_id_fk` int(11) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `gst_no` varchar(100) NOT NULL,
  `pan_no` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `address` text NOT NULL,
  `spoc_name` varchar(100) NOT NULL,
  `spoc_email` varchar(100) NOT NULL,
  `spoc_designation` varchar(100) NOT NULL,
  `spoc_contact` varchar(100) NOT NULL,
  `cus_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsm_customer`
--

INSERT INTO `rsm_customer` (`customer_id`, `name`, `email`, `state_id_fk`, `contact`, `gst_no`, `pan_no`, `status`, `address`, `spoc_name`, `spoc_email`, `spoc_designation`, `spoc_contact`, `cus_del`, `user_id_fk`, `date_added`) VALUES
(1, 'suresh', 'suresh@gmail.com', 1, '86607876545', '6786868767', '876876876876', 0, 'testetstyerytryt', 'test', 'test@gmail.com', 'test', '7878979797', 1, 1, '2021-12-28 21:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_department`
--

CREATE TABLE `rsm_department` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `dep_status` tinyint(4) NOT NULL,
  `dep_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsm_department`
--

INSERT INTO `rsm_department` (`dep_id`, `dep_name`, `dep_status`, `dep_del`, `user_id_fk`, `date_added`) VALUES
(1, 'Marketing', 0, 0, 1, '2022-01-07 05:46:49'),
(2, 'Management', 1, 0, 1, '2022-01-07 22:11:05'),
(3, 'test', 0, 1, 1, '2022-01-07 22:16:44'),
(4, 'test', 0, 1, 1, '2022-01-07 22:16:41'),
(5, 'test123', 0, 1, 1, '2022-01-07 22:15:40'),
(6, 'test123', 0, 1, 1, '2022-01-07 22:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_designation`
--

CREATE TABLE `rsm_designation` (
  `des_id` int(11) NOT NULL,
  `des_name` varchar(100) NOT NULL,
  `department_id_fk` int(11) NOT NULL,
  `des_status` tinyint(4) NOT NULL,
  `des_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsm_designation`
--

INSERT INTO `rsm_designation` (`des_id`, `des_name`, `department_id_fk`, `des_status`, `des_del`, `user_id_fk`, `date_added`) VALUES
(1, 'MD', 2, 0, 0, 1, '2022-01-07 06:08:51'),
(2, 'test', 1, 1, 1, 1, '2022-01-07 22:39:41'),
(3, 'test123', 2, 0, 1, 1, '2022-01-07 22:39:39'),
(4, 'test', 1, 0, 1, 1, '2022-01-07 22:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_gst`
--

CREATE TABLE `rsm_gst` (
  `gst_id` int(11) NOT NULL,
  `gst_name` varchar(100) NOT NULL,
  `gst_status` tinyint(4) NOT NULL,
  `gst_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsm_gst`
--

INSERT INTO `rsm_gst` (`gst_id`, `gst_name`, `gst_status`, `gst_del`, `user_id_fk`, `date_added`) VALUES
(1, '12%', 0, 0, 1, '2022-01-07 06:52:40'),
(2, '0', 0, 0, 1, '2022-01-07 06:52:36'),
(3, '181%', 1, 1, 1, '2022-01-07 23:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_hsn`
--

CREATE TABLE `rsm_hsn` (
  `hsn_id` int(11) NOT NULL,
  `hsn_name` varchar(100) NOT NULL,
  `hsn_status` tinyint(4) NOT NULL,
  `hsn_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsm_hsn`
--

INSERT INTO `rsm_hsn` (`hsn_id`, `hsn_name`, `hsn_status`, `hsn_del`, `user_id_fk`, `date_added`) VALUES
(1, 'test', 1, 0, 1, '2021-12-27 06:23:58'),
(2, 'test12223', 1, 1, 1, '2022-01-07 23:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_item`
--

CREATE TABLE `rsm_item` (
  `item_id` int(11) NOT NULL,
  `item_code` varchar(100) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `item_status` tinyint(4) NOT NULL,
  `item_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rsm_item`
--

INSERT INTO `rsm_item` (`item_id`, `item_code`, `item_name`, `item_type`, `item_status`, `item_del`, `user_id_fk`, `date_added`) VALUES
(1, 'ITME001', 'MOBILE', 'item', 0, 0, 1, '2022-01-08 08:49:40'),
(2, 'ITME002', 'LAPTOP', 'item', 0, 0, 1, '2022-01-08 08:50:27'),
(4, 'ITEM003', 'Display', 'raw', 0, 0, 1, '2022-01-08 08:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_machine`
--

CREATE TABLE `rsm_machine` (
  `machine_id` int(11) NOT NULL,
  `machine_name` varchar(200) NOT NULL,
  `operation` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `make` varchar(250) NOT NULL,
  `machine_status` tinyint(4) NOT NULL,
  `machine_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rsm_machine`
--

INSERT INTO `rsm_machine` (`machine_id`, `machine_name`, `operation`, `category`, `make`, `machine_status`, `machine_del`, `user_id_fk`, `date_added`) VALUES
(1, 'TURNING CENTER-1', 'TURNINING', 'CNC', 'SAILO-CONCUR SL-3', 0, 0, 1, '2022-01-08 09:28:15'),
(2, 'test', 'test', 'tets', 'tets', 0, 1, 1, '2022-01-08 14:01:16'),
(3, 'test12312', 'test123', 'tets123', 'tets123', 0, 1, 1, '2022-01-08 14:01:14'),
(4, 'test12312', 'test123', 'tets123', 'tets123', 0, 1, 1, '2022-01-08 14:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_raw_material`
--

CREATE TABLE `rsm_raw_material` (
  `raw_material_id` int(11) NOT NULL,
  `raw_material_code` varchar(100) NOT NULL,
  `raw_material_name` varchar(100) NOT NULL,
  `raw_material_status` tinyint(4) NOT NULL,
  `raw_material_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsm_raw_material`
--

INSERT INTO `rsm_raw_material` (`raw_material_id`, `raw_material_code`, `raw_material_name`, `raw_material_status`, `raw_material_del`, `user_id_fk`, `date_added`) VALUES
(1, '001', 'Display', 1, 0, 1, '2021-12-28 02:29:34'),
(2, '002', 'Speaker', 1, 0, 1, '2021-12-28 02:30:04'),
(3, '003', 'Battery', 1, 0, 1, '2021-12-28 02:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_role`
--

CREATE TABLE `rsm_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rsm_role`
--

INSERT INTO `rsm_role` (`role_id`, `role_name`, `status`, `date_added`) VALUES
(1, 'Super Admin', 1, '2021-11-28 15:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_source`
--

CREATE TABLE `rsm_source` (
  `source_id` int(11) NOT NULL,
  `source_name` varchar(100) NOT NULL,
  `source_status` tinyint(4) NOT NULL,
  `source_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsm_source`
--

INSERT INTO `rsm_source` (`source_id`, `source_name`, `source_status`, `source_del`, `user_id_fk`, `date_added`) VALUES
(1, 'Website', 1, 0, 1, '2021-12-27 06:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_state`
--

CREATE TABLE `rsm_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `state_status` tinyint(4) NOT NULL,
  `state_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsm_state`
--

INSERT INTO `rsm_state` (`state_id`, `state_name`, `state_status`, `state_del`, `user_id_fk`, `date_added`) VALUES
(1, 'Tamilnadu', 1, 0, 1, '2021-12-28 03:48:04'),
(2, 'Kerala123', 0, 1, 1, '2022-01-08 00:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_unit`
--

CREATE TABLE `rsm_unit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(100) NOT NULL,
  `unit_status` tinyint(4) NOT NULL,
  `unit_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsm_unit`
--

INSERT INTO `rsm_unit` (`unit_id`, `unit_name`, `unit_status`, `unit_del`, `user_id_fk`, `date_added`) VALUES
(1, 'NOS', 0, 0, 1, '2022-01-07 07:21:45'),
(2, 'test123', 0, 1, 1, '2022-01-07 23:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_user`
--

CREATE TABLE `rsm_user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rsm_user`
--

INSERT INTO `rsm_user` (`user_id`, `role_id`, `username`, `password`, `name`, `email`, `status`, `date_added`) VALUES
(1, 1, 'Admin', 'Admin@123', 'Super Admin', 'admin@gmail.com', 1, '2021-11-28 15:31:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rsm_customer`
--
ALTER TABLE `rsm_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `rsm_department`
--
ALTER TABLE `rsm_department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `rsm_designation`
--
ALTER TABLE `rsm_designation`
  ADD PRIMARY KEY (`des_id`);

--
-- Indexes for table `rsm_gst`
--
ALTER TABLE `rsm_gst`
  ADD PRIMARY KEY (`gst_id`);

--
-- Indexes for table `rsm_hsn`
--
ALTER TABLE `rsm_hsn`
  ADD PRIMARY KEY (`hsn_id`);

--
-- Indexes for table `rsm_item`
--
ALTER TABLE `rsm_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `rsm_machine`
--
ALTER TABLE `rsm_machine`
  ADD PRIMARY KEY (`machine_id`);

--
-- Indexes for table `rsm_raw_material`
--
ALTER TABLE `rsm_raw_material`
  ADD PRIMARY KEY (`raw_material_id`);

--
-- Indexes for table `rsm_role`
--
ALTER TABLE `rsm_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `rsm_source`
--
ALTER TABLE `rsm_source`
  ADD PRIMARY KEY (`source_id`);

--
-- Indexes for table `rsm_state`
--
ALTER TABLE `rsm_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `rsm_unit`
--
ALTER TABLE `rsm_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `rsm_user`
--
ALTER TABLE `rsm_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rsm_customer`
--
ALTER TABLE `rsm_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rsm_department`
--
ALTER TABLE `rsm_department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rsm_designation`
--
ALTER TABLE `rsm_designation`
  MODIFY `des_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rsm_gst`
--
ALTER TABLE `rsm_gst`
  MODIFY `gst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rsm_hsn`
--
ALTER TABLE `rsm_hsn`
  MODIFY `hsn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rsm_item`
--
ALTER TABLE `rsm_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rsm_machine`
--
ALTER TABLE `rsm_machine`
  MODIFY `machine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rsm_raw_material`
--
ALTER TABLE `rsm_raw_material`
  MODIFY `raw_material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rsm_role`
--
ALTER TABLE `rsm_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rsm_source`
--
ALTER TABLE `rsm_source`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rsm_state`
--
ALTER TABLE `rsm_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rsm_unit`
--
ALTER TABLE `rsm_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rsm_user`
--
ALTER TABLE `rsm_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
