-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 aug 2023 om 09:30
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
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `naam` text NOT NULL,
  `omschrijving` text NOT NULL,
  `prijs` text NOT NULL,
  `filenaam` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `naam`, `omschrijving`, `prijs`, `filenaam`) VALUES
(1, 'stoel', 'dit is een stoel', '300 euro', 'Images/stoel.jpg'),
(2, 'bank', 'dit is een mooie bank om op te zitten of om op te slapen', '999 euro', 'Images/bank.jpg'),
(3, 'lamp', 'dit is een lamp, het geeft licht.', '10 euro', 'Images/lamp.jpg'),
(4, 'laptop', 'dit een geweldige laptop.\r\nPerfect voor alle situaties.', '5100 euro', 'Images/laptop.jpg'),
(5, 'tafel', 'het is een tafel met 4 poten en kan niet echt iets bijzonders, maar het is wel een mooie tafel.', '30 euro', 'Images/tafel.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
