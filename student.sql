-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 11:37 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(5) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phone_number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `fullname`, `email`, `password`, `gender`, `phone_number`) VALUES
(2, 'GANZA', 'daniellaganza@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', 'Female', 785570256),
(3, 'Irakoze', 'preston30@gmail.com', '422bf54dad17f82fdaa60b4db54e9140a52ea429', 'Male', 2147483647),
(4, 'Imuragire', 'michelle12@gmail.com', 'f924c83dd4434b1985d3e6a3a2963e4266c52913', 'Male', 2147483647),
(8, 'Ineza Celia', 'celia@gmail.com', '51eac6b471a284d3341d8c0c63d0f1a286262a18', 'Female', 789567423),
(11, 'Preston Irakoze', 'preston30@gmail.com', 'c48ea64e72384e0847b396b2874916ef36cc1a6a', 'Male', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pasword` varchar(255) NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `pasword`, `gender`) VALUES
(2, 'GANZA', 'Aimee Daniella', 'daniellaganza@gmail.com', '234567', 'female'),
(3, 'karambizi', 'james', 'james123@gmail.com', '123456', 'female'),
(4, 'mike', 'Peter', 'peter@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'male'),
(5, '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', ''),
(6, 'Ngarambe', 'Sammy', 'sammy@gmail.com', '5ed695d1c8ead126a7c4fd9e9a005895eb6cd4f3', 'male'),
(7, '', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
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
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
