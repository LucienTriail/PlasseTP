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
                foreach ($projets as $projet) {
                    ?>

                    <li><a href="projet.php?idProjet=<?= $projet["id_projet"] ?>"<a><?= $projet["titre"] ?></li>
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
