<?php
require_once("util-db.php");
require_once("model-employees.php");

$pageTitle = "Employees";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertEmployee($_POST['eName'], $_POST['ePhone']);
      break;
  }
}

$employees = selectEmployees();
include "view-employees.php";
include "view-footer.php";
?>
