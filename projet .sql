-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 oct. 2022 à 15:05
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `login`, `password`) VALUES
(1, 'fatymbaye97@gmail.com', 'faty');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `idClasse` int(11) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `IDEnseignant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`idClasse`, `niveau`, `IDEnseignant`) VALUES
(1, 'licence 1', 22),
(2, 'licence 2', 22),
(3, 'licence 3', 52);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `idCours` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `idEnseignant` int(11) DEFAULT NULL,
  `classe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idCours`, `libelle`, `idEnseignant`, `classe`) VALUES
(22, 'BI', 31, 0),
(28, 'android', 50, 2);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `IDEnseignant` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `Mdpasse` varchar(255) DEFAULT NULL,
  `statu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`IDEnseignant`, `nom`, `prenom`, `mail`, `Mdpasse`, `statu`) VALUES
(22, 'bame', 'niouma', 'ndioumabame@gmail.com', 'bame', 0),
(23, 'bame', 'niouma', 'ndioumabame@gmail.com', 'bame', 0),
(27, 'gueye', 'modou', 'gueye@gmail.com', 'gueye', 1),
(28, '', '', '', '', 0),
(31, '', '', '', '', 0),
(41, '', '', '', '', 0),
(42, '', '', '', '', 0),
(43, '', '', '', '', 0),
(44, '', '', '', '', 0),
(47, '', '', '', '', 0),
(49, '', '', '', '', 0),
(50, 'diouf', 'moustapha', 'diouf@gmail.com', 'diouf', 0),
(51, 'diouf', 'moustapha', 'diouf@gmail.com', 'gueye', 0),
(52, 'ndong', 'joe', 'joe@gmail.com', 'joe', 1);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `datenaissance` date DEFAULT NULL,
  `numerocarte` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `image` text NOT NULL,
  `idClasse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `prenom`, `nom`, `email`, `datenaissance`, `numerocarte`, `password`, `date`, `image`, `idClasse`) VALUES
(49, 'zahra', 'ndiaye', 'zahra@gmail.com', '2000-11-12', 'dggg23', 'tyfa', '2022-10-24 14:15:11', '', 1),
(50, 'zahra', 'ndiaye', 'zahra1@gmail.com', '2000-11-12', 'dggg23', 'tyfa', '2022-10-24 14:18:06', '', 2),
(51, 'zahra', 'ndiaye', 'zahra11@gmail.com', '2000-11-12', 'dggg23', 'tyfa', '2022-10-24 14:18:53', '', 2),
(52, 'zahra', 'ndiaye', 'zahra13@gmail.com', '2000-11-12', 'dggg23', 'tyfa', '2022-10-24 14:20:19', '', 2);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `idModule` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`idModule`, `libelle`) VALUES
(1, 'UE2345'),
(2, 'UE345 JAVA'),
(3, 'UE345 Programmation Oriente Objet'),
(4, 'UE234 systèmes Informatiques'),
(5, 'UE234 systèmes Informatiques'),
(6, 'UE234 systèmes informations'),
(7, 'UE234 systèmes informations'),
(8, 'UE234 systèmes informations'),
(9, 'UE234 systèmes informations'),
(10, 'UE234 systèmes informations'),
(11, 'UE234 systèmes informations'),
(12, 'UE234 systèmes informations'),
(13, 'UE234 systèmes informations'),
(14, 'UE4657 Programmation'),
(15, 'UE4958 java'),
(16, 'UE234 systeme informations'),
(17, 'UE234 systèmes exploitation'),
(18, 'UE38498 Papa Saliou Ly'),
(22, 'UE234 systèmes informations'),
(23, 'UE234 systèmes informations'),
(24, 'programmation');

-- --------------------------------------------------------

--
-- Structure de la table `modulecours`
--

CREATE TABLE `modulecours` (
  `id` int(11) NOT NULL,
  `cours` varchar(255) DEFAULT NULL,
  `enseignant` varchar(255) NOT NULL,
  `Idmod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modulecours`
--

INSERT INTO `modulecours` (`id`, `cours`, `enseignant`, `Idmod`) VALUES
(8, 'html', 'moussa', 19),
(9, 'laravel', 'moussa', 19),
(10, 'java script', 'moussa', 19),
(11, 'html', 'moussa', 19),
(12, 'java', 'moussa', 19),
(13, 'html', 'moussa', 20),
(14, 'laravel', 'moussa', 20),
(15, 'java script', 'moussa', 20),
(16, 'html', 'moussa', 20),
(17, 'java', 'moussa', 20),
(18, 'html', 'moussa', 21),
(19, 'laravel', 'moussa', 21),
(20, 'html', 'Papa Ly', 22),
(21, 'java script', 'nafissatou sarr', 22),
(22, 'appartement ', 'nafissatou sarr', 22),
(23, 'html', 'Papa Ly', 23),
(24, 'java script', 'nafissatou sarr', 23),
(25, 'appartement ', 'nafissatou sarr', 23),
(26, 'html', 'Papa Ly', 24),
(27, 'programmation', 'nafissatou sarr', 24),
(28, 'delices', 'nafissatou sarr', 24);

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

CREATE TABLE `ressources` (
  `Idressource` int(11) NOT NULL,
  `idClasse` int(11) NOT NULL,
  `idModule` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `idCours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ressources`
--

INSERT INTO `ressources` (`Idressource`, `idClasse`, `idModule`, `type`, `fichier`, `date`, `idCours`) VALUES
(19, 1, 24, 'td', NULL, '2022-10-23 23:21:07', 0),
(23, 1, 14, 'tp', 'mesRessources/241022_05document.pdf', '2022-10-24 15:05:19', 0),
(24, 1, 14, 'cours', 'mesRessources/241022_10JEE_TOMCAT_cours_NEW_2020 - Copie.pdf', '2022-10-24 20:10:17', 0),
(25, 1, 22, 'cours', '../GestionRessourcesPedagogique/mesRessources/251022_12Diagramme de classes.pdf', '2022-10-24 22:01:30', 0),
(26, 1, 3, 'cours', 'mesRessources/251022_12poo.pdf', '2022-10-24 22:08:11', 0),
(27, 3, 16, 'tp', 'traitement/mesRessources/261022_051408.2094.pdf', '0000-00-00 00:00:00', 31507),
(28, 2, 2, 'cours', 'traitement/mesRessources/261022_02Devoir1.pdf', '0000-00-00 00:00:00', 122519);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`idClasse`),
  ADD KEY `IDEnseignant` (`IDEnseignant`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`idCours`),
  ADD KEY `cours_ibfk_1` (`idEnseignant`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`IDEnseignant`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idClasse` (`idClasse`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`idModule`);

--
-- Index pour la table `modulecours`
--
ALTER TABLE `modulecours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Idmod` (`Idmod`);

--
-- Index pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`Idressource`),
  ADD KEY `idModule` (`idModule`),
  ADD KEY `idClasse` (`idClasse`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `idClasse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `idCours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `IDEnseignant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `idModule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `modulecours`
--
ALTER TABLE `modulecours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `ressources`
--
ALTER TABLE `ressources`
  MODIFY `Idressource` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `classe_ibfk_1` FOREIGN KEY (`IDEnseignant`) REFERENCES `enseignant` (`IDEnseignant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`idEnseignant`) REFERENCES `enseignant` (`IDEnseignant`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`idClasse`) REFERENCES `classe` (`idClasse`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD CONSTRAINT `ressources_ibfk_2` FOREIGN KEY (`idModule`) REFERENCES `module` (`idModule`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ressources_ibfk_3` FOREIGN KEY (`idClasse`) REFERENCES `classe` (`idClasse`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
