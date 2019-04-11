<!-- Je déclare ma fonction profil dans laquelle je passe 2 variables en paramètres -->
<?php function profil($age, $gender)
{
  if ($age >= 18 && $gender == 'Homme'){
    $message ='Vous êtes un homme et vous êtes majeur';
  }
  elseif ($age >=18 && $gender == 'Femme') {
    $message ='Vous êtes une femme et vous êtes majeure';
  }
  elseif ($age < 18 && $gender == 'Homme') {
    $message ='Vous êtes un homme et vous êtes mineur';
  }
  else{
    $message ='Vous êtes une femme et vous êtes mineure';
  }
  return $message;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7 partie 4</title>
</head>
<body>
  <!-- On appelle la fonction profil dans laquelle on place des infos en parametres-->
  <p><?= profil(16, 'Femme') ?></p>
  <p><?= profil(19, 'Femme') ?></p>
  <p><?= profil(16, 'Homme') ?></p>
  <p><?= profil(19, 'Homme') ?></p>
</body>
</html>
