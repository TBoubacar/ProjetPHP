<?php
declare(strict_types=1);
/*namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Vue;
*/
require_once 'Vue/Vue.php';

class ControleurAccueil {

    public function __construct() {
    }

    public function accueil() {
        $vue = new Vue("Accueil");
        $vue->generer(array());
    }

}
