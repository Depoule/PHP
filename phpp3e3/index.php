<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3 partie 3</title>
  </head>
  <body>
      <?php
      $firstNumbers = 100;
      $secondNumbers = 69;
      while ($firstNumbers > 10) { ?>
        <p>Je multiplie la première variable avec la seconde <?= $firstNumbers * $secondNumbers; ?>
          et ici on décrémente <?= $firstNumbers--; ?></p>
      <?php } ?>
  </body>
</html>
