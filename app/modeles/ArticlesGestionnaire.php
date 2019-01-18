<?php
/*
./app/modeles/articlesGestionnaire.php
 */

namespace App\Modeles;

class ArticlesGestionnaire {

  public function findAll(){
    $tab = [];
    $rs = [
      [
        'titre' => "Titre de l'article 1",
        'texte' => "Texte de l'article 1"
      ],
      [
        'titre' => "Titre de l'article 2",
        'texte' => "Texte de l'article 2"
      ]
    ];
    foreach ($rs as $r) :
      array_push($tab, new Article($r));
    endforeach;
    return $tab;
  }

}
