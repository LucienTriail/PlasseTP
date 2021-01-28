<?php

require_once "modele/SessionDao.php";
$sessions = SessionDao ::getAll();

require_once "vue/sessionsV.php";
?>
