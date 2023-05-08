<?php
/* Basic credit card

This is a very simple CreditCard Class. So lets get started.

You have a Credit Card with a 16 digit credit card no and 4 digits pin number. You can change your pin number if you wanted but you cannot change 16 digit no.

Your spending limit is 1000. You can spend money in shopping using 16 digit credit card no and pin number but spending amount should be less than or equal to 1000.

So let's write this CreditCard class.


*/

class CreditCard
{
    const CARDNUMBER = '1111222233334444';
    private $totalBalance = 1000;
    private $pinNumber = '1234';

    public function getCardnumber()
    {
        return self::CARDNUMBER;
    }

    public function getTotalBalance()
    {
        return $this->totalBalance;
    }

    public function setTotalBalance($balance)
    {
        $this->totalBalance = $balance;
    }

    public function setPin($newPin)
    {
        if (preg_match("/^[1-9]\d{3}$/", $newPin)) {
            $this->pinNumber = $newPin;
        } else{
            echo "Pin number should be a string of 4 digits and first digit should not be zero.";
        }
    }

    public function getPin(){
        return $this->pinNumber;
    }

    public function shopping($cardNumber, $pinNumber, $spendingMoney){
        if($cardNumber === $this->getCardnumber() && $pinNumber === $this->getPin()){
            if($spendingMoney <= $this->getTotalBalance()){
                $remBalance = $this->getTotalBalance() - $spendingMoney;
                $this->setTotalBalance($remBalance);
                echo "You have spend $spendingMoney pounds and your remaing balance is $remBalance.";
            } else{
                echo "You dont have enough balance in your account.";
            }
        } else{
            echo "Your card number or pin is invalid.";
        }
    }


}

$ccObj  = new CreditCard;
$ccObj->setPin('3344');

$ccObj->shopping('1111222233334444','3344',200);
$ccObj->getTotalBalance();



?>