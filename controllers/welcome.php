<?php
  require_once('models/user.php');
  require_once('models/article.php');
  require_once('models/panier.php');
  require_once('models/image.php');

  session_start();

  $title = 'Acceuil';
  $repertoire_icon = "css/image/icon/";
  $repertoire = 'css/image/jacket/';
  $req = best();
  $best = $req->fetch();

  if(!empty($_SESSION['admin'])){
    $profil = getUser($_SESSION['admin']);
  } elseif(!empty($_SESSION['user'])) {
    $profil = getUser($_SESSION['user']);
  } else {
    $profil['icon'] = "icon.png";
  }

  include('views/welcome.php');
?>
