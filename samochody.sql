-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Sty 2019, 16:43
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `samochody`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `id` int(4) NOT NULL,
  `Marka` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `Model` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `Typ_Paliwa` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Rocznik` int(4) NOT NULL,
  `Kolor` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`id`, `Marka`, `Model`, `Typ_Paliwa`, `Rocznik`, `Kolor`) VALUES
(3, 'Audi', 'A3', 'Benzyna', 2001, 'Szary'),
(7, 'Citroen', 'C4', 'Diesel', 2002, 'Srebrny'),
(9, 'Peugot', '306', 'Diesel', 1999, 'BiaÅ‚y'),
(10, 'Skoda', 'Fabia', 'Benzyna', 2002, 'Czerwony'),
(11, 'Porshe', 'Panamera', 'Benzyna', 2010, 'Czarny'),
(12, 'Audi', 'Q7', 'Diesel', 2009, 'Czarny'),
(13, 'Volkswagen', 'Golf R32', 'Benzyna', 2001, 'Niebieski'),
(15, 'Tesla', 'Model X', 'PrÄ…d', 2018, 'BiaÅ‚y'),
(16, 'Volkswagen ', 'Polo', 'Benzyna+Gaz', 1999, 'Srebrny');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
