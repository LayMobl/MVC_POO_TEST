<?php
/*
    ./www/index.php
    Dispatcher central
    1. Chargement de la configuration
        - Chargement des paramètres
            - paramètres de connexion
            - définition des constantes
            - initialisation des zones dynamiques
        - Démarrage de $connexion
        - chargement des fonctions
    2. Chargement du routeur
        - Route par défaut :
            - Charger un controleur
            - Lancer une action qui
                - va chercher des infos dans le modèle
                - puis qui charge une vue dans une zone dynamique
    3. Chargement du template qui affiche les zones dynamiques
    4. Fermeture de l'application (la connexion)
 */

 require_once "../vendor/autoload.php";
 include '../app/config/parametres.php';

 \Noyau\Classes\App::start();

 include_once "../app/routeur.php";
 include_once "../app/vues/templates/defaut.php";


 \Noyau\Classes\App::stop();
