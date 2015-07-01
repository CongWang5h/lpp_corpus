<?php

require_once 'Framework/Modele.php';

/**
 * Services liés aux Fichiers
 */
class Fichier extends Modele
{
    /**
     * Renvoie la liste de tous les Langues
     * 
     * @return type
     */

    private $sql = "SELECT fic_id as id,fic_titre as titre, chr_prenom, chr_nom, lan_nom as lan, TDF_nom as tdf,
                        fic_adr as fichier,fic_ext_adr as fic_ext,fic_description as description,fic_localisation as localisation
                from fichier fic,chercheur chr,langue lan,TDF
                where fic.lan_id = lan.lan_id
                and fic.chr_id = chr.chr_id
                and fic.TDF_id = TDF.TDF_id";

    public function getFichiers()
    {
        $sql = "SELECT fic_id as id,fic_titre as titre, chr_prenom, chr_nom, lan_nom as lan, TDF_nom as tdf,
                        fic_adr as fichier
                from fichier fic,chercheur chr,langue lan,TDF
                where fic.lan_id = lan.lan_id
                and fic.chr_id = chr.chr_id
                and fic.TDF_id = TDF.TDF_id";
        return $this->executerRequete($sql);
    }

    public function getFichierParId($idfic)
    {
        $sql = "SELECT fic_id as id,fic_titre as titre, chr_prenom, chr_nom, lan_nom as lan, TDF_nom as tdf,
                        fic_adr as fichier,fic_ext_adr as fic_ext,fic_description as description,fic_localisation as localisation
                from fichier fic,chercheur chr,langue lan,TDF
                where fic.lan_id = lan.lan_id
                and fic.chr_id = chr.chr_id
                and fic.TDF_id = TDF.TDF_id
                and fic.fic_id = ?";
        $fichier = $this->executerRequete($sql, array($idfic));
        if ($fichier->rowCount() == 1)
            return $fichier->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun fichier ne correspond 0 l4identifiqnt fourni");
    }

    public function uploaderFichier($titre, $idChr, $idLan, $idTDF, $descriptif, $localisation, $adrFichier, $adrExtrait){
        $sql = "INSERT into Fichier(fic_titre ,chr_id, lan_id, TDF_id, fic_description, fic_localisation, fic_adr, fic_ext_adr) values (?, ?, ?, ?, ?, ?, ?, ?);";
        $this->executerRequete($sql, array($titre, $idChr, $idLan, $idTDF, $descriptif, $localisation, $adrFichier, $adrExtrait));
    }

    public function rechercherFichiers($motCle ,$idChr, $idLan, $idTDF){
        $findMot = "";
        $findChr = "";
        $findLan = "";
        $findTDF = "";

        if(is_string($motCle))$findMot = " and fic.fic_id in (select fic_id from fichier where fic.fic_titre like '%$motCle%' or fic.fic_description like '%$motCle%')";
        if($idChr != 0)$findChr = " and fic.chr_id = $idChr";
        if($idLan != 0)$findLan = " and fic.lan_id = $idLan";
        if($idTDF != 0)$findLan = " and fic.TDF_id = $idTDF";

        $sql = $this->sql.$findMot.$findLan.$findTDF.$findChr;

        //throw new Exception($sql);

        return $this->executerRequete($sql);
    }

}

