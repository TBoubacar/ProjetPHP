<?php 
declare(strict_types=1);
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Vue;
use Acme\ControleurAccueil;
use Acme\ControleurConnexion;

class Routeur {
    
    public function __construct() {
    }
    
    public function connexion() {
        $vue = new Vue("Connexion");
        $vue->generer(array());
    }
}

?>