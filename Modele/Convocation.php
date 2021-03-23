<?php
declare(strict_types=1);
require_once 'Modele.php';
/*namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Modele;
*/

class Convocation extends Modele {
    
    public function getConvocation(string $idConvocation) {
        $sql = "SELECT C.lieu AS adresse, C.jour, J.nom, J.prenom, E.nom AS nomEquipe FROM Convocation C NATURAL JOIN Joueur J JOIN Equipe E ON E.idEquipe = C.idEquipe WHERE C.idConvocation = ? ";
        $convocation= $this->executeRequete($sql, array(intval($idConvocation)));
        if ($convocation->rowCount() > 0)
            return $convocation;
        else throw new Exception("Pas de Convocation (Match) avec l'identifiant ". $idConvocation ." dans la Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR LA CONVOCATION
    
    public function getConvocations(string $idJoueur) {
        $sql = "SELECT C.lieu AS adresse, C.jour, J.nom, J.prenom, E.nom AS nomEquipe FROM Convocation C NATURAL JOIN Joueur J JOIN Equipe E ON E.idEquipe = C.idEquipe WHERE idJoueur = ?";
        $convocations = $this->executeRequete($sql, array(intval($idJoueur)));
        if ($convocations->rowCount() > 0)
            return $convocations;
        else throw new Exception("Pas de Convocations (Matchs) pour le joueur d'identifiant ". $idJoueur ." dans la Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR TOUS LES CONVOCATIONS D'UN JOUEUR
}
?>