<?php

require_once 'Vue/Vue.php';

class ControleurAccueil {

    public function __construct() {
        //$this->billet = new Billet();
    }

// Affiche la liste de tous les billets du blog
    public function accueil() {
        $vue = new Vue("Accueil");
        $vue->generer("");
    }

}
