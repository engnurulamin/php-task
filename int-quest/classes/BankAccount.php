<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance->value();
    }

    public function balance()
    {   
        return $this->balance;
    }

    public function deposit(Money $amount)
    { 
        return $this->balance += $amount->value();
    }

    public function transfer(Money $amount, BankAccount $account)
    {
       $this->balance -= $amount->value(); 
       $account->balance += $amount->value();  
    }

    public function withdraw(Money $amount){
        return $this->balance -= $amount->value();
    }
}