<?php
/*
./noyau/classes/ModeleGenerique.php
 */

namespace Noyau\Classes;

abstract class ModeleGenerique {

   public function __construct(array $params = null){
     if ($params):
         $this->hydrater($params);
     endif;
   }

   // HYDRATATION
   public function hydrater(array $params = null){
     if ($params):
       foreach ($params as $propriete => $valeur):
         $nomMethode = 'set' . ucFirst($propriete);
         if (method_exists($this, $nomMethode)):
           $this->$nomMethode($valeur);
         endif;
       endforeach;
     endif;
   }

 }
