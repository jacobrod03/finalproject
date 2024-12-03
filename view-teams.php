<h1>Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $team['team_id']; ?></td>
    <td><?php echo $team['team_number']; ?></td>
    <td><?php echo $team['team_description']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
