<?php
/*
  ./app/routeur.php
 */

 /*
 ROUTE 1:
 PATTERN: /
 CTRL: ArticlesControleur
 ACTION: indexAction
  */

  $ctrl = new \App\Controleurs\ArticlesControleur();
  $ctrl->indexAction();
