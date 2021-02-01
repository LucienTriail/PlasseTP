<html>
    <head>
        <meta charset="UTF-8">
        <title>1er pas</title>
    </head>
    <body>


        <?php
        if (count($projets) != 0) {
            ?>
            <ol>
                <p>Il y a  <?= count($projets) ?> projets:</p>
                <?php
                foreach ($projets as $projets) {
                    ?>

                    <li><a href="projets.php?id_session_formation=<?= $projets["id_session_formation"] ?>"<a><?= $projets["titre"] ?> , sujet:
                             <?= $projets["sujet"] ?> </li>
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
