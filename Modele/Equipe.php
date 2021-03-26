<?php
declare(strict_types=1);
require_once 'Modele.php';
/*namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Modele;
*/

class Equipe extends Modele {
    #PAS TERMINER, REFLECHIR AU FAITES DE CRÉER DEUX TABLES : UN POUR L'ENSEMBLE DES JOUEURS PRESENTS ET L'AUTRES POUR LES NON-PRESENTS
    #PENSER A CREER LA TABLE EFFECTIF_DISPO ET EFFECTIF_NONDIPO VU QU'ELLES NE SONT PAS ENCORE CRÉER
    
    public function getEquipe(string $idEquipe) {       #ON VEUT AUSSI AVOIR LA LISTE DES JOUEURS DISPO OU NON DE L'EQUIPE
        $idEquipe = intval($idEquipe);
        $sql = "SELECT E.nom, C.nom AS nomClub FROM Equipe E JOIN Club C ON E.clubId = C.idClub WHERE idEquipe = ? ";
        $equipe = $this->executeRequete($sql, array($idEquipe));
        if ($equipe->rowCount() > 0)
            return $equipe->fetchAll();
        else throw new Exception("Pas d'Equipe avec l'identifiant ". $idEquipe ." dans la Base de données !");
    } #CECI RENVOI UN TABLEAU CONTENANT LES INFOS SUR L'EQUIPE
    
    public function getEquipes(string $idClub) {
        $idClub = intval($idClub);
        $sql = "SELECT E.nom, C.nom AS nomClub FROM Equipe E JOIN Club C ON E.clubId = C.idClub WHERE E.clubId = ? ";
        $equipes = $this->executeRequete($sql, array($idClub));
        if ($equipes->rowCount() > 0)
            return $equipes->fetchAll();
        else throw new Exception("L'identifiant ". $idClub ." n'existe pas dans notre Base de données !");
    } #CECI RENVOI UN TABLEAU CONTENANT LES INFOS SUR TOUS LES EQUIPES DU CLUB
}
?>