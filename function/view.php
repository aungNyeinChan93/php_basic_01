<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function </title>
</head>

<body>
    <div class="function">
        <h1 style="text-align:center; text-decoration: underline">Function</h1>
        <?php

        makeHeader("Function");
        function welcome(string $name): void
        {
            echo "welcome! {$name} <br>";
        }
        ;
        welcome("Aung");
        function sum(int $number1, int $number2): void
        {
            $result = $number1 + $number2;
            echo "Result is $result <br>";
        }
        sum(4, 5);
        $message = function (string $name): string {
            return "hello {$name}";
        };
        echo $message("chan");
        $result = $message("nyein");
        breakLine();
        echo $result;

        makeHeader("HTML tag return function");
        function sayName($name)
        {
            ?>
            <div class="HTML return container">
                Hello <strong style="color:red;"><?= $name ?></strong>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, repellendus.</p>
                <small>this is small</small>
                <input type="password" name="pass" id="testpass" placeholder="Enter password">
                <button type="button">Confirm</button>
                <?= breakLine(); ?>
                <?= breakLine(); ?>
                *************************************
            </div>
            <?php
        }
        ;
        sayName("ANC");
        breakLine();
        makeHeader("concat function with default parameter");
        function concat(string $str ,string $str2, $delimiter = " "){
            echo $str . $delimiter . $str2;
        };
        echo concat("hello","world");
        makeHeader("indexFind function");
        function indexfind(string $world,string $text){
            return strpos($text, $world);                   //strpos();
        }
        echo "finding index position is ". indexfind("chan","my name is chan"); // don't use 
        makeHeader("name arguments");
        $findindex = indexfind(world:"chan",text:"my name is chan");
        echo $findindex;
        //strpos(string $haystack, string $needle, int $offset = 0): int|false
        // $index = strpos("sky have no star","star",0);   
        // breakLine();
        // echo $index;

        $number = 9;
        $str = "Beijing";
        $txt = sprintf("There are %u million bicycles in %s.",$number,$str);  // f string 
        echo $txt; 

        makeHeader("ancher link create with f_String");
        function create_ancher($text,$href = "#",$target = "_seft"){
            $href = $href ? sprintf("href='%s'",$href): "#";
            $target = $target ? sprintf("target='%s'",$target): "";
            return "<a $href $target>$text</a>";
        }
        $link = create_ancher(text:"Google",href:"https://www.google.com",target:"_blank");
        echo $link;  
        ?>
        <!-- <a href="www.google.com">google</a> -->
        <?php 







        ?>

    </div>
</body>

</html>