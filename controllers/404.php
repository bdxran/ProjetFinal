<?php

session_start();

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

http_response_code(404);

include('views/404.php');

?>
