-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: apr. 01, 2021 la 07:21 PM
-- Versiune server: 10.4.17-MariaDB
-- Versiune PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `aibd`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `corector`
--

CREATE TABLE `corector` (
  `idCorector` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `cnp` int(11) DEFAULT NULL,
  `adresa` varchar(50) DEFAULT NULL,
  `telefon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `corector`
--

INSERT INTO `corector` (`idCorector`, `nume`, `prenume`, `cnp`, `adresa`, `telefon`) VALUES
(5, 'gigi', 'pantera', 123123, '123123', 123123);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `elev`
--

CREATE TABLE `elev` (
  `idElev` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `cnp` varchar(50) NOT NULL,
  `adresa` varchar(50) NOT NULL,
  `telefon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `elev`
--

INSERT INTO `elev` (`idElev`, `nume`, `prenume`, `cnp`, `adresa`, `telefon`) VALUES
(1, 'student', 'rere', '123132', 'sasasa', 432),
(5, 'sdas', 'asds', '1231231', '123123', 1111),
(6, 'sdas', 'asdasd', '123123', '123123', 123123);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `lucrare`
--

CREATE TABLE `lucrare` (
  `idLucrare` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `lucrare`
--

INSERT INTO `lucrare` (`idLucrare`, `nume`, `nota`) VALUES
(1, 'dada', 8),
(2, 'dada', 7);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `corector`
--
ALTER TABLE `corector`
  ADD PRIMARY KEY (`idCorector`) USING BTREE;

--
-- Indexuri pentru tabele `elev`
--
ALTER TABLE `elev`
  ADD PRIMARY KEY (`idElev`) USING BTREE;

--
-- Indexuri pentru tabele `lucrare`
--
ALTER TABLE `lucrare`
  ADD PRIMARY KEY (`idLucrare`) USING BTREE;

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `corector`
--
ALTER TABLE `corector`
  MODIFY `idCorector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pentru tabele `elev`
--
ALTER TABLE `elev`
  MODIFY `idElev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pentru tabele `lucrare`
--
ALTER TABLE `lucrare`
  MODIFY `idLucrare` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
