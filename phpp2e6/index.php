<?php
$age = 16;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice6p2</title>
</head>
  <body>
  <?php
  if ($age >= 18){
    echo 'Tu es majeur';
  }
  else {
    echo 'Tu n\'es pas majeur';
  }
  // echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
  ?>
  </body>
  </html>
