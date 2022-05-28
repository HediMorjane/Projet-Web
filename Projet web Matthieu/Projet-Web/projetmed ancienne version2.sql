-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 24 mai 2022 à 20:52
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetmed`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `NomAdmin` varchar(20) NOT NULL,
  `MotdePasse` varchar(20) DEFAULT NULL,
  `TypeConnexion` int(11) DEFAULT NULL,
  PRIMARY KEY (`NomAdmin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chatbox`
--

DROP TABLE IF EXISTS `chatbox`;
CREATE TABLE IF NOT EXISTS `chatbox` (
  `Id_Chat` int(11) NOT NULL AUTO_INCREMENT,
  `Id_MedGe` int(11) DEFAULT NULL,
  `Id_Client` int(11) DEFAULT NULL,
  `Id_MedSpe` int(11) DEFAULT NULL,
  `Message` text,
  PRIMARY KEY (`Id_Chat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `NomClient` varchar(20) NOT NULL,
  `MotdePasse` varchar(20) DEFAULT NULL,
  `TypeConnexion` int(20) DEFAULT NULL,
  `Adresse` varchar(30) DEFAULT NULL,
  `CarteVitale` varchar(20) DEFAULT NULL,
  `CarteBanquaire` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`NomClient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `Id_Event` int(11) NOT NULL AUTO_INCREMENT,
  `Description` text,
  `Image` mediumblob,
  `Organisateur` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_Event`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `laboratoire`
--

DROP TABLE IF EXISTS `laboratoire`;
CREATE TABLE IF NOT EXISTS `laboratoire` (
  `Salle` varchar(20) NOT NULL,
  `Tel` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Type_Services` varchar(20) DEFAULT NULL,
  `Description` text,
  PRIMARY KEY (`Salle`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medecinge`
--

DROP TABLE IF EXISTS `medecinge`;
CREATE TABLE IF NOT EXISTS `medecinge` (
  `NomMedGe` varchar(20) NOT NULL,
  `Photo` mediumblob,
  `Bureau` varchar(20) DEFAULT NULL,
  `Tel` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `CV` text,
  `MotdePasse` varchar(20) DEFAULT NULL,
  `TypeConnexion` int(20) DEFAULT NULL,
  PRIMARY KEY (`NomMedGe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medecinspe`
--

DROP TABLE IF EXISTS `medecinspe`;
CREATE TABLE IF NOT EXISTS `medecinspe` (
  `NomMedSpe` varchar(20) NOT NULL,
  `Spé` varchar(20) DEFAULT NULL,
  `Photo` mediumblob,
  `Bureau` varchar(20) DEFAULT NULL,
  `CV` text,
  `MotdePasse` varchar(20) DEFAULT NULL,
  `TypeConnexion` int(11) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`NomMedSpe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

DROP TABLE IF EXISTS `rendezvous`;
CREATE TABLE IF NOT EXISTS `rendezvous` (
  `Id_RDV` int(11) NOT NULL AUTO_INCREMENT,
  `DateRDV` varchar(20) DEFAULT NULL,
  `Heure` varchar(20) DEFAULT NULL,
  `NomMedGe` varchar(20) DEFAULT NULL,
  `NomClient` varchar(20) DEFAULT NULL,
  `Salle` varchar(20) DEFAULT NULL,
  `NomMedSpe` varchar(20) DEFAULT NULL,
  `TypeRDV` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_RDV`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`Id_RDV`, `DateRDV`, `Heure`, `NomMedGe`, `NomClient`, `Salle`, `NomMedSpe`, `TypeRDV`) VALUES
(14, 'Mercredi', '15:20', '', 'Bernard', '120', 'Dr.Salade', 'Allergie'),
(13, 'Mardi', '12:20', '', 'Beatrice', '121', 'Dr.Soul', 'Mal de tete'),
(12, 'Lundi', '13:20', 'Dr.Bertrand', 'Agathe', '132', '', 'Gastrologie'),
(11, 'Dimanche', '18:20', 'Dr.Paul', 'Jean', '167', '', 'Cardiologie'),
(15, 'Mardi', '8:30', '', 'Daniel', '50', 'Dr.Salade', 'Therapie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
