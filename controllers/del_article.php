<?php
  session_start();

  require_once('models/article.php');

  $title = 'Supprimer article';

  if(!empty($_SESSION['admin'])) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      if(!empty($_POST['nameGame'] ) && $_POST['nameGame'] != "Nom") {
        if(!empty($_POST['plateform'])) {
          $req = list_article($_POST['nameGame'],$_POST['plateform']);

          if(!empty($req)) {
            $errMsg = del($_POST['nameGame'],$_POST['plateform']);

            header('Location: panneau_administration');
          } else {
            $errMsg = 'Le jeux n\'existe pas';
          }
        } else {
          $errMsg = 'Veuillez choisir la plateform';
        }
      } else {
        $errMsg = 'Veuillez remplir le nom du jeux';
      }
    }

    include('views/del_article.php');
  } else {
    header('Location: welcome');
  }
 ?>
