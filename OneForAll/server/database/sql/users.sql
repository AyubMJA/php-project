-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2019 at 03:18 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `000354446`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `password`) VALUES
(1, 'human@gmail.com', 'password'),
(4, 'human3@gmail.com', '$2y$10$HyI7EVbMxutt0sUJ3a2rD.vnay54MNb/2QiZwzcUEwXXedo9hd/gu'),
(5, 'human4@gmail.com', '$2y$10$ebwlVlc9t3OkpT45ILRUyusP50biv2ajHY8r9n6Hkhu80FEfaXnFe'),
(6, 'human5@gmail.com', '$2y$10$m0T1LT6OBLbSyj/nnXeuRexXKbuAPx388DOiNs.JbXlYqPGY0PvBi'),
(12, 'afjlk@gmail.com', '$2y$10$hFlt5GIVrdq1zBq9ERu58OozD0YSZ8O4IdV9rmHv88cGuH7xyAF/e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
