<!-- PHP de traitement à mettre avant le html -->
<?php
// on déclare une variable et on lui attribue
$name = 'julien';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice1</title>
  </head>
  <body>
    <!-- On affiche la variable $name -->
    <p>
      <!-- PHP d'affichage -->
      Bonjour
      <?php echo $name; ?>
    </p>
  </body>
</html>
