<?php
// Je crée une régex pour securiser les noms saisis dans les inputs.
$patternName = '/^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$/m';
//On utilise la fonction !empty pour vérifier si les données sont bien transmises et si le champs n'est pas vide
if(!empty($_GET['lastname'])){
  // on vérifie que ça réponde à la sécurité de la regex
    if(preg_match($patternName,$_GET['lastname'])){
  // on stocke les données dans une variable $lastname
     $lastname = htmlspecialchars($_GET['lastname']);
   }else{
     // Sinon on affiche qu'il y a une erreur dans le nom si la forme n'est pas bonne
     $errorLastname = 'Veuillez indiquer un nom de famille de la forme "Dupont" ';
   }
  }else{
    // sinon on affiche qu'il n'y a aucun champs renseignés
    $errorLastname = 'Veuillez indiquer un nom de famille';
  }
  if(!empty($_GET['firstname'])){
    if(preg_match($patternName,$_GET['firstname'])){
  //
     $firstname = htmlspecialchars($_GET['firstname']);
   }else{
     $errorFirstname = 'Veuillez indiquer un prénom de la forme "Henri" ';
   }
  }else{
    $errorFirstname = 'Veuillez indiquer un nom prénom';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp7e1&3</title>
  </head>
  <body>
      <p class="<?php echo isset($lastname)? 'success': 'error' ?>"><?php echo isset($lastname)? $lastname : $errorLastname ?></p>
      <p class="<?php echo isset($firstname)? 'success': 'error' ?>"><?php echo isset($firstname)? $firstname : $errorFirstname ?></p>
  </body>
</html>
