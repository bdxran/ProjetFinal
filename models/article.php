<?php
  function add($nameGame,$editeur,$prix,$date_parution,$plateform,$pegi,$genre,$jacket,$description) {
    require_once('include/db.php');

    $bdd = db_connect();

    $req = $bdd->prepare('INSERT INTO Game (nameGame,editeur,plateform,prix,pegi,genre,jacket,date_parution,description) VALUES (?,?,?,?,?,?,?,?,?)');
    $req->execute(array($nameGame,$editeur,$plateform,$prix,$pegi,$genre,$jacket,$date_parution,$description));

    return $req;
  }

  function update($nameGame,$editeur,$prix,$date_parution,$plateform,$pegi,$genre,$jacket,$description,$id) {
    require_once('include/db.php');

    $bdd = db_connect();

    $req = $bdd->prepare('UPDATE Game SET nameGame = ?, editeur = ?, plateform = ?, prix = ?, pegi = ?, genre = ?, jacket = ?, date_parution = ?, description = ? WHERE gnum = ?');
    $req->execute(array($nameGame,$editeur,$plateform,$prix,$pegi,$genre,$jacket,$date_parution,$description,$id));

    return $req;
  }

  function article($id) {
    require_once('include/db.php');

    $bdd = db_connect();

    $req = $bdd->prepare('SELECT * FROM Game WHERE gnum = ?');
    $req->execute(array($id));

    return $req->fetch();
  }

  function getArticle($gnum) {
    require_once('include/db.php');

    $bdd = db_connect();

    $req = $bdd->prepare('SELECT * FROM Game WHERE gnum = ?');
    $req->execute(array($gnum));

    return $req->fetch();
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

  function best() {
    require_once('include/db.php');

    $bdd = db_connect();

    $req = $bdd->query('SELECT gnum, SUM(quantite) mycount FROM OrdersArticle GROUP BY gnum ORDER BY mycount DESC');
    $req = $req->fetch();

    $req2 = $bdd->prepare('SELECT * FROM Game WHERE gnum = ?');
    $req2->execute(array($req['gnum']));

    return $req2;
  }

  function recherche_game($recherche,$plateform) {
    require_once('include/db.php');

    $bdd = db_connect();

    if(!empty($plateform)){
      $req = $bdd->prepare("SELECT * FROM Game WHERE nameGame LIKE CONCAT('%',?,'%') AND plateform = ?");
      $req->execute(array($recherche,$plateform));
    } else {
      $req = $bdd->prepare("SELECT * FROM Game WHERE nameGame LIKE CONCAT('%',?,'%')");
      $req->execute(array($recherche));
    }

    return $req;
  }

  function catalogue_game($plateform) {
    require_once('include/db.php');

    $bdd = db_connect();

    $req = $bdd->prepare("SELECT * FROM Game WHERE plateform = ?");
    $req->execute(array($plateform));

    return $req;
  }

  function best_game_graphique() {
    require_once('include/db.php');

    $bdd = db_connect();

    $req = $bdd->prepare("SELECT gnum, SUM(quantite) mycount FROM OrdersArticle GROUP BY gnum ORDER BY mycount DESC");
    $req->execute();

    return $req;
  }
 ?>
