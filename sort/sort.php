<?php

declare(strict_types=1);
error_reporting(E_ALL);

function makeHeader($name)
{
    echo "<h1>$name</h1>";
}
function lineBreak()
{
    echo "<br>------------------------------------------------------<br>";
}

// sort() || regular_flag   
makeHeader("array sort | regular_flag | ASC order");
$myArray = array(12, 1, 2, 4, 56, 23, 545, 7656, 23, 22, 33, 0);
print_r($myArray);
lineBreak();
$res = sort($myArray);
print_r($res);
lineBreak();
print_r($myArray);
lineBreak();
// sort() | SORT_STRING flag
makeHeader("array sort |SORT_STRING flag");
$names = ['vv', 'ff', 'aa', "bb", "dd", "ee"];
print_r($names);
lineBreak();
$res = sort($names, SORT_STRING);
print_r($res);
lineBreak();
print_r($names);
lineBreak();


// ksort(array , flag ):bool  ~~ keysort/ note->use in associative array
makeHeader("ksort method");
$customers = [
    "nyein" => [
        "age" => "20",
        "gender" => "female",
    ],
    "chan" => [
        "age" => "30",
        "gender" => "male"
    ],
    "aung" => [
        "age" => "20",
        "gender" => "male"
    ]
];
ksort($customers, SORT_ASC);
print "<pre>";
print_r($customers);
lineBreak();

// krsort();
makeHeader("krsort method");
krsort($customers, SORT_STRING);
print_r($customers);







