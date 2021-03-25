<?php

require_once 'Vue/Vue.php';

class ControleurConnect {

    public function __construct() {
        //$this->billet = new Billet();
    }

// Affiche la liste de tous les billets du blog
    public function connect() {
        $vue = new Vue("Connect");
        $vue->generer(array());
    }

}
