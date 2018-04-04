<table class="steelBlueCols">
  <thead>
    <tr>
      <th>Pseudo</th>
      <th>Mail</th>
      <th>Actions</th>
    </tr>
  </thead>

  <?php
  	require("models/admin.php");

  	$admin=getDataAdmin();

  	while($result = $admin->fetch()) {

      ob_start();
  ?>
      <tr>
        <td><?=$result['pseudo']?></td>
        <td><?=$result['mail']?></td>
    		<td>
          <form action="edit" method="get">
            <input type="hidden" name="id" value="<?=$result['id']?>">
            <input type="submit" value="Modifier">
          </form>
  <?php
      $modifie=ob_get_clean();

      ob_start();
  ?>
          <form action="del" method="get">
            <input type="hidden" name="id" value=<?=$result['id']?>>
            <input type="submit" value="Supprimer">
          </form>
  <?php
      $remove=ob_get_clean();

      echo $modifie;

      if($result["pseudo"]!=$_SESSION["admin"]) {
        echo $remove;
      }
    }
  ?>
    </td>
  </tr>
</table>
