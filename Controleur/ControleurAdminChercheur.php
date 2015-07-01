<?php

require_once 'ControleurSecurise.php';
require_once 'Modele/Chercheur.php';

class ControleurAdminchercheur extends ControleurSecurise {

	private $chercheur;

	public function __construct() {
        $this->chercheur = new Chercheur();
    }

    public function index() {
    	$chercheurs = $this->chercheur->getChercheurs();
        $this->genererVue(array('chercheurs' => $chercheurs));
    }

    public function ajouter(){
    	if ($this->requete->existeParametre("nom") && $this->requete->existeParametre("prenom")) {
            $nom = $this->requete->getParametre("nom");
            $prenom = $this->requete->getParametre("prenom");

            $this->chercheur->ajouterChercheur($nom, $prenom);
    		$chercheurs = $this->chercheur->getChercheurs();
        	$this->genererVue(array('chercheurs' => $chercheurs));
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

    public function supprimer(){
    	if ($this->requete->existeParametre("idChr")) {
            $idChr = $this->requete->getParametre("idChr");

            $this->chercheur->supprimerChercheur($idChr);
			$chercheurs = $this->chercheur->getChercheurs();
        	$this->genererVue(array('chercheurs' => $chercheurs));
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

}

