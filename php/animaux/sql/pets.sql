-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 avr. 2021 à 21:41
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pets`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `Email`, `password`) VALUES
(2, 'yassine@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `breed` varchar(30) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `age` int(11) NOT NULL,
  `fur` varchar(15) NOT NULL,
  `Pet_category` varchar(255) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`id`, `breed`, `weight`, `height`, `age`, `fur`, `Pet_category`, `cost`) VALUES
(1, 'labrador', 13.3, 30, 2, 'White', 'Dog', 8000),
(2, 'parsian', 3.6, 20, 2, 'White', 'Cat', 3000),
(3, 'Boxer', 11.5, 20, 4, 'black', 'Dog', 15000),
(4, 'Rog doll', 2.6, 32, 2, 'White', 'Cat', 3500);

-- --------------------------------------------------------

--
-- Structure de la table `birds`
--

CREATE TABLE `birds` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `category` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `noise` varchar(10) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `birds`
--

INSERT INTO `birds` (`id`, `id_client`, `id_produit`, `category`, `type`, `noise`, `cost`) VALUES
(4, 1, 1, ' k', 'k', ' lhuy', 13),
(6, 1, 1, 'iugyu', 'kugyu', 'lhuy', 13),
(14, 1, 1, 'pooo', 'pooo', 'pooo', 12);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `address`, `phone`) VALUES
(1, 'HAMZA', '55800', 61944338),
(2, 'yassine', '25 massira', 602610742),
(3, 'yassine bouzar', '22300', 2147483647),
(4, 'Mourad deri ', '44300', 2147483647),
(5, 'ousama meq', '44300', 2147483647);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `saled`
--

CREATE TABLE `saled` (
  `sd_Id` int(11) NOT NULL,
  `cs_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `Total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `saled`
--

INSERT INTO `saled` (`sd_Id`, `cs_id`, `date`, `Total`) VALUES
(1, 1, '2021-04-03', 888),
(2, 4, '2021-04-09', 888),
(3, 5, '2021-04-13', 1000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `saled`
--
ALTER TABLE `saled`
  ADD PRIMARY KEY (`sd_Id`),
  ADD KEY `cs_id` (`cs_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `saled`
--
ALTER TABLE `saled`
  ADD CONSTRAINT `saled_ibfk_1` FOREIGN KEY (`cs_id`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
