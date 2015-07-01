<?php

require_once 'Framework/Modele.php';

/**
 * Services liés aux admins
 */
class Admin extends Modele {
	/**
	 * Vérifie q'un admin existe dans la BD
	 *
	 * @param type $login
	 * @param type $mdp
	 * @return type
	 */
	public function connecter($login, $mdp) {
		$sql = "SELECT adm_id from admin where adm_login=? and adm_pwd=?";
		$admin = $this->executerRequete($sql, array($login, $mdp));
		return ($admin->rowCount() == 1);
	}

	public function getAdmin($login, $mdp)
    {
        $sql = "SELECT adm_id as id, adm_login as login, adm_pwd as pwd from admin where adm_login=? and adm_pwd=?";
        $admin = $this->executerRequete($sql, array($login, $mdp));
        if ($admin->rowCount() == 1)
            return $admin->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun admin ne correspond aux identifiants fournis");
    }

    public function ajouterAdmin($login, $mdp) {
        $sql = "INSERT into Admin(adm_login ,adm_pwd) values (?, ?);";
        $this->executerRequete($sql, array($login, $mdp));
    }
}