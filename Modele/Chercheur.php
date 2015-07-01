<?php

require_once 'Framework/Modele.php';

/**
 * Services liés aux Chercheurs
 */
class Chercheur extends Modele
{
    /**
     * Renvoie la liste de tous les Chercheurs
     * 
     * @return type
     */
    public function getChercheurs()
    {
        $sql = "SELECT chr_id as id, chr_nom as nom, chr_prenom as prenom 
                from Chercheur";
        return $this->executerRequete($sql);
    }

    public function ajouterChercheur($prenom, $nom) {
        $sql = "INSERT into Chercheur(chr_prenom ,chr_nom) values (?, ?);";
        $this->executerRequete($sql, array($prenom, $nom));
    }

    public function supprimerChercheur($id) {
        $sql = "DELETE FROM Chercheur WHERE chr_id=?;";
        $this->executerRequete($sql, array($id));
    }
}

