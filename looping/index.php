<?php

declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("diaplay_errors",1);




echo"<h1>Looping</h1>";

function makingheader($mess){
    echo "<h1> {$mess} </h1>";
}
function breakline(){
    echo "<br>";
}











require "view.php";