-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Feb 22, 2015 alle 20:16
-- Versione del server: 5.5.35
-- Versione PHP: 5.4.6-1ubuntu1.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amm14_iddasAndrea`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `attori`
--

CREATE TABLE IF NOT EXISTS `attori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `descrizione` varchar(40) DEFAULT NULL,
  `disponibile` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dump dei dati per la tabella `attori`
--

INSERT INTO `attori` (`id`, `nome`, `descrizione`, `disponibile`) VALUES
(3, 'Samuel L. Jackson', 'as Major Marquis Warren aka "The Bounty ', 0),
(4, 'Kurt Russell', 'as John Ruth aka "The Hangman', 0),
(5, 'Jennifer Jason Leigh', 'as Daisy Domergue aka "The Prisoner"', 0),
(6, 'Walton Goggins', 'as Chris Mannix aka "The Sheriff"', 0),
(7, 'Demian Bichir', 'as Bob aka "The Mexican"', 0),
(8, 'Michael Madsen ', 'as Joe Gage aka "The Cow Puncher"', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE IF NOT EXISTS `utenti` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`ID`, `user`, `pass`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'adm'),
(2, 'utente', '3ce98305181b1bac59d024a49b0ffd73', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
