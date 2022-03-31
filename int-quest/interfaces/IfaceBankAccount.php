<?php

Interface IfaceBankAccount
{
    public function __construct(Money $openingBalance);
    public function transfer(Money $amount, BankAccount $account);
    public function balance();
    public function deposit(Money $amount);
    public function withdraw(Money $amount);
}