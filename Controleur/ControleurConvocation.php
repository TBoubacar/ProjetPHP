<?php
declare(strict_types=1);
require_once 'Modele/Convocation.php';
require_once 'Vue/Vue.php';

class ControleurConvocation {
    private $convocation;
    
    function __construct() {
        $this->convocation = new Convocation();
    }
    
    
    public function convocationJoueur(string $idConvoc) {
        $convocation = $this->convocation->getConvocation($idConvoc);
        $vue = new Vue("Convocation");
        $vue->generer(array(
            "nom"   => $convocation["nom"],
            "prenom"   => $convocation["prenom"],
            "etatJoueur" => $convocation["etatJoueur"],
            "club" => $convocation["nomClub"],
            "jour"      => $convocation["jour"],
            "adresse"   => $convocation["adresse"],
            "idEquipeAdverse" => $convocation["idEquipeAdverse"]
        ));
    }

    public function convocationsJoueur(string $idJoueur) {
        $convocation = $this->convocation->getConvocations($idJoueur);
        $vue = new Vue("ConvocationJoueur");
        $vue->generer(array("convocationJoueur" => $convocation));
    }
    
    public function convocationsJoueurs() {
        $convocations = $this->convocation->getAllConvocations();
        $vue = new Vue("ConvocPublique");
        $vue->generer(array("convocations" => $convocations));
    }

    public function convocPublique() {
        $vue = new Vue("ConvocPublique");
        $vue->generer(array());
    }

    public function creerConvoc() {
        $vue = new Vue("CreerConvoc");
        $vue->generer(array());
    }
}
?>