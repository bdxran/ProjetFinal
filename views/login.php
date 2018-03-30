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

                <?php
                // Rencontre-t-on une erreur ?
                if(!empty($errMsg))
                {
                  echo '<font color="red">'.$errMsg.'</font>';
                }
                ?>

                <p>
                <label for="pseudo">Nom d'utilisateur: </label>
                <input type="text" name="pseudo" required />
                </p>
                <p>
                <label for="password">Mot de passe: </label>
                <input type="password" name="password" required />
                <br>
                <br>
                <input type="submit" name="submit" value="Se connecter" />
                <a href="welcome"><input type="button" name="retour" value="Retour" /></a>
                </p>
            </fieldset>
        </form>

    </body>
</html>
