<section>
    <img src=<?=$repertoire.$req['jacket'] ?> alt="jacket" id="jacket_game"/>

    <div id="design_info">
      <div id="design_title">
        <h1 id="title_game"><?=$req['nameGame']?></h1>
      </div>

      <div id="info_game">
        <label for="" class="label_game">Genre :</label><br/>
        <span class="info_game"><?=$req['genre'] ?></span><br />
        <label for="" class="label_game">Pegi :</label><br/>
        <span class="info_game"><?=$req['pegi'] ?></span><br />
        <label for="" class="label_game">Plateform :</label><br/>
        <span class="info_game"><?=$req['plateform'] ?></span><br />
        <label for="" class="label_game">Editeur :</label><br/>
        <span class="info_game"><?=$req['editeur'] ?></span><br />
        <label for="" class="label_game">Description :</label><br/>
        <span class="info_game"><?=$req['description'] ?></span><br />
      </div>
      <form action="panier" method="post" id="form_game">
        <input type="hidden" name="gnum" value=<?=$req['gnum']?>>
        <input type="hidden" name="quantite" value="1">
        <span class="prix_game"><?=$req['prix'] ?> €</span>
        <input type="submit" name="acheter" value="Acheter" class="button_sale">
      </form>
    </div>
</section>
