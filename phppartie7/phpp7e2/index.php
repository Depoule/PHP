<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2 partie 7</title>
  </head>
  <body>
    <p>Créer un formulaire demandant le nom et le prénom.</p>
    <p>Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>
    <form method="POST" action="user.php">  
      <label for="lastName">Nom : </label><input type="text" name="lastName" id="lastName" required />
      <label for="firstName">Prénom : </label><input type="text" name="firstName" id="firstName" required />
      <input type="submit"  value="Envoyer" />
    </form>
  </body>
</html>