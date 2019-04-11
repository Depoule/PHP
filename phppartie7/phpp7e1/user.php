<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 partie 7</title>
  </head>
  <body>
    <p>ici c'est la page user.php</p>
    <?php
    // Je déclare ma regex
    $regex = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/';
    //Si la variable existe ET qu'elle n'est pas vide
    if (!empty($_GET['lastName'])) {
      //Si la variable correspond à la regex
      if (preg_match($regex, $_GET['lastName'])) {
        $lastName = $_GET['lastName'];
      } else {
        //Si la variable ne correspont pas à la regex
        $lastNameError = 'Merci d\'indiquer CORRECTEMENT votre nom de famille svp.';
        ?>
        <p><?= $lastNameError ?></p>
        <?php
      }
    } else {
      //Sinon soit la variable ne s'est pas envoyé soit la personne n'a pas rempli le champ
      $lastNameError = 'Merci d\'indiquer votre nom de famille';
    }
    if (!empty($_GET['firstName'])) {
      if (preg_match($regex, $_GET['firstName'])) {
        $firstName = $_GET['firstName'];
      } else {
        //Si la variable ne correspont pas à la regex
        $firstNameError = 'Merci d\'indiquer CORRECTEMENT votre prénom svp.';
        ?>
        <p><?= $firstNameError ?></p>
        <?php
      }
    } else {
      //Sinon soit la variable ne s'est pas envoyée soit la personne n'a pas rempli le champ
      $firstNameError = 'Merci d\'indiquer votre prénom';
      $lastNameError = 'Merci d\'indiquer votre nom';
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