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

    // print_r($array);


    ?>




</body>

</html>