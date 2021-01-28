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

                    <li><a href="projets.php?idSession=<?= $session["idSession"] ?>"<a><?= $session["nom"] ?> 
                            (n° <?= $session["idSession"] ?>)</li>
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
