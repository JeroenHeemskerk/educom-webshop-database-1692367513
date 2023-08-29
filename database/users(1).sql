-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 aug 2023 om 09:23
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
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` text NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Stijn', 'test@gmail.com', 'password'),
(2, 'John', 'john@example.com', 'test'),
(3, 'John', 'john@example.com', 'test'),
(4, 'stijn', 'john@example.com', 'test'),
(5, 'test', 'testmail@gmail.com', 'Stijnstijn12'),
(6, 'test', 'test2mail@gmail.com', 'wacht'),
(7, 'stijn', 's@s.co', 'ss'),
(8, 'stijn', 's.engselmoer@ziggo.nl', 's'),
(9, 'stijn', 'testen@gmail.com', 'wachtwoord'),
(10, '', '', 's'),
(11, 'stijn', 'testen@gmail.com', 's'),
(12, 'stijn', 's.engselmoer@ziggo.nl', 'd'),
(13, 'geluk', 'geluk.email@gmail.com', 'test'),
(14, 'gijs', 'd.gijs@gmail.com', '1'),
(15, 'rwad', 'sadsaadsassd@s.com', 's'),
(16, 'dasda', 'sadsakaaakkkkkkadassd@s.com', 'sd'),
(17, 'd', 'da.engelmoer@ziggo.nl', 'd'),
(18, 'w', 'w@d.com', 'w'),
(19, 'q', 'q.q@gmail.com', 'w'),
(20, 'z', 'z.z@gmail.com', 'z'),
(21, 'z', 'z.z1@gmail.com', 'z'),
(22, 'z', 'z.z12@gmail.com', 'z'),
(23, 'z', 'z.z2@gmail.com', 'z'),
(24, 'z', 'z.z21@gmail.com', 'z'),
(25, 'z', 'z.zz@gmail.com', 'z'),
(26, 'z', 'z.z22@gmail.com', 'z'),
(27, 'z', 'z.z4@gmail.com', 'z'),
(28, 'z', 'z.z5@gmail.com', 'z'),
(29, 'gast', 'geluk.gus@gmail.com', '2'),
(30, 'gast', 'as@s.com', 'a'),
(31, 'john', 'test.john@gmail.com', 'john'),
(32, 'test', 'test21@gmail.com', 'test'),
(33, 'stijn', 'test34@gmail.com', 'test'),
(34, 'qqqqqqqqqqqq', 'qqqq.qqq@gmail.com', 'test'),
(35, 'test', 'sadsaadassd@s.com', '123'),
(36, 'test', 'aasddsdd@s.coma', '123');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
