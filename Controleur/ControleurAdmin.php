<?php

require_once 'ControleurSecurise.php';
require_once 'Modele/Chercheur.php';
require_once 'Modele/Langue.php';
require_once 'Modele/TDF.php';

class ControleurAdmin extends ControleurSecurise {

	private $chercheur;
	private $langue;
	private $TDF;

	public function __construct() {
        $this->chercheur = new Chercheur();
        $this->langue = new Langue();
        $this->TDF = new TDF();
    }
    /**
     * Affiche la page de corpus
     */
    public function index() {
    	$chercheurs = $this->chercheur->getChercheurs();
    	$langues = $this->langue->getLangues();
    	$TDFs = $this->TDF->getTDFs();
        $this->genererVue(array('chercheurs' => $chercheurs, 'langues' => $langues, 'TDFs' => $TDFs));
    }

}

