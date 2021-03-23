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
        $vue->generer(array("nom" => $equipe["nom"]));
        #Pas fini, on veut pouvoir afficher tous les joueurs disponibles ou non à l'aide de la table Effectif
    }
    
    public function equipes (string $idClub, string $nomClub) {
        $equipe = $this->equipe->getEquipes($idClub);
        $vue = new Vue("Equipes");
        $vue->generer(array("equipes" => $equipe, "club" => $nomClub));
    }
}
?>
