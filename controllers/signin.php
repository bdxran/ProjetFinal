<?php
  require("models/user.php");

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login=htmlspecialchars($_POST['pseudo']);

    if($login <= 16) {
      $getUser=getUser($_POST['pseudo']);

      if(!empty($getUser)) {
        $errMsg = 'Pseudo est déjà pris, veulliez en choisir un autre!';

        } else {
          if(!empty($_POST['password']) && !empty($_POST['passwordVerif'])) {

          if($_POST['password'] == $_POST['passwordVerif']) {
            $passwordlength=strlen($_POST['password']);

              if($passwordlength <= 16) {

                setUser($_POST['pseudo'],$_POST['password'],$_POST['mail'],$_POST['adress'],$_POST['naissance'],$_POST['genre']);

                session_start();

                $_SESSION['user'] = $_POST['pseudo'];

                header('Location: welcome');

                exit();
              } else {
                $errMsg = 'Password est long, taille maximun de 16 caractére!';
              }
            } else {
              $errMsg = 'Les mot de passe ne sont pas identique!';
          }
        } else {
          $errMsg = 'Password vide, veulliez en rentrer un!';
        }
      }
    } else {
      $errMsg = 'Pseudo trop long, taille maximun de 16 caractére!';
    }
  }

  $title = 'Inscription';

  include('views/signin.php')
?>
