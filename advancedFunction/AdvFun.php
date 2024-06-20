<?php 

declare(strict_types= 1);
error_reporting(E_ALL);
ini_set("display_errors",1);

// array_map
function double(int $num):int{
    return $num *2;
}
$numbers = [10,20,30,40,50];
$res = array_map("double", $numbers);           //  array_map(callback function  , array): array
print "<pre>";
print_r($res);


$Expo = array_map(function($num){
    return $num**2;
}, $numbers);
print_r($Expo);

$persons = ["aung","myamya","chan"];

$res = array_map(function($p){
    return  $p === "chan";
}, $persons);
print_r($res);

$mess = "hello";
$useFunction = function() use($mess){
    echo "$mess";
};
$useFunction();