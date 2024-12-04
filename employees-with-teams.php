<?php
require_once("util-db.php");
require_once("model-employees-with-teams.php");

$pageTitle = "Employees with teams";
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
            background-image: url('https://media.giphy.com/media/nL2zibS5D4iGhDOt9Q/giphy.gif');
            background-size: 90%;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            color: white; /* Adjust text color for visibility */
        }
        .content {
            position: relative;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="content">
        <?php
        $employees = selectEmployees();
        include "view-employees-with-teams.php";
        ?>
    </div>
<?php
include "view-footer.php";
?>
</body>
</html>
