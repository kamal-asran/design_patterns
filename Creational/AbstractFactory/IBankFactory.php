<?php
Interface IBankFactory{
    public function getIBank($code);

    public function getPaymentCard($cardNumber);


}