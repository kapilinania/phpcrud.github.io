-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 11:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `from`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu_data`
--

CREATE TABLE `stu_data` (
  `s.no` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mobile` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stu_data`
--

INSERT INTO `stu_data` (`s.no`, `fname`, `mobile`, `email`, `password`) VALUES
(54, 'kapil', 2147483647, 'INANIYAKAPIL2000@GMAIL.COM', '12345'),
(55, 'kapil', 2147483647, 'INANIYAKAPIL2000@GMAIL.COM', '12345'),
(56, 'kapil', 2147483647, 'INANIYAKAPIL2000@GMAIL.COM', '12345'),
(57, 'kapil', 2147483647, 'INANIYAKAPIL2000@GMAIL.COM', '12345'),
(58, 'kapil', 2147483647, 'INANIYAKAPIL2000@GMAIL.COM', '12345'),
(59, 'kapil', 2147483647, 'INANIYAKAPIL2000@GMAIL.COM', '12345'),
(60, 'kapil', 2147483647, 'INANIYAKAPIL2000@GMAIL.COM', '12345'),
(61, 'kapil', 2147483647, 'INANIYAKAPIL2000@GMAIL.COM', '12345'),
(62, 'kapil', 2147483647, 'INANIYAKAPIL2000@GMAIL.COM', '12345'),
(63, 'kapil', 2147483647, 'INANIYAKAPIL2000@GMAIL.COM', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `sno` int(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`sno`, `email_id`, `password`) VALUES
(7, ' kapil@gmail.com', '1230gjhgtjhgjk'),
(8, ' kapil@gmail.com', '1234567890'),
(9, 'INANIYAKAPIL2000@GMAIL.COM', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu_data`
--
ALTER TABLE `stu_data`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stu_data`
--
ALTER TABLE `stu_data`
  MODIFY `s.no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `trainee`
--
ALTER TABLE `trainee`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
