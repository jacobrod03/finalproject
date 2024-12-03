<div class="row">
  <div class="col">
<h1>Employees</h1>
  </div>
  <div class="col-auto">
<?php
include "view-employees-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Phone</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($employee = $employees->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $employee['employee_id']; ?></td>
    <td><?php echo $employee['employee_name']; ?></td>
    <td><?php echo $employee['phone_number']; ?></td>
    <td><a href="teams-by-employee.php?id=<?php echo $employee['employee_id']; ?>">Teams</a></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
