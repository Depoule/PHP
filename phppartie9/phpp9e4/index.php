<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4 Partie 9</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  </head>
  <body>  
    <p>Afficher le timestamp du jour.
      Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>

    <p>Timestamp du jour :  <?php echo strtotime('now') . ' secondes'; ?> </p>
   <?php // Secondes écoulées entre le 1er janvier 1970 et aujourd'hui ?>

    <p>Timestamp du mardi 2 août 2016 à 15h00 :  <?php echo strtotime('tuesday 2 august 2016 15:00:00') . ' secondes'; ?></p>
    <?php // Secondes écoulées entre le 1er janvier 1970 et le mardi 2 août 2016 à 15h00 ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>