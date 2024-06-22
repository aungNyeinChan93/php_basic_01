<?php 

if(isset($_POST["username"]) && $_POST["password"] ){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    var_dump( $username , $password );
}else{
    print_r("Login first");
}
echo"<br>";
if (filter_has_var(INPUT_POST,"username") && filter_has_var(INPUT_POST,"password") ){
    echo "Your register is success ...";
}else{
    echo "register first ...";
}
echo "<br>";
if (isset($_GET["username"],$_GET["password"]  )){
    $username = $_GET["username"];
    $password = $_GET["password"];
    var_dump( $username , $password );
}else{
    print_r("plz register!");
}

echo"<br>";
