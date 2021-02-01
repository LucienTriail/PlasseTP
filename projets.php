<?php
//a modifier pour renvoyer la liste des projets
// Recuperer le parametre idSession 
// sous forme d'un int
/*$idSession = filter_input(INPUT_GET, "idSession",
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
}*/
require_once "modele/ProjetsDao.php";

try{
    $projets= ProjetsDao :: getAll();  //ou getProjetsBySession?
    require_once "vue/projetsV.php";
}catch(PDOException $e){
    $message="Problème technique";
    require_once 'vue/messageV.php';
}

try{
    $projets= ProjetsDao :: afficherProjet();  //ou getProjetsBySession?
    require_once "vue/projetsV.php";
}catch(PDOException $e){
    $message="Problème technique";
    require_once 'vue/messageV.php';
}


?>

 
