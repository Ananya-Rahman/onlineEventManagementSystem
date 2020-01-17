-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 11:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `decorations` varchar(200) NOT NULL,
  `foods` varchar(200) NOT NULL,
  `special_effects` varchar(200) NOT NULL,
  `programs` varchar(200) NOT NULL,
  `management_level` varchar(200) NOT NULL,
  `current_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `event_name`, `decorations`, `foods`, `special_effects`, `programs`, `management_level`, `current_date`, `status`) VALUES
(6, 2, 'marriage event', '[\"flower,50\",\"lunch,300\"]', '[\"lunch,300\"]', '[\"day,200\"]', '[\"day,200\"]', 'medium,150', '2019-04-10 11:40:04', 0),
(8, 3, 'marriage event', '[\"flower,50\"]', '[\"lunch,300\"]', '[\"day,200\"]', '[\"day,200\"]', 'high,200', '2019-04-10 13:56:03', 0),
(9, 3, 'marriage event', '[\"flower,50\",\"others,100\"]', '[\"lunch,300\"]', '[\"day,200\"]', '[\"day,200\"]', 'medium,150', '2019-04-10 14:16:44', 0),
(10, 3, 'marriage event', '[\"flower,50\",\"lighting,30\"]', '[\"lunch,300\"]', '[\"dance,400\",\"music,100\",\"photoshoot,100\"]', '[\"day,200\"]', 'high,200', '2019-04-10 14:20:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `username`, `password`) VALUES
(1, 'j', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'ja', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'an', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
