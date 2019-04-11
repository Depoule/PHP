<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 Partie 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  </head>
  <body>
    <div>
    <p>Faire une page HTML permettant de donner à l'utilisateur</p>
    <ol>
      <li>Son User Agent</li>
      <li>Son adresse IP</li>
      <li>Le nom du serveur</li>
    </ol>
    </div>
    <div id="userAgent">
            <?php
            /* recupération et affichage de $_SERVER['HTTP_USER_AGENT'] pour avoir le user agent */
            echo 'User agent: ' . $_SERVER['HTTP_USER_AGENT'];
            ?>
        </div>
        <div id="ip">
            <?php
            /* recupération et affichage de $_SERVER['REMOTE_ADDR'] pour connaitre l'IP du visiteur */
            echo 'Adresse IP: ' . $_SERVER['REMOTE_ADDR'];
            ?>
        </div>
        <div id="serverName">
            <?php
            /* recupération et affichage de $_SERVER['SERVER_NAME'] pour afficher le nom du serveur */
            echo 'Nom du serveur: ' . $_SERVER['SERVER_NAME'];
            ?>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>