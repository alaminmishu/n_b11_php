<?php 

//indexed value
$season = array('winter',123,'autumn');//indexed array
// $season[1] = 'hello';
// echo($season); // Array to string conversion not possible
// print_r($season);
// printf($season);
// echo($season[1]);

var_dump($season);

echo "<br>";
echo "<br>";
echo "<br>";
/*
echo "<pre>";
print_r($season);
echo "</pre>";
*/
/*
for ($i=0; $i<3;$i++) {
     printf("%s ", $season[$i] . "<br>"); 
 }
*/
$salary = array('rahim' => 30000, 'karim' => 40000);

var_dump($salary);

echo $salary['karim'];
echo "<br>";


//Multidimentonal array
/*
[ 0 0 0]
[ 2 5 7]

*
**
***
****
*******
*/
/*
for ($i=0; $i < 8; $i++) { 
    for ($j=0; $j <= $i; $j++) { 
        echo "* ";
    }
    echo "<br>";
}
*/

// 2D array
$cars = array(
    array('BMW', 'red'),
    array('HONDA', 'blue')
);

echo "<pre>";
print_r($cars);
echo "</pre>";

$cars[0][1] = 'green';
echo $cars[0][1];