<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>1er pas</title>
    </head>
    <body>
        <h1>Lucien</h1>
        <?php
        if ($erreur == null) {
            ?>
            <!-- on accede au nom dans le tableau session -->
            <p>Session est <?= $session["nom"] ?></p>

            <?php
        } else {
            ?>
            <div class="erreur"><?= $erreur ?></div>
            <?php
        }
        ?>

        <?php
        ?>
    </body>
</html>