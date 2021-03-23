<?php
declare(strict_types=1);
require_once 'Modele.php';
/*namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Modele;
*/

class Administrateur extends Modele {
    
    public function getAdministrateurById(string $idAdmin) {
        $idAdmin = intval($idAdmin);
        $sql = "SELECT A.idAmin, A.poste, A.nom, A.prenom, A.categorie, C.nom AS nomClub, C.adresse FROM Administrateur A JOIN Club C ON A.clubId = C.idClub WHERE A.idAdmin= ?";
        $administrateur = $this->executeRequete($sql, array($idAdmin));
        if ($administrateur->rowCount() > 0)
            return $administrateur;
        else throw new Exception("L'Administrateur avec demandé n'existe pas dans la Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR L'ADMINISTRATEUR
    
    public function getAdministrateur(string $logAdmin, string $passAdmin) {
        $sql = "SELECT A.idAmin, A.poste, A.nom, A.prenom, A.categorie, C.nom AS nomClub, C.adresse FROM Administrateur A JOIN Club C ON A.clubId = C.idClub WHERE A.login = ? AND A.passWord = ?";
        $administrateur = $this->executeRequete($sql, array($logAdmin, $passAdmin));
        if ($administrateur->rowCount() > 0)
            return $administrateur;
        else throw new Exception("Erreur de connexion de l'Administrateur avec l'identifiant ". $logAdmin ." dans la Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR L'ADMINISTRATEUR
    
    public function getAdministrateurs(string $idClub) {
        $idClub = intval($idClub);
        $sql = "SELECT * FROM Administrateur WHERE clubId = ?";
        $administrateurs = $this->executeRequete($sql, array($idClub));
        if ($administrateurs->rowCount() > 0)
            return $administrateurs;
        else throw new Exception("L'identifiant ". $idClub ." n'existe pas dans notre Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR TOUS LES ADMINISTRATEURS DU CLUB
    
    public function getAllAdministrateur() {
        $sql = "SELECT * FROM Administrateur";
        $administrateurs = $this->executeRequete($sql);
        return $administrateurs;
    }
}
?>