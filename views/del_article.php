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
      <form method="post">
        <ul class="list">
          <li class="ligne_list"><input type="text" name="nameGame" value="Nom" onfocus="if (this.value=='Nom') this.value=''" class="input" required/></li>

          <li class="title_list"><span>Plateform :</span></li>
          <li class="title_list"></li>

          <li class="ligne_list">
            <select name="plateform" class="input" required>
              <option value="ps4">ps4</option>
              <option value="xbox">xbox</option>
              <option value="pc">pc</option>
              <option value="switch">switch</option>
            </select>
          </li>
        </ul>
        <p>
        <input type="submit" name="submit" value="Supprimer" class="button"/>
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
