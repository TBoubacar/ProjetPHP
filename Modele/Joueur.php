<?php
declare(strict_types=1);
// require_once 'Modele.php';
require_once __DIR__ . '../Contenu/vendor/autoload.php';
use Acme\Modele;

class Joueur extends Modele {
    
    public function getJoueur(string $idJoueur) {
        $sql = "SELECT * FROM Joueur WHERE idJoueur = ? ";
        $joueur = $this->executeRequete($sql, array(intval($idJoueur)));
        if ($joueur->rowCount() > 0)
            return $joueur;
        else throw new Exception("Pas de joueur avec l'identifiant ". $idJoueur ." dans notre Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR LE JOUEURS
    
    public function getJoueurs (string $idClub) {
        $sql = "SELECT * FROM Joueur WHERE clubId = ?";
        $joueurs = $this->executeRequete($sql, array($idClub));
        if ($joueurs->rowCount() > 0)
            return $joueurs;
        else throw new Exception("L'identifiant ". $idClub ." n'existe pas dans notre Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR TOUS LES JOUEURS DU CLUB
}
?>