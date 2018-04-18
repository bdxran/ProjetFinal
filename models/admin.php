<?php
  function getAdmin($pseudo) {
    require_once("include/db.php");

    $bdd = db_connect();

    $req = $bdd->prepare('SELECT * FROM Users WHERE pseudo = ? AND grade = "admin"');
    $req->execute(array($pseudo));

    return $req->fetch();
  }

  function getLogin($id) {
		require_once("include/db.php");

		$bdd = db_connect();

		$req = $bdd->prepare('SELECT pseudo FROM Users WHERE anum = ? AND grade = "admin"');
    $req->execute(array($id));

		return $req->fetch();
	}

  function getDataAdmin() {
    require_once("include/db.php");

    $bdd = db_connect();

    $req = $bdd->prepare('SELECT * FROM Users WHERE grade = "admin"');
    $req->execute(array($id, $login, $mail));

    return $req;
  }

  function setAdmin($id, $password) {
    require_once("include/db.php");

    $password=sha1($password);

		$bdd = db_connect();

		$req = $bdd->prepare('UPDATE Users SET password=? WHERE anum = ? AND grade = "admin"');
		$req->execute(array($password,$id));

  }
?>
