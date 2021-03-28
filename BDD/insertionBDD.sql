/*--######################################################################
--	Noms/Prénoms :		TOURE Boubacar & BARRO Juliette
--	Date		 :		04/03/2021
--	Description	 :
--		Création de la base de données de notre projet portant sur la 
--		CONVOCATIONS SPORTIVES.
--
--######################################################################

-- INSERTION DES N-UPLETS DANS LES TABLES
--			DANS LA TABLE Club
*/
INSERT INTO Club (nom, adresse) VALUES ('Olympique Marseille', 'Marseille');
INSERT INTO Club (nom, adresse) VALUES ('PSG', 'Paris');
INSERT INTO Club (nom, adresse) VALUES ('Olympique Lyonnais', 'Lyon');
INSERT INTO Club (nom, adresse) VALUES ('Angers SCO', 'Angers');
INSERT INTO Club (nom, adresse) VALUES ('Nice FC', 'Nice');
INSERT INTO Club (nom, adresse) VALUES ('Monaco FC', 'Monaco');

/*--			DANS LA TABLE Administrateur	*/
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

/*--			DANS LA TABLE Equipe			*/
INSERT INTO Equipe (nom, clubId) VALUES ('Equipe A', 1);
INSERT INTO Equipe (nom, clubId) VALUES ('Equipe B', 1);
INSERT INTO Equipe (nom, clubId) VALUES ('Equipe A', 2);
INSERT INTO Equipe (nom, clubId) VALUES ('Equipe B', 2);
INSERT INTO Equipe (nom, clubId) VALUES ('Equipe A', 3);
INSERT INTO Equipe (nom, clubId) VALUES ('Equipe A', 4);
INSERT INTO Equipe (nom, clubId) VALUES ('Equipe B', 4);
INSERT INTO Equipe (nom, clubId) VALUES ('Equipe A', 5);
INSERT INTO Equipe (nom, clubId) VALUES ('Equipe B', 5);
INSERT INTO Equipe (nom, clubId) VALUES ('Equipe A', 6);
INSERT INTO Equipe (nom, clubId) VALUES ('Equipe B', 6);

/*--			DANS LA TABLE Joueur			*/
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Mandanda', 'S', 1);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Pelé', 'Y', 1);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Sakai', 'H', 1);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Alvaro', 'E', 1);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Amavi', 'J', 1);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Nagatomo', 'Y', 1);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Payet', 'D', 1);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Kamara', 'B', 1);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Rongier', 'V', 1);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Gueye', 'P', 1);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Thauvin', 'F', 1);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Germain', 'V', 1);

INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Navas', 'Keylor', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Sergio', 'Rico', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Marquinhos', 'M', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Kimpembe', 'P', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Florenzi', 'A', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Bernat', 'J', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Kurzawa', 'L', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Pereira', 'D', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Verratti', 'M', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Paredes', 'L', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Rafinha', 'B', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Neymar', 'Junior', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Mbappé', 'K', 2);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Kean', 'M', 2);

INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Lopes', 'A', 3);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Pollersbeck', 'J', 3);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Denayer', 'J', 3);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Marcelo', 'B', 3);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Dubois', 'L', 3);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Diomande', 'S', 3);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Aouar', 'H', 3);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Mendes', 'Thiago', 3);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Da Silva', 'F', 3);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Depay', 'M', 3);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Ekambi', 'Toko', 3);

INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Bernardoni', 'P', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Butelle', 'L', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Thomas', 'R', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Traoré', 'I', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Manceau', 'V', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Doumbia', 'S', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Bamba', 'A', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Coulibaly', 'L', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Fulgini', 'A', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Mangani', 'T', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Capelle', 'P', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Bahoken', 'S', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Diony', 'L', 4);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Touré', 'T', 4);

INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Benitez', 'W', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Cardinale', 'Y', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Dante', 'I', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Kamara', 'H', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Lotomba', 'J', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Atal', 'Y', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Saliba', 'W', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Melou Lees', 'P', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Schneiderlin', 'M', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Boudaoui', 'H', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Thuram-Ulien', 'K', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Trouillet', 'A', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Gouiri', 'A', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Lopes', 'Rony', 5);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Ndoye', 'D', 5);

INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Lecomte', 'B', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Mannone', 'V', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Badiashile', 'B', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Henrique', 'C', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Maripan', 'G', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Disasi', 'A', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Aguilar', 'R', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Fofana', 'Y', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Tchouameni', 'A', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Diop', 'S', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Golovin', 'A', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Ben Yedder', 'W', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Volland', 'K', 6);
INSERT INTO Joueur (licence, nom, prenom, clubId) VALUES ('OUI', 'Martins', 'G', 6);

/*
--	AFFICHAGE DES N-UPLETS DES TABLES
SELECT * FROM Club;
SELECT * FROM Administrateur;
SELECT * FROM Equipe;
SELECT * FROM Joueur;
*/
