<?php 

include_once("../include_construct/function.php");
display();
makeHeader("Session ");

echo "session path => ". session_save_path();
breakLine();
echo ini_get("session.save_path");

breakLine();
session_start();

$_SESSION["user"]= "admin";
var_dump($_SESSION["user"]);


$_SESSION["roles"] = array("editer","approver","admin") ;
print_r($_SESSION["roles"]);
print_r($_SESSION["roles"][2]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center; width:500px ; margin:0 auto; background:red">
        <a href="profile.php"> Go To Profile</a>
    </h1>
</body>
</html>
