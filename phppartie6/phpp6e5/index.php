<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 partie 6</title>
    </head>
    <body>
         <p>
            <?php
            if (isset($_GET['week'])) {
                echo $_GET['week'];
            } else {
                echo 'Ce paramètre n\'existe pas bro !';
            }
            ?>
        </p>
    </body>
</html>