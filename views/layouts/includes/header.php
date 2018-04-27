<header>

    <div id="title"><a href="welcome" id="aTitle"><span class="colorWhite">Ultra</span> Gaming</a></div>
    <button type="button" name="button_navbar" id="button_navbar_js" data-target="#button_navbar" class="navbar_toggler">
      <img src="../../css/image/button_navbar.png">
      <span class="navbar_toggler_icon"></span>
    </button>

  <nav id="nav">
    <div class="" id="button_navbar">
      <button class="menu_panier"><a href="panier" class="aPanier">Voir Panier</a> <?=number_article() ?></button>

      <div id="login">
        <?php if(!empty($_SESSION['user']) || !empty($_SESSION['admin'])) {?>
          <?php if(!empty($_SESSION['admin'])) {?>
            <a href="profil"><img src=<?=$repertoire_icon.$profil['icon'] ?> id="imgLogin"/></a>
            <ul id="ulLogin">
              <li class="liLogin"><a href="panneau_administration" class="aLogin">Admin</a></li>
              <li class="liLogin"><a href="profil" class="aLogin"><?=$_SESSION['admin']?></a></li>
            <?php } else { ?>
              <a href="profil"><img src=<?=$repertoire_icon.$profil['icon'] ?> id="imgLogin"/></a>
              <ul id="ulLogin">
              <li class="liLogin"><a href="profil" class="aLogin"><?=$_SESSION['user']?></a></li>
            <?php } ?>
            <li class="liLogin"><a href="logout" class="aLogin">Déconnecter</a></li>
          </ul>
        <?php } else { ?>
          <a href="login"><img src="../../css/image/icon/icon.png" id="imgLogin"/></a>
          <ul id="ulLogin">
            <li class="liLogin"><a href="login" class="aLogin">S'identifier</a></li>
            <li class="liLogin"><a href="signin" class="aLogin">S'incrire</a></li>
          </ul>
        <?php } ?>
      </div>
      <div id="search">
        <form>
          <input type="image" src="../../css/image/loupe.png" alt="submit" id="buttonSearch"/>
          <input type="text" name="search" placeholder="Recherche..." id="iSearch"/>
        </form>
      </div>
    </div>
  </nav>
</header>
