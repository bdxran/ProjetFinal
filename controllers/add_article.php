<?php
  session_start();

  if(!empty($_SESSION['admin'])) {
    $title = 'Ajouter article';

    include('views/add_article.php');
  } else {
    header('Location: welcome');
  }

?>
