<?php
require 'Application/Bootstrap.php'; //Contient les informations de configuration de l'application

session_start(); //démarre une session PHP, pour que l'on puisse utiliser $_SESSION (pour l'identification utilisateur par exemple)

//récupère le paramètre "action" de l'url qui sera utilisé par le contrôleur

//-------------origine----------------
/*if (!isset($_GET['action'])) {
  $action = "accueil";
} 
else {
  $action = $_GET['action'];
}*/
//-----------test---------------------- 
/*if (!isset($_GET['action'])) {
  $action = "accueil";
} 

if (!isset($_GET['action'])) {
  $action1 = "lifestyle";
} 
else {
  $action = $_GET['action'];
}
*/
//--------------test-----------------
if (!isset($_GET['action'])) {
  if ($_GET['action'] == 'accueil') {
    $action = "accueil";}
  if ($_GET['action'] == 'lifestyle') {
    $action = "lifestyle";}
  if ($_GET['action'] == 'newsletter') {
    if (isset($_GET['id']) && $_GET['id'] > 0){
      $action = "newsletter"; 
    }else {
        // Autre exception
        throw new Exception('Aucun identifiant de billet envoyé');
    }
  }
    
} else {
  $action = $_GET['action'];
}

//------------------------------------------


//récupère le paramètre "action" de l'url qui sera utilisé par le contrôleur

$controller = new Application\Controllers\Frontend(); //Crée un objet Frontend, qui est le contrôleur de base de l'application

if (is_callable(array($controller, $action))) { //on vérifie si la méthode "$action" existe dans le contrôleur "$controller"
  $controller->$action(); //si oui, on l'appelle
  //et apres con fait quoi?

} else {
  throw new Exception('sa ne marche pas a la place de la fonction index de frontend');
  //$controller->index(); //si non, on appelle la méthode index(), ou une méthode d'erreur par exemple
}
