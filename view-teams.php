<div class="row">
  <div class="col">
<h1>Teams</h1>
  </div>
  <div class="col-auto">
<?php
include "view-teams-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th>
        <th></th>
        <th></th>
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
      
    </td>
    <td>
        <form method="post" action="">
        <input type="hidden" name="tid" value="<?php echo $team['team_id']; ?>">
        <input type="hidden" name="actionType" value="Delete">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
          </svg>
        </button>
        </form>
    </td>
    <td>
      <form method="post" action="company-by-teams.php">
        <input type="hidden" name="tid" value="<?php echo $team['team_id']; ?>">
        <button type="submit" class="btn btn-primary">Company</button>
        </form>
    </td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
