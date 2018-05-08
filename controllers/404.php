<?php
  session_start();

  require_once('models/user.php');
  require_once('models/panier.php');
  require_once('models/article.php');

  $repertoire_icon = "css/image/icon/";
  $title = "404";

  if(!empty($_SESSION['admin'])){
    $profil = getUser($_SESSION['admin']);
  } elseif(!empty($_SESSION['user'])) {
    $profil = getUser($_SESSION['user']);
  } else {
    $profil['icon'] = "icon.png";
  }

  http_response_code(404);

  include('views/404.php');
?>
