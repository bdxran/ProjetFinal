<div class="contener">
    <div id="banniere">
      <h1 id="title_best">Top Vente</h1>
      <form action="detail" method="post">
        <input type="hidden" name="id" value=<?=$best['gnum']?>/>
        <input type="image" src=<?=$repertoire.$best['jacket'] ?>  id="img_best">
      </form>
    </div>
    <div id="content">
      <section class="window">
        <div class="title_window">
          <h1>Jeux Pc</h1><form action="catalogue" method="post"><input type="hidden" name="plateform" value="pc"><input type="submit" name="+" value="+" class="redirection_window"></form>
        </div>
        <ul class="mise_page">
          <?php
            $i=0;
            $plateform = 'pc';
            $req = search_image($plateform);

            while($result = $req->fetch()) {
              if($i == 0){
                echo '<li class="articleLeft"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
              } elseif ($i <= 2) {
                echo '<li class="articleMiddle"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
              } else {
                echo '<li class="articleRigth"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
                break;
              }

              $i++;
            }
           ?>
        </ul>
      </section>
      <section class="window">
        <div class="title_window">
          <h1>Jeux Ps4</h1><form action="catalogue" method="post"><input type="hidden" name="plateform" value="ps4"><input type="submit" name="+" value="+" class="redirection_window"></form>
        </div>
        <ul class="mise_page">
          <?php
            $i=0;
            $plateform = 'ps4';
            $req = search_image($plateform);

            while($result = $req->fetch()) {
              if($i == 0){
                echo '<li class="articleLeft"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
              } elseif ($i <= 2) {
                echo '<li class="articleMiddle"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
              } else {
                echo '<li class="articleRigth"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
                break;
              }

              $i++;
            }
           ?>
        </ul>
      </section>
      <section class="window">
        <div class="title_window">
          <h1>Jeux Xbox</h1><form action="catalogue" method="post"><input type="hidden" name="plateform" value="xbox"><input type="submit" name="+" value="+" class="redirection_window"></form>
        </div>
        <ul class="mise_page">
          <?php
            $i=0;
            $plateform = 'xbox';
            $req = search_image($plateform);

            while($result = $req->fetch()) {
              if($i == 0){
                echo '<li class="articleLeft"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
              } elseif ($i <= 2) {
                echo '<li class="articleMiddle"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
              } else {
                echo '<li class="articleRigth"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
                break;
              }

              $i++;
            }
           ?>
        </ul>
      </section>
      <section class="window">
        <div class="title_window">
          <h1>Jeux Switch</h1><form action="catalogue" method="post"><input type="hidden" name="plateform" value="switch"><input type="submit" name="+" value="+" class="redirection_window"></form>
        </div>
        <ul class="mise_page">
          <?php
            $i=0;
            $plateform = 'switch';
            $req = search_image($plateform);

            while($result = $req->fetch()) {
              if($i == 0){
                echo '<li class="articleLeft"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
              } elseif ($i <= 2) {
                echo '<li class="articleMiddle"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
              } else {
                echo '<li class="articleRigth"><form action="detail" method="post"><input type="hidden" name="id" value='.$result['gnum'].'/><input type="image" src='.$repertoire.$result['jacket'].' class="jacket"></form></li>';
                break;
              }

              $i++;
            }
           ?>
        </ul>
      </section>
    </div>
</div>
