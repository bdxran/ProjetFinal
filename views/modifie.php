<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?=$title ?></title>
    <link rel="stylesheet" type="text/css" href="../css/form.css"></link>
    <script type="text/javascript" src="../js/preview.js"></script>
  </head>
  <body>
    <div id="form">
      <h1>Modifier Article</h1>
      <form method="post" enctype="multipart/form-data">
        <ul class="list">
          <li class="ligne_list"><input type="text" name="nameGame" value="<?=$req['nameGame'] ?>" class="input"/>
          <input type="text" name="editeur" value=<?=$req['editeur'] ?> class="input"/></li>
          <li class="title_list"><span>Prix :</span></li>
          <li class="title_list"><span>Date de parution :</span></li>
          <li class="ligne_list"><input type="number" step="0.01" name="prix" value=<?=$req['prix'] ?> class="input"/>
          <input type="date" name="date_parution" value=<?=$req['date_parution'] ?> class="input"/></li>

          <li class="title_list"><span>Plateform :</span></li>
          <li class="title_list"><span>Pegi :</span></li>

          <li class="ligne_list">
            <select name="plateform" class="input">
              <option selected=<?=$req['plateform'] ?>><?=$req['plateform'] ?></option>
              <option value="ps4">ps4</option>
              <option value="xbox">xbox</option>
              <option value="pc">pc</option>
              <option value="switch">switch</option>
            </select>
            <select name="pegi" class="input">
              <option selected=<?=$req['pegi'] ?>><?=$req['pegi'] ?></option>
              <option value="3">3</option>
              <option value="7">7</option>
              <option value="12">12</option>
              <option value="16">16</option>
              <option value="18">18</option>
            </select>
          </li>
          <li class="title_list"><span>Genre :</span></li>
          <li class="title_list"></li>
          <li class="ligne_list">
            <input type="text" name="genre" value="<?=$req['genre'] ?>" class="input"/></li>
          </li>

          <li class="title_list"><span>Jacket :</span></li>
          <li class="title_list"></li>
          <li>
            <input type="file" id="jacket" name="jacket" accept="image/*" onchange="previewFile()" class="input" />
            <img src="<?=$repertoire.$req['jacket'] ?>" height="100" id="id:jacket" alt="Image preview...">
          </li>

          <li class="title_list"><span>Description :</span></li>
          <li class="title_list"></li>
          <textarea name="description" placeholder="<?=$req['description'] ?>" class="textarea"></textarea>
        </ul>
        <p>
        <input type="submit" name="submit" value="Ajouter" class="button"/>
        <a href="panneau_administration"><input type="button" name="retour" value="Retour" class="button"/></a>
        </p>
      </form>
      <script language="javascript">
        var error = '<?php echo $errMsg ?>'
        if(error != "") {
          alert(error);
        }
     </script>
    </div>
  </body>
</html>
