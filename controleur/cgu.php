<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}


// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

// traitement si necessaire des donnees recuperees
// creation du menu burger
$menuJeu = array();
$menuJeu[] = Array("url"=>"#top","label"=>"Conditions générales");
$menuJeu[] = Array("url"=>"#accpt","label"=>"Acceptation");
$menuJeu[] = Array("url"=>"#desc","label"=>"Description");
$menuJeu[] = Array("url"=>"#fonc","label"=>"Fonctionnalités");
$menuJeu[] = Array("url"=>"#mode","label"=>"Modération");
$menuJeu[] = Array("url"=>"#sanc","label"=>"Sanctions");
$menuJeu[] = Array("url"=>"#moti","label"=>"Motifs");
$menuJeu[] = Array("url"=>"#foncr","label"=>"Restaurateurs");
$menuJeu[] = Array("url"=>"#gene","label"=>"Généralités");
$menuJeu[] = Array("url"=>"#prot","label"=>"Données personnelles");
$menuJeu[] = Array("url"=>"#droi","label"=>"Droits d'accès");
$menuJeu[] = Array("url"=>"#util","label"=>"Données personnelles");
$menuJeu[] = Array("url"=>"#bila","label"=>"Bilan des fonctionnalités");



// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "GameNest - Conditions générales d'utilisations";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueCgu.php";
include "$racine/vue/pied.html.php";


?>