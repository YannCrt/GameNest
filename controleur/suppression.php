<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";
include_once "$racine/modele/bd.utilisateur.inc.php";


// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["mailU"])) {
    $mailU = $_POST["mailU"];

    // Appel à la fonction de suppression
    if (deleteAccount($mailU)) {
        echo "L'utilisateur a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression de l'utilisateur.";
    }
}
// traitement si necessaire des donnees recuperees    

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "authentification";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueSuppression.php";
include "$racine/vue/pied.html.php";


?>