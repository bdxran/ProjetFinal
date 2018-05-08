<?php
  require_once('models/user.php');

  $title = "Connection";

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pseudo=htmlspecialchars($_POST['pseudo']);
    $getUser = getUser($pseudo);

    if(!empty($getUser)) {
      $password = sha1($_POST['password']);

      if($getUser['password'] == $password) {
        session_start();

        if($getUser['grade'] == 'admin') {
          $_SESSION['admin'] = $getUser['pseudo'];
        } elseif($getUser['grade'] == 'user') {
          $_SESSION['user'] = $getUser['pseudo'];
        }

        header('Location: welcome');

        exit;
      } else {
        $errMsg = 'Le mot de passe est incorrect ou vide!';
      }
    } else {
      $errMsg = 'Le pseudo est incorrect ou vide!';
    }
  }

  include('views/login.php');
?>
