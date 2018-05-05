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
                <input type="text" name="pseudo" />
                </p>
                <p>
                <label for="password">Mot de passe: </label>
                <input type="password" name="password" />
                </p>
                <p>
                <label for="passwordVerif">Mot de passe vérification: </label>
                <input type="password" name="passwordVerif" />
                </p>
                <p>
                <label for="mail">E-mail: </label>
                <input type="text" name="mail" />
                </p>
                <p>
                <label for="adress">Adresse: </label>
                <input type="text" name="adress" />
                </p>
                <p>
                <label for="adress">Numéro: </label>
                <input type="text" name="numero" />
                </p>
                <p>
                <label for="adress">Code postal: </label>
                <input type="text" name="code_postal" />
                </p>
                <label for="adress">Ville: </label>
                <input type="text" name="city" />
                </p>
                <p>
                <label for="naissance">Date de naissance: </label>
                <input type="date" name="naissance" />
                </p>
                <p>
                <label for="genre">Genre: </label>
                <select name="genre">
                  <option value="homme">Homme</option>
                  <option value="femme">Femme</option>
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
