<?php
  function add($nameGame,$editeur,$prix,$date_parution,$plateform,$pegi,$genre,$jacket,$description) {
    require_once('include/db.php');

    $bdd = db_connect();

    $req = $bdd->prepare('INSERT INTO Game (nameGame,editeur,plateform,prix,pegi,genre,jacket,date_parution,description) VALUES (?,?,?,?,?,?,?,?,?)');
    $req->execute(array($nameGame,$editeur,$plateform,$prix,$pegi,$genre,$jacket,$date_parution,$description));

    return $req;
  }

  function list_article($nameGame,$plateform) {
    require_once('include/db.php');

    $bdd = db_connect();

    $req = $bdd->prepare('SELECT nameGame FROM Game WHERE nameGame = ? AND plateform = ?');
    $req->execute(array($nameGame,$plateform));

		return $req->fetch();
  }

  function del($nameGame,$plateform) {
    require_once('include/db.php');

    $bdd = db_connect();

    $req = $bdd->prepare('DELETE FROM Game WHERE nameGame = ? AND plateform = ?');
    $req->execute(array($nameGame,$plateform));

    return $req;
  }
 ?>
