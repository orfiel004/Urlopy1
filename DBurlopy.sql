-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 04 Mar 2021, 19:55
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `urlopy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `privileges` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `Admin`
--

INSERT INTO `Admin` (`id`, `name`, `password`, `privileges`) VALUES
(1, 'ofi', 'qwer', 1),
(2, 'pawel', 'xxx', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Holidays_status`
--

CREATE TABLE `Holidays_status` (
  `id_holiday` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `modification_date` date NOT NULL,
  `beginning` date NOT NULL,
  `finish` date NOT NULL,
  `status` enum('waiting','accepted','rejected') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'waiting',
  `type` enum('urlop bezpłatny','urlop okolicznościowy','urlop wypoczynkowy','urlop opiekuńczy') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `Holidays_status`
--

INSERT INTO `Holidays_status` (`id_holiday`, `id_user`, `creation_date`, `modification_date`, `beginning`, `finish`, `status`, `type`) VALUES
(1, 1, '2020-11-15', '2020-11-16', '2020-11-17', '2020-11-19', 'waiting', 'urlop wypoczynkowy'),
(2, 3, '2020-11-19', '2020-11-22', '2020-11-24', '2020-11-26', 'accepted', 'urlop okolicznościowy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Users`
--

CREATE TABLE `Users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `days_used` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `Users`
--

INSERT INTO `Users` (`id_user`, `name`, `surname`, `position`, `phone`, `days_used`) VALUES
(1, 'Paweł', 'Ślęczek', 'Pracownik produkcji', 123123123, 0),
(2, 'Robert', 'Górski', 'Pracownik Produkcjiu', 987987987, 0),
(3, 'Renata', 'Tokarska', 'Kierownik', 159258357, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indeksy dla tabeli `Holidays_status`
--
ALTER TABLE `Holidays_status`
  ADD PRIMARY KEY (`id_holiday`),
  ADD UNIQUE KEY `id_holiday` (`id_holiday`);

--
-- Indeksy dla tabeli `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `Holidays_status`
--
ALTER TABLE `Holidays_status`
  MODIFY `id_holiday` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
