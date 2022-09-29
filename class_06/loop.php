<?php 

//for loop
/*
for (initialization; condition; increment/decrement) { 
    # code...
}
*/


for ($i= 0; $i < 5; $i += 2) { 
    echo $i;
}
echo "<br>";

for ($i= 4; $i >= 0; $i--) { 
    echo $i;
}
echo "<br>";
for ($i= 1; $i <= 20; $i++) { 
    // echo (( $i % 3 == 0) ? $i : '');
    if ($i % 3 == 0) {
        echo $i;
        echo "<br>";
    }
}
