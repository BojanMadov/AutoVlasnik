-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2013 at 04:26 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autovlasnik`
--

-- --------------------------------------------------------

--
-- Table structure for table `gorivo`
--

CREATE TABLE IF NOT EXISTS `gorivo` (
  `litar` int(11) NOT NULL,
  `cenag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gorivo`
--

INSERT INTO `gorivo` (`litar`, `cenag`) VALUES
(22, 36),
(35, 48),
(28, 44),
(58, 79);

-- --------------------------------------------------------

--
-- Table structure for table `popravka`
--

CREATE TABLE IF NOT EXISTS `popravka` (
  `idpop` int(11) NOT NULL,
  `idauto` int(11) NOT NULL,
  `majstor` varchar(30) NOT NULL,
  `cenap` int(11) NOT NULL,
  `datump` date NOT NULL,
  `izvpop` varchar(100) NOT NULL,
  PRIMARY KEY (`idpop`),
  KEY `idauto` (`idauto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `popravka`
--

INSERT INTO `popravka` (`idpop`, `idauto`, `majstor`, `cenap`, `datump`, `izvpop`) VALUES
(1, 2, 'Glass service', 120, '2013-01-01', 'Menjanje sofersajbne');

-- --------------------------------------------------------

--
-- Table structure for table `servis`
--

CREATE TABLE IF NOT EXISTS `servis` (
  `idservis` int(11) NOT NULL,
  `idauto` int(11) NOT NULL,
  `datums` date NOT NULL,
  `imeservisa` varchar(30) NOT NULL,
  `cenas` int(11) NOT NULL,
  `tipservisa` varchar(30) NOT NULL,
  `komentars` varchar(100) NOT NULL,
  PRIMARY KEY (`idservis`),
  UNIQUE KEY `komentar` (`komentars`),
  UNIQUE KEY `komentars` (`komentars`),
  KEY `idauto` (`idauto`),
  KEY `idauto_2` (`idauto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `servis`
--

INSERT INTO `servis` (`idservis`, `idauto`, `datums`, `imeservisa`, `cenas`, `tipservisa`, `komentars`) VALUES
(1, 1, '2013-01-09', 'Audi centar', 155, 'Mali servis', '+menjanje auspuha'),
(2, 1, '2012-09-12', 'Audi Mile', 100, 'Mali servis', 'n/a'),
(3, 2, '2013-10-10', 'Delta BMW', 1590, 'Veliki servis', '');

-- --------------------------------------------------------

--
-- Table structure for table `vozilo`
--

CREATE TABLE IF NOT EXISTS `vozilo` (
  `id` int(11) NOT NULL,
  `tip` varchar(20) NOT NULL,
  `cc` int(11) NOT NULL,
  `godpr` date NOT NULL,
  `snaga` int(3) NOT NULL,
  `boja` varchar(20) NOT NULL,
  `cena` int(11) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vozilo`
--

INSERT INTO `vozilo` (`id`, `tip`, `cc`, `godpr`, `snaga`, `boja`, `cena`, `komentar`) VALUES
(1, 'Audi A5', 1998, '2007-01-01', 155, 'Crvena', 22000, 'n/a'),
(2, 'BMW 520i', 2173, '2006-06-12', 176, 'Siva', 28000, 'bimer');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `popravka`
--
ALTER TABLE `popravka`
  ADD CONSTRAINT `v2` FOREIGN KEY (`idauto`) REFERENCES `vozilo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `servis`
--
ALTER TABLE `servis`
  ADD CONSTRAINT `spkljuc` FOREIGN KEY (`idauto`) REFERENCES `vozilo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
