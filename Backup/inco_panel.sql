-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 04:22 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inco_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Admin_id` int(11) NOT NULL,
  `Admin_username` varchar(100) NOT NULL,
  `Admin_password` varchar(100) NOT NULL,
  `delete_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Admin_id`, `Admin_username`, `Admin_password`, `delete_status`) VALUES
(42, 'admin', '$2y$10$NDc5MzZjNGY4YWRmZjBmYe4FcTYcNDkVg8y32BgPN1Fj6gjKQ9WBu', '0'),
(43, 'lama', '$2y$10$NDAyZDQ3NjFjMmU4MDY0O.om93M77fxKDzKYYIbDQnFaGQWvAiLFO', '1'),
(44, 'rakessir', '$2y$10$YmNhNTFkMGM0NjU0NDJkMOmPA9yF/RyNqGqE7j5zYT.yw8au0v5Ni', '0'),
(45, 'manoj', '$2y$10$NzI2YzE3MWFjOWY4MmJlMeFzkn3PsS.Ud6i8ze67Ulu3RefizEhAq', '0'),
(46, 'lama', '$2y$10$NzAxYjJlZThmNTM4NDIwZOlPGYFIiSojLEcUrzdyd6kxwHKpoW6ja', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(44) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`, `Date`) VALUES
(38, 'AD_MD_RD', 'RAD@GMAIL.COM', 'LASFLJSAKF', '2019-06-19 19:23:49'),
(52, 'hello n', 'hell@GMAIL.COM', 'ASLKLKA', '2019-06-23 05:18:36'),
(53, 'lama', 'LAMA@gmail.com', 'nepal@123\n', '2019-06-24 04:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `image_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`image_id`, `image_name`, `image_description`) VALUES
(33, 'Line-Picture-6-1.jpg', 'Manufacture1'),
(34, 'Line-Picture-6-2.jpg', 'Manufacture2'),
(35, 'Line-Picture-6-3.jpg', 'Manufactures3');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `image_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`image_id`, `image_name`, `image_description`) VALUES
(37, 'product-1.jpg', 'NEPAL PRODUCT1'),
(38, 'product-2.jpg', 'NEPAL PRODUCT2'),
(39, 'product-3.jpg', 'NEPAL PRODUCT3'),
(40, 'product-4.jpg', 'NEPAL PRODUCT4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `image_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `image_name`, `image_description`) VALUES
(13, 'service-1.jpg', 'Service6'),
(14, 'service-2.jpg', 'Service5'),
(15, 'service-3.jpg', 'Service4'),
(16, 'service-4.jpg', 'Service3'),
(17, 'service-5.jpg', 'Service1'),
(18, 'service-6.jpg', 'Services1');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `image_id` int(11) NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `image_description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`image_id`, `image_url`, `image_description`, `name`) VALUES
(1, 'testimonial-1.jpg', 'यती पैसामा यस्तो घर बन्छ भनेर सोच्या पनि थिएन', 'RAKESH'),
(2, 'testimonial-2.jpg', '"सस्तो म राम्रो "', 'MANOJ SHAH'),
(3, 'testimonial-3.jpg', '"गर्मी म शितल को अनुभव "', 'LAMA'),
(4, 'testimonial-4.jpg', '"Yati kam samayama bancha bhanya laagya thiyena malai " सोच्या पनि थिएन मैले :) "', 'ANUP'),
(5, 'testimonial-5.jpg', '"Its Nice "', 'JOHNATHAN DOE'),
(6, 'testimonial-6.jpg', '"Yati kam samayama bancha bhanya laagya thiyena malai "', 'RAMESH NEUPANI');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`) VALUES
(12, 'lama', '$2y$10$ZmFhY2NhZTM0ZjJmOTZjOO0sMPfg1h5r5KQ8ZpCItBnQhPbKPYAOy'),
(15, 'user', '$2y$10$ZjE3M2MxNDc5M2U1NDZiYONVy/cx2kr9xW3wxkVFKp90VNcM4Nm12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
