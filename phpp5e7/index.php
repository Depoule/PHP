<?php
// On crée notre array $departments
$departments = array (
    '02' => 'Aisne',
    '60' => 'Oise',
    '80' => 'Somme',
    '62' => 'Pas de Calais',
    '59' => 'Nord');
    // ici on ajoute une ligne au tableau afin d'integrer le 51 Marne
$departments['51'] = 'Marne';
// ou $departments = array('51 => 'Marne');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7 partie 5</title>
  </head>
  <body>
<!-- Ci-dessous j'affiche la ligne correspondant au departement nouvellement crée -->
<p>Bienvenue dans le département de la <?= $departments[51]; ?></p>
<!-- Ici j'affiche l'integralité de mon tableau -->
<?php print_r($departments);  ?>
  </body>
</html>
