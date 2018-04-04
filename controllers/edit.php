<?php
  include('models/admin.php');

  session_start();

  if(empty($id)){
    $id=$_GET['id'];
  }

  $result = getLogin($id);

  if($_GET['password'] == $_GET['confirmPassword']) {

    if(!empty($req)) {
      $errorMessage = 'Login déjà pris!';

      header('Location: edit?id='.$id);
    } else {
      $password=sha1($_GET['password']);

      setAdmin($req['anum'], $password);

      header('Location: panneau_administratif');
    }
  } elseif($_GET['password']!=$_GET['confirmPassword']) {
    $errorMessage = 'Mot de passe différent!';

    header('Location: edit?id='.$id);
  }

  $title = 'Editer profil';

  include('views/edit.php');
?>
