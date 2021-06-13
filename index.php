<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Part1 - Exo4</title>
  </head>
  <body>
    <h1>Part1 - Exo4</h1>
    <?php
    function ActionMineur()
      {
        echo 'Vous êtes mineur!';
      }
      function ActionMajeur()
      {
        echo 'Vous êtes majeur!';
      }
      $age = rand(1, 90);
      echo 'Age choisi: ', $age, '<br>';

      if($age >= 18)
        ActionMajeur();
      else
        ActionMineur();
    ?>
  </body>
</html>
