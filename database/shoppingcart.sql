-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 31 aug 2023 om 10:58
-- Serverversie: 8.0.21
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stijn_webshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `id` int NOT NULL,
  `userid` int NOT NULL,
  `productid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `shoppingcart`
--

INSERT INTO `shoppingcart` (`id`, `userid`, `productid`) VALUES
(1, 38, 1),
(2, 38, 1),
(3, 38, 2),
(4, 38, 2),
(5, 38, 4),
(6, 38, 4),
(7, 38, 5),
(8, 38, 5),
(9, 38, 1),
(10, 38, 2),
(11, 38, 3),
(12, 38, 3),
(13, 38, 4),
(14, 38, 4),
(15, 38, 5),
(16, 38, 5),
(17, 38, 1),
(18, 38, 1),
(19, 38, 2),
(20, 38, 2),
(21, 38, 2),
(22, 38, 3),
(23, 38, 2),
(24, 38, 1),
(25, 38, 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
