-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 11:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaiapark`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaia_animals`
--

CREATE TABLE `gaia_animals` (
  `id` int(10) UNSIGNED NOT NULL,
  `Animal` varchar(50) NOT NULL,
  `Infomation` varchar(500) NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gaia_animals`
--

INSERT INTO `gaia_animals` (`id`, `Animal`, `Infomation`, `Location`) VALUES
(1, 'Mammoth', 'mammoth blablabla', '34567890100');

-- --------------------------------------------------------

--
-- Table structure for table `gaia_seeds`
--

CREATE TABLE `gaia_seeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `plant_name` varchar(50) NOT NULL,
  `information` varchar(500) NOT NULL,
  `test` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gaia_seeds`
--

INSERT INTO `gaia_seeds` (`id`, `plant_name`, `information`, `test`) VALUES
(1, 'poppy', 'poppy uit minecraft', ''),
(2, 'dandelion', 'pp', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`) VALUES
(1, 'sex@sex.sex', '$2y$10$oeQIX3LMshjStTr4dpDRpOHS6/KnxEgk3.Qv.ovHSiCxOhoMNAXHu', 'Yiming', 'Li'),
(2, '123', '$2y$10$TQb/yUYKH6Tw14kbm7b2v.BCqXJtQ3.o3nq5v.l.IVE/7fKlzi/7C', 'adolf', 'hitler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaia_animals`
--
ALTER TABLE `gaia_animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaia_seeds`
--
ALTER TABLE `gaia_seeds`
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
-- AUTO_INCREMENT for table `gaia_animals`
--
ALTER TABLE `gaia_animals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gaia_seeds`
--
ALTER TABLE `gaia_seeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
