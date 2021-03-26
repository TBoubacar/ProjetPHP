<?php
declare(strict_types=1);
require_once 'Modele/Administrateur.php';
require_once 'Vue/Vue.php';

class ControleurAdministrateur {
    private $administrateur;
    
    function __construct() {
        $this->administrateur = new Administrateur();
    }
    
    public function administrateurIdClub (string $idClub) {
        $admin = $this->administrateur->getAdministrateurs($idClub);
        $vue = new Vue("Adminstrateurs");     //Pour une mise à jour dans le futur
        $vue->generer(array("administrateurs" => $admin));
    }
    
    public function administrateurId (string $idAdmin) {
        $admin = $this->administrateur->getAdministrateurById($idAdmin);
        
        $nom = $admin["nom"];
        $prenom = $admin["prenom"];
        $poste = $admin["poste"];
        $club = $admin["nomClub"];
        $adresseClub = $admin["adresse"];
        
        $vue = new Vue("Adminstrateur");    //Pour une mise à jour dans le futur
        $vue->generer(array(
            "nom" => $nom,
            "prenom" => $prenom,
            "poste" => $poste,
            "club"  => $club,
            "adresseClub" => $adresseClub
        ));
    }
    
    public function administrateur (string $logAdmin, string $passAdmin) {
        $admin = $this->administrateur->getAdministrateur($logAdmin, $passAdmin);
        
        $nom = $admin["nom"];
        $prenom = $admin["prenom"];
        $poste = $admin["poste"];
        $club = $admin["nomClub"];
        $adresseClub = $admin["adresse"];
        
        $vue = new Vue("Adminstrateur");    //Pour une mise à jour dans le futur
        $vue->generer(array(
            "nom" => $nom,
            "prenom" => $prenom,
            "poste" => $poste,
            "club"  => $club,
            "adresseClub" => $adresseClub
        ));
    }
    
    public function administrateurs() {
        $admin = $this->administrateur->getAllAdministrateur();
        $vue = new Vue("AdminstrateursAll");                        #Affichage de la liste des administrateurs
        $vue->generer(array("administrateurs" => $admin));
    }
}
?>