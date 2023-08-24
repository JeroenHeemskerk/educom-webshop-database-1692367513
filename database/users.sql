-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 aug 2023 om 09:53
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
  `naam` text NOT NULL,
  `email` text NOT NULL,
  `wachtwoord` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`naam`, `email`, `wachtwoord`) VALUES
('Stijn', 'test@gmail.com', 'password'),
('John', 'john@example.com', 'test'),
('John', 'john@example.com', 'test'),
('stijn', 'john@example.com', 'test'),
('test', 'testmail@gmail.com', 'Stijnstijn12'),
('test', 'test2mail@gmail.com', 'wacht'),
('stijn', 's@s.co', 'ss'),
('stijn', 's.engselmoer@ziggo.nl', 's'),
('stijn', 'testen@gmail.com', 'wachtwoord'),
('', '', 's'),
('stijn', 'testen@gmail.com', 's'),
('stijn', 's.engselmoer@ziggo.nl', 'd'),
('geluk', 'geluk.email@gmail.com', 'test'),
('gijs', 'd.gijs@gmail.com', 'wachtwoord'),
('rwad', 'sadsaadsassd@s.com', 's'),
('dasda', 'sadsakaaakkkkkkadassd@s.com', 'sd'),
('d', 'da.engelmoer@ziggo.nl', 'd'),
('w', 'w@d.com', 'w'),
('q', 'q.q@gmail.com', 'w');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
