<?php
/*
./app/controleurs/PostsControleur.php
 */

namespace App\Controleurs;

class PostsControleur extends \Noyau\Classes\ControleurGenerique {

  public function __construct(){
    $this->_gestionnaire  = new \App\Modeles\PostsGestionnaire();
    $this->_table = 'posts';
  }

}
