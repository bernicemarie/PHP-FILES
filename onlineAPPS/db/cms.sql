-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 16 mai 2021 à 19:44
-- Version du serveur :  10.3.28-MariaDB-cll-lve
-- Version de PHP : 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `c1545647c_cms`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(25) NOT NULL,
  `cat_content` text NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_content`, `username`) VALUES
(2, 'Site Web', 'Ebook.pdf', 'Benjamin Tamba KAMANO'),
(3, 'PHP', 'php.pdf', 'Benjamin Tamba KAMANO'),
(4, 'Les commandes linux', 'linux-commands-handbook.pdf', 'Benjamin Tamba KAMANO'),
(6, 'PHP&MYSQL', 'WEB.pdf', 'Benjamin Tamba KAMANO'),
(7, 'BOOTSTRAP', 'Bootstrap-tutorial.pdf', 'Benjamin Tamba KAMANO'),
(8, 'HTML', 'html-handbook.pdf', 'Benjamin Tamba KAMANO');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_post_id` int(11) NOT NULL,
  `comment_author` varchar(250) NOT NULL,
  `comment_email` varchar(250) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(250) NOT NULL DEFAULT 'Approuve',
  `comment_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 4, 'Ibra ', 'diallo1gn@gmail.com', '<p>Au top</p>', 'Approuve', '2021-01-06'),
(2, 4, 'Benjamin Tamba KAMANO', 'kamanobenjamin@gmail.com', '<p>Ibra cÃ©tait la mode</p>', 'Approuve', '2021-01-06'),
(3, 5, 'Benjamin Tamba KAMANO', 'kamanobenjamin@gmail.com', '<p>AprÃ¨s 8 ans, Dieu merci!</p>', 'Approuve', '2021-01-06'),
(4, 3, '@aboubacar', 'sidiki627615757@gmail.com', '<p>La famille goundo.com je vous remercie d\'avoir gardÃ© cette lien d\'amitiÃ©&nbsp;</p>', 'Approuve', '2021-01-07'),
(5, 9, 'Ibrahima ', 'ibdiallodch@gmail.com', '<p>Jolie jolie&nbsp;</p><p>Pourquoi je n\'arrive pas Ã  poster?</p>', 'Approuve', '2021-01-07'),
(6, 10, 'Kaba Moussa', 'kabaconnecting@gmail.com', '<p><i><strong>Hohhh mon Dieu !!!</strong></i></p><p>Temps de vol rÃ©el I am telling you</p>', 'Approuve', '2021-01-08'),
(7, 8, 'Kaba Moussa', 'kabaconnecting@gmail.com', '<p><i><strong>Hafia ko lecole!!!</strong></i></p>', 'Approuve', '2021-01-08'),
(8, 8, 'test', 'kamanobenjamin@gmail.com', '<p>La vrai team</p>', 'DesapprouvÃ©', '2021-01-08'),
(9, 12, 'Jeanjoel kpoulomou', 'jeankpoulomou11@gmail.com', '<h2><strong>J\'aime beaucoup ce programme merci pour cette initiative&nbsp;</strong></h2>', 'Approuve', '2021-01-08'),
(10, 11, 'Benjamin Tamba KAMANO', 'kabaconnecting@gmail.com', '<p>Un point dans le temps !!!!</p><p>Une moment auquel la galÃ¨re nous attaquait et on se dÃ©fendait Ã  tout prix.</p>', 'Approuve', '2021-01-11');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`) VALUES
(1, 11, 4),
(2, 11, 4),
(3, 2, 8);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT 'Copie',
  `user_role` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL DEFAULT 'Aucun titre',
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_comment_count` int(11) NOT NULL DEFAULT 0,
  `post_status` varchar(255) NOT NULL DEFAULT 'Actif',
  `posts_views_count` int(11) NOT NULL DEFAULT 0,
  `likes` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`post_id`, `username`, `user_role`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_comment_count`, `post_status`, `posts_views_count`, `likes`) VALUES
