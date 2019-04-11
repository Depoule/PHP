<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 6 partie 6</title>
    </head>
    <body>
         <p>
            <?php
            if (isset($_GET['building']) && ($_GET['room'])) {
                echo $_GET['building'] . ' ' . $_GET['room'];
            } else {
                echo 'Ces paramètres n\'existent pas bro !';
            }
            ?>
        </p>
    </body>
</html>