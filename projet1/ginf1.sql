-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 19 fév. 2022 à 15:38
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ensa`
--

-- --------------------------------------------------------

--
-- Structure de la table `ginf1`
--

CREATE TABLE `ginf1` (
  `mdp` varchar(20) NOT NULL,
  `codeAp` int(6) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tele` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ginf1`
--

INSERT INTO `ginf1` (`mdp`, `codeAp`, `nom`, `prenom`, `tele`, `email`, `img`) VALUES
('456387', 100666, 'redone', 'amina', 666487599, 'amina.redone@gmail.c', 0x616d696e612e6a70670d0a),
('ikram,reg', 100999, 'regragi', 'ikram', 677889966, 'ikram.reg@gmail.co', 0x696b72616d2e6a7067),
('laila,laila', 100123, 'rhoni', 'laila', 644372274, 'laila.rhoni@gmail.co', 0x6c61696c612e6a7067),
('malak,alaoui', 100852, 'alaoui', 'malak', 648795123, 'malak.alaoui@gmail.c', 0x73616c6d612e706e67);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ginf1`
--
ALTER TABLE `ginf1`
  ADD PRIMARY KEY (`mdp`,`codeAp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
