<?php
function get_db_connection() {
    $servername = "finalproject4013.mysql.database.azure.com"; //azure hostname
    $username = "jacobrod03";
    $password = "Sakiboy$1";
    $dbname = "project4013"; //name of db inside MYSQL
    $port = 3306;

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}
?>
