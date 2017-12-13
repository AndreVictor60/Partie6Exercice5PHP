<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 6 Exercice 4</title>
  </head>
  <body>
    <a href='index.php?semaine=12'>Semaines</a>
    <?php
      if (isset($_GET['semaine']))
      {
        echo 'La semaine ' . $_GET['semaine'];
      }
     ?>
  </body>
</html>
