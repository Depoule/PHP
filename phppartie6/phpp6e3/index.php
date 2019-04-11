<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 partie 6</title>
    </head>
    <body>
         <p>
            <?php
            if (isset($_GET['startDate']) && ($_GET['endDate'])) {
                echo $_GET['startDate'] . ' ' . $_GET['endDate'];
            } else {
                echo 'Ces paramètres n\'existent pas bro !';
            }
            ?>
        </p>
    </body>
</html>