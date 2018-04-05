<?php
  session_start();
  if(!empty($_SESSION['admin'])) {
    $title = 'Panneau d\'administration';

    include('views/panneau_administration.php');
  } else {
    header('Location: welcome');
  }
?>
