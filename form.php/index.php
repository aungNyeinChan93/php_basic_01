<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once "../form.php/function.php";

pre();

makeHeader("Form");
define("DD", __DIR__);
print_r(DD);
breakLine();

// if (isset($_POST["username"]) && $_POST["password"]){
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     var_dump($username, $password);
// }else{
//     echo "Register First";
// };
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Form demo</title>
</head>

<body style="background:gold; color:white;">

    <div class="container">
        <form class="form-control  mx-auto px-4 shadow-lg" action="index.php" method="post">
            <div class="input-group">
                <label for="username" class="me-3 fw-bold fs-2">UserName</label>
                <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="input-group">
                <label for="password" class="me-3 fw-bold fs-2">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="input-group">
                <input type="submit" class=" btn btn-info" value="Register">
            </div>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>


<?php

// filter_has_var VS isset
$_POST["email"] = "anc@gmail.com";

if (isset($_POST["email"])) {
    echo "true ... ";       //true
} else {
    echo "false";
}
;
if (filter_has_var(INPUT_POST, "email")) {
    echo "true";
} else {
    echo "false";           //flase
}
breakLine();


/*  It’s commonly used to verify if a variable is available, 
especially when dealing with data received via methods like GET, POST, or cookies*/
if (filter_has_var(INPUT_POST, "username")) {
    // sanitize data 
    $userName = filter_var($_POST["username"], FILTER_SANITIZE_STRING);      // Deprecated -> use htmlspecialchars || FILTER_SANITIZE_FULL_SPECIAL_CHARS
    $clean_username = filter_var($userName,FILTER_SANITIZE_SPECIAL_CHARS);
    var_dump(htmlspecialchars($clean_username));
} else {
    echo ": false => username require .. ";
}

?>