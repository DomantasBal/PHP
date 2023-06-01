<?php

// Functions
wowzers();


function wowzers()
{
    echo "This is a function executed";
    echo "<br>";
}

wowzers();


// Function parameters

function calc($param1, $param2)
{
    return $param1 + $param2;
}

$result = calc(8, 2);
echo $result;
