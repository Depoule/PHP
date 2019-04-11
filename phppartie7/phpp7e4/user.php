<?php
include('regex.php');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp7e4</title>
  </head>
  <body>
    <?php
    if (!empty($_POST['lastname'])) {
      if (preg_match($patternName, $_POST['lastname'])) {
        ?><p><?= $_POST['lastname'] ?></p><?php
      } else {
        ?><p>Merci de renseigner votre nom correctement en commencant par une Majuscule et pouvant contenir deux mots maximum</p><?php
      }
    } else {
      ?><p>Merci de renseigner votre nom.</p><?php
    }
    
    if (!empty($_POST['firstname'])) {
      if (preg_match($patternName, $_POST['firstname'])) {
        ?><p><?= $_POST['firstname'] ?></p><?php
      } else {
        ?><p>Merci de renseigner votre prénom correctement en commencant par une Majuscule et pouvant contenir deux mots maximum</p><?php
      }
    } else {
      ?><p>Merci de renseigner votre prénom.</p><?php
    }
    
    ?> 
  </body>
</html>