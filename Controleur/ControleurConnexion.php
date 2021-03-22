<?php
declare(strict_types=1);
namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Vue;

class ControleurConnexion {

    public function __construct() {
    }

    public function connexion() {
        $vue = new Vue("Connexion");
        $vue->generer(array());
    }
}
