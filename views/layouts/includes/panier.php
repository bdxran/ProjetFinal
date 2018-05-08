<div id="contener">
    <table>
      <tr id="tr_th">
        <th class="left_element">Id</th>
        <th class="middle_element">Nom d'article</th>
        <th class="middle_element">Plateform</th>
        <th class="middle_element">Quantité</th>
        <th class="middle_element_plus">Prix</th>
        <th class="right_element">Total</th>
        <th class="left_element">Action</th>
      </tr>
      <?php for($i = 0; $i < count($_SESSION['panier']['nameGame']); $i++){ ?>
          <tr class="tr_td">
            <td class="left_element"><?=$i+1 ?></td>
            <td class="middle_element"><?=$_SESSION['panier']['nameGame'][$i] ?></td>
            <td class="middle_element"><?=$_SESSION['panier']['plateform'][$i] ?></td>
            <td class="middle_element"><a href="panier?id=<?=$_SESSION['panier']['id'][$i] ?>&amp;moins=true" class="plus_moins">-</a><?=$_SESSION['panier']['quantite'][$i] ?><a href="panier?id=<?=$_SESSION['panier']['id'][$i] ?>&amp;plus=true" class="plus_moins">+</a></td>
            <td class="middle_element_plus"><?=$_SESSION['panier']['price'][$i] ?> €</td>
            <td class="right_element"><?=somme_article($_SESSION['panier']['quantite'][$i],$_SESSION['panier']['price'][$i]) ?> €</td>
            <td class="left_element"><a href="panier?id=<?=$_SESSION['panier']['id'][$i] ?>"><img src="../css/image/supprimer.png" id="supprimer_img"/></a></td>
          </tr>
          <?php } ?>
       <tr class="tr_td">
         <td class="left_element"></td>
         <td class="middle_element"></td>
         <td class="middle_element"></td>
         <td class="middle_element"></td>
         <td class="middle_element_plus"></td>
         <td class="right_element"><?=$_SESSION['amt'] ?> €</td>
         <td class="left_element"></td>
       </tr>
    </table>
    <form method="post">
      <input type="hidden" name="run_del_panier" value=true>
      <input type="submit" name="vider panier" value="Vider Panier" class="button_panier">
    </form>
    <form action="confirm" method="post">
      <input type="hidden" name="panier" value=<?=$_SESSION['panier'] ?>>
      <input type="submit" name="commander" value="Commander" class="button_panier">
    </form>
</div>
<script language="javascript">
  var error = '<?php echo $errMsg ?>'
  if(error != "") {
    alert(error);
  }
</script>
