<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Exercice 7 Partie 9</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <h1>Afficher la date du jour + 20 jours.</h1>
    <div>        
      <?php
      $date = new DateTime();
      $date->add(new DateInterval('P20D'));
      echo $date->format('d/m/Y') . "\n";
      ?>
    </div>
  </body>
</html>