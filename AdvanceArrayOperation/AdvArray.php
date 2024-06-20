<?php
declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

function makeHeader($mess)
{
    echo "<h1>$mess</h1>";
}
;

function linebreak()
{
    echo "<br>";
}
;

echo "<pre>";

makeHeader("foreach");
$lengths = [10, 20, 30, 40];
$area = [];
foreach ($lengths as $length) {
    $area[] = $length ** 2;
}
;
var_dump($area);

makeHeader("array_map()");
$area = array_map(function ($length) {
    return $length ** 2;
}, $lengths);
print_r($area);

makeHeader("array_filter");
$area = array_filter($lengths, function ($length) {
    return $length == "20";
});
print_r($area);


function odd_number(array $numbers): array
{
    $odd_numbers = [];
    foreach ($numbers as $num) {
        if ($num % 2 == 1) {
            $odd_numbers[] = $num;
        }
    }
    return $odd_numbers;
};
$res = odd_number([11,12,13,14,15,16,17]);
print_r($res);

function even_num(array $numbers):array{
    $even_number = array_filter($numbers, function ($num) {
        return $num % 2== 0;
    });
    return $even_number;
};
$res = even_num([11,12,13,6,15,16,18]);
print_r($res);

makeHeader("array_reduce");
$numbers = [10,20,30,40];
$total = array_reduce($numbers, function ($carry, $number) {
    return $carry + $number;
});
print_r($total);