<?php
  session_start();

  require_once('models/panier.php');
  require_once('models/user.php');

  $verif = false;
  $verif2 = false;
  $repertoire_icon = "css/image/icon/";

  if(!empty($_SESSION['admin'])){
    $profil = getUser($_SESSION['admin']);
  } elseif(!empty($_SESSION['user'])) {
    $profil = getUser($_SESSION['user']);
  } else {
    $profil['icon'] = "icon.png";
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_SESSION['admin'])){
      $user = getUser($_SESSION['admin']);
    } elseif(!empty($_SESSION['user'])) {
      $user = getUser($_SESSION['user']);
    } else {
      header('Location: login');
    }

    $verif = commande($user['unum'],$_SESSION['amt']);

    $req = last_orders();

    $verif2 = commande_article($req['onum'],$_SESSION['panier']);
  }

  if($verif && $verif2) {
    $errMsg = "Commande validé!";

    del_panier();

    include('views/confirm.php');
  } else {
    $errMsg = "Erreur commande pas valide!";

    include('views/confirm.php');
  }
 ?>
