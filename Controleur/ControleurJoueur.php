<?php
declare(strict_types=1);
require_once 'Modele/Joueur.php';
require_once 'Vue/Vue.php';

class ControleurJoueur {
    private $joueur;
    
    function __construct() {
        $this->joueur = new Joueur();
    }
    
    public function joueur(string $idJoueur) {
        $joueur = $this->joueur->getJoueur($idJoueur);
        $vue = new Vue("Joueur");
        $vue->generer(array(
            "nom"   => $joueur["nom"],
            "prenom"   => $joueur["prenom"],
            "licence"   => $joueur["licence"],
            "etatJoueur"   => $joueur["etatJoueur"],
            "club"   => $joueur["nomClub"]
        ));
    }
    
    public function joueurs(string $idClub, string $nomClub) {
        $joueur = $this->joueur->getJoueurs($idClub);
        $vue = new Vue("Joueurs");
        $vue->generer(array("joueurs" => $joueur, "club" => $nomClub));
    }
}
?>
