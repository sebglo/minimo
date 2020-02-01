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
} else {
  $action = $_GET['action'];
}
//-----------------------------------------
//-----------a voir plus tard---------------

/*if (!isset($_GET['action'])) {
  //$action = "accueil";


  if ($_GET['action'] == 'accueil') {
    $action = "accueil";
  } elseif ($_GET['action'] == 'newletter') {
    if (isset($_GET['id']) && $_GET['id'] > 0) {
      //on entre les email dans la base de donnee
    } else {
      // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
      throw new Exception('Aucun identifiant de billet envoyé');
    }
  } /*elseif ($_GET['action'] == 'articles&category=lifestile') {
    //if (isset($_GET['id']) && $_GET['id'] > 0) {
      //on accede a la page lifestyle
      $action = "accueil";
    } else {
      // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
      throw new Exception('Aucun identifiant de billet envoyé');
    }
  } else {
    $action = $_GET['action'];
  }
}*/
//----------------------------------------------------


//récupère le paramètre "action" de l'url qui sera utilisé par le contrôleur

$controller = new Application\Controllers\Frontend(); //Crée un objet Frontend, qui est le contrôleur de base de l'application

if (is_callable(array($controller, $action))) { //on vérifie si la méthode "$action" existe dans le contrôleur "$controller"
  $controller->$action(); //si oui, on l'appelle
  //et apres con fait quoi?

} else {
  $controller->index(); //si non, on appelle la méthode index(), ou une méthode d'erreur par exemple
}
