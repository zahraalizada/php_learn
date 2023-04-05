<?php

class Account {

    // Properities, Attributes, Fields

    private $id = 1;
    private $name = "Mustafa Murat";
    private $balance = 1000;


    // Methods
    public function __construct($id,$name,$balance)
    {
        $this->id= $id;
        $this->name = $name;
        $this->balance = $balance;
    }

//    public function getId(){
//        return $this->id;
//    }
//    public function getName(){
//        return $this->name;
//    }
//    public function getBalance(){
//        return $this->balance;
//    }


    public function showInfos(){
        echo "Bilgiler <br>";
        echo "Id: $this->id <br>";
        echo "Isim: $this->name<br>";
        echo "Balans: $this->balance<br>";
    }
}

class SpecialAccount extends Account{

    private $interest;

    public function __construct($id, $name, $balance, $interest)
    {
        parent::__construct($id, $name, $balance);
        $this->interest = $interest;
    }

    public function getInterest(){
        return "Interest: ".$this->interest;
    }
}

$account1 = new SpecialAccount(1,"Ali",2000,3000);

echo $account1->showInfos();
echo $account1->getInterest();


?>