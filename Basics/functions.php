<?php

// // Functions
// wowzers();


// function wowzers()
// {
//     echo "This is a function executed";
//     echo "<br>";
// }

// wowzers();


// // Function parameters

// function calc($param1, $param2)
// {
//     return $param1 + $param2;
// }

// $result = calc(8, 2);
// echo $result;


// GLOBAL SCOPE
// $x = "outside"; // Global scope

// function convert()
// {
//     global $x;
//     $x = "inside"; // Local scope
// }

// echo $x;

// echo "<br>";

// convert();

// echo $x;


// Built in Functions

// String Functions
$string = "hellooooooo";
echo strlen($string);

// Array Functions
$array = [22, 44, 33];
echo max($array);

sort($array);
print_r($array);
echo $array;
