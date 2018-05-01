<?php
    function creation_panier() {
      if(!isset($_SESSION['panier'])){
        $_SESSION['panier'] = array();
        $_SESSION['panier']['id'] = array();
        $_SESSION['panier']['nameGame'] = array();
        $_SESSION['panier']['price'] = array();
        $_SESSION['panier']['plateform'] = array();
        $_SESSION['panier']['quantite'] = array();
      }
      return true;
    }

    function add_article($id, $nameGame, $price, $plateform, $quantite) {
      if(creation_panier()) {
        $article = array_search($id, $_SESSION['panier']['id']);

        if($article !== false) {
          $_SESSION['panier']['quantite'][$article] += $quantite;
        } else{
          array_push($_SESSION['panier']['id'], $id);
          array_push($_SESSION['panier']['nameGame'], $nameGame);
          array_push($_SESSION['panier']['price'], $price);
          array_push($_SESSION['panier']['plateform'], $plateform);
          array_push($_SESSION['panier']['quantite'], $quantite);
        }
      }
    }

    function del_article($id) {
      if(creation_panier()) {
        $tmp = array();
        $tmp['id'] = array();
        $tmp['nameGame'] = array();
        $tmp['price'] = array();
        $tmp['plateform'] = array();
        $tmp['quantite'] = array();

        for($i = 0;$i<count($_SESSION['panier']['id']);$i++) {
          if($_SESSION['panier']['id'][$i] != $id) {
            array_push($tmp['id'], $_SESSION['panier']['id'][$i]);
            array_push($tmp['nameGame'], $_SESSION['panier']['nameGame'][$i]);
            array_push($tmp['price'], $_SESSION['panier']['price'][$i]);
            array_push($tmp['plateform'], $_SESSION['panier']['plateform'][$i]);
            array_push($tmp['quantite'], $_SESSION['panier']['quantite'][$i]);
          }
        }

        $_SESSION['panier'] = $tmp;

        unset($tmp);
      }
    }

      function update_article($id, $moins, $plus) {
        if(creation_panier()) {
          $article = array_search($id, $_SESSION['panier']['id']);
          if($article !== false) {
            if($moins == true) {
              $_SESSION['panier']['quantite'][$article] = $_SESSION['panier']['quantite'][$article] - 1;
            } elseif($plus == true) {
              $_SESSION['panier']['quantite'][$article] = $_SESSION['panier']['quantite'][$article] + 1;
            }
          }

          if($_SESSION['panier']['quantite'][$article] <= 0) {
            del_article($id);
          }
        }
      }

      function montant_total() {
        $total = 0;

        for($i = 0; $i < count($_SESSION['panier']['id']); $i++) {
          $total = $total + ($_SESSION['panier']['quantite'][$i] * $_SESSION['panier']['price'][$i]);
        }

        return $total;
      }

      function del_panier() {
        $_SESSION['panier'] = array();
        $_SESSION['panier']['id'] = array();
        $_SESSION['panier']['nameGame'] = array();
        $_SESSION['panier']['price'] = array();
        $_SESSION['panier']['plateform'] = array();
        $_SESSION['panier']['quantite'] = array();
      }

      function somme_article($quantite,$price) {
        return ($quantite*$price);
      }

      function number_article() {
        return count($_SESSION['panier']['id']);
      }

      function conca_id($id) {
        for($i = 0; $i < count($id); $i++) {
          if($i==0){
            $idGame = $id[$i];
          } else {
            $idGame = $idGame."|".$id[$i];
          }
        }

        return $idGame;
      }

      function commande($idUser,$idGame,$mt) {
        require_once('include/db.php');

        $bdd = db_connect();

        $req = $bdd->prepare('INSERT INTO Orders (idUser,idGame,prix,odate) VALUES (?,?,?,NOW())');
        $req->execute(array($idUser,$idGame,$mt));

        return true;
      }
 ?>
