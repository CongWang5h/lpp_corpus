<?php

require_once 'Framework/Controleur.php';

/**
 * Contrôleur abstrait pour les vues devant afficher les infos admins
 * 
 * @author Baptiste Pesquet
 */
abstract class ControleurPersonnalise extends Controleur
{
    /**
     * Redéfinition permettant d'ajouter les infos clients aux données des vues 
     * 
     * @param type $donneesVue Données dynamiques
     * @param type $action Action associée à la vue
     */
    protected function genererVue($donneesVue = array(), $action = null)
    {
        $admin = null;
        // Si les infos client sont présente dans la session...
        if ($this->requete->getSession()->existeAttribut("admin")) {
            // ... on les récupère ...
            $admin = $this->requete->getSession()->getAttribut("admin");
        }
        // ... et on les ajoute aux données de la vue
        parent::genererVue($donneesVue + array('admin' => $admin), $action);
    }

}