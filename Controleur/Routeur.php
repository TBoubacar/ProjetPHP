<?php
declare(strict_types=1);
require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurConnexion.php';
require_once 'Controleur/ControleurAdmin.php';
require_once 'Vue/Vue.php';
/*require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\ControleurConnexion;
use Acme\ControleurAccueil;
use Acme\Vue;*/

class Routeur {

    private $ctrlAccueil;
    private $ctrlConnexion;
    private $ctrlAdmin;

    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlConnexion = new ControleurConnexion();
         $this->ctrlAdmin = new ctrlAdmin();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])){
                if ($_GET['action'] == 'connexion'){
                $this->ctrlConnexion->connexion();
                }
                else if($_GET['action'] == 'admin'){

                }
            }
            else{
                // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

}
