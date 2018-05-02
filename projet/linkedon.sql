-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2018 at 10:27 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkedon`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidat`
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
-- Dumping data for table `candidat`
--

INSERT INTO `candidat` (`id`, `age`, `p_act`, `nom`, `prenom`, `adresse`, `telephone`, `email`) VALUES
(11, '19', 'etudiant', 'Petrit', 'Sacha', '9 rue de Luneville 75019 Paris', '0658139724', 'sacha@isep.fr');

-- --------------------------------------------------------

--
-- Table structure for table `entreprise`
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
-- Dumping data for table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `adresse`, `description`, `annee`, `email`) VALUES
(6, 'Mitsubishi Motors', 'Tokyo', 'Motors technologies', '1937', 'Mitsubishi@com');

-- --------------------------------------------------------

--
-- Table structure for table `offre`
--

CREATE TABLE `offre` (
  `parution` date NOT NULL,
  `description` text NOT NULL,
  `entreprise` varchar(65) NOT NULL,
  `adresse` varchar(65) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offre`
--

INSERT INTO `offre` (`parution`, `description`, `entreprise`, `adresse`, `id`) VALUES
('0000-00-00', 'Mitsubishi recherche un alternant vÃ©rification technique avant vente nÃ©cessaire bon relationnel', 'Mitsubishi', 'Tokyo', 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(65) NOT NULL,
  `mdp` varchar(65) NOT NULL,
  `id` int(200) NOT NULL,
  `type` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `mdp`, `id`, `type`) VALUES
('sacha@isep.fr', '$2y$10$rBdbyBvtnTjiB8u.55drbukBfz1hH6kiwX3qVB0aUfHMmDLDHmc.K', 24, 'candidat'),
('Mitsubishi@com', '$2y$10$6hk4q.G2URc9lMbuYZpJZOLOTm/z6OX6nJTV4LA7agzzq.wypt7GG', 25, 'entreprise');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `offre`
--
ALTER TABLE `offre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
