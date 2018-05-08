<?php
  session_start();

  require_once('models/user.php');
  require_once('models/article.php');
  require_once('models/panier.php');
  require_once('models/image.php');

  $title = "Commande";
  $repertoire_icon = "css/image/icon/";
  $repertoire = 'css/image/jacket/';

  if(!empty($_SESSION['admin'])){
    $profil = getUser($_SESSION['admin']);
  } elseif(!empty($_SESSION['user'])) {
    $profil = getUser($_SESSION['user']);
  } else {
    $profil['icon'] = "icon.png";
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['pseudo'])) {
      $req = getUser($_POST['pseudo']);

      $req2 = getCommandeAdmin($req['unum']);
      $onum = 0;
    }
  }

  include('views/view_commande_admin.php');
?>
