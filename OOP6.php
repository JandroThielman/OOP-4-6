<?php

    class Caroop6{

        public $name;
        public $price;
        public $currency;

        public function __construct($price, $name = "Een auto", $currency = "&euro"){
            $this->name = ucfirst($name);
            $this->price = $price;
            $this->currency = $currency;
        }

        public function formatPrice(){
            return number_format($this->price, 2, ',', '.');
        }

    }

    $car1 = new Caroop6(40000, currency: "$");
    // $car2 = new Car("BMW", "60000");

    // echo $car1->formatPrice() . "<br>";
    echo $car1->name . "<br>";
    echo $car1->currency;
    echo $car1->price . "<br><br>";

    // echo $car2->name . "<br>";
    // echo $car2->price . "<br>";

?>