(28, 'Benjamin Tamba KAMANO', 'admin', 'Le Labo', 'Benjamin Tamba KAMANO', '2021-01-11', 'marcel.jpg', '<p>Les ing en actions</p>', 0, 'Actif', 4, 0),
(32, 'Benjamin Tamba KAMANO', 'admin', 'HAFIA TIME', 'Benjamin Tamba KAMANO', '2021-01-12', '13415546_695185090620365_5361018580383533066_o.jpg', '', 0, 'Actif', 3, 0),
(35, 'Benjamin Tamba KAMANO', 'admin', 'Les hafiakas', 'Benjamin Tamba KAMANO', '2021-01-13', 'hafia2.jpg', '', 0, 'Actif', 4, 0),
(36, 'Benjamin Tamba KAMANO', 'admin', 'Cette position!', 'Benjamin Tamba KAMANO', '2021-01-13', 'Docteur Amar.jpg', '', 0, 'Actif', 7, 0),
(27, 'Benjamin Tamba KAMANO', 'admin', 'Hafiadakhi', 'Benjamin Tamba KAMANO', '2021-01-10', 'Screenshot_20210107-074151_1610005516188.jpg', '', 0, 'Actif', 5, 0),
(7, 'Benjamin Tamba KAMANO', 'admin', 'Ami nous a quittÃ© trÃ¨s tÃ´t', 'Benjamin Tamba KAMANO', '2021-01-07', 'Screenshot_20210107-074205_1610005488935.jpg', '<p>Dors en paix chÃ¨re camarade</p>', 0, 'Actif', 3, 0),
(8, 'Benjamin Tamba KAMANO', 'admin', 'La team', 'Benjamin Tamba KAMANO', '2021-01-07', 'team.jpg', '<p>Les ingÃ©nieurs au grand format.</p>', 2, 'Actif', 21, 1),
(9, 'Benjamin Tamba KAMANO', 'admin', 'Hafia', 'Benjamin Tamba KAMANO', '2021-01-07', 'Screenshot_20210107-074250_1610005437179.jpg', '<p>Docteur Amar en action, lol!</p>', 1, 'Actif', 6, 0),
(10, 'Benjamin Tamba KAMANO', 'admin', 'kabakÃ¨', 'Benjamin Tamba KAMANO', '2021-01-07', 'Screenshot_20210107-074218_1610005463090.jpg', '<p>Les hafiakas</p>', 1, 'Actif', 6, 0),
(11, 'Benjamin Tamba KAMANO', 'admin', 'NOTRE LABO', 'Benjamin Tamba KAMANO', '2021-01-08', 'inbound758945470768326411.jpg', '<p>C\'est ici qu\'on nous a appris Ã  coder!</p>', 1, 'Actif', 11, 0),
(12, 'Benjamin Tamba KAMANO', 'admin', 'Hafia', 'Benjamin Tamba KAMANO', '2021-01-08', 'inbound4930746850398464083.jpg', '<p>Hafia info</p>', 1, 'Actif', 7, 0),
(37, 'Benjamin Tamba KAMANO', 'admin', 'Mon ingÃ©nieur', 'Benjamin Tamba KAMANO', '2021-01-21', 'Marcel.jpg', '', 0, 'Actif', 4, 0),
(38, 'Benjamin Tamba KAMANO', 'admin', 'A ride home', 'Benjamin Tamba KAMANO', '2021-01-25', 'Cours.jpg', '<p>Sur la route, c\'est le riz que je &nbsp;voyais! lol</p>', 0, 'Actif', 4, 0),
(40, 'Benjamin Tamba KAMANO', 'admin', 'La pÃ©riode des mangues', 'Benjamin Tamba KAMANO', '2021-01-28', 'mangues.jpg', '', 0, 'Actif', 3, 0),
(41, 'Benjamin Tamba KAMANO', 'admin', 'Isma et Aicha', 'Benjamin Tamba KAMANO', '2021-02-10', 'inbound6684706201687121741.jpg', '', 0, 'Actif', 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) DEFAULT NULL,
  `user_lastname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text DEFAULT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL DEFAULT 'valide',
  `token` text DEFAULT NULL,
  `message` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `user_status`, `token`, `message`) VALUES
(1, 'Jean Pierre ZOUMANIGUI', '$2y$12$v7NWrp6T5eG/XqbjARwaaeD/GOKzB9KAHqfUwdYr7qV.9JTzTCEaW', NULL, NULL, 'softmail15@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(2, 'Kaba Moussa', '$2y$12$ho81nqJ9mEY3lNEyJsvzA.LcRP0zikiFXMXez1bF7I46RC7JD4qqi', NULL, NULL, 'kabaconnecting@gmail.com', 'Snapchat-1996356360.jpg', 'user', 'valide', NULL, 'Message envoyÃ©'),
(15, 'bernard marie camara', '$2y$12$tC.X1Jf5uIiNBNWoCbzZiugWFbWYNfBavH4fUdGiVvtWoD7Dusreu', NULL, NULL, 'camarabernard@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(4, 'Ibra', '$2y$12$tH.mteYXsGMYy64.Cx/VauEosVGUeWDwDpRDNkCqYkssJ6RZkIrM2', NULL, NULL, 'diallo1gn@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(14, 'SARAMOUDOU', '$2y$12$t9RMhJSMvzPH7EoJ8QOuvek.R.YE07ezqnWTO5ExZjpXU2x7WuEuG', NULL, NULL, 'ksaramoudou@gmail.com', NULL, 'user', 'valide', '', 'Message envoyÃ©'),
(6, 'KEITA', '$2y$12$wHdp2FpvqKj/ZlHZaljJuOGR3wfjs68RfvqASLyOel9PEvmct/Hqm', NULL, NULL, 'benkeita.keita1994@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(7, 'Aissata Camara', '$2y$12$5RXrazY/wsRh.QRsWJcM1ex6L.0Ot5Raxkoy3nShtXtg8/ReFK53G', NULL, NULL, 'aissatacamara83@yahoo.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(8, 'Thierno slim diallo', '$2y$12$4W8cPENOs69C51EewIHDPe2pTBu6gApKSs0dQC/IZSqqgnizF63pu', NULL, NULL, 'slim@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(9, 'Benjamin Tamba KAMANO', '$2y$12$686i4fqsgB2kyFWAb3D08.SVKS6ONCi86yvKt39Hgp2u0jBkZnozm', '', '', 'kamanobenjamin@gmail.com', 'IMG_20191114_155006_5.jpg', 'admin', 'valide', 'a74e2e8fe7e233da482a80a8fbd7dc4c568ff86f', 'Message envoyÃ©'),
(10, 'Alhassane Marie CAMARA', '$2y$12$oUxFA1gyX1WCHnByfhbJT.RY9Fd0yvBvhd2BprjSxPPijWAOjRyWO', NULL, NULL, 'mariealhass89@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(11, '@aboubacar', '$2y$12$u0ku1I9tZPfn8FdgoQ8hCenpGA/PbZc/cFVlctS.sNXSgfLK2H902', NULL, NULL, 'sidiki627615757@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(12, 'Alpha Oumar 1 DIALLO', '$2y$12$eQgd5DbV583gTKsN3gDUi.6/vT1q11dtq9nFHqioiovxQRrI98OLG', NULL, NULL, 'aoumar41@gmail.com', '', 'user', 'valide', NULL, 'Message envoyÃ©'),
(13, 'Ibrahima Diallo', '$2y$12$UivuGX8m44lbgD3Jaw5J7OQDzaZS7fzfamJtklatjiA9a2scjufkm', NULL, NULL, 'ibdiallodch@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(16, 'test', '$2y$12$1kw.Qi2XQLH6hkIfAUNlWuPdgNeuZ7kUxrjNX51hQ6GUQ.vgf0xLK', '', '', 'test@gmail.com', '20190811_174311.jpg', 'user', 'valide', '', 'Message envoyÃ©'),
(17, 'test1', '$2y$12$5LxHcSHO3FAscJjdPFwqo.CpRb3nY0ZQ3xzFdJZZFx31XiJ/EA1bC', NULL, NULL, 'mamadoubarry971@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(27, 'KonatÃ©', '$2y$12$1SJFw1tO5IlauV4PUEF6g.vu5KqomseZilT99T55HppEkXmKRda56', NULL, NULL, 'konateleyou86@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(20, 'Abdoulaye Fofana', '$2y$12$qGk.lhs8AcwaNOtzq7zA5.5B.E.BtMPCt9RUrFb/9OH07zYkbbR5a', NULL, NULL, 'afofana102@gmail.com', NULL, 'user', 'valide', '', 'Message envoyÃ©'),
(28, 'Kadiatou Conde', '$2y$12$PM9ddESYJY9w4q3IPRciW.cg5ZS9uNOdZGCzoJmzdbNYLE9MKlAVy', NULL, NULL, 'azerak88@yahoo.fr', 'inbound3884377552578134822.jpg', 'user', 'valide', NULL, 'Message envoyÃ©'),
(21, 'Naby Yacine Sylla', '$2y$12$BykE0gQIxSpwpbmpbVpUV.GSTWISUT/0M4h3ZcV1IsSRveCIZJ6f.', NULL, NULL, 'nabyyacine@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(22, 'Beavogui', '$2y$12$7NhiOhybPzKKgc3ZC0xJouDnwSgkuyZ5WgrAix68u3wtRaqqMSyWK', NULL, NULL, 'bavoguip84@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(23, 'Fofana Abdoulaye', '$2y$12$J9c4JuMnXMSW0zC.VdWcwOCNEsFuU.OCmc62.ay.koCzBotS51pOa', NULL, NULL, 'afofana102@yahoo.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(24, 'Mamadou Sadjo Diallo', '$2y$12$Ztyd3.RhARUtqWLYjgLoYOQs8lewYayj8BpbokipHBSNPN.4BaDvW', NULL, NULL, 'diallosadjo@gmail.com', NULL, 'user', 'valide', NULL, 'Message envoyÃ©'),
(25, 'Jeanjoel kpoulomo', '$2y$12$c9k/X8nOUT03GKvdh5orSOfYxaC0g1/AlnrXFfHoOoQkSqLpZH4sy', '', '', 'kpoulomoujoel92@gmail.com', '', 'user', 'valide', NULL, 'Message envoyÃ©'),
(29, 'Ismatou', '$2y$12$odX//jz9JFUBISEKa1BIJe3ghm5SYtJyMZdlrKtvZaETx6dVi50qa', NULL, NULL, 'ismatbarry@yahoo.fr', NULL, 'user', 'valide', NULL, 'Message envoyÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `temps` int(11) NOT NULL,
  `utilisateur` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `temps`, `utilisateur`, `user_firstname`, `user_lastname`, `user_role`) VALUES
(153, '577190ee4d419909e544c831266176cf', 1619206010, 'Benjamin Tamba KAMANO', '', '', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
