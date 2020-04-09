<?php
echo "<a href=\"./\">BACK</a>";
/* 7. --- OPERATOR ---
 *
 * Operators are used to perform operation on variables and values.
 *
 * Group of operators:
 * Arithmetic operators
 * Assignment operators
 * Comparison operators
 * Increment/Decrement operatos
 * Logical operators
 * String operators
 * Array operatos
 *
 */
echo "<h1>7. OPERATORS</h1>";
/*
 * EXERCISE 1 : Using each of operators at least once.
 */
/*
 * SUGGESTION :
 * Can be watch more at : https://www.w3schools.com/php/php_operators.asp
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
//Arithmetic operator
/*
$x = 10; 
$y = 6;
echo $x + $y; //addition 
echo $x - $y; //subtraction
echo $x * $y; //multiplication
$x = 10;  
$y = 5;
echo $x % $y; //modulus, lấy số dư
$x = 10;  
$y = 3;
echo $x ** $y; //exponentiation
 */
//Assignment operators
/*
$x=10;
$x +=30; //addition
echo $x; 
$x=20;
$x %=3; //modulus, x = x % y
*/
//Comparison operators
/*$x=50;
$y='mai';
var_dump ($x===$y);// Identical, returns false because types are not equal
$x=50;
$y='mai';
var_dump ($x!==$y);// Not identical, returns true because types are not equal
*/
/* Spaceship
$x = 5;  
$y = 10;
echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";
$x = 10;  
$y = 10;
echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";
$x = 15;  
$y = 10;
echo ($x <=> $y); // returns +1 because $x is greater than $y
*/
// Increment/Decrement operatos
/*
$x = 10;  
echo --$x; //=9, Pre-decrement,	Decrements $x by one, then returns $x
echo x++; //=10, Post-increment, Returns $x, then increments $x by one
*/
//Logical operators (and, &&, or, ||, xor, !(not))
/*
$x=4; $y=6;
if($x==4 and $y==6) echo "mai";
if($x==4 && $y==6) echo "mai";
if($x != 5) echo "mai";
*/
//String operators
/*
$x = 'mua xuan có ';
$y = 'hoa mai';
echo $x.$y;  //concatenation
echo $x.=$y;  //concatenation assignment
*/
//Array operatos (+, ==, ===, !=, <>, !==)
$x = ["a" => "xuan", "b" => "ha"];
$y = ["c" => "thu", "d" =>"dong"];
print_r($x + $y); //union
var_dump($x==$y); //false, equality
var_dump($x===$y); //false, identity
var_dump($x != $y); //true, inequality
var_dump($x <> $y); //true, inequality
var_dump($x !== $y); //true, non-identity
?>