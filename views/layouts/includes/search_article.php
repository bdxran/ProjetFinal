<div id="content">
  <form method="post" id="form_recherche">
    <h1>Formulaire de recherche</h1>
    <input type="text" name="search" value="<?=$_POST['search']?>"class="input_recherche">
    <input type="text" name="plateform" placeholder="plateform" value="" class="input_recherche">
    <input type="submit" name="Rechercher" value="Rechercher" class="button_recherche">
  </form>
  <ul id="list_recherche">
    <?php
    if(!empty($_POST['search'])){
      while($result = $req->fetch()) {
        echo '<li class="li_list_recherche">
          <form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/>
            <input type="image" src='.$repertoire.$result['jacket'].' class="img_list">
            <label class="label_list_recherche">'.$result['nameGame'].'</label>
          </form>
        </li>';
      } $req->closeCursor();
    } ?>
  </ul>
</div>
