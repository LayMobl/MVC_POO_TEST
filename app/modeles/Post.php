<?php
/*
./app/modeles/Post.php
 */

namespace App\Modeles;

class Post extends \Noyau\Classes\ModeleGenerique {

  private $_id, $_titre, $_slug, $_texte,
          $_datePublication, $_media, $_auteur;

  // GETTERS
  public function getId(){
    return $this->_id;
  }
  public function getTitre(){
    return $this->_titre;
  }
  public function getSlug(){
    return $this->_slug;
  }
  public function getTexte(){
    return $this->_texte;
  }
  public function getDatePublication(){
    return $this->_datePublication;
  }
  public function getMedia(){
    return $this->_media;
  }
  public function getAuteur(){
    return $this->_auteur;
  }

  // SETTERS
  public function setId(int $data = null){
    if ($data):
      $this->_id = $data;
    endif;
  }
  public function setTitre(string $data = null){
    if ($data):
      $this->_titre = $data;
    endif;
  }
  public function setSlug(string $data = null){
    if ($data):
      $this->_slug = $data;
    endif;
  }
  public function setTexte(string $data = null){
    if ($data):
      $this->_texte = $data;
    endif;
  }
  public function setDatePublication(string $data = null){
    if ($data):
      $this->_datePublication = $data;
    endif;
  }
  public function setMedia(string $data = null){
    if ($data):
      $this->_media = $data;
    endif;
  }
  public function setAuteur(int $data = null){
    if ($data):
      $this->_auteur = $data;
    endif;
  }



}
