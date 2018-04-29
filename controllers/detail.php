<?php
  require_once('models/article.php');
  require_once('models/panier.php');

  session_start();

  if(isset($_GET['id'])){
    $req = article($_GET['id']);
  }

  $title = $req['nameGame'];
  $repertoire = "css/image/jacket/";

  include('views/detail.php');
 ?>
