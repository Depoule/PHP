<!-- on déclare une variable et on lui attribue -->
<?php $age = 34; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice1p2</title>
  </head>
  <body>
    <p><?php
      // si $age est inférieur à 18 alors on affiche vous etes mineur
      if ($age >= 18){
          echo 'Vous êtes majeur !';
        }
      // si $age est superieur à 18 alors on affiche vous etes majeur
      else{
          echo 'Vous êtes mineur !';
        } ?></p>
  </body>
</html>
