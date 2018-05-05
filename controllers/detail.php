<?php
  require_once('models/user.php');
  require_once('models/article.php');
  require_once('models/panier.php');

  session_start();

  $repertoire_icon = "css/image/icon/";

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
  $repertoire = "css/image/jacket/";

  include('views/detail.php');
 ?>
