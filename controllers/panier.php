<?php
  session_start();

  require_once('models/user.php');
  require_once('models/panier.php');
  require_once('models/article.php');

  $repertoire_icon = "css/image/icon/";
  $title = 'Panier';

  if(!empty($_SESSION['admin'])){
    $profil = getUser($_SESSION['admin']);
  } elseif(!empty($_SESSION['user'])) {
    $profil = getUser($_SESSION['user']);
  } else {
    $profil['icon'] = "icon.png";
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['quantite'])){
      if(!empty($_POST['gnum'])) {
        $req = getArticle($_POST['gnum']);

        add_article($req['gnum'],$req['nameGame'],$req['prix'],$req['plateform'],$_POST['quantite']);
      }
    } elseif($_POST['run_del_panier']) {
      del_panier();

      header('Location: panier');
    }
  }

  if(isset($_GET['moins'])) {
    update_article($_GET['id'],$_GET['moins'],false);
    header('Location: panier');
  } elseif(isset($_GET['plus'])) {
    update_article($_GET['id'],false,$_GET['plus']);
    header('Location: panier');
  } elseif(isset($_GET['id'])) {
    del_article($_GET['id']);
    header('Location: panier');
  }

  $_SESSION['amt'] = montant_total();

  include('views/panier.php');
 ?>
