<h1>Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th>
        <th></th>
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
    <td>
      <form method="post" action="company-by-teams.php">
        <input type="hidden" name="tid" value="<?php echo $team['team_id']; ?>">
        <button type="submit" class="btn btn-primary">Companies</button>
        </form>
    </td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
