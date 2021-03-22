<?php
declare(strict_types=1);
// require_once 'Modele.php';
require_once __DIR__ . '../Contenu/vendor/autoload.php';
use Acme\Modele;

class Rencontre extends Modele {
    
    public function getRencontre(string $idRencontre) {
        $sql = "SELECT * FROM Rencontre WHERE idRencontre = ? ";
        $rencontre= $this->executeRequete($sql, array(intval($idRencontre)));
        if ($rencontre->rowCount() > 0)
            return $rencontre;
        else throw new Exception("Pas de Rencontre (Match) avec l'identifiant ". $idRencontre ." dans la Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR LA RENCONTRE
    
    public function getRencontres (string $idEquipe) {
        $sql = "SELECT * FROM Rencontre WHERE idEquipe1 = ? OR idEquipe2 = ?";
        $rencontres = $this->executeRequete($sql, array($idEquipe, $idEquipe));
        if ($rencontres->rowCount() > 0)
            return $rencontres;
        else throw new Exception("Pas de Rencontres (Matchs) pour l'Equipe d'identifiant ". $idEquipe ." dans la Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR TOUS LES RENCONTRES DU CLUB
}
?>