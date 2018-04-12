-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2018 at 01:50 PM
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
-- Database: `formation_cfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidat`
--

CREATE TABLE `candidat` (
  `id` int(2) NOT NULL,
  `age` int(3) NOT NULL,
  `profact` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prénom` varchar(30) NOT NULL,
  `adresse` text NOT NULL,
  `mdp` varchar(10) NOT NULL,
  `tel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offre`
--

CREATE TABLE `offre` (
  `parution` date NOT NULL,
  `description` text NOT NULL,
  `début` date NOT NULL,
  `entreprise` varchar(50) NOT NULL,
  `lieutravail` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offre`
--

INSERT INTO `offre` (`parution`, `description`, `début`, `entreprise`, `lieutravail`, `id`) VALUES
('2018-04-04', 'proposition offre alternance:\r\ningénieur validation\r\n-architecture Lamp', '2018-04-09', 'Nokia', 'Argenteuil', 1),
('2018-04-24', 'urgent alternant\r\nThales recrute conseiller en machine a café\r\nspécialisé en passage de serpière', '2018-05-24', 'Thales', 'Aubervilliers', 2),
('2018-04-30', 'stagiaire repro le seigneur des anneaux + hobbit', '2018-04-30', 'Engie', 'Paris 75016', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `mail`, `password`) VALUES
('Sacha', 's.petrit@live.fr', '$2y$10$K2LCg3wGr2nJHK30bHviSuYKjwj1iSAOEHdf61hYW5auDC4HEbPZO'),
('sacha', 'sacha.petrit@gmail.com', '$2y$10$f0VmVxVIj.jUO/rE8WrcrOQoJXJGPWP8EWEkdvhlvZZM3U5oA886K'),
('Nina', 'nina.kaveh@isep.fr', '$2y$10$drlbz2/bI0bKSDKgtAuNCOqbqsqjBxCZIcLORVoKOvuXAduaU3Oxm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
