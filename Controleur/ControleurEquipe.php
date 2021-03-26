<?php
declare(strict_types=1);
require_once 'Modele/Equipe.php';
require_once 'Vue/Vue.php';

class ControleurEquipe {
    private $equipe;
    
    function __construct() {
        $this->equipe = new Equipe();
    }
    
    public function equipe (string $idEquipe) {
        $equipe = $this->equipe->getEquipe($idEquipe);
        $vue = new Vue("Equipe");
        $vue->generer(array("nom" => $equipe["nom"], "club" => $equipe["nomClub"]));
    }
    
    public function equipes (string $idClub) {
        $equipe = $this->equipe->getEquipes($idClub);
        $vue = new Vue("Equipes");
        $vue->generer(array("equipes" => $equipe, "club" => $equipe["nomClub"][0]));    //A tester après
    }
}
?>
