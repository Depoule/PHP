<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 partie 6</title>
    </head>
    <body>
         <p>
            <?php
            if (isset($_GET['language']) && ($_GET['server'])) {
                echo $_GET['language'] . ' ' . $_GET['server'];
            } else {
                echo 'Ces paramètres n\'existent pas bro !';
            }
            ?>
        </p>
    </body>
</html>