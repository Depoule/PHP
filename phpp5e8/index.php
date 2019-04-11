<?php
// La fonction array permet de créer un tableau
$months = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
// A chaque passage de la boucle dans le tableau on va stocker chaque ligne dans une variable $elements
foreach ($months as $month) {
  // on initialise avec un mot au pluriel et on recupere avec le même mot au singulier
?>
  <li>
    <!-- On affiche la valeur des éléments dans une liste-->
    <?= $month ?>
  </li><?php } ?>
  <!DOCTYPE html>
  <html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8 partie 5</title>
  </head>
  <body>

  </body>
  </html>
