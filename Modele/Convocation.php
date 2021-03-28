<?php
declare(strict_types=1);
require_once 'Modele.php';
/*namespace Acme;
require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\Modele;
*/

class Convocation extends Modele {
    
    /*----DANS LA TABLE CONVOCATION ----*/
    public function getRencontre(string $monIdClub) {
        $monIdClub = intval($monIdClub);
        $sql = "SELECT C.IdConvocation, C.jour, C.adresse, CL.nom AS club, E.nom AS nomEquipeAdverse FROM Convocation C JOIN Equipe E ON C.idEquipeAdverse = E.idEquipe JOIN Club CL ON E.clubId = CL.idClub WHERE CL.idClub != ?";
        $convocation = $this->executeRequete($sql, array($monIdClub));
        if ($convocation->rowCount() > 0)
            return $convocation->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("Pas de Convocation (Match) dans la Base de données !");
    }
    
    public function getRencontreById(string $idConvo) {
        $idConvo = intval($idConvo);
        $sql = "SELECT C.jour, C.adresse, E.idEquipe, CL.nom AS club, E.nom AS nomEquipeAdverse FROM Convocation C JOIN Equipe E ON C.idEquipeAdverse = E.idEquipe JOIN Club CL ON CL.idClub = E.clubId WHERE IdConvocation = ? ";
        $convocation = $this->executeRequete($sql, array($idConvo));
        if ($convocation->rowCount() > 0)
            return $convocation->fetch(PDO::FETCH_ASSOC);
        else throw new Exception("Pas de Convocation (Match) avec l'identifiant ". $idConvo ." dans la Base de données !");
    }
    
    public function getRencontreValide() {
        //$idConvo = intval($idConvo);
        $sql = "SELECT IdConvocation, C.jour as jour, C.adresse, E.idEquipe, E.nom AS nomEquipeAdverse FROM Convocation C JOIN Equipe E ON C.idEquipeAdverse = E.idEquipe WHERE C.valide = ? ";
        $valide = "Valide";
        $convocation = $this->executeRequete($sql, array($valide));
        if ($convocation->rowCount() > 0)
            return $convocation->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("Pas de Convocation (Match) avec l'identifiant ". $idConvo ." dans la Base de données !");
    }

    public function getRencontreValideByIdClub(string $monIdClub) {
        $monIdClub = intval($monIdClub);
        $sql = "SELECT C.IdConvocation, C.jour, C.adresse, E.nom AS nomEquipeAdverse FROM Convocation C JOIN Equipe E ON C.idEquipeAdverse = E.idEquipe JOIN Club CL ON E.clubId = CL.idClub WHERE CL.idClub != ? AND C.valide = ?";
        $convocation = $this->executeRequete($sql, array($monIdClub, "Valide"));
        if ($convocation->rowCount() > 0)
            return $convocation->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("Pas de Convocation (Match) dans la Base de données !");
    }

    public function getRencontreEnCoursByIdClub(string $monIdClub) {
        $monIdClub = intval($monIdClub);
        $sql = "SELECT C.IdConvocation, C.jour, C.adresse, E.nom AS nomEquipeAdverse FROM Convocation C JOIN Equipe E ON C.idEquipeAdverse = E.idEquipe JOIN Club CL ON E.clubId = CL.idClub WHERE CL.idClub != ? AND C.valide = ?";
        $convocation = $this->executeRequete($sql, array($monIdClub, "En cours"));
        if ($convocation->rowCount() > 0)
            return $convocation->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("Pas de Convocation (Match) dans la Base de données !");
    }

    public function getRencontreEnCoursByIdEquipe(string $monIdEquipe) {
        $monIdEquipe = intval($monIdEquipe);
        $sql = "SELECT C.IdConvocation, C.jour, C.adresse, E.nom AS nomEquipeAdverse FROM Convocation C JOIN Equipe E ON C.idEquipeAdverse = E.idEquipe JOIN Club CL ON E.clubId = CL.idClub WHERE E.idEquipe != ? AND C.valide = ?";
        $convocation = $this->executeRequete($sql, array($monIdEquipe, "En cours"));
        if ($convocation->rowCount() > 0)
            return $convocation->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("Pas de Convocation (Match) dans la Base de données !");
    }

    /*------------SUR LA TABLE CONVOCATION-JOUEUR------------*/
    public function getConvocationJoueurs( $idConvocation) {
        $sql = "SELECT J.nom, J.prenom from ConvocationJoueur CJ JOIN Joueur J on J.idJoueur = CJ.idJoueur where CJ.idConvocation = ? ";
        $convocation= $this->executeRequete($sql, array(intval($idConvocation)));
        if ($convocation->rowCount() > 0)
            return $convocation->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("Pas de Convocation (Match) avec l'identifiant ". $idConvocation ." dans la Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR LA CONVOCATION
    


    public function getConvocations(string $idJoueur) {
        $sql = "SELECT C.adresse, C.jour, J.nom, J.prenom, CJ.etatJoueur, CL.nom AS nomClub FROM ConvocationJoueur CJ NATURAL JOIN Joueur J JOIN Convocation C ON CJ.IdConvocation = C.IdConvocation JOIN Club CL ON CL.idClub = J.clubId WHERE CJ.idJoueur = ?";
        $convocations = $this->executeRequete($sql, array(intval($idJoueur)));
        if ($convocations->rowCount() > 0)
            return $convocations->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("Pas de Convocations (Matchs) pour le joueur d'identifiant ". $idJoueur ." dans la Base de données !");
    } #CECI RETOURNE UN TABLEAU CONTENANT LES INFOS SUR TOUS LES CONVOCATIONS D'UN JOUEUR
    
    public function getAllConvocations() {
        $sql = "SELECT C.adresse, C.jour, J.nom, J.prenom, CJ.etatJoueur, E.nom AS nomEquipeAdverse FROM ConvocationJoueur CJ NATURAL JOIN Joueur J JOIN Convocation C ON CJ.IdConvocation = C.IdConvocation JOIN Equipe E ON E.idEquipe = C.idEquipeAdverse";
        $convocations = $this->executeRequete($sql);
        if ($convocations->rowCount() > 0)
            return $convocations->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("Pas de Convocations (Matchs) pour les joueurs dans la Base de données !");
    }
    
    #ACTION DU SECRETAIRE
    public function ajoutConvocation(string $lieu, string $date, string $idEquipeAdverse) {
        $sql = "INSERT INTO `Convocation` (adresse, jour, idEquipeAdverse) VALUES (?, ?, ?)";
        $this->executeRequete($sql, array($lieu, $date, intval($idEquipeAdverse)));
    }
    
    #ACTION DE L'ENTRAINEUR
    public function faireConvocation(string $idConvoc, string $idJoueur) {
        $sql = "INSERT INTO `ConvocationJoueur` (idConvocation, idJoueur, etatJoueur) VALUES (?, ?, ?)";
        $this->executeRequete($sql, array(intval($idConvoc), intval($idJoueur), "P"));
    }

    public function getConvocs(){
        $sql = "SELECT C.IdConvocation, C.jour, C.adresse, E.nom AS nomEquipeAdverse FROM Convocation C JOIN Equipe E ON E.idEquipe = C.idEquipeAdverse";
        $convocation = $this->executeRequete($sql);
        if ($convocation->rowCount() > 0)
            return $convocation->fetchAll(PDO::FETCH_ASSOC);
        else throw new Exception("Pas de Convocation (Match) dans la Base de données !");
    }
}
?>