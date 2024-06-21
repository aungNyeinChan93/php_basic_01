<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <h1>Profile Page</h1>
    <?php
    session_start();
    $_SESSION["user"] = "admin";
    $_SESSION["roles"] = ["editor,approver,admin"];

    if (isset($_SESSION["user"])) ?>

    <p>Welcome <?php echo $_SESSION["user"] ?></p>

    <?php
    if (isset($_SESSION["roles"])) ?>

    <p>Current Roles :</p>
    <?php foreach ($_SESSION["roles"] as $key => $role) {
        ?>
        <ul>
            <li><?php echo $role ?></li>
        </ul>
        
    <?php 
    }

    session_destroy();
    ?>

   

</body>

</html>