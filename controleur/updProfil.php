<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
include_once "$racine/modele/authentification.inc.php";
include_once "$racine/modele/bd.utilisateur.inc.php";

// creation du menu burger
$menuJeu = array();
$menuJeu[] = Array("url" => "./?action=profil", "label" => "Consulter mon profil");
$menuJeu[] = Array("url" => "./?action=updProfil", "label" => "Modifier mon profil");

// init messages 
$messageMdp = "";

// recuperation des donnees GET, POST, et SESSION
if (isLoggedOn()) {
    $mailU = getMailULoggedOn();
    $util = getUtilisateurByMailU($mailU);

        // traitement si necessaire des donnees recuperees

    if (isset($_POST["pseudoU"])){
        $pseudoU = $_POST["pseudoU"];
        if ($pseudoU!=""){
            updtPseudoUtilisateur($mailU, $pseudoU);
        }
    }
    
    if (isset($_POST["mdpU"]) && isset($_POST["mdpU2"])) {
        if ($_POST["mdpU"] != "") {
            if (($_POST["mdpU"] == $_POST["mdpU2"])) {
                updtMdpUtilisateur($mailU, $_POST["mdpU"]);
            } else {
                $messageMdp = "erreur de saisie du mot de passe";
            }
        }
    }
    
    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Mon profil";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueUpdProfil.php";
    include "$racine/vue/pied.html.php";
}
else{
    $titre = "Mon profil";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/pied.html.php";
}
?>