<?php
  function verif_image($image,$name) {
    $repertoire = 'css/image/';
    $file = $repertoire.basename($name);
    $upload = true;

    if(file_exists($file)) {
      $errMsg = 'Le fichier existe déjà!';

      $upload = false;
    }
    if($upload == true) {
      if (move_uploaded_file($image, $file)) {
                $errMsg = "Image ajoutée avec succès.";
        } else {
            $errMsg = "Erreur inconnue! Merci de retenter l'ajout plus tard ou de contacter l'administrateur.";
        }
    } else {
      $errMsg = 'Erreur! impossible d\'ajouter l\'image';
    }
  }
 ?>
