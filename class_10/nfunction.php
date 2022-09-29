<?php 
function calc($x, $y){
    $a = $x;
    $b = $y;
    function sum($a, $b){
        return ($a + $b);
    };

    $retval = [
    "sum" => sum($x, $y) //pass in the param for child function sum()
    ];

    return $retval;
}
//Bind function to variable
$calcs = calc(1,2);

//Return all properties as an array
var_dump($calcs); 

//access the sum property
echo ($calcs['sum']);