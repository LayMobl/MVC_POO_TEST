<?php
/*
  ./app/routeur.php
 */

 if (isset($_GET['posts'])):
   include '../app/routeurs/postsRouteur.php';
 else:

   /*
   ROUTE 1:
   PATTERN: /
   CTRL: ArticlesControleur
   ACTION: indexAction
    */
    $ctrl = new \App\Controleurs\PostsControleur();
    $ctrl->indexAction();
  endif;
