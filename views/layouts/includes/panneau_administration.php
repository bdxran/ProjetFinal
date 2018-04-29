<table class="steelBlueCols">
  <thead>
    <tr>
      <th>Pseudo</th>
      <th>Mail</th>
    </tr>
  </thead>
<?php
  $admin=getDataAdmin();

  while($result = $admin->fetch()) {
?>
  <tr>
    <td><?=$result['pseudo']?></td>
    <td><?=$result['mail']?></td>
  </tr>
<?php } ?>
</table>
