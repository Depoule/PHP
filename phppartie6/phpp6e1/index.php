<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 partie 6</title>
  </head>
  <body>
    <p><?php
    // Si on vérifie que le tableau $_GET a bien une clé associative ['lastname']
    if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
      echo $_GET['lastname'] . ' ' . $_GET['firstname'];
    } else { 
      echo 'ERROR';
    }
    ?> ! </p>
  </body>
</html>