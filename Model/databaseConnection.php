<?php
function getConnection() {
    $host = "localhost";
    $username = "root";
    $password = "";     
    $dbname = "jobportallab"; 

    $con = mysqli_connect($host, $username, $password, $dbname);
    return $con;
}
?>