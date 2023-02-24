-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 fév. 2023 à 09:37
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `taille` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `nom`, `prix`, `description`, `image`, `taille`) VALUES
(1, 't-shirt blanc', 10.1, 't-shirt blanc pa cher', '1702202309370863ef3cb43398a727593_9010_V1.webp   ', 'l'),
(2, 'tshirt noir', 20.2, 'un T-shirt noir', '1702202309394563ef3d51acaf422087-11.jpg', 'l'),
(5, 'encore un T-shirt', 36, 'il coute trop cher', '1702202311211563ef551b84cf1ssrco,slim_fit_t_shirt,mens,e0e1dd 064437a66d,front,square_product,600x600.jpg ', 'm'),
(6, 'T-shiiiiirt', 45.5, 'ceci est un t-shirt', '1702202311312563ef577dcc961612uqznVDYL._AC_UL1024_.jpg  ', 's'),
(8, 'shirt-t', 66.6, 'un tshirt rouge', '1702202315570763ef95c3e6b7e0e744966-f8f8-4aae-97a5-2761f14798a6.webp', 'm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
