<?php
// On crée notre array $departments
$departments = array (
    '02' => 'Aisne',
    '60' => 'Oise',
    '80' => 'Somme',
    '62' => 'Pas de Calais',
    '59' => 'Nord');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 9 partie 5</title>
  </head>
  <body>

    <?php
    foreach ($departments as $department) {
      echo $department;
    }
    ?>

  </body>
</html>
