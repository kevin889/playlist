-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Gegenereerd op: 25 mei 2016 om 21:25
-- Serverversie: 5.5.42
-- PHP-versie: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playlist`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `requests`
--

CREATE TABLE `requests` (
  `id` int(11) unsigned NOT NULL,
  `data` varchar(255) NOT NULL DEFAULT '',
  `track_id` int(11) unsigned DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `requests`
--

INSERT INTO `requests` (`id`, `data`, `track_id`, `timestamp`) VALUES
(1, 'test', NULL, '2016-05-25 17:49:37'),
(2, 'klaas', NULL, '2016-05-25 17:49:37'),
(3, 'boulevard of broken dreams', NULL, '2016-05-25 17:49:37'),
(4, 'Demons - Imagine Dragons', 63510361, '2016-05-25 17:49:37'),
(5, 'Testament - Boudewijn de Groot', 2306044, '2016-05-25 17:49:37'),
(6, 'Ik Kan Je Niet Laten - Jonna Fraser', 123992722, '2016-05-25 17:49:37'),
(7, 'Tsjoe Tsjoe Wa - DD Company', 65166733, '2016-05-25 17:49:34'),
(8, 'Hymn For The Weekend - Coldplay', 114811546, '2016-05-25 17:50:02'),
(9, 'Ze Kunnen Zeggen Wat Ze Willen - DD Company', 65166683, '2016-05-25 18:01:42'),
(10, 'Dont Let Me Down - Gavin Mikhail', 124349830, '2016-05-25 18:28:15'),
(11, 'Cheap Thrills - Sia', 115671688, '2016-05-25 18:30:12');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
