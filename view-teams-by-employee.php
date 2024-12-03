<h1>Teams by employee</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th>
      <th>Location</th>
      <th>Email</th>
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
    <td><?php echo $team['location']; ?></td>
    <td><?php echo $team['email']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
