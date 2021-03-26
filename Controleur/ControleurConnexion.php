<?php
declare(strict_types=1);
/*namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Vue;
*/
require_once 'Modele/Connexion.php';
require_once 'Vue/Vue.php';

class ControleurConnexion {
    private $connexion;
    
    public function __construct() {
        $this->connexion = new Connexion();
    }


    public function connexion(string $logAdmin, string $passWord) {
        $admin = $this->connexion->verification($logAdmin, $passWord);

        //$record = $admin->fetch(PDO::FETCH_ASSOC);

        $nom = $record["nom"];
        $prenom = $record["prenom"];
        $poste = $record["poste"];
        $club = $record["nomClub"];
        $adresseClub = $record["adresse"];

        $vue = new Vue("Connexion");
        $vue->generer(array(
            "nom" => $nom,
            "prenom" => $prenom,
            "poste" => $poste,
            "club"  => $club,
            "adresseClub" => $adresseClub
        ));
    }
}
