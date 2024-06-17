<?php

declare(strict_types= 1);
error_reporting(E_ALL);

$test = "hello world ";

echo "{$test} :: index.php";

$message = "hello world ";

$testArray = ["hi","test","hello"];

$is_edit = false;
$is_delete = false;
$is_admin = true;
$can_approve = true;
$is_login   = true;
$is_logout = false;
function makeHeading (string $message) {
    echo "<h1>{$message} <br></h1>";
}
function breakLine():void{
    echo "<br>";
}


require "view.php";

