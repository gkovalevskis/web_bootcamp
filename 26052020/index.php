<?php
    class Apple {
        //properties (public, protected or private)
        public $name; 
        public $color;
        public $country;

        //methods

        public function __construct($name, $color, $country){
            $this->name = $name;
            $this->color = $color;
            $this->country = $country;
        }

        public function displayAppleType(){
            //echo "This is something.";
            echo $this->name . " " . $this->color . " " . $this->country;
        }
        public function getName(){
            if($this->name!=""){
                return $this->name;
            }
        }
        public function setName($newName){
            $this->name = $newName;
        }
    }
    $apple = new Apple("Red gold", "Red", "France");//change to object
    $apple2 = new Apple("Antonovka", "Yellow", "Latvia");
    //echo $apple->name;//(true because public)
    //echo $apple->color;//(false because protected)
    //echo $apple->contry;//(false because private)
    //$apple->displayAppleType();
    //Apple::displayAppleType();
    echo $apple->displayAppleType();
    echo "</br>";
    echo $apple2->displayAppleType();
    echo "</br>";
    echo $apple2->getName();
    echo "</br>";
    $apple->setName("Cukurītis");
    echo "</br>";
    echo $apple->getName();
    echo "</br>";

    class Car {
        public $wheelsCount;
        public $driveType;
        public $color;
        public $doorsCount;

        public function __construct($wheelsCount, $driveType, $color, $doorsCount){
            $this->wheelsCount = $wheelsCount;
            $this->driveType = $driveType;
            $this->color = $color;
            $this->doorsCount = $doorsCount;
        }
        public function setColor($color){
            $this->color = $color;
        }
    }

    class Make extends Car {
        public $make;
        public $model;
        public $package;
        public $year;
    
        public function __construct($make, $model, $package, $year){
        $this->make = $make;
        $this->model = $model;
        $this->package = $package;
        $this->year = $year;
        }
        public function setNewColor(){
            $color = parent::setColor("Red");
            return $color;
        }
    }
    echo "</br>";
    $car = new Make("Audi", "A6", "Quattro", "2020");
    echo "Color: " . $car->color;
    $car->setColor("Grey");
    echo "</br>";
    echo "Color: " . $car->color;
    echo "</br>";
    $car->setNewColor();
    echo "Color: " . $car->color;
    echo "</br>";


?>    
    