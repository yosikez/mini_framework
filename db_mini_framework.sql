-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 01:36 AM
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
-- Database: `db_mini_framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `gender`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Yosi Kesuma', 'yosikez@gmail.com', 'L', '0895377632078', '2022-11-29 14:45:13', NULL),
(2, 'Ahmad Firdaus', 'ahmd@gmail.com', 'L', '0886555231231', '2022-11-29 14:43:48', NULL),
(3, 'Siti Nurelysa', 'stnrly@gmail.com', 'P', '0844531212312', '2022-11-29 14:43:48', NULL),
(4, 'Alif Nafis Alghany', 'alfnfsgn@gmail.com', 'L', '0865512312312', '2022-11-29 14:43:48', NULL),
(5, 'Arya Tio Wasesa', 'arytws@gmail.com', 'L', '0846666712312', '2022-11-29 14:43:48', NULL),
(6, 'Naufal Fachrezy', 'nflfrzy@gmail.com', 'L', '0844571231231', '2022-11-29 14:43:48', NULL),
(7, 'Gigih Dwi Rahmadi', 'gghdr@gmail.com', 'L', '0835721864123', '2022-11-29 14:43:48', NULL),
(8, 'Tutur Nugroho', 'ttrngh@gmail.com', 'L', '0865427341633', '2022-11-29 14:43:48', NULL),
(9, 'Muhammad Ariq', 'arq@gmail.com', 'L', '0867324234123', '2022-11-29 14:44:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
