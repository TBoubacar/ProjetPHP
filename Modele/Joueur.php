<?php
declare(strict_types=1);
require_once 'Modele.php';
/*namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Modele;
*/

class Joueur extends Modele {
    
    public function getJoueur(string $idJoueur) {
        $sql = "SELECT J.nom, J.prenom, J.etatJoueur, J.licence, C.nom AS nomClub FROM Joueur J JOIN Club C ON J.clubId = C.idClub WHERE idJoueur = ? ";
        $joueur = $this->executeRequete($sql, array(intval($idJoueur)));
        if ($joueur->rowCount() > 0)
            return $joueur;
        else throw new Exception("Pas de joueur avec l'identifiant ". $idJoueur ." dans notre Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR LE JOUEURS
    
    public function getJoueurs (string $idClub) {
        $sql = "SELECT J.nom, J.prenom, J.etatJoueur, J.licence, C.nom AS nomClub FROM Joueur J JOIN Club C ON J.clubId = C.idClub WHERE clubId = ?";
        $joueurs = $this->executeRequete($sql, array(intval($idClub)));
        if ($joueurs->rowCount() > 0)
            return $joueurs;
        else throw new Exception("L'identifiant ". $idClub ." n'existe pas dans notre Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR TOUS LES JOUEURS DU CLUB
}
?>