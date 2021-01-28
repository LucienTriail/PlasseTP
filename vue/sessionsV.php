<?php
if (count($sessions) != 0) {
  ?>
  <p>Il y a <?= count($sessions) ?> sessions</p>
  <ol>
    <?php
    foreach ($sessions as $session) {
      ?>
      <li><?= $session["nom"] ?> 
        (# <?= $session["id_session_formation"]?>)</li>
      <?php
    }
    ?>
  </ol>
  <?php
} else {
  
}
?>
