<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 8 Partie 4</title>
</head>
<body>
  <!-- Je déclare ma fonction qui va calculer les trois nombres passés en paramètre -->
  <?php function calculate($number1 = 10, $number2 = 15, $number3 = 20){
    // La fonction retournera la somme des 3 nombres
    return $number1 + $number2 + $number3;
  }
  ?>
  <!-- On appelle la fonction calcul dans laquelle on passe 3 nombres-->
  <p>Résultat du calcul : <?= calculate() ?></p>
</body>
</html>
