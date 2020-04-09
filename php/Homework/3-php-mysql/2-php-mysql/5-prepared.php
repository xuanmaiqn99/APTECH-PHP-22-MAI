<?php
echo "<a href=\"./\">BACK</a>";
/* 5. --- PREPARED ---
 *
 * Using MySQLi
 *
 */
echo "<h1>5. PREPARED</h1>";
/*
 * EXERCISE 1 : Create prepare and insert some values.
 *
 */
/*
 * SUGGESTION :
require './helper.php';
$conn = connectDatabase();
$stmt = $conn->prepare("INSERT INTO namnh_news.nnUser (uLastName,uFirstName,uEmail,uRole) VALUES (?,?,?,?)");
$stmt->bind_param("sssi", $uLastName, $uFirstName, $uEmail, $uRole);
$uLastName = 'Ford';
$uFirstName = 'Henry';
$uEmail = "henry.ford@ford.com";
$uRole = 2;
$stmt->execute();
echo "Using Prepared to insert new data successfully";
$stmt->close();
$conn->close();
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "myproject";
// Create connection
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO myproject.users (email, password)
VALUES (?, ?)";

if ($stmt = mysqli_prepare($connect, $sql)){
    mysqli_stmt_bind_param($stmt, "ss",$email, $password);

    $email = "mai@gmail.com";
    $password = '6576feu';
    mysqli_stmt_execute($stmt);

    $email = "lan@gmail.com";
    $password = '6fgyuf';
    mysqli_stmt_execute($stmt);
    
    echo "Insert successful ";
}
else{
    echo "Error: $sql. " . mysqli_error($connect);
}
mysqli_stmt_close($stmt);

mysqli_close($connect);
?>