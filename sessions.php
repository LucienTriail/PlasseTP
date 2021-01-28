<?php


// Appellons le modele
require_once "modele/SessionDao";
    $session = SessionDao::getAll();





// inclure la vue indexV.php
require_once "vue/sessionsV.php";
?>