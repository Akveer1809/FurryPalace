-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 10:19 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'testing', 'testing@gmail.com', '', 'testing'),
(2, 'abc', 'abc@gmail.com', 'abc', 'abc'),
(3, 'xyz', 'xyz@gmail.com', 'xyz ', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `servicebooking`
--

CREATE TABLE `servicebooking` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ServiceType` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicebooking`
--

INSERT INTO `servicebooking` (`Id`, `Name`, `Email`, `ServiceType`, `Message`) VALUES
(1, 'abc', 'testing@gmail.com', 'abc', 'dsfsdg'),
(2, 'testtest', '', '1', 'afsaf'),
(3, 'testtest', '', 'Dog Park Play Dates', 'fhgh'),
(4, '', '', 'Dog Walking', ''),
(5, 'testtest', '', 'Pet Sitting', 'wfedsf'),
(6, 'testtest', '', 'Dog Park Play Dates', 'fdsfdsfd');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`Id`, `Email`) VALUES
(1, 'testing@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Mobile`, `Email`, `Password`) VALUES
(2, 'Test', '00000000000', 'Test@gmail.com', '$2y$10$3k15W0HCP3Vt8'),
(4, 'abc', 'abc', 'abc@gmail.com', '$2y$10$tmETnmYUd0SMZ'),
(5, 'a', '00', 'a@gmail.com', '$2y$10$Uw0XKTxMN7.D3'),
(6, 'xyz', '00000000000', 'xyz@gmail.com', '$2y$10$FjV7Dw2fdiLU4pBLl7iKsOVC6jJGqbWbOLFwhY5UdQUzQyeAPEEoa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `servicebooking`
--
ALTER TABLE `servicebooking`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servicebooking`
--
ALTER TABLE `servicebooking`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
