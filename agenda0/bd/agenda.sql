-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 02 Avril 2019 à 00:20
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `agenda`
--
CREATE DATABASE IF NOT EXISTS `agenda` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `agenda`;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `idEvent` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `dateEvent` datetime NOT NULL,
  `duration` time DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idEvent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`idEvent`, `title`, `dateEvent`, `duration`, `location`) VALUES
(2, 'partielle basses', '2019-04-03 19:00:00', '01:00:00', 'local'),
(3, 'générale', '2019-04-03 20:00:00', '02:00:00', 'local'),
(4, 'partielle flûtes clarinettes', '2019-04-10 19:00:00', '01:00:00', 'local'),
(5, 'générale', '2019-04-10 20:00:00', '02:00:00', 'local'),
(6, 'partielle saxophones', '2019-04-17 19:00:00', '01:00:00', 'local'),
(7, 'séminaire musical', '2019-04-13 09:00:00', '10:00:00', 'montagne'),
(8, 'séminaire musical', '2019-04-14 09:00:00', '05:00:00', 'montagne'),
(9, 'générale', '2019-04-17 20:00:00', '02:00:00', 'local'),
(10, 'générale', '2019-05-01 20:00:00', '02:00:00', 'local'),
(11, 'générale', '2019-05-08 19:30:00', '02:30:00', 'salle de concert'),
(12, 'raccord', '2019-05-12 15:30:00', '01:00:00', 'salle de concert'),
(13, 'concert', '2019-05-12 17:00:00', '02:30:00', 'salle de concert'),
(14, 'générale', '2019-04-15 20:00:00', '02:00:00', 'local'),
(15, 'générale', '2019-04-22 20:00:00', '02:00:00', 'local'),
(16, 'raccord', '2019-05-26 15:30:00', '01:00:00', 'ailleurs'),
(17, 'concert', '2019-05-26 17:00:00', '02:30:00', 'ailleurs'),
(18, 'assemblée générale', '2019-06-04 19:00:00', '01:00:00', 'local'),
(19, 'générale', '2019-06-05 20:00:00', '02:00:00', 'local'),
(20, 'générale', '2019-06-12 20:00:00', '02:00:00', 'local'),
(21, 'générale', '2019-06-19 20:00:00', '02:00:00', 'local'),
(22, 'générale', '2019-06-26 20:00:00', '02:00:00', 'local'),
(23, 'défilé des promotions', '2019-06-28 18:00:00', '03:00:00', 'école'),
(24, 'fête nationale', '2019-08-01 19:00:00', '03:00:00', 'sur les quais');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
