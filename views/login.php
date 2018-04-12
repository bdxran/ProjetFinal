<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?=$title ?></title>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend>Identifiez-vous</legend>
                <p>
                <label for="pseudo">Nom d'utilisateur: </label>
                <input type="text" name="pseudo"/>
                </p>
                <p>
                <label for="password">Mot de passe: </label>
                <input type="password" name="password"/>
                <br>
                <br>
                <input type="submit" name="submit" value="Se connecter" />
                <a href="welcome"><input type="button" name="retour" value="Retour" /></a>
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
