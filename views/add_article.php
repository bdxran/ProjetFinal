<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?=$title ?></title>
    <link rel="stylesheet" type="text/css" href="../css/form.css"></link>
    <script type="text/javascript" src="../js/del_placeholder.js"></script>
  </head>
  <body>
    <div id="form">
      <h1>Ajouter Article</h1>
      <form method="post" enctype="multipart/form-data">
        <ul class="list">
          <li class="ligne_list"><input type="text" name="nameGame" value="Nom" onfocus="if (this.value=='Nom') this.value=''" class="input" required/>
          <input type="text" name="editeur" value="Editeur" onfocus="if (this.value=='Editeur') this.value=''" class="input" required/></li>
          <li class="title_list"><span>Prix :</span></li>
          <li class="title_list"><span>Date de parution :</span></li>
          <li class="ligne_list"><input type="number" step="0.01" name="prix" class="input" required/>
          <input type="date" name="date_parution" class="input"/></li>

          <li class="title_list"><span>Plateform :</span></li>
          <li class="title_list"><span>Pegi :</span></li>

          <li class="ligne_list">
            <select name="plateform" class="input" required>
              <option value="ps4">ps4</option>
              <option value="xbox">xbox</option>
              <option value="pc">pc</option>
              <option value="switch">switch</option>
            </select>
            <select name="pegi" class="input" required>
              <option value="3">3</option>
              <option value="7">7</option>
              <option value="12">12</option>
              <option value="16">16</option>
              <option value="18">18</option>
            </select>
          </li>
          <li class="title_list"><span>Genre :</span></li>
          <li class="title_list"><span>Jacket :</span></li>
          <li class="ligne_list">
            <select name="genre" class="input" required>
              <option value="action">action</option>
              <option value="aventure">aventure</option>
              <option value="course automobile">course automobile</option>
              <option value="gestion">gestion</option>
              <option value="plateform">plateform</option>
              <option value="simulation">simulation</option>
              <option value="role">rôle</option>
              <option value="tir">tir</option>
            </select>
            <input type="file" id="jacket" name="jacket" accept="image/*" class="input" />
          </li>

          <li class="title_list"><span>Description :</span></li>
          <li class="title_list"></li>
          <textarea name="description" class="textarea" required></textarea>
        </ul>
        <p>
        <input type="submit" name="submit" value="Ajouter" class="button"/>
        <a href="panneau_administration"><input type="button" name="retour" value="Retour" class="button"/></a>
        </p>
      </form>
      <?php
      if(!empty($errMsg)) {
        echo '<font color="red">'.$errMsg.'</font>';
      }
      ?>
    </div>
  </body>
</html>
