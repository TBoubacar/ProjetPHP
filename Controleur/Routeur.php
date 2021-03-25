<?php
declare(strict_types=1);
require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurConnexion.php';
require_once 'Controleur/ControleurAdmin.php';

require_once 'Controleur/ControleurAdministrateur.php';
require_once 'Controleur/ControleurClub.php';
require_once 'Controleur/ControleurConvocation.php';
require_once 'Controleur/ControleurEquipe.php';
require_once 'Controleur/ControleurJoueur.php';
require_once 'Controleur/ControleurRencontre.php';

require_once 'Vue/Vue.php';
/*require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\ControleurConnexion;
use Acme\ControleurAccueil;
use Acme\Vue;*/

class Routeur {
    private $ctrlAccueil;
    private $ctrlConnexion;
    private $ctrlAdministrateur;
    private $ctrlClub;
    private $ctrlConvocation;
    private $ctrlEquipe;
    private $ctrlJoueur;
    private $ctrlRencontre;

    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlConnexion = new ControleurConnexion();
        $this->ctrlAdministrateur = new ControleurAdministrateur();
        $this->ctrlClub = new ControleurClub();
        $this->ctrlConvocation= new ControleurConvocation();
        $this->ctrlEquipe= new ControleurEquipe();
        $this->ctrlJoueur= new ControleurJoueur();
        $this->ctrlRencontre = new ControleurRencontre ();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
			if (isset($_GET['action'])){
				if ($_GET['action'] == 'connexion'){
					$this->ctrlConnexion->connexion();
				}
				else if($_GET['action'] == 'admin'){
				}
                /*
                if ($_GET['action'] == 'connexion') {       #DANS LA PAGE DE CONNEXION, ON DOIT OBLIGATOIREMENT AVOIR LES VARIABLES 'login' ET 'passWord'
                    $logAdmin = $this->getParametre($_GET, "login");
                    $passWord = $this->getParametre($_GET, "passWord");
                    $this->ctrlConnexion->connexion($logAdmin, $passWord);
                }*/ 
                else if ($_GET['action'] == 'afficherAdministrateur') {       #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' DE L'ADMINISTRATEUR
                    $idAdmin = $this->getParametre($_GET, "id");
                    $this->ctrlAdministrateur->administrateurId($idAdmin);
                } else if ($_GET['action'] == 'afficherClubAdministrateur') {   #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' du Club DE L'ADMINISTRATEUR
                    $idClubAdmin = $this->getParametre($_GET, "id");
                    $this->ctrlAdministrateur->administrateurIdClub($idClubAdmin);
                } else if ($_GET['action'] == 'afficherAllAdministrateur') {
                    $this->ctrlAdministrateur->administrateurs();
                } else if ($_GET['action'] == 'afficherClub') {                 #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' DU CLUB
                    $idClub = $this->getParametre($_GET, "id");
                    $this->ctrlClub->club($idClub);
                } else if ($_GET['action'] == 'afficherAllClub') {
                    $this->ctrlClub->clubs();
                } else if ($_GET['action'] == 'afficherConvocation') {          #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' DE LA CONVOCATION
                    $idConvocation = $this->getParametre($_GET, "id");
                    $this->ctrlConvocation->convocation($idConvocation);
                } else if ($_GET['action'] == 'afficherAllConvocation') {       #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' du Joueur POUR LA CONVOCATION
                    $idJoueur = $this->getParametre($_GET, "id");
                    $this->ctrlConvocation->convocations($idJoueur);
                } else if ($_GET['action'] == 'afficherEquipe') {               #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' DE L'EQUIPE
                    $idEquipe = $this->getParametre($_GET, "id");
                    $this->ctrlEquipe->equipe($idEquipe);
                } else if ($_GET['action'] == 'afficherClubEquipe') {           #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' et 'nom' DU CLUB dont les Equipes sont à afficher
                    $idClub = $this->getParametre($_GET, "id");
                    $nomClub = $this->getParametre($_GET, "nom");
                    $this->ctrlEquipe->equipes($idClub, $nomClub);
                } else if ($_GET['action'] == 'afficherJoueur') {               #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' DU JOUEUR
                    $idJoueur = $this->getParametre($_GET, "id");
                    $this->ctrlJoueur->joueur($idJoueur);
                } else if ($_GET['action'] == 'afficherClubJoueur') {           #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' et 'nom' DU CLUB dont les JOUEUR sont à afficher
                    $idClub = $this->getParametre($_GET, "id");
                    $nomClub = $this->getParametre($_GET, "nom");
                    $this->ctrlJoueur->joueurs($idClub, $nomClub);
                } else if ($_GET['action'] == 'afficherRencontre') {           #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' DE LA RENCONTRE
                    $idRencontre = $this->getParametre($_GET, "id");
                    $this->ctrlRencontre->rencontre($idRencontre);
                } else if ($_GET['action'] == 'afficherEquipeRencontre') {     #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' De l'Equipe dont LES RENCONTRES sont à Afficher
                    $idEquipe = $this->getParametre($_GET, "id");
                    $this->ctrlRencontre->rencontres($idEquipe);
                } else throw new Exception("Action non prise en compte !");
            }
            else{
                // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
    
    private function getParametre(array $tableau, string $parametre) {
        if (isset($tableau[$parametre]))
            return $tableau[$parametre];
        else throw new Exception("Paramètre '". $parametre ."' non reconnue !");
    }

}
