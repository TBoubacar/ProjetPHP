<?php
declare(strict_types=1);

abstract class Modele {
    private $bdd;
    
    public function getBDD() {
        if ($this->bdd == NULL) {
            $this->bdd = new PDO("mysql:host='localhost';dbname='projetPHPBDD';charset='UTF8'",
                'TBoubacar', 'Bouba@223', array(PDO::ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $this->bdd;
        } else return $this->bdd;
    }
    
    public function executeRequete(string $sql, array $donnees = NULL) {
        if ($donnees == NULL)
            return $this->getBDD()->query($sql);
        else {
            $reqPrep = $this->getBDD()->prepare($sql);
            return $reqPrep->execute($donnees);
        }
    }
}