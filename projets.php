<?php

//on recupere l'id_session
$idSession = filter_input(INPUT_GET, "idSession", FILTER_VALIDATE_INT);
//initialise les donnéees de la vue, des objets donc null
$erreur = null;
$session = null;
//verifier que cest bon
if ($idSession == null || $idSession == false) {
    $erreur = "idSession invalide";
} else {
//appel du modèle
    require_once 'modele/SessionDao.php';
    $session = SessionDao:: getById($idSession);
    if ($session == null) {
        $erreur = "Session $idSession introuvable";
    }
}






require_once 'Vue/projetsV.php';
?>
