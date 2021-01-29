<html>
    <head>
        <meta charset="UTF-8">
        <title>1er pas</title>
    </head>
    <body>


        <?php
        if (count($sessions) != 0) {
            ?>
            <ol>
                <p>Il y a  <?= count($sessions) ?> sessions:</p>
                <?php
                foreach ($sessions as $session) {
                    ?>

                    <li><a href="projets.php?id_session_formation=<?= $session["id_session_formation"] ?>"<a><?= $session["nom"] ?> 
                            (n° <?= $session["id_session_formation"] ?>)</li>
                    <?php
                }
                ?>
            </ol>
            <?php
        } else {
            ?>

            <p>Aucune session trouvée</p>
            <?php
        }
        ?>
    </body></html>



