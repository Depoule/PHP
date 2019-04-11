<?php
// La fonction array permet de créer un tableau contenant les 12 mois de l'année
$month = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2 partie 5</title>
  </head>
  <body>
    <!-- On affiche le mois demandé -->
    <p>On est au mois de <?= $month[2]; ?></p>
  </body>
</html>
