<?php
/*
./app/controleurs/ArticlesControleur.php
 */

namespace App\Controleurs;

class ArticlesControleur {

  public function indexAction(){
    // Je vais chercher des infos dans le modèle
    $gestionnaire = new \App\Modeles\ArticlesGestionnaire();
    $articles = $gestionnaire->findAll();

    // Je charge la vue index dans $content1
    GLOBAL $content1;
    ob_start();
      include '../app/vues/articles/index.php';
    $content1 = ob_get_clean();
  }

}
