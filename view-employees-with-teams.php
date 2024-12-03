<h1>Employees with teams</h1>
<div class="card-group">
<?php
while ($employee = $employees->fetch_assoc()) {
?>
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $employee['employee_name']; ?></h5>
      <p class="card-text">
<?php
  $teams = selectTeamsByEmployee($employee['employee_id']);
  while ($team = $teams->fetch_assoc()) {
?>
<?php 
  }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Phone number: <?php echo $employee['phone_number']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
