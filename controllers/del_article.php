<?php
  session_start();

  if(!empty($_SESSION['admin'])) {
    $title = 'Supprimer article';

    include('views/del_article.php');
  } else {
    header('Location: welcome');
  }
 ?>
