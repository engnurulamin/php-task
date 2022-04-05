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
       $this->withdraw($amount); 
       $account->balance += $amount->value();
    }

    public function withdraw(Money $amount){
        if($this->balance < $amount->value()){
            throw new Exception("Withdrawl amount larger than balance");
        }
        $this->balance -= $amount->value();
    }
}