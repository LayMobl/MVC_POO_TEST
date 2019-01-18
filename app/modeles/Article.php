<?php
/*
./app/modeles/Article.php
 */

namespace App\Modeles;

class Article extends \Noyau\Classes\ModeleGenerique {

  private $_id;
  private $_titre;
  private $_texte;

  // GETTERS
  public function getId(){
    return $this->_id;
  }
  public function getTitre(){
    return $this->_titre;
  }
  public function getTexte(){
    return $this->_texte;
  }

  // SETTERS
  public function setTitre(string $data = null){
    if ($data):
      $this->_titre = $data;
    endif;
  }
  public function setTexte(string $data = null){
    if ($data):
      $this->_texte = $data;
    endif;
  }



}
