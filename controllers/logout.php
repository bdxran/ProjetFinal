<?php
  session_start();

  if(!empty($_SESSION['pseudo']) || !empty($_SESSION['admin']))
  {
      session_unset();
      session_destroy();
  }
  header('Location: welcome');
?>
