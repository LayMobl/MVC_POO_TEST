<?php
/*
./noyau/classes/ControleurGenerique.php
 */

namespace Noyau\Classes;

abstract class ControleurGenerique {

  protected $_table;
  protected $_gestionnaire;

  public function indexAction(array $params = []){
    ${$this->_table} = $this->_gestionnaire->findAll($params);
    include '../app/vues/'.$this->_table.'/index.php';
  }

  public function showAction(array $params = []){
    ${rtrim($this->_table, 's')} = $this->_gestionnaire->findOneBy($params);
    include '../app/vues/'.$this->_table.'/show.php';
  }

 }
