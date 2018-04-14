<?php
require_once('models/image.php');

session_start();

$title = 'Acceuil';
$repertoire_icon = "css/image/icon/";

if(!empty($_SESSION['admin'])) {
  require_once('models/admin.php');

  $profil = getAdmin($_SESSION['admin']);
} elseif(!empty($_SESSION['user'])) {
  require_once('models/user.php');

  $profil = getUser($_SESSION['user']);
} else {
  $profil['icon'] = "icon.png";
}

include('views/welcome.php');

?>
