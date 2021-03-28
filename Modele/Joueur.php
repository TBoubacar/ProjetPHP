<?php
declare(strict_types=1);
require_once 'Modele.php';
/*namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Modele;
*/

class Joueur extends Modele {
    
    public function getJoueur(string $idJoueur) {
        $sql = "SELECT J.nom, J.prenom, J.licence, C.nom AS nomClub FROM Joueur J JOIN Club C ON J.clubId = C.idClub WHERE idJoueur = ? ";
        $joueur = $this->executeRequete($sql, array(intval($idJoueur)));
        if ($joueur->rowCount() > 0)
            return $joueur->fetch(PDO::FETCH_ASSOC);
        else throw new Exception("Pas de joueur avec l'identifiant ". $idJoueur ." dans notre Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR LE JOUEURS
    
    public function getJoueursAbscents (string $idClub) {
        $sql = "SELECT J.idJoueur, J.nom, J.prenom, J.licence, C.nom AS nomClub FROM Joueur J JOIN Club C ON J.clubId = C.idClub WHERE clubId = ?";
        $joueurs = $this->executeRequete($sql, array(intval($idClub)));
        if ($joueurs->rowCount() > 0)
            return $joueurs->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("L'identifiant ". $idClub ." n'existe pas dans notre Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR TOUS LES JOUEURS DU CLUB
    
    public function getJoueurs (string $idClub) {
        $sql = "SELECT J.idJoueur, J.nom, J.prenom, J.licence, C.nom AS nomClub FROM Joueur J JOIN Club C ON J.clubId = C.idClub WHERE clubId = ?";
        $joueurs = $this->executeRequete($sql, array(intval($idClub)));
        if ($joueurs->rowCount() > 0)
            return $joueurs->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("L'identifiant ". $idClub ." n'existe pas dans notre Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR TOUS LES JOUEURS DU CLUB
    
    public function getJoueursByNomClub (string $nomClub) {
        $sql = "SELECT J.idJoueur, J.nom, J.prenom, J.licence, C.nom AS nomClub FROM Joueur J JOIN Club C ON J.clubId = C.idClub WHERE nom = ?";
        $joueurs = $this->executeRequete($sql, array(intval($nomClub)));
        if ($joueurs->rowCount() > 0)
            return $joueurs->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("L'identifiant ". $idClub ." n'existe pas dans notre Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR TOUS LES JOUEURS DU CLUB
    
    public function ajoutJoueur (string $nom, string $prenom, string $clubId, string $licence="OUI") {
        $sql = "INSERT INTO `Joueur` (licence, nom, prenom, clubId) VALUES (?, ?, ?, ?)";
        $this->executeRequete($sql, array($licence, $nom, $prenom, intval($clubId)));
    }
    #ON EST LA
    public function ajoutJoueurAbsent (string $idJoueur, string $date, string $etatJoueur) {
        $sql = "INSERT INTO `EtatJoueur` (idJoueur, jour, etat) VALUES (?, ?, ?)";
        $this->executeRequete($sql, array(intval($idJoueur), $date, $etatJoueur));
    }
}
?>