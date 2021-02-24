-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 24 fév. 2021 à 11:41
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
-- Base de données : `cms`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(25) NOT NULL,
  `cat_content` text NOT NULL,
  `username` varchar(250) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=516 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_content`, `username`) VALUES
(513, 'Computer+', 'linux-commands-handbook.pdf', ''),
(515, 'Computer', 'wp-certificate-02.pdf', 'Benjamin Kamano');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `comment_post_id` int NOT NULL,
  `comment_author` varchar(250) NOT NULL,
  `comment_email` varchar(250) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(250) NOT NULL DEFAULT 'Approuve',
  `comment_date` date NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `comment_post_id` (`comment_post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `post_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`) VALUES
(76, 146, 144),
(75, 146, 144),
(74, 146, 144),
(73, 122, 124);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT 'Copie',
  `user_role` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL DEFAULT 'Aucun titre',
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_comment_count` int NOT NULL DEFAULT '0',
  `post_status` varchar(255) NOT NULL DEFAULT 'Actif',
  `posts_views_count` int NOT NULL DEFAULT '0',
  `likes` int DEFAULT '0',
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=245 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`post_id`, `username`, `user_role`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_comment_count`, `post_status`, `posts_views_count`, `likes`) VALUES
(241, 'Benjamin Tamba Kamano', 'Admin', 'HAFIA TIME', 'Benjamin Tamba Kamano', '2021-01-24', '2019-06-26_20.59.15.jpg', '', 0, 'Actif', 0, 0),
(242, 'Benjamin Tamba Kamano', 'Admin', 'HAFIA TIME', 'Benjamin Tamba Kamano', '2021-01-24', '20190811_174311.jpg', '', 0, 'Actif', 0, 0),
(243, 'Benjamin Tamba Kamano', 'Admin', 'laptop', 'Benjamin Tamba Kamano', '2021-01-25', '20190511_132647.jpg', '', 0, 'Actif', 0, 0),
(244, 'Benjamin Kamano', 'admin', 'HAFIA TIME', 'Benjamin Kamano', '2021-02-24', 'Capture.JPG', '<p>fsfsfqsdq</p>', 0, 'Actif', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pro`
--

DROP TABLE IF EXISTS `pro`;
CREATE TABLE IF NOT EXISTS `pro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nom` (`nom`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pro`
--

INSERT INTO `pro` (`id`, `nom`) VALUES
(2, 'computer'),
(1, 'rice');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text,
  `user_role` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL DEFAULT 'valide',
  `token` text,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=177 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_email`, `user_image`, `user_role`, `user_status`, `token`) VALUES
(168, 'Benjamin Kamano', '$2y$12$Wkdrk2PfIHAjcbnzjmPrhOs84529N.tzo0S/ISXoJa92vKrAFN2Oe', 'kamanobenjamin@gmail.com', '01.JPG', 'admin', 'valide', ''),
(176, 'Benjamin Tamba ', '$2y$12$UKgQAiW/qFpzsJPGngbRJOkqvj8fI7zEHZThJL5orZPDZuyqPndwK', 'test@gmail.com', NULL, 'user', 'valide', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users_online`
--

DROP TABLE IF EXISTS `users_online`;
CREATE TABLE IF NOT EXISTS `users_online` (
  `id` int NOT NULL AUTO_INCREMENT,
  `session` varchar(255) NOT NULL,
  `temps` int NOT NULL,
  `utilisateur` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `temps`, `utilisateur`, `user_role`) VALUES
(98, 'egcvgl0l0pio9gfdtno7i7f36f', 1614164483, 'Benjamin Kamano', 'admin'),
(97, 'v570vi73t33mbs8539oqmfkgnb', 1608045470, 'Benjamin Kamano', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`comment_post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
