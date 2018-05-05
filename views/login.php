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
          <h1>Identifiez-vous</h1>
            <ul class="list">
              <li class="title_list"><span>Nom d'utilisateur:</span></li>
              <li class="ligne_list"><input type="text" name="pseudo"class="input"/></li>
              <li class="title_list"><span>Mot de passe:</span></li>
              <li class="ligne_list"><input type="password" name="password"class="input"/></li>
            </ul>
            <p>
              <input type="submit" name="submit" value="Se connecter" class="button"/>
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
