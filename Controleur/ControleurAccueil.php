<?php
// require_once 'Vue/Vue.php';
namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Vue;

class ControleurAccueil {

    public function __construct() {
        //$this->billet = new Billet();
    }

// Affiche la liste de tous les billets du blog
    public function accueil() {
        $vue = new Vue("Accueil");
        $vue->generer(array());
    }

}
