-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 01:46 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(200) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `decorations` varchar(200) NOT NULL,
  `foods` varchar(200) NOT NULL,
  `special_effects` varchar(200) NOT NULL,
  `programs` varchar(200) NOT NULL,
  `management_level` varchar(200) NOT NULL,
  `cost` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `decorations`, `foods`, `special_effects`, `programs`, `management_level`, `cost`) VALUES
(2, 'birthday', 'light', 'lunch', 'misic', 'night', 'high', '200000000');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`username`, `password`) VALUES
('anonna r', 'c4ca4238a0b923820dcc509a6f75849b'),
('anu', '81dc9bdb52d04dc20036dbd8313ed055'),
('anu12', '81dc9bdb52d04dc20036dbd8313ed055'),
('anu132', '81dc9bdb52d04dc20036dbd8313ed055'),
('anuanu', 'c4ca4238a0b923820dcc509a6f75849b'),
('anuna', 'ceaf6bbe595b582e1349b43b6a8e38c3'),
('anur', 'c4ca4238a0b923820dcc509a6f75849b'),
('asa', 'a87ff679a2f3e71d9181a67b7542122c'),
('aunt', '81dc9bdb52d04dc20036dbd8313ed055'),
('mitu', 'c4ca4238a0b923820dcc509a6f75849b'),
('my', 'c81e728d9d4c2f636f067f89cc14862c'),
('r', 'c4ca4238a0b923820dcc509a6f75849b'),
('simu t', 'c4ca4238a0b923820dcc509a6f75849b'),
('sumaya', '202cb962ac59075b964b07152d234b70'),
('sumaya s', 'c4ca4238a0b923820dcc509a6f75849b'),
('w', 'c4ca4238a0b923820dcc509a6f75849b');

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
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
