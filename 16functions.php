<?php

function test($num1, $num2)
{
    $total = $num1 * $num2;
    //echo "hi welcome to my web page";
    return $total;
}

$a = 465;
$b = 542;

for ($i = 0; $i < $a; $i++) {
    echo test($a, $b + $i) . "<br />";
}

