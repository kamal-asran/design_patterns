<?php

class Tyota extends Car{

    public function cost(){
        return 4000;
    }
    
    public function desecription(){
        return 'Tyota Car';

    } 
}

$toyta =new Tyota();
$toyat_with_radio= new RadioFeature($toyta);

?>