<?php
  require_once('models/user.php');

  session_start();

  if(!empty($_SESSION['user'])) {
    $user = getUser($_SESSION['user']);
  } elseif(!empty($_SESSION['admin'])) {
    $user = getUser($_SESSION['admin']);
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['oldPassword'])) {
      $oldPassword = sha1($_POST['oldPassword']);
      if($oldPassword == $user['password']) {
        if(!empty($_POST['newPassword']) && !empty($_POST['verifPassword'])) {
          if($_POST['newPassword'] == $_POST['verifPassword']) {
            $errMsg = setPassword($_POST['newPassword'],$user['pseudo']);

            header('Location: profil');
          } else {
            $errMsg = 'Les mots de passe ne sont pas identique!';
          }
        }  else {
          $errMsg = 'Veuillez rentrer les nouveau mots de passe!';
        }
      } else {
        $errMsg = 'Ancien mot de passe incorrect!';
      }
    }   else {
      $errMsg = 'Veuillez indiquer votre ancien mot de passe!';
    }
  }

  $title = 'Modifier mot de passe';

  include('views/update_password.php');
 ?>
