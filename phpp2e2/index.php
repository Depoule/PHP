<!-- on déclare une variable et on lui attribue un boolean "true" -->
<?php $isEasy = false; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice2p2</title>
  </head>
  <body>
      <!-- si $isEasy = true alors on affiche c'est facile -->
      <?php if ($isEasy == true){ ?>
        <p>C'est facile !</p>
      <?php }else{ ?>
        <p>C'est pas facile !</p>
      <?php  } ?>

      <!-- Correction Bonus : Le ! signifie l'inverse et sans le == ca ne marche qu'avec les booleans -->
      <?php
        if(!$isEasy){ ?>
            <p>C'est facile !</p>
          <?php }else{ ?>
            <p>C'est pas facile !</p>
          <?php } ?>
  </body>
</html>
