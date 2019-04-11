<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5 partie 7</title>
  </head>
  <body>
    <p>Créer un formulaire sur la page index.php avec :</p>
    <ol>
      <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
      <li>Un champ texte pour le nom</li>
      <li>Un champ texte pour le prénom</li>
    </ol>
    <p>Ce formulaire doit rediriger vers la page index.php.</p>
    <p>Vous avez le choix de la méthode.</p>        
    <form method="post" action="index.php"> 
      <label for="gender" name="gender">Civilité :</label>
      <select name="gender">
        <option selected disabled>Veuillez sélectionner une option</option>
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
      </select>
      <label for="lastName">Nom : </label><input type="text" name="lastName" id="lastName" required />
      <label for="firstName">Prénom : </label><input type="text" name="firstName" id="firstName" required />
      <input type="submit"  value="Envoyer" />
    </form>        
  </body>
</html>