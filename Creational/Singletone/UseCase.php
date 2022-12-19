<?php
/*
Singleton Design Pattern Use Case 
we need to prevent  creating multi objects and one object can be created from Counter Class 
this can't be done here 
*/
class Counter{
    private $counter;
    
    public function Counter()
    {
        
    }
    public function increaseCounter(){
        $this->counter++;
        return $this->counter;
    }

}
    $counter1=New Counter();
    $counter1Value=$counter1->increaseCounter();
    $counter2=New Counter();
    $counter2Value=$counter2->increaseCounter();
    $counter2Value=$counter2->increaseCounter();

    echo 'couter1 value = '.$counter1Value .' and couter2 value = '.$counter2Value; 
?>