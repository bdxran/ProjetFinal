<?php
  function getAdmin($pseudo) {
    require_once("include/db.php");

    $bdd = db_connect();

    $req = $bdd->prepare('SELECT * FROM Admin WHERE pseudo = ?');
    $req->execute(array($pseudo));

    return $req->fetch();
  }

  function getLogin($id) {
		require_once("include/db.php");

		$bdd = db_connect();

		$req = $bdd->prepare('SELECT pseudo FROM Admin WHERE anum = ?');
    $req->execute(array($id));

		return $req->fetch();
	}

  function getDataAdmin() {
    require_once("include/db.php");

    $bdd = db_connect();

    $req = $bdd->prepare("SELECT * FROM Admin");
    $req->execute(array($id, $login, $mail));

    return $req;
  }

  function setAdmin($id, $password) {
    require_once("include/db.php");

		$bdd = db_connect();

		$req = $bdd->prepare('UPDATE Admin SET password=? WHERE anum = ?');
		$req->execute(array($password,$id));

  }

  function removeAdmin($id) {
    require_once("include/db.php");

		$bdd = db_connect();

    $req = $bdd->query('DELETE FROM Admin WHERE anum = '.$id);

    header('Location: panneau_administratif');
  }
?>
