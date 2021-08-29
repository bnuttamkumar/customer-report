<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "ten";

// Create connection
$con = new mysqli($server, $user, $password, $database);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}else{
    echo "connected sucessfully";
}
?>