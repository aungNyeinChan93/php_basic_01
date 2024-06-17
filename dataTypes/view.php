<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTypes</title>
</head>

<body>
    <h1 style="text-align:center">Data Types From View ...</h1>

    <div class="container">
        <p><?= $test ?></ph>
        <p><?php echo $message[0]; ?></p>
        <p><?php echo strlen($message); ?></p>
        <div>
            <?php
            makeHeading("foreach");
            foreach ($testArray as $key => $value) {
                // echo $value; 
                echo $key . "= " . $value . "<br>";
                breakLine();
            }
            ; ?>
        </div>

        <div>
            <p>
                <?php
                makeHeading("Control-flow");
                //sampale scenario of if-statement 
                if ($is_admin) {
                    $is_edit = true;
                    $is_delete = true;
                    // $can_approve = false;
                    echo "welcome your dashboard <br>";
                    echo "Admin:";
                    var_dump($is_admin);
                    if ($can_approve) {
                        echo " <br> Plz approve the pending request lists...";
                    } else {
                        echo "<br> update your role...";
                    }
                } else {
                    echo "Your are not admin user";
                }
                ?>
            </p>

            <div class='Embedded if-else'>
                <?= makeHeading("Embedded if-else "); ?>
                <?php if ($is_admin && $is_login): ?>
                    <a href="#">Edit </a>
                    <?= breakLine(); ?>
                <?php elseif ($is_logout): ?>
                    <a href="#">Login</a>
                <?php else: ?>
                    <a href="#">View Only</a>
                <?php endif; ?>
            </div class='if-else'>
        </div>

        <div class="ternary">
            <?php
            makeHeading("Ternary");
            $age = "20";
            $result = ($age >= 18) ? "<h5>You are adult :{$age} years old</h5>" : "<h5>You are child :{$age} years old </h5>";
            echo $result;
            ?>
            <?php
            $can_nightOut = "go night out";
            $go_school = "go to school";
            $go_club = $can_nightOut ?: $go_school; // return "go to club";
            echo $go_club;
            breakLine();
            ?>
            <?php
            makeHeading("changing ternary ");
            $is_avaliable = true;
            $is_credit = true;
            $return_message = $is_avaliable ? (
                $is_credit ? "Can use your credit" : "not enought credit"
            ) : "not avaliable";
            echo $return_message;
            ?>
        </div>
        <div class="switch">
            <?php
            makeHeading("Switch");
            $display_mess = "";
            $userType = "";
            switch ($userType) {
                case "admin":
                    $display_mess = "you are admin role";
                    break;
                case "user":
                    $display_mess = "you are user role";
                    break;
                default:
                    $display_mess = "plz login first";
            };
            echo $display_mess;
            ?>
        </div>
    </div>

</body>

</html>