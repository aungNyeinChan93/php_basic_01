<?php 

declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("display_errors",1);
print "<pre>";

function makeHeader($mess){
    echo "<h1>$mess</h1>";
};

function linebreak(){
    echo "<br>";
};

makeHeader("Variable construct");
// isset(mixed $var):bool 
makeHeader("isset construct");
$a;
$b = "test";
$aResult = isset($a);                // for check has variable or not_null : bool-> 
$res = isset($b);               
var_dump($res);
var_dump($aResult);

$testArray = ["key"=>"value","key1"=> "value1"];
$res = isset($testArray["key1"]);
print_r($res);                      //  :1
echo"<br>";
var_dump($res);                     //  :bool(true)

makeHeader("empty() construct");
// empty(mixed $var):bool
$x = "";
$y;
$z=null;
$w= "have";
$res = empty($w);                   //  have:false,not:true;     
var_dump($res);
echo "------------<br>";

$customer = [
    "username"=> "aung",
    "email"=> "chan",
];
$res11 = !empty(isset($customer["username"]));
var_dump($res11);
if($res11){
    echo "have && not empty";
}else{
    echo "not have";
}