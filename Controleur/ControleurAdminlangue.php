<?php

require_once 'ControleurSecurise.php';
require_once 'Modele/Langue.php';

class ControleurAdminlangue extends ControleurSecurise {

	private $langue;

	public function __construct() {
        $this->langue = new Langue();
    }

    public function index() {
    	$langues = $this->langue->getLangues();
        $this->genererVue(array('langues' => $langues));
    }

    public function ajouter(){
        if ($this->requete->existeParametre("nom")) {
            $nom = $this->requete->getParametre("nom");

            $this->langue->ajouterLangue($nom);
            $langues = $this->langue->getLangues();
            $this->genererVue(array('langues' => $langues));
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

    public function supprimer(){
        if ($this->requete->existeParametre("idLan")) {
            $idLan = $this->requete->getParametre("idLan");

            $this->langue->supprimerLangue($idLan);
            $langues = $this->langue->getLangues();
            $this->genererVue(array('langues' => $langues));
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

}
