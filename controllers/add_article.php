<?php
  require_once('models/article.php');
  require_once('models/image.php');

  session_start();

  if(!empty($_SESSION['admin'])) {

    if(!empty($_POST['nameGame'])){
      if(!empty($_POST['editeur'])) {
        if(!empty($_POST['prix'])) {
          if(!empty($_POST['date_parution'])) {
            if(!empty($_POST['pegi'])) {
              if(!empty($_POST['plateform'])) {
                if(!empty($_POST['genre'])) {
                  if(!empty($_FILES['jacket']['name'])) {
                    $repertoire = 'css/image/';
                    $file = $repertoire.basename($_FILES['jacket']['name']);
                    $upload = true;

                    if(file_exists($file)) {
                      $errMsg = 'Le fichier existe déjà!';

                      $upload = false;
                    }

                    if($upload == true) {
                      if (move_uploaded_file($_FILES['jacket']['tmp_name'], $file)) {
                          if(!empty($_POST['description'])) {
                            $errMsg = add($_POST['nameGame'],$_POST['editeur'],$_POST['prix'],$_POST['date_parution'],$_POST['plateform'],$_POST['pegi'],$_POST['genre'],$_FILES['jacket']['name'],$_POST['description']);

                            header('Location: panneau_administration');
                          } else {
                            $errMsg = 'Veuillez remplir la description';
                          }
                        } else {
                            $errMsg = "Erreur inconnue! Merci de retenter l'ajout plus tard ou de contacter l'administrateur.";
                        }
                    } else {
                      $errMsg = 'Erreur! impossible d\'ajouter l\'image';
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

    $title = 'Ajouter article';

    include('views/add_article.php');
  } else {
    header('Location: welcome');
  }

?>
