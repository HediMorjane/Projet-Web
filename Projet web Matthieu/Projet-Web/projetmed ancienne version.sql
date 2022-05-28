-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 24 mai 2022 à 13:41
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
  `Id_Admin` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `MotdePasse` varchar(20) NOT NULL,
  `TypeConnexion` int(11) NOT NULL,
  PRIMARY KEY (`Id_Admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chatbox`
--

DROP TABLE IF EXISTS `chatbox`;
CREATE TABLE IF NOT EXISTS `chatbox` (
  `Id_Chat` int(11) NOT NULL AUTO_INCREMENT,
  `Id_MedGe` int(11) NOT NULL,
  `Id_Client` int(11) NOT NULL,
  `Id_MedSpe` int(11) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`Id_Chat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Id_Client` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `MotdePasse` varchar(20) NOT NULL,
  `TypeConnexion` int(20) NOT NULL,
  `Adresse` varchar(30) NOT NULL,
  `CarteVitale` varchar(20) NOT NULL,
  `CarteBanquaire` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Client`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `Id_Event` int(11) NOT NULL AUTO_INCREMENT,
  `Description` text NOT NULL,
  `Image` mediumblob NOT NULL,
  `Organisateur` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Event`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `laboratoire`
--

DROP TABLE IF EXISTS `laboratoire`;
CREATE TABLE IF NOT EXISTS `laboratoire` (
  `Id_Lab` int(11) NOT NULL AUTO_INCREMENT,
  `Salle` varchar(20) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Type_Services` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`Id_Lab`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medecinge`
--

DROP TABLE IF EXISTS `medecinge`;
CREATE TABLE IF NOT EXISTS `medecinge` (
  `Id_MedGe` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `Photo` mediumblob NOT NULL,
  `Bureau` varchar(20) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `CV` text NOT NULL,
  `MotdePasse` varchar(20) NOT NULL,
  `TypeConnexion` int(20) NOT NULL,
  PRIMARY KEY (`Id_MedGe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medecinspe`
--

DROP TABLE IF EXISTS `medecinspe`;
CREATE TABLE IF NOT EXISTS `medecinspe` (
  `Id_MedSpe` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `Spé` varchar(20) NOT NULL,
  `Photo` mediumblob NOT NULL,
  `Bureau` varchar(20) NOT NULL,
  `CV` text NOT NULL,
  `MotdePasse` varchar(20) NOT NULL,
  `TypeConnexion` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_MedSpe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

DROP TABLE IF EXISTS `rendezvous`;
CREATE TABLE IF NOT EXISTS `rendezvous` (
  `Id_RDV` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Heure` varchar(20) NOT NULL,
  `Id_MedGe` int(11) NOT NULL,
  `Id_Client` int(11) NOT NULL,
  `Id_Lab` int(11) NOT NULL,
  `Id_MedSpe` int(11) NOT NULL,
  `TypeRDV` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_RDV`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
