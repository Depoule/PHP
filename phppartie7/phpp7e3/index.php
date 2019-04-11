<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp7e1&3</title>
  </head>
  <body>
    <p>Créer un formulaire demandant le nom et le prénom.</p>
    <p>Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
    <form action="user.php" method="GET">
      <label for="lastname">Nom : </label>
      <input type="text" name="lastname"  />
      <label for="firstname">Prénom : </label>
      <input type="text" name="firstname"  />
      <input type="submit" value="Envoyer" />
    </form>
  </body>
</html>
    