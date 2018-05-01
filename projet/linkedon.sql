-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2018 at 08:52 PM
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
(3, '19', 'etudiant', 'Petrit', 'Sacha', '6 rue therese', '0658139724', 'sacha.petrit@gmail.com'),
(5, '54', 'etudiant', 'gerd', 'rabi', '15 rue olive', '0658139724', 'rabi@com');

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
(3, 'thales', '7 rue Maraud', 'specialiste des technologies de larmement', '1941', 'thales@com'),
(4, 'arcel', '7 rue des Papas', 'cocoit des roues', '1745', 'arrce@com');

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
('sacha.petrit@gmail.com', '$2y$10$wGFYYKlBuUAH8WPUwH4hsu.PNrrOOixLrJ1xNVJROfiBtBwf/Rwym', 4, 'candidat'),
('thales@com', '$2y$10$OnUUjg1vDwGBpzKf3M7IJewTcLc1NPmI0xY/tYwN3qc/Rr/ZoZyIe', 13, 'entreprise'),
('rabi@com', '$2y$10$8AXlteXVkjMV/nGOJ5SVdukV3FzICuhvgs3DzRAn16J81bRyHN6ce', 15, 'candidat'),
('arce@com', '$2y$10$WgcN7HOhgacy18utM2cRPu6gNAnAXf9wqKTAXt6oJ3vDaTnwb.wfK', 16, 'entreprise'),
('arrce@com', '$2y$10$jlL7E6dppS3vCnGe2Vxh..9.Nnqb5F8EOTJ1akfPQKgnzJQfaeP1K', 17, 'entreprise');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
