-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: sept. 02, 2020 la 02:15 PM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `itjobs`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `angajator`
--

CREATE TABLE `angajator` (
  `ID` int(11) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PhoNumber` varchar(12) NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `angajator`
--

INSERT INTO `angajator` (`ID`, `E-mail`, `Password`, `PhoNumber`, `Active`) VALUES
(11, 'amazon@yahoo.com', '2497299a95fc8f59dec75eb370aa658e', '+40748889066', 1),
(12, 'mariusd30@yahoo.com', '2497299a95fc8f59dec75eb370aa658e', '+40111111111', 1);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cv`
--

CREATE TABLE `cv` (
  `ID` int(11) NOT NULL,
  `Nume` varchar(50) NOT NULL,
  `Prenume` varchar(50) NOT NULL,
  `Data_nastere` varchar(50) NOT NULL,
  `Descriere` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefon` varchar(50) NOT NULL,
  `Gen` varchar(50) NOT NULL,
  `Limbaje` text NOT NULL,
  `Joburi` text NOT NULL,
  `Tehnologii` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `cv`
--

INSERT INTO `cv` (`ID`, `Nume`, `Prenume`, `Data_nastere`, `Descriere`, `Email`, `Telefon`, `Gen`, `Limbaje`, `Joburi`, `Tehnologii`) VALUES
(1, '', '', '', '', '', '', 'Selectează din listă', '', '', ''),
(2, '', '', '', '', '', '', 'Selectează din listă', '', '', ''),
(3, '', '', '', '', '', '', 'Selectează din listă', '', '', ''),
(4, '', '', '', '', '', '', 'Selectează din listă', '', '', ''),
(5, '', '', '', '', '', '', 'Selectează din listă', '', '', ''),
(6, '123', '123', '', '', '', '', 'Selectează din listă', '', '', ''),
(7, '', '', '', '', '', '', 'Selectează din listă', '', '', ''),
(8, 'asd', '123', '', '', '', '', 'Selectează din listă', '', '', ''),
(9, '123', '123', 'asd', 'dddd', 'ddd', 'ddd', 'dddd', 'ddd', 'ddd', 'dddd');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `job`
--

CREATE TABLE `job` (
  `ID` int(11) NOT NULL,
  `ID_angajator` int(11) NOT NULL,
  `Titlu` varchar(100) NOT NULL,
  `Oras` varchar(50) NOT NULL,
  `NivelStudii` varchar(100) NOT NULL,
  `Salariu` varchar(50) NOT NULL,
  `NivelCariera` varchar(100) NOT NULL,
  `TipJob` varchar(100) NOT NULL,
  `CandidatIdeal` varchar(2000) NOT NULL,
  `DescriereJob` varchar(2000) NOT NULL,
  `DescriereCompanie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `job`
--

INSERT INTO `job` (`ID`, `ID_angajator`, `Titlu`, `Oras`, `NivelStudii`, `Salariu`, `NivelCariera`, `TipJob`, `CandidatIdeal`, `DescriereJob`, `DescriereCompanie`) VALUES
(8, 11, 'Front-End', 'Iasi', 'Liceu', '3500lei', 'incepator', 'Remote', 'Baietas', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', ''),
(9, 11, 'Amazon', 'Botosani', 'Mediu', 'Mediu', 'Mediu', 'Mediu', 'Mediu', 'Mediu', ''),
(11, 11, 'aAaa', 'a', 'aaa', 'a', 'aa', 'a', 'a', 'a', 'a'),
(121, 11, '', '', '', '', '', '', '', '', ''),
(122, 11, 'adsasdadsadasd', 'asda', 'asdasd', 'das', 'dasd', 'asd', 'sdas', 'sda', 'sda'),
(123, 11, '123123', '2312312', '', '', '', '1231231', '', '', '');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `job/cv`
--

CREATE TABLE `job/cv` (
  `ID` int(11) NOT NULL,
  `ID_Job` int(11) NOT NULL,
  `ID_CV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `job/cv`
--

INSERT INTO `job/cv` (`ID`, `ID_Job`, `ID_CV`) VALUES
(1, 8, 9),
(2, 8, 8),
(3, 8, 6),
(4, 9, 8);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PhoNumber` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `user`
--

INSERT INTO `user` (`ID`, `Email`, `Password`, `PhoNumber`) VALUES
(3, 'mariusd30@tahoo.com', '2497299a95fc8f59dec75eb370aa658e', '+4074888906'),
(4, 'ukamuraz@gmail.com', 'd0301708683744acdc1263a6aff567a5', '+4074888906'),
(6, 'asd@yahoo.com', '2497299a95fc8f59dec75eb370aa658e', '+4074888906'),
(7, 'asdf@yahoo.com', '2497299a95fc8f59dec75eb370aa658e', '+40748889066'),
(8, '1234@gmail.com', '2497299a95fc8f59dec75eb370aa658e', '+40748889066');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `user/cv`
--

CREATE TABLE `user/cv` (
  `ID` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `ID_CV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `user/cv`
--

INSERT INTO `user/cv` (`ID`, `ID_User`, `ID_CV`) VALUES
(1, 8, 8),
(2, 6, 6),
(3, 8, 8);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `angajator`
--
ALTER TABLE `angajator`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `job/cv`
--
ALTER TABLE `job/cv`
  ADD PRIMARY KEY (`ID`);

--
-- Indexuri pentru tabele `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexuri pentru tabele `user/cv`
--
ALTER TABLE `user/cv`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `angajator`
--
ALTER TABLE `angajator`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pentru tabele `cv`
--
ALTER TABLE `cv`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pentru tabele `job`
--
ALTER TABLE `job`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pentru tabele `job/cv`
--
ALTER TABLE `job/cv`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pentru tabele `user/cv`
--
ALTER TABLE `user/cv`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
