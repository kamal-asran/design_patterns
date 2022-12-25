<?php
Class BankFactory implements IBankFactory{

    public function getIBank($code)
    {
        switch($code)
        {
            case 'A':
                return new BankA();
            case 'B':
                return new BankB();
        }     


        
    }
}

$bankfactory= new BankFactory();
$bankfactory.getIBank('A');
echo $bankfactory->withdrow();
