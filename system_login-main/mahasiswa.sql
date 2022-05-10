-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2022 at 03:10 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `21_d4_it_a`
--

CREATE TABLE `21_d4_it_a` (
  `nrp` bigint(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `email_work` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `trello` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `21_d4_it_a`
--

INSERT INTO `21_d4_it_a` (`nrp`, `name`, `email`, `password`, `no_telp`, `email_work`, `github`, `trello`, `file`) VALUES
(3121600001, 'testname', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '', '', '', '', NULL),
(3121600023, 'Arianto Zaki Hamdalah', 'arianto.zaki.hamdalah.azh@gmail.com', '71b00b109b22d6c5d477bdebce3e20fc', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `email` varchar(255) NOT NULL,
  `log_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `out_time` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`email`, `log_time`, `out_time`, `status`) VALUES
('test@gmail.com', '2022-04-27 14:11:28', '2022-04-27 22:04:01', 'Success Logout');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `21_d4_it_a`
--
ALTER TABLE `21_d4_it_a`
  ADD PRIMARY KEY (`nrp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
