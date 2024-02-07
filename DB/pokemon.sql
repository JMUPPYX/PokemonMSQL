-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 fév. 2024 à 12:25
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pokemon`
--

-- --------------------------------------------------------

--
-- Structure de la table `drugstores`
--

DROP TABLE IF EXISTS `drugstores`;
CREATE TABLE IF NOT EXISTS `drugstores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `drugstore` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `drugstores`
--

INSERT INTO `drugstores` (`id`, `drugstore`) VALUES
(1, 'Pokegourou'),
(2, 'Kairyu'),
(3, 'Pokenike');

-- --------------------------------------------------------

--
-- Structure de la table `medecins`
--

DROP TABLE IF EXISTS `medecins`;
CREATE TABLE IF NOT EXISTS `medecins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `medecin` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `medecins`
--

INSERT INTO `medecins` (`id`, `medecin`) VALUES
(1, ' Dr Medoc'),
(2, 'Dr Chansey'),
(3, 'Dr Potion'),
(4, 'Dr Evoli'),
(5, 'Dr Hypnomade'),
(6, 'Dr Psykokwak');

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pathimg` varchar(100) NOT NULL,
  `potionID` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `potionID` (`potionID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `pictures`
--

INSERT INTO `pictures` (`id`, `pathimg`, `potionID`) VALUES
(1, 'assets/img/picture/guerison.jpg', 1),
(2, 'assets/img/picture/force.jpg', 2),
(3, 'assets/img/picture/vitesse.jpg', 3),
(4, 'assets/img/picture/defense.jpg', 4),
(5, 'assets/img/picture/capture.jpg', 5),
(6, 'assets/img/picture/transformation.jpg', 6);

-- --------------------------------------------------------

--
-- Structure de la table `potions`
--

DROP TABLE IF EXISTS `potions`;
CREATE TABLE IF NOT EXISTS `potions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `couleur` varchar(100) NOT NULL,
  `contenanceML` int NOT NULL,
  `prix` int NOT NULL,
  `note` int NOT NULL,
  `medecinID` int NOT NULL,
  `sideffectID` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `medecinID` (`medecinID`),
  KEY `sideffectID` (`sideffectID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `potions`
--

INSERT INTO `potions` (`id`, `name`, `couleur`, `contenanceML`, `prix`, `note`, `medecinID`, `sideffectID`) VALUES
(1, 'guerison', 'violet', 50, 700, 9, 1, 1),
(2, 'force', 'vert', 30, 300, 6, 2, 2),
(3, 'vitesse', 'bleu', 40, 500, 8, 3, 3),
(4, 'defense', 'rose', 60, 800, 10, 4, 4),
(5, 'capture', 'orange', 80, 800, 8, 5, 1),
(6, 'transformation', 'rouge', 90, 600, 7, 6, 2);

-- --------------------------------------------------------

--
-- Structure de la table `potions_drugstores`
--

DROP TABLE IF EXISTS `potions_drugstores`;
CREATE TABLE IF NOT EXISTS `potions_drugstores` (
  `potionID` int NOT NULL,
  `drugstoreID` int NOT NULL,
  KEY `potionID` (`potionID`),
  KEY `drugstoreID` (`drugstoreID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `potions_drugstores`
--

INSERT INTO `potions_drugstores` (`potionID`, `drugstoreID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 1),
(5, 2),
(6, 3);

-- --------------------------------------------------------

--
-- Structure de la table `sideffects`
--

DROP TABLE IF EXISTS `sideffects`;
CREATE TABLE IF NOT EXISTS `sideffects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `effect` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `sideffects`
--

INSERT INTO `sideffects` (`id`, `effect`) VALUES
(1, 'paranoia'),
(2, 'hallucination'),
(3, 'souplesse'),
(4, 'joie');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`potionID`) REFERENCES `potions` (`id`);

--
-- Contraintes pour la table `potions`
--
ALTER TABLE `potions`
  ADD CONSTRAINT `potions_ibfk_1` FOREIGN KEY (`medecinID`) REFERENCES `medecins` (`id`),
  ADD CONSTRAINT `potions_ibfk_2` FOREIGN KEY (`sideffectID`) REFERENCES `sideffects` (`id`);

--
-- Contraintes pour la table `potions_drugstores`
--
ALTER TABLE `potions_drugstores`
  ADD CONSTRAINT `potions_drugstores_ibfk_1` FOREIGN KEY (`potionID`) REFERENCES `potions` (`id`),
  ADD CONSTRAINT `potions_drugstores_ibfk_2` FOREIGN KEY (`drugstoreID`) REFERENCES `drugstores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
