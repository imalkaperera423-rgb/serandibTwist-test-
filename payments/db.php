<?php
$servername="localhost";
$username="bbcap25_5";
$password="tGSmE50x";
$dbname ="wp_bbcap25_5";
// creating connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
    die("Connection failed: ".$conn->connect_error);
?>