<?php
require_once("util-db.php");
require_once("model-employees-chart-db.php");

$pageTitle = "Employees chart";
include "view-header.php";
$employees = selectEmployees();
include "view-employees-chart.php";
include "view-footer.php";
?>
