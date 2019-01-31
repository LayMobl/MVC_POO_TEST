<?php
/*
./app/vues/posts/index.php
Variables disponibles :
    - $posts ARRAY(Post)
 */
?>

<?php
GLOBAL $content1;
ob_start();
 ?>

<h2>Ceci est la page index des posts</h2>
<?php foreach ($posts as $post): ?>

  <li>
    <a href="posts/<?php echo $post->getId(); ?>/<?php echo $post->getSlug(); ?>">
      <?php echo $post->getTitre(); ?>
    </a>
  </li>

<?php endforeach; ?>

<?php $content1 = ob_get_clean(); ?>
