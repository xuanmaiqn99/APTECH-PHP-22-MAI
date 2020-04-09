<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- COOKIE ---
 *
 * setcookie(name,value,expire,path,domain,secure,httponly);
 *expire: hết hiệu lực
 * setcookie must be set in top of file.
 *
 * NOTE : after setcookie, should be refresh page
 */
echo "<h1>1. COOKIE</h1>"; 
/*
 * EXERCISE 1 : Set cookie to store your name and name of your project
 *  which you wanna do and display it.
 *
 */
/*
 * SUGGESTION :
 * setcookie('myName', 'Nguyen Hai Nam',time() + 15);
 * if ($_COOKIE['myName']) {
 * echo "Value of cookie myName is : " . $_COOKIE['myName'];
 * }
 *
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$name = "name";
$value = "Bui Thi Xuan Mai";
setcookie($name, $value, time() + 30 );
if(!isset($_COOKIE[$name])) {
    echo "Cookie named '" . $name . "' is not set!";
} else {
    echo "Cookie " . $name . " is set! <br>";
    echo "Value is: " . $_COOKIE[$name];
}
?>