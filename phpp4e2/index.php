<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Partie 4 exo 2</title>
</head>
<body>
  <?php  function sayHi($name = 'toto') {
    return $name;
  }
  $stringValue = 'Bonjour';
  $string = sayHi($stringValue);
  echo $string;
  echo sayHi();
  ?>
</body>
</html>
