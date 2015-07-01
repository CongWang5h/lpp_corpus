<?php

require_once 'ControleurSecurise.php';
require_once 'Modele/Admin.php';

class ControleurAdminadmin extends ControleurSecurise {

	private $admin;

	public function __construct() {
        $this->admin = new Admin();
    }

    public function index() {
        $this->genererVue();
    }

    public function ajouter(){
    	if ($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp")) {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");

            $this->admin->ajouterAdmin($login, $mdp);
            $this->genererVue();
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }
}
