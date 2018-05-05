<?php
  require_once('models/panier.php');
  require_once('models/user.php');

  session_start();

  $verif = false;
  $verif2 = false;

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_SESSION['admin'])){
      $user = getUser($_SESSION['admin']);
    } elseif(!empty($_SESSION['user'])) {
      $user = getUser($_SESSION['user']);
    } else {
      header('Location: login');
    }

    $verif = commande($user['unum']);

    $req = last_orders();

    $verif2 = commande_article($req['onum'],$_SESSION['panier']);
  }

  if($verif && $verif2) {
    echo "Commande validé!";

    del_panier();

    header('Location: welcome');
  } else {
    echo "Erreur commande pas valide!";
  }
 ?>
