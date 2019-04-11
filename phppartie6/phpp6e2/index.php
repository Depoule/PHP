<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2 partie 6</title>
  </head>
  <body>
    <p>
      <?php if (isset($_GET['age']) && isset($_GET['firstname']) && isset($_GET['lastname'])) {
        echo 'Bonjour' . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' ' . $_GET['age'];
      } else {
        echo 'il faut renseigner un age';
      } ?>
    </p>
  </body>
</html>