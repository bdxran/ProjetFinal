<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
          <title><?=$title ?></title>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend>Inscrivez-vous</legend>
                <p>
                <label for="Pseudo">Nom d'utilisateur: </label>
                <input type="text" name="pseudo" required />
                </p>
                <p>
                <label for="password">Mot de passe: </label>
                <input type="password" name="password" required />
                </p>
                <p>
                <label for="passwordVerif">Mot de passe vérification: </label>
                <input type="password" name="passwordVerif" required />
                </p>
                <p>
                <label for="mail">E-mail: </label>
                <input type="text" name="mail" required />
                </p>
                <p>
                <label for="adress">Adresse: </label>
                <input type="text" name="adress" required />
                </p>
                <p>
                <label for="naissance">Date de naissance: </label>
                <input type="date" name="naissance" required />
                </p>
                <p>
                <label for="genre">Genre: </label>
                <select name="genre">
                  <option value="homme"required>Homme</option>
                  <option value="femme"required>Femme</option>
                </select>
                </p>
                <input type="submit" name="submit" value="S'inscrire" />
                <a href="welcome"><input type="button" name="retour" value="Retour" /></a>
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
