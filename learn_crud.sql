-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 12:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass_word` varchar(255) DEFAULT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `age`, `gender`, `email`, `pass_word`, `image`) VALUES
(1, 'saqib', 24, 1, 'rsk@tmail.com', '123', NULL),
(2, 'gabriella', 26, 2, 'vvv@gmail.com', '123', 'google_plus_icon.png'),
(5, 'Arnold', 26, 1, 'vvv@gmail.com', '123', NULL),
(7, 'frhn', 36, 2, 'jaber@hmail.coom', '456', 'fb_icon.png'),
(10, 'gabriella', 36, 2, 'asss@n.c', '123', 'linkedin_icon.png'),
(11, 'gabriella', 36, 2, 'asss@n.c', '123', 'linkedin_icon1.png'),
(12, 'Arnold', 18, 1, 'rsk@tmail.com', '123456', 'google_plus_icon1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
