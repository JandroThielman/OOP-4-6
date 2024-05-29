<?php

    class Caroop5{

        public $name;
        public $price;

        public function __construct($name, $price){
            $this->name = ucfirst($name);
            $this->price = $price;
        }

        public function formatPrice(){
            return number_format($this->price, 2, ',', '.');
        }

    }

    $car1 = new Caroop5("audi", 60000);
    $car2 = new Caroop5("BMW", 60000);

    echo $car1->name . "<br>";
    echo $car1->price . "<br><br>";

    echo $car2->name . "<br>";
    echo $car2->price . "<br>";

?>