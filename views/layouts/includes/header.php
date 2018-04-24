<header>
  <div id="title"><a href="welcome" id="aTitle"><span class="colorWhite">Ultra</span> Gaming</a></div>
  <div>
    <div id="login">
      <?php if(!empty($_SESSION['user']) || !empty($_SESSION['admin'])) {?>
        <form>
          <ul id="ulLogin">
            <?php if(!empty($_SESSION['admin'])) {?>
              <a href="profil"><img src=<?=$repertoire_icon.$profil['icon'] ?> id="imgLogin"/></a>
              <li class="liLogin"><a href="profil" class="aLogin"><?=$_SESSION['admin']?></a></li><?php
            } else { ?>
              <a href="profil"><img src=<?=$repertoire_icon.$profil['icon'] ?> id="imgLogin"/></a>
              <li class="liLogin"><a href="profil" class="aLogin"><?=$_SESSION['user']?></a></li><?php
            } ?>
            <li class="liLogin"><a href="logout" class="aLogin">Déconnecter</a></li>
          </ul>
        </form>
      <?php } else { ?>
        <a href="login"><img src="../../css/image/icon/icon.png" id="imgLogin"/></a>
        <form>
          <ul id="ulLogin">
            <li class="liLogin"><a href="login" class="aLogin">S'identifier</a></li>
            <li class="liLogin"><a href="signin" class="aLogin">S'incrire</a></li>
          </ul>
        </form>
      <?php } ?>
    </div>
    <div class="menu_panier">
      <div class="panier">
        <div class="number_produit">
          <?=number_article() ?>
        </div>
      </div>
      <a href="panier" class="aLogin">Voir Panier</a>
    </div>
    <div id="menu">
      <ul id="ulMenu">
        <li class="liMenu"><a href="#" class="aMenu">Jeux</a></li>
        <li class="liMenu"><a href="#" class="aMenu">Bibliothèque</a></li>
        <li class="liMenu"><a href="#" class="aMenu">Support</a></li>
        <?php if(!empty($_SESSION['admin'])) echo '<li class="liMenu"><a href="panneau_administration" class="aMenu">Admin</a></li>'?>
      </ul>
    </div>
    <div id="search">
      <form>
        <input type="image" src="../../css/image/loupe.png" alt="submit" id="bottunSearch"/>
        <input type="text" name="search" placeholder="Recherche..." id="iSearch"/>
      </form>
    </div>
  </div>
</header>
