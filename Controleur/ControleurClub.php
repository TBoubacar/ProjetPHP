<?php
require_once 'Modele/Club.php';
require_once 'Vue/Vue.php';

class ControleurClub {
    private $club;
    
    function __construct() {
        $this->club = new Club();
    }
    
    public function club(string $idClub) {
        $vue = new Vue("Club");
        $club = $this->club->getClub($idClub);
        $vue->generer(array(
            "nom" => $club["nom"],
            "adresse" => $club["adresse"]
        ));
    }
    
    public function clubs() {
        $club = $this->club->getClubs();
        $vue = new Vue("Clubs");
        $vue->generer(array("clubs" => $club));
    }
}
?>