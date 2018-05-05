<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?=$title ?></title>
  </head>
  <body>
    <form method="post">
      <label for="">Ancien mot de passe</label>
      <input type="password" name="oldPassword"/>
      <label for="">Mot de passe</label>
      <input type="password" name="newPassword"/>
      <label for="">Confirmation mot de passe</label>
      <input type="password" name="verifPassword"/>
      <div>
        <input type="submit" name="submit" value="Confirmer"/>
        <a href="profil"><input type="button" name="annuler" value="Annuler"/></a>
      </div>
    </form>
    <script language="javascript">
      var error = '<?php echo $errMsg ?>'
      if(error != "") {
        alert(error);
      }
   </script>
  </body>
</html>
