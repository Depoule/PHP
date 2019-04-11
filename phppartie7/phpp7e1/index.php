<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 partie 7</title>
  </head>
  <body>
    <p>Créer un formulaire demandant le nom et le prénom.</p>
    <p>Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
    <div class="form">
    <form method="GET" action="user.php"> 
      <div class="insideForm">
      <label for="lastName">Nom : </label><input type="text" value='' name="lastName" id="lastName" required />
      <label for="firstName">Prénom : </label><input type="text" value='' name="firstName" id="firstName" required />
      <input type="submit"  value="Envoyer" />
      </div>
    </form>  
    </div>
    </body>
</html>