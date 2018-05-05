<section id="info">
  <h1 class="info_title">Information</h1><hr />
  <img src="<?=$repertoire_icon.$profil['icon'] ?>" class="icon">
  <span class="info_top"><?=$profil['name']." ".$profil['firstname']?></span><br/>
  <span class="info"><?=$profil['mail'] ?></span><br/>
  <span class="info"><?=$profil['adress']." ".$profil['numero'] ?></span><br/>
  <span class="info"><?=$profil['code_postal']." ".$profil['city'] ?></span><br/>
</section>
<section>
  <form method="post" enctype="multipart/form-data">
    <fieldset id="edit">
      <h1>Paramètre compte</h1><hr />
        <label for="" class="label">Nom d'utilisateur</label>
        <input type="text" name="pseudo" class="input_text" value=<?=$profil['pseudo'] ?>>
        <br/>
        <label for="" class="label">Adresse mail</label>
        <input type="text" name="mail" class="input_text" value=<?=$profil['mail'] ?>>
        <br/>
        <label for="" class="label">Photo de profil</label>
        <img src="<?=$repertoire_icon.$profil['icon'] ?>" id="id:jacket" class="preview" alt="Image preview...">
          <label for="icon" class="label-file">Choisir une image</label>
          <input type="file" id="icon" name="icon" accept="image/*" onchange="previewFile()" class="input-file">
        <br/>
        <label for="" class="label">Mot de passe</label>
        <a href="update_password" class="a_pass">Modifier le mot de passe</a>
        <br/>
        <label for="" class="label">Adresse</label>
        <input type="text"  name="adress" class="input_text" value="<?=$profil['adress'] ?>">
        <br/>
        <label for="" class="label">Numéro</label>
        <input type="text" name="numero" class="input_text" value=<?=$profil['numero'] ?>>
        <br/>
        <label for="" class="label">Code postal</label>
        <input type="text" name="code_postal" class="input_text" value=<?=$profil['code_postal'] ?>>
        <br/>
        <label for="" class="label">Ville</label>
        <input type="text" name="city" class="input_text" value=<?=$profil['city'] ?>>
        <br/>
        <div class="centrage">
          <input type="submit" name="submit" value="Ajouter" class="button"/>
          <a href="profil"><input type="button" name="annuler" value="Annuler" class="button"/></a>
        </div>
    </fieldset>
  </form>
</section>
