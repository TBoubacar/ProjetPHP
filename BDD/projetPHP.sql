-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 25 mars 2021 à 21:05
-- Version du serveur :  10.3.27-MariaDB-0+deb10u1
-- Version de PHP : 7.3.19-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetPHP`
--

-- --------------------------------------------------------

--
-- Structure de la table `Administrateur`
--

CREATE TABLE `Administrateur` (
  `idAdmin` int(11) NOT NULL,
  `poste` enum('SECRETAIRE','ENTRAINEUR') COLLATE utf8_bin NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8_bin NOT NULL,
  `categorie` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT 'Senior',
  `clubId` int(11) NOT NULL,
  `passWord` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT 'MotDePasseAdmin',
  `login` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `Administrateur`
--

INSERT INTO `Administrateur` (`idAdmin`, `poste`, `nom`, `prenom`, `categorie`, `clubId`, `passWord`, `login`) VALUES
(1, 'SECRETAIRE', 'TOURE', 'Boubacar', 'Senior', 1, 'mdp', 'A0001'),
(2, 'ENTRAINEUR', 'TOURE', 'Siriman', 'Senior', 1, 'mdp', 'A0002'),
(3, 'SECRETAIRE', 'Barro', 'Juliette', 'Senior', 2, 'MotDePasseAdmin', 'A0003'),
(4, 'ENTRAINEUR', 'TRAORE', 'Hamidou', 'Senior', 2, 'MotDePasseAdmin', 'A0004'),
(5, 'SECRETAIRE', 'TRAORE', 'Hamalah', 'Senior', 3, 'MotDePasseAdmin', 'A0005'),
(6, 'ENTRAINEUR', 'TOURE', 'Hameye', 'Senior', 3, 'MotDePasseAdmin', 'A0006'),
(7, 'SECRETAIRE', 'BAH', 'Diarrah', 'Senior', 4, 'MotDePasseAdmin', 'A0007'),
(8, 'ENTRAINEUR', 'HENRY', 'Thierry', 'Senior', 4, 'MotDePasseAdmin', 'A0008'),
(9, 'SECRETAIRE', 'TOURE', 'Badra', 'Senior', 5, 'MotDePasseAdmin', 'A0009'),
(10, 'ENTRAINEUR', 'TOURE', 'Moussa', 'Senior', 5, 'MotDePasseAdmin', 'A0010'),
(11, 'SECRETAIRE', 'THOMAS', 'Tuchel', 'Senior', 6, 'MotDePasseAdmin', 'A0011'),
(12, 'ENTRAINEUR', 'ZIDANE', 'ZINEDINE', 'Senior', 6, 'MotDePasseAdmin', 'A0012');

-- --------------------------------------------------------

--
-- Structure de la table `Club`
--

CREATE TABLE `Club` (
  `idClub` int(11) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `Club`
--

INSERT INTO `Club` (`idClub`, `nom`, `adresse`) VALUES
(1, 'Olympique Marseille', 'Marseille'),
(2, 'PSG', 'Paris'),
(3, 'Olympique Lyonnais', 'Lyon'),
(4, 'Angers SCO', 'Angers'),
(5, 'Nice FC', 'Nice'),
(6, 'Monaco FC', 'Monaco');

-- --------------------------------------------------------

--
-- Structure de la table `Convocation`
--

CREATE TABLE `Convocation` (
  `IdConvocation` int(11) NOT NULL,
  `adresse` varchar(30) COLLATE utf8_bin NOT NULL,
  `jour` date NOT NULL,
  `idEquipeAdverse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `ConvocationJoueur`
--

