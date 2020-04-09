<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "aptech_php_22_51";

// Create connection
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);

if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}
//create table
$sql = "CREATE TABLE aptech_php_22_51.users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255)
)";

$sql = "CREATE TABLE aptech_php_22_51.passports(
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(255),
    ngay_cap DATE,
    user_id INT
)";

if(mysqli_query($connect, $sql)){
    echo "Table created successfully";
}else {
    echo "Error creating table: ". mysqli_error($connect);
}
mysqli_close($connect);
?>
