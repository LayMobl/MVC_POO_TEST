<?php
/*
./app/modeles/CategoriesGestionnaire.php
 */

namespace App\Modeles;
use \Noyau\Classes\App;

class CategoriesGestionnaire extends \Noyau\Classes\GestionnaireGenerique {

  public function __construct(){
    $this->_table = 'categories';
    $this->_modele = '\App\Modeles\Categorie';
  }

}
