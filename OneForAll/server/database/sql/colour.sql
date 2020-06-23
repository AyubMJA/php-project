-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2019 at 03:19 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `000354446`
--

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE `colour` (
  `colourID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `colourChoice` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`colourID`, `userID`, `colourChoice`) VALUES
(1, 2, '#2533d3'),
(2, 2, '#4bd0dd'),
(3, 2, '#4bd0dd'),
(4, 2, '#4bd0dd'),
(5, 3, '#000000'),
(6, 3, '#000000'),
(7, 3, '#000000'),
(8, 3, '#000000'),
(9, 3, '#ea0000'),
(10, 3, '#ea0000'),
(11, 3, '#00ff00'),
(12, 11, '#2100ff'),
(13, 11, '#000000'),
(14, 13, '#cdc1ff'),
(15, 13, '#cdc1ff'),
(16, 13, '#cdc1ff'),
(17, 13, '#cdc1ff'),
(18, 13, '#cdc1ff'),
(19, 13, '#cdc1ff'),
(20, 13, '#cdc1ff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colour`
--
ALTER TABLE `colour`
  ADD PRIMARY KEY (`colourID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colour`
--
ALTER TABLE `colour`
  MODIFY `colourID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
