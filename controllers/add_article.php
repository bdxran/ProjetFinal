<?php
  session_start();

  require_once('models/article.php');
  require_once('models/image.php');

  if(!empty($_SESSION['admin'])) {
      $title = 'Ajouter article';

      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($_POST['nameGame']) && $_POST['nameGame'] != "Nom"){
          if(!empty($_POST['editeur']) && $_POST['editeur'] != "Editeur") {
            if(!empty($_POST['prix'])) {
              if(!empty($_POST['date_parution'])) {
                if(!empty($_POST['pegi'])) {
                  if(!empty($_POST['plateform'])) {
                    if(!empty($_POST['genre'])) {
                      if(!empty($_FILES['jacket']['name'])) {
                        verif_image($_FILES['jacket']['tmp_name'],$_FILES['jacket']['name']);
                        if(!empty($_POST['description'])) {
                          $errMsg = add($_POST['nameGame'],$_POST['editeur'],$_POST['prix'],$_POST['date_parution'],$_POST['plateform'],$_POST['pegi'],$_POST['genre'],$_FILES['jacket']['name'],$_POST['description']);

                          header('Location: panneau_administration');
                        } else {
                          $errMsg = 'Veuillez remplir la description';
                        }
                      } else {
                        $errMsg = 'Veuillez ajouter une jacket';
                      }
                    } else {
                      $errMsg = 'Veuillez choisir un genre';
                    }
                  } else {
                    $errMsg = 'Veuillez choisir la plateform';
                  }
                } else {
                  $errMsg = 'Veuillez choisir le pegi';
                }
              } else {
                $errMsg = 'Veuillez choisir une date de parution';
              }
            } else {
              $errMsg = 'Veuillez remplir le prix';
            }
          } else {
            $errMsg = 'Veuillez remplir l\'éditeur';
          }
        } else {
          $errMsg = 'Veuillez remplir le nom du jeux';
        }
      }

      include('views/add_article.php');
  } else {
    header('Location: welcome');
  }
?>
