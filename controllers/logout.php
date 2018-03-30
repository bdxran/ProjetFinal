<?php
  session_start();

  if(!empty($_SESSION['pseudo']))
  {
      session_unset();
      session_destroy();
  }
  header('Location: welcome');
?>
