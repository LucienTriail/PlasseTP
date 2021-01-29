<?php

require_once "modele/SessionDao.php";
//controleur gère les exceptions, jamais le modele
try{
    $sessions = SessionDao ::getAll();
require_once "vue/sessionsV.php";}
catch(PDOException $e){
    $message="Problème technique";
    //$e=null;
    require_once 'vue/messageV.php';
    
}
?>
