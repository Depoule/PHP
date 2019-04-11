<?php
// !empty vérifie que les login et password existent et ne sont pas vide. 
if (!empty($_POST['login']) && !empty($_POST['password'])) {
    // Création du cookie, syntaxe IMPORTANTE pour la sécurité !
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true);
}
// !empty vérifie que les login et password existent et ne sont pas vide.
if (!empty($_POST['password'])) {   
    // Création du cookie, syntaxe IMPORTANTE pour la sécurité !
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3 Partie 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  </head>
  <body>  
    <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
        A la validation du formulaire, stocker les informations dans un cookie.
    </p>
    <form method="post" action="index.php" enctype="multipart/form-data"> 
        <label for="login">Entrer un login : </label><input type="text" name="login" />
        <label for="password">Entrer un mot de passe : </label><input type="password" name="password" />
        <input type="submit"  name="submit" value="Se connecter" />
      </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>