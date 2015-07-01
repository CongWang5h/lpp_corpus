<?php

// Contrôleur frontal : instancie un routeur pour traiter la requête entrante

define('ROOT',dirname(__FILE__).'/');
require 'Framework/Routeur.php';


$routeur = new Routeur();
$routeur->routerRequete();

