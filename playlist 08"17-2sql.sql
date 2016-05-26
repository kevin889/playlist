-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Gegenereerd op: 26 mei 2016 om 08:17
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
-- Tabelstructuur voor tabel `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) unsigned NOT NULL,
  `track_id` int(11) DEFAULT NULL,
  `votes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `requests`
--

CREATE TABLE `requests` (
  `id` int(11) unsigned NOT NULL,
  `data` varchar(255) NOT NULL DEFAULT '',
  `track_id` int(11) unsigned DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `requests`
--

INSERT INTO `requests` (`id`, `data`, `track_id`, `timestamp`, `added`) VALUES
(4, 'Demons - Imagine Dragons', 63510361, '2016-05-25 17:49:37', 0),
(5, 'Testament - Boudewijn de Groot', 2306044, '2016-05-25 17:49:37', 0),
(6, 'Ik Kan Je Niet Laten - Jonna Fraser', 123992722, '2016-05-25 17:49:37', 0),
(7, 'Tsjoe Tsjoe Wa - DD Company', 65166733, '2016-05-25 17:49:34', 0),
(8, 'Hymn For The Weekend - Coldplay', 114811546, '2016-05-25 17:50:02', 0),
(9, 'Ze Kunnen Zeggen Wat Ze Willen - DD Company', 65166683, '2016-05-25 18:01:42', 0),
(10, 'Dont Let Me Down - Gavin Mikhail', 124349830, '2016-05-25 18:28:15', 0),
(11, 'Cheap Thrills - Sia', 115671688, '2016-05-25 18:30:12', 0),
(12, 'Don''t Let Me Down - The Chainsmokers', 119302924, '2016-05-25 19:38:22', 0),
(13, 'Don''t Let Me Down - The Chainsmokers', 119302924, '2016-05-25 19:41:04', 0),
(14, 'Don''t Let Me Down - The Chainsmokers', 119302924, '2016-05-25 19:41:13', 0),
(15, 'Don''t Let Me Down - The Chainsmokers', 119302924, '2016-05-25 19:41:50', 0),
(16, 'Testament - Boudewijn de Groot', 2306044, '2016-05-25 19:42:11', 0),
(17, 'Het Pizzalied - Andre Van Duin', 25674241, '2016-05-25 19:46:52', 0),
(18, 'FourFiveSeconds - Kanye West', 95965912, '2016-05-25 19:47:03', 0),
(19, 'test', 2306044, '2016-05-26 00:32:54', 0),
(20, 'test2', 63510361, '2016-05-26 00:34:59', 0),
(21, 'Underdog - Kasabian', 3437873, '2016-05-26 00:38:56', 0),
(22, 'Work - Rihanna', 118190298, '2016-05-26 01:07:36', 0),
(23, 'Somebody Told Me - The Killers', 71955236, '2016-05-26 01:08:27', 0),
(24, 'Right Hand - Drake', 105069590, '2016-05-26 01:11:29', 0),
(25, 'Even Fijn Bezig Zijn - Tol Hansse', 100224066, '2016-05-26 01:11:44', 0),
(26, 'Het Regent Zonnestralen - Acda & De Munnik', 576524, '2016-05-26 01:11:54', 0),
(27, 'Testament - Lange Frans', 17141509, '2016-05-26 01:12:55', 0),
(28, 'Op en Neer - F1rstman', 117301802, '2016-05-26 01:14:28', 0),
(29, 'Don''t Let Me Down - The Chainsmokers', 119302924, '2016-05-26 04:40:08', 0),
(30, 'Kiss It Better - Rihanna', 118190296, '2016-05-26 04:44:27', 0),
(31, 'Hotelsuite - Nielson & Jiggy Djé', 119648198, '2016-05-26 05:55:11', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
