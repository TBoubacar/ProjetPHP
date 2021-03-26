<?php
declare(strict_types=1);
require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurConnect.php';
require_once 'Controleur/ControleurConnexion.php';
require_once 'Controleur/ControleurAdmin.php';

require_once 'Controleur/ControleurAdministrateur.php';
require_once 'Controleur/ControleurClub.php';
require_once 'Controleur/ControleurConvocation.php';
require_once 'Controleur/ControleurEquipe.php';
require_once 'Controleur/ControleurJoueur.php';

require_once 'Vue/Vue.php';
/*require_once __DIR__ . '/../Contenu/vendor/autoload.php';
use Acme\ControleurConnexion;
use Acme\ControleurAccueil;
use Acme\Vue;*/

class Routeur {
    private $ctrlAccueil;
    private $ctrlConnect;
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
        $this->ctrlConnect = new ControleurConnect();
        $this->ctrlAdmin = new ControleurAdmin();

        $this->ctrlAdministrateur = new ControleurAdministrateur();
        $this->ctrlClub = new ControleurClub();
        $this->ctrlConvocation= new ControleurConvocation();
        $this->ctrlEquipe= new ControleurEquipe();
        $this->ctrlJoueur= new ControleurJoueur();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])){
                if ($_GET['action'] == 'accueil'){
                    $this->ctrlAccueil->accueil();
                }
                else if ($_GET['action'] == 'connect'){
                    $this->ctrlConnect->connect();
                }

                else if ($_GET['action'] == 'convocPublique') {          #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' DE LA CONVOCATION
                    $this->ctrlConvocation->convocationsValides();
                }

                else if ($_GET['action'] == 'listeJoueurs') {          #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' DE LA CONVOCATION
                    if(isset($_GET['idConvoc'])){
                        $id = $this->getParametre($_GET, 'idConvoc');
                        $this->ctrlConvocation->convocationJoueurs($id);
                    }else{
                        $this->ctrlConvocation->convocationJoueurs(0);
                    }
                }

                else if ($_GET['action'] == 'connexion') {       #DANS LA PAGE DE CONNEXION, ON DOIT OBLIGATOIREMENT AVOIR LES VARIABLES 'login' ET 'passWord'
                    $logAdmin = $this->getParametre($_POST, 'login');
                    $passWord = $this->getParametre($_POST, 'passWord');
                    $this->ctrlConnexion->connexion($logAdmin, $passWord);

                } 

                else if ($_GET['action'] == 'creerConvoc') {       #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' du Joueur POUR LA CONVOCATION
                    $nomClub = $this->getParametre($_GET, 'club');  #ON A DEJA ACCCES À LA VARIABLE Club A CE NIVEAU NORMALEMENT PARCE QU'ON A LES INFORMATIONS SUR UN ADMINISTRATEUR DONT SON CLUB 
                    $this->ctrlConvocation->creerConvoc($nomClub);
                } 

                else if ($_GET['action'] == 'creerConvocation') {  #A FAIRE PAR LE SECRETAIRE
                    #$nomEquipe = $this->getParametre($_GET, 'nomEquipe');     #REFLECHIR AU FAITE D'AJOUTER LE NOM DE L'EQUIPE DANS LA TABLE CONVOCATION_JOUEUR
                    $idConvocation = $this->getParametre($_POST, 'idConvocation');
                    $convocation = $this->ctrlConvocation->getRencontresById($idConvocation);
                    $this->ctrlConvocation->creerConvocation($convocation['adresse'], $convocation['jour'], $convocation['idEquipe']);
                } 

                else if ($_GET['action'] == 'faireConvoc') {       #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' du Joueur POUR LA CONVOCATION
                    $nomClub = $this->getParametre($_GET, 'club');  #ON A DEJA ACCCES À LA VARIABLE Club A CE NIVEAU NORMALEMENT PARCE QU'ON A LES INFORMATIONS SUR UN ADMINISTRATEUR DONT SON CLUB
                    $this->ctrlConvocation->faireConvoc($nomClub);
                } 

                else if ($_GET['action'] == 'faireConvocation') {  #A FAIRE PAR LE SECRETAIRE
                    $idConvocation = $this->getParametre($_GET, 'idConvocation');
                    $tabIdJoueur = $this->getParametre($_GET, 'idJoueurConvoquer');
                    $convocation = $this->ctrlConvocation->getRencontresById($idConvocation);
                    $this->ctrlConvocation->faireConvocation($idConvocation, $tabIdJoueur);
                }
                /*    //Pour une mise à jour dans le futur
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
                } else if ($_GET['action'] == 'convocation') {          #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' DE LA CONVOCATION
                    $idConvocation = $this->getParametre($_GET, "id");
                    $this->ctrlConvocation->convocation($idConvocation);

                } else if ($_GET['action'] == 'afficherAllConvocation') {       #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' du Joueur POUR LA CONVOCATION
                    $this->ctrlConvocation->convocationsJoueurs();
                } else if ($_GET['action'] == 'afficherEquipe') {               #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' DE L'EQUIPE
                    $idEquipe = $this->getParametre($_GET, "id");
                    $this->ctrlEquipe->equipe($idEquipe);
                } else if ($_GET['action'] == 'afficherClubEquipe') {           #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' et 'nom' DU CLUB dont les Equipes sont à afficher
                    $idClub = $this->getParametre($_GET, "id");
                    $this->ctrlEquipe->equipes($idClub);
                } else if ($_GET['action'] == 'afficherJoueur') {               #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' DU JOUEUR
                    $idJoueur = $this->getParametre($_GET, "id");
                    $this->ctrlJoueur->joueur($idJoueur);
                } else if ($_GET['action'] == 'afficherClubJoueur') {           #ON DOIT OBLIGATOIREMENT AVOIR LA VARIABLE 'id' et 'nom' DU CLUB dont les JOUEUR sont à afficher
                    $idClub = $this->getParametre($_GET, "id");
                    $this->ctrlJoueur->joueurs($idClub);
                } */
                else throw new Exception("Action non prise en compte !");
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
