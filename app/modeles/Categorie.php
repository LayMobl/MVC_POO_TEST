<?php
/*
./app/modeles/Categorie.php
 */

namespace App\Modeles;

class Categorie extends \Noyau\Classes\ModeleGenerique {

    /**
     * [private description]
     * @var int
     */
    private $_id;
    /**
     * [private description]
     * @var string
     */
    private $_titre;
    /**
     * [private description]
     * @var string
     */
    private $_slug;

    public function getId(){
        return $this->_id;
    }
    public function getTitre(){
        return $this->_titre;
    }
    public function getSlug(){
        return $this->_slug;
    }

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

}