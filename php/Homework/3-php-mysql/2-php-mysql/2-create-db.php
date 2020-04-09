<?php
echo "<a href=\"./\">BACK</a>";
/* 2. --- CREATE DATABASE ---
 *
 * Using MySQLi
 *
 */
echo "<h1>2. CREATE DATABASE</h1>";
/*
 * EXERCISE 1 : Create database name is yourname_project.
 *
 */
/*
 * SUGGESTION :
require './helper.php';
$conn = connectDatabase();
$sql = "CREATE DATABASE namnh_news";
if ($conn->query($sql) === true) {
echo "Database created successfully";
} else {
echo "Error creating database : " . $conn->error;
}
$conn->close();
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$serverName = "localhost";
$userName = "root";
$password = "";
// Create connection
$connect = mysqli_connect($serverName, $userName, $password);
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
//create database
$sql = "CREATE DATABASE myproject";
if (mysqli_query($connect, $sql)){
    echo "Database created successfully";
}else {
    echo "Error creating database: " .mysqli_error($connect);
}
mysqli_close($connect);
?>