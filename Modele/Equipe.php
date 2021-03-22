<?php
declare(strict_types=1);
// require_once 'Modele.php';
namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Modele;

class Equipe extends Modele {
    
    public function getEquipe(string $idEquipe) {
        $sql = "SELECT * FROM Equipe WHERE idEquipe = ? ";
        $equipe = $this->executeRequete($sql, array($idEquipe));
        if ($equipe->rowCount() > 0)
            return $equipe;
        else throw new Exception("Pas d'Equipe avec l'identifiant ". $idEquipe ." dans la Base de données !");
    } #CECI RENVOI UN TABLEAU CONTENANT LES INFOS SUR L'EQUIPE
    
    public function getEquipes(string $idClub) {
        $sql = "SELECT * FROM Equipe WHERE clubId = ? ";
        $equipes = $this->executeRequete($sql, array($idClub));
        if ($equipes->rowCount() > 0)
            return $equipes;
        else throw new Exception("L'identifiant ". $idClub ." n'existe pas dans notre Base de données !");
    } #CECI RENVOI UN TABLEAU CONTENANT LES INFOS SUR TOUS LES EQUIPES DU CLUB
}
?>