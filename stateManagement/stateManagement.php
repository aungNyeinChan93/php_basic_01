<?php

include_once ("../include_construct/function.php");

display();
makeHeader("state management");
breakLine();

makeHeader("Cookie :bool");

define("HOUR", 3600);
$return_customer = false;
if (!isset($_COOKIE["return"])) {
    setcookie("return", "1", time() + HOUR, "/");
} else {
    $return_customer = true;
}
echo $return_customer ? "welcome back!" : "weclome new comer!";


// setCookie
$test_cookie = setcookie("test", "1", time() + HOUR,"/");
echo "<br>";
print_r ($_COOKIE["test"]);
echo "<br>";
print_r($test_cookie);
echo "<br>";    
var_dump($test_cookie);