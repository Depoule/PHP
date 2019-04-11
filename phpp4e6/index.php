<!-- Je déclare ma fonction identity dans laquelle je passe 3 variables en paramètres -->
<?php function identity($lastName, $firstName, $age)
// concatenation des variables de la fonction identity
{
  // Je veux que ma fonction retourne une concatenation de mes variables
  return $firstName . ' ' . $lastName . ' tu as ' . $age . ' ans.';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6 partie 4</title>
</head>
<body>
  <!-- On appelle la fonction identity en passant un nom prenom age en parametres-->
  <p>Bonjour <?= identity('Poulet', 'Julien', 34) ?></p>
</body>
</html>
