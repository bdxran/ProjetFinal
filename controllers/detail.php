<?php
  session_start();

  require_once('models/user.php');
  require_once('models/article.php');
  require_once('models/panier.php');

  $repertoire_icon = "css/image/icon/";
  $repertoire = "css/image/jacket/";

  if(!empty($_SESSION['admin'])){
    $profil = getUser($_SESSION['admin']);
  } elseif(!empty($_SESSION['user'])) {
    $profil = getUser($_SESSION['user']);
  } else {
    $profil['icon'] = "icon.png";
  }

  if(isset($_POST['id'])){
    $req = article($_POST['id']);
  }

  $title = $req['nameGame'];

  include('views/detail.php');
 ?>
