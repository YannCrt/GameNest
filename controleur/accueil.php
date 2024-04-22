<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.photo.inc.php";

// creation du menu burger
$menuJeu = array();
$menuJeu[] = Array("url"=>"./?action=recherche&critere=nom","label"=>"Recherche par nom");
$menuJeu[] = Array("url"=>"./?action=recherche&critere=adresse","label"=>"Recherche par adresse");
$menuJeu[] = Array("url"=>"./?action=recherche&critere=type","label"=>"Recherche par type de cuisine");
$menuJeu[] = Array("url"=>"./?action=recherche&critere=multi","label"=>"Recherche multicritère");


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Accueil - Resto.fr";
include "$racine/vue/entete.html.php";

include "$racine/vue/vueAccueil.php";
include "$racine/vue/pied.html.php";


?>