<?php
  require_once('models/user.php');
  require_once('models/panier.php');
  session_start();
  if(!empty($_SESSION['admin'])) {
    $title = 'Panneau d\'administration';
    $repertoire_icon = "css/image/icon/";

    $profil = getUser($_SESSION['admin']);

    include('views/panneau_administration.php');
  } else {
    header('Location: welcome');
  }
?>
