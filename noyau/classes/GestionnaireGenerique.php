<?php
/*
./noyau/classes/GestionnaireGenerique.php
 */

namespace Noyau\Classes;

abstract class GestionnaireGenerique {

  protected $_table, $_modele;

  public function findAll(array $params = []){
    $params_default = [
      'orderBy'  => 'id',
      'orderSens'=> 'ASC',
      'limit'    => null,
      'offset'   => 0
    ];
    $params = array_merge($params_default, $params);
    $orderBy   = App::securify($params['orderBy']);
    $orderSens = App::securify($params['orderSens']);

    $sql = "SELECT *
            FROM {$this->_table}
            ORDER BY `$orderBy` $orderSens ";
    if ($params['limit']!== null):
      $sql .= " LIMIT :limit
                OFFSET :offset ";
    endif;
    $sql .= ";";
    $rs = App::getConnexion()->prepare($sql);
    if ($params['limit']!== null):
      $rs->bindValue(':limit',  $params['limit'],  \PDO::PARAM_INT);
      $rs->bindValue(':offset', $params['offset'], \PDO::PARAM_INT);
    endif;
    $rs->execute();
    return $this->convertPDOStatementToArrayObj($rs, $this->_modele);
  }

  protected function convertPDOStatementToArrayObj(\PDOStatement $rs = null, string $obj){
    $tab = [];
    if ($rs):
      foreach ($rs->fetchAll(\PDO::FETCH_ASSOC) as $r):
        $tab[] = new $obj($r);
      endforeach;
    endif;
    return $tab;
  }

  public function findOneById(int $id){
    $sql = "SELECT *
            FROM {$this->_table}
            WHERE id = :id;";
    $rs = App::getConnexion()->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();

    return new $this->_modele($rs->fetch(\PDO::FETCH_ASSOC));
  }

  public function findOneBy(array $params = []){
      $params_default = [
        'findOneBy' => 'id',
        'data' => 0
      ];

      $params = array_merge($params_default, $params);
      $field = App::securify($params['findOneBy']);
      $type  = App::getPDOParamType($params['data']);

      $sql = "SELECT *
              FROM {$this->_table}
              WHERE `$field` = :data;";
      $rs = App::getConnexion()->prepare($sql);
      $rs->bindValue(':data', $params['data'], $type );
      $rs->execute();

      return new $this->_modele($rs->fetch(\PDO::FETCH_ASSOC));
  }

 }
