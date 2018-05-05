<?php
  function getUser($pseudo) {
    require_once("include/db.php");

    $bdd = db_connect();

    $req = $bdd->prepare('SELECT * FROM Users WHERE pseudo = ?');
    $req->execute(array($pseudo));

    return $req->fetch();
  }

  function setUser($pseudo, $password, $mail, $adress, $numero, $code_postal, $city, $naissance, $genre) {
    $password = sha1($password);

    require_once("include/db.php");

    $bdd = db_connect();

    $req = $bdd->prepare('INSERT INTO Users (pseudo, password, mail, adress, numero, code_postal, city, naissance, genre) VALUES (?,?,?,?,?,?)');
    $req->execute(array($pseudo,$password,$mail,$adress,$numero,$code_postal,$city,$naissance,$genre));

    return $req;
  }

  function updateUser($pseudo,$mail,$icon,$adress,$numero,$code_postal,$city) {
    require_once("include/db.php");
    
    $bdd = db_connect();

    $req = $bdd->prepare('UPDATE Users SET pseudo = ?, mail = ?, icon = ?, adress = ?, numero = ?, code_postal = ?, city = ? WHERE pseudo = ?');
    $req->execute(array($pseudo,$mail,$icon,$adress,$numero,$code_postal,$city,$pseudo));

    return $req;
  }

  function setPassword($password, $pseudo) {
    $password = sha1($password);

    require_once("include/db.php");

    $bdd = db_connect();

    $req = $bdd->prepare('UPDATE Users SET password = ? WHERE pseudo = ?');
    $req->execute(array($password,$pseudo));

    return $req;
  }

  function getDataAdmin() {
    require_once("include/db.php");

    $bdd = db_connect();

    $req = $bdd->prepare('SELECT * FROM Users WHERE grade = "admin"');
    $req->execute(array($id, $login, $mail));

    return $req;
  }
?>
