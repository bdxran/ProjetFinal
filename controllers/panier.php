<?php
  session_start();

  require_once('models/panier.php');
  require_once('models/article.php');

  $title = 'panier';

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['quantite'])){
      if(!empty($_POST['gnum'])) {
        $req = getArticle($_POST['gnum']);

        add_article($req['gnum'],$req['nameGame'],$req['prix'],$req['plateform'],$_POST['quantite']);
      }
    }
  }

  if(isset($_GET['id'])) {
    del_article($_GET['id']);
    header('Location: panier');
  }

  if($_GET['run_del_panier']) {
    del_panier();
    header('Location: panier');
  }

  include('views/panier.php');
 ?>
