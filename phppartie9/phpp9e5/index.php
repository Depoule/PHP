<?php
 // Initialisation de l'objet date time en créant la variable $firstDate.
            $firstDate = new DateTime('2016-05-16');  
            // Initialisation de l'objet date time avec la date du jour.
            $secondDate = new DateTime(); 
            // Méthode de date time qui fait la différence entre les 2 dates.
            $interval = $firstDate->diff($secondDate);  
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP Exercice 5 Partie 9</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</h1>
        <div>
          <p><?= $interval->format('%a'); ?> jours</p>
        </div>
    </body>
</html>

   
