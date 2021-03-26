<?php
declare(strict_types=1);
/*namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Vue;
*/
require_once 'Vue/Vue.php';

            #A SUPPRIMER APRES

class ControleurAdmin {

    public function __construct() {
    }

    public function admin() {
        $vue = new Vue("Admin");
        $vue->generer(array());
    }
}
