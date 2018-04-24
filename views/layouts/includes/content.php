<div id="content">
  <section class="window">
    <div class="title_window">
      <h1>Jeux Pc</h1><a href="#" class="redirection_window">+</a>
    </div>
    <ul class="mise_page">
      <?php
        $i=0;
        $plateform = 'pc';
        $req = search_image($plateform);

        while($result = $req->fetch()) {
          if($i == 0){
            echo '<li class="articleLeft"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
          } elseif ($i <= 2) {
            echo '<li class="articleMiddle"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
          } else {
            echo '<li class="articleRigth"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
            break;
          }

          $i++;
        }
       ?>
    </ul>
  </section>
  <section class="window">
    <div class="title_window">
      <h1>Jeux Ps4</h1><a href="#" class="redirection_window">+</a>
    </div>
    <ul class="mise_page">
      <?php
        $i=0;
        $plateform = 'ps4';
        $req = search_image($plateform);

        while($result = $req->fetch()) {
          if($i == 0){
            echo '<li class="articleLeft"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
          } elseif ($i <= 2) {
            echo '<li class="articleMiddle"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
          } else {
            echo '<li class="articleRigth"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
            break;
          }

          $i++;
        }
       ?>
    </ul>
  </section>
  <section class="window">
    <div class="title_window">
      <h1>Jeux Xbox</h1><a href="#" class="redirection_window">+</a>
    </div>
    <ul class="mise_page">
      <?php
        $i=0;
        $plateform = 'xbox';
        $req = search_image($plateform);

        while($result = $req->fetch()) {
          if($i == 0){
            echo '<li class="articleLeft"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
          } elseif ($i <= 2) {
            echo '<li class="articleMiddle"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
          } else {
            echo '<li class="articleRigth"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
            break;
          }

          $i++;
        }
       ?>
    </ul>
  </section>
  <section class="window">
    <div class="title_window">
      <h1>Jeux Switch</h1><a href="#" class="redirection_window">+</a>
    </div>
    <ul class="mise_page">
      <?php
        $i=0;
        $plateform = 'switch';
        $req = search_image($plateform);

        while($result = $req->fetch()) {
          if($i == 0){
            echo '<li class="articleLeft"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
          } elseif ($i <= 2) {
            echo '<li class="articleMiddle"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
          } else {
            echo '<li class="articleRigth"><a href="detail?nameGame='.$result['nameGame'].'&amp;plateform='.$plateform.'" class="lien"><img src='.$repertoire.$result['jacket'].' class="jacket"></a></li>';
            break;
          }

          $i++;
        }
       ?>
    </ul>
  </section>
</div>
