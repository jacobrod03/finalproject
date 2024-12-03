<h1>Employees with teams</h1>
<div class="card-group">
<?php
while ($employee = $employees->fetch_assoc()) {
?>
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $employee['employee_name']; ?></h5>
      <p class="card-text">
     <ul class="list-group">
<?php
  $teams = selectTeamsByEmployee($employee['employee_id']);
  while ($team = $teams->fetch_assoc()) {
?>
     <li class="list-group-item"><?php echo $team['team_number']; ?> - <?php echo $team['location']; ?> - <?php echo $team['email']; ?></li>
<?php 
  }
?>
     </ul>
     </p>
      <p class="card-text"><small class="text-body-secondary">Phone number: <?php echo $employee['phone_number']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
