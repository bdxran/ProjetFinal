<?php
  require_once('models/admin.php');

  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $pseudo=htmlspecialchars($_GET['pseudo']);
    $getAdmin = getAdmin($pseudo);

    if(!empty($getAdmin)) {
      $password = sha1($_GET['password']);

      if($getAdmin['password'] == $password) {
        session_start();

        $_SESSION['admin'] = $getAdmin['pseudo'];

        header('Location: welcome');

        exit;
      } else {
        $errMsg = 'Le mot de passe est incorrect!';
      }
    } else {
      $errMsg = 'Vous n\'êtes pas admin!';
    }
  } else {
    $errMsg = 'Veuilliez remplir les champs!';
  }
?>
  <script language="javascript">
    var error = '<?php echo $errMsg ?>'
    if(error != "") {
      alert(error);
      window.location.href = "http://projetfinal.local";
    }
  </script>
