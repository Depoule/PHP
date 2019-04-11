<?php
function returnStringAndNumber($string, $number){
  return $string . ' ' .$number;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5 partie 4</title>
</head>
<body>
  <!-- Affichage de la fonction returnStringAndNumber-->
  <p><?= returnStringAndNumber('Hello ',2); ?></p>
</body>
</html>
