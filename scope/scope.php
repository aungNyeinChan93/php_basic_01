<?php 

declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("display_errors",1);

function makeHeader($name){
    echo "<h1>$name</h1>";
}
function lineBreak(){
    echo "<br>----------------------------------
    ---------------------------------------<br>";
}










require "view.php";

