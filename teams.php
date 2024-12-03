<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add": 
    if (insertTeams($_POST['tNumber'], $_POST['tDesc'])) {
      echo '<div class="alert alert-success" role="alert">Team added!</div>';
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
