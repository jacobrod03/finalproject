<?php
require_once("util-db.php");
require_once("model-employees.php");

$pageTitle = "Employees";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
     if (insertEmployees($_POST['eName'], $_POST['ePhone'])) {
       echo '<div class="alert alert-success" role="alert">Employee added!</div>';
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
