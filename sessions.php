<?php

require_once "modele/SessionDao.php";
// c'est les controleurs qui gerent les exceptions
try {
$sessions = SessionDao::getAll();

require_once "vue/sessionsV.php";
}
catch (PDOException $exc) {
    $message = "probleme techniqueveuillez essayer ulterieurement" ; 
    require_once "vue/messageVphp";
}
?>