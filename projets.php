<?php

//a modifier pour renvoyer la liste des projets
// Recuperer le parametre idSession 
// sous forme d'un int
/* $idSession = filter_input(INPUT_GET, "idSession",
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
  } */
//$idSession = filter_input(INPUT_GET, "idSession", FILTER_VALIDATE_INT);
//
//$message = null;
//$session = null;
//if ($idSession == null || $idSession == false) {
//  $message = "idSession doit être préent et entier";
//  require_once "vue/messageV.php";
//} else {
//  require_once "modele/SessionDAO.php";
//  // Recuperer les donnees des projets
//  require_once "vue/projetsV.php";
//}
$idSession = filter_input(INPUT_GET, "idSession", FILTER_VALIDATE_INT);

try {
require_once "modele/ProjetsDao.php";
    $projets = ProjetsDao::getProjetsByIdSession($idSession);
    require_once "vue/projetsV.php";
} catch (PDOException $e) {
    $message = "Problème technique";
    require_once 'vue/messageV.php';
}

/*try{
    $projets= ProjetsDao :: afficherProjet();  //ou getProjetsBySession?
    require_once "vue/projetsV.php";
}catch(PDOException $e){
    $message="Problème technique";
    require_once 'vue/messageV.php';
}*/


//TRAITEMENT DES ERREURS
/*$erreurs=array();
if($_SERVER["REQUEST_METHOD"]=="GET"){
    //traitement en get
    //affichage formulaire
    require_once 'vue/nouveauMembreV.php';
}

    else{
        //traitement en POST
        //check paramètre
        $email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
        
        if($email==null || $email==false){
            $erreurs["email"]="Email invalide";
            require_once 'vue/nouveauMembreV.php';
        }
        else {
            //si ok, appeller le modele
            require_once 'modele/MembreDao.php';
            MembreDao::insert($email);
            //rediriger vers index
            header("Location:index.php");
            
        } */


//TRAITEMENT DES ERREURS
/*$erreurs=array();
if($_SERVER["REQUEST_METHOD"]=="GET"){
    //traitement en get
    //affichage formulaire
    require_once 'vue/nouveauMembreV.php';
}

    else{
        //traitement en POST
        //check paramètre
        $email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
        
        if($email==null || $email==false){
            $erreurs["email"]="Email invalide";
            require_once 'vue/nouveauMembreV.php';
        }
        else {
            //si ok, appeller le modele
            require_once 'modele/MembreDao.php';
            MembreDao::insert($email);
            //rediriger vers index
            header("Location:index.php");
            
        } */

?>


