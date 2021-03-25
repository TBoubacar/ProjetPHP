<?php
declare(strict_types=1);
require_once 'Modele/Convocation.php';
require_once 'Vue/Vue.php';

class ControleurConvocation {
    private $convocation;
    
    function __construct() {
        $this->convocation = new Convocation();
    }
    
    public function convocation(string $idConvoc) {
        $convocation = $this->convocation->getConvocation($idConvoc);
        $vue = new Vue("Convocation");
        $vue->generer(array(
            "nom"   => $convocation["nom"],
            "prenom"   => $convocation["prenom"],
            "nomEquipe" => $convocation["nomEquipe"],
            "jour"      => $convocation["jour"],
            "adresse"   => $convocation["adresse"]
        ));
    }
    
    public function convocations(string $idJoueur) {
        $convocation = $this->convocation->getConvocations($idJoueur);
        $vue = new Vue("Convocations");
        $vue->generer(array("convocations" => $convocation));
    }
}
?>