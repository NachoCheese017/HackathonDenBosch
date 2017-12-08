-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 08 dec 2017 om 15:44
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `houses`
--

CREATE TABLE `houses` (
  `house_ID` int(11) NOT NULL,
  `h_city` varchar(45) DEFAULT NULL,
  `h_zipcode` varchar(45) DEFAULT NULL,
  `h_adres` varchar(45) DEFAULT NULL,
  `h_rent_buy` varchar(45) DEFAULT NULL,
  `h_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `houses`
--

INSERT INTO `houses` (`house_ID`, `h_city`, `h_zipcode`, `h_adres`, `h_rent_buy`, `h_type`) VALUES
(0, 'city', 'zipcode', 'address', 'rent', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `house_types`
--

CREATE TABLE `house_types` (
  `house_type_ID` int(11) NOT NULL,
  `house_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `house_types`
--

INSERT INTO `house_types` (`house_type_ID`, `house_name`) VALUES
(1, 'apppartment');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `levels`
--

CREATE TABLE `levels` (
  `level_ID` int(11) NOT NULL,
  `l_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Tabelstructuur voor tabel `products_customer`
--

CREATE TABLE `products_customer` (
  `product_ID` int(11) NOT NULL,
  `template_ID` int(11) NOT NULL,
  `p_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products_customer`
--

INSERT INTO `products_customer` (`product_ID`, `template_ID`, `p_description`) VALUES
(0, 0, 'TEST'),
(1, 0, 'TEST');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_template`
--

CREATE TABLE `product_template` (
  `template_ID` int(11) NOT NULL,
  `t_name` varchar(100) NOT NULL,
  `t_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product_template`
--

INSERT INTO `product_template` (`template_ID`, `t_name`, `t_description`) VALUES
(0, 'ketel_merk_A', 'Perfecte ketel');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `settings`
--

CREATE TABLE `settings` (
  `setting_ID` int(11) NOT NULL,
  `p_email` varchar(45) DEFAULT NULL,
  `p_name` varchar(45) DEFAULT NULL,
  `p_location` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `settings`
--

INSERT INTO `settings` (`setting_ID`, `p_email`, `p_name`, `p_location`) VALUES
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_ID`, `u_mail`, `u_password`, `u_salt`, `u_firstname`, `u_lastname`) VALUES
(1, 'stijnklomp1@hotmail.com', '79795a0cfa2fbdb7e77cb7c56fcb4ad159a99fbb732724cc347a317b42d5006635b6828269926c64caf94ac68a2f85798c7d20b5af137e152c43cc76a4b4e203', 'cf34d150e04b71a5fa148f222523da96601a35fb0828bcb44db8c82436b6f22bc986cb8c5b2b20f38d27d39647b5a5372bca8a274a595357c68cfa3b7083d91a', 'Stijn', 'Klomp');

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
-- Indexen voor tabel `products_customer`
--
ALTER TABLE `products_customer`
  ADD PRIMARY KEY (`product_ID`,`template_ID`);

--
-- Indexen voor tabel `product_template`
--
ALTER TABLE `product_template`
  ADD PRIMARY KEY (`template_ID`);

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
  ADD CONSTRAINT `house_id` FOREIGN KEY (`house_ID`) REFERENCES `houses` (`house_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `level_id` FOREIGN KEY (`level_ID`) REFERENCES `levels` (`level_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `setting_id` FOREIGN KEY (`setting_ID`) REFERENCES `settings` (`setting_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `house_type` FOREIGN KEY (`h_type`) REFERENCES `house_types` (`house_type_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
