<?php
  session_start();

  require_once('models/admin.php');

  if(!empty($_POST['password']) && !empty($_POST['confirmPassword'])) {
    if($_POST['password'] == $_POST['confirmPassword']) {

      setAdmin($_GET['id'], $_POST['password']);

      header('Location: panneau_administration');
    } else {
      $errMsg = 'Les mots de passe ne sont pas identique!';
    }
  } else {
    $errMsg = 'Veuillez remplir les champs svp!';
  }

  $title = 'Editer profil';

  include('views/edit.php');
?>
