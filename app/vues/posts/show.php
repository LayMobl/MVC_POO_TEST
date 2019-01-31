<?php
/*
./app/vues/posts/show.php
Variables disponibles :
    - $post Post
 */
?>
<?php
GLOBAL $content1, $title;
$title = $post->getTitre();
ob_start();
 ?>
<article class="">
  <header>
    <h1><?php echo $post->getTitre(); ?></h1>
    <div>Auteur: <?php echo $post->getAuteur(); ?> -
      <time datetime="<?php echo \Noyau\Classes\App::datify($post->getDatePublication(), 'Y-m-d'); ?>">
        <?php echo \Noyau\Classes\App::datify($post->getDatePublication()); ?>
      </time>
    </div>
  </header>
  <div class="">
    <?php echo $post->getTexte(); ?>
  </div>
</article>
<?php $content1 = ob_get_clean(); ?>
