<?php
 
 class GpsFeature extends CarFeature{
   
    public function cost(){
        $this->car->cost() +2000;
    }
    public function desecription(){
        $this->car->descriptaion() . ',gps';
    }

}
?>