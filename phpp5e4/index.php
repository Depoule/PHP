<?php
// La fonction array permet de créer un tableau
$month = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
$month = array(7 => "Août");
// ou $months[7] = 'Août';
// ou str_replace('Aout','Août', months[7]);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4 partie 5</title>
</head>
<body>
  <!-- On affiche le mois demandé -->
  <p>On est au mois d' <?= $month[7]; ?></p>
</body>
</html>
