<?php
//on doit redémarrer la session pour y avoir accès.
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP Partie 8 Exercice 2 User</title>
</head>
<body>
      <?php if(!empty($_SESSION['lastname'])){ ?>
    <p><?= $_SESSION['lastname'];?></p>
   <?php } ?>

    <?php if(!empty($_SESSION['firstname'])){ ?>
  <p><?= $_SESSION['firstname'];?></p>
   <?php }  ?>
    <?php if(!empty($_SESSION['age'])){ ?>
  <p><?= $_SESSION['age'];?></p>
  <?php } 
  // "session_destroy" permet de supprimer les variables de session et détruire les sessions
 session_destroy();
  ?>
</body>
</html>

