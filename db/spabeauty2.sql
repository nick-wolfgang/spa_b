-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 21 août 2022 à 03:08
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spabeauty2`
--

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `commentaire` text NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id`, `nomClient`, `photo`, `commentaire`, `email`) VALUES
(1, 'ghj', 'ghj.jpg', 'sdfghjk', 'fghj@gmail.com'),
(2, 'ghj', 'ghj.jpg', 'sdfghjk', 'fghj@gmail.com'),
(3, 'Nick', 'vide.PNG', 'rdfgthyjk', 'nick@gmail.com'),
(4, 'Nick', 'vide.PNG', 'rdfgthyjk', 'nick@gmail.com'),
(5, 'dfgh', 'dfgh.jpg', 'ghjkjh', 'fghjk@gmail.com'),
(6, 'brice1', '', 'gthjklkbv', 'bn,@gmail.com'),
(7, 'brice1', '', 'gthjklkbv', 'bn,@gmail.com'),
(8, 'brice1', '', 'gthjklkbv', 'bn,@gmail.com'),
(9, 'brice1', '', 'gthjklkbv', 'bn,@gmail.com'),
(10, 'brice1', '', 'gthjklkbv', 'bn,@gmail.com'),
(11, 'brice1', '', 'gthjklkbv', 'bn,@gmail.com'),
(12, 'brice1', '', 'gthjklkbv', 'bn,@gmail.com'),
(13, 'brice1', '', 'gthjklkbv', 'bn,@gmail.com'),
(14, 'brice1', '', 'gthjklkbv', 'bn,@gmail.com'),
(15, 'brice1', '', 'gthjklkbv', 'bn,@gmail.com'),
(16, 'dfgh', 'dfgh.jpg', 'ghjkjh', 'fghjk@gmail.com'),
(17, 'dfgh', 'dfgh.jpg', 'ghjkjh', 'fghjk@gmail.com'),
(18, 'dfgh', 'dfgh.jpg', 'ghjkjh', 'fghjk@gmail.com'),
(19, 'dfgh', 'dfgh.jpg', 'ghjkjh', 'fghjk@gmail.com'),
(20, 'dfgh', 'dfgh.jpg', 'ghjkjh', 'fghjk@gmail.com'),
(21, 'dfgh', 'dfgh.jpg', 'ghjkjh', 'fghjk@gmail.com'),
(22, 'dfgh', 'dfgh.jpg', 'ghjkjh', 'fghjk@gmail.com'),
(23, 'labo', 'av.PNG', 'fvghjk', 'labo@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
