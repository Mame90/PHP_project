-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 16 mars 2022 à 13:09
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
-- Base de données : `univert`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

DROP TABLE IF EXISTS `candidature`;
CREATE TABLE IF NOT EXISTS `candidature` (
  `id_candid` int(6) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(20) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `adresse` varchar(20) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `statut` varchar(10) DEFAULT NULL,
  `emploi` varchar(50) DEFAULT NULL,
  `cv` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`id_candid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `candidature`
--

INSERT INTO `candidature` (`id_candid`, `prenom`, `nom`, `adresse`, `tel`, `email`, `genre`, `statut`, `emploi`, `cv`) VALUES
(5, 'Sory', 'DIAKHITE', 'kedougou', 775347610, 'diakhite@gmail.com', 'Homme', 'Emploi', 'Developpeur web', 'Motivation stage.pdf'),
(4, 'MAmadou', 'DIOUF', 'Dakar', 786546732, 'diouf@gmail.com', 'Homme', 'Stagiaire', 'Developpeur php', 'Identite.pdf'),
(6, 'Oumar', 'BA', 'Dakar', 770574304, 'ba@gmail.com', 'Homme', 'Stagiaire', 'Admin reseaux', 'CV Diakaria DIARRA.pdf'),
(7, 'Denis', 'DIATTA', 'Dakar', 770129618, 'diatta@gmail.com', 'Homme', 'Stagiaire', 'Gestionnaire', 'Lettre de motivation.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `matricule` varchar(10) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `date_lieu_naissance` varchar(70) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `tel` int(10) NOT NULL,
  `email` varchar(70) NOT NULL,
  `situation_matri` varchar(20) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `statut` varchar(20) CHARACTER SET utf8 NOT NULL,
  `fonction` varchar(20) NOT NULL,
  `salaire` int(10) NOT NULL,
  `date_entree` date NOT NULL,
  `presence` varchar(20) NOT NULL,
  `cv` varchar(90) NOT NULL,
  `photo` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`matricule`, `prenom`, `nom`, `date_lieu_naissance`, `adresse`, `tel`, `email`, `situation_matri`, `genre`, `statut`, `fonction`, `salaire`, `date_entree`, `presence`, `cv`, `photo`) VALUES
('13D03G', 'Diakaria', 'DIARRA', '13/01/1995 a sansamba', 'Dakar', 774192638, 'diakariadrr@gmail.com', 'CÃ©libataire', 'Homme', 'Stagiaire', 'Admin reseax', 180000, '2022-03-13', 'Present', 'CV Diakaria DIARRA.pdf', 'IMG_20210204_011513.jpg'),
('13O03B', 'Oumar', 'BA', '28/12/1990 a richaltole', 'Dakar', 770983752, 'oumar@gmail.com', 'CÃ©libataire', 'Homme', 'Cadre', 'Maitenancier', 190000, '2022-03-13', 'Present', 'Identite.pdf', 'MYXJ_20210204011909819_save.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `page_admin`
--

DROP TABLE IF EXISTS `page_admin`;
CREATE TABLE IF NOT EXISTS `page_admin` (
  `id_admin` int(6) NOT NULL AUTO_INCREMENT,
  `annonce` varchar(1000) DEFAULT NULL,
  `reponse_demande` varchar(1000) DEFAULT NULL,
  `reponse_suggetion` varchar(1000) DEFAULT NULL,
  `avertissement` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_util` int(5) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `nom_utilisateur` varchar(90) NOT NULL,
  `mot_de_passe` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_util`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_util`, `prenom`, `nom`, `nom_utilisateur`, `mot_de_passe`) VALUES
(4, 'Oumou', 'THIAM', 'thiamunivert@gmail.tech', 'c2b71e4f7f2f2de5f8780c10275623ddfcf9db35'),
(3, 'Diakaria', 'DIARRA', 'diarraunivert@gmail.tech', 'c2b71e4f7f2f2de5f8780c10275623ddfcf9db35'),
(5, 'Oumar', 'BA', 'baunivert@gmail.tech', '3b55e1527b56f09eda9a04984530b19a1fff9a49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
