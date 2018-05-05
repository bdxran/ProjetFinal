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

    $monfichier = fopen('doc/best_game.txt', 'w+');

    $i = 0;

    while($result=$req->fetch()) {
      $req2 = getArticle($result['gnum'][$i]);

      $info = $req2['nameGame']."|".$result['mycount'][$i];

      fputs($monfichier, $info."\n");

      $i++;
    }

    fclose($monfichier);

    include('views/panneau_administration.php');
  } else {
    header('Location: welcome');
  }
?>
