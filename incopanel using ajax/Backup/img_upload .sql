-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 10:23 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `img_upload`
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
(42, 'admin', '$2y$10$MDMxYmQ5ZGY4NjFiOGQzM.JsC3M6g0mr/3fWbJvuBUwXDH/zfA5cK', '0'),
(43, 'lama', '$2y$10$YzE3MzhlOTIwY2Y0YTE5ZOYKDtebNAQu4v4wJ4j/JUK3XmOR2bU2e', '0'),
(44, 'rakessir', '$2y$10$YmNhNTFkMGM0NjU0NDJkMOmPA9yF/RyNqGqE7j5zYT.yw8au0v5Ni', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(44) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(27, 'hjkl;kalsjfkasl', '2@gmail.com', 'ksflksak'),
(26, 'lalaksdlk', 'lama@gmail.com', 'faslklkkas'),
(25, 'yyyyyyyyyyyyyyyyyyy', 'y@gmail.com', 'zzzzzzzzzzzzzzzzz'),
(24, 'lama', 'lama@gmail.com', 'nepal ko raj dhani ktm'),
(23, 'Lamas', 'lleeeeeeee@gmail.com', 'alfskkd'),
(22, 'rrrrrrrrrrrrr', 'rrrrrrr@gmial.com', 'rrrrrrrrr'),
(21, 'firstyea', 'firstlast@gmail.com', 'heloo'),
(20, 'laast', 'year@gmail.com', 'lasflkjkfj'),
(19, 'sssss', 'sdfsaf@gmail.com', 'aflskdafsjf'),
(18, 'kalsjfa', 'lkajf@gmil.com', 'lafslkdfl'),
(17, 'lama', 'lama@gmail.com', 'flasfsalk'),
(16, 'laskjfl', 'jangabirlama@gmail.com', 'lafsflk'),
(28, 'nepal@gmail.com', 'jangabirlama@gmail.com', 'lfaskalkjlk'),
(29, 'Lama', 'lama@gmail.com', 'fiiiiiiiiiiiiiiiiii'),
(30, 'nepal', 'nepal@gmail.com', '2222222212dwqddddddddddddddddd'),
(31, 'hjkl', 'uuuuu@gmail.com', 'sssss');

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
(27, 'Line-Picture-6-1.jpg', 'MANUFAC3'),
(28, 'Line-Picture-6-2.jpg', 'MANUFAC2'),
(29, 'Line-Picture-6-3.jpg', 'MANUFAC1');

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
(21, 'exterior.jpg', 'Products4'),
(22, 'sis.jpg', 'Products3'),
(23, 'sis1.jpg', 'Products2'),
(24, 'wall.jpg', 'Products1');

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
(1, 'service-1.jpg', 'Service6'),
(2, 'service-2.jpg', 'Service5'),
(3, 'service-3.jpg', 'Service4'),
(4, 'service-4.jpg', 'Service3'),
(5, 'service-5.jpg', 'Service1'),
(6, 'service-6.jpg', 'service');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `image_id` int(11) NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `image_description` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`image_id`, `image_url`, `image_description`, `name`) VALUES
(19, '06.jpg', '" यती पैसामा यस्तो घर बन्छ भनेर सोच्या पनि थिएन मैले :) "', 'Rakeshss'),
(18, '05.jpg', '"सस्तो म राम्रो "', 'MANOJ SHAH\n'),
(17, '04.jpg', '"गर्मी म शितल को अनुभव "\n\n', 'LAMA'),
(16, '03.jpg', '"Yati kam samayama bancha bhanya laagya thiyena malai "\n\n\n सोच्या पनि थिएन मैले :) "', 'ANUP'),
(14, '01.jpg', '"Yati kam samayama bancha bhanya laagya thiyena malai "', 'RAMESH NEUPANE'),
(15, '02.jpg', '"Its Nice "', 'JOHNATHAN DOE\n');

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
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
