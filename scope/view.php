<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope</title>
</head>

<body>
    <?php

    makeHeader("local scope");
    function localScope(): void
    {
        $name = "local var";
        print "<pre>";
        echo $name;
    }
    ;
    localScope();
    // echo $name;                             // Undefined variable $name -> local scope;
    
    makeHeader("Global variable");
    $IamGlobalVar = "Global";               // this var has locate in global-area
    function test()
    {
        global $IamGlobalVar;               // global keyword make global-scope;
        // $IamGlobalVar= "Inside ";
        echo $IamGlobalVar . "<br>";
    }
    ;
    test();
    echo $IamGlobalVar;

    // makeHeader("Super Global variable");
    // $GLOBALS;
    // var_dump($GLOBALS);
    // lineBreak();
    // $_FILES;
    // var_dump($_FILES);
    // lineBreak();
    // var_dump($_GET);
    // lineBreak();
    // var_dump($_POST);
    // lineBreak();
    // var_dump($_COOKIE);
    // lineBreak();
    // var_dump($_ENV);
    // lineBreak();
    // var_dump($_SERVER);
    // lineBreak();
    // var_dump($_REQUEST);
    // lineBreak();
    // var_dump($_SESSION);
    // lineBreak();

    makeHeader("Static variable");
    function staticVariable(): int
    {
        static $counter = 0;
        return $counter++;
    }
    ;
    echo staticVariable() . "<br>";
    echo staticVariable() . "<br>";
    echo staticVariable() . "<br>";

    makeHeader("Function Parmeter");
    function sum(array $array): int
    {
        $total = 0;
        foreach ($array as $key => $value) {
            $total += $value;
        }
        return $total;
    }
    echo sum([10, 20, 30, 40, 50]);
    // echo sum(["mgmg","hal"]);
    
    makeHeader("variadic function");
    $variadicFunction = function (): int {
        $arguments = func_get_args();
        $total = 0;
        foreach ($arguments as $key => $value) {
            $total += $value;
        }
        return $total;
    };
    echo $variadicFunction(1, 2, 3, 435, 43, 2, 22) . "<br>";

    makeHeader("rest parameter");
    $restparameter = function (...$args) :int {
        $total = 0;
        foreach ($args as $value) {
            $total += $value;
        }
        return $total;
    };
    echo $restparameter(1, 2, 3,5,56,7,5);


    ?>
</body>

</html>