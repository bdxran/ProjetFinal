<?php
  require_once('models/image.php');

  session_start();

  $title = 'Profil';
  $repertoire_icon = "css/image/icon/";

  if(!empty($_SESSION['admin'])) {
    require_once('models/admin.php');

    $profil = getAdmin($_SESSION['admin']);

    include('views/profil.php');
  } elseif(!empty($_SESSION['user'])) {
    require_once('models/user.php');

    $profil = getUser($_SESSION['user']);
    
    include('views/profil.php');
  } else {
    header('Location: welcome');
  }
?>
