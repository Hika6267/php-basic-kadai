<?php

class food {
 public $name;
 public $price;

public function _construct($name,price) {
    $this->name = $name;
    $this->price = $price;
}

public function show_price() {
    echo "Price: " . $this->price . "\n";
}
}


class Animal {
 public $name;
 public $hight;
 public $weight;
}

public function __construct($name, $height, $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
}


public function show_height() {
        echo "Height: " . $this->height . "\n";
    }

 $animal = new Animal('dog', 60, 5000);
 print_r($animal);
 echo '<br>';
 $animal->show_height();  

 ?>
 
