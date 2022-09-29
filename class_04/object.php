<?php 
//oop - concept 
class Fruit {

    public $color;

    public function __construct($name){
        $this->name = $name;
        echo "Hello " . $this->name;
    }

    /*function show($color) {
        $this->color = $color;    
        echo "This fruit color is " . $this->color . "<br>";
    }*/
}

$backberry = new Fruit("Blackberry");

// $banana = new Fruit();
/*
$backberry->show('Black');
$banana->show('Yellow');
echo "<pre>";
var_dump($backberry);
echo "</pre>";

echo "<pre>";
var_dump($banana);
echo "</pre>";
*/