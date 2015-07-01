<?php

require_once 'ControleurPersonnalise.php';
require_once 'Modele/Chercheur.php';
require_once 'Modele/Langue.php';
require_once 'Modele/TDF.php';
require_once 'Modele/Fichier.php';

/**
 * Contrôleur de la page de corpus
 */
class ControleurRechercher extends ControleurPersonnalise {

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
        $fichiersTrouves = null;
        if($this->requete->existeParametre("motCle") && $this->requete->existeParametre("idChr") &&
            $this->requete->existeParametre("idLan") && $this->requete->existeParametre("idTDF"))
        {
            $motCle = $this->requete->getParametre("motCle");
            $idChr = $this->requete->getParametre("idChr");
            $idLan = $this->requete->getParametre("idLan");
            $idTDF = $this->requete->getParametre("idTDF");

            $fichiersTrouves = $this->fichier->rechercherFichiers($motCle, $idChr,$idLan,$idTDF);
        }elseif($this->requete->existeParametre("idChr") &&
            $this->requete->existeParametre("idLan") && $this->requete->existeParametre("idTDF"))
        {
            $motCle = 0;
            $idChr = $this->requete->getParametre("idChr");
            $idLan = $this->requete->getParametre("idLan");
            $idTDF = $this->requete->getParametre("idTDF");

            $fichiersTrouves = $this->fichier->rechercherFichiers($motCle, $idChr, $idLan, $idTDF);
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");

    	$chercheurs = $this->chercheur->getChercheurs();
    	$langues = $this->langue->getLangues();
    	$TDFs = $this->TDF->getTDFs();
        $fichiers = $this->fichier->getFichiers();
        $this->genererVue(array('chercheurs' => $chercheurs, 'langues' => $langues, 'TDFs' => $TDFs, 'fichiers' => $fichiers, 'fichiersTrouves' => $fichiersTrouves));
    }

}
