<?php
declare(strict_types=1);
require_once 'Modele.php';

class Administrateur extends Modele {
    
    public function getAdministrateur(string $idAmin) {
        $sql = "SELECT * FROM Administrateur WHERE idAdmin = ? ";
        $administrateur = $this->executeRequete($sql, array(intval($idAmin)));
        if ($administrateur->rowCount() > 0)
            return $administrateur;
        else throw new Exception("Pas d'Administrateur avec l'identifiant ". $idAmin ." dans la Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR L'ADMINISTRATEUR
    
    public function getAdministrateurs(string $idClub) {
        $sql = "SELECT * FROM Administrateur WHERE clubId = ?";
        $administrateurs = $this->executeRequete($sql, array($idClub));
        if ($administrateurs->rowCount() > 0)
            return $administrateurs;
        else throw new Exception("L'identifiant ". $idClub ." n'existe pas dans notre Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR TOUS LES ADMINISTRATEURS DU CLUB
}
?>