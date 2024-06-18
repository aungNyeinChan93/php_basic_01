<?php 

declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("display_errors",1);

function makeHeader($mess){
    echo "<h1> {$mess} </h1>";
}

function breakLine (){
    echo "<br>";
}


require "view.php";

