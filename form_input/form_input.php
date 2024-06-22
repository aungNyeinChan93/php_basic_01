<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="">
   
    <div class="container ">
    <div class="flag-container">
        <?php
        if (isset($_SESSION["noti"])) {
            echo $_SESSION["noti"];
            unset($_SESSION["noti"]);
        }
        ?>
    </div>
        <div class="row mt-5 ">
            <div class="col-5 mt-5 bg-info rounded p-4 ">
                <h3>Single CheckBox</h3>
                <form action="" method="POST">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox" value="confirm">
                        <label class="form-check-label" for="checkbox">confirm</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-5 ms-3 mt-5 bg-secondary text-white rounded p-4 ">
                <?php
                // single check_box
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "request method is post method <br>";
                    if (isset($_POST["checkbox"])) {
                        var_dump($_POST["checkbox"]);
                    } else {
                        echo "not confirm";
                    }
                }
                ?>
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-5 mt-5 bg-info rounded p-4">
                <form action="" method="POST">
                    <h3>Multiple CheckBox</h3>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="red" name="color[]" value="red">
                        <label class="form-check-label" for="red">red</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="green" name="color[]" value="green">
                        <label class="form-check-label" for="green">green</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="blue" name="color[]" value="blue">
                        <label class="form-check-label" for="blue">blue</label>
                    </div>
                    <h3>Radio_button</h3>
                    <div class="mb-3 form-check">
                        <input type="radio" class="form-check-input" id="male" name="gender" value="male">
                        <label class="form-check-label" for="male">male</label>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="radio" class="form-check-input" id="female" name="gender" value="female">
                        <label class="form-check-label" for="female">female</label>
                    </div>
                    <h3>Select-Box</h3>
                    <div class="SELECT mb-3 form-ckeck">
                        <label class="form-check-label" for="bg-color">Background Color</label>
                        <select class="form-select" name="bg-color" id="bg-color">
                            <option value="no-select">SELECT_BG</option>
                            <option value="red">RED</option>
                            <option value="green">GREEN</option>
                            <option value="blue">BLUE</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-5 ms-3 mt-5 bg-secondary text-white rounded p-4 ">
                <?php
                // multiple check-box
                if (($_SERVER["REQUEST_METHOD"]) == "POST") {
                    echo "Post method...<br>";
                    if (isset($_POST["color"])) {
                        // var_dump($_POST["color"])  ;
                        foreach ($_POST["color"] as $c) {
                            echo $c . "<br>";
                        }
                    }
                }
                // radio button
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo 'Post method <br>';
                    if (isset($_POST["gender"])) {
                        var_dump($_POST["gender"]);
                    } else {
                        echo "unChecked";
                    }
                }
                // select box
                if (!empty(isset($_POST["bg-color"]))) {
                    $bg_Color = $_POST["bg-color"];
                    if ($bg_Color == "no-select") {
                        $_SESSION["noti"]= "<br>
                         <div class='alert alert-danger' role='alert'>
                            Please select bg-color!
                        </div>   
                        ";
                    }else{
                        echo "<br>". $bg_Color;
                    }

                } else {
                    echo "No select";
                }

                ?>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>