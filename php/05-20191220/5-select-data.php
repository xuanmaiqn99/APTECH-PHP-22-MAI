<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        table{
          border-collapse: collapse;
        }
        td,th{padding: 5px 10px;}
    </style>
</head>
<body>
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

  $sql = "SELECT users.id, users.name, passports.code, passports.ngay_cap
  FROM aptech_php_22_51.users
  LEFT JOIN aptech_php_22_51.passports ON 
  users.id = passports.user_id";

  $result = mysqli_query($connect, $sql);
  // if (mysqli_num_rows($result) > 0) {
 ?>
  <table border=1>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Code</th>
      <th>Ngay cap</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>\n";
      foreach($row as $value)
      {
        echo "<td>\n";
        echo $value;
        echo "</td>\n";
      }
      echo "</tr>\n";
    }
    ?>
  </table>
 <!-- } -->
  <?php
  mysqli_close($connect);
  ?>
  </body>
</html>