CREATE TABLE `ConvocationJoueur` (
  `idConvocation` int(11) NOT NULL,
  `idJoueur` int(11) NOT NULL,
  `etatJoueur` enum('A','B','N','S','P') COLLATE utf8_bin NOT NULL DEFAULT 'P'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `Equipe`
--

CREATE TABLE `Equipe` (
  `idEquipe` int(11) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `clubId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `Equipe`
--

INSERT INTO `Equipe` (`idEquipe`, `nom`, `clubId`) VALUES
(1, 'Equipe A', 1),
(2, 'Equipe B', 1),
(3, 'Equipe A', 2),
(4, 'Equipe B', 2),
(5, 'Equipe A', 3),
(6, 'Equipe A', 4),
(7, 'Equipe B', 4),
(8, 'Equipe A', 5),
(9, 'Equipe B', 5),
(10, 'Equipe A', 6),
(11, 'Equipe B', 6);

-- --------------------------------------------------------

--
-- Structure de la table `Joueur`
--

CREATE TABLE `Joueur` (
  `idJoueur` int(11) NOT NULL,
  `licence` enum('OUI','NON') COLLATE utf8_bin NOT NULL DEFAULT 'OUI',
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8_bin NOT NULL,
  `clubId` int(11) NOT NULL,
  `passWord` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT 'MotDePasseJoueur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `Joueur`
--

INSERT INTO `Joueur` (`idJoueur`, `licence`, `nom`, `prenom`, `clubId`, `passWord`) VALUES
(1, 'OUI', 'Mandanda', 'S', 1, 'MotDePasseJoueur'),
(2, 'OUI', 'Pelé', 'Y', 1, 'MotDePasseJoueur'),
(3, 'OUI', 'Sakai', 'H', 1, 'MotDePasseJoueur'),
(4, 'OUI', 'Alvaro', 'E', 1, 'MotDePasseJoueur'),
(5, 'OUI', 'Amavi', 'J', 1, 'MotDePasseJoueur'),
(6, 'OUI', 'Nagatomo', 'Y', 1, 'MotDePasseJoueur'),
(7, 'OUI', 'Payet', 'D', 1, 'MotDePasseJoueur'),
(8, 'OUI', 'Kamara', 'B', 1, 'MotDePasseJoueur'),
(9, 'OUI', 'Rongier', 'V', 1, 'MotDePasseJoueur'),
(10, 'OUI', 'Gueye', 'P', 1, 'MotDePasseJoueur'),
(11, 'OUI', 'Thauvin', 'F', 1, 'MotDePasseJoueur'),
(12, 'OUI', 'Germain', 'V', 1, 'MotDePasseJoueur'),
(13, 'OUI', 'Navas', 'Keylor', 2, 'MotDePasseJoueur'),
(14, 'OUI', 'Sergio', 'Rico', 2, 'MotDePasseJoueur'),
(15, 'OUI', 'Marquinhos', 'M', 2, 'MotDePasseJoueur'),
(16, 'OUI', 'Kimpembe', 'P', 2, 'MotDePasseJoueur'),
(17, 'OUI', 'Florenzi', 'A', 2, 'MotDePasseJoueur'),
(18, 'OUI', 'Bernat', 'J', 2, 'MotDePasseJoueur'),
(19, 'OUI', 'Kurzawa', 'L', 2, 'MotDePasseJoueur'),
(20, 'OUI', 'Pereira', 'D', 2, 'MotDePasseJoueur'),
(21, 'OUI', 'Verratti', 'M', 2, 'MotDePasseJoueur'),
(22, 'OUI', 'Paredes', 'L', 2, 'MotDePasseJoueur'),
(23, 'OUI', 'Rafinha', 'B', 2, 'MotDePasseJoueur'),
(24, 'OUI', 'Neymar', 'Junior', 2, 'MotDePasseJoueur'),
(25, 'OUI', 'Mbappé', 'K', 2, 'MotDePasseJoueur'),
(26, 'OUI', 'Kean', 'M', 2, 'MotDePasseJoueur'),
(27, 'OUI', 'Lopes', 'A', 3, 'MotDePasseJoueur'),
(28, 'OUI', 'Pollersbeck', 'J', 3, 'MotDePasseJoueur'),
(29, 'OUI', 'Denayer', 'J', 3, 'MotDePasseJoueur'),
(30, 'OUI', 'Marcelo', 'B', 3, 'MotDePasseJoueur'),
(31, 'OUI', 'Dubois', 'L', 3, 'MotDePasseJoueur'),
(32, 'OUI', 'Diomande', 'S', 3, 'MotDePasseJoueur'),
(33, 'OUI', 'Aouar', 'H', 3, 'MotDePasseJoueur'),
(34, 'OUI', 'Mendes', 'Thiago', 3, 'MotDePasseJoueur'),
(35, 'OUI', 'Da Silva', 'F', 3, 'MotDePasseJoueur'),
(36, 'OUI', 'Depay', 'M', 3, 'MotDePasseJoueur'),
(37, 'OUI', 'Ekambi', 'Toko', 3, 'MotDePasseJoueur'),
(38, 'OUI', 'Bernardoni', 'P', 4, 'MotDePasseJoueur'),
(39, 'OUI', 'Butelle', 'L', 4, 'MotDePasseJoueur'),
(40, 'OUI', 'Thomas', 'R', 4, 'MotDePasseJoueur'),
(41, 'OUI', 'Traoré', 'I', 4, 'MotDePasseJoueur'),
(42, 'OUI', 'Manceau', 'V', 4, 'MotDePasseJoueur'),
(43, 'OUI', 'Doumbia', 'S', 4, 'MotDePasseJoueur'),
(44, 'OUI', 'Bamba', 'A', 4, 'MotDePasseJoueur'),
(45, 'OUI', 'Coulibaly', 'L', 4, 'MotDePasseJoueur'),
(46, 'OUI', 'Fulgini', 'A', 4, 'MotDePasseJoueur'),
(47, 'OUI', 'Mangani', 'T', 4, 'MotDePasseJoueur'),
(48, 'OUI', 'Capelle', 'P', 4, 'MotDePasseJoueur'),
(49, 'OUI', 'Bahoken', 'S', 4, 'MotDePasseJoueur'),
(50, 'OUI', 'Diony', 'L', 4, 'MotDePasseJoueur'),
(51, 'OUI', 'Touré', 'T', 4, 'MotDePasseJoueur'),
(52, 'OUI', 'Benitez', 'W', 5, 'MotDePasseJoueur'),
(53, 'OUI', 'Cardinale', 'Y', 5, 'MotDePasseJoueur'),
(54, 'OUI', 'Dante', 'I', 5, 'MotDePasseJoueur'),
(55, 'OUI', 'Kamara', 'H', 5, 'MotDePasseJoueur'),
(56, 'OUI', 'Lotomba', 'J', 5, 'MotDePasseJoueur'),
(57, 'OUI', 'Atal', 'Y', 5, 'MotDePasseJoueur'),
(58, 'OUI', 'Saliba', 'W', 5, 'MotDePasseJoueur'),
(59, 'OUI', 'Melou Lees', 'P', 5, 'MotDePasseJoueur'),
(60, 'OUI', 'Schneiderlin', 'M', 5, 'MotDePasseJoueur'),
(61, 'OUI', 'Boudaoui', 'H', 5, 'MotDePasseJoueur'),
(62, 'OUI', 'Thuram-Ulien', 'K', 5, 'MotDePasseJoueur'),
(63, 'OUI', 'Trouillet', 'A', 5, 'MotDePasseJoueur'),
(64, 'OUI', 'Gouiri', 'A', 5, 'MotDePasseJoueur'),
(65, 'OUI', 'Lopes', 'Rony', 5, 'MotDePasseJoueur'),
(66, 'OUI', 'Ndoye', 'D', 5, 'MotDePasseJoueur'),
(67, 'OUI', 'Lecomte', 'B', 6, 'MotDePasseJoueur'),
(68, 'OUI', 'Mannone', 'V', 6, 'MotDePasseJoueur'),
(69, 'OUI', 'Badiashile', 'B', 6, 'MotDePasseJoueur'),
(70, 'OUI', 'Henrique', 'C', 6, 'MotDePasseJoueur'),
(71, 'OUI', 'Maripan', 'G', 6, 'MotDePasseJoueur'),
(72, 'OUI', 'Disasi', 'A', 6, 'MotDePasseJoueur'),
(73, 'OUI', 'Aguilar', 'R', 6, 'MotDePasseJoueur'),
(74, 'OUI', 'Fofana', 'Y', 6, 'MotDePasseJoueur'),
(75, 'OUI', 'Tchouameni', 'A', 6, 'MotDePasseJoueur'),
(76, 'OUI', 'Diop', 'S', 6, 'MotDePasseJoueur'),
(77, 'OUI', 'Golovin', 'A', 6, 'MotDePasseJoueur'),
(78, 'OUI', 'Ben Yedder', 'W', 6, 'MotDePasseJoueur'),
(79, 'OUI', 'Volland', 'K', 6, 'MotDePasseJoueur'),
(80, 'OUI', 'Martins', 'G', 6, 'MotDePasseJoueur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Administrateur`
--
ALTER TABLE `Administrateur`
  ADD PRIMARY KEY (`idAdmin`,`poste`),
  ADD UNIQUE KEY `login_unique_index` (`login`),
  ADD KEY `fk_Administrateur_Club` (`clubId`);

--
-- Index pour la table `Club`
--
ALTER TABLE `Club`
  ADD PRIMARY KEY (`idClub`);

--
-- Index pour la table `Convocation`
--
ALTER TABLE `Convocation`
  ADD PRIMARY KEY (`IdConvocation`),
  ADD KEY `fk_Convocation_Equipe` (`idEquipeAdverse`);

--
-- Index pour la table `ConvocationJoueur`
--
ALTER TABLE `ConvocationJoueur`
  ADD PRIMARY KEY (`idConvocation`,`idJoueur`),
  ADD UNIQUE KEY `fk_convocation_joueur` (`idConvocation`,`idJoueur`);

--
-- Index pour la table `Equipe`
--
ALTER TABLE `Equipe`
  ADD PRIMARY KEY (`idEquipe`),
  ADD KEY `fk_Equipe_Club` (`clubId`);

--
-- Index pour la table `Joueur`
--
ALTER TABLE `Joueur`
  ADD PRIMARY KEY (`idJoueur`),
  ADD KEY `fk_Joueur_Club` (`clubId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Administrateur`
--
ALTER TABLE `Administrateur`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `Club`
--
ALTER TABLE `Club`
  MODIFY `idClub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `Convocation`
--
ALTER TABLE `Convocation`
  MODIFY `IdConvocation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Equipe`
--
ALTER TABLE `Equipe`
  MODIFY `idEquipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `Joueur`
--
ALTER TABLE `Joueur`
  MODIFY `idJoueur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Administrateur`
--
ALTER TABLE `Administrateur`
  ADD CONSTRAINT `fk_Administrateur_Club` FOREIGN KEY (`clubId`) REFERENCES `Club` (`idClub`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `Convocation`
--
ALTER TABLE `Convocation`
  ADD CONSTRAINT `fk_Convocation_Equipe` FOREIGN KEY (`idEquipeAdverse`) REFERENCES `Equipe` (`idEquipe`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `ConvocationJoueur`
--
ALTER TABLE `ConvocationJoueur`
  ADD CONSTRAINT `fk_Convocation_Joueur1` FOREIGN KEY (`idConvocation`) REFERENCES `Convocation` (`IdConvocation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Convocation_Joueur2` FOREIGN KEY (`idJoueur`) REFERENCES `Joueur` (`idJoueur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `Equipe`
--
ALTER TABLE `Equipe`
  ADD CONSTRAINT `fk_Equipe_Club` FOREIGN KEY (`clubId`) REFERENCES `Club` (`idClub`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `Joueur`
--
ALTER TABLE `Joueur`
  ADD CONSTRAINT `fk_Joueur_Club` FOREIGN KEY (`clubId`) REFERENCES `Club` (`idClub`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
