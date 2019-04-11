<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Exercice 8 Partie 9</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <h1>Afficher la date du jour - 22 jours.</h1>
    <div>        
      <?php
      $date = new DateTime('now');
      $date->sub(new DateInterval('P22D'));
      echo $date->format('d/m/Y') . "\n";
      ?>
    </div>
  </body>
</html>