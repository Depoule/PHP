<?php
$gender = 'Homme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice5p2</title>
</head>
  <body>
  <?php
  if ($gender != 'Homme'){
    echo 'C\'est une developpeuse !!!';
  }
  else {
    echo 'C\'est un developpeur !!!';
  }
  // echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
  ?>
  </body>
  </html>
