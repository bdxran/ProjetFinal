<?php
  session_start();

  require_once('models/user.php');
  require_once('models/article.php');
  require_once('models/panier.php');
  require_once('models/image.php');

  $title = "Vos commandes";
  $repertoire_icon = "css/image/icon/";
  $repertoire = 'css/image/jacket/';

  if(!empty($_SESSION['admin'])){
    $profil = getUser($_SESSION['admin']);
  } elseif(!empty($_SESSION['user'])) {
    $profil = getUser($_SESSION['user']);
  } else {
    $profil['icon'] = "icon.png";
  }

  $req = getCommande($profil['unum']);
  $onum = 0;

  include('views/view_commande.php');
?>
