<?php

require_once 'Framework/Modele.php';

/**
 * Services liés aux TDFs
 */
class TDF extends Modele
{
    /**
     * Renvoie la liste de tous les TDFs
     * 
     * @return type
     */
    public function getTDFs()
    {
        $sql = "select TDF_id as id, TDF_nom as nom " .
            "from TDF";
        return $this->executerRequete($sql);
    }

    public function ajouterTDF($nom) {
        $sql = "INSERT into TDF(TDF_nom) values (?);";
        $this->executerRequete($sql, array($nom));
    }

    public function supprimerTDF($id) {
        $sql = "DELETE FROM TDF WHERE TDF_id=?;";
        $this->executerRequete($sql, array($id));
    }
}

