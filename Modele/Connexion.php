<?php
declare(strict_types=1);
require_once 'Modele.php';
require_once 'Administrateur.php';

class Connexion extends Modele {
    private $profil;
    function __construct() {
        $this->profil = new Administrateur();
    }

    public function verification(string $logAdmin, string $passWord) {
        $admin = $this->profil->getAdministrateur($logAdmin, $passWord);
        if ($admin->rowCount() >= 1)
            return $admin;
        else throw new Exception("Erreur de connexion pour l'utilisateur '". $logAdmin . "' !");
    }
}