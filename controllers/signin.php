<?php
  require("models/user.php");

  $title = 'Inscription';

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

                if(!empty($_POST['mail'])) {
                  if(!empty($_POST['adress'])) {
                    if(!empty($_POST['numero'])) {
                      if(!empty($_POST['code_postal'])) {
                        if(!empty($_POST['city'])) {
                          if(!empty($_POST['naissance'])) {
                            if(!empty($_POST['genre'])) {
                              setUser($_POST['pseudo'],$_POST['password'],$_POST['mail'],$_POST['adress'],$_POST['numero'],$_POST['code_postal'],$_POST['city'],$_POST['naissance'],$_POST['genre']);

                              session_start();

                              $_SESSION['user'] = $_POST['pseudo'];

                              header('Location: welcome');

                              exit();
                            } else {
                              $errMsg = 'Choisissez un genre valide!';
                            }
                          } else {
                            $errMsg = 'Choisissez une date de naissance valide!';
                          }
                        } else {
                          $errMsg = 'Rentrez une ville!';
                        }
                      } else {
                        $errMsg = 'Rentrez un code postal!';
                      }
                    } else {
                      $errMsg = 'Rentrez un numéro d\'habitation!';
                    }
                  } else {
                    $errMsg = 'Rentrez le nom de rue, où vous habitez!';
                  }
                } else {
                  $errMsg = 'Rentrez une adresse mail!';
                }
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

  include('views/signin.php')
?>
