<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chart of Employees</title>
  <style>
    body {
      margin: 0; /* Removes default browser margins */
      padding: 0;
      background-color: lightgreen; /* Light green background for the entire page */
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh; /* Ensures full-page height */
    }
    h1 {
      margin: 0;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.8); /* Slightly transparent white for contrast */
      border-radius: 8px; /* Rounded corners for aesthetics */
    }
    canvas {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Chart of Employees</h1>
  <div>
    <canvas id="myChart" width="300" height="300"></canvas>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'doughnut',
      data: {
        datasets: [
          {
            data: [
<?php
while ($employee = $employees->fetch_assoc()) {
  echo $employee['num_sections'] . ", ";
}
?>
            ]
          }
        ],
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
        aspectRatio: 1.5 // Adjusted to shrink the chart size
      }
    });
  </script>
</body>
</html>
