<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- VARIABLES -->
    <h2>Variables</h2>
    <?php
    $name = "Domantas ";
    $number = 123;
    echo $name . $number;

    // CONCATENATION OF VARIABLES
    $list = "<ul>" . "<li>" . $number .  "</li>" .  "</ul>";
    echo $list;
    ?>


    <!-- ARRAYS -->
    <h2>Arrays</h2>
    <?php
    $numbersList = array(123, 132, 21, 312, 321,);
    $array = [0, 1, 2, 3, 4, 5, 6, 7, 8];
    echo $numbersList;
    echo $numbersList[0];
    echo $array[3];
    ?>

    <!-- ASSOCIATIVE ARRAYS -->
    <h2>Associative arrays</h2>
    <?php
    $asocArray = ["first" => 1, "second" => " This is second element in the array"];
    echo $asocArray["second"];
    ?>

    <!-- CONDITIONALS -->
    <h2>Conditionals</h2>

    <?php

    if (3 < 10) {
        echo "Yeep" . "<br>";
    } else {
        echo "Nope" . "<br>";
    }


    $expression = 33;
    // $expression = 3;
    switch ($expression) {
        case 1:
            echo "case 1";
            break;
        case 2:
            echo "case 2";
            break;
        case 3:
            echo "case 3";
            break;

        default:
            echo "no cases present with this value";
    }

    ?>

    <h2>Loops</h2>
    <?php

    // WHILE
    $counter = 0;
    while (10 > $counter) {
        echo "Counter is " . $counter . "<br>";
        $counter++;
    }

    // FOR 
    for ($i = 0; $i < 10; $i++) {
        echo $i . "<br>";
    }

    // FOR EACH LOOP (ARRAYS)

    $numbers = ["somethng", 2, 3];
    foreach ($numbers as $number) {
        echo $number . "<br>";
    }
    ?>

    <!-- CONSTANTS -->
    <h2>Constants</h2>

    <?php

    define("NAME", 1000);
    echo NAME;

    ?>





</body>

</html>