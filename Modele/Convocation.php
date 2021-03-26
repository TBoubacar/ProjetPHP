<?php
declare(strict_types=1);
require_once 'Modele.php';
/*namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Modele;
*/

class Convocation extends Modele {
    
    public function getconvoc() {
        $sql = "SELECT * FROM Convocation";
        $convocation = $this->executeRequete($sql);
        if ($convocation->rowCount() > 0)
            return $convocation->fetchAll();
        else throw new Exception("Pas de Convocation (Match) dans la Base de données !");
    }
    
    public function getconvocById(string $idConvo) {
        $idConvo = intval($idConvo);
        $sql = "SELECT jour, lieu AS adresse FROM Convocation WHERE IdConvocation = ? ";
        $convocation = $this->executeRequete($sql, array(intval($idConvo)));
        if ($convocation->rowCount() > 0)
            return $convocation->fetchAll();
        else throw new Exception("Pas de Convocation (Match) avec l'identifiant ". $idConvo ." dans la Base de données !");
    }
    
    /*------------SUR LA TABLE CONVOCATION-JOUEUR------------*/
    public function getConvocation(string $idConvocation) {
        $sql = "SELECT C.lieu AS adresse, C.jour, J.nom, J.prenom, CJ.etatJoueur, CL.nom AS nomClub, C.idEquipeAdverse FROM ConvocationJoueur CJ NATURAL JOIN Joueur J JOIN Convocation C ON CJ.IdConvocation = C.IdConvocation JOIN Club CL ON CL.idClub = J.clubId WHERE CJ.idConvocation = ? ";
        $convocation= $this->executeRequete($sql, array(intval($idConvocation)));
        if ($convocation->rowCount() > 0)
            return $convocation->fetchAll();
        else throw new Exception("Pas de Convocation (Match) avec l'identifiant ". $idConvocation ." dans la Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR LA CONVOCATION
    
    public function getConvocations(string $idJoueur) {
        $sql = "SELECT C.adresse, C.jour, J.nom, J.prenom, CJ.etatJoueur, CL.nom AS nomClub FROM ConvocationJoueur CJ NATURAL JOIN Joueur J JOIN Convocation C ON CJ.IdConvocation = C.IdConvocation JOIN Club CL ON CL.idClub = J.clubId WHERE CJ.idJoueur = ?";
        $convocations = $this->executeRequete($sql, array(intval($idJoueur)));
        if ($convocations->rowCount() > 0)
            return $convocations->fetchAll();
        else throw new Exception("Pas de Convocations (Matchs) pour le joueur d'identifiant ". $idJoueur ." dans la Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR TOUS LES CONVOCATIONS D'UN JOUEUR
    
    public function getAllConvocations() {
        $sql = "SELECT C.adresse, C.jour, J.nom, J.prenom, CJ.etatJoueur, E.nom AS nomEquipeAdverse FROM ConvocationJoueur CJ NATURAL JOIN Joueur J JOIN Convocation C ON CJ.IdConvocation = C.IdConvocation JOIN Equipe E ON E.idEquipe = C.idEquipeAdverse";
        $convocations = $this->executeRequete($sql);
        if ($convocations->rowCount() > 0)
            return $convocations->fetchAll();
        else throw new Exception("Pas de Convocations (Matchs) pour les joueurs dans la Base de données !");
    }
}
?>