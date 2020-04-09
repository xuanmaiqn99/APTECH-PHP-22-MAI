<?php
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM aptech_php_22_4.users
WHERE email = '$email'
AND password = '$password'"; 

$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "DANG NHAP THANH CONG";
} else {
  echo "DANG NHAP THAT BAI";
}
?>