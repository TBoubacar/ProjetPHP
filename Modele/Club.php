<?php
declare(strict_types=1);
// require_once 'Modele.php';
require_once __DIR__ . '../Contenu/vendor/autoload.php';
use Acme\Modele;

class Club extends Modele {
    
    public function getClub(string $idClub) {
        $sql = "SELECT * FROM Club WHERE idClub = ? ";
        $club = $this->executeRequete($sql, array($idClub));
        if ($club->rowCount() > 0)
            return $club;
        else throw new Exception("L'identifiant ". $idClub ." n'existe pas dans notre Base de données !");
    } #CECI RENVOI UN TABLEAU CONTENANT LES INFOS SUR LE CLUB
    
    public function getClubs() {
        $sql = "SELECT * FROM Club";
        $clubs = $this->executeRequete($sql);
        if ($clubs->rowCount() > 0)
            return $clubs;
        else throw new Exception("Pas de Club dans la Base de données !");
    } #CECI RENVOI UN TABLEAU CONTENANT LES INFOS SUR TOUS LES CLUBS
}
?>