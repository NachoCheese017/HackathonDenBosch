-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 dec 2017 om 10:17
-- Serverversie: 10.1.28-MariaDB
-- PHP-versie: 7.1.11

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
(0, 0, 10, 0, 4),
(1, 0, 10, 0, NULL);

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
(0, 'DEFAULT'),
(1, 'HOUSE');

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
(0, 'guest'),
(10, 'customer'),
(20, 'employee'),
(30, 'admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `product_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `p_type` varchar(45) DEFAULT NULL,
  `p_brand` varchar(45) DEFAULT NULL,
  `p_name` varchar(45) DEFAULT NULL,
  `insert_date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`product_ID`, `user_ID`, `p_type`, `p_brand`, `p_name`, `insert_date`) VALUES
(0, 0, 'cv', 'Intergas', 'HRE', ''),
(1, 0, 'cv', 'Intergas', 'HRE+U', ''),
(2, 0, 'zp', 'SolarEnergy', 'Type-A', ''),
(3, 0, 'zp', 'SolarEnergy', 'Type-B', ''),
(4, 0, 'zp', 'SolarEnergy', 'Type-C', ''),
(5, 0, 'zp', 'SolarEnergy', 'Type-D', ''),
(6, 0, 'zp', 'SolarEnergy', 'Type-E', ''),
(7, 1, 'ssd', '', 'ergergf', '2017-12-09 10:12:53'),
(8, 1, 'ssd', '', 'ergergf', '2017-12-09 10:13:26'),
(9, 1, 'ssd', '', 'ergergf', '2017-12-09 10:13:26'),
(10, 1, 'ssd', '', 'ergergf', '2017-12-09 10:13:27'),
(11, 1, 'ssd', '', 'ergergf', '2017-12-09 10:13:27'),
(12, 1, 'ssd', '', 'ergergf', '2017-12-09 10:13:27'),
(13, 1, 'ssd', '', 'ergergf', '2017-12-09 10:13:27'),
(14, 1, 'ssd', '', 'ergergf', '2017-12-09 10:13:27'),
(15, 1, 'ssd', '', 'ergergf', '2017-12-09 10:13:28');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_specifications`
--

CREATE TABLE `product_specifications` (
  `product_ID` int(11) NOT NULL,
  `specification_ID` int(11) NOT NULL,
  `s_label` varchar(45) DEFAULT NULL,
  `s_content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `product_specifications`
--

INSERT INTO `product_specifications` (`product_ID`, `specification_ID`, `s_label`, `s_content`) VALUES
(0, 0, 'vermogen', '2000A'),
(0, 1, 'energy_label', 'A');

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
(0, '0', '0', '0');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `u_mail` varchar(45) DEFAULT NULL,
  `u_password` varchar(255) DEFAULT NULL,
  `u_salt` varchar(255) DEFAULT NULL,
  `u_firstname` varchar(45) DEFAULT NULL,
  `u_lastname` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_ID`, `u_mail`, `u_password`, `u_salt`, `u_firstname`, `u_lastname`) VALUES
(0, 'creator@gmail.com', '6110a20725c76422b303c9afd8528998b0eb40c49ba04', '720e42d2f61ee650a68df8bd5e3528c4c5ed2b9e2deac', 'creator', 'lastname'),
(1, 'stijnklomp1@hotmail.com', '810b7e55db4974812113d5d86bbd953e2cd8579603ea61a344425c38d39176ef6d08b86d91cdd986dfa97fac132ab02beb63735f12132a98cd94b58db386ce74', '1b10ea70d81d57c2f4f76e7d182c1f107f37d3d743aa43db2f6fc39da6a5ee4b1a6d8ddbf788a674ae8118bdd09a6c8158dc7ae131030e753859ed5ff3d481de', 'Stijn', 'Klomp');

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
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_ID`);

--
-- Indexen voor tabel `product_specifications`
--
ALTER TABLE `product_specifications`
  ADD PRIMARY KEY (`product_ID`,`specification_ID`),
  ADD KEY `product_id_idx` (`product_ID`);

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
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `house_type` FOREIGN KEY (`h_type`) REFERENCES `house_types` (`house_type_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `product_specifications`
--
ALTER TABLE `product_specifications`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_ID`) REFERENCES `products` (`product_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
