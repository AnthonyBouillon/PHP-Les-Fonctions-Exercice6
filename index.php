<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les fonctions Exercice 6</title>
  </head>
  <body>
<?php
  function formule(){
    $name = 'Bouillon';
    $firstName = 'Anthony';
    $age = 22;

    return 'Bonjour' . ' ' . $firstName . ' ' . $name . ' ' . 'tu as' . ' ' . $age . ' ' . 'ans';
  }
  echo formule();
 ?>
  </body>
</html>
