<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Admin.php';

/**
 * Contrôleur gérant la connexion au site
 */
class ControleurConnexion extends Controleur
{
    private $admin;

    public function __construct()
    {
        $this->admin = new Admin();
    }

    public function index()
    {
        $this->genererVue();
    }

    public function connecter()
    {
        if ($this->requete->existeParametre("login") && $this->requete->existeParametre("mdp")) {
            $login = $this->requete->getParametre("login");
            $mdp = $this->requete->getParametre("mdp");
            if ($this->admin->connecter($login, $mdp)) {
                $this->accueillirAdmin($login, $mdp);
            }
            else
                $this->genererVue(array('msgErreur' => 'Admin inconnu'),
                        "index");
        }
        else
            throw new Exception("Action impossible : Login ou mot de passe non défini");
    }

    public function deconnecter()
    {
        $this->requete->getSession()->detruire();
        $this->rediriger("accueil");
    }

    private function accueillirAdmin($login, $mdp)
    {
        $admin = $this->admin->getAdmin($login, $mdp);
        $this->requete->getSession()->setAttribut("admin", $admin);
        $this->rediriger("admin");
    }
}