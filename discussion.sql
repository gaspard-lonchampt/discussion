-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 16 déc. 2020 à 11:09
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `discussion`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` varchar(140) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `id_utilisateur`, `date`) VALUES
(1, 'Test discussion', 1, '2020-12-15'),
(2, 'Test', 1, '2020-12-15'),
(3, 'Re test', 1, '2020-12-15'),
(4, 'Test 1', 1, '2020-12-15'),
(5, 'test 2', 1, '2020-12-15'),
(6, 'Test 20', 1, '2020-12-15'),
(7, 'test 10', 1, '2020-12-15'),
(8, 'Test 11', 1, '2020-12-15'),
(9, 'test 12', 1, '2020-12-15'),
(10, 'Patate', 1, '2020-12-15'),
(11, 'Patate', 1, '2020-12-15'),
(12, 'Patate 2', 1, '2020-12-15'),
(13, 'Patate 3', 1, '2020-12-15'),
(14, 'Patate 4', 1, '2020-12-15'),
(15, 'Patate 5', 2, '2020-12-15'),
(16, 'Patate 6', 2, '2020-12-15'),
(17, 'les patates sont cuites', 1, '2020-12-16'),
(18, 'Nouveau Message qui va être à droite !', 3, '2020-12-16');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'Gaspardg', '$2y$10$BDIR667.X7vO74GRL1tcf.YLBEgdWQVmPY/17oxjSKaJpfnkvKS0S'),
(2, 'Newpatate', '$2y$10$cJNVEPCVzVvHaPPCtfB34OBIg45zIESbTzausSUzziCl08/O/1Up.'),
(3, 'Test nouvelle Id', '$2y$10$rN.l2vx0bz8miUTmFnw4SezciBaMqiACbG3423H1j/uPhmgTpTDoC');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
