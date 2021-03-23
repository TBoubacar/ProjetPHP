<?php
declare(strict_types=1);
require_once 'Modele/Rencontre.php';
require_once 'Vue/Vue.php';

class ControleurRencontre {
    private $rencontre;
    
    function __construct() {
        $this->rencontre = new Rencontre();
    }
    
    public function rencontre (string $idRencontre) {
        $rencontre = $this->rencontre->getRencontre($idRencontre);
        $vue = new Vue("Rencontre");
        $vue->generer(array(
            "equipe1" => $rencontre["nomE1"],
            "equipe2" => $rencontre["nomE2"],
            "adresse" => $rencontre["adresse"],
            "date" => $rencontre["dateRencontre"]
        ));
    }
    
    public function rencontres (string $idEquipe) {
        $rencontre = $this->rencontre->getRencontres($idEquipe);
        $vue = new Vue("Rencontres");
        $vue->generer(array("rencontres" => $rencontre));
    }
}
?>
