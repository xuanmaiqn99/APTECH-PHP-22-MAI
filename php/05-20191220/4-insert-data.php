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

$sql = "INSERT INTO aptech_php_22_51.users (name,email)
VALUES ('mai', 'xuanmaiqn1999@gmail.com'), ('nam', 'nam@gmail.com'),
('hung','hung@gmail.com'), ('han', 'han@gmail.com'), ('bui', 'bui@gmail.com')";

$sql = "INSERT INTO aptech_php_22_51.passports(code, ngay_cap, user_id)
VALUES ('36737ghcv', '2017-12-25', 4), ('6ffh7gd', '2016-03-27', 5),
('g77dgf', '2019-12-30', 1), ('jhgeygd34', '2018-05-17', 2),
('hgdy658', '2018-08-12',3)";

if(mysqli_query($connect, $sql)){
    echo "Records created successfully";
}else {
    echo "Error creating records: ". mysqli_error($connect);
}
mysqli_close($connect);
?>