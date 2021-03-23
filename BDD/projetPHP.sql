-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 23 mars 2021 à 01:35
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
(1, 'SECRETAIRE', 'TOURE', 'Boubacar', 'Senior', 1, 'MotDePasseAdmin', 'A0001'),
(2, 'ENTRAINEUR', 'TOURE', 'Siriman', 'Senior', 1, 'MotDePasseAdmin', 'A0002'),
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
  `joueurId` int(11) NOT NULL,
  `adresse` varchar(30) COLLATE utf8_bin NOT NULL,
  `jour` date NOT NULL
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
  `etatJoueur` enum('DISPONIBLE','INDISPONIBLE','SUSPENDU') COLLATE utf8_bin NOT NULL DEFAULT 'DISPONIBLE',
  `clubId` int(11) NOT NULL,
  `passWord` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT 'MotDePasseJoueur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `Joueur`
--

INSERT INTO `Joueur` (`idJoueur`, `licence`, `nom`, `prenom`, `etatJoueur`, `clubId`, `passWord`) VALUES
(1, 'OUI', 'Mandanda', 'S', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(2, 'OUI', 'Pelé', 'Y', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(3, 'OUI', 'Sakai', 'H', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(4, 'OUI', 'Alvaro', 'E', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(5, 'OUI', 'Amavi', 'J', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(6, 'OUI', 'Nagatomo', 'Y', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(7, 'OUI', 'Payet', 'D', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(8, 'OUI', 'Kamara', 'B', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(9, 'OUI', 'Rongier', 'V', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(10, 'OUI', 'Gueye', 'P', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(11, 'OUI', 'Thauvin', 'F', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(12, 'OUI', 'Germain', 'V', 'DISPONIBLE', 1, 'MotDePasseJoueur'),
(13, 'OUI', 'Navas', 'Keylor', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(14, 'OUI', 'Sergio', 'Rico', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(15, 'OUI', 'Marquinhos', 'M', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(16, 'OUI', 'Kimpembe', 'P', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(17, 'OUI', 'Florenzi', 'A', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(18, 'OUI', 'Bernat', 'J', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(19, 'OUI', 'Kurzawa', 'L', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(20, 'OUI', 'Pereira', 'D', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(21, 'OUI', 'Verratti', 'M', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(22, 'OUI', 'Paredes', 'L', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(23, 'OUI', 'Rafinha', 'B', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(24, 'OUI', 'Neymar', 'Junior', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(25, 'OUI', 'Mbappé', 'K', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(26, 'OUI', 'Kean', 'M', 'DISPONIBLE', 2, 'MotDePasseJoueur'),
(27, 'OUI', 'Lopes', 'A', 'DISPONIBLE', 3, 'MotDePasseJoueur'),
(28, 'OUI', 'Pollersbeck', 'J', 'DISPONIBLE', 3, 'MotDePasseJoueur'),
(29, 'OUI', 'Denayer', 'J', 'DISPONIBLE', 3, 'MotDePasseJoueur'),
(30, 'OUI', 'Marcelo', 'B', 'DISPONIBLE', 3, 'MotDePasseJoueur'),
(31, 'OUI', 'Dubois', 'L', 'DISPONIBLE', 3, 'MotDePasseJoueur'),
(32, 'OUI', 'Diomande', 'S', 'DISPONIBLE', 3, 'MotDePasseJoueur'),
(33, 'OUI', 'Aouar', 'H', 'DISPONIBLE', 3, 'MotDePasseJoueur'),
(34, 'OUI', 'Mendes', 'Thiago', 'DISPONIBLE', 3, 'MotDePasseJoueur'),
(35, 'OUI', 'Da Silva', 'F', 'DISPONIBLE', 3, 'MotDePasseJoueur'),
(36, 'OUI', 'Depay', 'M', 'DISPONIBLE', 3, 'MotDePasseJoueur'),
(37, 'OUI', 'Ekambi', 'Toko', 'DISPONIBLE', 3, 'MotDePasseJoueur'),
(38, 'OUI', 'Bernardoni', 'P', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(39, 'OUI', 'Butelle', 'L', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(40, 'OUI', 'Thomas', 'R', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(41, 'OUI', 'Traoré', 'I', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(42, 'OUI', 'Manceau', 'V', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(43, 'OUI', 'Doumbia', 'S', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(44, 'OUI', 'Bamba', 'A', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(45, 'OUI', 'Coulibaly', 'L', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(46, 'OUI', 'Fulgini', 'A', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(47, 'OUI', 'Mangani', 'T', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(48, 'OUI', 'Capelle', 'P', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(49, 'OUI', 'Bahoken', 'S', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(50, 'OUI', 'Diony', 'L', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(51, 'OUI', 'Touré', 'T', 'DISPONIBLE', 4, 'MotDePasseJoueur'),
(52, 'OUI', 'Benitez', 'W', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(53, 'OUI', 'Cardinale', 'Y', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(54, 'OUI', 'Dante', 'I', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(55, 'OUI', 'Kamara', 'H', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(56, 'OUI', 'Lotomba', 'J', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(57, 'OUI', 'Atal', 'Y', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(58, 'OUI', 'Saliba', 'W', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(59, 'OUI', 'Melou Lees', 'P', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(60, 'OUI', 'Schneiderlin', 'M', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(61, 'OUI', 'Boudaoui', 'H', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(62, 'OUI', 'Thuram-Ulien', 'K', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(63, 'OUI', 'Trouillet', 'A', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(64, 'OUI', 'Gouiri', 'A', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(65, 'OUI', 'Lopes', 'Rony', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(66, 'OUI', 'Ndoye', 'D', 'DISPONIBLE', 5, 'MotDePasseJoueur'),
(67, 'OUI', 'Lecomte', 'B', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(68, 'OUI', 'Mannone', 'V', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(69, 'OUI', 'Badiashile', 'B', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(70, 'OUI', 'Henrique', 'C', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(71, 'OUI', 'Maripan', 'G', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(72, 'OUI', 'Disasi', 'A', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(73, 'OUI', 'Aguilar', 'R', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(74, 'OUI', 'Fofana', 'Y', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(75, 'OUI', 'Tchouameni', 'A', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(76, 'OUI', 'Diop', 'S', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(77, 'OUI', 'Golovin', 'A', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(78, 'OUI', 'Ben Yedder', 'W', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(79, 'OUI', 'Volland', 'K', 'DISPONIBLE', 6, 'MotDePasseJoueur'),
(80, 'OUI', 'Martins', 'G', 'DISPONIBLE', 6, 'MotDePasseJoueur');

-- --------------------------------------------------------

--
-- Structure de la table `Rencontre`
--

CREATE TABLE `Rencontre` (
  `IdRencontre` int(11) NOT NULL,
  `idEquipe1` int(11) NOT NULL,
  `idEquipe2` int(11) NOT NULL,
  `adresse` varchar(30) COLLATE utf8_bin NOT NULL,
  `dateRencontre` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  ADD KEY `fk_Convocation_Joueur` (`joueurId`);

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
-- Index pour la table `Rencontre`
--
ALTER TABLE `Rencontre`
  ADD PRIMARY KEY (`IdRencontre`),
  ADD KEY `fk_Rencontre_Equipe1` (`idEquipe1`),
  ADD KEY `fk_Rencontre_Equipe2` (`idEquipe2`);

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
-- AUTO_INCREMENT pour la table `Rencontre`
--
ALTER TABLE `Rencontre`
  MODIFY `IdRencontre` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `fk_Convocation_Joueur` FOREIGN KEY (`joueurId`) REFERENCES `Joueur` (`idJoueur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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

--
-- Contraintes pour la table `Rencontre`
--
ALTER TABLE `Rencontre`
  ADD CONSTRAINT `fk_Rencontre_Equipe1` FOREIGN KEY (`idEquipe1`) REFERENCES `Equipe` (`idEquipe`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rencontre_Equipe2` FOREIGN KEY (`idEquipe2`) REFERENCES `Equipe` (`idEquipe`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
