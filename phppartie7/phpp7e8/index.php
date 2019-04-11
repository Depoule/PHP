<?php $regex = '#^[A-Z][a-zÀ-ÖØ-öø-ÿ]+([ -][A-Z][a-zÀ-ÖØ-öø-ÿ]+)*#'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>exercice 8 partie 7</title>
</head>
<body>
  <p>
    <?php
    if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['gender'])) {
      if (preg_match($regex, $_POST['lastName']) && preg_match($regex, $_POST['firstName'])) {
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0){
          $infosfichier = pathinfo($_FILES['file']['name']);
          $extension_upload = $infosfichier['extension'];
          $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','pdf');
          if (in_array($extension_upload, $extensions_autorisees)) {
            echo 'Bonjour' .' ' .$_POST['gender'] . ' ' . $_POST['lastName'] . ' ' . $_POST['firstName'] . ' ' . 'vous avez transmis ce fichier : ' . $_FILES['file']['name'] ;
          }
          else {
            echo 'Cette extension n\'est pas prise en charge';
          }
        } else {
          echo 'Fichier introuvable ou non pris en charge';
        }
      } else {
        echo 'Veuillez entrer des données valides';
      }
      ?>
    </p>
  <?php }else{ ?>
    <form enctype="multipart/form-data" class="form" action="index.php" method="POST">
      <p><label for="firstName">Prénom : </label><input type="text" name="firstName" value="" required></p>
      <p><label for="lastName">Nom : </label><input type="text" name="lastName" value="" required></p>
      <p><label for="gender" name="gender">Civilité :</label>
      <select class="list" name="gender">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
      </select></p>
      <p><label for="file">Fichier à joindre</label>
        <input type="file" name="file" value=""></p>
      <p><button type="submit" name="button">Envoyer</button></p>
    </form>
  <?php } ?>
</body>
</html>
