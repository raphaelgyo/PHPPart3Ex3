<?php
  $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 3 Exercice 3 : Les tableaux</title>
  </head>
  <body>
    <?php
    /* pour chaque élément du tableau mois, on affiche ses éléments
    la boucle foreach est plus adaptée pour les tableaux
    on peut mettre du php dans du html mais pas l'inverse. */
      foreach($months as $element) {
    ?>
      <p><?php echo $element; ?></p>
    <?php }; ?>
  </body>
</html>
