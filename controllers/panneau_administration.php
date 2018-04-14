<?php
  session_start();
  if(!empty($_SESSION['admin'])) {
    require_once('models/admin.php');

    $title = 'Panneau d\'administration';
    $repertoire_icon = "css/image/icon/";    

    $profil = getAdmin($_SESSION['admin']);

    include('views/panneau_administration.php');
  } else {
    header('Location: welcome');
  }
?>
