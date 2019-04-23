-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 23 avr. 2019 à 18:25
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `articlebdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(30) NOT NULL,
  `contenu` varchar(30) NOT NULL,
  `dateCreation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `dateCreation`) VALUES
(21, 'adzdzdzdzdzdz', 'qsqsqsq', '2019-04-23'),
(20, 'a', 'qsqsqsq', '2019-04-23'),
(8, 'a', 'a', '2019-04-23'),
(9, 'a', 'a', '2019-04-23'),
(10, 'a', 'a', '2019-04-23'),
(11, 'a', 'a', '2019-04-23'),
(12, 'a', 'ddd', '2019-04-23'),
(13, 'a', 'ddd', '2019-04-23'),
(14, 'a', 'ddd', '2019-04-23'),
(15, 'a', 'ddd', '2019-04-23'),
(16, 'qsqsqsqsq', 'qsqsqsq', '2019-04-23'),
(17, 'qsqsqsqsq', 'qsqsqsq', '2019-04-23'),
(18, 'a', 'ddd', '2019-04-23'),
(19, 'a', 'ddd', '2019-04-23');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articleId` int(11) NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `contenu` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `articleId`, `auteur`, `contenu`) VALUES
(3, 1, 'Gazz', 'dfdfdfdfdfdfdfdfd'),
(5, 1, 'Gazz', 'dfdfdfdfdfdfdfdfd'),
(6, 1, 'Gazz', 'dfdfdfdfdfdfdfdfd'),
(7, 1, 'Gazz', 'dfdfdfdfdfdfdfdfd'),
(8, 1, 'Gazz', 'dfdfdfdfdfdfdfdfd'),
(9, 1, 'Gazz', 'dfdfdfdfdfdfdfdfd'),
(19, 21, 'aa', 'héhé');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
