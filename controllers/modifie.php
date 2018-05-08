<?php
require_once('models/user.php');
require_once('models/image.php');
require_once('models/panier.php');
require_once('models/article.php');

session_start();

if(!empty($_SESSION['admin'])) {
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['id'])) {
      $repertoire = 'css/image/jacket/';
      $title = "Modification Article";

      $req = getArticle($_POST['id']);

      $_SESSION['id'] = $req['gnum'];
      $_SESSION['description'] = $req['description'];
      $_SESSION['jacket'] = $req['jacket'];

      include('views/modifie.php');
    }

    if(!empty($_POST['nameGame'])) {
      if(!empty($_POST['editeur'])) {
        if(!empty($_POST['plateform'])) {
          if(!empty($_POST['prix'])) {
            if(!empty($_POST['pegi'])) {
              if(!empty($_POST['genre'])) {
                if(!empty($_POST['date_parution'])) {
                  if(!empty($_FILES['jacket']['name'])) {
                    verif_image($_FILES['jacket']['tmp_name'],$_FILES['jacket']['name']);
                  } elseif(empty($_FILES['jacket']['name'])) {
                    $_FILES['jacket']['name'] = $_SESSION['jacket'];
                  }
                  if(empty($_POST['description'])) {
                    $_POST['description'] = $_SESSION['description'];
                  }
                    $_POST['id'] = $_SESSION['id'];

                    update($_POST['nameGame'],$_POST['editeur'],$_POST['prix'],$_POST['date_parution'],$_POST['plateform'],$_POST['pegi'],$_POST['genre'],$_FILES['jacket']['name'],$_POST['description'],$_POST['id']);

                    unset($_SESSION['description']);
                    unset($_SESSION['jacket']);
                    unset($_SESSION['id']);

                    header('Location: panneau_administration');
                }
              }
            }
          }
        }
      }
    }
  }
} else {
  header('Location: welcome');
}
 ?>
