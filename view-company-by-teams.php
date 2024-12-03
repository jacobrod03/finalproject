<h1>Company by teams</h1>
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
while ($company = $company ->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $company['team_id']; ?></td>
    <td><?php echo $company['team_number']; ?></td>
    <td><?php echo $company['team_description']; ?></td>
    <td><?php echo $company['location']; ?></td>
    <td><?php echo $company['email']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
