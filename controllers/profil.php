<?php
  session_start();

  require_once('models/user.php');
  require_once('models/image.php');
  require_once('models/panier.php');

  $title = 'Profil';
  $repertoire_icon = "css/image/icon/";

  if(!empty($_SESSION['admin'])) {
    $profil = getUser($_SESSION['admin']);
  } elseif(!empty($_SESSION['user'])) {
    $profil = getUser($_SESSION['user']);
  } else {
    header('Location: welcome');
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['pseudo'])){
      if(!empty($_POST['mail'])){
        if(!empty($_POST['adress'])){
          if(!empty($_POST['numero'])){
            if(!empty($_POST['code_postal'])){
              if(!empty($_POST['city'])){
                if(!empty($_FILES['icon']['name'])){
                  verif_icon($_FILES['icon']['tmp_name'],$_FILES['icon']['name']);
                } elseif(empty($_FILES['icon']['name'])) {
                  $_FILES['icon']['name'] = "icon.png";
                }
                $errMsg = updateUser($_POST['pseudo'],$_POST['mail'],$_FILES['icon']['name'],$_POST['adress'],$_POST['numero'],$_POST['code_postal'],$_POST['city']);

                header('Location: profil');
              } else {
                $errMsg = 'Veuillez rentrer une ville!';
              }
            }  else {
              $errMsg = 'Veuillez rentrer un code postal!';
            }
          }  else {
            $errMsg = 'Veuillez rentrer un numéro!';
          }
        }  else {
          $errMsg = 'Veuillez rentrer le nom de rue!';
        }
      }  else {
        $errMsg = 'Veuillez rentrer une adresse mail!';
      }
    }  else {
      $errMsg = 'Veuillez rentrer un pseudo!';
    }
  }

  include('views/profil.php');
?>
