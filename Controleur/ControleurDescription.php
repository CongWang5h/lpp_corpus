<?php

require_once 'ControleurPersonnalise.php';
require_once 'Modele/Chercheur.php';
require_once 'Modele/Langue.php';
require_once 'Modele/TDF.php';
require_once 'Modele/Fichier.php';

/**
 * Contrôleur de la page de corpus
 */
class ControleurDescription extends ControleurPersonnalise {

	private $chercheur;
	private $langue;
	private $TDF;
    private $fichier;

	public function __construct() {
        $this->chercheur = new Chercheur();
        $this->langue = new Langue();
        $this->TDF = new TDF();
        $this->fichier = new Fichier();
    }

    /**
     * Affiche la page de corpus
     */
    
    public function index() {
        $fic = null;
        if ($this->requete->existeParametre("id")) {
            $idFic = $this->requete->getParametre("id");
            $fic = $this->fichier->getFichierParId($idFic);
            $this->genererVue(array('fic' => $fic));
        }
        else
            throw new Exception("Action impossible : aucun fichier défini");
    }

}