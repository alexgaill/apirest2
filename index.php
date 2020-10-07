<?php
// On require App pour utiliser le sendData partout sur le projet
require 'App.php';
$app = new App();

//method nous permet de filtrer les methods utilisées pour les appeler au besoin
$method = false;

if (key_exists("method", $_GET)) {
    $method = $_GET["method"];
}

if (key_exists("page", $_GET)) {
    //ucfirst pour mettre le premier caractère en majuscule et ainsi appeler les class correspondantes
    $page = ucfirst($_GET["page"]);
   
    require $page.".php";
    $class = new $page();


    //role va nous permettre de gérer les restrictions en fonction du statut du client
    // On récupère ses rôles grâce à l'apiKey stockée dans les cookies
    $role = array();
    if (key_exists("apiKey", $_COOKIE)) {
       $role = $class->getRole($_COOKIE["apiKey"]);
    }

    // Le routeur gère l'accès aux methods en fonction de la request method appelée par le client
    require 'router.php';
    
} else {
    $app->sendData("Erreur de choix de table");
}
