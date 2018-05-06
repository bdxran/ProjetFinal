<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
          <title><?=$title ?></title>
          <link rel="stylesheet" type="text/css" href="../css/form.css"></link>
    </head>
    <body>
      <div id="form">
        <form method="post">
          <h1>Inscrivez-vous</h1>
          <ul class="list">
            <li class="title_list"><span>Nom d'utilisateur: </span></li>
            <li class="ligne_list"><input type="text" name="pseudo" class="input"/></li>

            <li class="title_list"><span>Mot de passe: </span></li>
            <li class="ligne_list"><input type="password" name="password" class="input"/></li>

            <li class="title_list"><span>Mot de passe vérification: </span></li>
            <li class="ligne_list"><input type="password" name="passwordVerif" class="input"/></li>

            <li class="title_list"><span>E-mail: </span></li>
            <li class="ligne_list"><input type="text" name="mail" class="input"/></li>

            <li class="title_list"><span>Adresse: </span></li>
            <li class="ligne_list"><input type="text" name="adress" class="input"/></li>

            <li class="title_list"><span>Numéro: </span></li>
            <li class="ligne_list"><input type="text" name="numero" class="input"/></li>

            <li class="title_list"><span>Code postal: </span></li>
            <li class="ligne_list"><input type="text" name="code_postal" class="input"/></li>

            <li class="title_list"><span>Ville: </span></li>
            <li class="ligne_list"><input type="text" name="city" class="input"/></li>

            <li class="title_list"><span>Date de naissance: </span></li>
            <li class="ligne_list"><input type="date" name="naissance" class="input"/></li>

            <li class="title_list"><span>Genre: </span></li>
            <li class="ligne_list"><select name="genre" class="input">
              <option value="homme">Homme</option>
              <option value="femme">Femme</option>
            </select></li>
          </ul>
            <p>
              <input type="submit" name="submit" value="S'inscrire" class="button"/>
              <a href="welcome"><input type="button" name="retour" value="Retour" class="button"/></a>
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
