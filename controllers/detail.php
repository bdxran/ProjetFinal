<?php
  require_once('models/article.php');
  require_once('models/panier.php');

  session_start();

  if(isset($_GET['nameGame']) AND isset($_GET['plateform'])){
    $req = article($_GET['nameGame'],$_GET['plateform']);
  }

  $title = $req['nameGame'];
  $repertoire = "css/image/jacket/";

  include('views/detail.php');
 ?>
