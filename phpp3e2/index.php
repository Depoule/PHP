<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2 partie 3</title>
  </head>
  <body>
      <?php
      $firstNumbers = 0;
      $secondNumbers = 36;
      while ($firstNumbers <= 20) { ?>
        <p>Je multiplie la première variable avec la seconde <?= $firstNumbers * $secondNumbers; ?>
        et ici on incrémente <?= $firstNumbers++; ?></p>
      <?php } ?>
  </body>
</html>
