-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 09:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `terox`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `mobile`, `password`) VALUES
(1, 'Manjunath P', 'Bailhongal', 'manju143@gmail.com', 8123652143, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `name`, `address`, `email`, `password`) VALUES
(1, 'Manjunath P', 'Bailhongal', 'manju143@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bottle`
--

CREATE TABLE `bottle` (
  `id` int(5) NOT NULL,
  `cid` int(100) NOT NULL,
  `oneltr` bigint(5) NOT NULL,
  `twoltr` bigint(5) NOT NULL,
  `fiveltr` bigint(5) NOT NULL,
  `twentyltr` bigint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bottle`
--

INSERT INTO `bottle` (`id`, `cid`, `oneltr`, `twoltr`, `fiveltr`, `twentyltr`) VALUES
(52, 150, 100, 200, 300, 400);

-- --------------------------------------------------------

--
-- Table structure for table `cdata`
--

CREATE TABLE `cdata` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `a_mobile` bigint(15) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `d_amt` bigint(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cdata`
--

INSERT INTO `cdata` (`id`, `name`, `address`, `landmark`, `mobile`, `a_mobile`, `pincode`, `d_amt`, `date`) VALUES
(150, 'Manjunath Patat', 'Bailhongal', 'kle polytechnic', 8123652143, 7795132143, '591104', 10000, '2020-02-07'),
(151, 'Akshata Arer', 'Savadatti', 'vidyanagar', 9874563210, 1234567890, '591106', 15000, '2020-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `id` int(4) NOT NULL,
  `cid` int(5) NOT NULL,
  `oneltr` varchar(30) NOT NULL,
  `twoltr` varchar(50) NOT NULL,
  `fiveltr` varchar(30) NOT NULL,
  `twentyltr` varchar(15) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`id`, `cid`, `oneltr`, `twoltr`, `fiveltr`, `twentyltr`, `status`, `date`) VALUES
(228, 151, '60', '86', '75', '12', '', '2020-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `cid` varchar(30) NOT NULL,
  `oneltr` int(5) NOT NULL,
  `twoltr` int(5) NOT NULL,
  `fiveltr` int(5) NOT NULL,
  `twentyltr` int(5) NOT NULL,
  `status` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cid`, `oneltr`, `twoltr`, `fiveltr`, `twentyltr`, `status`, `remark`, `date`) VALUES
(73, '150', 50, 60, 40, 30, 'No delivery', '', '2020-02-07'),
(74, '151', 60, 86, 75, 12, 'Delivery', '', '2020-02-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottle`
--
ALTER TABLE `bottle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdata`
--
ALTER TABLE `cdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bottle`
--
ALTER TABLE `bottle`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `cdata`
--
ALTER TABLE `cdata`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
