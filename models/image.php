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

  function search_image($plateform){
    require_once('include/db.php');

    $bdd = db_connect();

    $req = $bdd->prepare('SELECT jacket FROM Game WHERE NOW() >= date_parution and plateform = ? ORDER BY date_parution DESC');
    $req->execute(array($plateform));
    
    return $req;
  }
 ?>
