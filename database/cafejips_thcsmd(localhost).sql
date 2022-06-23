-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 01:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafejips_thcsmd`
--

-- --------------------------------------------------------

--
-- Table structure for table `blockip`
--

CREATE TABLE `blockip` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blockip`
--

INSERT INTO `blockip` (`id`, `ip`) VALUES
(1, '171.250.165.19');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fbLink` longtext NOT NULL,
  `message` longtext NOT NULL,
  `image` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_info_checked`
--

CREATE TABLE `contact_info_checked` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fbLink` longtext NOT NULL,
  `message` longtext NOT NULL,
  `image` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `image` longtext DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `image`, `ip`, `os`, `browser`, `device`, `time`) VALUES
(1233, 'dădawdfakjsdhfjdasghasd kdsafh', 'uploads/284373416_1377186376123692_2002233803160500326_n.jpg', '::1', 'Windows 10', 'Chrome', 'Computer', '2022-06-23 14:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `message_cancel`
--

CREATE TABLE `message_cancel` (
  `id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `image` longtext DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_cancel`
--

INSERT INTO `message_cancel` (`id`, `message`, `image`, `ip`, `os`, `browser`, `device`, `time`) VALUES
(336, 'fasdhfjkashdfjkh', 'uploads/230631620_836686327274959_2012482936108408435_n.jpg', '::1', 'Windows 10', 'Chrome', 'Computer', '2022-06-14 14:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `message_checked`
--

CREATE TABLE `message_checked` (
  `id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `image` longtext DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blockip`
--
ALTER TABLE `blockip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info_checked`
--
ALTER TABLE `contact_info_checked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_cancel`
--
ALTER TABLE `message_cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_checked`
--
ALTER TABLE `message_checked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blockip`
--
ALTER TABLE `blockip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_info_checked`
--
ALTER TABLE `contact_info_checked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234;

--
-- AUTO_INCREMENT for table `message_cancel`
--
ALTER TABLE `message_cancel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT for table `message_checked`
--
ALTER TABLE `message_checked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
