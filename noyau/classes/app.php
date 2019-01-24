<?php

namespace Noyau\Classes;

abstract class App {

    private static $_connexion = null;

    // GETTERS
    public static function getConnexion(){
        return self::$_connexion;
    }

    // SETTERS
    public static function setConnexion(){
        // Création de l'objet PDO $connexion
        try {
            self::$_connexion = new \PDO(
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
        self::setConnexion();
    }

    public static function stop(){
       self::$_connexion = null;
    }

}