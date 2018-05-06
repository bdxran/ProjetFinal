<?php
  require_once('models/user.php');
  require_once('models/image.php');
  require_once('models/panier.php');
  require_once('models/article.php');

  session_start();

  if(!empty($_SESSION['admin'])) {
    $title = 'Panneau d\'administration';
    $repertoire_icon = "css/image/icon/";

    $profil = getUser($_SESSION['admin']);
    $req = best_game_graphique();

    $resultat = array();

    while($result=$req->fetch()) {
      $req2 = getArticle($result['gnum']);

      $info = "";

      $info = $req2['nameGame']."|".$result['mycount'];

      array_push($resultat, $info);
    }

    include('views/panneau_administration.php');
  } else {
    header('Location: welcome');
  }
?>
