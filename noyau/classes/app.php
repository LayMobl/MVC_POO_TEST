<?php

namespace Noyau\Classes;

abstract class App {

  private static $_connexion = null;
  private static $_base;

  // GETTERS
  public static function getConnexion(){
    return SELF::$_connexion;
  }

  public static function getROOT(){
    return SELF::$_base;
  }

  // SETTERS
  public static function setROOT(){
    SELF::$_base = 'http://'
        . $_SERVER['HTTP_HOST']
        . str_replace(basename($_SERVER['SCRIPT_NAME']), '',$_SERVER['SCRIPT_NAME']);
  }

  public static function setConnexion(){
   // Création de l'objet PDO $connexion
     try {
        SELF::$_connexion = new \PDO(
          "mysql:host=".DBHOST.";dbname=".DBNAME,
          DBUSER,
          DBPWD,
          array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
        );
     }
     catch (\PDOException $e) {
          die("Problème de connexion à la base de données...");
     }
  }


  // AUTRES METHODES

  public static function start(){
    SELF::setConnexion();
    SELF::setROOT();
  }

  public static function stop(){
    SELF::$_connexion = null;
  }

  public static function slugify(string $str) {
        return trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($str)), '-');
    }

  public static function datify(string $date, string $format = DATE_FORMAT){
    return date_format(date_create($date), $format);
  }

  public static function securify(string $str){
    return str_replace("`","``",htmlentities($str));
  }


    public static function getPDOParamType($data){
      switch (gettype($data)) {
        case 'string':
          return \PDO::PARAM_STR;
        default:
          return \PDO::PARAM_INT;
      }
    }

}
