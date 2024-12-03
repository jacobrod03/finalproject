<div class="row">
  <div class="col">
<h1>Employees</h1>
  </div>
  <div class="col-auto">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
    </svg>
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
