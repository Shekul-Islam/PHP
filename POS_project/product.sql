-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 01:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `manufacturer_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `pname`, `cat_id`, `sub_category_id`, `price`, `manufacturer_id`) VALUES
(32, '', 'oppo', 31, 4, 343.00, 52841),
(33, '', 'oppo', 31, 4, 2000.00, 555555),
(34, '', 'oppo', 31, 4, 2000.00, 555555),
(35, '', 'oppo', 31, 4, 2000.00, 0),
(36, '', 'oppo', 31, 4, 2000.00, 0),
(37, '', 'Sony Tv', 31, 4, 50000.00, 528455),
(38, '', 'Sony Tv', 31, 4, 50000.00, 528455),
(39, '', 'oppo', 31, 4, 50000.00, 52841),
(40, '', 'oppo', 31, 4, 50000.00, 52841),
(41, '', '', 31, 4, 0.00, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
