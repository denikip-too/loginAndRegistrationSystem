<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "login_registration";

$db_connection = mysqli_connect("localhost","root","","login_registration");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
