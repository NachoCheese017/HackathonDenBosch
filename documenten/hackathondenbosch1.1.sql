-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 dec 2017 om 16:54
-- Serverversie: 10.1.22-MariaDB
-- PHP-versie: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathondenbosch`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `user_ID` int(11) NOT NULL,
  `house_ID` int(11) NOT NULL,
  `level_ID` int(11) NOT NULL,
  `setting_ID` int(11) NOT NULL,
  `h_occupants` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`user_ID`, `house_ID`, `level_ID`, `setting_ID`, `h_occupants`) VALUES
(7, 0, 10, 0, NULL),
(8, 0, 10, 0, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `houses`
--

CREATE TABLE `houses` (
  `house_ID` int(11) NOT NULL,
  `h_city` varchar(45) DEFAULT NULL,
  `h_zipcode` varchar(45) DEFAULT NULL,
  `h_address` varchar(45) DEFAULT NULL,
  `h_rent_buy` varchar(45) DEFAULT NULL,
  `h_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `houses`
--

INSERT INTO `houses` (`house_ID`, `h_city`, `h_zipcode`, `h_address`, `h_rent_buy`, `h_type`) VALUES
(0, 'DEFAULT', 'DEFAULT', 'DEFAULT', 'DEFAULT', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `house_types`
--

CREATE TABLE `house_types` (
  `house_type_ID` int(11) NOT NULL,
  `house_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `house_types`
--

INSERT INTO `house_types` (`house_type_ID`, `house_name`) VALUES
(0, 'STRAAT');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `levels`
--

CREATE TABLE `levels` (
  `level_ID` int(11) NOT NULL,
  `l_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `levels`
--

INSERT INTO `levels` (`level_ID`, `l_name`) VALUES
(10, 'CUSTOMER');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `settings`
--

CREATE TABLE `settings` (
  `setting_ID` int(11) NOT NULL,
  `p_show_email` varchar(45) DEFAULT NULL,
  `p_show_name` varchar(45) DEFAULT NULL,
  `p_show_location` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `settings`
--

INSERT INTO `settings` (`setting_ID`, `p_show_email`, `p_show_name`, `p_show_location`) VALUES
(0, '0', '0', '0'),
(8, '0', '0', '0');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `u_mail` varchar(45) DEFAULT NULL,
  `u_password` varchar(45) DEFAULT NULL,
  `u_salt` varchar(45) DEFAULT NULL,
  `u_firstname` varchar(45) DEFAULT NULL,
  `u_lastname` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_ID`, `u_mail`, `u_password`, `u_salt`, `u_firstname`, `u_lastname`) VALUES
(0, 'MAIL', 'ASDF', 'ASDF', NULL, NULL),
(1, 'sabrina@hooijmans.mobi', '69d56e2078086fe82018351f27d4611a338bced92acfd', 'e0d3139f1150c8992ba1576594744ae6c83edb03d00d5', '', ''),
(2, 'gkhgdj', '2fb612d2efa599123cef2cf7fe6038b1a2ae61f06a017', 'fa5da10552d95cb39ae19e8e8ec1502e8de5cd576d0e8', '', ''),
(3, 'kljgh;oj', '94e7a05eef718e86de551150e8347e3ba841b4fb61997', '995ee1a2e328da6b3da900f24b200ece10a64382d4008', '', ''),
(4, 'teset', 'b63857a08ed403cec77eb96d5c3e8197952146d53e606', '7f488b6259521ece6b4122c9559748675e35f205ef468', 'etstse', 'stsetes'),
(5, 'gfd@fd', '42d3afca92dad3adf06c1a3829b444cc16e9632618c92', '4b6b909c0f3e6f1dea75bcd946294519777b180d43637', 'fdsafsa', 'fdsafsda'),
(6, 'dsffdsaf', '86e6440c45d21f241ffdc5c3b0b72fa7cd0e92dd65494', '88bb524c6c32b6a903d034e09fe1cd864719810a75f60', '', ''),
(7, 'dfasfsafdsafsafdsa', '0499ea1a0dd62886f7a94bd0475f9ffc24dd5ed752a0e', 'aa3bb9fe5e1cbe66da7732c1b72471a2a832e096263e0', '', ''),
(8, 'agsdgasdg', 'fd6fb21d69ea77b4d4dd3a6915de8ebd04a20a0d8428e', 'ae0f41561f5f9ddfa83fdc152b8b5f9a75ef9875d846d', '', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_ID`),
  ADD KEY `house_id_idx` (`house_ID`),
  ADD KEY `level_id_idx` (`level_ID`),
  ADD KEY `setting_id_idx` (`setting_ID`);

--
-- Indexen voor tabel `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`house_ID`),
  ADD KEY `house_type_idx` (`h_type`);

--
-- Indexen voor tabel `house_types`
--
ALTER TABLE `house_types`
  ADD PRIMARY KEY (`house_type_ID`);

--
-- Indexen voor tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_ID`);

--
-- Indexen voor tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`setting_ID`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `house_id` FOREIGN KEY (`house_ID`) REFERENCES `houses` (`house_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `level_id` FOREIGN KEY (`level_ID`) REFERENCES `levels` (`level_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `setting_id` FOREIGN KEY (`setting_ID`) REFERENCES `settings` (`setting_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `house_type` FOREIGN KEY (`h_type`) REFERENCES `house_types` (`house_type_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
