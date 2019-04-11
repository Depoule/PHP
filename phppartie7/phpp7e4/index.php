<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp7e4</title>
  </head>
  <body>
    <p>Créer un formulaire demandant le nom et le prénom.</p>
    <p>Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>
    <form action="user.php" method="POST">
      <label for="lastname">Nom : </label>
      <input type="text" name="lastname" id="lastname" required placeholder="Doe" />
      <label for="firstname">Prénom : </label>
      <input type="text" name="firstname" id="firstname" required placeholder="John" />
      <input type="submit" value="Envoyer" />
    </form>
  </body>
</html>