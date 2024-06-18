<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping </title>
</head>

<body>
    <div class="looping">

        <?php
        makingheader("for loop");
        for ($i = 0; $i <= 10; $i++) {
            echo $i;
        }
        breakLine();
        for ($i = 1; $i <= 10; $i++) {
            echo $i . ".  Love U " . "<br>";
        }
        makingheader("while loop");
        $total = 0;
        $num = 0;
        while ($num <= 10) {
            $total += $num;
            $num++;
            echo $num . "<br>";
        }
        ;
        echo "total :" . $total . "<br>";
        makingheader("Do while loop");
        $totalCount = 0;
        $counter = 0;
        do {
            $counter++;
            $totalCount += $counter;
            echo $totalCount . "<br>";
        } while ($counter <= 10);
        echo "totalCount: " . $totalCount . "<br>";
        makingheader("Break method && Continue method");
        for ($i = 1; $i <= 10; $i++) {
            if ($i === 3) {
                continue;           // skip 
            } else if ($i === 7) {
                break;              // stop
            }
            echo $i . "<br>";
        }
        makingheader("continue ");
        for ($i = 0; $i < 10; $i++) {
            if ($i % 2 == 0) {
                continue;
            }
            echo $i . "<br>";
        }
        makingheader("Foreach loop");
        $customers = array("mgmg", "aungaung", "hlahla", "myamya");
        foreach ($customers as $customer) {
            echo $customer . "<br>";
        }
        for ($i = 0; $i < count($customers); $i++) {
            echo $i + 1 . " : " . $customers[$i] . "<br>";
        }
        makingheader("associative array ");
        $arr = array('key' => 'value', 'fruit' => 'mango', 'vegetable' => 'tomato', 'thing' => 'bag');
        foreach ($arr as $key => $value) {
            echo $key . ' => ' . $value . '<br>';
        }
        ?>

    </div>
</body>

</html>