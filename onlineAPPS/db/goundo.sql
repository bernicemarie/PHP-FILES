-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 05 mai 2021 à 18:03
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `goundo`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Benjamin Tamba Kamano', 'kamanobenjamin@gmail.com', '$2y$10$3CoV6k83TFkqCdwUvXc1g.Q0Jwqwv9H4nZZoIICz4/.94oFlpN.TS', '2021-04-17 09:05:19'),
(2, 'Benjamin Tamba Kamano', 'benjamintamba.kamano@ums-cky.com', '$2y$10$0BDtcHYjewU4OpeLPuarQey8KxGT6wRr8pXKbg2EIMr8TeOjgO6fy', '2021-04-19 13:33:06'),
(3, 'Benjamin Tamba Kamano n&#39;ko', 'benjamin@developer-pour-tous.com', '$2y$10$aEl1ICfMa2wSHB1joynGQe5s4WuGxbH4/aVvW2Q9HdhCUVNf64WZ2', '2021-04-19 13:51:01'),
(4, 'Benjamin Tamba Kamano', 'kamanobenjamin@gmail.com1', '$2y$10$Du6Sep4V9mPkK8w55f/V3OSTBR7VW1aUawL112k4cjwWAmqH3DkSa', '2021-04-20 06:04:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
