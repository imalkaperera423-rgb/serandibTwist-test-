<?php
// start session here.
session_start();

// clear all session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to login page after logout
header("Location: login.php");
exit;
?>