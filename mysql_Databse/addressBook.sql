-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 02:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Uemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Uphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Uname`, `Uemail`, `Uphone`, `created_at`, `updated_at`) VALUES
(1, 'sandy', 'sandy@gmail.com', '0179279660', '2020-09-30 01:14:03', '2020-09-30 01:14:03'),
(7, 'sandy', 'sandy@gmail.com6666', '018927966000', '2020-10-01 00:55:42', '2020-10-01 00:56:09'),
(9, 'sandy1', 'sandy2256@gmail.com', '01792796600', '2020-10-01 01:15:08', '2020-10-01 01:15:08'),
(10, 'minar', 'sandy@', '01792796600', '2020-10-01 01:16:27', '2020-10-01 01:16:27'),
(11, 'new5151', 'sandy2@gmail.com', '01892796600', '2020-10-01 01:16:56', '2020-10-01 01:16:56'),
(18, 'Sakwat Minar', 'minar@gmail.com', '01994747', '2020-10-08 06:01:21', '2020-10-08 06:01:21'),
(19, 'sm sandy', 'smminar@gmail.com', '01994747147', '2020-10-08 06:03:20', '2020-10-08 06:03:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
