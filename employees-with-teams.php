<?php
require_once("util-db.php");
require_once("model-employees-with-teams.php");

$pageTitle = "Employees with teams";
include "view-header.php";
$employees = selectEmployees();
include "view-employees-with-teams.php";
include "view-footer.php";
?>
