
<html>
    <head>
        <meta charset="UTF-8">
        <title>1er pas</title>
    </head>
    <body>
        <!-- On affiche le projet -->
        <h1> <?= $projet["titre"] ?> (n° <?= $projet["id_projet"] ?>)</h1>
        Sujet: <?= $projet["sujet"] ?>
        
        <?php foreach($equipes as $equipe){?>
        <ul>
            <li>Equipe n°<?=$equipe["id_equipe"]?> dont les membres sont:</li>
             </ul>
            <?php foreach($equipe["membres"] as $membre){?>
        <ol>
                    <li>Nom:<?=$membre["nom"]?> Prenom:<?=$membre["prenom"]?></li>

                </ol>

            
            

       

       <?php
            }
        }?>
            
    </body></html>



