-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2024 at 02:27 PM
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
-- Database: `gaiapark`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `goal` decimal(10,2) NOT NULL,
  `current_amount` decimal(10,2) DEFAULT 0.00,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `description`, `goal`, `current_amount`, `image_url`) VALUES
(1, 'Woolly Mammoth', 'By grazing on shrubs and knocking down trees, woolly mammoths could help restore the tundra and grassland ecosystems, promoting plant growth and reducing greenhouse gases like CO2 trapped in the permafrost.', 20000000.00, 0.00, './images/Woolly Mammoth.png'),
(2, 'Passenger Pigeon', 'As migratory birds, passenger pigeons played a crucial role in forest regeneration by spreading seeds over vast areas, fostering biodiversity, and maintaining healthy forest ecosystems.', 5000000.00, 0.00, './images/Passenger Pigeon.png'),
(3, 'Steller’s Sea Cow', 'The Steller\'s sea cow was essential for maintaining kelp forest ecosystems by grazing on kelp, which prevented overgrowth and helped maintain the balance of marine environments in the North Pacific.', 12000000.00, 0.00, './images/Steller.png'),
(4, 'Great Auk', 'This flightless seabird contributed to the balance of coastal ecosystems by feeding on fish and other marine life, supporting nutrient cycles that benefit a wide range of marine species.', 7000000.00, 0.00, './images/Great Auk.png'),
(5, 'Tasmanian Tiger', 'Reintroducing the thylacine could help rebalance predator-prey dynamics in Australian ecosystems, where the loss of top predators has led to overpopulation of herbivores and environmental degradation.', 15000000.00, 0.00, './images/Tasmanian Tiger.png'),
(6, 'Pyrenean Ibex', 'As a grazing animal in mountain regions, the Pyrenean ibex helped prevent overgrowth of vegetation, contributing to the stability and biodiversity of high-altitude ecosystems.', 10000000.00, 0.00, './images/Pyrenean Ibex.png'),
(7, 'Carolina Parakeet', 'This brightly colored bird played a key role in seed dispersal and pollination, aiding in the maintenance and regeneration of North American forests, which have been impacted by its extinction.', 6000000.00, 0.00, './images/Carolina Parakeet.png'),
(8, 'Aurochs', 'As large herbivores, aurochs helped shape European landscapes by grazing, which encouraged a diverse range of plant species and supported the complex biodiversity of grassland and forest ecosystems.', 10000000.00, 0.00, './images/Aurochs.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
