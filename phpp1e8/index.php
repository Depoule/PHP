<!-- PHP de traitement à mettre avant le html -->
<?php
// on déclare une variable et on lui attribue
$number1 = 3+4;
$number2 = 5*20;
$number3 = 45/5;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice8</title>
  </head>
  <body>    
      <!-- PHP d'affichage -->
    <p>
      <?php
      echo $number1;
      ?>
    </p>
    <p>
      <?php
      echo $number2;
      ?>
    </p>
    <p>
      <?php
      echo $number3;
      ?>
    </p>
  </body>
</html>
