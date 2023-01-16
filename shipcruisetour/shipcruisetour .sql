-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 16 jan. 2023 à 00:32
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
  `date_depart` datetime NOT NULL,
  `id_ship` int(5) NOT NULL,
  `nom` varchar(300) NOT NULL,
  `descriptif` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cruises`
--

INSERT INTO `cruises` (`id`, `prix`, `image`, `nombre_nuits`, `port_depart`, `date_depart`, `id_ship`, `nom`, `descriptif`) VALUES
(23, 14, '', 14, 'SpainPort', '2023-01-11 00:00:00', 24, 'Atlantic Cruise', 'Descriptif '),
(24, 30303, '', 30303, 'TmaraPort', '2023-01-14 00:00:00', 31, 'Fantastic Cruise', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et '),
(25, 15, '', 78, 'Safi', '2023-01-09 00:00:00', 31, 'Over the sea', ''),
(50, 99999, 'uploads/ReadyPlayerMe-Avatar_1.png', 25, 'safi', '2020-12-12 00:00:00', 30, '', ''),
(51, 88, '', 88, 'SpainPort', '2020-12-12 00:00:00', 24, '', ''),
(52, 36, 'uploads/pixil-frame-0(80).png', 36, 'SpainPort', '2020-12-12 00:00:00', 24, '', ''),
(53, 14, 'uploads/ReadyPlayerMe-Avatar_1.png', 14, 'SpainPort', '2020-12-12 00:00:00', 31, '', ''),
(54, 83, 'uploads/ReadyPlayerMe-Avatar_1.png', 86, 'SpainPort', '2000-05-04 00:00:00', 24, '', ''),
(55, 45, 'uploads/ReadyPlayerMe-Avatar_1.png', 95, 'safi', '2023-01-26 00:00:00', 27, 'Glasgow free style', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et '),
(56, 8, 'uploads/ReadyPlayerMe-Avatar_1.png', 43, 'SpainPort', '2002-05-08 00:00:00', 24, '', ''),
(60, 59, 'uploads/ReadyPlayerMe-Avatar_1.png', 20, 'SpainPort', '1978-03-04 00:00:00', 31, '', ''),
(72, 47, 'uploads/serenadeoftheseas_alaska_0.jpg', 4, 'SpainPort', '2008-10-23 00:00:00', 26, 'Illo ratione nisi el', 'Nam sit nostrum dolo'),
(73, 27, 'uploads/serenadeoftheseas_alaska_0.jpg', 30, 'safi', '2002-11-22 00:00:00', 27, 'Vel fugiat suscipit', 'Et magna placeat pa');

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
(13, 10, 73);

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
(56, '2023-01-12', 888888, 6, 55, 14),
(59, '2023-01-12', 888888, 6, 55, 14),
(76, '2023-01-12', 68, 6, 23, 16),
(77, '2023-01-12', 68, 6, 23, 16),
(78, '2023-01-12', 68, 6, 23, 16),
(79, '2023-01-12', 68, 6, 23, 16),
(80, '2023-01-12', 68, 6, 23, 16),
(81, '2023-01-12', 68, 6, 23, 16),
(82, '2023-01-12', 68, 6, 23, 16),
(83, '2023-01-12', 68, 6, 23, 16),
(84, '2023-01-12', 68, 6, 23, 16),
(85, '2023-01-12', 68, 6, 23, 16),
(86, '2023-01-12', 68, 6, 23, 16),
(87, '2023-01-12', 68, 6, 23, 16),
(88, '2023-01-12', 68, 6, 23, 16),
(89, '2023-01-12', 68, 6, 23, 16),
(90, '2023-01-12', 68, 6, 23, 16),
(91, '2023-01-12', 68, 6, 23, 16),
(92, '2023-01-12', 68, 6, 23, 16),
(93, '2023-01-12', 68, 6, 23, 16),
(94, '2023-01-12', 68, 6, 23, 16),
(95, '2023-01-12', 68, 6, 23, 16),
(96, '2023-01-12', 68, 6, 23, 16),
(97, '2023-01-12', 68, 6, 23, 16),
(98, '2023-01-12', 68, 6, 23, 16),
(99, '2023-01-12', 68, 6, 23, 16),
(100, '2023-01-12', 68, 6, 23, 16),
(101, '2023-01-12', 68, 6, 23, 16),
(102, '2023-01-12', 68, 6, 23, 16),
(103, '2023-01-12', 68, 6, 23, 16),
(104, '2023-01-12', 68, 6, 23, 16),
(105, '2023-01-12', 68, 6, 23, 16),
(106, '2023-01-12', 68, 6, 23, 16),
(107, '2023-01-12', 68, 6, 23, 16),
(108, '2023-01-12', 68, 6, 23, 16),
(109, '2023-01-12', 68, 6, 23, 16),
(110, '2023-01-12', 68, 6, 23, 16),
(111, '2023-01-12', 68, 6, 23, 16),
(112, '2023-01-12', 68, 6, 23, 16),
(113, '2023-01-12', 68, 6, 23, 16),
(114, '2023-01-12', 68, 6, 23, 16),
(115, '2023-01-12', 68, 6, 23, 16),
(116, '2023-01-12', 68, 6, 23, 16),
(117, '2023-01-12', 68, 6, 23, 16),
(118, '2023-01-12', 68, 6, 23, 16),
(119, '2023-01-12', 68, 6, 23, 16),
(120, '2023-01-12', 68, 6, 23, 16),
(121, '2023-01-12', 68, 6, 23, 16),
(122, '2023-01-12', 68, 6, 23, 16),
(123, '2023-01-12', 68, 6, 23, 16),
(124, '2023-01-12', 68, 6, 23, 16),
(125, '2023-01-12', 68, 6, 23, 16),
(126, '2023-01-12', 68, 6, 23, 16),
(127, '2023-01-12', 68, 6, 23, 16);

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
(15, 231, 30, 5),
(16, 45, 24, 1),
(17, 654, 28, 7);

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
(5, 922, 4, 'famille'),
(7, 95, 24, 'Duo');

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
(24, 'Titanic', 200, 300, 'uploads/istockphoto-104241367-612x612.jpg'),
(25, 'SeaKing', 300, 500, 'uploads/107146307-StoryLinesHeli.jpg'),
(26, 'OceanVue', 450, 600, 'uploads/1.jpg'),
(27, 'SeaVectra', 500, 500, 'uploads/serenadeoftheseas_alaska_0.jpg'),
(28, 'WonderTheSeas', 600, 500, 'uploads/220212144422-01-wonder-of-the-seas-royal-caribbean.jpg'),
(29, 'image test', 11, 11, 'uploads/1.jpg'),
(30, 'asiyyatest', 1, 1, 'uploads/rc-wonder-of-the-seas-sunset-aerial-LRGSTSHIP0422-8230b27121c3438b9984b9dc63877937.jpg'),
(31, 'CanSea', 23, 32, 'uploads/220212144422-01-wonder-of-the-seas-royal-caribbean.jpg'),
(33, 'Facilis sunt fugit', 7, 26, 'uploads/107146307-StoryLinesHeli.jpg');

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
(12, 'asiyyatest', 'asiyyatest@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `ports`
--
ALTER TABLE `ports`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `port_cruise`
--
ALTER TABLE `port_cruise`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cruises`
--
ALTER TABLE `cruises`
  ADD CONSTRAINT `cruises_ibfk_1` FOREIGN KEY (`id_ship`) REFERENCES `ships` (`id`);

--
-- Contraintes pour la table `port_cruise`
--
ALTER TABLE `port_cruise`
  ADD CONSTRAINT `port_cruise_ibfk_1` FOREIGN KEY (`id_port`) REFERENCES `ports` (`id`),
  ADD CONSTRAINT `port_cruise_ibfk_2` FOREIGN KEY (`id_cruise`) REFERENCES `cruises` (`id`);

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
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`id_ship`) REFERENCES `ships` (`id`),
  ADD CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `roomtypes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
