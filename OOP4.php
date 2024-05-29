<?php

    class Caroop4{

        public $name;
        public $price;

        public function formatPrice(){
            return number_format($this->price, 2, ',', '.');
        }

        public function setName($name){
            
            if (isset($_POST['strtoupper'])) {
                $this->name = strtoupper($name);
            } else {
                $this->name = ucfirst($name);
            }
            
        }

    }

    $car1 = new Caroop4();
    $car1->setName("audi");
    $car1->price = 5000;

    echo $car1->name . "<br>";
    echo $car1->formatPrice();

    echo "  <form method='post'>

                <button type='submit' name='strtoupper'>Click</button>
    
            </form>";

?>