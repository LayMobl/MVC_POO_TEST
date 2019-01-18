<?php
/*
./app/vues/articles/index.php
Variables disponibles :
    -
 */
?>

<h2>Ceci est la page index des articles</h2>
<?php foreach ($articles as $article): ?>
  <li><?php echo $article->getTitre(); ?></li>
<?php endforeach; ?>
