<?php
//démarrer une session pour faire passer des données d'une page à une autre.
session_start();
$_SESSION['lastname'] = 'Glatigny';
$_SESSION['firstname'] = 'Francky';
$_SESSION['age'] = 35;
// "session_write_close" permet à la session de clôturer en fin de lecture de la page. Sécurité pour la transition des données.
session_write_close();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>PHP Partie 8 Exercice 2</title>
  </head>
  <body>
      <!--lien vers la deuxiéme page-->
    <a href="page2.php"><button type="button" class="btn btn-success">Voir</button>
  </body>
</html>