<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add": 
    insertTeams($_POST['tNumber'], $_POST['tDesc']);
    break;
  }
}
$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
