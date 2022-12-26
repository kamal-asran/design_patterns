<?php 

/*
proxy pattern is a layer between client code and the class that 
*/
class SmsProxy extends SmsService{
    private $num_of_words;
    public function __construct($num_of_words)
    {
        $this->num_of_words->$num_of_words;
        
    }
   
    public function send()
    {
        if($this->num_of_words <2000)
        {
            $sendsms = new SendSms();
            $sendsms->send();

        }
        else{
            return "you exceeded num of words";
        }
       
    }
}

$smsProxy= new SmsProxy(200);
echo $smsProxy.send();
