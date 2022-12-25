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
    public function getPaymentCard($cardNumber)
    {
        switch($cardNumber)
        {
            case '123':
                return new Visa();
            case '456':
                return new MasterCard();
        }     


        
    }
}

$bankfactory= new BankFactory();
$bankfactory.getIBank('A');
echo $bankfactory->withdrow();

$paymentCard= new BankFactory();
$paymentCard.getPaymentCard('123');
echo $bankfactory->getCardInfo();
