<?php
require_once("util-db.php");
require_once("model-company-by-teams.php");

$pageTitle = "Company by Teams";
include "view-header.php";
$company = selectCompanybyTeams($_POST['tid']);
include "view-company-by-teams.php";
include "view-footer.php";
?>
