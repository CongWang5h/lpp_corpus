<?php

require_once 'ControleurSecurise.php';
require_once 'Modele/Chercheur.php';
require_once 'Modele/Langue.php';
require_once 'Modele/TDF.php';
require_once 'Modele/Fichier.php';


class ControleurAdminfichier extends ControleurSecurise {

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
    
    public function index() {
    	$chercheurs = $this->chercheur->getChercheurs();
    	$langues = $this->langue->getLangues();
    	$TDFs = $this->TDF->getTDFs();
        $this->genererVue(array('chercheurs' => $chercheurs, 'langues' => $langues, 'TDFs' => $TDFs));
    }

    public function uploader() {
        if($this->requete->existeParametre("titre") && $this->requete->existeParametre("idChr") &&
            $this->requete->existeParametre("idLan") && $this->requete->existeParametre("idTDF") && 
            $this->requete->existeParametre("descriptif") && $this->requete->existeParametre("localisation"))
        {

            $titre = $this->requete->getParametre("titre");
            $idChr = $this->requete->getParametre("idChr");
            $idLan = $this->requete->getParametre("idLan");
            $idTDF = $this->requete->getParametre("idTDF");
            $descriptif = $this->requete->getParametre("descriptif");
            $localisation = $this->requete->getParametre("localisation");
            $adrFichier = $_FILES['fichierUpload']['name'];
            $adrExtrait = $_FILES['extraitUpload']['name'];

            $target_dir_fichier = ROOT."Fichier/Uploads/";
            $target_dir_extrait = ROOT."Fichier/Extraits/";

            $target_file_fichier = $target_dir_fichier . basename($_FILES["fichierUpload"]["name"]);
            $target_file_extrait = $target_dir_extrait . basename($_FILES["extraitUpload"]["name"]);

            $fichierType = pathinfo($target_file_fichier,PATHINFO_EXTENSION);
            $extraitType = pathinfo($target_file_extrait,PATHINFO_EXTENSION);


            if (file_exists($target_file_fichier)) {
                throw new Exception("Fichier déjà existe");
            }
            if (file_exists($target_file_fichier)) {
                throw new Exception("Extrait déjà existe");
            }

            if($extraitType != "wav" && $extraitType != "mp4") {
                throw new Exception("Le format d'extrait soit wav, soit mp4");
            }

            if (move_uploaded_file($_FILES["fichierUpload"]["tmp_name"], $target_file_fichier)) {
                if (move_uploaded_file($_FILES["extraitUpload"]["tmp_name"], $target_file_extrait)) {
                    $this->fichier->uploaderFichier($titre, $idChr,$idLan, $idTDF,$descriptif,$localisation,$adrFichier,$adrExtrait);
                    $this->index();
                } else {
                    throw new Exception("Perdu");
                } 
            }

        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

}
