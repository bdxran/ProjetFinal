<header>
  <div id="title"><a href="welcome" id="aTitle"><span class="colorWhite">Ultra</span> Gaming</a></div>
  <div>
    <div id="login">
      <?php if(!empty($_SESSION['pseudo'])) { ?>
        <a href="login"><img src="../../css/image/icon.png" id="imgLogin"/></a>
        <form>
          <ul id="ulLogin">
            <li class="liLogin"><a href="#" class="aLogin"><?=$_SESSION['pseudo'] ?></a></li>
            <li class="liLogin"><a href="logout"  class="aLogin">Déconnecter</a></li>
          </ul>
        </form>
      <?php } else { ?>
        <a href="login"><img src="../../css/image/icon.png" id="imgLogin"/></a>
        <form>
          <ul id="ulLogin">
            <li class="liLogin"><a href="login" class="aLogin">S'identifier</a></li>
            <li class="liLogin"><a href="signin" class="aLogin">S'incrire</a></li>
          </ul>
        </form>
      <?php } ?>
    </div>
    <div id="menu">
      <ul id="ulMenu">
        <li class="liMenu"><a href="#" class="aMenu">Jeux</a></li>
        <li class="liMenu"><a href="#" class="aMenu">Bibliothèque</a></li>
        <li class="liMenu"><a href="#" class="aMenu">Support</a></li>
        <li class="liMenu"><a href="#" class="aMenu">Admin</a></li>
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
