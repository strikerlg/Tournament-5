-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 28 Octobre 2015 à 11:02
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tennis_tournament`
--
CREATE DATABASE IF NOT EXISTS `tennis_tournament` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tennis_tournament`;

-- --------------------------------------------------------

--
-- Structure de la table `courts`
--

DROP TABLE IF EXISTS `courts`;
CREATE TABLE IF NOT EXISTS `courts` (
  `CourtId` int(11) NOT NULL AUTO_INCREMENT,
  `CourtGroundType` varchar(45) DEFAULT NULL,
  `CourtAddress` varchar(255) NOT NULL,
  `CourtAddressN` varchar(45) DEFAULT NULL,
  `CourtAddressC` varchar(45) DEFAULT NULL,
  `CourtAddressL` varchar(255) DEFAULT NULL,
  `CourtType` varchar(45) NOT NULL,
  `CourtAccessComments` text NOT NULL,
  `CourtOwnerComments` text NOT NULL,
  `CourtStaffComments` text NOT NULL,
  `CourtAvailSat` varchar(45) DEFAULT NULL,
  `CourtAvailSun` varchar(45) NOT NULL,
  `CourtOwner` int(11) DEFAULT NULL,
  PRIMARY KEY (`CourtId`),
  KEY `UserId_idx` (`CourtOwner`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Vider la table avant d'insérer `courts`
--

TRUNCATE TABLE `courts`;
--
-- Contenu de la table `courts`
--

INSERT INTO `courts` (`CourtId`, `CourtGroundType`, `CourtAddress`, `CourtAddressN`, `CourtAddressC`, `CourtAddressL`, `CourtType`, `CourtAccessComments`, `CourtOwnerComments`, `CourtStaffComments`, `CourtAvailSat`, `CourtAvailSun`, `CourtOwner`) VALUES
(5, 'Gazon', 'Rue des Cordeliers', '28', '60200', 'Compy', 'Privé', '', '', '', 'on', 'on', 5);

-- --------------------------------------------------------

--
-- Structure de la table `tournaments`
--

DROP TABLE IF EXISTS `tournaments`;
CREATE TABLE IF NOT EXISTS `tournaments` (
  `TournamentId` int(11) NOT NULL AUTO_INCREMENT,
  `TournamentYear` varchar(45) DEFAULT NULL,
  `TournamentCategory` varchar(265) NOT NULL,
  `TournamentType` varchar(265) NOT NULL,
  PRIMARY KEY (`TournamentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Vider la table avant d'insérer `tournaments`
--

TRUNCATE TABLE `tournaments`;
--
-- Contenu de la table `tournaments`
--

INSERT INTO `tournaments` (`TournamentId`, `TournamentYear`, `TournamentCategory`, `TournamentType`) VALUES
(6, '2017', 'Pré-minimes', 'Hommes'),
(7, '2016', 'Scolaires', 'Hommes');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserFirstName` varchar(45) NOT NULL,
  `UserLastName` varchar(45) NOT NULL,
  `UserBirthDate` date DEFAULT NULL,
  `UserAddress` varchar(45) DEFAULT NULL,
  `UserAddressN` int(11) DEFAULT NULL,
  `UserAddressB` int(11) DEFAULT NULL,
  `UserAddressC` int(11) DEFAULT NULL,
  `UserAddressL` varchar(45) DEFAULT NULL,
  `UserPhone` varchar(45) DEFAULT NULL,
  `UserMail` varchar(45) DEFAULT NULL,
  `Userpassword` longtext,
  `Salt` varchar(128) NOT NULL,
  `UserCreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `RoleId` int(11) NOT NULL,
  `Titre` varchar(10) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Vider la table avant d'insérer `users`
--

TRUNCATE TABLE `users`;
--
-- Contenu de la table `users`
--

INSERT INTO `users` (`UserId`, `UserFirstName`, `UserLastName`, `UserBirthDate`, `UserAddress`, `UserAddressN`, `UserAddressB`, `UserAddressC`, `UserAddressL`, `UserPhone`, `UserMail`, `Userpassword`, `Salt`, `UserCreationDate`, `RoleId`, `Titre`) VALUES
(4, 'Asma', 'Berkani', '1992-10-30', 'Rue Victor Horton', 34, 3, 1348, 'LLN', '0638319685', 'asma.berkani@staff.com', '0', '', NULL, 1, ''),
(5, 'Asma', 'Berkani', '1992-10-30', 'Rue Victor Horta', 34, 3, 1348, 'LLN', '0638319685', 'asma.berkapni@admin.com', '4f8ee01c497c8a7d6f44334dc15bd44fe5acea9aed07f67e34a22ec490cfced1', 's*vl%/?s8b*b4}b/w%w4', '2015-10-26 08:38:43', 2, ''),
(9, 'Asma', 'Berkani', '1992-10-30', 'Rue Victor Hortoi', 34, 3, 1348, 'LLN', '0638319685', 'asma.berkani@admin.com', '99', '2', '2015-10-26 16:59:45', 2, 'Femme'),
(11, 'Tinhinane', 'Ait Hamouda', '1992-06-12', 'Rue du dépot', 21, 110, 60200, 'Compiègne', '0638319685', 'tinhinane@gmail.com', 'Ezma991828', '2', '2015-10-27 23:10:48', 2, 'Homme');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `courts`
--
ALTER TABLE `courts`
  ADD CONSTRAINT `UserId` FOREIGN KEY (`CourtOwner`) REFERENCES `users` (`UserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
