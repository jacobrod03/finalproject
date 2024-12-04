<?php
require_once("util-db.php");
require_once("model-employees.php");

$pageTitle = "Employees";
include "view-header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FFFFCC; /* Light green background */
            font-family: Arial, sans-serif;
        }
        .alert {
            width: 80%;
            margin: 10px auto;
            text-align: center;
            padding: 15px;
            border-radius: 5px;
            font-size: 16px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
<?php
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertEmployees($_POST['eName'], $_POST['ePhone'])) {
        echo '<div class="alert alert-success" role="alert">Employee added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateEmployees($_POST['eName'], $_POST['ePhone'], $_POST['eid'])) {
        echo '<div class="alert alert-success" role="alert">Employee edited!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteEmployees($_POST['eid'])) {
        echo '<div class="alert alert-success" role="alert">Employee deleted!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$employees = selectEmployees();
include "view-employees.php";
include "view-footer.php";
?>
</body>
</html>
