<?php 
//while loop

/*
while(condition) {
    your code goes here...
}
*/

$i = 1;
$c = 0;
Write a php program using while loop 
to print even number between 15 to 50

output: 
16
18
20
...
50

/*
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
} */

do {
    //$c =+ $i;
    echo $i . ",";
    $i++;
}
while ($i <= 9);
echo $i;