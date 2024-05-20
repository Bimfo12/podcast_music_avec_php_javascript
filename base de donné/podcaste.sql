-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 18 avr. 2023 à 15:49
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `podcaste`
--

-- --------------------------------------------------------

--
-- Structure de la table `audio`
--

DROP TABLE IF EXISTS `audio`;
CREATE TABLE IF NOT EXISTS `audio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `genre` text NOT NULL,
  `emplacement` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
 
--
-- Déchargement des données de la table `audio`
--

INSERT INTO `audio` (`id`, `titre`, `genre`, `emplacement`) VALUES
(6, 'kaiamba', 'hira', 'audio/afompitiavagna.mp3'),
(5, 'lemajijy', 'hira', 'audio/loslobaka.mp3'),
(7, 'Père riche Père Pouvre', 'Education', 'audio/Père riche père pauvre.mp3'),
(8, 'example', 'tet', 'audio/18.04.231681793193.mp3');

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `adresse` text NOT NULL,
  `telepnon` int(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `info`
--

INSERT INTO `info` (`id`, `nom`, `prenom`, `adresse`, `telepnon`) VALUES
(1, 'Stephana', 'arthine', 'Fénérive-Est', 345508492);

-- --------------------------------------------------------

--
-- Structure de la table `pdp`
--

DROP TABLE IF EXISTS `pdp`;
CREATE TABLE IF NOT EXISTS `pdp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emplacement` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pdp`
--

INSERT INTO `pdp` (`id`, `emplacement`) VALUES
(2, 'image/18.04.23168180649711341374961491789907.png');

-- --------------------------------------------------------

--
-- Structure de la table `plusinfo`
--

DROP TABLE IF EXISTS `plusinfo`;
CREATE TABLE IF NOT EXISTS `plusinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datedenaissance` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `loisire` text NOT NULL,
  `sexe` text NOT NULL,
  `situation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `plusinfo`
--

INSERT INTO `plusinfo` (`id`, `datedenaissance`, `description`, `loisire`, `sexe`, `situation`) VALUES
(1, '25 décembre 2000', 'bienvenu dans mon mur, vous voulez savoir qui suis-je? alors je suis un home sérieux  et fiable je suis dynamique mais parfois je suis un peut impulsive.', 'foot Ball', 'masculin', 'célibataire ');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `mail`, `password`) VALUES
(2, 'edouard', 'giltoedouard@gmail.com', 'ef8deb2827e5e1bbfa6f4668ef8e0d4fcbcb42b9'),
(3, 'stephana', 'stephana@gmail.com', 'ef8deb2827e5e1bbfa6f4668ef8e0d4fcbcb42b9'),
(4, 'francial', 'francial@gmail.com', 'ef8deb2827e5e1bbfa6f4668ef8e0d4fcbcb42b9'),
(5, 'reza', 'reza@gmail.com', 'ef8deb2827e5e1bbfa6f4668ef8e0d4fcbcb42b9'),
(6, 'dessise', 'dassise@gmail.com', 'ef8deb2827e5e1bbfa6f4668ef8e0d4fcbcb42b9'),
(7, 'lando', 'lando@gmail.com', 'ef8deb2827e5e1bbfa6f4668ef8e0d4fcbcb42b9'),
(8, 'anicet', 'anicet@gmail.com', 'ef8deb2827e5e1bbfa6f4668ef8e0d4fcbcb42b9'),
(9, 'sergio', 'sergio@gmail.com', 'ef8deb2827e5e1bbfa6f4668ef8e0d4fcbcb42b9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
