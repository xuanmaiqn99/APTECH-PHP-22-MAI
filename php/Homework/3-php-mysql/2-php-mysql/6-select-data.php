<?php
echo "<a href=\"./\">BACK</a>";
/* 6. --- SELECT DATA ---
 *
 * Using MySQLi
 *
 */
echo "<h1>6. SELECT DATA</h1>";
/*
 * EXERCISE 1 : Select 5 users and display it.
 *
 */
/*
 * SUGGESTION :
require './helper.php';
$conn = connectDatabase();
$sql = "SELECT * FROM namnh_news.nnUser limit 5";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
echo " UserID : " . $row["uId"] . " - Full Name : " . $row["uLastName"] . " " . $row["uFirstName"] . " - Email : " . $row["uEmail"] . "<br>";
}
} else {
echo "0 results";
}
$conn->close();
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "myproject";
$connect = new mysqli($serverName, $userName, $password, $databaseName);
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM myproject.users";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"] . " - " . $row["email"] . "<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($connect);