<?php
// La fonction array permet de créer un tableau
$month = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3 partie 5</title>
  </head>
  <body>
    <!-- On affiche le mois demandé -->
    <p>On est au mois de <?= $month[5]; ?></p>
  </body>
</html>
