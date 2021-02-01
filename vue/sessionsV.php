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
                    $url = "projets.php?idSession=$session[id_session_formation]";
                    ?>

                    <li><a href="<?= $url ?>"><?= $session["nom"] ?></a>
                        (n° <?= $session["id_session_formation"] ?>)
                    </li>
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



