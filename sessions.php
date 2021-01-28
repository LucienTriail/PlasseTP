<?php

require_once "modele/SessionDao";
$sessions = SessionDao ::getAll();

require_once "vue/sessionsV.php";
?>