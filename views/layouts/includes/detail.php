<section>
  <h1><?=$req['nameGame']?></h1>
  <img src=<?=$repertoire.$req['jacket'] ?> alt="jacket" />
  <div>
    <?=$req['prix'] ?><br />
    <?=$req['genre'] ?><br />
    <?=$req['pegi'] ?><br />
    <?=$req['plateform'] ?><br />
    <?=$req['editeur'] ?><br />
    <?=$req['description'] ?><br />
  </div>
  <form action="panier" method="post">
    <input type="hidden" name="gnum" value=<?=$req['gnum']?>>
    <input type="number" name="quantite" value="1">
    <input type="submit" name="acheter" value="Acheter">
    <a href="welcome"><input type="button" name="retour" value="Retour"></a>
  </form>
</section>
