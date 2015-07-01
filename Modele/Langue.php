<?php

require_once 'Framework/Modele.php';

/**
 * Services liés aux Langues
 */
class Langue extends Modele
{
    /**
     * Renvoie la liste de tous les Langues
     * 
     * @return type
     */
    public function getLangues()
    {
        $sql = "SELECT lan_id as id, lan_nom as nom from Langue";
        return $this->executerRequete($sql);
    }

    public function ajouterLangue($nom) {
        $sql = "INSERT into Langue(lan_nom) values (?);";
        $this->executerRequete($sql, array($nom));
    }

    public function supprimerLangue($id) {
        $sql = "DELETE FROM Langue WHERE lan_id=?;";
        $this->executerRequete($sql, array($id));
    }
}

