<?php
/*
./app/controleurs/categoriesControleur.php
 */

namespace App\Controleurs;
use \App\Modeles\CategoriesGestionnaire;

class CategoriesControleur extends \Noyau\Classes\ControleurGenerique {

  public function __construct(){
    $this->_gestionnaire  = new \App\Modeles\CategoriesGestionnaire();
    $this->_table = 'categories';
  }

}
