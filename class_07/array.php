<?php 
$person = array('name' => 'Fred', 'age' => 42, 'country' => 'USA');

echo "<pre>";
// var_dump($person);
print_r($person);
echo "</pre>";

// echo $person['country'];
/*
foreach ($variable as $key => $value) {
    # code...
} */

foreach ($person as $k => $v) {
    echo "Fred's $k is $v" . "<br>";
}

$person2 = array('Fred', 42, 'USA');

foreach ($person2 as $value) {
    echo $value . "<br>";
}

echo count($person2) . "<br><br><br>";

for ($i = 0; $i < count($person2); $i++) { 
    print_r($person2[$i] . "<br>");
}

unset($person2[1]);

$person2[0] = 'married';
// array_pop($person2);
// array_shift($person2);
array_push($person2, 'married');



echo "<pre>";
// var_dump($person);
print_r($person2);
echo "</pre>";


