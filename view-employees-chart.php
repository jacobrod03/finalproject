<h1>Employees</h1>
<div>
  <canvas id="myChart" width="300" height="300"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
while ($employee = $employees->fetch_assoc()) {
  echo $employee['num_sections'] . ", ";
}
?>      
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$employees = selectEmployees();
while ($employee = $employees->fetch_assoc()) {
  echo "'" . $employee['employee_name'] . "', ";
}
?> 
    ]
},
      options: {
      responsive: true,
      maintainAspectRatio: true,
      aspectRatio: 1.5, // Adjusted to shrink the chart size
    }
  });
</script>
