-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 08:06 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meri_raay`
--

-- --------------------------------------------------------

--
-- Table structure for table `dislikes`
--

CREATE TABLE `dislikes` (
  `liked` int(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `pname` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dislikes`
--

INSERT INTO `dislikes` (`liked`, `username`, `pname`) VALUES
(1, 'manmeet', '');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `liked` int(10) NOT NULL DEFAULT '1',
  `username` varchar(45) NOT NULL,
  `pname` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`liked`, `username`, `pname`) VALUES
(1, 'manmeet', '');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `count_like` int(10) NOT NULL,
  `count_dislike` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `timestamp`, `name`, `description`, `tag`, `count_like`, `count_dislike`) VALUES
(3, '2017-09-29 09:15:16', 'Civic Issue', 'The parking space at malls will be increased. Double-storeyed parking space is being constructed for the same.', '#parkingspace, #civic', 5, 1),
(4, '2017-09-29 09:23:53', 'Increased Pollution', 'Increased pollution rates by the industries will be controlled by limiting the carbon emissions by every industry.', '#pollution, #industrial', 4, 3),
(5, '2017-09-29 15:54:02', 'Improper Lighting', 'Street lights on the mohali kharar highway are out of order.', '#mohali-kharar-highway, #streetlight', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(1, 'Andhra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(26, 'Chhattisgarh'),
(5, 'Goa'),
(6, 'Gujarat'),
(7, 'Harayana'),
(8, 'Himachal Pradesh'),
(9, 'Jammu & Kashmir'),
(28, 'Jharkhand'),
(10, 'Karnataka'),
(11, 'Kerala'),
(12, 'Madhya Pradesh'),
(13, 'Maharashtra'),
(14, 'Manipur'),
(15, 'Meghalaya'),
(16, 'Mizoram'),
(17, 'Nagaland'),
(18, 'Orissa'),
(19, 'Punjab'),
(20, 'Rajasthan'),
(21, 'Sikkim'),
(22, 'Tamil Nadu'),
(29, 'Telangana'),
(23, 'Tripura'),
(24, 'Uttar Pradesh'),
(27, 'Uttarakhand'),
(25, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `problem` varchar(20) NOT NULL,
  `suggestion` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `problem`, `suggestion`, `timestamp`, `username`) VALUES
(1, 'Problem 1', 'Suggestion 1', '2017-09-28 05:24:03', 'manmeet'),
(2, 'Problem 2', 'Suggestion 1', '2017-09-28 05:24:10', 'manmeet'),
(3, 'Problem 1', 'Suggestion 2\r\n', '2017-09-28 05:24:21', 'manmeet'),
(4, 'Problem 2', 'Suggestion 2', '2017-09-28 05:24:57', 'manmeet'),
(5, 'Improper Lighting', 'Great initiative\r\n', '2017-09-29 09:37:54', 'manmeet'),
(6, 'Increased Pollution', 'Nice move taken by the govt.\r\n', '2017-09-30 05:28:08', 'manmeet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `aadhar_id` varchar(12) NOT NULL,
  `designation` varchar(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(15) NOT NULL,
  `pincode` int(8) NOT NULL,
  `state` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `aadhar_id`, `designation`, `name`, `father_name`, `username`, `password`, `gender`, `phone`, `email`, `address`, `city`, `pincode`, `state`) VALUES
(1, '897987987987', 'user', 'Manmeet', '', 'manmeet', '123456', 'Enter ge', 888888888, '', '', '', 0, 'Punjab'),
(2, '4578', 'admin', 'dc_mohali', '', 'dc_mohali', '1234', '', 0, '', '', 'Mohali', 140307, 'Punjab'),
(3, '897987879787', 'user', 'Jaspreet Singh', '', 'jaspreet', '123', '', 87878987887, '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aadhar_id` (`aadhar_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
