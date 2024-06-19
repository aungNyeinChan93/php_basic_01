<?php

$file = fopen("../fileOperation/test.txt","w");
fwrite($file,"hello world2!");
fclose($file);

// echo file_get_contents($file);

setcookie("name","value", time()+60,"/");
setcookie("name1","value1", time()+60,"/");
print "<pre>";
var_dump($_COOKIE);


$_SESSION["NAME"]= "SESSION1";
var_dump($_SESSION);

