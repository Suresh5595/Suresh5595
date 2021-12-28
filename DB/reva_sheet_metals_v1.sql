-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 06:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reva_sheet_metals_v1`
--

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
  `date_added` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rsm_item`
--

INSERT INTO `rsm_item` (`item_id`, `item_code`, `item_name`, `item_status`, `item_del`, `user_id_fk`, `date_added`) VALUES
(1, 'ITME001', 'MOBILE', 1, 0, 1, '2021-11-28 03:28:47'),
(2, 'ITME002', 'LAPTOP', 1, 0, 1, '2021-11-28 03:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `rsm_role`
--

CREATE TABLE `rsm_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rsm_role`
--

INSERT INTO `rsm_role` (`role_id`, `role_name`, `status`, `date_added`) VALUES
(1, 'Super Admin', 1, '2021-11-28 15:34:20');

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
  `date_added` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
-- Indexes for table `rsm_user`
--
ALTER TABLE `rsm_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rsm_item`
--
ALTER TABLE `rsm_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rsm_role`
--
ALTER TABLE `rsm_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rsm_user`
--
ALTER TABLE `rsm_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
