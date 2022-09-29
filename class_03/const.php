<?php 
//Constant 

const PI = 3.1416;
// define();


//const PI = 6.8797;
define("MSG", "Hello PHP");
define("msg", "Hello msg");

$example = "Hello Another, PHP";
var_dump($example);
//
echo "<h1 style='color:red'></h1>";
// echo strlen(MSG);

$text = explode(MSG, ',');
// var_dump($text);

$text2 = explode(',', $example);
var_dump($text2);

// var_dump($text2);

echo $text2[0]; 


echo "-------------";
echo "<br>";

echo MSG;

echo "<br>";
echo msg;

// CASE SENSETIVE;
echo "<br>";

echo PI;