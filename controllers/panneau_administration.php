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

    $monfichier = fopen('doc/best_game.txt', 'a+');

    for($i=0; $i<5;$i++) {
      $req2 = getArticle($req['gnum'][$i]);
      $info = concat($req2['nameGame'],"|",$req['mycount'][$i]);
      fputs($monfichier, $info);
    }

    fclose($monfichier);

    include('views/panneau_administration.php');
  } else {
    header('Location: welcome');
  }
?>
