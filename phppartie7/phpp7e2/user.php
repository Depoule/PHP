<?php
$pattern = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Za-zÀ-ÖØ-öø-ÿ]+){0,1}+$/';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2 partie 7</title>
  </head>
  <body>
    <?php
    $regex = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/';
    //Si la variable existe ET qu'elle n'est pas vide
    if (!empty($_POST['lastName'])) {
      //Si la variable correspond à la regex
      if (preg_match($regex, $_POST['lastName'])) {
        $lastName = $_POST['lastName'];
      } else {
        //Si la variable ne correspond pas à la regex
        $lastNameError = 'Merci d\'indiquer CORRECTEMENT votre nom de famille svp.';
        ?>
        <p><?= $lastNameError ?></p>
        <?php
      }
    } else {
      //Sinon soit la variable ne s'est pas envoyée soit la personne n'a pas rempli le champ
      $lastNameError = 'Merci d\'indiquer votre nom de famille';
    }
    if (!empty($_POST['firstName'])) {
      if (preg_match($regex, $_POST['firstName'])) {
        $firstName = $_POST['firstName'];
      } else {
        //Si la variable ne correspond pas à la regex
        $firstNameError = 'Merci d\'indiquer CORRECTEMENT votre prénom svp.';
        ?>
        <p><?= $firstNameError ?></p>
        <?php
      }
    } else {
      //Sinon soit la variable ne s'est pas envoyée soit la personne n'a pas rempli le champ
      $firstNameError = 'Merci d\'indiquer votre prénom';
    }
    if (isset($lastNameError) || isset($firstNameError)) {
      ?>
      <p>Merci de retourner à la page précédente</p>
      <?php
    } else {
      ?>
      <p>Bonjour <?= $firstName . ' ' . $lastName ?></p>
      <?php
    }
    ?>
    <p>Si tu veux changer ta saisie, <a href="index.php">cliquez ici</a> pour revenir à la page formulaire</p>
  </body>
</html>