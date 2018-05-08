<?php
  session_start();

  require_once('models/user.php');
  require_once('models/article.php');
  require_once('models/panier.php');
  require_once('models/image.php');

  $repertoire_icon = "css/image/icon/";
  $repertoire = 'css/image/jacket/';
  $title = 'Catalogue '.$_POST['plateform'];

  if(!empty($_SESSION['admin'])){
    $profil = getUser($_SESSION['admin']);
  } elseif(!empty($_SESSION['user'])) {
    $profil = getUser($_SESSION['user']);
  } else {
    $profil['icon'] = "icon.png";
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['plateform'])) {
      $req = catalogue_game($_POST['plateform']);
    }
  }

  include('views/catalogue.php');
?>
