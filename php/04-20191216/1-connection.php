<?php
$serverName = "localhost";
$userName = "root";
$password = "";

// Create connection
$connect = mysqli_connect($serverName, $userName, $password);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>