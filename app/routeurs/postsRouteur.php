<?php
/*
  ./app/routeurs/postsRouteur.php
 */

$ctrl = new \App\Controleurs\PostsControleur();

 switch ($_GET['posts']):
   case 'show':
       $ctrl->showAction([
         'findOneBy' => 'slug',
         'data'      => $_GET['slug']
       ]);
     break;

   default:
      die("Aucune route des posts ne correspond.");
     break;
 endswitch;
