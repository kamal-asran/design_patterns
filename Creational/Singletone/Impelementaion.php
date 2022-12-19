<?php
/*
Singleton Design Pattern Impelementation
first we need to make the constructor  private so we prevent creating multi objects using new keyword
then we declare private static object from the same class type using new
then we declare public static method  to return this object every time new object is created
*/
class Counter{
    private $counter;
   
    public static $counterobject;

    private function Counter()
    {
       return "object created"; 
    }
    
    public static function getInstance()
    {
        if(!isset(self::$counterobject))
        {
            self::$counterobject = new Counter();
        }
         return self::$counterobject;
    }

    public function increaseCounter(){
        $this->counter++;
        return $this->counter;
    }

}
    $counter1=Counter::getInstance();
    $counter1Value=$counter1->increaseCounter();
    $counter2=Counter::getInstance();
    $counter2Value=$counter2->increaseCounter();

    echo 'couter1 value = '.$counter1Value .' and couter2 value = '.$counter2Value; 
?>