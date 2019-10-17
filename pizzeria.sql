-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2019 at 12:52 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzeria`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnement`
--

CREATE TABLE `abonnement` (
  `Abbonr` int(11) NOT NULL,
  `Klantnr` int(11) NOT NULL,
  `Dag` varchar(30) NOT NULL,
  `tijd` time NOT NULL,
  `aantalpizza` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `ProductID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abonnement`
--

INSERT INTO `abonnement` (`Abbonr`, `Klantnr`, `Dag`, `tijd`, `aantalpizza`, `Datum`, `ProductID`) VALUES
(1, 1, 'Maandag', '19:00:00', 0, '2019-10-10', 1),
(12, 2, 'Donderdag', '14:00:00', 0, '2019-10-13', 1),
(15, 2, 'Donderdag', '14:01:00', 2, '2019-10-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bestelling`
--

CREATE TABLE `bestelling` (
  `Bestellingnr` int(11) NOT NULL,
  `Totaalprijs` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `Klantnr` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bestelling`
--

INSERT INTO `bestelling` (`Bestellingnr`, `Totaalprijs`, `Datum`, `Klantnr`, `ProductID`) VALUES
(3, 10, '2019-10-10', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `klant`
--

CREATE TABLE `klant` (
  `Klantnr` int(11) NOT NULL,
  `Voornaam` text NOT NULL,
  `Tussenvoegsel` text NOT NULL,
  `Achternaam` text NOT NULL,
  `Emailadres` varchar(150) NOT NULL,
  `Gebruikersnaam` varchar(35) NOT NULL,
  `Wachtwoord` varchar(28) NOT NULL,
  `Geslacht` varchar(1) NOT NULL COMMENT 'm/v',
  `Geboortedatum` date NOT NULL,
  `Plaats` varchar(25) NOT NULL,
  `Postcode` varchar(6) NOT NULL,
  `Straat` varchar(35) NOT NULL,
  `Huisnummer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klant`
--

INSERT INTO `klant` (`Klantnr`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Emailadres`, `Gebruikersnaam`, `Wachtwoord`, `Geslacht`, `Geboortedatum`, `Plaats`, `Postcode`, `Straat`, `Huisnummer`) VALUES
(1, 'Piet', '', 'Henk', 'pietje123@gmail.com', 'Pietje', 'Henkje', 'M', '2000-12-12', 'Groningen', '9743PH', 'Zernikeplein', 11),
(2, 'jack ', '', 'Johnson', 'jack@gamil.com', 'jack12', 'testpassword', 'M', '1994-12-11', 'Groningen', '9704JT', 'vanrijnstraat', 32),
(3, 'jan ', '', 'De boer', 'jandeboer@gamil.com', 'jan202', 'geheimpassword', 'M', '1991-10-01', 'Groningen', '9704JT', 'Grotemarkt', 12),
(4, 'Mark', '', 'Willson', 'markt_wilson@gmail.ocm', 'markt09', 'mypassword', 'M', '1984-04-06', 'Haren', '9712JT', 'Rijksstraat', 54),
(5, 'Jenifer', '', 'Lopez', 'Jilo1235@gmail.ocm', 'Jennifert09', 'jenierspassword', 'V', '1974-05-23', 'Haren', '9512JT', 'Anrillenstrat', 84);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `Naam` varchar(25) NOT NULL,
  `Informatie` text NOT NULL,
  `Prijs` int(11) NOT NULL,
  `Ingredienten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `Naam`, `Informatie`, `Prijs`, `Ingredienten`) VALUES
(1, 'Pizza Salami', 'Dit is een hele lekkere pizza met salami erop', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`Abbonr`),
  ADD KEY `Klantnr` (`Klantnr`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `bestelling`
--
ALTER TABLE `bestelling`
  ADD PRIMARY KEY (`Bestellingnr`),
  ADD KEY `Klantnr` (`Klantnr`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `Klantnr_2` (`Klantnr`);

--
-- Indexes for table `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`Klantnr`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `Abbonr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `Bestellingnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `klant`
--
ALTER TABLE `klant`
  MODIFY `Klantnr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `abonnement_ibfk_1` FOREIGN KEY (`Klantnr`) REFERENCES `klant` (`Klantnr`),
  ADD CONSTRAINT `abonnement_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `bestelling`
--
ALTER TABLE `bestelling`
  ADD CONSTRAINT `bestelling_ibfk_1` FOREIGN KEY (`Klantnr`) REFERENCES `klant` (`Klantnr`),
  ADD CONSTRAINT `bestelling_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
