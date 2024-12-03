<?php
require_once("util-db.php");
require_once("model-teams-by-employee.php");

$pageTitle = "Teams by employee";
include "view-header.php";
$teams = selectTeamsbyEmployee($_GET['id']);
include "view-teams-by-employee.php";
include "view-footer.php";
?>
