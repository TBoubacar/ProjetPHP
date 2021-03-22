<?php
// require_once 'Controleur/ControleurAccueil.php';
// require_once 'Controleur/ControleurConnexion.php';
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\ControleurConnexion;
use Acme\ControleurAccueil;
use Acme\Vue;

class Routeur {

    private $ctrlAccueil;
    private $ctrlConnexion;

    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlConnexion = new ControleurConnexion();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])){
                if ($_GET['action'] == 'connexion'){
                $this->ctrlConnexion->connexion();
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
