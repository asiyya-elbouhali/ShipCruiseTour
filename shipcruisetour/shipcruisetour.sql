-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 22 fév. 2023 à 14:41
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
-- Base de données : `shipcruisetour`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(3) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cruises`
--

CREATE TABLE `cruises` (
  `id` int(5) NOT NULL,
  `prix` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nombre_nuits` int(2) NOT NULL,
  `port_depart` varchar(30) NOT NULL,
  `date_depart` date NOT NULL,
  `id_ship` int(5) NOT NULL,
  `nom` varchar(300) NOT NULL,
  `descriptif` varchar(10000) NOT NULL,
  `itineraire` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cruises`
--

INSERT INTO `cruises` (`id`, `prix`, `image`, `nombre_nuits`, `port_depart`, `date_depart`, `id_ship`, `nom`, `descriptif`, `itineraire`) VALUES
(98, 71, 'uploads/107146307-StoryLinesHeli.jpg', 36, 'safi', '2023-02-28', 33, 'Incididunt do aut co', 'Quas qui architecto', 'SpainPort- SpainPort- safi- SpainPort- safi- TmaraPort-'),
(99, 90, 'uploads/RCI_WN_032022_CC_JGraham_Day_Aer.jpg', 32, 'TmaraPort', '2023-02-28', 26, 'Odio autem ut eos ni', 'Velit minim quo in', 'SpainPort- SpainPort- TmaraPort- SpainPort- TmaraPort- Id modi et distinct-'),
(100, 73, 'uploads/maxresdefault.jpg', 8, 'safi', '2023-02-28', 28, 'Qui neque dolore eni', 'Veniam vero possimu', 'safi- safi- SpainPort- safi- SpainPort- TmaraPort-'),
(101, 9, 'uploads/castaway-cay-1x1.jpg', 82, 'SpainPort', '2023-03-28', 27, 'Fugiat commodo dicta', 'Id reprehenderit eaq', 'TmaraPort- TmaraPort- safi- TmaraPort- safi- SpainPort-'),
(102, 19000, 'uploads/istockphoto-104241367-612x612.jpg', 4, 'SpainPort', '2023-02-25', 26, 'Around The world', 'Free your mind and enjoy your life', 'SpainPort- SpainPort- safi- SpainPort- safi- SpainPort-');

-- --------------------------------------------------------

--
-- Structure de la table `ports`
--

CREATE TABLE `ports` (
  `id` int(2) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `pays` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ports`
--

INSERT INTO `ports` (`id`, `nom`, `pays`) VALUES
(6, 'SpainPort', 'moroccooo'),
(8, 'TmaraPort', 'Morocco'),
(10, 'safi', 'moroccooo'),
(12, 'Id modi et distinct', 'Tempora eum sit offi');

-- --------------------------------------------------------

--
-- Structure de la table `port_cruise`
--

