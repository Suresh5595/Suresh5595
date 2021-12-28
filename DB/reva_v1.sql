-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 06:34 PM
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
(1, 'Marketing', 1, 0, 1, '2021-12-27 06:11:30');

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
(1, '12%', 1, 0, 1, '2021-12-27 06:21:24'),
(2, '0', 1, 0, 1, '2021-12-27 06:21:34');

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
(1, 'test', 1, 0, 1, '2021-12-27 06:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_item`
--

CREATE TABLE `rsm_item` (
  `item_id` int(11) NOT NULL,
  `item_code` varchar(100) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_status` tinyint(4) NOT NULL,
  `item_del` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rsm_item`
--

INSERT INTO `rsm_item` (`item_id`, `item_code`, `item_name`, `item_status`, `item_del`, `user_id_fk`, `date_added`) VALUES
(1, 'ITME001', 'MOBILE', 1, 0, 1, '2021-12-27 06:19:17'),
(2, 'ITME002', 'LAPTOP', 1, 0, 1, '2021-11-28 03:28:19');

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
(1, 'NOS', 1, 0, 1, '2021-12-27 06:25:55');

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
-- AUTO_INCREMENT for table `rsm_department`
--
ALTER TABLE `rsm_department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rsm_designation`
--
ALTER TABLE `rsm_designation`
  MODIFY `des_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rsm_gst`
--
ALTER TABLE `rsm_gst`
  MODIFY `gst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rsm_hsn`
--
ALTER TABLE `rsm_hsn`
  MODIFY `hsn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rsm_item`
--
ALTER TABLE `rsm_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `rsm_unit`
--
ALTER TABLE `rsm_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rsm_user`
--
ALTER TABLE `rsm_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
