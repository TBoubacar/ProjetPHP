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
INSERT INTO Club (nom, effectif, adresse) VALUES ('Olympique Marseille', 12, 'Marseille');
INSERT INTO Club (nom, effectif, adresse) VALUES ('PSG', 14, 'Paris');
INSERT INTO Club (nom, effectif, adresse) VALUES ('Olympique Lyonnais', 11, 'Lyon');
INSERT INTO Club (nom, effectif, adresse) VALUES ('Angers SCO', 14, 'Angers');
INSERT INTO Club (nom, effectif, adresse) VALUES ('Nice FC', 15, 'Nice');
INSERT INTO Club (nom, effectif, adresse) VALUES ('Monaco FC', 14, 'Monaco');

/*--			DANS LA TABLE Administrateur	*/
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Secretaire', 'TOURE', 'Boubacar', 'Senior', 1);
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Entraineur', 'TOURE', 'Siriman', 'Senior', 1);
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Secretaire', 'Barro', 'Juliette', 'Senior', 2);
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Entraineur', 'TRAORE', 'Hamidou', 'Senior', 2);
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Secretaire', 'TRAORE', 'Hamalah', 'Senior', 3);
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Entraineur', 'TOURE', 'Hameye', 'Senior', 3);
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Secretaire', 'BAH', 'Diarrah', 'Senior', 4);
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Entraineur', 'HENRY', 'Thierry', 'Senior', 4);
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Secretaire', 'TOURE', 'Badra', 'Senior', 5);
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Entraineur', 'TOURE', 'Moussa', 'Senior', 5);
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Secretaire', 'THOMAS', 'Tuchel', 'Senior', 6);
INSERT INTO Administrateur (poste, nom, prenom, categorie, idClub) VALUES ('Entraineur', 'ZIDANE', 'ZINEDINE', 'Senior', 6);

/*--			DANS LA TABLE Equipe			*/
INSERT INTO Equipe (nom, effectif, idClub) VALUES ('Equipe A', 11, 1);
INSERT INTO Equipe (nom, effectif, idClub) VALUES ('Equipe B', 12, 1);
INSERT INTO Equipe (nom, effectif, idClub) VALUES ('Equipe A', 11, 2);
INSERT INTO Equipe (nom, effectif, idClub) VALUES ('Equipe B', 14, 2);
INSERT INTO Equipe (nom, effectif, idClub) VALUES ('Equipe A', 11, 3);
INSERT INTO Equipe (nom, effectif, idClub) VALUES ('Equipe A', 11, 4);
INSERT INTO Equipe (nom, effectif, idClub) VALUES ('Equipe B', 14, 4);
INSERT INTO Equipe (nom, effectif, idClub) VALUES ('Equipe A', 11, 5);
INSERT INTO Equipe (nom, effectif, idClub) VALUES ('Equipe B', 15, 5);
INSERT INTO Equipe (nom, effectif, idClub) VALUES ('Equipe A', 11, 6);
INSERT INTO Equipe (nom, effectif, idClub) VALUES ('Equipe B', 14, 6);

/*--			DANS LA TABLE Joueur			*/
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Mandanda', 'S', 1);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Pelé', 'Y', 1);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Sakai', 'H', 1);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Alvaro', 'E', 1);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Amavi', 'J', 1);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Nagatomo', 'Y', 1);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Payet', 'D', 1);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Kamara', 'B', 1);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Rongier', 'V', 1);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Gueye', 'P', 1);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Thauvin', 'F', 1);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Germain', 'V', 1);

INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Navas', 'Keylor', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Sergio', 'Rico', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Marquinhos', 'M', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Kimpembe', 'P', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Florenzi', 'A', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Bernat', 'J', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Kurzawa', 'L', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Pereira', 'D', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Verratti', 'M', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Paredes', 'L', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Rafinha', 'B', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Neymar', 'Junior', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Mbappé', 'K', 2);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Kean', 'M', 2);

INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Lopes', 'A', 3);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Pollersbeck', 'J', 3);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Denayer', 'J', 3);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Marcelo', 'B', 3);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Dubois', 'L', 3);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Diomande', 'S', 3);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Aouar', 'H', 3);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Mendes', 'Thiago', 3);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Da Silva', 'F', 3);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Depay', 'M', 3);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Ekambi', 'Toko', 3);

INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Bernardoni', 'P', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Butelle', 'L', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Thomas', 'R', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Traoré', 'I', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Manceau', 'V', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Doumbia', 'S', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Bamba', 'A', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Coulibaly', 'L', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Fulgini', 'A', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Mangani', 'T', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Capelle', 'P', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Bahoken', 'S', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Diony', 'L', 4);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Touré', 'T', 4);

INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Benitez', 'W', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Cardinale', 'Y', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Dante', 'I', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Kamara', 'H', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Lotomba', 'J', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Atal', 'Y', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Saliba', 'W', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Melou Lees', 'P', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Schneiderlin', 'M', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Boudaoui', 'H', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Thuram-Ulien', 'K', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Trouillet', 'A', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Gouiri', 'A', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Lopes', 'Rony', 5);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Ndoye', 'D', 5);

INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Lecomte', 'B', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Mannone', 'V', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Badiashile', 'B', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Henrique', 'C', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Maripan', 'G', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Disasi', 'A', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Aguilar', 'R', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Fofana', 'Y', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Tchouameni', 'A', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Diop', 'S', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Golovin', 'A', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Ben Yedder', 'W', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Volland', 'K', 6);
INSERT INTO Joueur (licence, nom, prenom, idClub) VALUES ('OUI', 'Martins', 'G', 6);

/*
--	AFFICHAGE DES N-UPLETS DES TABLES
SELECT * FROM Club;
SELECT * FROM Administrateur;
SELECT * FROM Equipe;
SELECT * FROM Joueur;
*/
