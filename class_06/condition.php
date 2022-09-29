<?php

$a = 5;



if ($a > 5) {
    echo "$a is grater than 5";
}

if ($a > 5) {
    echo "$a is grater than 5";
} else {
    echo "$a is qual to 5 or smaller than 5";
}

echo "<br>";

//Nested if else

if ($a > 5) {
    echo "$a is grater than 5";
} elseif ($a == 8) {
    echo "$a is equal to 5";
} else {
    echo "$a is smaller than 5";
}
/*
ternary operator:
$result = condition ? value1 : value2 (syntax) */
echo "<br>";

echo(($a % 2 == 0) ? "even" : "odd");
