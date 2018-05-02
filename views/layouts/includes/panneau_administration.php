<table class="steelBlueCols">
  <thead>
    <tr>
      <th>Admin Connecter</th>
    </tr>
  </thead>
<?php
  $admin=getDataAdmin();

  while($result = $admin->fetch()) {
?>
  <tr>
    <td><?=$result['pseudo']?></td>
  </tr>
<?php } ?>
</table>