CREATE TABLE `port_cruise` (
  `id` int(2) NOT NULL,
  `id_port` int(2) NOT NULL,
  `id_cruise` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `port_cruise`
--

INSERT INTO `port_cruise` (`id`, `id_port`, `id_cruise`) VALUES
(1, 6, 23),
(2, 8, 24),
(3, 6, 50),
(4, 6, 51),
(5, 6, 52),
(6, 6, 53),
(7, 6, 54),
(8, 8, 55),
(9, 6, 56),
(10, 6, 52),
(11, 6, 60),
(12, 6, 72),
(13, 10, 73),
(14, 8, 74),
(15, 6, 75),
(16, 10, 76),
(17, 12, 77),
(18, 12, 78),
(19, 12, 79),
(20, 8, 80),
(21, 8, 81),
(22, 6, 82),
(23, 12, 83),
(24, 8, 84),
(25, 8, 85),
(26, 10, 86),
(27, 10, 87),
(28, 12, 88),
(29, 6, 89),
(30, 6, 90),
(31, 6, 91),
(32, 8, 92),
(33, 6, 93),
(34, 8, 94),
(35, 8, 95),
(36, 12, 96),
(37, 8, 97),
(38, 10, 98),
(39, 8, 99),
(40, 10, 100),
(41, 6, 101),
(42, 6, 102);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(2, 6, 'port', 'port', '0000-00-00 00:00:00'),
(3, 6, 'port', 'port', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `prix` int(10) NOT NULL,
  `id_client` int(4) NOT NULL,
  `id_cruise` int(5) NOT NULL,
  `id_chambre` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `date`, `prix`, `id_client`, `id_cruise`, `id_chambre`) VALUES
(146, '2023-02-21', 931, 7, 101, 14),
(147, '2023-02-21', 159, 7, 98, 19),
(148, '2023-02-22', 159, 7, 98, 19),
(149, '2023-02-22', 159, 7, 98, 19),
(152, '2023-02-22', 159, 6, 98, 19),
(153, '2023-02-22', 159, 6, 98, 19),
(154, '2023-02-22', 159, 6, 98, 19),
(155, '2023-02-22', 159, 6, 98, 19);

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(3) NOT NULL,
  `room_number` int(3) NOT NULL,
  `id_ship` int(2) NOT NULL,
  `id_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rooms`
--

INSERT INTO `rooms` (`id`, `room_number`, `id_ship`, `id_type`) VALUES
(12, 66, 28, 1),
(14, 363, 27, 5),
(16, 45, 24, 1),
(17, 654, 28, 7),
(18, 12, 28, 4),
(19, 363, 33, 4);

-- --------------------------------------------------------

--
-- Structure de la table `roomtypes`
--

CREATE TABLE `roomtypes` (
  `id` int(2) NOT NULL,
  `prix` int(10) NOT NULL,
  `capacite` int(2) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roomtypes`
--

INSERT INTO `roomtypes` (`id`, `prix`, `capacite`, `type`) VALUES
(1, 54, 1, 'Solo'),
(4, 88, 2, 'Duo'),
(5, 922, 4, 'famille');

-- --------------------------------------------------------

--
-- Structure de la table `ships`
--

CREATE TABLE `ships` (
  `id` int(2) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `nombre_chambres` int(2) NOT NULL,
  `nombre_places` int(2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ships`
--

INSERT INTO `ships` (`id`, `nom`, `nombre_chambres`, `nombre_places`, `image`) VALUES
(24, 'Titanic', 200, 6, 'uploads/istockphoto-104241367-612x612.jpg'),
(25, 'SeaKing', 300, 4, 'uploads/107146307-StoryLinesHeli.jpg'),
(26, 'OceanVue', 450, 600, 'uploads/1.jpg'),
(27, 'SeaVectra', 4, 4, 'uploads/serenadeoftheseas_alaska_0.jpg'),
(28, 'WonderTheSeas', 600, 4, 'uploads/220212144422-01-wonder-of-the-seas-royal-caribbean.jpg'),
(29, 'image test', 11, 11, 'uploads/1.jpg'),
(30, 'asiyyatest', 1, 1, 'uploads/rc-wonder-of-the-seas-sunset-aerial-LRGSTSHIP0422-8230b27121c3438b9984b9dc63877937.jpg'),
(31, 'CanSea', 23, 32, 'uploads/220212144422-01-wonder-of-the-seas-royal-caribbean.jpg'),
(33, 'Facilis sunt fugit', 7, 20, 'uploads/107146307-StoryLinesHeli.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `prenom` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `password`, `role`, `prenom`) VALUES
(6, 'asiyya', 'asiyya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, ''),
(7, 'test', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, ''),
(8, 'test2', 'test2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, ''),
(9, 'asiyya', 'a@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, ''),
(10, 'abc', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, ''),
(11, 'test123456', 'test123456@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL),
(12, 'asiyyatest', 'asiyyatest@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL),
(13, 'assiya', 'assiyatest@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL),
(14, 'asiyya', 'test1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cruises`
--
ALTER TABLE `cruises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ship` (`id_ship`);

--
-- Index pour la table `ports`
--
ALTER TABLE `ports`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `port_cruise`
--
ALTER TABLE `port_cruise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_port` (`id_port`),
  ADD KEY `id_cruise` (`id_cruise`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_chambre` (`id_chambre`),
  ADD KEY `id_cruise` (`id_cruise`),
  ADD KEY `id_client_2` (`id_client`);

--
-- Index pour la table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ship` (`id_ship`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `roomtypes`
--
ALTER TABLE `roomtypes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ships`
--
ALTER TABLE `ships`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cruises`
--
ALTER TABLE `cruises`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT pour la table `ports`
--
ALTER TABLE `ports`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `port_cruise`
--
ALTER TABLE `port_cruise`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `roomtypes`
--
ALTER TABLE `roomtypes`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `ships`
--
ALTER TABLE `ships`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cruises`
--
ALTER TABLE `cruises`
  ADD CONSTRAINT `cruises_ibfk_1` FOREIGN KEY (`id_ship`) REFERENCES `ships` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `port_cruise`
--
ALTER TABLE `port_cruise`
  ADD CONSTRAINT `port_cruise_ibfk_1` FOREIGN KEY (`id_port`) REFERENCES `ports` (`id`);

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_11` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`id_chambre`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`id_cruise`) REFERENCES `cruises` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`id_ship`) REFERENCES `ships` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
