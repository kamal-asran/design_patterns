<?php

 class RadioFeature extends CarFeature{
   
    public function cost(){
        $this->car->cost() +1000;
    }
    public function desecription(){
        $this->car->descriptaion() . ',radio';
    }

}
?>