<?php
declare(strict_types=1);
//namespace Acme;

abstract class Modele {
    private $bdd;
    

    public function executeRequete($sql, $params = null) {

        if ($params == null) {
            $resultat = $this->getBdd()->query($sql); // exécution directe
        }
        else {
            $resultat = $this->getBdd()->prepare($sql);  // requête préparée
            $resultat->execute($params);
        }
        return $resultat;
    }


    public function getBDD() {
        if ($this->bdd == null) {
            /*
             $this->bdd = new PDO('mysql:host=localhost;dbname=projetPHP;charset=utf8',
                'TBoubacar', 'Bouba@223',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
             */
            $this->bdd = new PDO('mysql:host=localhost;dbname=projetPHP;charset=utf8',
                'etudiant', 'etudiant',
                 array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } 
        return $this->bdd;
    }
    
    
}