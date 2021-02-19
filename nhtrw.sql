-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 06:01 PM
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
-- Database: `nhtrw`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_order`
--

CREATE TABLE `my_order` (
  `order_id` int(255) NOT NULL,
  `tracking_id` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `remark` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_mo` varchar(255) NOT NULL,
  `customer_add` varchar(255) NOT NULL,
  `invoice_date` date NOT NULL,
  `expected_D_D` date NOT NULL,
  `tyre_size` varchar(255) NOT NULL,
  `tyre_condition` varchar(255) NOT NULL,
  `tyre_type` varchar(255) NOT NULL,
  `new_design` varchar(255) NOT NULL,
  `tyre_rubber` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `advance` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `order_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nhtrw_admin`
--

CREATE TABLE `nhtrw_admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhtrw_admin`
--

INSERT INTO `nhtrw_admin` (`id`, `name`, `email`, `pass`) VALUES
(1, 'NHTRW Saswad', 'nhtrw.saswad@gmail.com', 'pass@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_order`
--
ALTER TABLE `my_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `nhtrw_admin`
--
ALTER TABLE `nhtrw_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_order`
--
ALTER TABLE `my_order`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `nhtrw_admin`
--
ALTER TABLE `nhtrw_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
