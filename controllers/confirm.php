<?php
require_once('models/panier.php');
require_once('models/user.php');
  session_start();

  $verif = false;

  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(!empty($_SESSION['admin'])){
      $user = getUser($_SESSION['admin']);
    } elseif(!empty($_SESSION['user'])) {
      $user = getUser($_SESSION['user']);
    } else {
      header('Location: login');
    }

    $idGame = conca_id($_SESSION['panier']['id']);

    $mt = montant_total();

    $verif = commande($user['unum'],$idGame,$mt);

    del_panier();

    header('Location: welcome');
  }

  if($verif) {
    echo "Commande validé!";
  } else {
    echo "Erreur commande pas valide!";
  }
 ?>
