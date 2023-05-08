<?php


class BankAccount
{
    private $balance;

    public function __construct($balance = 1000)
    {
        $this->balance = $balance;
    }

    public function __destruct($balance = 0)
    {
        $this->balance = $balance;
        echo "your balance is $this->balance. \n";
    }

    public function showBalance()
    {
        echo "your balance is $this->balance.\n";
    }
}

$acc = new BankAccount();
$acc->showBalance();
unset($acc);


?>