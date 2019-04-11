<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4 partie 3</title>
</head>
<body>
  <?php
  $numbers = 1;
  while ($numbers <= 10) { ?>
    <p>On affiche <?= $numbers ?> et on l'incrémente de la moitié de sa valeur : <?= $numbers += $numbers / 2;?></p>
  <?php } ?>
</body>
</html>
