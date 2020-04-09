<!-- <h1>Whoops</h1> -->
<!-- <h1>
    //<?php
    // echo ("123"); // dấu ngoặc có chức năng như 1 function 
    // echo "<br>";
    // $nam = 5;  // trước biến luôn luôn có dấu $
    // echo $nam . ", thieu 4";  // dấu . có chức năng nối chuỗi vs chuỗi, concatenate.
    // echo ("<br>");
    // $nam1 = 2019;
    // $namsinh = 1999;
    // echo $nam1-$namsinh;
    // echo "<br>";
    // $xe = 3749; echo "<br>";
    // var_dump($xe);
    // $arr = ["binh","hiep","nam"];
    // echo $arr[0];
    // ?>
</h1> -->
<!-- "--" in ra giá trị  -->
<!-- '--' in chuỗi  -->
 <?php
//  <!-- $iPhone11 = ["iPhone 11 Sieu Dep", 999.99];
//  $s10 = ["Galaxy S10 Sieu Net", 999.99]; -->
//   ?>
  <!-- <h1>IPHONE</h1>
  <p>Ten: -->
  <?php
  // echo $iPhone11[0];
  //?>
  <!-- </p>
  <p>Gia: -->
  <?php
  // echo $iPhone11[1];
  //?>
  <!-- </p> -->
  <?php
  // $products = [
  //   [
  //     "iPhone 11",
  //     999.99
  //   ],
  //   [
  //     "S10",
  //     998.98
  //   ]
  // ];
  // echo $products[0][0];
  //?>

  <?php
  // ASSOCIATIVE ARRAY
  // $person = [
  //   "name" => "Ben",
  //   "age" => 19,
  //   "gender" => "male"
  // ]; 
  // echo $person[0];
  $products = [
    "iphone 11" => [
      "name" => "iPhone 11 Sieu Dep",
      "price" => 999.99
    ],
    "s10" => [
      "name" => "Galaxy S10",
      "price" => 998.98
    ]
  ];
//var_dump($products["iphone 11"]); //dùng để in mảng
  echo $products["iphone 11"]["name"]; 
  echo " ";
  echo "giá ". $products["iphone 11"]["price"];
  ?>
</h1>