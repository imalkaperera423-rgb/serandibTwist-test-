<?php
$servername = "localhost";          
$username = "amk1013346";           
$password = "YZtTyPLf";             
$database = "wp_amk1013346";        

$conn  = new mysqli($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

