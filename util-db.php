<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'jacobrod_jacobrod03', 'Database3909', 'jacobrod_project4013');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
