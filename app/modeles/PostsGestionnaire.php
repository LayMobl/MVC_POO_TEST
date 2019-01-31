<?php
/*
./app/modeles/PostsGestionnaire.php
 */

namespace App\Modeles;
use \Noyau\Classes\App;

class PostsGestionnaire extends \Noyau\Classes\GestionnaireGenerique {

  public function __construct(){
    $this->_table = 'posts';
    $this->_modele = '\App\Modeles\Post';
  }

}
