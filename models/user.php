<?php
  function getUser($pseudo) {
    require_once("include/db.php");

    $bdd = db_connect();

    $req = $bdd->prepare('SELECT * FROM Customers WHERE pseudo = ?');
    $req->execute(array($pseudo));

    return $req->fetch();
  }

  function setUser($pseudo, $password, $mail, $adress, $naissance, $genre) {
    $password = sha1($password);

    require_once("include/db.php");

    $bdd = db_connect();

    $req = $bdd->prepare('INSERT INTO Customers (pseudo, password, mail, adress, naissance, genre) VALUES (?,?,?,?,?,?)');
    $req->execute(array($pseudo,$password,$mail,$adress,$naissance,$genre));

    return $req;
  }
?>
