<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
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
            background-color: #DFF2FF; /* Light blue background */
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
        .bold-text {
            font-weight: bold; /* Ensures "Teams" text is bold */
        }
    </style>
</head>
<body>
<?php
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add": 
      if (insertTeams($_POST['tNumber'], $_POST['tDesc'])) {
        echo '<div class="alert alert-success" role="alert">Team added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit": 
      if (updateTeams($_POST['tNumber'], $_POST['tDesc'], $_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Team edited!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete": 
      if (deleteTeams($_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Team deleted!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}
$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
</body>
</html>
