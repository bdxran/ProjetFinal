<?php
  require_once('models/user.php');

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pseudo=htmlspecialchars($_POST['pseudo']);
    $getUser = getUser($pseudo);

    if(!empty($getUser)) {
      $password = sha1($_POST['password']);

      if($getUser['password'] == $password) {
        session_start();

        $_SESSION['pseudo'] = $getUser['pseudo'];

        header('Location: welcome');

        exit;
      } else {
        $errMsg = 'Le mot de passe est incorrect ou vide!';
      }
    } else {
      $errMsg = 'Le pseudo est incorrect ou vide!';
    }
  }


  $title = "Connection";

  include('views/login.php');

?>
