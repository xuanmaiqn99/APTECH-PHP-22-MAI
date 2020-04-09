<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "aptech_php_22_4";

// Create connection
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);

if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM aptech_php_22_4.users";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"] . " - " . $row["email"] . "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($connect);