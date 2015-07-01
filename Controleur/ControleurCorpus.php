<?php

require_once 'ControleurPersonnalise.php';
require_once 'Modele/Chercheur.php';
require_once 'Modele/Langue.php';
require_once 'Modele/TDF.php';
require_once 'Modele/Fichier.php';

/**
 * Contrôleur de la page de corpus
 */
class ControleurCorpus extends ControleurPersonnalise {

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
    	$chercheurs = $this->chercheur->getChercheurs();
    	$langues = $this->langue->getLangues();
    	$TDFs = $this->TDF->getTDFs();
        $fichiers = $this->fichier->getFichiers();
        $this->genererVue(array('chercheurs' => $chercheurs, 'langues' => $langues, 'TDFs' => $TDFs, 'fichiers' => $fichiers));
    }

}
