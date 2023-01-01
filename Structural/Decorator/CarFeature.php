<?php

abstract class CarFeature extends Car{
   
    private $car;

    public function __construct($car)
    {
        $this->car=$car;
        
    }
    
    abstract function cost();

    abstract function desecription();

}
?>