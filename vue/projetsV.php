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
                    $url = "projet.php?idProjet=$projet[id_projet]";
                    ?>

                    <li><a href="<?= $url ?>"<?= $projet["titre"] ?></a></li>
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
    </body>
</html>
