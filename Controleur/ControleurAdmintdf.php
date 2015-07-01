<?php

require_once 'ControleurSecurise.php';
require_once 'Modele/TDF.php';

class ControleurAdmintdf extends ControleurSecurise {

	private $TDF;

	public function __construct() {
        $this->TDF = new TDF();
    }

    public function index() {
    	$TDFs = $this->TDF->getTDFs();
        $this->genererVue(array('TDFs' => $TDFs));
    }

    public function ajouter(){
        if ($this->requete->existeParametre("nom")) {
            $nom = $this->requete->getParametre("nom");

            $this->TDF->ajouterTDF($nom);
            $TDFs = $this->TDF->getTDFs();
            $this->genererVue(array('TDFs' => $TDFs));
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

    public function supprimer(){
        if ($this->requete->existeParametre("idTDF")) {
            $idTDF = $this->requete->getParametre("idTDF");

            $this->TDF->supprimerTDF($idTDF);
            $TDFs = $this->TDF->getTDFs();
            $this->genererVue(array('TDFs' => $TDFs));
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

}
