<?php
declare(strict_types=1);
namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Vue;

class ControleurAccueil {
    
    public function __construct() {
    }
    
    public function connexion() {
        $vue = new Vue("Accueil");
        $vue->generer(array());
    }
}
