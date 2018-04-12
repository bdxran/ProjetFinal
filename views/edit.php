<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
          <title><?=$title ?></title>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend>Edit</legend>
                <p>
                <label for="password">Mot de passe: </label>
                <input type="password" name="password" required />
                </p>
                <p>
                <label for="pseudo">Confirmation mot de passe: </label>
                <input type="password" name="confirmPassword" required />
                <br>
                <br>
                <input type="submit" name="submit" value="Confirmer" />
                <a href="panneau_administratif"><input type="button" name="retour" value="Retour" /></a>
                </p>
            </fieldset>
        </form>
        <script language="javascript">
          var error = '<?php echo $errMsg ?>'
          if(error != "") {
            alert(error);
          }
       </script>
    </body>
</html>
