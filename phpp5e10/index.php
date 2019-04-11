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
    <title>Exercice 10 partie 5</title>
  </head>
  <body>
    <?php
    // Boucle de récupération des clés et des valeurs, as = en tant que
    // $departmentNumber recupere le numéro du departement et $department recupere son nom
        foreach($departments as $departmentNumber => $department) { ?>
        <!-- Affichage de la phrase avec concaténation -->
        <p>Le département <?= $department ?> a le numéro <?= $departmentNumber ?></p>
      <?php
        }
      ?>
  </body>
</html>
