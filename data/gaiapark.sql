-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 sep 2024 om 10:32
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

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
-- Tabelstructuur voor tabel `gaia_animals`
--

CREATE TABLE `gaia_animals` (
  `id` int(10) UNSIGNED NOT NULL,
  `Animal` varchar(50) NOT NULL,
  `Infomation` varchar(500) NOT NULL,
  `Location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gaia_seeds`
--

CREATE TABLE `gaia_seeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `plant_name` varchar(50) NOT NULL,
  `information` varchar(500) NOT NULL,
  `test` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gaia_users`
--

CREATE TABLE `gaia_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gaia_users`
--

INSERT INTO `gaia_users` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'admin', 'admin', 'admin@admin.nl');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gaia_animals`
--
ALTER TABLE `gaia_animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gaia_seeds`
--
ALTER TABLE `gaia_seeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gaia_users`
--
ALTER TABLE `gaia_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gaia_animals`
--
ALTER TABLE `gaia_animals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `gaia_seeds`
--
ALTER TABLE `gaia_seeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `gaia_users`
--
ALTER TABLE `gaia_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
