-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 11:45 PM
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
-- Database: `db_payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `tada`
--

CREATE TABLE `tada` (
  `ID` int(50) NOT NULL,
  `EMPN` varchar(100) NOT NULL,
  `POSTN` text NOT NULL,
  `MOBILE` int(11) NOT NULL,
  `SUBMITB` text NOT NULL,
  `PAD` text NOT NULL,
  `PENDING` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tada`
--

INSERT INTO `tada` (`ID`, `EMPN`, `POSTN`, `MOBILE`, `SUBMITB`, `PAD`, `PENDING`) VALUES
(1,
'achala',
'web',
1111111111,
'222',
'222',
'22');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `tada`
--
ALTER TABLE `tada`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tada`
--
ALTER TABLE `tada`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
