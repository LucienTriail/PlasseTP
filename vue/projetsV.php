<html>
    <head>
        <meta charset="UTF-8">
        <title>1er pas</title>
    </head>
    <body>


            <p>Il y a  <?= count($projets) ?> projets:</p>
        <?php
        if (count($projets) != 0) {
            ?>
            <ol>
                <?php
                foreach ($projets as $projet) {
                    ?>

                    <li><a href="projets.php?id_session_formation=<?= $projet["id_session_formation"] ?>"<?= $projet["titre"] ?></a>, 
                        sujet:
                        <?= $projet["sujet"] ?> 
                    </li>
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
    </body></html>
