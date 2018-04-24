<table>
  <tr>
    <th></th>
    <th>Nom d'article</th>
    <th>Plateform</th>
    <th>Quantité</th>
    <th>Prix</th>
    <th>Total</th>
  </tr>
  <?php
    for($i = 0; $i < count($_SESSION['panier']['nameGame']); $i++){
      ?>
      <tr>
        <td><?=$i+1 ?></td>
        <td><?=$_SESSION['panier']['nameGame'][$i] ?></td>
        <td><?=$_SESSION['panier']['plateform'][$i] ?></td>
        <td><?=$_SESSION['panier']['quantite'][$i] ?></td>
        <td><?=$_SESSION['panier']['price'][$i] ?></td>
        <td><?=somme_article($_SESSION['panier']['quantite'][$i],$_SESSION['panier']['price'][$i]) ?></td>
        <td><a href="panier?id=<?=$_SESSION['panier']['id'][$i] ?>">Supprimer l'article</a></td>
      </tr>
      <?php
    }
   ?>
   <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td><?=montant_total() ?></td>
   </tr>
</table>

<a href="panier?run_del_panier=true">Supprimer Panier</a>

<a href="confirm?panier=<?=$_SESSION['panier'] ?>">Commander</a>

<script language="javascript">
  var error = '<?php echo $errMsg ?>'
  if(error != "") {
    alert(error);
  }
</script>
