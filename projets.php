<?php

// Recuperer le parametre idSession 
// sous forme d'un int
$idSession = filter_input(INPUT_GET, "idSession",
        FILTER_VALIDATE_INT);
// Initialiser les données de la vue
$erreur = null;
$session = null;

// Verifier que c'est bon
if ($idSession == null // pas de idSession dans l'url
    || $idSession == false) { // pas un entier 
    $erreur = "idSession doit être présent et entier";
} else {
  // Appellons le modele
  require_once "modele/SessionDao.php";
  $session = SessionDao::getById($idSession);
  if ($session == null) {
    // Dans une chaine entre ", les variables sont évaluées
    $erreur = "Session $idSession introuvable";
  }
}

// inclure la vue indexV.php
require_once "vue/indexV.php";
?>

 