-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 07:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavinia`
--

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `ParentNationalId` varchar(255) NOT NULL,
  `pFirstName` varchar(255) NOT NULL,
  `pLastName` varchar(255) NOT NULL,
  `pGender` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`ParentNationalId`, `pFirstName`, `pLastName`, `pGender`, `PhoneNumber`, `District`) VALUES
('111', 'ddd', 'ce tia', 'f', '21', 'dsav'),
('11111', 'pascal', 'siz', 'male', '079842333', 'kicukiro'),
('122', 'qq', 'aa', 'qq', 'aa', 'kicukiro'),
('777777777777', 'chrispin', 'KABARISA', 'M', '4444444', 'kicukiro');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `No` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `un` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`No`, `names`, `un`, `pw`) VALUES
(1, 'Denis Kiyenje', 'admin', 'admin'),
(2, 'Mary claire', 'secretary', 'sec'),
(3, 'Claude', 'stock manager', 'stock'),
(4, 'Uwamungu Oscar', 'DOS', 'dos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`ParentNationalId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
