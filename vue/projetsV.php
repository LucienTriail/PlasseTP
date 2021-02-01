<?php
//a modifier pour afficher les projets
if (count($sessions) != 0) {
  ?>
  <p>Il y a <?= count($sessions) ?> sessions</p>
  <ol>
    <?php
    foreach ($sessions as $session) {
      ?>
    <li><a href="projets.php?idSession=<?= $session["id_session_formation"]?>"><?= $session["nom"] ?></a>
        (n° <?= $session["id_session_formation"]?>)</li>
      <?php
    }
    ?>
  </ol>
  <?php
} else {
  ?>
  <p>Aucun projet trouvé</p>
  <?php
}
?>
