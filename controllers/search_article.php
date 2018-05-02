<?php
require_once('models/user.php');
require_once('models/article.php');
require_once('models/panier.php');
require_once('models/image.php');

session_start();

if(!empty($_SESSION['admin'])){
  $profil = getUser($_SESSION['admin']);
} elseif(!empty($_SESSION['user'])) {
  $profil = getUser($_SESSION['user']);
} else {
  $profil['icon'] = "icon.png";
}

$repertoire_icon = "css/image/icon/";
$repertoire = 'css/image/jacket/';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(!empty($_POST['search'])) {
    $req = recherche_game($_POST['search'],$_POST['plateform']);
  } else {
    $errMsg = "Veuillez entrée une valeur de recherche";
  }
}

include('views/search_article.php');
 ?>
