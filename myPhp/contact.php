<?php
echo "About PHP";



class Car{

    public $color;
    public $model;

    public function __construct($color,$model){
        $this-> color = $color;
        $this-> model = $model;
    }

    public function message() {
        return "My car is "  . $this->color. " " .$this->model. "!";
    }
}

echo "<br>";

$myCar = new Car ("black", "Volvo");
echo $myCar-> message();

