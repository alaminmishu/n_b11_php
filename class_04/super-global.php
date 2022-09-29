<?php 
//SUPER GLOBAL VARIABLE
//MOST USES
 $a = 5;



//$a = 1;
//$b = 2;

function sum() {
    //$a = 9;
    $b = 4;
    echo "MULTIPLY is: " . ($GLOBALS["a"] * $b);
    echo "<br><br>";
}



sum();


echo $a;


//echo 'Hello PHP ' . $a;