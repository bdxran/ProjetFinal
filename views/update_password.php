<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=$title ?></title>
    <link rel="stylesheet" type="text/css" href="../css/form.css"></link>
  </head>
  <body>
    <div id="form">
      <form method="post">
        <h1>Modification mot de passe</h1>
        <ul class="list">
          <li class="title_list"><span>Ancien mot de passe</span></li>
          <li class="ligne_list"><input type="password" name="oldPassword" class="input"/></li>
          <li class="title_list"><span>Mot de passe</span></li>
          <li class="ligne_list"><input type="password" name="newPassword" class="input"/></li>
          <li class="title_list"><span>Confirmation mot de passe</span></li>
          <li class="ligne_list"><input type="password" name="verifPassword" class="input"/></li>
        </ul>
        <p>
          <input type="submit" name="submit" value="Confirmer" class="button"/>
          <a href="profil"><input type="button" name="annuler" value="Annuler" class="button"/></a>
        </p>
      </form>
    </div>
    <script language="javascript">
      var error = '<?php echo $errMsg ?>'
      if(error != "") {
        alert(error);
      }
   </script>
  </body>
</html>
