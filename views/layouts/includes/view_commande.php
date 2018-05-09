<div id="entete">
  <h1 id="title_commande">Vos commandes</h1>
</div>
<div id="corps">
  <ul>
    <?php while($result = $req->fetch()) { ?>
      <li class="commande">
        <?php if($onum != $result['onum']) {
          $onum = $result['onum'];?>
          <div class="mise_date">
            <h2 class="title_date">Commande effectué le <?=$result['odate'] ?></h2><span class="total">Total : <?=$result['amt'] ?> €</span>
          </div>
        <?php } ?>
        <img src="<?=$repertoire.$result['jacket'] ?>" class="img_commande"/>
        <ul class="ul_list_commande">
          <li class="li_list_commande"><h3 class="title_game"><?=$result['nameGame'] ?></h3></li>
          <li class="li_list_commande"><span class="label">Plateforme :</span> <?=$result['plateform'] ?></li>
          <li class="li_list_commande"><span class="label">Editeur :</span> <?=$result['editeur'] ?></li>
          <li class="li_list_commande"><span class="label">Prix :</span> <?=$result['prix'] ?> €</li>
          <li class="li_list_commande"><span class="label">Quantite :</span> <?=$result['quantite'] ?></li>
          <li class="li_list_commande"><span class="label">Description :</span> <?=$result['description'] ?></li>
        </ul>
      </li>
    <?php  } $req->closeCursor(); ?>
  </ul>
</div>
