<?php
declare(strict_types=1);
require_once 'Modele/Convocation.php';
require_once 'Modele/Equipe.php';
require_once 'Modele/Joueur.php';
require_once 'Modele/Club.php';
require_once 'Vue/Vue.php';

class ControleurConvocation {
    private $convocation;
    
    function __construct() {
        $this->convocation = new Convocation();
    }
    
    public function getRencontres(string $idClub) {
        $rencontre = $this->convocation->getRencontre($idClub);
        if (count($rencontre) > 0)
            return $rencontre;
        else throw new Exception ("Pas de match programmé !");
    }
    
    public function getRencontresById(string $idConvoc) {
        $rencontre = $this->convocation->getRencontreById($idConvoc);
        if (count($rencontre) > 0)
            return $rencontre;
        else throw new Exception ("Pas de match programmé !");
    }
    
    /*----- POUR LA TABLE CONVOCATION_JOUEUR------*/
    public function convocationJoueur(string $idConvoc) {
        $convocation = $this->convocation->getConvocation($idConvoc);
        $vue = new Vue("Convocation");    //Pour une mise à jour dans le futur
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
        $vue = new Vue("ConvocationJoueur");    //Pour une mise à jour dans le futur
        $vue->generer(array("convocationJoueur" => $convocation));
    }
    
    public function convocationsJoueurs() {
        $convocations = $this->convocation->getAllConvocations();
        $vue = new Vue("ConvocPublique");
        $vue->generer(array("convocations" => $convocations));
    }

    public function creerConvoc(string $nomClub) {
        $club = new Club();
        $club = $club->getClubByName($nomClub);
        $equipe = new Equipe();
        $equipes = $equipe->getEquipes($club["idClub"]);
        
        $rencontres = $this->getRencontres($club["idClub"]);    #L'ensemble des matchs programmés dans lesquels on n'est pas notre propre adverse
        $vue = new Vue("CreerConvoc");
        $vue->generer(array("rencontres" => $rencontres, "equipes" => $equipes));
    }
    
    public function creerConvocation (string $lieu, string $date, string $idEquipeAdverse) {
        $this->convocation->ajoutConvocation($lieu, $date, $idEquipeAdverse);
    }
    
    public function faireConvoc(string $nomClub) {
        $club = new Club();
        $club = $club->getClubByName($nomClub);
        $joueurs = new Joueur();
        $joueurs = $joueurs->getJoueurs($club["idClub"]);
        
        $rencontres = $this->getRencontres($club["idClub"]);    #L'ensemble des matchs programmés dans lesquels on n'est pas notre propre adverse
        $vue = new Vue("FaireConvoc");
        $vue->generer(array("rencontres" => $rencontres, "joueurs" => $joueurs));
    }
    
    public function faireConvocation (string $idConvocation, array $tabIdJoueur) {
        foreach ($tabIdJoueur as $idJoueur)
            $this->convocation->faireConvocation($idConvocation, $idJoueur);
    }
}
?>