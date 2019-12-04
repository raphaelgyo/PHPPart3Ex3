<?php
  $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Partie 3 Exercice 3 : Les tableaux</title>
  </head>
  <body>
    <p>
      <?php
        foreach($months as $monthsList){
        echo $monthsList;
        }
      ?>
    </p>
  </body>
</html>
