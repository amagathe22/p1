-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  jeu. 03 mai 2018 à 12:53
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `linkedon`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE `candidat` (
  `id` int(11) NOT NULL,
  `age` varchar(50) NOT NULL,
  `p_act` varchar(65) NOT NULL,
  `nom` varchar(65) NOT NULL,
  `prenom` varchar(65) NOT NULL,
  `adresse` varchar(65) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id`, `age`, `p_act`, `nom`, `prenom`, `adresse`, `telephone`, `email`) VALUES
(1, '20', 'Etudiant a l ISEP', 'Adam', 'Cyrille', 'Rue notre Dame des Champs 75006 Paris', '0642010357', 'adam.cyrille@hotmail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(100) NOT NULL,
  `nom` varchar(65) NOT NULL,
  `adresse` varchar(65) NOT NULL,
  `description` text NOT NULL,
  `annee` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `adresse`, `description`, `annee`, `email`) VALUES
(7, 'Sopra Steria', 'Rue de Presbourg 75016 Paris', 'Grande firme de la transformation du numerique', '1997', 'cyrillou97@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `parution` varchar(65) NOT NULL,
  `description` text NOT NULL,
  `entreprise` varchar(65) NOT NULL,
  `adresse` varchar(65) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`parution`, `description`, `entreprise`, `adresse`, `id`) VALUES
('contact@soprasteria.com', 'Ingenieur developpement JAVA J2EE - Alternance (Ref 0230)', 'Sopra Steria', 'Paris - FRANCE', 14),
('contact@soprasteria.com', 'Chef de Projet - CDI (Ref 0231)', 'Sopra Steria', 'Paris - FRANCE', 15),
('contact@soprasteria.com', 'Project Management Officer - Stage (Ref 0232)', 'Sopra Steria', 'Paris - FRANCE', 16),
('contact@thales.com', 'PMO', 'Thales', 'Massy - FRANCE', 17);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `email` varchar(65) NOT NULL,
  `mdp` varchar(65) NOT NULL,
  `id` int(200) NOT NULL,
  `type` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`email`, `mdp`, `id`, `type`) VALUES
('adam.cyrille@hotmail.fr', '$2y$10$Mr/0zhQdMEIPz1JHukqUI.ot/6uqASq8LEwkE2qHxVxPIzJvGBmpi', 27, 'candidat'),
('cyrillou97@gmail.com', '$2y$10$uMkllc4PXOYKi.hY17RAzO7vbibWthiWGP6frUKF5bkeRzQ7jq/vC', 28, 'entreprise');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
