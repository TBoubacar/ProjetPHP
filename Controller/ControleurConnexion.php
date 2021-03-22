<?php

require_once 'Vue/Vue.php';

class ControleurConnexion {

    public function __construct() {
        //$this->billet = new Billet();
    }

// Affiche la liste de tous les billets du blog
    public function connexion() {
        $vue = new Vue("Connexion");
        $vue->generer("");
    }

}
